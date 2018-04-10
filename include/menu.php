<div>
		<div class="w3-agile-logo">
			<div class=" head-wl">
				<div class="agileinfo-social-grids">
					<ul>
						<li><a href="#"><span class="fa fa-facebook"></span></a></li>
						<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						<li><a href="#"><span class="fa fa-rss"></span></a></li>
					</ul>
				</div>
				<div class="w3-header-top-right">
					<div class="email-right">
						<p><span class="fa fa-envelope" aria-hidden="true"></span> <a href="mailto:ratri1454@gmail.com" class="info"> ratri1454@gmail.com</a>
							<br><span class="fa fa-phone" aria-hidden="true"></span> +01684541424</p>
					</div>					
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="header-w3layouts">
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
					<h1><a class="navbar-brand " href="index.php">Medically</a></h1>
				</div>
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="hidden"><a class="page-scroll" href="#page-top"></a> </li>
						<li><a class="page-scroll" href="index.php">Home</a></li>
						<li><a class="page-scroll scroll" href="index.phpt">About</a></li>
						<li><a class="page-scroll scroll" href="index.php">Facilities</a></li>
						<li><a class="page-scroll scroll" href="index.php">Laboratory</a></li>
						
						<?php
							if(Authentication::haveLogValue())
							{ ?>
								<li class="dropdown">
						          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Patient <span class="caret"></span></a>
						          <ul class="dropdown-menu">
						            <li><a href="acquringReport.php">Acquring Report</a></li>
						            <li><a href="findreport.php">Presence Report</a></li>
						          </ul>
						        </li>
						        <?php
							}
							else
							{
								echo '<li><a class="" href="patient.php" target="_blank">Patient</a></li>';
							}

						?>
						<li><a class="page-scroll scroll" href="login.php?click=staff">Staff</a></li>
						<li><a class="page-scroll scroll" href="#contact">Contact</a></li>
						<?php 
						if(Authentication::haveLogValue())
						{

						 echo'<li><a href="?user_action=logout">logout</a></li>';
						} ?>
					</ul>
				</div>
			</nav>
		</div>
		<div class="clearfix"> </div>
	</div>