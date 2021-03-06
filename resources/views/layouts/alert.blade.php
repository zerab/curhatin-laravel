@if ($alert = Session::get('alert-success-login'))
  <div class="alert success">
    <span class="closebtn">&times;</span>
      {{ $alert }}
  </div>
@endif
@if ($alert = Session::get('alert-success-update'))
  <div class="alert success">
    <span class="closebtn">&times;</span>
      {{ $alert }}
  </div>
@endif
@if ($alert = Session::get('alert-success-delete'))
  <div class="alert success">
    <span class="closebtn">&times;</span>
      {{ $alert }}
  </div>
@endif
@if ($errors->any())
    <div class="alert danger">
        <span class="closebtn">&times;</span>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
}
</script>
