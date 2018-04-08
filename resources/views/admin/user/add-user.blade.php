<div id="modal-add-user" class="modal">
  <div class="modal-content">
    <div class="modal-header">
     <span class="close">&times;</span>
     <h2>Insert Data</h2>
   </div>
    <form action="/admin/user/add" method="post">
      {{ csrf_field() }}
      <div class="form-group-modal">
        <div class="form-label-modal">
        First Name
        </div>
        <div>
        <input type="text" name="firstname">
        </div>
      </div>
      <div class="form-group-modal">
        <div class="form-label-modal">
        Last Name
        </div>
        <div>
        <input type="text" name="lastname">
        </div>
      </div>
      <div class="form-group-modal">
        <div class="form-label-modal">
        Username
        </div>
        <div>
        <input type="text" name="username">
        </div>
      </div>
      <div class="form-group-modal">
        <div class="form-label-modal">
        Email
        </div>
        <div>
        <input type="text" name="email">
        </div>
      </div>
      <div class="form-group-modal">
        <div class="form-label-modal">
        Birthdate
        </div>
        <div>
        <input type="date" name="birthdate">
        </div>
      </div>
      <div class="form-group-modal">
        <div class="form-label-modal">
        Birth Place
        </div>
        <div>
        <input type="text" name="birthplace">
        </div>
      </div>
      <div class="form-group-modal">
        <div class="form-label-modal">
        Gender
        </div>
        <div style="margin:7.5px;">
        <div style="padding:7.5px;display:inline;">
        <input type="radio" name="gender" value="m">Male
        </div>
        <div style="padding:7.5px;display:inline;">
        <input type="radio" name="gender" value="f">Female
        </div>
        </div>
      </div>
      <div class="form-group-modal">
        <div class="form-label-modal">
        Phone Number
        </div>
        <div>
        <input type="number" name="phone">
        </div>
      </div>
      <div class="form-group-modal">
        <div class="form-label-modal">
        Password
        </div>
        <div>
        <input type="password" name="password">
        </div>
      </div>
      <div class="form-group-modal">
        <div class="form-label-modal">
        Password Confirmation
        </div>
        <div>
        <input type="password" name="password_confirmation">
        </div>
      </div>
      <div style="float:right;padding:2%;">
        <div>
        <input class="button" type="submit">
        </div>
      </div>
    </form>
  </div>
</div>
<script>
// Get the modal
var modal = document.getElementById('modal-add-user');

// Get the button that opens the modal
var btn = document.getElementById("add-user-btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "flex";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
