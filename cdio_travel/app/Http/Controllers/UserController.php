<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function getDanhSach(){
    	$user = User::orderBy('id','DESC')->get();
    	return view('admin.user.danhsach',['user'=> $user]);
    }

    public function getSua($id)
    {
        $user_sua = User::find($id);
        return view('admin.user.sua',['user_sua'=> $user_sua]); //dung 1 mang co ten prodtype truyen bien $ vao de qua view dùng lại $mien_ks_sua-> name
    }

    public function postSua(Request $req,$id)
    {
    	$user_sua = User::find($id);
    	$this-> validate($req,
    		[
    			'full_name'=> 'required|min:4|max:100',

    		],
    		[
    			'full_name.required'=> 'Bạn chưa nhập tên User',
                'full_name.min'=> 'Tên loại sản phẩm phải nhiều hơn 4 ký tự',
                'full_name.max'=> 'Tên loại sản phẩm phải không được nhiều hơn 100 ký tự',
    		]);
    	$user_sua-> full_name = $req-> full_name ;
    	$user_sua-> email = $req-> email;
    	$user_sua-> quyen = $req-> quyen;
    	$user_sua -> save();
    	return redirect('admin/user/sua/'.$id)-> with('thongbao','Sửa thành công');
    }
}
