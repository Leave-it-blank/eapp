<?php

namespace App\Http\Livewire\Backend\Form;

use App\Models\Address;
use App\Models\Item;
use App\Models\Order;
use Livewire\Component;

class FillDetails extends Component
{
    public $orderId;
    public $address;

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
        //order updates
        'pick_up_date' => null,
        'pick_up_time' => null,
        'pin_code' => null,
        'expected_eta' => '',
        'address_id' => '',
        'vendor' =>  null,
    ];


    public function mount($id){
        $order = Order::findorFail($id);
        $item = Item::where('order_id', $order->id)->first();
        $this->formData['category'] = $item->category;
        $this->formData['type'] = $item->type;
        $this->formData['weight'] = $item->weight;
        $this->formData['quantity'] = $item->quantity;
        $this->formData['condition'] = $item->condition;
        $this->formData['age_of_item'] = $item->age_of_item;
        $this->formData['brand'] = $item->brand;
        $this->formData['model'] = $item->model;
        $this->formData['reason_for_selling'] = $item->reason_for_selling;
        $this->formData['mode_of_disposal'] = $item->mode_of_disposal;
        $this->formData['comment'] = $item->comment;

        $this->formData['pick_up_date'] = $order->pick_up_date;
        $this->formData['pick_up_time'] = $order->pick_up_time;
        $this->formData['pin_code'] = $order->pin_code;
        $this->formData['expected_eta'] = $order->expected_eta;
        $this->formData['address_id'] = $order->address_id;
        $this->formData['vendor'] = $order->vendor;
        //dd($this->formData);
        $this->orderId = $order->id;

        $this->address = Address::where('user_id', auth()->user()->id)->get();
        //dd($id);
    }
    protected $rules = [

        'formData.pick_up_date' => 'required',
        'formData.pick_up_time' => 'required',

    ];
    public function submit()
    {$this->validate();
        try{

            $update = Order::find($this->orderId)->update([
                'pick_up_date' => $this->formData['pick_up_date'],
                'pick_up_time' => $this->formData['pick_up_time'],
                'pin_code' => Address::find($this->formData['address_id'])->pin_code,
                'expected_eta' => $this->formData['expected_eta'],
                'address_id' => $this->formData['address_id'],
            ]);
            redirect()->route('eWasteForm_phase_three', ['id' => $this->orderId]);
        } catch (\Exception $exception){
            dd($exception);
        }

    }
    public function render()
    {
        return view('livewire.backend.form.fill-details')
            ->layout('components.user-layout');
    }
}
