<?php if(\Auth::guard('admin')->check())
          {
            $admin = \Auth::guard('admin')->user();
          }
?>
@extends('admin.layouts.master')
@section('title', 'User Management - Curhatin')
@section('content-title', 'User Management')
@section('content')
<div class="table-title">
  USER MANAGEMENT
</div>
<div class="table-wrapper">
  <table class="table">
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
      <th>Email</th>
      <th>Birth Date</th>
      <th>Birth Place</th>
      <th>Gender</th>
      <th>Phone Number</th>
      <th>Action</th>
    </tr>
    @foreach($users as $user)
    <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->firstname }}</td>
      <td>{{ $user->lastname }}</td>
      <td>{{ $user->username }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->birthdate }}</td>
      <td>{{ $user->birthplace }}</td>
      <td>
        @if($user->gender == 'm')
          Male
        @endif
        @if($user->gender == 'f')
          Female
        @endif
      </td>
      <td>{{ $user->phone }}</td>
      <td><a href="admin/user/edit/{{ $user->id }}"><span class="fa fa-pencil button button-blue  "></span><a href="admin/user/delete/{{ $user->id }}"><span class="fa fa-trash button button-red"></span></td>
    </tr>
    
      @endforeach
  </table>
</div>
{{ $users->links() }}
@endsection
