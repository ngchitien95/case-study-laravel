<?php

namespace App\Http\Controllers;

use App\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return View('home', ['customers' => Customers::latest()->paginate(5)]);

        $customers = Customers::all();
        return view('home',compact('customers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customers = new Customers();
        $customers->name = $request->input('name');
        $customers->surname = $request->input('surname');
        $customers->phone = $request->input('phone');
        $customers->email = $request->input('email');
        $customers->address = $request->input('address');

        $customers->save();

        //dung session de dua ra thong bao
        $request->session()->flash('successCreate', 'Tạo mới Liên lạc thành công');
         //tao moi xong quay ve trang chủ
          return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $customers = Customers::find($id);
    $customers->delete();

    return redirect()->route('customers.index');
}

    public function search(){
        $keyword = request('key');
        $customers = customers::where('name', 'like', '%'.$keyword.'%')->orWhere('surname', 'like', '%'.$keyword.'%')->get();

        return view('search', compact('customers'));
    }
}
