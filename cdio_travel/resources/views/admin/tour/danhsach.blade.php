@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tour
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(Session::has('thongbao'))
                    <div class="alert alert-success">{{Session::get('thongbao')}}</div>
            @endif
            
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên tour</th>
                        <th>ID miền</th>
                        <th>Ngày khởi hành</th>
                        <th>Ngày kết thúc</th>
                        <th>Thời gian tour</th>
                        <th>Điểm khởi hành</th>
                        <th>Điểm đến</th>
                        <th>Phương tiện</th>
                        <th>ID khách sạn</th>
                        <th>Tên khách sạn</th>
                        <th>Hình 1</th>
                        <th>Hình 2</th>
                        <th>Hình 3</th>
                        {{-- <th>Nội dung</th> --}}
                        <th>Số lượng cho phép</th>
                        <th>Giá gốc</th>
                        <th>Giá khuyến mãi</th>
                        <th>Nổi bật</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($tour as $t)
                    <tr class="odd gradeX" align="center">
                        <td>{{$t-> id}}</td>
                        <td>{{$t-> tentour}}</td>
                        <td>{{$t-> id_mien}}</td>
                        <td>{{$t-> ngay_khoihanh}}</td>
                        <td>{{$t-> ngay_ketthuc}}</td>
                        <td>{{$t-> thoigian_tour}}</td>
                        <td>{{$t-> diem_khoihanh}}</td>
                        <td>{{$t-> diem_den}}</td>
                        <td>{{$t-> phuongtien}}</td>
                        <td>{{$t-> id_ks}}</td>
                        <td>{{$t-> ten_ks}}</td>
                        <td>
                            <img width="100px" src="source/images/tour/{{$t-> hinh_1}}"><br>
                            {{$t-> hinh_1}}
                        </td>
                        <td>
                            <img width="100px" src="source/images/tour/{{$t-> hinh_2}}"><br>
                            {{$t-> hinh_2}}
                        </td>
                        <td>
                            <img width="100px" src="source/images/tour/{{$t-> hinh_3}}"><br>
                            {{$t-> hinh_3}}
                        </td>
                        {{-- <td>{{$t-> noidung}}</td> --}}
                        <td>{{$t-> soluong_nguoi}}</td>
                        <td>{{$t-> gia}}</td>
                        <td>{{$t-> gia_km}}</td>
                        <td>{{$t-> noibat}}</td>
                        <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/tour/xoa/{{$t-> id}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="admin/tour/sua/{{$t-> id}}">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection