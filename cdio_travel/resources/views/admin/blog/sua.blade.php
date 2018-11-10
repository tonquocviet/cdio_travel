@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa Khách sạn
                    <small>{{$khach_san-> ten_ks}}</small>
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

                <form action="admin/khachsan/sua/{{$khach_san-> id}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Miền khách sạn</label>
                        <select class="form-control" name="id_mien">
                            @foreach($mien_khach_san as $mks)
                            <option
                            @if($khach_san-> id_mien == $mks-> id)
                            {{"selected"}}
                            @endif
                            value="{{$mks-> id}}">{{$mks-> ten_mien}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tên khách sạn</label>
                        <input class="form-control" name="ten_ks" placeholder="Nhập tên khách sạn" value="{{$khach_san-> ten_ks}}"/>
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input class="form-control" name="diachi" placeholder="Nhập địa chỉ" value="{{$khach_san-> diachi}}"/>
                    </div>
                    <div class="form-group">
                        <label>Tiêu Chuẩn</label>
                        <input class="form-control" name="tieuchuan" placeholder="Nhập tiêu chuẩn khách sạn" value="{{$khach_san-> tieuchuan}}"/>
                    </div>
                    <div class="form-group">
                        <label>Ghi Chú</label>
                        <textarea class="form-control" name="ghichu" rows="2" placeholder="Nhập ghi chú" value="{{$khach_san-> ghichu}}"></textarea>
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