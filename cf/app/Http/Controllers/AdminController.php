<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Product;
use App\QuanCfNgon;
use App\BaiViet;
use App\Bill;
use App\BillDetail;
use App\customer;
use Illuminate\Support\Facades\Session;


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
    public function quanLyDonHang(){
        return View('admin.quanLyDonHang', ['bills' => Bill::all(), 'customers' => customer::all(), 'BillDetails' => BillDetail::all()]);

    }
    public function showDonHang($id){
        $bills = Bill::all();
        $billdetais = BillDetail::all();
        $customers = customer::all();
        $products = Product::all();
           return view('admin.showDonHang',compact('bills','billdetais','customers','products'));
    }

    public function search(){
        $keyword = request('key');
        $customers = customer::where('name', 'like', '%'.$keyword.'%')->orWhere('address', 'like', '%'.$keyword.'%')->orWhere('phone_number', 'like', '%'.$keyword.'%')->get();
        $bills = Bill::all();
        return view('admin.search', compact('customers','bills'));
    }
    public function deleteProduct($id){
        Product::destroy($id);
            session::put('message', 'xóa sản phẩm thành công');
            return redirect()->route('admin.danhMucSp')->with(['flag' => 'success', 'message' => 'xóa sản phẩm thành công']);

    }

    public function deletedProduct(){
        $deleted = Product::onlyTrashed()->get();
        return view('admin.deletedProduct', compact('deleted'));

    }
    public function restoreProduct($id){
        $restore = Product::onlyTrashed()->where('id', '=', $id)->restore();
        return redirect()->route('admin.danhMucSp');

    }




}
