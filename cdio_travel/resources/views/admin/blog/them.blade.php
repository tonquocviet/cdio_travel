@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Khách Sạn
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

                <form action="admin/khachsan/them" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Mã Miền</label>
                        <select class="form-control" name="id_mien">
                            <option value="0">Chọn miền</option>
                            @foreach($khach_san as $ks)
                            <option value="{{$ks-> id}}">{{$ks-> ten_mien}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tên Khách Sạn</label>
                        <input class="form-control" name="ten_ks" placeholder="Nhập tên khách sạn" />
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input class="form-control" name="diachi" placeholder="Nhập địa chỉ" />
                    </div>
                    <div class="form-group">
                        <label>Tiêu chuẩn khách sạn</label></br>
                        <label class="radio-inline">
                            <input name="tieuchuan" value="01 Sao" checked="" type="radio">01 Sao
                        </label>
                        <label class="radio-inline">
                            <input name="tieuchuan" value="02 Sao" type="radio">02 Sao
                        </label>
                        <label class="radio-inline">
                            <input name="tieuchuan" value="03 Sao" type="radio">03 Sao
                        </label>
                        <label class="radio-inline">
                            <input name="tieuchuan" value="04 Sao" type="radio">04 Sao
                        </label>
                        <label class="radio-inline">
                            <input name="tieuchuan" value="05 Sao" type="radio">05 Sao
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Ghi Chú</label>
                        <textarea class="form-control" name="ghichu" rows="3"placeholder="Nhập ghi chú"></textarea>
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