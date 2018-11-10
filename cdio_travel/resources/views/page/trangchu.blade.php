@extends('master')
@section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url('source/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Khám phá<br></strong>những thành phố tuyệt vời</h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Tìm kiếm địa điểm du lịch</p>
            <div class="block-17 my-4">
              <form action="{{route('search')}}" method="get" id="searchform" class="d-block d-flex">
                <div class="fields d-block d-flex">
                  <div class="textfield-search one-third">
                    <input type="text" value="" name="key" id="key" class="form-control" placeholder="Vd: Bà Nà Hill, Phố cổ Hội An">
                  </div>
                </div>
                <input type="submit" id="searchsubmit" class="search-submit btn btn-primary" value="Tìm kiếm">  
              </form>
            </div>  
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-guarantee"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Đảm bảo giá tốt nhất</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-like"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Thường xuyên có các tour khuyến mãi</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-detective"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Đại lý du lịch tốt nhất</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-support"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Hỗ trợ miễn phí 24/7</h3>
                <p>Gọi ngay 1800-2032 kể cả 2h sáng để được hỗ trợ. Hoàn toàn không mất phí!</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section ftco-destination">
      <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <span class="subheading">Địa điểm</span>
            <h2 class="mb-4"><strong>Điểm du lịch</strong> Nổi bật</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="destination-slider owl-carousel ftco-animate">
              @foreach($new_tour as $n_t)
              <div class="item">
                <div class="destination">
                  <a href="{{route('chitiettour', $n_t-> id)}}" class="img d-flex justify-content-center align-items-center" style="background-image: url(source/images/tour/{{$n_t-> hinh_1}});">
                    <div class="icon d-flex justify-content-center align-items-center">
                      <span class="icon-search2"></span>
                    </div>
                  </a>
                  <div class="text p-3">
                    <h3><a href="{{route('chitiettour', $n_t-> id)}}">{{$n_t-> tentour}}</a></h3>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <span class="subheading">Ưu đãi đặc biệt</span>
            <h2 class="mb-4"><strong>Top</strong> Tour hấp dẫn cho bạn</h2>
          </div>
        </div>        
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="destination-slider owl-carousel ftco-animate">
          @foreach($new_tour as $n_t)
          <div class="col-sm col-md-6 col-lg ftco-animate">
            <div class="destination">
              <a href="{{route('chitiettour', $n_t-> id)}}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(source/images/tour/{{$n_t-> hinh_3}});">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                {{-- <div class="d-flex">
                  <div class="one"> --}}
                    <h3><a href="{{route('chitiettour', $n_t-> id)}}">{{$n_t-> tentour}}</a></h3>
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
                <p>Ngày khởi hành: {{date('d-m-Y', strtotime($n_t-> ngay_khoihanh))}}</p> {{-- định dạng ngày tháng --}}
                <p>Ngày kết thúc: {{date('d-m-Y', strtotime($n_t-> ngay_ketthuc))}}</p>
                <p class="days"><span style="color: red">{{$n_t-> thoigian_tour}}</span></p>
                <hr>
                <div class="two">
                  <p>
                    @if($n_t-> gia_km==0)
                        <span class="price">{{number_format($n_t-> gia). 'đ'}}</span>
                      @else
                        <span class="pe-price" style="text-decoration :line-through; position: relative;">{{number_format($n_t-> gia). 'đ'}}</span>
                        <span class="price">{{number_format($n_t-> gia_km). 'đ'}}</span>
                      @endif
                  </div>
                  </p>
                <hr>
                <p class="bottom-area d-flex">
                  <span><i class="icon-map-o"></i> {{$n_t-> diem_den}}</span> 
                  <span class="ml-auto"><a href="{{route('dattour', $n_t-> id)}}">Đặt ngay</a></span>
                </p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <span class="subheading">Ưu đãi hấp dẫn</span>
            <h2 class="mb-4"><strong>Điểm đến</strong> Đang được khuyến mãi</h2>
          </div>
        </div>        
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="destination-slider owl-carousel ftco-animate">
          @foreach($khuyenmai_tour as $km_t)
          <div class="col-sm col-md-6 col-lg ftco-animate">
            <div class="destination">
              <a href="{{route('chitiettour', $km_t-> id)}}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(source/images/tour/{{$km_t-> hinh_1}});">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                {{-- <div class="d-flex">
                  <div class="one"> --}}
                    <h3><a href="{{route('chitiettour', $km_t-> id)}}">{{$km_t-> tentour}}</a></h3>
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
                <p>Ngày khởi hành: {{date('d-m-Y', strtotime($km_t-> ngay_khoihanh))}}</p> {{-- định dạng ngày tháng --}}
                <p>Ngày kết thúc: {{date('d-m-Y', strtotime($km_t-> ngay_ketthuc))}}</p>
                <p class="days"><span style="color: red">{{$km_t-> thoigian_tour}}</span></p>
                <hr>
                <div class="two">
                  <p>
                    <span class="pe-price" style="text-decoration :line-through; position: relative;">{{number_format($km_t-> gia). 'đ'}}</span>
                    <span class="price">{{number_format($km_t-> gia_km). 'đ'}}</span>
                  </div>
                  </p>
                <hr>
                <p class="bottom-area d-flex">
                  <span><i class="icon-map-o"></i> {{$km_t-> diem_den}}</span> 
                  <span class="ml-auto"><a href="{{route('dattour', $km_t-> id)}}">Đặt ngay</a></span>
                </p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(source/images/bg_1.jpg);">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-4">Những điều thú vị của chúng tôi</h2>
            <span class="subheading">More than 100,000 websites hosted</span>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="row">
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="10000">0</strong>
                    <span>Lượt mỗi năm</span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="4000">0</strong>
                    <span>Điểm đến thú vị</span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="8700">0</strong>
                    <span>Liên kết với khách sạn</span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="5600">0</strong>
                    <span>Liên kết với nhà hàng</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-start">
          <div class="col-md-5 heading-section ftco-animate">
            <span class="subheading">Best Directory Website</span>
            <h2 class="mb-4 pb-3"><strong>Tại sao</strong> Chọn chúng tôi?</h2>
            <p>Giá rẻ mỗi ngày với ưu đãi đặc biệt dành riêng cho ứng dụng.Giao dịch trực tuyến an toàn với nhiều lựa chọn như thanh toán tại cửa hàng tiện lợi, chuyển khoản ngân hàng, thẻ tín dụng đến Internet Banking. Không tính phí giao dịch.</p>
            <p>Đội ngũ nhân viên hỗ trợ khách hàng luôn sẵn sàng giúp đỡ bạn trong từng bước của quá trình đặt vé</p>
            <p><a href="#" class="btn btn-primary btn-outline-primary mt-4 px-4 py-3">Tìm hiểu thêm</a></p>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6 heading-section ftco-animate">
            <span class="subheading">Phản hồi</span>
            <h2 class="mb-4 pb-3"><strong>Khách hàng</strong> nói gì</h2>
            <div class="row ftco-animate">
              <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                  <div class="item">
                    <div class="testimony-wrap d-flex">
                      <div class="user-img mb-5" style="background-image: url(source/images/person_1.jpg)">
                        <span class="quote d-flex align-items-center justify-content-center">
                          <i class="icon-quote-left"></i>
                        </span>
                      </div>
                      <div class="text ml-md-4">
                        <p class="mb-5">Tôi rất thích các tour khuyến mãi trên website này, giá cả rất hợp lí.</p>
                        <p class="name">Việt Tường</p>
                        <span class="position">Khách từ USA</span>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="testimony-wrap d-flex">
                      <div class="user-img mb-5" style="background-image: url(source/images/person_2.jpg)">
                        <span class="quote d-flex align-items-center justify-content-center">
                          <i class="icon-quote-left"></i>
                        </span>
                      </div>
                      <div class="text ml-md-4">
                        <p class="mb-5">Chế độ chăm sóc hành khách của công ty rất ok. Rất thích.</p>
                        <p class="name">Dũng Nguyễn</p>
                        <span class="position">Khách từ Việt Nam</span>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="testimony-wrap d-flex">
                      <div class="user-img mb-5" style="background-image: url(source/images/person_3.jpg)">
                        <span class="quote d-flex align-items-center justify-content-center">
                          <i class="icon-quote-left"></i>
                        </span>
                      </div>
                      <div class="text ml-md-4">
                        <p class="mb-5">Nhờ các tour du lịch như thế này tôi biết thêm nhiều nơi ở Việt Nam rất đẹp.</p>
                        <p class="name">Văn Nguyễn</p>
                        <span class="position">Khách từ Trung Quốc</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <span class="subheading">Mẹo du lịch</span>
            <h2><strong>Mẹo</strong> &amp; Bài viết</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('source/images/image_1.jpg');">
              </a>
              <div class="text p-4 d-block">
                <span class="tag">Tips, Travel</span>
                <h3 class="heading mt-3"><a href="#">8 homestay tốt nhất ở Đà Lạt mà bạn không thể bỏ lỡ</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('source/images/image_2.jpg');">
              </a>
              <div class="text p-4">
                <span class="tag">Tips</span>
                <h3 class="heading mt-3"><a href="#">Kinh nghiệm đi Sapa 1 mình an toàn và tiết kiệm</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('source/images/image_3.jpg');">
              </a>
              <div class="text p-4">
                <span class="tag">Tips, Travel</span>
                <h3 class="heading mt-3"><a href="#">Review Đà Lạt - Mùa nào cũng đẹp</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('source/images/image_4.jpg');">
              </a>
              <div class="text p-4">
                <span class="tag">Tips, Travel</span>
                <h3 class="heading mt-3"><a href="#">Du lịch Hội An - Trải nghiệm rừng dừa nước độc đáo</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

  @endsection