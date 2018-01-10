@if ($alert = Session::get('alert-success-login'))
  <div class="alert alert-success dismissable fade-in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      {{ $alert }}
  </div>
@endif
