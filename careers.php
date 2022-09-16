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

    <title>DigiPoint Ltd. - Careers</title>

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
        <?php navMenu("careers"); ?>
      </div>
    </div>

	<div id="blue">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
				<h4>Careers</b></h4>
				<p></p>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- blue wrap -->


	<div class="container w">
		<div class="row">
			<br><br>
			<div class="col-md-12">
				<h4>Web Developer</h4>
				<p>We’re looking for a Mobile App/Web Developer to help us design, create and grow our mobile applications and platforms. This person will work closely with our product team to assess the implementation strategy to fulfil customer and business needs. This analysis will support the implementation and deployment of new business functionality through our agile software development lifecycle. This position requires a highly motivated individual who is comfortable with rapid changes in direction and environment. <a class="fa fa-link" href="dev-at-digipoint.pdf">See Requirements</a></p>
				
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
