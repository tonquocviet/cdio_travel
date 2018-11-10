@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Miền Tour
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-10" style="padding-bottom:120px">
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

                <form action="admin/mien_tour/them" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tên Miền</label></br>
                        <label class="radio-inline">
                            <input name="ten_mien" value="Miền Bắc" checked="" type="radio">Miền Bắc
                        </label>
                        <label class="radio-inline">
                            <input name="ten_mien" value="Miền Trung" type="radio">Miền Trung
                        </label>
                        <label class="radio-inline">
                            <input name="ten_mien" value="Miền Nam" type="radio">Miền Nam
                        </label>
                        <label class="radio-inline">
                            <input name="ten_mien" value="Miền Tây" type="radio">Miền Tây
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea class="form-control ckeditor" name="mota" rows="4">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label class="custom-file">Hình
                          <input type="file" name="hinh" class="custom-file-input">
                          <span class="custom-file-control"></span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Thêm</button>
                    <button type="reset" class="btn btn-default">Làm Mới</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection