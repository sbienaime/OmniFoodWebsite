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
            <li><a href='registration.php'>Registration</a></li>
            <li><a href='signin.php'>Sign In</a></li>
           </ul>  
       </div>
     
    </nav>
    </header> 
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
 <p> Below is your current list of favorite songs. You can add to this list by going to the forms page.  </p>
        
        <?php
        require_once('config.php');
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        $m = "does not exist";
        $select = 'Select * from favorite_songs;';
        $result = $conn->query($select);
        
        
        
        
        echo "<table border ='2px'>";
           echo " <tr><th>Username</th><th>Fullname</th><th width='50%'>Messages</th></tr>";

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {

               
                echo "<tr ><td>" . $row['author'] . "</td>" . "<td>" . $row["title"] . "</td>" . "<td>" . $row["release_year"] . "</td>" . "<td>" . $row["artist"] . "</td></tr>";

                
            }
        } else {
            echo " Your table is currently empty :( ";
        }

        
            echo "</table>"   
        
        ?>
            
    
            
            
           
            
         <footer class='thisfooter'>        
      
        <div class="row">
        
        
      <div class="col span-2-of-1">
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
        

    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>       

   
    
    <!--keep our script last -->
     <script src="resources/js/script.js"></script>


         
    </body>
    
     
</html>