<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if($_SESSION['user_status']!=='yes'){
     $_SESSION['MESSAGE']='Access denied, Only Officers can access the officer portal !!';
    header("location: Dashboard.php");
   
    exit;
    
}



                            

?>

<!DOCTYPE HTML> 
<HTML>
    <HEAD><TITLE>Technology Club Officer Portal</TITLE>
    
    
    
    
     
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
     <!-- grid.css makes a site  responsive -->
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">    
    
       
    
    
    
    
    
    
    
    
    </HEAD>  
    
    
    
    
    
    
    <body>     
       
<header class='headersubPage'>
       <nav>
       <div class='row'>
        <!--<img src="resources/img/logo-white.png" alt ="Omnifood logo" class="logo">-->
        <!-- <img src="resources/img/logo.png" alt ="Omnifood logo" class="logo-black">-->
           <ul class="main-nav">
            <li><a href='index.php'>Home</a></li>
            <li><a href='aboutus.php'>About Us </a></li>
            <li><a href='Resources.php'>Resources </a></li>
            <li><a href='contact2.php'>Contact Us </a></li>
            <li><a href='Dashboard.php'>Dashboard</a></li>
            <li><a href='OfficerPortal.php'>Officer Portal</a></li>
            <li><a href='logout.php'>Sign Out</a></li>
           </ul> 
       </div>
    </nav>
       
   </header>
        
        
        
     
        
        
        <div class="site_management_div">
        
              <H2>  Site Management </H2>
              
              <center> <form action="MaintenancePage.php" method="post" enctype="multipart/form-data">
    <table border="0" width="auto" cellspacing="25%" padding='0'>
       
        <tbody>
            <tr>
                <td>Hi <?php echo $_SESSION['username']; ?>, would you like to make some changes to the site ? </td>
            </tr>
            <tr>
            <td>Front Page Header Background </td>
            </tr>
            <tr>
            <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
            </tr>
            <tr>
                <td> <input type="submit" value="Upload New Image" name="submit_picture"></td>
            </tr>
            <tr><td align="center" ><label id="sitemsg"><?php echo $_SESSION['MESSAGE'];
            $_SESSION['MESSAGE']='';
            ?></label></td></tr>
            <tr><td align="center" ><label>  Mission Statement</label></td></tr>
            <tr>
            <td align="center">
                   <textarea rows="8" cols="60" name="statement" id="statement" value=" " ></textarea>  </td>
            </tr>
           
            
           <tr>
                <td align="center"> <input type="submit" name="submit" value="Update Mission">  </td>
            </tr> 
        </tbody>
    </table>
 </form></center>             
              
              
              
        
       <!--<form  action="OfficerPortal.php"  method="POST">
       Mission Statement:<br>  
       <input type="text" name="statement"><br>
       Front Page Header Image :<br>
       <input type="text" name="header_image"><br><br>
       <input type="submit" value="update">        <br> <br>
       News Feed
        <br><br>
        
        <select name="cars" size="3">
        <option value="https://techcrunch.com">TECHCRUNCH.COM</option>
        <option value="https://cnet">CNET.COM</option>
        <option value="https://wired.com">WIRED.COM</option>
        </select>    
      </form>-->
          
     </div>  
        
        
        
        
        
        
        
        
        
        

        
      
        
        
        
        
            
    
            
            
           
            
         <footer class='thisfooter'>        
      
        <div class="row">
        
        
      <div class="col span-1-of-2">
           <!--this creates an unordered list inside of my navigation bar-->
            <ul class="footer-nav">
                <!-- these are the list items aka the navigation butons 
                <!-- navigation buttons are links -->

                <li><a href="index.php">Home</a></li> 
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
                <li><a href="Resources.php">Resources</a></li>                                                                                                          



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
        

    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>       

   
    
    <!--keep our script last -->
     <script src="resources/js/script.js"></script>
      <script src="resources/js/fade.js"></script>

         
    </body>
    
     
</html>