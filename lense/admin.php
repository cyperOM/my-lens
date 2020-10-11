<?php
require 'includes/header.php';
require 'includes/dbhandler.php';
?>

<main>
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/upload-display.js"></script>
    <?php
    if (isset($_SESSION['uid'])) {
    ?>
        <div class="h-50 center-me text-center">
            <div class="my-auto UPLOAD-CONTAINER">
                <form action="includes/gallary-helper.php" method="POST" enctype="multipart/form-data">
                <div class ="form-group">
                <img src="images/atlanticCity.jpg" onclick="triggered();"id="prof-display">
                <label for="prof-image" id="Uname-style"><?php echo$prof_user;?></label>
                <input type="file" name ="pro-image" id="prof-image" onchange="preview(this)" class="form-control" style="display: non;">
                
                
                
                </div>
                
                
                
                
                
                
                </form> </div> </div> <div class="gallery-upload">

            </div>


        <?php
    } else {
        header("Location: ../login.php?error=Login");
        exit();
    }
        ?>
</main>