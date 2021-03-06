<!DOCTYPE html>
<?php if(\Auth::guard('admin')->check())
          {
            $admin = \Auth::guard('admin')->user();
          }
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <!--<link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">-->
        <link rel="stylesheet" href="{{ URL::asset('css/admin-style.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}">
    </head>
    <body>
        @include('admin.layouts.sidenav')
            <div id="main-section" class="section">
              <div class="wrapper">
              @yield('content')
              </div>
            </div>
          <script src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}"></script>
    </body>
    </html>
