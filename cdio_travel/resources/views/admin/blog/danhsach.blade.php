@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Khách Sạn
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
                        <th>Mã Miền</th>
                        <th>Tên</th>
                        <th>Địa Chỉ</th>
                        <th>Tiêu chuẩn</th>
                        <th>Ghi Chú</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($khach_san as $ks)
                    <tr class="odd gradeX" align="center">
                        <td>{{$ks-> id}}</td>
                        <td>{{$ks-> id_mien}}</td>
                        <td>{{$ks-> ten_ks}}</td>
                        <td>{{$ks-> diachi}}</td>
                        <td>{{$ks-> tieuchuan}}</td>
                        <td>{{$ks-> ghichu}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/khachsan/xoa/{{$ks-> id}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/khachsan/sua/{{$ks -> id}}">Edit</a></td>
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