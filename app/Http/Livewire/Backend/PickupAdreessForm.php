<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;

class PickupAdreessForm extends Component
{
    public array $formData = [
        'category' => '',
        'type' => '',
        'weight' => 2,
        'quantity' => '',
        'condition' => 'working',
        'age_of_item' => '',
        'brand' => '',
        'model' => '',
        'reason_for_selling' => '',
        'mode_of_disposal' => 'recycle',


    ];
    public function render()
    {
        return view('livewire.backend.pickup-adreess-form');
    }
}
