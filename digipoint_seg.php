<?php
/*-----------------------------------------------
 * Patrick Malcolm - DigiPoint Ltd.
 * File: digipoint_seg.php
 * App: DigiPoint Website
 * Date: Mon Feb 3 9:40:19 EST 2014
 *-----------------------------------------------
 * Copyright 2014, Digipoint Ltd.
 */ 
?>

<?php

	function contactDiv() {
		?>		
		
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">contact us</h4>
			  </div>
			  <div class="modal-body">
					<div class="row centered">
						<p>Don't hesitate to contact us.</p>
						<p>
							37 Windsor Avenue<br/>
							Kingston 5, Jamaica<br/>
							+1876 946-3533<br/>
							<a href="mailto:info@digipoint.biz">info@digipoint.biz</a>
						</p>
						<div id="mapwrap">
							<div><img src="http://maps.googleapis.com/maps/api/staticmap?center=18.008345,-76.777237&zoom=15&size=400x400&sensor=false&markers=color:red%7Clabel:C%7C18.008345,-76.777237"></div>
						</div>	
					</div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">OK</button>
			  </div>
			</div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		<?php	
	}

	function navMenu($active) {
		$home = "";
		$about = "";
		$services = "";
		$works = "";
		
		if($active == "home") {
			$home = 'class="active"';
		}		if($active == "about") {
			$about = 'class="active"';
		}		if($active == "services") {
			$services = 'class="active"';
		}		if($active == "careers") {
			$careers = 'class="active"';
		}
		
		?>		
		<div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li <?php echo $home; ?>><a href="index.php">HOME</a></li>
            <li <?php echo $about; ?>><a href="about.php">ABOUT</a></li>
            <li <?php echo $services; ?>><a href="services.php">SERVICES</a></li>
            <li <?php echo $careers; ?>><a href="careers.php">CAREERS</a></li>
            <li><a data-toggle="modal" data-target="#myModal" href="#myModal"><i class="fa fa-envelope-o"></i></a></li>
          </ul>
        </div><!--/.nav-collapse -->
		
		<?php	
	}
	
	function resonate() {
		?>
		<h4 style="text-transform:uppercase;">Mobile Business and Entertainment Solutions</h4>
		<p>Digipoint is a full service Mobile &amp; Web content aggregator, publisher and originator with over 11 years mobile market experience and a combined 75 years technology development experience among our executives.  At Digipoint,  innovation is not a concept,  it’s our way of life. Digipoint plays a pivotal role in the mobile ecosystem wherever we operate, we create solutions that meet the future expectations of our users,  from idea to launch we connect our operator partners with the best local content partners while creating revenue generating opportunities for partners where they least expect them to be.</p>	
		<?php
	}

?>


