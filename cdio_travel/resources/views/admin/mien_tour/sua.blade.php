@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa miền tour
                    <small>{{$mien_tour-> ten_mien}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @if(count($errors) >0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach
                    </div>
                @endif

                @if(Session::has('thongbao'))
                    <div class="alert alert-success">{{Session::get('thongbao')}}</div>
                @endif

                <form action="admin/mien_tour/sua/{{$mien_tour-> id}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tên Miền</label>
                        <input class="form-control" name="ten_mien" placeholder="Nhập tên miền" value="{{$mien_tour-> ten_mien}}"/>
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea class="form-control ckeditor" name="mota" rows="5">{{$mien_tour-> mota}}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label class="custom-file">Hình
                          <p>
                            <img width="400px" src="source/images/mien_tour/{{$mien_tour-> hinh}}">
                          </p>
                          <input type="file" name="hinh" class="custom-file-input">
                          <span class="custom-file-control"></span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Sửa</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection