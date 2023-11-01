@extends('layouts.admin')
@section('title')
| Chủ đề
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('admins/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('admins/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('admins/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
<style>
    .icon-delete {
        color: red;
    }

    .icon-delete:hover {
        color: #d50909;
    }
</style>
@endsection
@section('content')
<div class="content-wrapper">
    {{-- content header  --}}
    <div class=" content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Chủ đề</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Chủ đề</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    {{-- end content header --}}
    {{-- main content  --}}
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-uppercase">Danh sách</h3>
                            <a class="btn btn-primary float-right" href="{{route('categories.create')}}"><i class="fas fa-plus-circle"></i> Thêm</a>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên chủ đề</th>
                                        <th><i class="fas fa-cog"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $cate)
                                    <tr>
                                        <td>{{$loop->iteration }}</td>
                                        <td>{{$cate->name}}</td>
                                        <td>
                                            <a href="{{route('categories.edit', ['id'=>$cate->id])}}"><i class="fas fa-edit"></i></a> &nbsp; &nbsp;
                                            <a onclick="return confirm('bạn có chắc muốn xóa dữ liệu này');" href="{{route('categories.destroy', ['id'=>$cate->id])}}"><i class="fas fa-trash-alt icon-delete"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên chủ đề</th>
                                        <th><i class="fas fa-cog"></i></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- end main content --}}
</div>
@endsection
@section('js')
<script src="{{asset('admins/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admins/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admins/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admins/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('admins/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admins/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('admins/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('admins/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('admins/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('admins/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admins/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('admins/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script>
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
</script>
@endsection