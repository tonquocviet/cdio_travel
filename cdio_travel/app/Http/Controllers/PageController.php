<?php

namespace App\Http\Controllers;

use App\DatTour;
use App\KhachSan;
use App\MienTour;
use App\Tour;
use App\User;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Mail;

class PageController extends Controller
{
    // public function getIndex(){
    //     return view('page.trangchu');
    // }
    public function getIndex()
    {
        $new_tour = Tour::where('noibat', 1)->paginate(10);
        $khuyenmai_tour = Tour::where('gia_km', '<>', 0)->paginate(10);
        return view('page.trangchu', compact('new_tour', 'khuyenmai_tour'));
    }

    public function getDanhmuctour()
    {
        $mientour = MienTour::all();
        $tour_mien_1 = Tour::where('noibat', 1)->paginate(6);
        return view('page.danhmuctour', compact('mientour', 'tour_mien_1'));
    }

    public function getTourtheomien($type)
    {
        $mientour = MienTour::all();
        $tour_mien = Tour::where('id_mien', $type)->paginate(6);
        $tour_theomien = MienTour::all();
        return view('page.tourtheomien', compact('tour_theomien', 'tour_mien', 'mientour'));
    }

    public function getChitiet(Request $req)
    {
        $tour_chitiet = Tour::where('id', $req->id)->first();
        $tour_chitiet_2 = KhachSan::all();
        $tour_tuongtu = Tour::where('id_mien', $tour_chitiet->id_mien)->paginate(3);
        return view('page.chitiettour', compact('tour_chitiet', 'tour_chitiet_2', 'tour_tuongtu'));
    }

    public function getDattour(Request $req)
    {
        $dat_tour = Tour::where('id', $req->id)->first();
        return view('page.dattour', compact('dat_tour'));
    }

    public function postDattour(Request $req)
    {

        $dat_tour = Tour::where('id', $req->id)->first();

        // $khachhang = new KhachHang;

        // $khachhang -> ten_kh = $req-> ten_kh;
        // $khachhang -> gioitinh = $req-> gioitinh;
        // $khachhang -> email = $req-> email;
        // $khachhang -> diachi = $req-> diachi;
        // $khachhang -> sdt = $req-> sdt;
        // $khachhang -> ghichu = $req-> ghichu;
        // $khachhang -> save();
        $dattour = new DatTour;
        // $dattour -> id_kh = $khachhang-> id;
        $dattour->ngay_dat = date('Y-m-d');
        $dattour->tongtien = $req->demo;
        $dattour->thanhtoan = $req->thanhtoan;
        $dattour->ghichu = $req->ghichu;
        $dattour->save();
        // // foreach($cart-> items as $kye=> $value){
        //     $bill_detail = new ChiTietDatTour;
        //     $bill_detail-> id_dattour = $dattour-> id;
        //     $bill_detail-> id_tour = $dat_tour-> id;
        //     $bill_detail-> soluong_nguoi = $req-> mySelect;
        //     $bill_detail -> gia = $req-> demo / $req->mySelect;
        //     $bill_detail -> save();
        // // }
        return redirect()->back()->with('thongbao', 'Đặt tour thành công');

    }

    public function getLogin()
    {
        if (Auth::check()) {
            return redirect()->route('trangchu');
        } else if (Auth::check()) {
            return redirect()->route('trangchuadmin');
        }
        return view('page.dangnhap');
    }

    public function postLogin(Request $req)
    {
        if (Auth::attempt(['email' => $req->email,
            'password' => $req->password,
            'quyen' => 0,
            'active' => 1])) {
            return redirect()->route('trangchu');
        } else if (Auth::attempt(['email' => $req->email,
            'password' => $req->password,
            'quyen' => 1,
            'active' => 1])) {
            return redirect()->route('trangchuadmin');
        }
        return redirect()->back()->with(['flag' => 'danger', 'message' => 'Sai thông tin đăng nhập']);
    }

    public function getTrangchuAdmin()
    {
        return view('admin.trangchu_admin');
    }

    public function postLogout()
    {
        Auth::logout();
        return redirect()->route('trangchu');
    }

    public function getRegister()
    {
        return view('page.dangky');
    }

    public function postRegister(Request $req)
    { //đăng kí và dùng mail kích hoạt tài khoản
        $this->validate($req,
            [
                'email' => 'required|email|unique:users,email', // email co ton tai trong bang users ko
                'password' => 'required|min:6|max:20', //06<=password<=20 chars
                'full_name' => 'required', //required: bat buoc phai nhap
                're_password' => 'required|same:password', //kiem tra xem co giong password ko
                'sdt' => 'numeric',
            ],
            [
                'email.required' => 'Vui lòng nhập email', //ng dùng ko nhập
                'email.email' => 'Không đúng định dạng email', //nhập ko đúng định dạng email
                'email.unique' => 'Email đã có người sử dụng', //nhập trùng email

                'password.required' => 'Vui lòng nhập mật mã',
                're_password.same' => 'Mật khẩu không giống nhau',
                'password.min' => 'Mật khẩu ít nhất 06 ký tự',
                'password.max' => 'Mật khẩu tối đa 20 ký tự',
                'sdt.numeric' => 'Số điện thoại phải là 1 dãy số gồm 11 ký tự',
            ]);
        $user = new User();
        $user->full_name = $req->full_name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password); //make 1 hash để mã hóa mật khẩu
        $user->sdt = $req->sdt;
        $user->diachi = $req->diachi;
        $user->save();

        Mail::send('page.mail', ['nguoidung' => $user], function ($message) use ($user) {
            $message->from('tonquocviet123@gmail.com', 'Start DTU Travel'); // tên người gửi
            $message->to($user->email, $user->full_name); // gửi đến mail này
            $message->subject('Xác nhận mật khẩu'); // chủ đề của mail
        });
        return redirect()->back()->with('thongbao', 'Đăng ký thành công , vui lòng kiểm tra Gmail để kích hoạt tài khoản');
    }

    public function activeUser($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->active = 1;
            $user->save();
            return redirect()->route('login')->with(['thanhcong' => 'Kích hoạt tài khoản thành công, Vui lòng đăng nhập']);
        }
    }

    public function getSearch(Request $req)
    {
        $tim_tour = Tour::where('tentour', 'like', '%' . $req->key . '%') //tìm theo tên
            ->orWhere('gia', $req->key) //tìm theo giá
            ->get();
        return view('page.timkiem', compact('tim_tour'));
    }

    public function getGioithieu()
    {
        return view('page.gioithieu');
    }

    public function getLienhe()
    {
        return view('page.lienhe');
    }

    public function getBlog()
    {
        return view('page.blog');
    }

    public function getBlogdetail()
    {
        return view('page.blogdetail');
    }
}
