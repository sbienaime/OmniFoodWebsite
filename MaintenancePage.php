<!DOCTYPE HTML>
<HTMl>
    <HEAD><TITLE>SITE MAINTENANCE BACKEND </TITLE> </HEAD>
    
    
    <BODY>

<?php 
session_start();
function rename_win($oldfile,$newfile) {
    if (!rename($oldfile,$newfile)) {
        if (copy ($oldfile,$newfile)) {
            unlink($oldfile);
            return TRUE;
        }
        return FALSE;
    }
    return TRUE;
}
require_once('config.php');



if (isset($_POST['submit'])){
    
    
if (isset($_POST['statement']) & $_POST['statement']!== NULL & $_POST['statement']!==" " & !empty( $_POST['statement'])){
$update = ' UPDATE page_elements SET main_text="'.$_POST['statement'].'" WHERE page_id= 2;'; 
$conn->query($update);
$conn->close();


  $_SESSION['MESSAGE']= "<p>Update Successful</p>";
}


 else{
     
     
   /*  if ( isset($_POST['statement'])&  $_POST['statement']== NULL || $_POST['statement']==" " || empty( $_POST['statement']) ){
     }*/
     
     
  $_SESSION['MESSAGE']=" The mission statement field is empty, please try again";    
     
}


/*if (isset($_Post['header_image']) & $_POST['header_image']!== NULL & $_POST['header_image']!==""){
   
    
$update = ' UPDATE page_elements SET header_img="'.$target_dir.'" WHERE page_id= 2;'; 
$conn->query($update);
$conn->close();

echo "The mission Statement was successfully updated";   
    
    
}
*/


}


if(isset($_POST["submit_picture"])) {
require_once 'config.php';
//$target_dir = "C:/xampp/htdocs/WebAppsProj/uploads/";
$target_dir ="uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//$newfilename= "C:/xampp/htdocs/WebAppsProj/resources/css/img/vr2.jpg" ;


$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        
       
        $_SESSION['MESSAGE']= "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
      $_SESSION['MESSAGE']= "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    //rename_win($target_file,$newfilename);
   $_SESSION['MESSAGE']= "The file already exists, no need to upload it. ";
    //$uploadOk = 0;
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
        
       $update = ' UPDATE page_elements SET header_img="'.$target_file.'" WHERE page_id= 1;';
     // $update = 'UPDATE users SET profile_img="'.$target_file.'"  WHERE username="'. $_SESSION["username"].'";';
      $conn->query($update);
      
     $conn->close();
       
     $_SESSION['MESSAGE']= "The site has been updated.";
    } else {
        $_SESSION['MESSAGE']="Sorry, there was an error uploading your file.";
    }
}}




 header("location: OfficerPortal.php");
 exit;




?>

</BODY>

</HTMl>