<!DOCTYPE html>
<?php if(\Auth::check())
          {
            $user = \Auth::user();
          }
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ URL::asset('css/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" media="screen" title="no title" charset="utf-8">
    </head>
    <body>
    @include('layouts.sidenav')
            <div id="mainSection" class="section">
              @yield('content')
            </div>

    </body>
    </html>
