<?php

require_once('config.php');



 $select = 'Select main_text from page_elements where page_id = "2";';
$result=$conn->query($select);
  
  
while ($row = $result->fetch_assoc()) {
        
$our_mission=$row['main_text'];   

     }
  
  $conn->close();
  
  
  




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
    
     <header class='headersubPage'>
       <nav>
       <div class="row">
        <!--<img src="resources/img/logo-white.png" alt ="Omnifood logo" class="logo">-->
        <!-- <img src="resources/img/logo.png" alt ="Omnifood logo" class="logo-black">-->
           <ul class="main-nav">
            <li><a href='index.php'>Home</a></li>
            <li><a href='aboutus.php'>About Us </a></li>
            <li><a href='Resources.php'>Resources </a></li>
            <li><a href='contact2.php'>Contact Us </a></li>
            <li><a href='Dashboard.php'>Dashboard</a></li>
            <li><a href='signup.php'>Registration</a></li>
           
           </ul>  
       </div>
    </nav>    
                
                </header>
    
<section class='profileSection'>
    
    
    
    
 
<div  class='profilesContainer' >
    <!--<div><h2>OUR GOAL IS TO HELP TECHNOLOGY ENTHUSIASTS EXPLORE THEIR INTERESTS BY WORKING ON REAL WORLD PROJECTS<h2></div>-->
    
    <div><h2><?php echo $our_mission; ?> </h2></div>
        <center> <div class='PresidentProfile'>     
        <div class='presImg'> <img src='resources/img/prt5.jpg' width='60%' height='80%'>
        <h4> Clint Laborde</h4>
        </div>    
        <div class='presTitle'><h4>President</h4></div>
        <div class='presDesc'>  <p> President Clint has been serving for approximately five years.Under his leadership the club's membership
                has more than doubled and engagement has grown bigly.
        </p> </div></div></center>  <!-- end of presdiv -->
 
        
        <center><div class='PresidentProfile'>     
        <div class='presImg'> <img src='resources/img/prt6.jpg' width='60%' height='80%'>
        <h4>Yehuda Joseph</h4>
        </div>    
        <div class='presTitle'><h4> Vice President </h4></div>
        <div class='presDesc'><p> VP. Yehuda Has been serving for 5 years.<p> </div> 
        </div></center> <!-- end of presdiv -->
        
        <center> <div class='PresidentProfile'>     
        <div class='presImg'> <img src='resources/img/prt7.jpg' width='60%' height='80%'>
        <h4> Carlos Mencia</h4>
        </div>    
        <div class='presTitle'><h4>Chief Operations Officer</h4></div>
        <div class='presDesc'>  <p> Carlos was able to move up to the COO position rather quickly due to his hard work.<p> </div> 
              </div></center>  <!-- end of presdiv -->
        
        <center> <div class='PresidentProfile'>     
        <div class='presImg'> <img src='resources/img/prt8.jpg' width='60%' height='80%'>
        
        
         <h4>Steve Bien-Aime</h4></div>    
        <div class='presTitle'><h4>Chief Technology Officer</h4></div>
        <div class='presDesc'>  <p> Steve Bien-Aime has been instrumental in guiding the club/<p> </div> 
            </div></center>  <!-- end of presdiv -->
        
        <center> <div class='PresidentProfile'>     
        <div class='presImg'> <img src='resources/img/prt9.jpg' width='60%' height='80%'>
         <h4> Alec Baldwin</h4>
        </div>    
        <div class='presTitle'><h4>Secretary</h4></div>
        <div class='presDesc'><p> Alec is one of the most dedicated officers and has been with the club since it's inception. <p> </div> 
        </div></center>  <!-- end of presdiv -->
        
        <center> <div class='PresidentProfile'>     
        <div class='presImg'> <img src='resources/img/prt6.jpg' width='60%' height='80%'>
         <h4> Eriel Garcia</h4>
        </div>    
        <div class='presTitle'><h4>Chief Design Officer</h4></div>
        <div class='presDesc'>  <p> Eriel is a new addition to the team. His creative eye is unmatched. <p> </div> 
            </div></center>  <!-- end of presdiv -->
        
     
             
            
            
            
            
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
              


    
</body>  
    
  <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>       
    
   
    
    <!--keep our script last -->
     <script src="resources/js/script.js"></script>   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</html>
