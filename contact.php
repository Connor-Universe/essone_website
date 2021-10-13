<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from boomchart.net/bitmine/contact by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Feb 2021 23:22:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <base />
        <title>Contact Us | Bitmine</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="robots" content="index, follow">
        <meta name="apple-mobile-web-app-title" content="Bitmine"/>
        <meta name="application-name" content="Bitmine"/>
        <meta name="msapplication-TileColor" content="#ffffff"/>
        <meta name="description" content="Bitmine platform is at your service with its user-friendly features, secure infrastructure and applications that make a difference." />
        <link rel="shortcut icon" href="asset/images/logo_1588143489.png" />
        <link rel="apple-touch-icon" href="asset/images/logo_1588143489.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="asset/images/logo_1588143489.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="asset/images/logo_1588143489.png" />
        <link rel="stylesheet" href="asset/global_assets/css/icons/fontawesome/styles.min.css" />
        <link rel="stylesheet" href="asset/css/plugins.html">
        <link rel="stylesheet" href="asset/frontend/css/theme-styles.css">
        <link rel="stylesheet" href="asset/frontend/css/blocks.css">
        <link rel="stylesheet" href="asset/frontend/css/widgets.css">
        <link rel="stylesheet" href="asset/frontend/css/font-awesome.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,600,700&amp;display=swap">
        <link rel="stylesheet" href="asset/frontend/css/sweetalert.css" type="text/css">
         
    </head>
<!-- header begin-->
<body class="crumina-grid">

<!-- Preloader -->

<div id="hellopreloader">
	<div class="preloader">
		<svg width="135" height="140" fill="#fff">
			<rect width="15" height="120" y="10" rx="6">
				<animate attributeName="height" begin="0.5s" calcMode="linear" dur="1s" repeatCount="indefinite" values="120;110;100;90;80;70;60;50;40;140;120" />
				<animate attributeName="y" begin="0.5s" calcMode="linear" dur="1s" repeatCount="indefinite" values="10;15;20;25;30;35;40;45;50;0;10" />
			</rect>
			<rect width="15" height="120" x="30" y="10" rx="6">
				<animate attributeName="height" begin="0.25s" calcMode="linear" dur="1s" repeatCount="indefinite" values="120;110;100;90;80;70;60;50;40;140;120" />
				<animate attributeName="y" begin="0.25s" calcMode="linear" dur="1s" repeatCount="indefinite" values="10;15;20;25;30;35;40;45;50;0;10" />
			</rect>
			<rect width="15" height="140" x="60" rx="6">
				<animate attributeName="height" begin="0s" calcMode="linear" dur="1s" repeatCount="indefinite" values="120;110;100;90;80;70;60;50;40;140;120" />
				<animate attributeName="y" begin="0s" calcMode="linear" dur="1s" repeatCount="indefinite" values="10;15;20;25;30;35;40;45;50;0;10" />
			</rect>
			<rect width="15" height="120" x="90" y="10" rx="6">
				<animate attributeName="height" begin="0.25s" calcMode="linear" dur="1s" repeatCount="indefinite" values="120;110;100;90;80;70;60;50;40;140;120" />
				<animate attributeName="y" begin="0.25s" calcMode="linear" dur="1s" repeatCount="indefinite" values="10;15;20;25;30;35;40;45;50;0;10" />
			</rect>
			<rect width="15" height="120" x="120" y="10" rx="6">
				<animate attributeName="height" begin="0.5s" calcMode="linear" dur="1s" repeatCount="indefinite" values="120;110;100;90;80;70;60;50;40;140;120" />
				<animate attributeName="y" begin="0.5s" calcMode="linear" dur="1s" repeatCount="indefinite" values="10;15;20;25;30;35;40;45;50;0;10" />
			</rect>
		</svg>

		<div class="text">Loading ...</div>
	</div>
</div>
<?php include "header.php"; ?>
<?php include "include/contact_process.php";?>
<div class="main-content-wrapper">
<!-- header end -->

<section data-settings="particles-1" class="main-section crumina-flying-balls particles-js bg-1 medium-padding120">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12">
                <header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
                    <h2 class="heading-title heading--half-colored">Contact us</h2>     
                </header>
            </div>
        </div>
    </div>
</section>
<section id="contact" class="wow soneFadeUp" data-wow-delay="0.3s">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-froms">
                <?php echo"$fail";?>
                <?php echo"$success";?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="contact-form" data-saasone="contact-froms">
                    <input type="hidden" name="_token" value="Zjgi8hsU9toE0WMXU8A3uI3OmtsImiGvjaPW5UX6">                        <div class="row">
                            <div class="col-md-12">
                            <input type="text" name="name" class="form-control input--squared input--dark" placeholder="Name" required>
                            <input type="text" name="subject" class="form-control input--squared input--dark" placeholder="Subject" required>
                            </div>
                        </div>
                        <input type="email" name="email" placeholder="Email" class="form-control input--squared input--dark" required>
                        <textarea name="message" placeholder="Your Comment" class="form-control input--squared input--dark height-170" required></textarea> 

                        <button type="submit" class="btn btn--large btn--primary">Send Your Massage</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="services address-contact">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="title">Don’t hesitate to contact us for<br>any information.</h2>
        </div>
        
        <div class="medium-padding120">

            <div class="col-lg-4">
              <div class="services-box-wrapper text-center">
                <h5 class="mb-5 fw-500">Our Location</h5>
                <p><?php echo"$location";?></p>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="services-box-wrapper text-center">
                <h5 class="mb-5 fw-500 color-2">Email & Phone</h5>
                <p>
                <a href="#"><?php echo"$email";?></a>
                <br>
                <a href="#"><?php echo"$phone";?></a>
                </p>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="services-box-wrapper text-center">
                <h5 class="mb-5 fw-500">Get In Touch</h5>
                <p>Also find us social media below</p>
				<div class="widget w-contacts">
					<ul class="socials socials--white">
                                            						<li class="social-item">
							<a href="https://facebook.com/">
								<i class="fab fa-facebook woox-icon"></i>
							</a>
                        </li>
                                                                    						<li class="social-item">
							<a href="https://instagram.com/">
								<i class="fab fa-instagram woox-icon"></i>
							</a>
                        </li>
                                                                    						<li class="social-item">
							<a href="https://twitter.com/">
								<i class="fab fa-twitter woox-icon"></i>
							</a>
                        </li>
                                                                                                                                                                                                                                                    						<li class="social-item">
							<a href="https://whatsapp.com/">
								<i class="fab fa-whatsapp woox-icon"></i>
							</a>
                        </li>
                                             
					</ul>
				</div>
              </div>
            </div>

        </div>
    </div>
</section>


<!-- footer begin -->
</div>
<?php include "footer.php" ?>
<!-- Start of boomchart Zendesk Widget script -->
<script id="ze-snippet" src="../../static.zdassets.com/ekr/snippetedfd.js?key=28d95343-bf07-4815-b14d-1d2db9792ca3"> </script>
<!-- End of boomchart Zendesk Widget script -->
        <!-- end footer -->


    <!-- Dependency Scripts -->
<script src="asset/frontend/js/method-assign.js"></script>
<script src="asset/frontend/js/jquery-3.3.1.js"></script>
<script src="asset/frontend/js/sweetalert.js"></script>
<script src="asset/frontend/js/js-plugins/leaflet.js"></script>
<script src="asset/frontend/js/js-plugins/MarkerClusterGroup.js"></script>
<script src="asset/frontend/js/js-plugins/crum-mega-menu.js"></script>
<script src="asset/frontend/js/js-plugins/waypoints.js"></script>
<script src="asset/frontend/js/js-plugins/jquery-circle-progress.js"></script>
<script src="asset/frontend/js/js-plugins/segment.js"></script>
<script src="asset/frontend/js/js-plugins/bootstrap.js"></script>
<script src="asset/frontend/js/js-plugins/imagesLoaded.js"></script>
<script src="asset/frontend/js/js-plugins/jquery.matchHeight.js"></script>
<script src="asset/frontend/js/js-plugins/jquery-countTo.js"></script>
<script src="asset/frontend/js/js-plugins/Headroom.js"></script>
<script src="asset/frontend/js/js-plugins/jquery.magnific-popup.js"></script>
<script src="asset/frontend/js/js-plugins/popper.min.js"></script>
<script src="asset/frontend/js/js-plugins/particles.js"></script>
<script src="asset/frontend/js/js-plugins/perfect-scrollbar.js"></script>
<script src="asset/frontend/js/js-plugins/jquery.datetimepicker.full.js"></script>
<script src="asset/frontend/js/js-plugins/svgxuse.js"></script>
<script src="asset/frontend/js/js-plugins/select2.js"></script>
<script src="asset/frontend/js/js-plugins/smooth-scroll.js"></script>
<script src="asset/frontend/js/js-plugins/sharer.js"></script>
<script src="asset/frontend/js/js-plugins/isotope.pkgd.min.js"></script>
<script src="asset/frontend/js/js-plugins/ajax-pagination.js"></script>
<script src="asset/frontend/js/js-plugins/swiper.min.js"></script>
<script src="asset/frontend/js/js-plugins/material.min.js"></script>
<script src="asset/frontend/js/js-plugins/orbitlist.js"></script>
<script src="asset/frontend/js/js-plugins/highstock.js"></script>
<script src="asset/frontend/js/js-plugins/bootstrap-datepicker.js"></script>
<script src="asset/frontend/js/js-plugins/TimeCircles.js"></script>
<script src="asset/frontend/js/js-plugins/ion.rangeSlider.js"></script>
<!-- FontAwesome 5.x.x JS -->
<script defer src="asset/frontend/fonts/fontawesome-all.js"></script>
<script src="asset/frontend/js/main.js"></script>


    <script>
    </script>


</body>


<!-- Mirrored from boomchart.net/bitmine/contact by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Feb 2021 23:22:41 GMT -->
</html>