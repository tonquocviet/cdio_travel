@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
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
                        <th>Full Name</th>
                        <th>Email</th>
                        {{-- <th>Password</th> --}}
                        <th>Quyền</th>
                        <th>SĐT</th>
                        <th>Active</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $user)
                    <tr class="odd gradeX" align="center">
                        <td>{{$user-> id}}</td>
                        <td>{{$user-> full_name}}</td>
                        <td>{{$user-> email}}</td>
                        {{-- <td>{{$user-> password}}</td> --}}
                        <td>{{$user-> quyen}}</td>
                        <td>{{$user-> sdt}}</td>
                        <td>{{$user-> active}}</td>
                        <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/user/xoa/{{$user-> id}}"onclick="confirm('Bạn có chắc chắn xóa')"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="admin/user/sua/{{$user-> id}}">Edit</a></td>
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