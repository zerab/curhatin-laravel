<div class="side-nav">
  <div class="side-nav-header">
    <span>Curhatin Administrative Panel</span>
  </div>
  <div class="profile-bubble">
    <img src="images/7cf.jpg" class="photo-round"><br>
    <span style="font-weight:bold;text-transform:capitalize;">{{ $admin->firstname }} {{ $admin->lastname }}</span><br>
    <span style="text-decoration:italic;font-size:15px;"><i>Administrator</i></span>
  </div>
  <!--<div class="tables-menu">
    <div class="table-list">
      <span class="fa fa-user"></span><br>User
    </div>
    <div class="table-list">
      <span class="fa fa-user-o"></span><br>Counselor
    </div>
    <div class="table-list">
      <span class="fa fa-users"></span><br>
    </div>
  </div>-->
  <div class="nav-buttons">
  <a href="/admin"><div class="nav-link">
    <span class="nav-title">Dashboard</span>
  </div></a>
  <a href="/admin/user"><div class="nav-link">
    <span class="nav-title">User Management</span>
  </div></a>
  <a href="/admin/counselor"><div class="nav-link">
    <span class="nav-title">Counselor Management</span>
  </div>
</a>
  <a href="/admin/category">
  <div class="nav-link">
    <span class="nav-title">Category Management</span>
  </div>
  </a>
<a href="/admin/rating">
  <div class="nav-link">
    <span class="nav-title">Rating Management</span>
  </div>
</a>
  <div class="nav-link">
    Others<span class="fa fa-caret-down" style="float:right;"></span>
  </div>
 
  <div class="panel">
    try
    try
  </div>
<a href="/admin/flagging">
  <div class="nav-link">
    <span class="nav-title">Flagging Management</span>
  </div>
</a>

</div>
</div>
<script>
var acc = document.getElementsByClassName("nav-link");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
</script>
