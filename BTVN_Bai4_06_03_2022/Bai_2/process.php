<?php
$target_dir = "image_upload/";
$target_file = $target_dir . basename($_FILES["image_avatar"]["name"]);
$uploadOk = true;
$image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// kiểm tra file ảnh
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image_avatar"]["tmp_name"]);
    if($check !== false){
        echo "File is an image - ".$check["mime"];
        $uploadOk = true;
    }else{
        echo "File is not an image.";
        $uploadOk = false;
    }
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = false;
    }

    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = false;
    }

    if($image_file_type != "jpg" && $image_file_type != "png" && $image_file_type != "jpeg"
        && $image_file_type != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = false;
    }

    if ($uploadOk == false) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["image_avatar"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["image_avatar"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}else{
    echo "Failed !";
}