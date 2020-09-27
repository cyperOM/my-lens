
<?php
include "header.php";
if (isset($_POST['login'])) {
     require 'dbhandler.php';

     $Email = $_POST['Uname'];
     $Password = $_POST['pwd'];
     $password = md5($Password); 

     if ($Email != "" && $Password != ""){

      $sql_query = "select count(*) as cntUser from users where username='".$Email."' and password='".$Password."'";
      $result = mysqli_query($conn,$sql_query);
      $row = mysqli_fetch_array($result) or die (mysqli_error($connection)) ;
      if (mysqli_num_rows($results) == 1){
         $_SESSION['username'] = $username; 
         $_SESSION['success'] = "You have logged in!";
         header("location:../profile.php");
         
         }else{
         echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
         }
  }

}
else{
  header("Location: ../login.php");
  exit();
}