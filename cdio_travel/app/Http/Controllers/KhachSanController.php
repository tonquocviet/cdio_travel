<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KhachSan;
use App\MienKhachSan;
class KhachSanController extends Controller
{
    public function getDanhSach(){
    	$khach_san = KhachSan::all();
    	return view('admin.khachsan.danhsach',['khach_san'=> $khach_san]);
    }
    public function getThem()
    {
    	$khach_san = MienKhachSan::all();
    	return view ('admin.khachsan.them',['khach_san'=> $khach_san]);
    }
    public function postThem(Request $req)
    {
    	$this-> validate($req,
    		[
                'id_mien'=> 'required',
                'ten_ks'=> 'required|min:4|max:100|unique:khachsan,ten_ks',
                'diachi'=> 'required',
                'tieuchuan'=> 'required',
    		],
    		[
                'id_mien.required'=> 'Bạn chưa chọn miền khách sạn',
                'ten_ks.required'=> 'Bạn chưa nhập tên khách sạn',
                'ten_ks.unique'=> 'Tên khách sạn đã tồn tại',
                'ten_ks.min'=> 'Tên khách sạn phải nhiều hơn 4 ký tự',
                'ten_ks.max'=> 'Tên khách sạn không được nhiều hơn 100 ký tự',
                'diachi.required'=> 'Bạn chưa nhập địa chỉ khách sạn',
                'tieuchuan.required'=>' Bạn chưa chọn tiêu chuẩn khách sạn',
    		]);
    	$khach_san = new KhachSan;
    	$khach_san-> id_mien = $req-> id_mien;
    	$khach_san-> ten_ks = $req-> ten_ks ;
    	$khach_san-> diachi = $req-> diachi;
    	$khach_san-> tieuchuan = $req-> tieuchuan;
    	$khach_san-> ghichu = $req-> ghichu;
	    $khach_san-> save();
	    return redirect('admin/khachsan/them/')-> with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {
        $mien_khach_san = MienKhachSan::all();
        $khach_san = KhachSan::find($id);
        return view('admin.khachsan.sua',['khach_san'=> $khach_san,'mien_khach_san'=> $mien_khach_san]); //dung 1 mang co ten prodtype truyen bien $ vao de qua view dùng lại $khach_san-> name
    }

    public function postSua(Request $req,$id)
    {
        
        $this->validate($req,
            [
                'ten_ks'=> 'required|min:4|max:100',
            ],
            [
                'ten_ks.required'=> 'Bạn chưa nhập tên loại sản phẩm',
                'ten_ks.min'=> 'Tên loại sản phẩm phải nhiều hơn 4 ký tự',
                'ten_ks.max'=> 'Tên loại sản phẩm phải không được nhiều hơn 100 ký tự',
            ]);
        $khach_san = KhachSan::find($id);
        $khach_san-> id_mien= $req-> id_mien;
        $khach_san-> ten_ks = $req-> ten_ks ;
        $khach_san-> diachi = $req-> diachi;
        $khach_san-> tieuchuan = $req-> tieuchuan;
        $khach_san-> ghichu = $req-> ghichu;
        $khach_san -> save();
        return redirect('admin/khachsan/sua/'.$id)-> with('thongbao','Sửa thành công');
    }
    public function getXoa($id)
    {
    	$khach_san_xoa = KhachSan::find($id);
        $khach_san_xoa -> delete();

        return redirect('admin/khachsan/danhsach')-> with('thongbao','Xóa thành công');
    }
}
