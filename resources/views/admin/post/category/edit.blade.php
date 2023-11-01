@extends('layouts.admin')
@section('title')
| Cập nhật chủ đề
@endsection
@section('css')
@endsection
@section('content')
<div class="content-wrapper">
    {{-- content header  --}}
    <div class=" content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Cập nhật chủ đề</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Cập nhật chủ đề</li>
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
                            <form action="{{route('categories.update', ['id'=>$category->id])}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Tên chủ đề</label>
                                            <input name="name" value="{{$category->name}}" type="text" class="form-control" required placeholder="Nhập tên chủ đề">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Mô tả</label>
                                            <textarea name="desc" id="" cols="30" rows="6" class="form-control" placeholder="Nhập mô tả chủ đề">{{$category->description}}</textarea>
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
@endsection