<?php
require "includes/header.php"
?>

<main>
    <div class="back-img">
<div class="h-100 container center-me">
<div class ="my-auto">
    <div class = "signup-form">
<form action ="includes/signup-helper.php" method="post">
<h2>Register</h2>
<p class ="hint-text">Creat new account</p>
<div class="form-group">
<div class="row">
<div class="col">
<input type="text" class= "form-control" name="Fname" placeholder="first name " required="required">
</div> <!-- End col !--> 
<div class="col">
<input type="text" class= "form-control" name="Lname" placeholder="Last name " required="required">
</div> <!-- End col !--> 
</div> <!-- End row !-->
<div class="row">
    <div class ="col">
<input type="text" class= "form-control" name="Uname" placeholder="Username " required="required">
</div> <!-- End col !--> 
</div> <!-- End Row!--> 
<div class="row">
    <div class ="col">
<input type="email" class= "form-control" name="Email" placeholder="E-mail" required="required">
</div> <!-- End col !--> 
</div> <!-- End Row!--> 
<div class="row">
    <div class ="col">
<input type="password" class= "form-control" name="Password" placeholder="Username " required="required">
</div> <!-- End col !--> 
</div> <!-- End Row!--> 

<div class="row">
    <div class ="col">
        <button type ="submite" name="signup-submit" class ="btn btn-success btn-lg btn=block"> Register </button>
</div> <!-- End col !--> 
</div> <!-- End Row!--> 
</div>
</form>
<h4> If you are already a member </h4>
<button type="button" class="btn btn-primary btn-sm"> Sign In </button>

<!-- End Div !-->
</div>
</div>
</div>
</div>
</main>