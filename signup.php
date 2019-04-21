<!DOCTYPE html>
<html lang = "en">

<head>
<meta http-equiv="Content-Type" Content="text/html; charset=utf-8"/>
<title>Sign Up Page</title>
<link href="resources/css/forms.css" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleis.com/css?family=Play" rel="stylesheet">



    <style>
        #msg{
            visibility: hidden;
            min-width: 250px;
            background-color: yellow;
            color: #000;
            text-align: center;
            border-radius: 2px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            right: 30%;
            top: 30px;
            font-size: 17px;
            margin-right: 30px;
        }   
        
        #msg.show{
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }
        
        @-webkit-keyframes fadein{
            from{top: 0; opacity: 0;}
            to {top: 30px; opacity: 1;}
        }
        
        @keyframes fadein{
            from{top: 0; opacity: 0;}
            to {top: 30px; opacity: 1;}
        }
        
        @-webkit-keyframes fadeout{
            from{top: 30px; opacity: 1;}
            to {top: 0px; opacity: 0;}
        }
        
        @keyframes fadeout{
            from{top: 30; opacity: 1;}
            to {top: 0px; opacity: 0;}
        }
    </style>
</head>
<body>
    
    <header>
        
 <nav class='subpage-nav'>
       <div class='row'>
        <!--<img src="resources/img/logo-white.png" alt ="Omnifood logo" class="logo">-->
        <!-- <img src="resources/img/logo.png" alt ="Omnifood logo" class="logo-black">-->
           <ul   class='subpage-navlist'>    
            <li><a href='login.php'>Sign In </a></li>
            <li><a href='signup.php'>Registration</a></li>
            <li><a href='contactus.php'>Contact Us </a></li>
            <li><a href='Resources.php'>Resources</a></li>
            <li><a href='aboutus.php'>About Us </a></li>
            <li><a href='index.php'>Home</a></li>
            
           </ul>  
       </div>
    </nav>
        
        
        
        </header>
    <div class="signup">
        <form>
           <h2> Sign Up</h2>
            <input type="text" name="username" placeholder="First name">
            <br><br>
            <input type="text" name="username" placeholder="Last name">
            <br><br>
            <input type="Password" name="pass" placeholder="Password">
            <br><br>
            <input type="Password" name="pass" placeholder="Confirm Password">
            <br><br>
            <input type="text" name="username" placeholder="Student Email">
            <br><br>
            <input type="button" value="Sign Up" onclick="myFunction()"> 
            <br><br>
            <div id="msg"> Congratulations you have sign up successfully!</div>
            <script>
                function myFunction() {
                    var x = document.getElementById("msg");
                    x.className = "show";
                    setTimeout(function(){ x.className = x.className.replace("show", "");}, 3000);
                }
            </script>
            
            
        </form>
    </div>
    
    <footer class='thisfooter'>        
      
        
        
        
      
            <div class="col span-1-of-2">
                <ul class="footer-links icons" >
                    
                    
            <li><a class='facebook' href="#"><ion-icon class='icons1' name="logo-facebook"></ion-icon></a></li>
            <li><a class='linkedin' href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
            <li><a class='twitter' href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
            <li><a class='github' href="#"><ion-icon name="logo-github"></ion-icon></a></li>
             
                    
                    
           </ul>
           </div>
          
            
            
        <center>
            <div class="row">
                
            <p class='footerp'>
                
            Copyright &copy; 2019 by Steve Bien-Aime. All rights reserved.     
            
            </p>
            </div>
        </center>
            
           
        </footer>        
   
</body>
<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>       
    <script src="https://unpkg.com/ionicons@4.4.4/dist/ionicons.js"></script>   

</html>

