

<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Gym</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<body>
  <?php
include 'DBconn.php'; 
   ?>
	<!--header section start -->
    <div class="header_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo"><a href="index.php"><b><h1 style="color: white;font-family: Arial, Helvetica, sans-serif;
                      ">SuPerCarWash</h1></b></a></div>
                </div>
                <div class="col-md-9">
                    <div class="menu_text">
                        <ul>
                            <li><a href="index.php">Home</a></li>                                                    
                            <li><a href="about.php">About</a></li>
                            <li><a href="price.php">Package</a></li>
                            <li><a href="service.php">Service</a></li>
                            <li><a href="Appointement.php">Appointement</a></li>
                            <li><a href="#"><img src="images/search-icon.png"></a></li>
                            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                  <a href="index.php">HOME</a>
                  <a href="about.php">ABOUT</a>
                  <a href="price.php">package</a>
                  <a href="service.php">service</a>
                 <a href="Appointement.php">Appointement</a>
                </div>
                </div>
                <span  style="font-size:33px;cursor:pointer; color: #ffffff;" onclick="openNav()"><img src="images/toggle.png" class="toggle_menu"></span>
                </div>  
                </li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
    <!-- header section end -->
    <!-- our service section start -->
    <div class="our_section layout_padding">
    	<div class="container">
    		<h1 class="our_text"><strong>OUR SERVICES</strong></h1>
    		<p class="client_long_text">It is a long established fact that a reader will be distracted by the readable</p>
    		<div class="row padding_top_0">
  <?php 

$sql = "SELECT *FROM Service_tb";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  
  while($row = $result->fetch_assoc()) {
  ?>
            <div class="col-lg-4">
        <div class="image_7"><a href="#"><?php  echo '<br><img src="'.$row["service_image"].'"alt="HTML5 Icon" style="width:350px;height:280px;" >'?></a></div>
    				<h2 class="design_text">service3</h2>
    				<p class="fact_text">It is a long established fact that a reader will be distracted by the readable</p>
    		    </div>
            <div class="col-lg-4">
        <div class="image_7"><a href="#"><?php  echo '<br><img src="'.$row["service_image"].'"alt="HTML5 Icon" style="width:350px;height:280px;" >'?></a></div>
    				<h2 class="design_text">service3</h2>
    				<p class="fact_text">It is a long established fact that a reader will be distracted by the readable</p>
    		    </div>
        
        
        <?php 
              
              }

          }
 else 
 {
  echo "0 results";
 }
$conn->close();

         ?>
    		   
    		
    	</div>
    </div>
    
    <!-- our service section end -->
    <!-- project section start -->
    <div class="project_section layout_padding about_main">
        <div class="container">
            <h1 class="partner_text">PARTNER<br> UP-DOUBLE POWER</h1>
            <p class="lorem_ipsum_text">t is a long established fact that a reader will be distracted by the readable content 
                                        of a page when looking at its layout. The point of using Lorem Ipsum is tha</p>
            <div class="choice_main">
                <div class="choose_bt"><a href="#">CHOOSE </a></div>
            </div>            
        </div>
    </div>
    <!-- project section end -->
    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="footer_section_2">
          <div class="container">
            <div class="row map_addres">
              <div class="col-sm-12 col-lg-4">
                <div class="map_text"><img src="images/map-icon.png"><span class="map_icon">Cape Town South Africa</span></div>
              </div>
                    <div class="col-sm-12 col-lg-4">
                      <div class="map_text"><img src="images/phone-icon.png"><span class="map_icon">(727408325)</span></div>
                    </div>
              <div class="col-sm-12 col-lg-4">
                <div class="map_text"><img src="images/email-icon.png"><span class="map_icon">tshimangamarco@gmail.com</span></div>
              </div>
            </div>
            <div class="social_icon">
              <ul>
                <li><a href="#"><img src="images/fb-icon.png"></a></li>
                <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                <li><a href="#"><img src="images/in-icon.png"></a></li>
                <li><a href="#"><img src="images/instagram-icon.png"></a></li>
              </ul>
            </div>
            <p class="copyright_text">Copyright 2019 All Right Reserved By.Marco Mulonday</p>
          </div>
        </div>
    </div>
    <!-- footer section end -->






    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
      $(document).ready(function(){
      $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         </script> 


   <script>
    function openNav() {
    document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
   document.getElementById("myNav").style.width = "0%";
   }
</script>



     
</body>
</html>