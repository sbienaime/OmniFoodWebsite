<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html >
<html lang="en">

<html>
    
    
    
    
<head>
    
<title> Technology Club  
</title>
    
    
    
    
    
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
     <!-- grid.css makes a site  responsive -->
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">    
    
    
    
</head>    
 
    
    
<body>
    
 <?php

 
 require_once 'config.php';
 
 $profile_img;
 $firstname;
 $lastname;
   
 $select = 'Select profile_img from users where username ="'.$_SESSION['username'].'";';
 $selectname = 'Select first_name, last_name from users where username ="'.$_SESSION['username'].'";';  
 $result = $conn->query($select);
 $result2 = $conn->query($selectname);           
 while ($row = $result->fetch_assoc()) {
        
 $profile_img=$row['profile_img'];   

     }
     
  
 while ($row2 = $result2->fetch_assoc()) {      
 $firstname=$row2['first_name'];
 $lastname=$row2['last_name'];     
       
     }
    ?> 
   
 
    
<header class='subpageheader'>
       <nav class='subpage-nav'>
       <div class='row'>
        <!--<img src="resources/img/logo-white.png" alt ="Omnifood logo" class="logo">-->
        <!-- <img src="resources/img/logo.png" alt ="Omnifood logo" class="logo-black">-->
           <ul class="subpage-navlist">
            <li><a href='index.php'>Home</a></li>
            <li><a href='aboutus.php'>About Us </a></li>
            <li><a href='Resources.php'>Resources </a></li>
            <li><a href='contactus.php'>Contact Us </a></li>
            <li><a href='Dashboard.php'>Dashboard</a></li>
            <li><a href='registration.php'>Registration</a></li>
            <li><a href='OfficerPortal.php'>Officer Portal</a></li>
            <li><a href='logout.php'>Sign Out</a></li>
           </ul> 
       </div>
    </nav>
       
   </header>
    
<section class='DashboardSection'>
<div  class='DashboardContainer' >
   <h2>PROFILE MANAGER</h2>
        <center> <div class='PresidentProfile'>     
        <div class='presImg'> <img src='<?php echo $profile_img ?>' width='60%' height='80%'>
        <h4><?php echo $firstname.'  '.$lastname;?> </h4>
        </div>    
        </div></center>  <!-- end of presdiv -->
 
    <center> <form action="upload.php" method="post" enctype="multipart/form-data">
    <table border="0" width="auto" cellspacing="0" padding='10%'>
       
        <tbody>
            <tr>
                <td>Hi <?php echo $firstname; ?>, would you like to update your profile pic ? <input type="file" name="fileToUpload" id="fileToUpload"></td>
            </tr>
            <tr>
                <td> <input type="submit" value="Upload New Image" name="submit"></td>
            </tr>
            
            <tr>
                <td> Request name update: <input type="text" name="fullname" placeholder="enter new name here..." id="fileToUpload"></td>
            </tr>
            <tr>
                <td> <input type="submit" value="Request name update" name="submit"></td>
            </tr>
        </tbody>
    </table>
    </form></center>       
</div>
       
</section>
    
    
   
    
    


 <footer class='thisfooter'>        
      
        <div class="row">
        
        
      <div class="col span-1-of-2">
           <!--this creates an unordered list inside of my navigation bar-->
            <ul class='footer-nav'>
                <!-- these are the list items aka the navigation butons 
                <!-- navigation buttons are links -->

                <li><a href="index.php">Home</a></li> 
                <li><a href="insert.php">Insert</a></li>
                <li><a href="update.php">Update</a></li>
                <li><a href="delete.php">Delete</a></li>                                                                                                          



            </ul>
          
        </div>
            <div class="col span-1-of-2">
                <ul class="footer-links icons" >
                    
                    
            <li><a class='facebook' href="#"><ion-icon class='icons1' name="logo-facebook"></ion-icon></a></li>
            <li><a class='linkedin' href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
            <li><a class='twitter' href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
            <li><a  class='github' href="#"><ion-icon name="logo-github"></ion-icon></a></li>
             
                    
                    
           </ul>
           </div>
           </div>
            
            
            
            <div class="row">
            <p class='footerp'>
                
            Copyright &copy; 2019 by Steve Bien-Aime . All rights reserved.     
            
            </p>
            </div>
            
           
        </footer>      


    
</body>  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</html>
