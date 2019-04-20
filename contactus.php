<!DOCTYPE html>
<html lang = "en">
    
<head>
<meta http-equiv="Content-Type" Content="text/html; charset=utf-8"/>  
<title>Contact Us</title>
  

     
      <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
      <link rel="stylesheet" type="text/css" href="resources/css/_style.css">
     <!-- grid.css makes a site  responsive -->
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    
    <script>
        function validate(form){

            fail = validateName(form.name.value)
            fail += validateEmail(form.email.value)
            if(fail=="") return true
            else{
                alert(fail); return false
            }
            
            function validateName(field){
                
        if(field =="")return "No name  was entered.\n"
        else if(field.length < 1)
            return "Username must be atleast 2 characters.\n"
        else if(field.length > 25)
            return "name cannot be more than 25 characters long.\n"
        else if(/[^a-zA-Z_-]/.test(field))
            return "Only letters allowed in name.\n"
        return ""
    
            }
            
            function validateEmail(field){
                
                if(field =="")return "No email  was entered.\n"
        
        
        else if(/[^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$]/.test(field))
            return "Only \n"
        return ""
                
            }
            
          
    }
        </script>
        </head>
        
        <body>
            
            <header>
       <nav class='subpage-nav'>
       <div class='row'>
        <!--<img src="resources/img/logo-white.png" alt ="Omnifood logo" class="logo">-->
        <!-- <img src="resources/img/logo.png" alt ="Omnifood logo" class="logo-black">-->
           <ul   class='subpage-navlist'>
            <li><a   href='index.php'>Home</a></li>
            <li><a href='aboutus.php'>About Us </a></li>
            <li><a href='Resources.php'>Resources</a></li>
            <li><a href='contactus.php'>Contact Us </a></li>
            <li><a href='signup.php'>Registration</a></li>
            <li><a href='login.php'>Sign In </a></li>
           </ul>  
       </div>
    </nav>
                
                
                </header>
                <div class="Container" style="background-color:white;"> 
  <div class="contactText">
    <h2>Contact Us</h2>
    <p>Contact the Club:</p>
  </div>
  <div class="row">
    <div class="column">
        
        <div class="contactMap">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5301.409826911279!2d-80
              .24292775041188!3d25.87829721168729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d
              9b0476f229c9d%3A0x56358656f5e3629e!2s11380+NW+27th+Ave%2C+Miami%2C+FL+33167!5e0!3m2!1sen!2sus
              !4v1555369723590!5m2!1sen!2sus" 
              width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
    </div>
    <div class="column">
        <form action="index.php" method="POST" name="loginform" id="contactform" onsubmit="return validate(this)">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name..">
        <label for="uemail">Email</label>
        <input type="email" id="uemail" name="email" placeholder="example@hotmail.com">
        
        <label for="subject">Subject</label>
        <select id="subject" name="commentsubject">
          <option value="Join Club">Join Club</option>
          <option value="Comments">Comments</option>
          <option value="General Questions">General Questions</option>
        </select>
        
        <textarea id="boxtext" name="boxtext" placeholder="  for(int i = 0; i < 10; i++)
                  {
                  
                 Wrtie comment here! 
                 
                  }" style="height:170px"></textarea>
        <input type="submit" value="Submit" style = "background-color:grey"><br>
        
      </form>
    </div>
  </div>
</div>
           
                      
            
            <footer class='thisfooter'>        
      
        
        
        
      
            <div class="col span-1-of-2">
                <ul class="footer-links icons" >
                    
                    
            <li><a class='facebook' href="#"><ion-icon class='icons1' name="logo-facebook"></ion-icon></a></li>
            <li><a class='linkedin' href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
            <li><a class='twitter' href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
            <li><a  class='github' href="#"><ion-icon name="logo-github"></ion-icon></a></li>
             
                    
                    
           </ul>
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
    <script src="https://unpkg.com/ionicons@4.4.4/dist/ionicons.js"></script>   
   
    
    <!--keep our script last -->
     <script src="resources/js/script.js"></script>

    </html>







<?php


