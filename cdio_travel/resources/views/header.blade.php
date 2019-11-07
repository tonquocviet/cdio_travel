  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <div class="logo_image"><img src="source/images/logo.png" alt=""></div>
      <a class="navbar-brand" href="{{route('trangchu')}}">Start DTU Travel</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="{{route('trangchu')}}" class="nav-link">Trang chủ</a></li>
          <li class="nav-item"><a href="{{route('danhmuctour')}}" class="nav-link">Danh Mục Tour</a></li>
          <li class="nav-item"><a href="{{route('gioithieu')}}" class="nav-link">Giới thiệu</a></li>
          <li class="nav-item"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="{{route('lienhe')}}" class="nav-link">Liên hệ</a></li>
          @if(Auth::check())
          <li class="nav-item cta"><a href="" class="nav-link" style="margin-right: 10px"><span>Chào : {{Auth::user()-> full_name}}</span></a></li>
          <li class="nav-item cta"><a href="{{route('logout')}}" class="nav-link"><span>Đăng Xuất</span></a></li>
          @else
          <li class="nav-item cta"><a href="{{route('register')}}" class="nav-link" style="margin-right: 10px"><span>Đăng kí</span></a></li>
          <li class="nav-item cta"><a href="{{route('login')}}" class="nav-link"><span>Đăng Nhập</span></a></li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
