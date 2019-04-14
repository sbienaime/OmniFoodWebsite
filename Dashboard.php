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
            <li><a href='signout.php'>Sign Out</a></li>
           </ul> 
       </div>
    </nav>
       
   </header>
    
<section class='DashboardSection'>
    
    
    
    
 
<div  class='DashboardContainer' >
   <h2>PROFILE MANAGER</h2>
        <center> <div class='PresidentProfile'>     
        <div class='presImg'> <img src='resources/img/prt5.jpg' width='60%' height='80%'>
        <h4> Clint Laborde</h4>
        </div>    
        </div></center>  <!-- end of presdiv -->
 
        <center>  <div><form action="upload.php" method="post" enctype="multipart/form-data"></div></center>
    
    
    <table border="" width="15" cellspacing="3%" padding='3%'>
       
        <tbody>
            <tr>
                <td> Would you like to update your profile pic ? :) <input type="file" name="fileToUpload" id="fileToUpload"></td>
            </tr>
            <tr>
                <td> <input type="submit" value="Upload Image" name="submit"></td>
            </tr>
        </tbody>
    </table>

  
</form></center>
</div>
       
  
           
    <form>   
       <table border="" width="15" cellspacing="3%" padding='3%'>
       
        <tbody>
            <tr>
                <td> Would you like to update your profile pic ? :) <input type="file" name="fileToUpload" id="fileToUpload"></td>
            </tr>
            <tr>
                <td> <input type="submit" value="Upload Image" name="submit"></td>
            </tr>
        </tbody>
    </table>
     
    </form>     
            
            
            
            
 </div>
    
   
    
    
    
    
</section>
    
    
 <section class='regMembersSection'>
      
      <h3>MEMBERS</h3> 
      
      <div class='memberProfiles'>
          
         
      <div>
          <img src='resources/img/prt1.png' width='100%' height='100%'>
          <p>John Doe <p>
      </div>
      
      <div>
          <img src='resources/img/prt2.jpg' width='100%' height='100%'>
          <p>John Doe <p>
      </div>
      
      <div>
          <img src='resources/img/prt3.jpg' width='100%' height='100%'>
          <p>John Doe <p>
      </div>
      <div>
          <img src='resources/img/prt4.jpg' width='100%' height='100%'>
          <p>John Doe <p>
      </div>
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
