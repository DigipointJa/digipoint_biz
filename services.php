<?php include "digipoint_seg.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>DigiPoint Ltd. - Services</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <span><img src="assets/img/dplogo03.png" /></span>
        </div>
        <?php navMenu("services"); ?>
      </div>
    </div>

	<div id="blue">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
				<h4>OUR SERVICES</b></h4>
				<p></p>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- blue wrap -->


	<div class="container w">
		<div class="row centered">
			<br><br>
			<div class="col-lg-4">
				<i class="fa fa-mobile-phone"></i>
				<h4>MOBILE PORTAL</h4>
				<p>Digipoint’s Mobile Portal is a multi-language, multi-site, multi-currency Mobile Portal environment through which all our partners distribute media content. From simple syndicated content to Music videos our mobile portal presents the perfect opportunity for our partners to create a search, discover and purchase environment. <a class="fa fa-link" href="http://www.mydigicellive.com">MyDigicelLive.com</a></p>
				
			</div><!-- col-lg-4 -->

			<div class="col-lg-4">
				<i class="fa fa-laptop"></i>
				<h4>CONTENT PROVIDER PLATFORM</h4>
				<p>The Digipoint's content provider platform will allow originators, owners, and publishers of digital content to port it, parse it and configure it to be made available on the third screen.  With this platform, content providers can easily upload their content, attached their videos and audio files and process their RSS Feeds all in the same environment.
				</p>
			</div><!-- col-lg-4 -->

			<div class="col-lg-4">
				<i class="fa fa-rocket"></i>
				<h4>MOBILE ADVERTISING</h4>
				<p>With our advertising platform, our operator partners are well positioned to take advantage of opportunities that exist way beyond the traditional VAS enabled services Our platform will offer unique appeal to advertisers because unlike traditional media, real time, minute by minute visibility on what customers do with their ads and how they interact with the ad.
				</p>
			</div><!-- col-lg-4 -->
		</div><!-- row -->
		<br>
		<!--
		<div class="row centered">
			<br><br>
			<div class="col-lg-4">
				<i class="fa fa-heart"></i>
				<h4>SOCIAL MEDIA</h4>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
			</div>

			<div class="col-lg-4">
				<i class="fa fa-shopping-cart"></i>
				<h4>E-COMMERCE</h4>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
			</div>

			<div class="col-lg-4">
				<i class="fa fa-cloud"></i>
				<h4>CLOUD SERVICES</h4>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
			</div>
		</div>-->
	</div><!-- container -->
	
	<div id="r">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
					<?php resonate(); ?>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><! -- r wrap -->
	
	
	<!-- FOOTER -->
	<div id="f">
		<div class="container">
			<div class="row centered">
				<a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-dribbble"></i></a>
		
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- Footer -->


	<!-- MODAL FOR CONTACT -->
	<!-- Modal -->
	<?php echo contactDiv(); ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-47877632-1', 'digipoint.biz');
	  ga('send', 'pageview');
	</script>
  </body>
</html>
