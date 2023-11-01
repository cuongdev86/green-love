<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Green love @yield('title')</title>
    <link rel="icon" type="image/png" href="{{asset('admins/dist/img/globe.png')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{asset('admins/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    @yield('css')
    <link rel="stylesheet" href="{{asset('admins/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('admins/custom-css/style.css')}}">

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        {{-- header --}}
        @include('admin.partial.header')
        {{-- sidebar --}}
        @include('admin.partial.sidebar')
        @yield('content')
        {{-- Control Sidebar--}}
        <aside class="control-sidebar control-sidebar-dark">
            <div class="p-3">
                <h5>Ghi chú</h5>
                <p>Sidebar content</p>
                <p>Sidebar content</p>
                <p>Sidebar content</p>
            </div>
        </aside>
        {{-- footer  --}}
        @include('admin.partial.footer')
    </div>

    <script src="{{asset('admins/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admins/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
    @yield('js')
    <script src="{{asset('admins/dist/js/adminlte.min.js')}}"></script>
</body>

</html>