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

    <title>DigiPoint Ltd. - About</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

	<script src="assets/js/Chart.js"></script>


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
        <?php navMenu("about"); ?>
      </div>
    </div>

	<div id="blue">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
				<h4>DIGIPOINT TEAM</h4>
				<p>MEET THE LITTLE GIANTS</p>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!--  bluewrap -->


	<div class="container w">
		<div class="row centered">
			<br><br>
			
			<div class="col-lg-3">
				<img class="img-circle" src="assets/img/patrick.png" width="110" height="110" alt="">		
				<p>
					<h4>Patrick Mignott</h4>
					<div>App Design</div>
					<div><a href="mailto:pmignott@digipoint.biz">pmignott@digipoint.biz</a></div>
				</p>				
			</div><!-- col-lg-3 -->

			<div class="col-lg-3">
				<img class="img-circle" src="assets/img/garth.png" width="110" height="110" alt="">		
				<p>
					<h4>Garth Peryer</h4>
					<div>Content Manager</div>
					<div><a href="mailto:gperyer@digipoint.biz">gperyer@digipoint.biz</a></div>
				</p>
			</div><!-- col-lg-3 -->
			

			<div class="col-lg-3">
				<img class="img-circle" src="assets/img/lance.png" width="110" height="110" alt="">		
				<p>
				<h4>Lance Stewart</h4>
					<div>Network Engineer</div>
					<div><a href="mailto:lstewart@digipoint.biz">lstewart@digipoint.biz</a></div>
				</p>				
			</div><!-- col-lg-3 -->	
			<div class="col-lg-3">
				<img class="img-circle" src="assets/img/wade.png" width="110" height="110" alt="">		
				<p>
				<h4>Wade 'Garrulous' Howell</h4>
					<div>Commercial Operations</div>
					<div><a href="mailto:whowell@digipoint.biz">whowell@digipoint.biz</a></div>
				</p>				
			</div><!-- col-lg-3 -->

		</div><!-- row -->
		<br>
		<br>
	</div><!-- container -->


	<!-- PORTFOLIO SECTION -->



	
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
	<script src="assets/js/holder.js"></script>
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
