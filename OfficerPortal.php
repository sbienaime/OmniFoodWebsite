<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if($_SESSION['user_status']!=='yes'){
    header("location: denied.php");
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
    <header class='subpageheader'>
      <nav class='subpage-nav'>
         
   
        
          <div class='row'>
        <ul class="subpage-navlist">
            <li><a href='index.php'>Home</a></li>
            <li><a href='aboutus.php'>About Us </a></li>
            <li><a href='Resources.php'>Resources </a></li>
            <li><a href='contactus.php'>Contact Us </a></li>
            <li><a href='Dashboard.php'>Dashboard</a></li>
            <li><a href='signup.php'>Registration</a></li>
            <li><a href='login.php'>Sign In</a></li>
           </ul>  
       </div>
     
    </nav>
    </header> 
        
        
        
     
        
        
        <div class="site_management_div">
        
              <H2>  Site Management </H2>
        
      <form  action="/action_page.php"  method="POST">
       Mission Statement:<br>  
       <input type="text" name="statement"><br>
       Front Page Image :<br>
       <input type="text" name="firstname"><br><br>
       <input type="submit" value="update">        <br> <br>
       News Feed
        <br><br>
        
        <select name="cars" size="3">
        <option value="https://techcrunch.com">TECHCRUNCH.COM</option>
        <option value="https://cnet">CNET.COM</option>
        <option value="https://wired.com">WIRED.COM</option>
        </select> 
         
          
          
          
          
      </form>
          
     </div>  
        
        
        
        
        
        
        
        
        
        

        
      
        
        
        
        
            
    
            
            
           
            
         <footer class='thisfooter'>        
      
        <div class="row">
        
        
      <div class="col span-1-of-2">
           <!--this creates an unordered list inside of my navigation bar-->
            <ul class="footer-nav">
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
        

    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>       

   
    
    <!--keep our script last -->
     <script src="resources/js/script.js"></script>


         
    </body>
    
     
</html>