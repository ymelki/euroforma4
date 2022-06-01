<?php include "header.php";     ?>
<?php

       
?>

      <p class="h1">Inscription</p>
<form action="/inscription_enregistrer" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"  name="pwd">
  </div>
   
  <button type="submit" class="btn btn-primary">Inscription</button>
</form>