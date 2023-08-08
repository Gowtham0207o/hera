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
    <title>Mrittik - Modern Architecture Theme</title>
   <?php 
   load_template("_head");
   ?>

</head>


<body class="bg-dark">

   <?php
   load_template("_preloader");?>



    <!-- Color Mode Switcher -->
    <div id="mode_switcher">
        <span><i class="bi bi-moon-fill"></i></span>
    </div>

    <!-- Cursor Effect -->
    <div class="pointer bnz-pointer" id="bnz-pointer"></div>

  <?php
  load_template("_header");?>


    <!-- Page Header -->
    <div class="page_header">
        <div class="page_header_inner">
            <div class="container">
                <div class="page_header_content d-flex align-items-center justify-content-between">
                    <h2 class="heading">Projects</h2>
                    <ul class="breadcrumb d-flex align-items-center">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Projects</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Wrapper-->
    <main class="wrapper">
        <!-- Scroll Progress -->

        <section class="projects packery bg-transparent project-grid-list">
            <div class="container">
                <div class="portfolio-filters-content">
                    <div class="filters-button-group">
                        <button class="button is-checked" data-filter="*">All<sup class="filter-count"></sup></button>
                        <button class="button" data-filter=".exterior">Exterior<sup class="filter-count"></sup></button>
                        <button class="button" data-filter=".residences">Residences<sup
                                class="filter-count"></sup></button>
                        <button class="button" data-filter=".interiors">Interiors<sup
                                class="filter-count"></sup></button>
                        <button class="button" data-filter=".landscape">Landscape<sup
                                class="filter-count"></sup></button>
                    </div>
                </div>
                <div class="grid gutter-20 grid-1 clearfix">
                    <div class="grid-sizer"></div>
                    <div class="grid-item residences">
                        <div class="thumb">
                            <img class="item_image" src="assets/img/portfolio/grid-list/1.jpg" alt="">
                            <div class="works-info">
                                <div class="label-text">
                                    <h6><a href="#">Lake Cabin</a></h6>
                                    <h5><a href="project-details-2.html">California young menz club</a></h5>
                                    <div class="details_link"><a href="project-details-2.html"><span
                                                class="link_text">View Details</span> <span class="link_icon"><span
                                                    class="line"></span> <span class="circle"><span
                                                        class="dot"></span></span></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item interiors">
                        <div class="thumb">
                            <img class="item_image" src="assets/img/portfolio/grid-list/2.jpg" alt="">
                            <div class="works-info">
                                <div class="label-text">
                                    <h6><a href="#">Lake Cabin</a></h6>
                                    <h5><a href="project-details-2.html">Sunlight in the Room</a></h5>
                                    <div class="details_link"><a href="project-details-2.html"><span
                                                class="link_text">View Details</span> <span class="link_icon"><span
                                                    class="line"></span> <span class="circle"><span
                                                        class="dot"></span></span></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item residences">
                        <div class="thumb">
                            <img class="item_image" src="assets/img/portfolio/grid-list/3.jpg" alt="">
                            <div class="works-info">
                                <div class="label-text">
                                    <h6><a href="#">Lake Cabin</a></h6>
                                    <h5><a href="project-details-2.html">Find your own self invintage lake house</a>
                                    </h5>
                                    <div class="details_link"><a href="project-details-2.html"><span
                                                class="link_text">View Details</span> <span class="link_icon"><span
                                                    class="line"></span> <span class="circle"><span
                                                        class="dot"></span></span></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item landscape exterior">
                        <div class="thumb">
                            <img class="item_image" src="assets/img/portfolio/grid-list/4.html" alt="">
                            <div class="works-info">
                                <div class="label-text">
                                    <h6><a href="#">Lake Cabin</a></h6>
                                    <h5><a href="project-details-2.html">Well decor house in Sydney</a></h5>
                                    <div class="details_link"><a href="project-details-2.html"><span
                                                class="link_text">View Details</span> <span class="link_icon"><span
                                                    class="line"></span> <span class="circle"><span
                                                        class="dot"></span></span></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item landscape">
                        <div class="thumb">
                            <img class="item_image" src="assets/img/portfolio/grid-list/5.jpg" alt="">
                            <div class="works-info">
                                <div class="label-text">
                                    <h6><a href="#">Lake Cabin</a></h6>
                                    <h5><a href="project-details-2.html">Huge large area Bedroom</a></h5>
                                    <div class="details_link"><a href="project-details-2.html"><span
                                                class="link_text">View Details</span> <span class="link_icon"><span
                                                    class="line"></span> <span class="circle"><span
                                                        class="dot"></span></span></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item interiors">
                        <div class="thumb">
                            <img class="item_image" src="assets/img/portfolio/grid-list/6.jpg" alt="">
                            <div class="works-info">
                                <div class="label-text">
                                    <h6><a href="#">Lake Cabin</a></h6>
                                    <h5><a href="project-details-2.html">Clean water in the swiming pool</a></h5>
                                    <div class="details_link"><a href="project-details-2.html"><span
                                                class="link_text">View Details</span> <span class="link_icon"><span
                                                    class="line"></span> <span class="circle"><span
                                                        class="dot"></span></span></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
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