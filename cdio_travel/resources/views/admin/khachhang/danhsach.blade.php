@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Khách Hàng
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
                        <th>Tên Khách Hàng</th>
                        <th>Giới tính</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Ghi chú</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($khach_hang as $kh)
                    <tr class="odd gradeX" align="center">
                        <td>{{$kh-> id}}</td>
                        <td>{{$kh-> ten_kh}}</td>
                        <td>{{$kh-> gioitinh}}</td>
                        <td>{{$kh-> email}}</td>
                        <td>{{$kh-> diachi}}</td>
                        <td>{{$kh-> sdt}}</td>
                        <td>{{$kh-> ghichu}}</td>
                        <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/khachsan/xoa/"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/khachsan/sua/">Edit</a></td>
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