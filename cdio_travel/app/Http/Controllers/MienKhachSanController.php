<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MienKhachSan;

class MienKhachSanController extends Controller
{
    public function getDanhSach(){
    	$mien_ks = MienKhachSan::all();
    	return view('admin.mien_khachsan.danhsach',['mien_ks'=> $mien_ks]);
    }
    public function getThem(){

    	return view('admin.mien_khachsan.them');
    }
    public function postThem(Request $req)
    {
    	$this-> validate($req,
    		[
    			'ten_mien'=> 'required|unique:mien_khachsan,ten_mien',
                'mota'=> 'required',

    		],
    		[
    			'ten_mien.required'=> 'Bạn chưa chọn tên miền khách sạn',
                'ten_mien.unique'=> 'Tên miền này đã có rồi',
                'mota.required'=> 'Bạn chưa ghi mô tả',
    		]);
    	$mien_ks = new MienKhachSan;
    	$mien_ks-> ten_mien = $req-> ten_mien ;
    	$mien_ks-> mota = $req-> mota;
    	$mien_ks -> save();

    	return redirect('admin/mien_khachsan/them')-> with('thongbao','Thêm thành công');
    }
    public function getSua($id)
    {
        $mien_ks_sua = MienKhachSan::find($id);
        return view('admin.mien_khachsan.sua',['mien_ks_sua'=> $mien_ks_sua]); //dung 1 mang co ten prodtype truyen bien $ vao de qua view dùng lại $mien_ks_sua-> name
    }

    public function postSua(Request $req,$id)
    {
        $mien_ks_sua = MienKhachSan::find($id);
        $this->validate($req,
            [
                'ten_mien'=> 'required|min:4|max:100',
            ],
            [
                'ten_mien.required'=> 'Bạn chưa nhập miền khách sạn',
                'ten_mien.min'=> 'Tên loại sản phẩm phải nhiều hơn 4 ký tự',
                'ten_mien.max'=> 'Tên loại sản phẩm phải không được nhiều hơn 100 ký tự',
            ]);
        $mien_ks_sua-> ten_mien = $req-> ten_mien ;
        $mien_ks_sua-> mota = $req-> mota;
        $mien_ks_sua -> save();
        return redirect('admin/mien_khachsan/sua/'.$id)-> with('thongbao','Sửa thành công');
    }
    
    public function getXoa($id)
    {
        $mien_ks_xoa = MienKhachSan::find($id);
        $mien_ks_xoa -> delete();

        return redirect('admin/mien_khachsan/danhsach')-> with('thongbao','Xóa thành công');
    }
}
