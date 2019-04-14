<!DOCTYPE html >
<html lang="en">
   <head>
    <?php     
      require_once("NewsFeedBackend.php");   
    ?>
    
    
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
     <!-- grid.css makes a site  responsive -->
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    
       
   
       
       <!--font-family: 'Lato', sans-serif;-->
    <title>  Technology Club </title>
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
            <li><a href='contactus.php'>Contact Us </a></li>
            <li><a href='Dashboard.php'>Dashboard</a></li>
            <li><a href='registration.php'>Registration</a></li>
            <li><a href='signin.php'>Sign In</a></li>
           </ul>  
       </div>
    </nav>
       
     <div class='hero-text-box'> 
        <!-- <h1>Goodbye junk food.<br> Hello super healthy meals</h1>-->
         <a  class='btn btn-full' href='#'>Featured Project</a>
         <a class='btn btn-ghost' href='#'>Log In</a>  
     </div> 
       
       
   </header>
   <section class="section-features js--section-features">
   
    <div>
       
        <h2>News Feed </h2>
       
       </div>
                       <div class="row">
                        <div class= "col span-1-of-4 box">
                            <?php echo " <img src ='".$images[0]."' width='100%' height='200px'>"; ?>
                                <!--<ion-icon class="icon-big" name="infinite"></ion-icon>-->
                                <h3><?php echo $titles[0]?></h3>
                                        <p>Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more flexibly if that's your style.</p>
                    
                        </div>
                        <div class= "col span-1-of-4 box">
                             <?php echo " <img src ='".$images[1]."' width='100%' height='200px'>"; ?>
                               <!-- <ion-icon class="icon-big" name="stopwatch"></ion-icon>-->
                                <h3><?php echo $titles[1]?></h3>
                    
                                        <p>You're only twenty minutes away from your delicious and super healthy meals delivered right to your home. We work with the best chefs in each town to ensure that you're 100% happy.</p>
                    
                        </div>
                         <div class= "col span-1-of-4 box">
                              <?php echo " <img src ='".$images[2]."' width='100%' height='200px'>"; ?>
                                <!--<ion-icon class="icon-big" name="nutrition"></ion-icon>-->
                                <h3><?php echo $titles[2]?></h3>
                    
                                        <p>All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good for your health, the environment, and it also tastes better!</p>
                    
                        </div>
                         <div class= "col span-1-of-4 box">
                              <?php echo " <img src ='".$images[3]."' width='100%' height='200px'>"; ?>
                                <!--<ion-icon class="icon-big" name="cart"></ion-icon>-->
                                <h3><?php echo $titles[3]?></h3>
                    
                                        <p>We don't limit your creativity, which means you can order whatever you feel like. You can also choose from our menu containing over 100 delicious meals. It's up to you!
                                        </p>
                        </div>
        
        
        
        
                </div>
       
       
  
    </section>
     
<section class="section-meals">
    <ul class="meals-showcase">
         <li>
           <figure class="meal-photo">
        
               <img src="resources/img/ftp1.jpg" alt="Korean bibimbap with egg and vegetables">
        
           </figure>
        </li>
        <li>
           <figure class="meal-photo">
        
               <img src="resources/img/ftp2.jpg" alt="Simple italian pizza with cherry tomatoes">
        
           </figure>
        </li>
        <li>
           <figure class="meal-photo">
        
               <img src="resources/img/ftp3.jpg" alt="Chicken breast steak with vegetables">
        
           </figure>
        </li>
        <li>
           <figure class="meal-photo">
        
               <img src="resources/img/ftp4.jpg" alt=" Autumn pumpkin soup">
        
           </figure>
        </li>
     </ul> 
     <ul class="meals-showcase">
       <li>
           <figure class="meal-photo">
        
               <img src="resources/img/ftp5.jpg" alt="Paleo beef steak with vegetables">
        
           </figure>
        </li>
        <li>
           <figure class="meal-photo">
        
               <img src="resources/img/ftp6.jpg" alt="Healthy baguette with egg and vegetables">
        
           </figure>
        </li>
        <li>
           <figure class="meal-photo">
        
               <img src="resources/img/ftp7.jpg" alt="Chicken breast steak with vegetables">
        
           </figure>
        </li>
        <li>
           <figure class="meal-photo  ">
        
               <img src="resources/img/ftp8.jpg" alt="Granola with cherries and strawberries">
        
           </figure>
        </li>
     </ul> 
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
     <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>       
    <script src="https://unpkg.com/ionicons@4.4.4/dist/ionicons.js"></script>   
   
    
    <!--keep our script last -->
     <script src="resources/js/script.js"></script>
    
    
    
    
    
    
    
    
    
    
    
    
    
</html>




<!--
1.	Korean bibimbap with egg and vegetables
2.	Simple italian pizza with cherry tomatoes 
3.	Chicken breast steak with vegetables  
4.	Autumn pumpkin soup
5.	Paleo beef steak with vegetables
6.	Healthy baguette with egg and vegetables
7.	Burger with cheddar and bacon 
8.	Granola with cherries and strawberries



Title: Get food fast — not fast food.

Hello, we’re Omnifood, your new premium food delivery service. We know you’re always busy. No time for cooking. So let us take care of that, we’re really good at it, we promise!

Up to 365 days/year
Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more flexibly if that's your style.

Ready in 20 minutes
You're only twenty minutes away from your delicious and super healthy meals delivered right to your home. We work with the best chefs in each town to ensure that you're 100% happy.

100% organic
All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good for your health, the environment, and it also tastes better!

Order anything
We don't limit your creativity, which means you can order whatever you feel like. You can also choose from our menu containing over 100 delicious meals. It's up to you!

-->