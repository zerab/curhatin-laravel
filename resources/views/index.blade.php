@extends('layouts.master')
@section('title', 'Home - Curhatin')
@section('content')
<?php $user = \Auth::user(); ?>
<div id="content-home">
    <form action="" method="post">
      <div class="status-group">
        <div class="status-label">What's on your mind?</div>
        <div class="status-input"><textarea name="body"></textarea></div>
      </div>
    </form>
</div>
@endsection
