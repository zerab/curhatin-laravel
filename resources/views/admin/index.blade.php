<?php if(\Auth::guard('admin')->check())
          {
            $admin = \Auth::guard('admin')->user();
          }
?>
@extends('admin.layouts.master')
@section('title', 'Admin Dashboard - Curhatin')
@section('content-title', 'Dashboard')
@section('content')
<h3 style="color:#555;font-weight:300;">Welcome to Dashboard, {{$admin->firstname}}.</h3>
@endsection
