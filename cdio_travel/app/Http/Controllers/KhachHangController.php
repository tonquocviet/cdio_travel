<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KhachHang;

class KhachHangController extends Controller
{
    public function getDanhSach(){
    	$khach_hang = KhachHang::all();
    	return view('admin.khachhang.danhsach',['khach_hang'=> $khach_hang]);
    }
    public function getThem(){

    	return view('admin.khachhang.them');
    }
    public function postThem(Request $req)
    {
    	$this-> validate($req,
    		[
    			'ten_kh'=> 'required|min:1|max:100|unique:khachhang,ten_kh',
                'email'=> 'required|email',
                'diachi'=> 'required',
                'sdt'=> 'numeric',

    		],
    		[
    			'ten_kh.required'=> 'Bạn chưa nhập tên khách hàng',
                'ten_kh.unique'=> 'Tên khách hàng này đã có rồi',
    			'ten_kh.min'=> 'Tên khách hàng phải nhiều hơn 1 ký tự',
    			'ten_kh.max'=> 'Tên khách hàng không được nhiều hơn 100 ký tự',
                'email.required'=> 'Bạn chưa nhập email',
                'email.email'=> 'Không đúng định dạng email',
                'diachi.required'=>'Bạn chưa nhập địa chỉ',
                'sdt.numeric'=> 'Bạn chưa nhập số điện thoại',
    		]);
    	$khach_hang = new KhachHang;
    	$khach_hang-> ten_kh = $req-> ten_kh ;
    	$khach_hang-> gioitinh = $req-> gioitinh;
    	$khach_hang-> email = $req-> email;
    	$khach_hang-> diachi = $req-> diachi;
    	$khach_hang-> sdt = $req-> sdt;
    	$khach_hang-> ghichu = $req-> ghichu;
    	$khach_hang -> save();
    	return redirect('admin/khachhang/them')-> with('thongbao','Thêm thành công');
    }
}
