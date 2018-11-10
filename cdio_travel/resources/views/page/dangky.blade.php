@extends('master')
@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url('source/images/bg_4.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
        <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Đăng Ký</span></p>
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Đăng ký</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section bg-light">
  <div class="container">
    <div id="content">
      <form action="{{route('register')}}" method="post" class="beta-form-checkout">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-6">
            <h4 align="center">Đăng ký</h4>
            @if(count($errors)>0)
            <div class="alert alert-danger">
              @foreach($errors-> all() as $err)
                * {{$err}}<br>
              @endforeach
            </div>
          @endif
          @if(Session::has('thongbao'))
            <div class="alert alert-success">* {{Session::get('thongbao')}}</div>
          @endif
            <div class="space20">&nbsp;</div>
            <div class="form-group">
              <label for="phone" style="width: 200px;">Email*</label>
              <input type="email" name="email" class="form-control" placeholder="example@gmail.com" required>
            </div>
            <div class="form-group">
              <label for="your_last_name" style="width: 200px;">Họ và tên*</label>
              <input type="text" class="form-control" name="full_name" placeholder="Tôn Quốc Việt" required>
            </div>
            <div class="form-group">
              <label for="your_last_name" style="width: 200px;">Địa chỉ*</label>
              <input type="text" class="form-control" name="diachi" placeholder="Địa chỉ" required>
            </div>
            <div class="form-block">
              <label for="phone">Số điện thoại*</label>
              <input type="text" name="sdt" class="form-control" placeholder="0979.797.797" required>
            </div>
            <div class="form-group">
              <label for="phone" style="width: 200px;">Mật khẩu*</label>
              <input type="text" name="password" class="form-control" placeholder="Nhập mật khẩu" required>
            </div>
            <div class="form-block">
              <label for="phone">Nhập lại mật khẩu*</label>
              <input type="password" class="form-control" name="re_password" placeholder="Nhập lại mật khẩu" required>
            </div>
            <div class="space20">&nbsp;</div>
            <div class="pull-center" align="center">
              <button type="submit" class="btn btn-primary">Đăng Kí</button>
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
