@extends('master')
@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url('source/images/bg_3.jpg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
			<div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
				<p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{route('trangchu')}}">Trang chủ</a></span> <span>Danh mục Tour</span></p>
				<h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Điểm đến hấp dẫn</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section ftco-destination">
	<div class="container">
		<div class="row justify-content-start mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate">
				<span class="subheading">Địa điểm</span>
				<h2 class="mb-4"><strong>Điểm du lịch</strong> Nổi bật</h2>
			</div>
		</div>
		<div class="container">
			<div class="row">
				@foreach($mientour as $mt)
				<div class="col-sm">
					<div class="item">
						<div class="destination">
							<a href="{{route('tourtheomien',$mt-> id)}}" class="img d-flex justify-content-center align-items-center" style="background-image: url(source/images/mien_tour/{{$mt-> hinh}});">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3 style="text-align: center;">
									<a href="{{route('tourtheomien',$mt-> id)}}">{{$mt-> ten_mien}}</a>
								</h3>
								{{-- <span class="listing">Có: {{count($mientour)}} tour</span> --}}
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-degree-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 sidebar ftco-animate">
				<div class="sidebar-wrap bg-light ftco-animate">
					<h3 class="heading mb-4">Find City</h3>
					<form action="#">
						<div class="fields">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Destination, City">
							</div>
							<div class="form-group">
								<div class="select-wrap one-third">
									<div class="icon"><span class="ion-ios-arrow-down"></span></div>
									<select name="" id="" class="form-control" placeholder="Keyword search">
										<option value="">Select Location</option>
										<option value="">San Francisco USA</option>
										<option value="">Berlin Germany</option>
										<option value="">Lodon United Kingdom</option>
										<option value="">Paris Italy</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<input type="text" id="checkin_date" class="form-control" placeholder="Date from">
							</div>
							<div class="form-group">
								<input type="text" id="checkin_date" class="form-control" placeholder="Date to">
							</div>
							<div class="form-group">
								<div class="range-slider">
									<span>
										<input type="number" value="25000" min="0" max="120000"/>	-
										<input type="number" value="50000" min="0" max="120000"/>
									</span>
									<input value="1000" min="0" max="120000" step="500" type="range"/>
									<input value="50000" min="0" max="120000" step="500" type="range"/>
								</svg>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Search" class="btn btn-primary py-3 px-5">
						</div>
					</div>
				</form>
			</div>
			<div class="sidebar-wrap bg-light ftco-animate">
				<h3 class="heading mb-4">Star Rating</h3>
				<form method="post" class="star-rating">
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">
							<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></p>
						</label>
					</div>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">
							<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i></span></p>
						</label>
					</div>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">
							<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
						</label>
					</div>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">
							<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
						</label>
					</div>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">
							<p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
						</label>
					</div>
				</form>
			</div>
		</div>
		<div class="col-lg-9">
			<div class="row">
				@foreach($tour_mien as $t_m)
				<div class="col-md-4 ftco-animate">
					<div class="destination">
						<a href="{{route('chitiettour', $t_m-> id)}}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(source/images/tour/{{$t_m-> hinh_3}});">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search2"></span>
							</div>
						</a>
						<div class="text p-3">
                {{-- <div class="d-flex">
                	<div class="one"> --}}
                		<h3><a href="{{route('chitiettour', $t_m-> id)}}">{{$t_m-> tentour}}</a></h3>
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
              <p>Ngày khởi hành: {{date('d-m-Y', strtotime($t_m-> ngay_khoihanh))}}</p> {{-- định dạng ngày tháng --}}
              <p>Ngày kết thúc: {{date('d-m-Y', strtotime($t_m-> ngay_ketthuc))}}</p>
              <p class="days"><span style="color: red">{{$t_m-> thoigian_tour}}</span></p>
              <hr>
              <div class="two">
              	<p>
              		@if($t_m-> gia_km==0)
              		<span class="price">{{number_format($t_m-> gia). 'đ'}}</span>
              		@else
              		<span class="pe-price" style="text-decoration :line-through; position: relative;">{{number_format($t_m-> gia). 'đ'}}</span>
              		<span class="price">{{number_format($t_m-> gia_km). 'đ'}}</span>
              		@endif
              	</div>
              </p>
              <hr>
              <p class="bottom-area d-flex">
              	<span><i class="icon-map-o"></i> {{$t_m-> diem_den}}</span> 
              	<span class="ml-auto"><a href="#">Đặt ngay</a></span>
              </p>
          </div>
      </div>
  </div>
  @endforeach
</div>
<div class="row">{{$tour_mien-> links()}}</div>
		</div> <!-- .col-md-8 -->
	</div>
</div>
</section> <!-- .section -->
@endsection