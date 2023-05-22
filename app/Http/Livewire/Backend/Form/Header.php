<?php

namespace App\Http\Livewire\Backend\Form;

use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Header extends Component
{
    public $currentUrl;
    public function mount()
    {
        $this->currentUrl = Route::currentRouteName();
    }
    public function render()
    {
        return view('livewire.backend.form.header');
    }
}
