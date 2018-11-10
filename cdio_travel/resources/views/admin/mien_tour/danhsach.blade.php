@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Miền Tour
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
                        <th>Tên Miền</th>
                        <th>Mô tả</th>
                        <th>Hình</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($mien_tour as $mt)
                    <tr class="odd gradeX" align="center">
                        <td>{{$mt-> id}}</td>
                        <td>{{$mt-> ten_mien}}</td>
                        <td>{{$mt-> mota}}</td>
                        <td>
                            <img width="100px" src="source/images/mien_tour/{{$mt-> hinh}}"><br>
                            {{$mt-> hinh}}
                        </td>
                        <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/mien_tour/xoa/{{$mt-> id}}"onclick="confirm('Bạn có chắc chắn xóa')"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="admin/mien_tour/sua/{{$mt-> id}}">Edit</a></td>
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