<!DOCTYPE html>
<html lang = "en">

<head>
<meta http-equiv="Content-Type" Content="text/html; charset=utf-8"/>
<title>Log In Page</title>
<link href="resources/css/_style.css" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleis.com/css?family=Play" rel="stylesheet">


<!--javascript validation-->
<script>
     
    function validate(form)
    {
        fail = validateUsername(form.username.value);
        fail += validatePassword(form.password.value);
        
        if(fail =="") return true
        else{
            alert(fail); return false
        }
    }
    
    function validateUsername(field) 
    {
        if(field =="")return "No username was entered.\n"
        else if(field.length < 5)
            return "Username must be atleast 5 characters.\n"
        else if(field.length > 25)
            return "Username cannot be more than 25 characters long.\n"
        else if(/[^a-zA-Z0-9_-]/.test(field))
            return "Only letters and numbers allowed in username.\n"
        return ""
        
    }
    
    function validatePassword(field){
        
        if(field =="")return "No password was entered.\n"
        else if(field.length < 5)
            return "Username must be atleast 5 characters.\n"
        else if(field.length > 25)
            return "Username cannot be more than 25 characters long.\n"
        else if(/[^a-zA-Z0-9_-]/.test(field))
            return "Only letters and numbers allowed in username.\n"
        return ""
        
    }
    
    
    </script>


</head>
<body>
    
    <?php
    
    
    
    
    ?>
    
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
    <div class="loginbox">
        <h1>Login Here</h1>
        <form action = "index.php" method ="POST" name = "loginform" id="loginform" onsubmit="return validate(this)">
            <p>Username</p>
            <input type="text" name="username" placeholder=" Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="" value="Login">
            <a href="#"> Lost your password?</a><br>
            <a href="#">Don't have an account?</a>
            <a href="#">Sign Up</a>
        </form>
    </div>
    
    
    <footer class='loginfooter'>        
      
        <div class="row">
        
        
      
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
    <script src="https://unpkg.com/ionicons@4.4.4/dist/ionicons.js"></script>   
   
    
    <!--keep our script last -->
     <script src="resources/js/script.js"></script>
           
</html>

