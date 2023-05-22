<?php

namespace App\Http\Livewire\Backend\Address;

use App\Models\Address;
use Livewire\Component;

class Edit extends Component
{
    public $aid;
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

    public function mount($id) {
        $this->aid = $id;
        $address = Address::findorfail($id);
        $this->form["name"] = $address->full_name;
        $this->form["address"] = $address->address_lane;
        $this->form["phone"] = $address->mobile_number;
        $this->form["city"] = $address->city;
        $this->form["country"] = $address->country;
        $this->form["pin_code"] = $address->pin_code;
        $this->form["is_default"] = $address->is_default;
        $this->form["email"] = $address->email;
        $this->form["state"] = $address->state;
        $this->form["address_type"] = $address->address_type;
        $this->form["locality"] = $address->landmark;


    }

    public function submit(){
        $this->validate();
        Address::findorfail($this->aid)->update([
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
        ]);
        session()->flash('success', 'Address updated successfully');
        return redirect()->route('dashboard');
    }
    public function render()
    {
        return view('livewire.backend.address.edit');
    }
}
