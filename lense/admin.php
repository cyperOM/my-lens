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
                <input type="file" name ="gallary-image" id="gallary-image" onchange="preview(this)" class="form-control" style="display: non;">
                <input type="text" name="title" id="title" class="form-control" placeholder="Description" require>

                </div>
                <div class="form-group">

                <textarea name="description" id="discription" cols="30" rows = "3" placeholder="Description"style="text-align: Center;">
            </textarea>
                </div>
                <div class="form-group">
        <button type="submit" name="gallary-submit" class="btn btn-outline-success btn-lg btn-block">upload</button>
</div>
                
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