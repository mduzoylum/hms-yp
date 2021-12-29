<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HMS Yedek Parça</title>
    @include('yonetim.layouts.partials.header')
    @yield('header')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('admin/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60"
             width="60">
    </div>

    @include('yonetim.layouts.partials.navbar')
    @include('yonetim.layouts.partials.sidebar')

    @yield('content')

    <footer class="main-footer">
        <strong>Copyright &copy; 2021 <a href="https://mduzoylum.com">Mehmet Duzoylum</a></strong>
        tarafından hazırlanmıştır
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b>1.0
        </div>
    </footer>

    <aside class="control-sidebar control-sidebar-dark">
    </aside>
</div>
@include('yonetim.layouts.partials.footer')
<script src="{{asset('admin/app.js')}}"></script>
@include('sweetalert::alert')
@yield('footer')
</body>
</html>
