<?php

require'../s3-frontend.php';
USE Aws\S3\S3Client;
USE Aws\Exception\AwsException;
if (isset($_POST['s3-submit'])) {
    $bucketname = "lens-1";
$file = $_FILES['s3-image'];
    $file_name = $file['name'];
    $file_temp_name = $file['temp_name'];
    $file_error = $file['error'];
    $file_size = $file['size'];
    $ext = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));

    try{


        $s3Clint = S3Clint::factory(

            array('region'=>'us-east-1', 'version'=>'latest','credentials'=>array('key'=>"AKIATGYFU7KVCZO2OQ74",'secret'=>"
            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")
        );
        $result = $s3Clint ->putobject([
            'Bucket'=>$bucketname , 'Key'=>'test_uplouds/'.uniqueid('',true).'.'.$ext,
            'SourceFile'=>$file_temp_name, 
            'ACL'=>'piblic-read'       ]);

            echo'Sucess! Photo URL:'. $result->get('objectURL')
    }catch (Aws\S3\Exception\S3 $e){

die("Error uploadinf file : ' .$e->getMessage()")
    }
}
}