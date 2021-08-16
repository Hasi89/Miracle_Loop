<!doctype html>
<html class="no-js" lang="zxx">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>KVO - Photo Gallery</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.html">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/responsive.css">

    </head>
    <body>
		<!-- preloader  -->
		<div id="preloader">
			<div id="ctn-preloader" class="ctn-preloader">
				<div class="animation-preloader">
					<div class="spinner"></div>
				</div>
				<div class="loader">
					<div class="row">
						<div class="col-3 loader-section section-left">
							<div class="bg"></div>
						</div>
						<div class="col-3 loader-section section-left">
							<div class="bg"></div>
						</div>
						<div class="col-3 loader-section section-right">
							<div class="bg"></div>
						</div>
						<div class="col-3 loader-section section-right">
							<div class="bg"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <?php include 'header.php';?>
        <main>

             <!-- breadcrumb-area-start -->
             <div class="breadcrumb-area" style="background-image:url(assets/img/bg/b-10.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-text text-center pt-160 pb-125">
                                <h1>Photo Gallery</h1>
                            </div>
                            <div class="text-center">
                                <ul class="breadcrumb-menu">
                                    <li><a href="index.php">home</a></li>
                                    <li><span>Gallery</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-area  pt-160 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8  offset-xl-2">
                            <div class="portfolio-menu text-center mb-60">
                                <button class="active" data-filter="*">Show All </button>
                                <button data-filter=".cat1" class="">Fruits</button>
                                <button data-filter=".cat2" class="">Vegetables</button>
                                <button data-filter=".cat3" class="">Other Products</button>
                            </div>
                        </div>
                    </div>
                    <div id="portfolio-grid" class="row row-portfolio">
                        <div class="grid-sizer"></div>
                        <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat2 cat4 cat6">
                            <div class="gallery-grid-wrapper mb-30">
                                <div class="gallery-grid-img pos-rel">
                                    <a href="#"><img src="assets/img/gallery/gallery-grid/20.jpg" alt=""></a>
                                    <div class="gallery-icon">
                                        <a class="popup-image" href="assets/img/gallery/gallery-grid/01.jpg"><i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat2 cat5">
                            <div class="gallery-grid-wrapper mb-30">
                                <div class="gallery-grid-img pos-rel">
                                    <a href="#"><img src="assets/img/gallery/gallery-grid/02.jpg" alt=""></a>
                                    <div class="gallery-icon">
                                        <a class="popup-image" href="assets/img/gallery/gallery-grid/02.jpg"><i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat3 cat4 cat2">
                            <div class="gallery-grid-wrapper mb-30">
                                <div class="gallery-grid-img pos-rel">
                                    <a href="#"><img src="assets/img/gallery/gallery-grid/03.jpg" alt=""></a>
                                    <div class="gallery-icon">
                                        <a class="popup-image" href="assets/img/gallery/gallery-grid/03.jpg"><i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat3 cat6">
                            <div class="gallery-grid-wrapper mb-30">
                                <div class="gallery-grid-img pos-rel">
                                    <a href="#"><img src="assets/img/gallery/gallery-grid/04.jpg" alt=""></a>
                                    <div class="gallery-icon">
                                        <a class="popup-image" href="assets/img/gallery/gallery-grid/04.jpg"><i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat1 cat4">
                            <div class="gallery-grid-wrapper mb-30">
                                <div class="gallery-grid-img pos-rel">
                                    <a href="#"><img src="assets/img/gallery/gallery-grid/05.jpg" alt=""></a>
                                    <div class="gallery-icon">
                                        <a class="popup-image" href="assets/img/gallery/gallery-grid/05.jpg"><i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat2 cat4 cat6">
                            <div class="gallery-grid-wrapper mb-30">
                                <div class="gallery-grid-img pos-rel">
                                    <a href="#"><img src="assets/img/gallery/gallery-grid/06.jpg" alt=""></a>
                                    <div class="gallery-icon">
                                        <a class="popup-image" href="assets/img/gallery/gallery-grid/06.jpg"><i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat3 cat6 cat5">
                            <div class="gallery-grid-wrapper mb-30">
                                <div class="gallery-grid-img pos-rel">
                                    <a href="#"><img src="assets/img/gallery/gallery-grid/07.jpg" alt=""></a>
                                    <div class="gallery-icon">
                                        <a class="popup-image" href="assets/img/gallery/gallery-grid/07.jpg"><i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat3 cat1">
                            <div class="gallery-grid-wrapper mb-30">
                                <div class="gallery-grid-img pos-rel">
                                    <a href="#"><img src="assets/img/gallery/gallery-grid/08.jpg" alt=""></a>
                                    <div class="gallery-icon">
                                        <a class="popup-image" href="assets/img/gallery/gallery-grid/08.jpg"><i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat3 cat4 cat2">
                            <div class="gallery-grid-wrapper mb-30">
                                <div class="gallery-grid-img pos-rel">
                                    <a href="#"><img src="assets/img/gallery/gallery-grid/09.jpg" alt=""></a>
                                    <div class="gallery-icon">
                                        <a class="popup-image" href="assets/img/gallery/gallery-grid/09.jpg"><i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- gallery-area-end -->
            
            <!-- brand-start -->
            <div class="brand-area pt-100 pb-40" data-background="assets/img/bg/brand.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                            <div class="single-brand mb-60">
                                <img src="assets/img/brand/07.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                            <div class="single-brand mb-60">
                                <img src="assets/img/brand/08.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                            <div class="single-brand mb-60">
                                <img src="assets/img/brand/09.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                            <div class="single-brand mb-60">
                                <img src="assets/img/brand/10.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                            <div class="single-brand mb-60">
                                <img src="assets/img/brand/11.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                            <div class="single-brand mb-60">
                                <img src="assets/img/brand/12.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'footer.php';?>
        </main>

        <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/jquery.meanmenu.min.js"></script>
        <script src="assets/js/ajax-form.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/jquery.countdown.min.js"></script>
        <script src="assets/js/jquery.appear.js"></script>
        <script src="assets/js/jquery.knob.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/jquery.scrollUp.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

</html>