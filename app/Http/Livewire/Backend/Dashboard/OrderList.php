<?php

namespace App\Http\Livewire\Backend\Dashboard;

use Livewire\Component;

class OrderList extends Component
{
    public $orders ;
    public function mount(){
        $this->orders = \App\Models\Order::where('user_id', auth()->user()->id)->where('full_filled', false)->whereNotNull('pick_up_date')->get();
       // dd($this->orders);
    }
    public function render()
    {
        return view('livewire.backend.dashboard.order-list');
    }
}
