<?php

namespace App\Http\Livewire\Backend\History\TrackOrders;

use App\Models\Order;
use Livewire\Component;

class Index extends Component
{
    public $orders;

    public function mount(){
        $this->orders = Order::where('user_id', auth()->user()->id)->get();
    }
    public function render()
    {
        return view('livewire.backend.history.track-orders.index');
    }
}
