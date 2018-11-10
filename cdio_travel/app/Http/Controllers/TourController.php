<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use App\KhachSan;
use App\MienTour;
use App\MienKhachSan;

class TourController extends Controller
{
    public function getDanhSach(){
    	$tour = Tour::orderBy('id','DESC')->get();
    	return view('admin.tour.danhsach',['tour'=> $tour]);
    }
    public function getThem()
    {
    	$m_tour = MienTour::all();
    	$tour_ks = KhachSan::all();
        $m_ks = MienKhachSan::all();
    	return view ('admin.tour.them',['m_tour'=> $m_tour,'tour_ks'=> $tour_ks,'m_ks'=> $m_ks]);
    }
    public function postThem(Request $req)
    {
    	$this-> validate($req,
    		[
                'tentour'=> 'required|min:2|max:100|unique:tour,tentour',
                'id_mien'=> 'required',
                'ngay_khoihanh'=> 'required',
                'ngay_ketthuc'=> 'required',
                'thoigian_tour'=> 'required',
                'diem_khoihanh'=> 'required',
                'diem_den'=> 'required',
                'phuongtien'=> 'required',
                //'ten_mien'=> 'required',
                //'id_ks'=> 'required',
                'hinh_1'=> 'required | mimes:jpeg,jpg,png,PNG |',
                'hinh_2'=> 'required | mimes:jpeg,jpg,png,PNG |',
                'hinh_3'=> 'required | mimes:jpeg,jpg,png,PNG |',
                'noidung'=> 'required',
                'soluong_nguoi'=> 'required|numeric',
                'gia'=> 'required|numeric',
                'gia_km'=> 'required|numeric',
    		],
    		[
                'tentour.required'=> 'Bạn chưa nhập tên khách sạn',
                'tentour.unique'=> 'Tên khách sạn đã tồn tại',
                'tentour.min'=> 'Tên khách sạn phải nhiều hơn 2 ký tự',
                'tentour.max'=> 'Tên khách sạn không được nhiều hơn 100 ký tự',
                'id_mien.required'=> 'Bạn chưa chọn miền khách sạn',
                'ngay_khoihanh.required'=> 'Bạn chưa chọn ngày khởi hành',
                'ngay_ketthuc.required'=> 'Bạn chưa chọn ngày kết thúc',
                'thoigian_tour.required'=> 'Bạn chưa nhập thời gian tour',
                'diem_khoihanh.required'=> 'Bạn chưa nhập điểm khởi hành của tour',
                'diem_den.required'=> 'Bạn chưa nhập điểm đến',
                'phuongtien.required'=> 'Bạn chọn phương tiện',
                //'ten_mien.required'=> 'Bạn chọn miền của khách sạn',
                //'id_ks.required'=> 'Bạn chọn khách sạn',
                'hinh_1.required'=> 'Bạn chưa chọn hình 1',
                'hinh_1.mimes'=> 'Hình 1 chỉ được chọn file dạng PNG, png, jpg, jpeg',
                'hinh_2.required'=> 'Bạn chưa chọn hình 2',
                'hinh_2.mimes'=> 'Hình 2 chỉ được chọn file dạng PNG, png, jpg, jpeg',
                'hinh_3.required'=> 'Bạn chưa chọn hình 3',
                'hinh_3.mimes'=> 'Hình 3 chỉ được chọn file dạng PNG, png, jpg, jpeg',
                'noidung.required'=> 'Bạn chưa nhập nội dung tour',
                'soluong_nguoi.required'=>' Bạn chưa nhập số lượng người',
                'soluong_nguoi.numeric'=> 'Bạn phải nhập dạng số cho số lượng người',
                'gia.required'=>' Bạn chưa nhập giá gốc',
                'gia.numeric'=> 'Bạn phải nhập dạng số cho giá gốc',
                'gia_km.required'=>' Bạn chưa nhập giá khuyến mãi',
                'gia_km.numeric'=> 'Bạn phải nhập dạng số cho giá khuyễn mãi',
    		]);
    	$tour = new Tour;
    	$tour-> tentour = $req-> tentour;
    	$tour-> id_mien = $req-> id_mien ;
    	$tour-> ngay_khoihanh = $req-> ngay_khoihanh;
    	$tour-> ngay_ketthuc = $req-> ngay_ketthuc;
        $tour-> thoigian_tour = $req-> thoigian_tour;
    	$tour-> diem_khoihanh = $req-> diem_khoihanh;
        $tour-> diem_den = $req-> diem_den;
        // $tour-> phuongtien = $req-> phuongtien;
        $tour-> phuongtien = implode(",", $req-> phuongtien);
        $tour-> id_ks = $req-> id_ks;
        //hinh1
        if($req-> hasFile('hinh_1'))
            {
                $file = $req-> file('hinh_1');
                $name = $file-> getClientOriginalName();
                $tenhinh = str_random(4)."_". $name;
                while(file_exists("source/images/tour".$tenhinh))
                {
                    $tenhinh = str_random(4)."_". $name;
                }
                $file-> move("source/images/tour", $tenhinh);
                $tour-> hinh_1 = $tenhinh;
            }else
            {
                $tour-> hinh_1 ="";
            }
        //hinh2
        if($req-> hasFile('hinh_2'))
            {
                $file = $req-> file('hinh_2');
                $name = $file-> getClientOriginalName();
                $tenhinh = str_random(4)."_". $name;
                while(file_exists("source/images/tour".$tenhinh))
                {
                    $tenhinh = str_random(4)."_". $name;
                }
                $file-> move("source/images/tour", $tenhinh);
                $tour-> hinh_2 = $tenhinh;
            }else
            {
                $tour-> hinh_2 ="";
            }
        //hinh3
        if($req-> hasFile('hinh_3'))
            {
                $file = $req-> file('hinh_3');
                $name = $file-> getClientOriginalName();
                $tenhinh = str_random(4)."_". $name;
                while(file_exists("source/images/tour".$tenhinh))
                {
                    $tenhinh = str_random(4)."_". $name;
                }
                $file-> move("source/images/tour", $tenhinh);
                $tour-> hinh_3 = $tenhinh;
            }else
            {
                $tour-> hinh_3 ="";
            }
        $tour-> noidung = $req-> noidung;
        $tour-> soluong_nguoi = $req-> soluong_nguoi;
        $tour-> gia = $req-> gia;
        $tour-> gia_km = $req-> gia_km;
        $tour-> noibat = $req-> noibat;
	    $tour-> save();
	    return redirect('admin/tour/them/')-> with('thongbao','Thêm thành công');
    }
    public function getSua($id)
    {
        $m_tour = MienTour::all();
        $tour_ks = KhachSan::all();
        $m_ks = MienKhachSan::all();
        $tour = Tour::find($id);
        return view('admin.tour.sua',['tour'=> $tour,'tour_ks'=> $tour_ks,'m_tour'=> $m_tour,'m_ks'=> $m_ks]); //dung 1 mang co ten prodtype truyen bien $ vao de qua view dùng lại $khach_san-> name
    }
        public function postSua(Request $req,$id)
    {
        $this-> validate($req,
            [
                'tentour'=> 'required|min:2|max:100|',
                'id_mien'=> 'required',
                'ngay_khoihanh'=> 'required',
                'ngay_ketthuc'=> 'required',
                'thoigian_tour'=> 'required',
                'diem_khoihanh'=> 'required',
                'diem_den'=> 'required',
                //'phuongtien'=> 'required',
                //'ten_mien'=> 'required',
                //'id_ks'=> 'required',
                'hinh_1'=> 'mimes:jpeg,jpg,png,PNG |',
                'hinh_2'=> 'mimes:jpeg,jpg,png,PNG |',
                'hinh_3'=> 'mimes:jpeg,jpg,png,PNG |',
                'noidung'=> 'required',
                'soluong_nguoi'=> 'required|numeric',
                'gia'=> 'required|numeric',
                'gia_km'=> 'required|numeric',
            ],
            [
                'tentour.required'=> 'Bạn chưa nhập tên tour',
                'tentour.unique'=> 'Tên tour đã tồn tại',
                'tentour.min'=> 'Tên khách sạn phải nhiều hơn 2 ký tự',
                'tentour.max'=> 'Tên khách sạn không được nhiều hơn 100 ký tự',
                'id_mien.required'=> 'Bạn chưa chọn miền khách sạn',
                'ngay_khoihanh.required'=> 'Bạn chưa chọn ngày khởi hành',
                'ngay_ketthuc.required'=> 'Bạn chưa chọn ngày kết thúc',
                'thoigian_tour.required'=> 'Bạn chưa nhập thời gian tour',
                'diem_khoihanh.required'=> 'Bạn chưa nhập điểm khởi hành của tour',
                'diem_den.required'=> 'Bạn chưa nhập điểm đến',
                //'phuongtien.required'=> 'Bạn chọn phương tiện',
                //'ten_mien.required'=> 'Bạn chọn miền của khách sạn',
                //'id_ks.required'=> 'Bạn chọn khách sạn',
                //'hinh_1.required'=> 'Bạn chưa chọn hình 1',
                'hinh_1.mimes'=> 'Hình 1 chỉ được chọn file dạng PNG, png, jpg, jpeg',
                //'hinh_2.required'=> 'Bạn chưa chọn hình 2',
                'hinh_2.mimes'=> 'Hình 2 chỉ được chọn file dạng PNG, png, jpg, jpeg',
                //'hinh_3.required'=> 'Bạn chưa chọn hình 3',
                'hinh_3.mimes'=> 'Hình 3 chỉ được chọn file dạng PNG, png, jpg, jpeg',
                'noidung.required'=> 'Bạn chưa nhập nội dung tour',
                'soluong_nguoi.required'=>' Bạn chưa nhập số lượng người',
                'soluong_nguoi.numeric'=> 'Bạn phải nhập dạng số cho số lượng người',
                'gia.required'=>' Bạn chưa nhập giá gốc',
                'gia.numeric'=> 'Bạn phải nhập dạng số cho giá gốc',
                'gia_km.required'=>' Bạn chưa nhập giá khuyến mãi',
                'gia_km.numeric'=> 'Bạn phải nhập dạng số cho giá khuyễn mãi',
            ]);
        $tour = Tour::find($id);
        $tour-> tentour = $req-> tentour;
        $tour-> id_mien = $req-> id_mien ;
        $tour-> ngay_khoihanh = $req-> ngay_khoihanh;
        $tour-> ngay_ketthuc = $req-> ngay_ketthuc;
        $tour-> thoigian_tour = $req-> thoigian_tour;
        $tour-> diem_khoihanh = $req-> diem_khoihanh;
        $tour-> diem_den = $req-> diem_den;
        // $tour-> phuongtien = $req-> phuongtien;
        $tour-> phuongtien = implode(",", $req-> phuongtien);
        $tour-> id_ks = $req-> id_ks;
        //hinh1
        if($req-> hasFile('hinh_1'))
            {
                $file = $req-> file('hinh_1');
                $name = $file-> getClientOriginalName();
                $tenhinh = str_random(4)."_". $name;
                while(file_exists("source/images/tour".$tenhinh))
                {
                    $tenhinh = str_random(4)."_". $name;
                }
                $file-> move("source/images/tour", $tenhinh);
                if($tour-> hinh_1)
                {
                    unlink("source/images/tour/".$tour-> hinh_1); //xoa file anh cu khi update
                }
                
                $tour-> hinh_1 = $tenhinh;
            }
        //hinh2
        if($req-> hasFile('hinh_2'))
            {
                $file = $req-> file('hinh_2');
                $name = $file-> getClientOriginalName();
                $tenhinh = str_random(4)."_". $name;
                while(file_exists("source/images/tour".$tenhinh))
                {
                    $tenhinh = str_random(4)."_". $name;
                }
                $file-> move("source/images/tour", $tenhinh);
                if($tour-> hinh_2)
                {
                    unlink("source/images/tour/".$tour-> hinh_2); //xoa file anh cu khi update
                }
                
                $tour-> hinh_3 = $tenhinh;
            }
        //hinh3
        if($req-> hasFile('hinh_3'))
            {
                $file = $req-> file('hinh_3');
                $name = $file-> getClientOriginalName();
                $tenhinh = str_random(4)."_". $name;
                while(file_exists("source/images/tour".$tenhinh))
                {
                    $tenhinh = str_random(4)."_". $name;
                }
                $file-> move("source/images/tour", $tenhinh);
                if($tour-> hinh_3)
                {
                    unlink("source/images/tour/".$tour-> hinh_3); //xoa file anh cu khi update
                }
                
                $tour-> hinh_3 = $tenhinh;
            }
        $tour-> noidung = $req-> noidung;
        $tour-> soluong_nguoi = $req-> soluong_nguoi;
        $tour-> gia = $req-> gia;
        $tour-> gia_km = $req-> gia_km;
        $tour-> noibat = $req-> noibat;
        $tour-> save();
        return redirect('admin/tour/sua/'.$id)-> with('thongbao','Sửa thành công');
    }
    public function getXoa($id)
    {
        $tour = Tour::find($id);
        if($tour-> hinh_1)
                {
                    unlink("source/images/tour/".$tour-> hinh_1); //xoa file anh cu khi update
                }
        if($tour-> hinh_2)
                {
                    unlink("source/images/tour/".$tour-> hinh_2); //xoa file anh cu khi update
                }
        if($tour-> hinh_3)
                {
                    unlink("source/images/tour/".$tour-> hinh_3); //xoa file anh cu khi update
                }
        $tour -> delete();

        return redirect('admin/tour/danhsach')-> with('thongbao','Xóa thành công');
    }
}
