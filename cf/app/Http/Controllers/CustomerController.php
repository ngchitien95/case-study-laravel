<?php

namespace App\Http\Controllers;

use App\customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function store(Request $request)
    {
        $cus = new customer();

        $cus->name = $request->input('name');
        $cus->email = $request->input('email');
        $cus->address = $request->input('address');
        $cus->phone_number = $request->input('phone_number');
        $cus->note = $request->input('note');

        $cus->price = $request->input('price');
        $cus->subtotal = $request->input('subtotal');
        $cus->total = $request->input('total');
        $cus->qty = $request->input('qty');
        $cus->name_product = $request->input('name_product');

        $cus->save();

      return redirect()->route('trang-chu');
    }

}
