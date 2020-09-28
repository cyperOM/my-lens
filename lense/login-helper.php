
<?php
include "header.php";
if (isset($_POST['login'])) {
     require 'dbhandler.php';

     $Email = $_POST['Uname'];
     $Password = $_POST['pwd'];

     if (empty($Email)||empty($password)){
      header("Location: ../login.php?error=NoEntery");
      exit();
     }
     $SQL = "SELECT * FROM users WHERE Uname =? or Email = ?;";
     $stmt = mysqli_stmt_init($conn);
     if(!mysqli_stmt_prepare($stmt,$sql)){
      header("location:../login.php?error=SQLinjectionAlert");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt,"ss",$Email,$Email);
      mysqli_stmt_execute($stmt);

      $result = mysqli_stmt_get_result($stms);
      $data = mysqli_fetch_assoc($result);
      if (empty($data)) {
        header("location:../login.php?error=UserDNE");
      exit();
      }
       else{
         $pass_check = password_verify($Password,$data['Password']);


         if ($pass_check == true ) {
           session_start();
           $_SESSION['New ID'] = $data['New ID'];
           $_SESSION['Fname'] = $data['Fname'];
           $_SESSION['Uname'] = $data['Uname'];
           header("location:../profile.php?succ=Login");
           exit();

         }
         else {
          header("location:../login.php?error=PassNotmatch");
          exit();
         }
       }
    }

}
else{
  header("Location: ../login.php");
  exit();
}