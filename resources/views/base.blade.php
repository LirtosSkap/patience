<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GuestBook</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<div class="wrapper">

{{--Content--}}
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="content-header">
            <h1>@yield('title', '')</h1>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </div>
    <!-- /.content-wrapper -->


    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

</body>
{{-- Add js --}}
<script src="{{ asset('js/app.js') }}"></script>
</html>