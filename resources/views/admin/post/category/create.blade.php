@extends('layouts.admin')
@section('title')
| Thêm chủ đề
@endsection
@section('css')
<!-- <link rel="stylesheet" href="{{asset('admins/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
<link rel="stylesheet" href="{{asset('admins/plugins/toastr/toastr.min.css')}}"> -->

@endsection
@section('content')
<div class="content-wrapper">
    {{-- content header  --}}
    <div class=" content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Thêm chủ đề</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Thêm chủ đề</li>
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
                        <div class="card-body">
                            <form action="{{route('categories.store')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Tên chủ đề</label>
                                            <input name="name" type="text" class="form-control" required placeholder="Nhập tên chủ đề">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Mô tả</label>
                                            <textarea name="desc" id="" cols="30" rows="6" class="form-control" placeholder="Nhập mô tả chủ đề"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-submit btn-primary float-right">Lưu lại</button>
                            </form>
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
<!-- <script src="{{asset('admins/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('admins/plugins/toastr/toastr.min.js')}}"></script>

<script>
    $(function() {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            // timer: 3000
        });
        $('.swalDefaultSuccess').click(function() {
            Toast.fire({
                icon: 'success',
                title: 'Thêm thành công',
                timer: 5000,
                // showConfirmButton: true,
                showCloseButton: true,
            })
        });
    });
</script> -->
@endsection