
<?php
// Initialize the session
session_start();
$status;
// Check if the user is already logged in, if yes then redirect him to welcome page

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: Dashboard.php");
    exit;
}

$username = $password ="";

if (isset($_POST['username'])){
    
    
    $username = fix_string($_POST['username']);

}



if (isset($_POST['password'])){
    
 $password = fix_string($_POST['password']);
    
    
}
  $fail = validate_username($username);
  $fail = validate_password($password);





 function fix_string($string)
  {
    if (get_magic_quotes_gpc()) $string = stripslashes($string);
    return htmlentities ($string);
  }


  function validate_username($field)
  {
    if ($field == "") return "No Username was entered<br>";
    else if (strlen($field) < 5)
      return "Usernames must be at least 5 characters<br>";
    else if (preg_match("/[^a-zA-Z0-9_-]/", $field))
      return "Only letters, numbers, - and _ in usernames<br>";
    return "";		
  }



 function validate_password($field)
  {
    if ($field == "") return "No Password was entered<br>";
    else if (strlen($field) < 6)
      return "Passwords must be at least 6 characters<br>";
    else if (!preg_match("/[a-z]/", $field) ||
             !preg_match("/[A-Z]/", $field) ||
             !preg_match("/[0-9]/", $field))
      return "Passwords require 1 each of a-z, A-Z and 0-9<br>";
    return "";
  }




 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                              
                              
                              
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username; 
                            
                            
                            $select = 'Select officership_status from users where username ="'.$_SESSION['username'].'";'; 
                            $result = $conn->query($select);
                            
                             while ($row = $result->fetch_assoc()) {
                              
                             $status=$row['officership_status'];   }
                             
                             $_SESSION['user_status']=$status;
                            
                            // Redirect user to welcome page
                            header("location: index.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
    $conn->close();
}
?>















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
        <form action = "login.php" method ="POST" name = "loginform" id="loginform" onsubmit="return validate(this)">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
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

