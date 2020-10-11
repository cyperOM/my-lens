<?php 

require 'dbhandler.php';

define('MB',1048576);
if (isset($_POST['gallary-submit'])) {
    $Uname = $_SESSION['Uname'];
    $file = $_FILES['gallary-image'];
    $file_name = $file['name'];
    $file_temp_name = $file['temp_name'];
    $file_error = $file['error'];
    $file_size = $file['size'];
    $title = $_POST['title'];

    $discription=  $_POST['discription'];

    $ext = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));

      $allowed = array('jpg','jpeg','png','svg');

      if ($file_error !==0 ) {
          header("Location: ../admin.php?error=uploadError");
          exit();
      } if(!in_array($ext,$allowed)){
        header("Location: ../admin.php?error=InvalidType");
        exit();
      }
      if ($file_size > 4*MB ) {
        header("Location: ../admin.php?error=LargFile");
        exit();
      }
      else{
          $new_name  = uniqid('',true).".".$ext;
          $desination = '../uploads/'.$new_name;
          $sql ="INSERT INTO pictures (title,discription,picpath) VALUES (?,?,?)";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("Location: ../login.php?error=SqlInjectionAlert");
            exit();
          }
          else {
            mysqli_stmt_bind_param($stmt,"sss",$title,$discription,$uid);
            mysqli_stmt_execute($stmt);
           mysqli_stmt_store_result($stmt);
           move_uploaded_file($file_temp_name,$desination);

           header("Location: ../gallary.php?succ=uploadSuccess ");
            exit();
         
          }
      }

   

}


?>

