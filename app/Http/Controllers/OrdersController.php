<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
  function createOrder(){
      $address_exist = Address::where('user_id', auth()->user()->id)->first();
     // dd($address_exist);
      if($address_exist){
          return  view('backend.pick_up_form');
      }else {
          return redirect()->route('address.create');
      }
  }
    function pickAddress(){
        return view('backend.pick_up_form_address');
    }

    function createAddress(){
      return 404;
    }
}
