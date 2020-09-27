<?php 
session_start();

require 'includes/header.php';
include "dbhandler.php";

if(!isset($_SESSION['Uname'])){
    header('Location: about.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: login.php');
}

?>

<main>
        
      
</main>