 	<?php session_start();
 		//if(isset($_SESSION['email']))
  		//unset($_SESSION['email']);
 	?>
 	<div class="navbar-wrapper topspace downShadow" style="width:100% ; margin-top:0px;">
			 <!-- <div class="container topspace">-->
		 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
						<a class="navbar-brand" href="index.php">Home</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="aboutus.php">About Us</a>
							</li>
							<li><a href="open_source.php">Open Source</a>
							</li>
							<li><a href="community.php">Our Community</a>
							</li>
							<li><a href="current_projects.php">Projects</a>
							</li>
							
							<li><a href="signin.php"><i class="fa fa-google-plus"></i>
								<?php 
									if($_SESSION['email']){ 
										echo $_SESSION['email'];
									}
									else{
										echo $_SESSION['email'];
									}
							  ?></a>
							</li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container -->
			</nav>
			
		</div>
		<!--/navbar-wrapper-ends-->


