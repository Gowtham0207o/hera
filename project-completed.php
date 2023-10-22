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
        <meta name="description" content="Trusted builders in Coimbatore">
        <meta name="author" content="">
        <title>Trusted builders in Coimbatore</title>   
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
                        <h2 class="heading">Projects</h2>
                        <ul class="breadcrumb d-flex align-items-center">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Completed Projects</li>
                        </ul>
                    </div>
                </div>
            </div>        
        </div>

        
        <!-- Main Wrapper-->
        <main class="wrapper">
            <!-- Scroll Progress -->
            
            <section class="projects masonry bg-transparent effect-tilt">
                <div class="container">
                    <!-- <div class="portfolio-filters-content">
                        <div class="filters-button-group">
                            <button class="button is-checked" data-filter="*">All<sup class="filter-count"></sup></button>
                            <button class="button" data-filter=".exterior">Exterior<sup class="filter-count"></sup></button>
                            <button class="button" data-filter=".residences">Residences<sup class="filter-count"></sup></button>
                            <button class="button" data-filter=".interiors">Interiors<sup class="filter-count"></sup></button>
                            <button class="button" data-filter=".landscape">Landscape<sup class="filter-count"></sup></button>
                        </div>
                    </div> -->
                  
                    <div class="grid grid-2 gutter-90 clearfix"> 
                        <div class="grid-sizer"></div>     
                        <?php
                   $imageFolder = 'assets/img/completed/';
                   $imageFiles = array_diff(scandir($imageFolder), array('..', '.'));
               
                   foreach ($imageFiles as $filename) {
                    ?>                     
                        <div class="grid-item residences">
                            <div class="thumb">
                                <img class="item_image" src="<?php echo $imageFolder . $filename?>" alt="">
                                <!-- <div class="works-info">
                                    <div class="label-text">
                                        <h5><a href="project-details.html">California young menz club</a></h5>
                                        <h6><a href="#">Club House</a></h6>
                                    </div>
                                </div> -->
                            </div>
                        </div>     
                        <?}?>                     
                       
                    </div>
                    <div class="btn_group w-100 text-center">
                        <button id="load-more" class="btn gray">Load More</button>
                    </div>
                </div>
            </section>
        </main>

        <?php
        load_template("_footer");?>
    </body>
</html>