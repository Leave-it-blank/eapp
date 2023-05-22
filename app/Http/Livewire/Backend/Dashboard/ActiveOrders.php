<?php

namespace App\Http\Livewire\Backend\Dashboard;

use Livewire\Component;

class ActiveOrders extends Component
{
    public $orders = 0;
    public function mount(){
        $this->orders = \App\Models\Order::where('user_id', auth()->user()->id)->where('full_filled', false)->count();
    }
    public function render()
    {
        return view('livewire.backend.dashboard.active-orders');
    }
}
