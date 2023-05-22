<?php

namespace App\Http\Livewire\Backend;

use App\Models\Address;
use App\Models\Item;
use App\Models\Order;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use Livewire\WithFileUploads;
class PickupForm extends Component
{

    use WithFileUploads;

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
        'comment' => '',
        'file' => '',

    ];

    protected $rules = [
        'formData.category' => 'required|in:Electronics,laptops,mobile,tablets, appliance,Others',
        'formData.type' => 'required',
        'formData.weight' => 'required',
        'formData.quantity' => 'required',
        'formData.condition' => 'required',
        'formData.age_of_item' => 'required',
        'formData.brand' => 'required',
        'formData.model' => 'required',
        'formData.reason_for_selling' => 'required',
        'formData.mode_of_disposal' => 'required',
        'formData.comment' => 'required|min:6|max:255',
        'formData.file' => ''
    ];
public function submit()
    {
        $this->validate();
     // Redirect::route('eWasteForm_adreess');
     try {
         $order = Order::create([
             'address_id' => Address::where('user_id', auth()->user()->id)->first()->id,
             'user_id' => auth()->user()->id,
             'pick_up_date' => null,
             'pick_up_time' => null,
             'full_filled' => false,
             'waiting' => true,
             'pin_code' => null,
             'expected_eta' => now()->addDay(2),
             'vendor' =>  null,
         ]);
         $item = Item::create([
             'order_id' => $order->id,
             'category' => $this->formData['category'],
             'type' => $this->formData['type'],
             'weight' => $this->formData['weight'],
             'quantity' => $this->formData['quantity'],
             'condition' => $this->formData['condition'],
             'age_of_item' => $this->formData['age_of_item'],
             'brand' => $this->formData['brand'],
             'model' => $this->formData['model'],
             'reason_for_selling' => $this->formData['reason_for_selling'],
             'mode_of_disposal' => $this->formData['mode_of_disposal'],
             'comment' => $this->formData['comment'],
             'file' => null,
             'name' => 'eWaste',
         ]);
         return  redirect()->route('eWasteForm_phase_two', $order->id);
     } catch (\Exception $e) {
         dd($e);
     }




    }

    public function render()
    {
        return view('livewire.backend.pickup-form');
    }
}
