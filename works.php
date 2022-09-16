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

    <title>DigiPoint Ltd. - Works</title>

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
		  <span><img src="assets/img/dplogo03.png"/></span>
        </div>
         <?php navMenu("works"); ?>
      </div>
    </div>

	<div id="blue">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
				<h4>WE WORK HARD TO ACHIEVE EXCELLENCE</h4>
				<p>AND WE ARE HAPPY TO DO IT</p>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!--  bluewrap -->


	<div class="container desc">
		<div class="row">
			<br><br>
			<div class="col-lg-6 centered">
				<img src="assets/img/p03.png" alt="">
			</div><!-- col-lg-6 -->
			<div class="col-lg-6">
				<h4>My DigicelLIVE</h4>
				<p> 
					<i class="fa fa-link"></i> <a target="_blank" href="http://www.mydigicellive.com">MyDigicelLive.com</a>
				</p>
			</div>
		</div><!-- row -->
		
		<br><br>
		<hr>
		<br><br>
		<div class="row">
			<div class="col-lg-6 centered">
				<img src="assets/img/p01.png" alt="">
			</div><!-- col-lg-6 -->
			<div class="col-lg-6">
				<h4>My DigiINFO</h4>
				<p>
					DigiINFO is your one full service information portal from Digicel powered by Digipoint. This versatile app provides in app billing subscription information services available to all Digicel subscribers in the Caribbean
				</p>
				<p>
					<i class="fa fa-link"></i> <a target="_blank" href="https://play.google.com/store/apps/details?id=biz.digipoint.info">My DigiINFO for Android</a>
				</p>
			</div>
		</div><!-- row -->

		<br><br>
		<hr>
		<br><br>
		<div class="row">
			<div class="col-lg-6 centered">
				<img src="assets/img/p02.png" alt="">
			</div><!-- col-lg-6 -->
			<div class="col-lg-6">
				<h4>Hub'd</h4>

				<p>
				<!--
					<i class="fa fa-circle-o"></i> Mobile Design<br/>
					<i class="fa fa-circle-o"></i> Web Design<br/>
					<i class="fa fa-circle-o"></i> Development<br/>
					-->
					<i class="fa fa-link"></i> <a target="_blank" href="#">coming soon</a>
				</p>
			</div>
		</div><!-- row -->
		<br><br>
	</div><!-- container -->

	
	<div id="r">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
					<?php resonate(); ?>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- r wrap -->
	
	
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
