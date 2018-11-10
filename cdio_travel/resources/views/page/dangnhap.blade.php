@extends('master')
@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url('source/images/bg_4.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
        <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Đăng nhập</span></p>
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Đăng nhập</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section bg-light">
  <div class="container">
    <div id="content">
      <form action="{{route('login')}}" method="post" class="beta-form-checkout">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-6">
            <h4 align="center">Đăng nhập</h4>
            @if(count($errors)>0)
            <div class="alert alert-danger">
              @foreach($errors-> all() as $err)
              * {{$err}}<br>
              @endforeach
            </div>
            @endif
            @if(Session::has('thanhcong'))
            <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
            @endif
            @if(Session::has('flag'))
            <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
            @endif
            <div class="space20">&nbsp;</div>
            <div class="form-group">
              <label for="phone" style="width: 200px;">Email*</label>
              <input type="email" name="email" class="form-control" placeholder="example@gmail.com" required>
            </div>
            <div class="form-group">
              <label for="phone" style="width: 200px;">Mật khẩu*</label>
              <input type="text" name="password" class="form-control" placeholder="Nhập mật khẩu" required>
            </div>
            <div class="pull-center" align="center">
              <a href="{{route('register')}}" style="font-size: 20px">Đăng ký tài khoản</a>
            </div>
            <div class="space20">&nbsp;</div>
            <div class="pull-center" align="center">
              <button type="submit" class="btn btn-primary">Đăng Nhập</button>
            </div>

            <div class="space20">&nbsp;</div>
            <div class="pull-center" align="center">
              <button {{-- href="{{route('provider_login_callback')}} --}} type="button" class="btn btn-primary">Đăng nhập bằng Facebook</button>
            </div>

            <div class="space20">&nbsp;</div>
            <div class="pull-center" align="center">
              <button type="button" class="btn btn-primary">Đăng nhập bằng G+</button>
            </div>
          </div>
          <div class="col-sm-3"></div>
        </div>
      </form>
    </div> <!-- #content -->
  </div>
</section>
@endsection
