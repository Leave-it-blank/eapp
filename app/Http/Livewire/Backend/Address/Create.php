<?php

namespace App\Http\Livewire\Backend\Address;

use App\Models\Address;
use Livewire\Component;

class Create extends Component
{
    public $form = [
        'name' => '',
        'address' => '',
        'phone' => '',
        'city' => '',
        'country' => '',
        'pin_code' => '',
        'is_default' => 0,
        'email' => '',
        'state' => '',
        'address_type' => 'home',
        'locality' => '',
    ];

    protected $rules =  [
        'form.name' => 'required',
        'form.address' => 'required',
        'form.phone' => 'required',
        'form.city' => 'required',
        'form.country' => 'required',
        'form.pin_code' => 'required',
        'form.is_default' => 'required',
        'form.email' => 'required|email',
        'form.state' => 'required',
        'form.address_type' => 'required',
        'form.locality' => 'required',
    ];

    public function submit(){
        $this->validate();
        Address::create([
           'full_name' => $this->form['name'],
           'address_lane' => $this->form['address'],
           'mobile_number' => $this->form['phone'],
           'city' => $this->form['city'],
           'country' => $this->form['country'],
           'pin_code' => $this->form['pin_code'],
           'is_default' => $this->form['is_default'],
           'email' => $this->form['email'],
           'state' => $this->form['state'],
           'address_type' => $this->form['address_type'],
           'landmark' =>$this->form['locality'],
            'user_id' => auth()->user()->id
       ]);
        session()->flash('success', 'Address added successfully');
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.backend.address.create')
            ->layout('layouts.app');
    }
}
