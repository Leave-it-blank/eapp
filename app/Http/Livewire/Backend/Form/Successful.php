<?php

namespace App\Http\Livewire\Backend\Form;

use Livewire\Component;

class Successful extends Component
{
    public function render()
    {
        return view('livewire.backend.form.successful')
            ->layout('components.user-layout');
    }
}
