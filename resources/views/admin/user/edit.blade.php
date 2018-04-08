<?php if(\Auth::guard('admin')->check())
          {
            $admin = \Auth::guard('admin')->user();
          }
?>
@extends('admin.layouts.master')
@section('title', 'Edit User {{ $user->id }} - Curhatin')
@section('content-title', 'Edit User {{$user->id}}')
@section('content')
<div class="table-head">
<div class="table-title">
  Edit User {{$user->id}}
</div>
</div>
@include('layouts.alert')
<form class="form-edit" action="/admin/user/{{$user->id}}/update" method="post">
  <input type="hidden" name="_method" value="PATCH">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <div class="form-label">
      First Name
    </div>
    <div class="input-text">
      <input type="text" name="firstname" value="{{$user->firstname}}">
    </div>
  </div>
  <div class="form-group">
    <div class="form-label">
      Last Name
    </div>
    <div>
      <input type="text" name="lastname" value="{{$user->lastname}}">
    </div>
  </div>
  <div class="form-group">
    <div class="form-label">
      Username
    </div>
    <div>
      <input type="text" name="username" value="{{$user->username}}">
    </div>
  </div>
  <div class="form-group">
    <div class="form-label">
      Email
    </div>
    <div>
      <input type="text" name="email" value="{{$user->email}}">
    </div>
  </div>
  <div class="form-group">
    <div class="form-label">
      Birthdate
    </div>
    <div>
      <input type="date" name="birthdate" value="{{$user->birthdate}}">
    </div>
  </div>
  <div class="form-group">
    <div class="form-label">
      Birthplace
    </div>
    <div>
      <input type="text" name="birthplace" value="{{$user->birthplace}}">
    </div>
  </div>
  <div class="form-group">
    <div class="form-label">
      Gender
    </div>
    <?php
    $male = '';
    $female = '';
    if($user->gender == 'm'){
    $male = 'checked';}
    elseif($user->gender == 'f'){
      $female = 'checked';
    }  ?>
    <div style="margin:7.5px;">
    <div style="padding:7.5px;display:inline;">
    <input type="radio" name="gender" value="m" {{$male}}>Male
    </div>
    <div style="padding:7.5px;display:inline;">
    <input type="radio" name="gender" value="f" {{$female}}>Female
    </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-label">
      Phone Number
    </div>
    <div>
      <input type="number" name="phone" value="{{$user->phone}}">
    </div>
  </div>
  <div style="float:right;padding-right:9%;">
    <div>
    <input class="button" type="submit" value="Update">
    </div>
  </div>
</form>

@endsection
