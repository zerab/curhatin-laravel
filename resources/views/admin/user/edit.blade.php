<?php if(\Auth::guard('admin')->check())
          {
            $admin = \Auth::guard('admin')->user();
          }
?>
@extends('admin.layouts.master')
@section('title', 'Edit user {{}} - Curhatin')
@section('content-title', 'User Management')
@section('content')
