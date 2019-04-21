
<?php
  header("Content-type: text/css; charset: UTF-8");
 require_once ('C:\xampp\htdocs\WebAppsProj\config.php');
 $select = 'Select header_img from page_elements where page_id = "1";';
 $result=$conn->query($select);
  
  
 while ($row = $result->fetch_assoc()) {
        
 $background_img=$row['header_img'];   

     }
  
  $conn->close();
  
?>


.headerFrontPage{

background-image:linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),url(../../<?php echo $background_img ?>);
height:100vh;
background-size:cover;
background-position:center;
  
}  