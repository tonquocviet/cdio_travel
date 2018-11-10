@extends('master')
@section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url('source/images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{route('trangchu')}}">Trang chủ</a></span>/ <span>Tìm kiếm</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Tìm kiếm</h1>
          </div>
        </div>
      </div>
    </div>

<section class="ftco-section ftco-degree-bg">
	<div class="container">
		<div class="col-lg-12">
			<h4 align="center">Tìm thấy {{count($tim_tour)}} tour</h4>
			<div class="space20">&nbsp;</div>
			<div class="row">
				@foreach($tim_tour as $tim_t)
				<div class="col-md-4 ftco-animate">
					<div class="destination">
              <a href="{{route('chitiettour', $tim_t-> id)}}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(source/images/tour/{{$tim_t-> hinh_3}});">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                {{-- <div class="d-flex">
                  <div class="one"> --}}
                    <h3><a href="#">{{$tim_t-> tentour}}</a></h3>
                    <p class="rate">
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star-o"></i>
                      <span>8 Bình chọn</span>
                    </p>{{-- 
                  </div>
                </div> --}}
                <p>Ngày khởi hành: {{date('d-m-Y', strtotime($tim_t-> ngay_khoihanh))}}</p> {{-- định dạng ngày tháng --}}
                <p>Ngày kết thúc: {{date('d-m-Y', strtotime($tim_t-> ngay_ketthuc))}}</p>
                <p class="days"><span style="color: red">{{$tim_t-> thoigian_tour}}</span></p>
                <hr>
                <div class="two">
                  <p>
                    @if($tim_t-> gia_km==0)
                        <span class="price">{{number_format($tim_t-> gia). 'đ'}}</span>
                      @else
                        <span class="pe-price" style="text-decoration :line-through; position: relative;">{{number_format($tim_t-> gia). 'đ'}}</span>
                        <span class="price">{{number_format($tim_t-> gia_km). 'đ'}}</span>
                      @endif
                    </p>
                  </div>
                <hr>
                <p class="bottom-area d-flex">
                  <span><i class="icon-map-o"></i> {{$tim_t-> diem_den}}</span> 
                  <span class="ml-auto"><a href="{{route('dattour', $tim_t-> id)}}">Đặt ngay</a></span>
                </p>
              </div>
            </div>
				</div>
				@endforeach
			</div>
			{{-- <div class="row">{{$tim_tour-> links()}}</div> --}}
			{{-- <div class="row mt-5">
				<div class="col text-center">
					<div class="block-27">
						<ul>
							<li><a href="#">&lt;</a>{{$tour_mien_1-> links()}}</li>
						</ul>
					</div>
				</div>
			</div> --}}
		</div> <!-- .col-md-8 -->
	</div>
</div>
</section> <!-- .section -->
@endsection