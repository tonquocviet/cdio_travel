@extends('master')
@section('content')
<!-- END nav -->
<div class="hero-wrap js-fullheight" style="background-image: url('source/images/bg_5.jpg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
			<div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
				<p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Trag chủ</a></span> <span class="mr-2"><a href="hotel.html">Tour</a></span> <span>Chi tiết tour</span></p>
				<h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Chi tiết về Tour</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section ftco-degree-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 sidebar">
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
				<div class="col-md-12 ftco-animate">
					<div class="single-slider owl-carousel">
						<div class="item">
							<div class="hotel-img" style="background-image: url(source/images/tour/{{$tour_chitiet-> hinh_1}});"></div>
						</div>
						<div class="item">
							<div class="hotel-img" style="background-image: url(source/images/tour/{{$tour_chitiet-> hinh_2}});"></div>
						</div>
						<div class="item">
							<div class="hotel-img" style="background-image: url(source/images/tour/{{$tour_chitiet-> hinh_3}});"></div>
						</div>
					</div>
				</div>
				<div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
					<span>Chi tiết về tour</span>
					<h2>{{$tour_chitiet-> tentour}}</h2>
					<p class="rate mb-5">
						@foreach($tour_chitiet_2 as $t_ct_2)
							@if($tour_chitiet-> id_ks == $t_ct_2-> id)
							<span class="loc"><a><i class="icon-map"></i>{{$t_ct_2-> ten_ks}}</a></span>
							@endif
						@endforeach
						<span class="star">
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<i class="icon-star-o"></i>
						8 Bình chọn</span>
						<div class="two">
		                  <p>
		                    @if($tour_chitiet-> gia_km==0)
		                        <h5 class="price" style="color: deepskyblue">Giá : {{number_format($tour_chitiet-> gia). 'đ'}}/1 vé</h5>
		                      @else
		                      	<h5>Giá gốc:
		                        	<span class="pe-price" style="text-decoration :line-through; position: relative;"> {{number_format($tour_chitiet-> gia). 'đ'}}/1 vé</span>
		                       	</h5>
		                        <h5 class="price" style="color: deepskyblue">Giá khuyễn mãi: {{number_format($tour_chitiet-> gia_km). 'đ'}}/1 vé</h5>
		                      @endif
		                   </p>
                  		</div>
					</p>
					<h5 class="bottom-area d-flex">
	                  <span class="ml-auto"><a href="{{route('dattour', $tour_chitiet-> id)}}" style="background: #8bc34a; color: #fff; border-radius: 5px; padding: 8px 19px; margin-right: 25px;">Đặt ngay</a></span>
	                </h5>
					<hr>
					@if($tour_chitiet-> ngay_khoihanh == $tour_chitiet-> ngay_ketthuc)
						<h5 class="mb-4"><strong>Ngày khởi hành: </strong>Hằng ngày</h5>
						@else
						<h5 class="mb-4"><strong>Ngày khởi hành: </strong>{{date('d-m-Y', strtotime($tour_chitiet-> ngay_khoihanh))}}</h5>
						<h5 class="mb-4"><strong>Ngày kết thúc: </strong>{{date('d-m-Y', strtotime($tour_chitiet-> ngay_ketthuc))}}</h5>
					@endif
						<h5 class="mb-4"><strong>Thời gian tour: </strong>{{$tour_chitiet-> thoigian_tour}}</h5>
					<h4 class="mb-4">Chương trình tour</h4><hr>
					<p>{!! $tour_chitiet-> noidung !!}</p><hr> {{-- !! dùng để in thẻ html trong database --}}
					<h5 class="mb-4"><strong>Phương tiện</strong> {{$tour_chitiet-> phuongtien}}</h5>
				</div>
				<div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
					<h4 class="mb-4">Các tour du lịch khác</h4>
					<div class="row">
						@foreach($tour_tuongtu as $t_tt)
						<div class="col-md-4 ftco-animate">
						<div class="destination">
				              <a href="{{route('chitiettour', $t_tt-> id)}}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(source/images/tour/{{$t_tt-> hinh_1}});">
				                <div class="icon d-flex justify-content-center align-items-center">
				                  <span class="icon-search2"></span>
				                </div>
				              </a>
				              <div class="text p-3">
				                {{-- <div class="d-flex">
				                  <div class="one"> --}}
				                    <h3><a href="{{route('chitiettour', $t_tt-> id)}}">{{$t_tt-> tentour}}</a></h3>
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
				                <p>Ngày khởi hành: {{date('d-m-Y', strtotime($t_tt-> ngay_khoihanh))}}</p> {{-- định dạng ngày tháng --}}
				                <p>Ngày kết thúc: {{date('d-m-Y', strtotime($t_tt-> ngay_ketthuc))}}</p>
				                <p class="days"><span style="color: red">{{$t_tt-> thoigian_tour}}</span></p>
				                <hr>
				                <div class="two">
				                  <p>
				                    @if($t_tt-> gia_km==0)
				                        <span class="price">{{number_format($t_tt-> gia). 'đ'}}</span>
				                      @else
				                        <span class="pe-price" style="text-decoration :line-through; position: relative;">{{number_format($t_tt-> gia). 'đ'}}</span>
				                        <span class="price">{{number_format($t_tt-> gia_km). 'đ'}}</span>
				                      @endif
				                    </p>
				                </div>
				                <hr>
				                <p class="bottom-area d-flex">
				                  <span><i class="icon-map-o"></i> {{$t_tt-> diem_den}}</span> 
				                  <span class="ml-auto"><a href="{{route('dattour', $t_tt-> id)}}">Đặt ngay</a></span>
				                </p>
				              </div>
				            </div>
				        </div>
						@endforeach
					</div>
					<div class="row">{{$tour_tuongtu-> links()}}</div>
				</div>
				<div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
					<h4 class="mb-5">Check Availability &amp; Booking</h4>
					<div class="fields">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Name">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Email">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" id="checkin_date" class="form-control" placeholder="Date from">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" id="checkin_date" class="form-control" placeholder="Date to">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="select-wrap one-third">
										<div class="icon"><span class="ion-ios-arrow-down"></span></div>
										<select name="" id="" class="form-control" placeholder="Guest">
											<option value="0">Guest</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="select-wrap one-third">
										<div class="icon"><span class="ion-ios-arrow-down"></span></div>
										<select name="" id="" class="form-control" placeholder="Children">
											<option value="0">Children</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="submit" value="Check Availability" class="btn btn-primary py-3">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
					<h4 class="mb-4">Review &amp; Ratings</h4>
					<div class="row">
						<div class="col-md-6">
							<form method="post" class="star-rating">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">
										<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i> 100 Ratings</span></p>
									</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">
										<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i> 30 Ratings</span></p>
									</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">
										<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 5 Ratings</span></p>
									</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">
										<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
									</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">
										<p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
									</label>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- .col-md-8 -->
	</div>
</div>
</section> <!-- .section -->
@endsection