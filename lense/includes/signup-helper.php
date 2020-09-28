<?php


if(isset($_POST['signup-submit'])){

    require 'dbhandler.php';
    $username = $_POST['Uname'];
    $Email = $_POST['Email'];
    $pass = $_POST['pwd'];
    $conPassword = $_POST['con-pwd'];
    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];

    if ($pass!== $conPassword){
        header("location:../signip.php?error=diff-pwd&Fname=".$Fname."&Lname".$Lname."&Unmae=".$username);
    exit();
    }
    else {
        $sql = "SELECT Uname FROM users WHERE Uname=?";
  $stmt = mysqli_stmt_init($conn);

  if(!mysqli_stmt_prepare($stmt,$sql)){
    header("location:../signip.php?error=SQLinjectionAlert");
    exit();
  }
  else {
      mysqli_stmt_bind_param($stmt,"s",$username);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $check = mysqli_stmt_num_rows($stmt);
      if($check > 0 ){
        header("location:../signip.php?error=UsernameTakenSorry");
        exit();
      }
      else{
          $sql ="INSERT INTO users (Fname,Lname,Email,Uname,Password) VALUES(?,?,?,?,?)";
          $stmt = mysqli_stmt_init($conn); 
          if(!mysqli_stmt_prepare($stmt,$sql)){
            header("location:../signup.php?error=SQLinjectionAlert");
            exit();
          }
          else {
              $hashhedPass = password_hash($pass, PASSWORD_BCRYPT);
              mysqli_stmt_bind_param($stmt,"sssss",$Lname,$Fname,$Email,$username,$hashhedPass);
               mysqli_stmt_execute($stmt);
              mysqli_stmt_store_result($stmt);

              header("Location:../signup.php?signup=Success");
              exit();
          }
      }

  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
  
    }
}
else {
    header("location:../signip.php");
    exit();
}