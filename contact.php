<?php

include 'libs/load.php';
?>

<!DOCTYPE html>
<html lang="zxx">
  <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="Mrittik is a Modern Architecture Theme">
        <meta name="author" content="">
        
        <!-- Page Title -->
        <title>Contact &#045; Best building contractors in Coimbatore</title>    

       <?php
       load_template("_head");
       ?>
        
    </head>


    <body class="bg-dark">
        

  <?php
  load_template("_preloader");
  ?>

        

        <!-- Color Mode Switcher -->
		<div id="mode_switcher">
			<span><i class="bi bi-moon-fill"></i></span>	
		</div>  
        <div id="whatsapp">
    <a href="https://wa.me/9944624724" target="_blank">
        <span><i class="bi bi-whatsapp"></i></span>
</a>
    </div>

        <!-- Cursor Effect -->
        <div class="pointer bnz-pointer" id="bnz-pointer"></div>

      <?php
      load_template("_header");
      
      ?>

		<!-- Page Header -->
        <div class="page_header">
            <div class="page_header_inner">
                <div class="container">
                    <div class="page_header_content d-flex align-items-center justify-content-between">
                        <h2 class="heading">Contact</h2>
                        <ul class="breadcrumb d-flex align-items-center">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Contact</li>
                        </ul>
                    </div>
                </div>
            </div>        
        </div>

        
        <!-- Main Wrapper-->
        <main class="wrapper">
            <section class="gmap box_padding">
				<div class="gmapbox" data-aos="zoom-in" data-aos-duration="1000">
                    <div id="googleMap" class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1131.2048304680984!2d76.95213060118965!3d11.008846607414453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba85903526e9621%3A0x47670cf05cbef583!2sHera%20Construction!5e0!3m2!1sen!2sin!4v1689588962174!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                </div>
			</section>

          <?php
          load_template("_contact");
          ?>
        </main>

        <!-- Footer-->
      <?php
      load_template("_footer");
      ?>
    </body>

</html>