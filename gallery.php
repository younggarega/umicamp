<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Website | UM iCamp</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

        <link href="assets/css/lightgallery.css" rel="stylesheet">

    </head>

    <body>

		<!-- Top menu -->
		<nav class="navbar navbar-inverse navbar-fixed-top navbar-no-bg" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav">
						<li><a class="click-link" href="/umicamp">Home</a></li>
            <li><a class="click-link" href="/umicamp/gallery.php?year=2016">2016</a></li>
            <li><a class="click-link" href="/umicamp/gallery.php?year=2017">2017</a></li>
            <li><a class="click-link" href="/umicamp/gallery.php?year=2018">2018</a></li>
					</ul>
					<div class="navbar-text navbar-right">
						<a href="https://www.facebook.com/internationalUM" target="_blank"><i class="fa fa-facebook"></i></a>
						<a href="https://www.instagram.com/oia_um/" target="_blank"><i class="fa fa-instagram"></i></a>
					</div>
				</div>
			</div>
		</nav>

        <!-- Top content -->
        <div class="top-content">
          <div class="timeline-container section-container section-container-gray-bg">
            <div class="container">
              <div class="row">
	                <div class="col-sm-12 great-support section-description wow fadeIn">
	                    <h2 style="color: white;">Gallery <?php echo $_GET['year'] ?></h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                </div>
	            </div>
              <div class="row">
                <div id="lightgallery" style="height: 180px;">
                  <?php
                    $year = $_GET['year'];
                    $directory = "galeries/$year/";
                    $filecount = 0;
                    $files = glob($directory . "*");
                    if ($files){
                      $filecount = count($files);
                    }
                    // echo "There were $filecount files";
                  ?>
                  <?php for($i=1 ; $i<=$filecount ; $i++){ ?>
                    <a class="col-xs-6 col-sm-4 col-md-3 portfolio-box-image wow fadeInUp" href="galeries/<?php echo $_GET['year'] ?>/umicamp (<?php echo $i ?>).jpg" style="height:180px;">
                      <img src="galeries/<?php echo $_GET['year'] ?>/umicamp (<?php echo $i ?>).jpg" alt="" data-at2x="galeries/<?php echo $_GET['year'] ?>/umicamp (<?php echo $i ?>).jpg" style="object-fit: cover; object-position: center;">
                    </a>
                  <?php } ?>
                </div>
              </div>
              <div class="row">
                <br><br><br>
              </div>
            </div>
          </div>
        </div>

        <!-- Footer -->
        <footer class="footer-container">
	        <div class="container">
	        	<div class="row">

                    <div class="col-sm-6 footer-left">
                    	<h3><strong>Our Location</strong></h3>
                    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d987.8350735795728!2d112.61826602916155!3d-7.963740699641504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6282a9b536fd3%3A0x7f48f86c54b1e45!2sKantor+Hubungan+Internasional+Universitas+Negeri+Malang!5e0!3m2!1sen!2sid!4v1494248516293" width="100%" height="350px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>

                    <div class="col-sm-5 col-sm-offset-1 footer-right">
                    	<h3><strong>Contact us</strong></h3>
                      <h4><strong>Contact Numbers:</strong></h4>
               			  <p>+62 341 551 312 366 <br> +62 811 363 595</p>
                      <br>


               			  <h4><strong>Email:</strong></h4>
               			  <a href="mailto:umicamp2017@gmail.com?subject=UM iCamp 2017_[name]_[country]">umicamp2017@gmail.com</a>
                      <br>

               			  <h4><strong>Address:</strong></h4>
               			  <p>Jl. Semarang No. 5 Malang, Jawa Timur, Indonesia</p>
                    	<div class="footer-copyright">
                    		&copy; 2017 <a href="https://oia.um.ac.id">Office of International Affair</a> <a href="https://www.um.ac.id/en">Universitas Negeri Malang</a>
                    	</div>
                    </div>

                </div>
	        </div>

	        <div class="container-fluid">
	        	<div class="row">
                	<div class="col-sm-12 footer-bottom">
                		<a class="scroll-link" href="#top-content"><i class="fa fa-chevron-up"></i></a>
                	</div>
                </div>
	        </div>
        </footer>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        <script type="text/javascript">
        $(document).ready(function(){
          $('#lightgallery').lightGallery({
            thumbnail:true,
          });
        });
        </script>
        <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
        <script src="assets/js/lightgallery.js"></script>
        <script src="assets/js/lg-fullscreen.js"></script>
        <script src="assets/js/lg-thumbnail.js"></script>
        <script src="assets/js/lg-video.js"></script>
        <script src="assets/js/lg-autoplay.js"></script>
        <script src="assets/js/lg-zoom.js"></script>
        <script src="assets/js/lg-hash.js"></script>
        <script src="assets/js/lg-pager.js"></script>
        <script src="assets/js/jquery.mousewheel.min.js"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
