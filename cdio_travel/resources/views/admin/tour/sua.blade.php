@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tour
                    <small>{{$tour-> tentour}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12" style="padding-bottom:120px">
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

                <form action="admin/tour/sua/{{$tour-> id}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    {{-- <div class="col-lg-6"> --}}
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tên tour</label>
                                            <input class="form-control" name="tentour" placeholder="Nhập tên tour" value="{{$tour-> tentour}}" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tên Miền</label>
                                            <select class="form-control" name="id_mien">
                                                @foreach($m_tour as $m_t)
                                                <option
                                                @if($tour-> id_mien == $m_t-> id)
                                                {{"selected"}}
                                                @endif
                                                value="{{$m_t-> id}}">{{$m_t-> ten_mien}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Ngày khởi hành</label>
                                            <input type="date" name="ngay_khoihanh" max="3000-12-31" 
                                            min="1000-01-01" class="form-control" value="{{$tour-> ngay_khoihanh}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Ngày kết thúc</label>
                                            <input type="date" name="ngay_ketthuc" max="3000-12-31" 
                                            min="1000-01-01" class="form-control"value="{{$tour-> ngay_ketthuc}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Thời gian tour</label>
                                            <input class="form-control" name="thoigian_tour" placeholder="Nhập thời gian tour" value="{{$tour-> thoigian_tour}}" />
                                        </div>
                                        <div class="form-group">
                                            <label>Điểm khởi hành</label>
                                            <input class="form-control" name="diem_khoihanh" placeholder="Nhập nơi khỏi hành" value="{{$tour-> diem_khoihanh}}"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Điểm đến</label>
                                            <input class="form-control" name="diem_den" placeholder="Nhập thời nơi đến" value="{{$tour-> diem_den}}" />
                                        </div>
                                        <div class="form-group">
                                            <label>Phương tiện di chuyển</label><br>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="phuongtien[]" value="Máy bay">Máy bay
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="phuongtien[]" value="Ô tô">Ô tô
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="phuongtien[]" value="Du thuyền">Du thuyền
                                            </label>
                                        </div>
                                        {{-- <div class="form-group">
                                            <label>Mã Miền</label>
                                            <select class="form-control" name="ten_mien" id="ten_mien">
                                                <option value="0">Chọn miền</option>
                                                @foreach($m_ks as $m_ks)
                                                <option value="{{$m_ks-> id}}">{{$m_ks-> ten_mien}}</option>
                                                @endforeach
                                            </select>
                                        </div> --}}
                                        <div class="form-group">
                                            <label>Tên Miền</label>
                                            <select class="form-control" name="ten_mien" id="ten_mien">
                                                @foreach($m_ks as $m_ks)
                                                <option
                                                @if($tour-> id_mien == $m_ks-> id)
                                                {{"selected"}}
                                                @endif
                                                value="{{$m_ks-> id}}">{{$m_ks-> ten_mien}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tên Khách sạn</label>
                                            <select class="form-control" name="id_ks" id="id_ks">
                                                @foreach($tour_ks as $t_ks)
                                                <option
                                                @if($tour-> id_mien == $t_ks-> id)
                                                {{"selected"}}
                                                @endif
                                                value="{{$t_ks-> id}}">{{$t_ks-> ten_ks}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        {{-- <div class="form-group">
                                            <label>Khách sạn</label>
                                            <select class="form-control" name="id_ks" id="id_ks">
                                                <option value="0">Chọn khách sạn</option>
                                                @foreach($tour_ks as $t_ks)
                                                <option value="{{$t_ks-> id}}">{{$t_ks-> ten_ks}}</option>
                                                @endforeach
                                            </select>
                                        </div> --}}
                                </div>
                                {{-- <div class="col-lg-6"> --}}
                                    {{-- <div class="col-lg-6"> --}}
                                        <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="custom-file">Hình 1
                                                      <p>
                                                        <img width="400px" src="source/images/tour/{{$tour-> hinh_1}}">
                                                      </p>
                                                      <input type="file" name="hinh_1" class="custom-file-input">
                                                      <span class="custom-file-control"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="custom-file">Hình 2
                                                      <p>
                                                        <img width="400px" src="source/images/tour/{{$tour-> hinh_2}}">
                                                      </p>
                                                      <input type="file" name="hinh_2" class="custom-file-input">
                                                      <span class="custom-file-control"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="custom-file">Hình 3
                                                      <p>
                                                        <img width="400px" src="source/images/tour/{{$tour-> hinh_3}}">
                                                      </p>
                                                      <input type="file" name="hinh_3" class="custom-file-input">
                                                      <span class="custom-file-control"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nội dung</label>
                                                    <textarea class="form-control ckeditor" name="noidung" rows="3"placeholder="Nhập nội dung">{{$tour-> noidung}}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Số lượng cho phép</label>
                                                    <input class="form-control" name="soluong_nguoi" placeholder="Nhập số lượng người" value="{{$tour-> soluong_nguoi}}" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Giá gốc</label>
                                                    <input class="form-control" name="gia" placeholder="15000000 VND" value="{{$tour-> gia}}" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Giá khuyến mãi</label>
                                                    <input class="form-control" name="gia_km" placeholder="9000000 VND" value="{{$tour-> gia_km}}" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Nổi bật</label></br>
                                                    <label class="radio-inline">
                                                        <input name="noibat" value="1" checked="" type="radio">Có
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input name="noibat" value="0" type="radio">Không
                                                    </label>
                                                </div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-6"> --}}
                                        <button type="submit" class="btn btn-default">Sửa</button>
                                        <button type="reset" class="btn btn-default">Làm Mới</button>
                                    </div>
                                </div>
                                <form>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->
                    </div>
                    <!-- /#page-wrapper -->
                    @endsection
                    @section('script')
                    <script>
                        $(document).ready(function(){
                            $("#ten_mien").change(function(){
                                var id = $(this).val();
                                $.get("admin/ajax/tour/"+id,function(data){
                                    $("#id_ks").html(data);
                                });
                            });
                        });
                    </script>
                    @endsection