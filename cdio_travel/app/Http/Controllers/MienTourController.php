<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MienTour;

class MienTourController extends Controller
{
    public function getDanhSach(){
    	$mien_tour = MienTour::all();
    	return view('admin.mien_tour.danhsach',['mien_tour'=> $mien_tour]);
    }
    public function getThem(){

    	return view('admin.mien_tour.them');
    }
    public function postThem(Request $req)
    {
    	$this-> validate($req,
    		[
    			'ten_mien'=> 'required|unique:mien_tour,ten_mien',
                'mota'=> 'required',
                'hinh'=> 'required | mimes:jpeg,jpg,png,PNG |',

    		],
    		[
    			'ten_mien.required'=> 'Bạn chưa chọn tên miền tour',
                'ten_mien.unique'=> 'Tên miền này đã có rồi',
                'mota.required'=> 'Bạn chưa ghi mô tả',
                'hinh.required'=> 'Bạn chưa chọn hình',
                'hinh.mimes'=> 'Chỉ được chọn file dạng PNG, png, jpg, jpeg',
    		]);
    	$mien_tour = new MienTour;
    	$mien_tour-> ten_mien = $req-> ten_mien ;
    	$mien_tour-> mota = $req-> mota;

    	if($req-> hasFile('hinh'))
            {
                $file = $req-> file('hinh');
                $name = $file-> getClientOriginalName();
                $tenhinh = str_random(4)."_". $name;
                while(file_exists("source/images/mien_tour".$tenhinh))
                {
                    $tenhinh = str_random(4)."_". $name;
                }
                $file-> move("source/images/mien_tour", $tenhinh);
                $mien_tour-> hinh = $tenhinh;
            }else
            {
            	$mien_tour-> hinh ="";
            }
    	$mien_tour -> save();
    	return redirect('admin/mien_tour/them')-> with('thongbao','Thêm thành công');
    }
    public function getSua($id)
    {
        $mien_tour = MienTour::find($id);
        return view('admin.mien_tour.sua',['mien_tour'=> $mien_tour]); //dung 1 mang co ten prodtype truyen bien $ vao de qua view dùng lại $mien_ks_sua-> name
    }
    public function postSua(Request $req,$id)
    {
    	$mien_tour = MienTour::find($id);
    	$this-> validate($req,
    		[
    			'ten_mien'=> 'required|min:4|max:100',
                'mota'=> 'required',
                'hinh'=> 'required | mimes:jpeg,jpg,png,PNG |',

    		],
    		[
    			'ten_mien.required'=> 'Bạn chưa nhập tên miền khách sạn',
                'ten_mien.min'=> 'Tên loại sản phẩm phải nhiều hơn 4 ký tự',
                'ten_mien.max'=> 'Tên loại sản phẩm phải không được nhiều hơn 100 ký tự',
                'mota.required'=> 'Bạn chưa ghi mô tả',
                'hinh.required'=> 'Bạn chưa chọn hình',
                'hinh.mimes'=> 'Chỉ được chọn file dạng PNG, png, jpg, jpeg',
    		]);
    	$mien_tour-> ten_mien = $req-> ten_mien ;
    	$mien_tour-> mota = $req-> mota;

    	if($req-> hasFile('hinh'))
            {
                $file = $req-> file('hinh');
                $name = $file-> getClientOriginalName();
                $tenhinh = str_random(4)."_". $name;
                while(file_exists("source/images/mien_tour".$tenhinh))
                {
                    $tenhinh = str_random(4)."_". $name;
                }
                $file-> move("source/images/mien_tour", $tenhinh);
                if($mien_tour-> hinh)
                {
                    unlink("source/images/mien_tour/".$mien_tour-> hinh); //xoa file anh cu khi update
                }
                
                $mien_tour-> hinh = $tenhinh;
            }
    	$mien_tour -> save();
    	return redirect('admin/mien_tour/sua/'.$id)-> with('thongbao','Thêm thành công');
    }
    public function getXoa($id)
    {
        $mien_tour_xoa = MienTour::find($id);
        if($mien_tour_xoa-> hinh)
                {
                    unlink("source/images/mien_tour/".$mien_tour_xoa-> hinh); //xoa file anh cu khi update
                }
        $mien_tour_xoa -> delete();

        return redirect('admin/mien_tour/danhsach')-> with('thongbao','Xóa thành công');
    }
}
