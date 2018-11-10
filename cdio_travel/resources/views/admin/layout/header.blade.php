<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="{{route('trangchu')}}">Start Travel</a>
		<img src="source/images/logo.png" alt="">
	</div>
	<!-- /.navbar-header -->

	<ul class="nav navbar-top-links navbar-right">
		<!-- /.dropdown -->
		<li class="dropdown">
			@if(Auth::check())
			<li><a href=""><i class="fa fa-user fa-fw"></i>Chào : {{Auth::user()-> full_name}}</a>
			</li>
			<li><a href="{{route('logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
			</li>
			@else
			<li><a href=""><i class="fa fa-user fa-fw"></i></a>
			</li>
			<li><a href=""><i class="fa fa-sign-out fa-fw"></i> Logout</a>
			</li>
         @endif
      </li>
      <!-- /.dropdown -->
  </ul>
  <!-- /.navbar-top-links -->

  @include('admin.layout.menu')
</nav>