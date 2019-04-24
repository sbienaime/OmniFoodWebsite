<html>
 <?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password=$firstname=$lastname = "";
$username_err = $password_err = $confirm_password_err =$firstname_err = $lastname_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    
    
     // Validate firstname
    if(empty(trim($_POST["firstname"]))){
        $username_err = "Please enter a firstname.";
    }
    elseif(strlen(trim($_POST["firstname"])) < 15){
    $password_err =" firstname cannnot exceed 15 characters.";}
    else{
      $firstname = trim($_POST["firstname"]);
       }
       
    //Validate lastname
     if(empty(trim($_POST["lastname"]))){
        $lastname_err = "Please enter a lastname.";
    } 
    elseif(strlen(trim($_POST["lastname"])) < 15){
    $password_err = "Lastname cannnot exceed 15 characters.";}
    else{
      $lastname = trim($_POST["lasname"]);
     }
    
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    
    
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)&&empty($firstname_err)&& empty($firstname_err) ){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username,last_name,first_name,password) VALUES (?, ?, ? ,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username,$param_lastname,$param_firstname, $param_password);
            
            // Set parameters
            $param_firstname =$firstname;

            $param_lastname=$lastname;
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>   
    
    
    
<head>
<meta http-equiv="Content-Type" Content="text/html; charset=utf-8"/>
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<link href="resources/css/registration.css" rel="stylesheet" type="text/css"/>
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
    
    
    
     <header class='headerFrontPage'>
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
            <li><a href='logout.php'>Sign out</a></li>
           </ul>  
       </div>
    </nav>
         </header> 
    <div class="signup">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"  onSubmit=" return validate(this)">
           <h2> Sign Up</h2>
           
            <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>" >
            <br><br>
            <input type="text" name="firstname" placeholder="First name" value="<?php echo $firstname; ?>"  >
            <br><br>
            <input type="text" name="lastname" placeholder="Last name"value="<?php echo $lastname; ?>">
            <br><br>
            <input type="Password" name="pass" placeholder="Password" value="<?php echo $password; ?>">
            <br><br>
            <input type="text" name="confirm_password" placeholder="Confirm Password" value="<?php echo $confirm_password; ?>"   >
            <br><br>
            <input type="submit" value="Submit" > 
            <br><br>
            <div id="msg"> Congratulations you have sign up successfully!</div>
            
            
            
        </form>
    </div>
         
         
         
         
          <footer class='thisfooter'>        
      
        <div class="row">
        
        
      <div class="col span-2-of-1">
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
            <div class="col span-2-of-1">
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
          
            
  <script type="text/javascript" src="validatelogin.js"></script> 
</body>


 <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>       
    <script src="https://unpkg.com/ionicons@4.4.4/dist/ionicons.js"></script>   
   
    
    <!--keep our script last -->
     <script src="resources/js/script.js"></script>
    

</html>