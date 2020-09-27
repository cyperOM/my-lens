
<?php
include "header.php";
if (isset($_POST['login'])) {
     require 'dbhandler.php';

     $Email = $_POST['email'];
     $Password = $_POST['pwd'];
     $hash = password_hash($Password, PASSWORD_DEFAULT);


     if ($Email != "" && $Password != ""){

      $sql_query = "select count(*) as cntUser from users where username='".$Email."' and password='".$Password."'";
      $result = mysqli_query($conn,$sql_query);
      $row = mysqli_fetch_array($result) or die (mysqli_error($connection)) ;
      $count = mysqli_num_rows($result);

      if ($count == 1){
         header("location:../profile.php");
         
         }else{
         echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
         }
  }

}