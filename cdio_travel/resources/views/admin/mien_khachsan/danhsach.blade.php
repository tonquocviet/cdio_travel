@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Miền khách sạn
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
                        <th>Tên miền</th>
                        <th>Mô tả</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($mien_ks as $m_ks)
                    <tr class="odd gradeX" align="center">
                        <td>{{$m_ks-> id}}</td>
                        <td>{{$m_ks-> ten_mien}}</td>
                        <td>{{$m_ks-> mota}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/mien_khachsan/xoa/{{$m_ks-> id}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/mien_khachsan/sua/{{$m_ks-> id}}">Edit</a></td>
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