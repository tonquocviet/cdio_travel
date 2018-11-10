@extends('master')
@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url('source/images/bg_4.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
        <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Đặt Tour</span></p>
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Đặt Tour</h1>
      </div>
    </div>
  </div>
</div>
<section class="cart bgwhite p-t-70 p-b-100">
  <div class="container">
    <!-- Cart item -->
    <div id="content">
      <form action="{{route('dattour',$dat_tour-> id)}}" method="post" class="beta-form-checkout">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <h4 align="center">Đặt Tour</h4>
        @if(Session::has('thongbao'))
        <div class="alert alert-success" align="center">{{Session::get('thongbao')}}</div>
        @endif
        <div class="container-table-cart pos-relative">
          <div class="wrap-table-shopping-cart bgwhite">
            <table class="table-shopping-cart">
              <tr class="table-head">
                <th class="column-1"></th>
                <th class="column-2">Tên Tour</th>
                <th class="column-3">Giá</th>
                <th class="column-4 p-l-70">Số vé</th>
                <th class="column-5">Thành Tiền</th>
              </tr>

              <tr class="table-row">
                <td class="column-1">
                  <div class="cart-img-product b-rad-4 o-f-hidden">
                    <img src="source/images/tour/{{$dat_tour-> hinh_2}}" alt="IMG-PRODUCT">
                  </div>
                </td>
                <td class="column-2">{{$dat_tour-> tentour}}</td>
                @if($dat_tour-> gia_km==0)
                <td class="column-3" id="giatour">{{($dat_tour-> gia)}}</td>
                @else
                <td class="column-3" id="giatour">{{($dat_tour-> gia_km)}}</td>
                {{-- <label id="giatour">{!! $dat_tour-> gia_km !!}</label> --}}
                @endif
                <td class="column-4">
                  <div class="flex-w bo5 of-hidden w-size17">
                    <select class="form-control" id="mySelect" name="mySelect" onchange="myFunction()">
                      <option value="0">số vé</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                  </div>
                </td>
                <td class="column-5" id="demo"></td>  
              </tr>
            </table>
          </div>
          <div class="text-center"><button type="submit" class="beta-btn primary" href="#">Đặt hàng <i class="fa fa-chevron-right"></i></button></div>
        </div>
        <section class="ftco-section bg-light">
        <div class="container">
        <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
      <h4 class="mb-5">Điền thông tin &amp; Đặt tour</h4>
      {{-- <div class="fields">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="ten_kh" class="form-control" placeholder="Họ và tên" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Nhập email" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="diachi" class="form-control" placeholder="Nhập địa chỉ" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="sdt" class="form-control" placeholder="Nhập số điện thoại" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <div class="select-wrap one-third">
                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                <select name="gioitinh" id="gioitinh" class="form-control" placeholder="Giới tính" required>
                  <option>Chọn giới tính</option>
                  <option value="nam">Nam</option>
                  <option value="nữ">Nữ</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="ghichu" class="form-control" placeholder="Ghi chú">
            </div>
        </div>
        <div class="col-md-6 ftco-animate p-md-5">
          <div class="row">
            <div class="col-md-12 nav-link-wrap mb-5">
              <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-whatwedo-tab" data-toggle="pill" href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo" aria-selected="true" name="thanhtoan" value="TT" >Thanh toán trực tiếp</a>
                <a class="nav-link" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission" role="tab" aria-controls="v-pills-mission" aria-selected="false" name="thanhtoan" value="CK">Chuyển khoản</a>
              </div>
            </div>
            <div class="col-md-12 d-flex align-items-center">
              <div class="tab-content ftco-animate" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
                  <div>
                    <h2 class="mb-4">Thanh toán trực tiếp</h2>
                    <p>Thanh toán trực tiếp bằng tiền mặt tại văn phòng Start Travel: 28/13 Bùi Viện, Phường Phạm Ngũ Lão, Q.1, Tp.HCM, Việt Nam</p>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
                  <div>
                    <h2 class="mb-4">Chuyển khoản</h2>
                    <p>Chuyển tiền đến tài khoản sau: <br>
                      - Số tài khoản: 123 456 789 <br>
                      - Chủ TK: Nguyễn A <br>
                    - Ngân hàng ACB, Chi nhánh TPHCM</p>
                    <p>Khách hàng chịu phí chuyển khoản Ngân hàng</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <input type="submit" value="Đặt Tour" class="btn btn-primary py-3">
          </div>
        </div>
      </div>
    </div> --}}
  </div>
  </div>
  </section>
      </form>
    </div>
  </div>
</section>
{{-- <section class="ftco-section bg-light">
  <div class="container">
    
</div>
</section> --}}
@endsection
@section('script')
<script>
  function myFunction() {
    var x = document.getElementById("mySelect").value;
    var y = document.getElementById("giatour").innerHTML;
    var z = x * y;
    document.getElementById("demo").innerHTML = z;
    // var tong_tien =$('#demo').text(); 
    //alert(tong_tien);
  }
</script>
@endsection
