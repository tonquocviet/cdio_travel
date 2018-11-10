<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function getDanhSach(){
    	$blog = Blog::all();
    	return view('admin.blog.danhsach',['blog'=> $blog]);
    }
    public function getThem(){

    	return view('admin.blog.them');
    }
}
