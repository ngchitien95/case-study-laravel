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
        return View('admin.quanLyDonHang', [ 'customers' => customer::all(),'bills' => Bill::all(), 'BillDetails' => BillDetail::all()]);

    }
    public function showDonHang($id){
        $bills = Bill::find($id);
        // $billdetais = BillDetail::find($id);
        // $customers = customer::find($id);
        // $products = Product::find($id);
           return view('admin.showDonHang',compact('bills'));
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
    public function deleteBaiviet($id){
        BaiViet::destroy($id);
            session::put('message', 'xóa sản phẩm thành công');
            return redirect()->back();
    }

    public function deletedBaiviet(){
        $deleted = BaiViet::onlyTrashed()->get();
        return view('admin.deletedBaiviet',compact('deleted'));
    }
    public function restoreBaiviet($id){
        $restore = BaiViet::onlyTrashed()->where('id', '=', $id)->restore();
        return redirect()->route('admin.danhMucBaiviet');

    }

    public function deleteQuanCfNgon($id){
        QuanCfNgon::destroy($id);
            session::put('message', 'xóa sản phẩm thành công');
            return redirect()->back();
    }

    public function deletedQuanCfNgon(){
        $deleted = QuanCfNgon::onlyTrashed()->get();
        return view('admin.deletedQuanCfNgon',compact('deleted'));
    }
    public function restoreQuanCfNgon($id){
        $restore = QuanCfNgon::onlyTrashed()->where('id', '=', $id)->restore();
        return redirect()->route('admin.danhMucQuanCf');

    }





}
