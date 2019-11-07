@extends('master')
@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url('source/images/bg_2.jpg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
			<div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
				<p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{route('trangchu')}}">Trang chủ</a></span> <span>Liên hệ</span></p>
				<h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Liên hệ chúng tôi</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section contact-section ftco-degree-bg">
	<div class="container">
		<div class="row d-flex mb-5 contact-info">
			<div class="col-md-12 mb-4">
				<h2 class="h4">Thông tin liên lạc</h2>
			</div>
			<div class="w-100"></div>
			<div class="col-md-3">
				<p><span>Địa chỉ :</span> 146/11 Nguyễn Hoàng - TP Đà Nẵng</p>
			</div>
			<div class="col-md-3">
				<p><span>Số điện thoại :</span> <a href="tel://1234567920"> 84+ 1254 1548</a></p>
			</div>
			<div class="col-md-3">
				<p><span>Email :</span> <a href="mailto:info@yoursite.com">info@teamcdio_445.com</a></p>
			</div>
			<div class="col-md-3">
				<p><span>Website</span> <a href="{{route('trangchu')}}">StartDTUTravel.com</a></p>
			</div>
		</div>
		<div class="row block-9">
			<div class="col-md-6 pr-md-5">
				<form action="#">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Your Name">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Your Email">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Subject">
					</div>
					<div class="form-group">
						<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
					</div>
					<div class="form-group">
						<input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
					</div>
				</form>

			</div>
			{{-- <div class="col-md-6" id="map"></div> --}}
			<div id="map" style="width:500px;height:500px;">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2711.0848998072!2d108.21312795458022!3d16.062737500441756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTbCsDAzJzQ1LjAiTiAxMDjCsDEyJzQ5LjYiRQ!5e0!3m2!1svi!2s!4v1540221972534" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>
@endsection
