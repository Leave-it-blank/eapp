<?php

namespace App\Http\Livewire\Layout;

use Livewire\Component;
use Illuminate\Support\Facades\Route;

class UserNav extends Component
{
    public $currentUrl;
    public function mount()
    {
        $this->currentUrl = Route::currentRouteName();
    }

    public function render()
    {

        return view('livewire.layout.user-nav');
    }
}
