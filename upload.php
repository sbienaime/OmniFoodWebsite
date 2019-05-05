<?php
session_start();

$_SESSION['MESSAGE']= " ";
require_once 'config.php';
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit_picture"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        
       
        $_SESSION['MESSAGE']= "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $_SESSION['MESSAGE']= "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
   $_SESSION['MESSAGE']= "The file already exists, no need to upload it. ";
   // $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    $_SESSION['MESSAGE']= "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $_SESSION['MESSAGE']= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $_SESSION['MESSAGE']= "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        
     
      $update = 'UPDATE users SET profile_img="'.$target_file.'"  WHERE username="'. $_SESSION["username"].'";';
      $conn->query($update);
      
     $conn->close();
       
      $_SESSION['MESSAGE']= "You profile picture has been updated.";
    } else {
        $_SESSION['MESSAGE']= "Sorry, there was an error uploading your file.";
    }
}

 header("location: Dashboard.php");
    exit;