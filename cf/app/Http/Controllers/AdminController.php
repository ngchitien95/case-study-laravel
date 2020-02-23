<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\QuanCfNgon;
use App\BaiViet;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show_dashboard(){
        return view('admin.dashboard');
    }

    public function danhMucSp(){
        return View('admin.danhMucSp', ['cfs' => Product::all()]);
    }
    public function danhMucQuanCf(){
        return View('admin.danhMucQuanCf', ['quanCf' => QuanCfNgon::all()]);
    }
    public function danhMucBaiviet(){
        return View('admin.danhMucBaiviet', ['baiviets' => baiviet::all()]);
    }

}
