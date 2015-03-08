	<?php 
	session_start();
	include ("../../base.php");

	/*
	contains username and email 
	$_SESSION['user_email'] = $email;
	*/

	?>
	
	<!--Custom Css for SSO Facebook Link -->
	<?php startblock('style'); ?>
	<?php endblock(); ?> 
	
	<!--WebPage Title -->
	<?php startblock('page_title');?>
            User Mobile Authentication
    <?php endblock();?>

	
	<?php startblock('page_heading');?>
	<script type="text/javascript" src="google_sso.js"></script>
		  <section class="title">
			<div class="container">
			  <div class="row-fluid">
				<div class="span6">
				  <h4><i class="fa fa-mobile fa-2x"></i>  Register Your Mobile</h4>
				</div>
			  </div>
			</div>
		  </section>
		  <!-- / .title -->
	<?php endblock();?>       

	<?php startblock('content');?>
		<div class="container">
			<div class="row">
				
				<div class="span2">
			     </div> <!-- ./span2 -->
				<div class="span2">
					<i class="fa fa-mobile fa-5x" style="font-size:17em; color:#5EB95E"></i>
				</div>
			
				<div class="span4">
					<?php 
						if (isset($_POST['submit'])) { 
							# code... processing 
							$mobile_number = $_POST['mobile_number'] ;
							echo $mobile_number;

							$user = R::dispense('user');
							$user->phoneNumber=$mobile_number;
							$user->name = $_SESSION['username'] ;
							$user->email = $_SESSION['user_email'] ;
							$user->phoneNumber = $_SESSION['mobile_number'] ;

							if (isset($_SESSION['password'])) {
								# code...
							$user->password = $_SESSION['password'] ;
							}
							$id_user = R::store( $user);
							# redirecting to the home page
							header("Location: ../../index.php");
						} else { 
							#Show the below html
					?>	

					<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST"
						accept-charset='UTF-8'>
							<br><br>
							<label>Enter your mobile number</label>
							<input type="text" name="mobile_number" class="form-control">
							<input type='submit' name='submit' value='submit' class="btn btn-primary btn-large"/>
					</form>
					<br><br><br><br>
					<?php 
						}
					?>
				</div>
			
				<div class="span4">
			     </div> <!-- ./span2 -->
			     
		   </div> <!-- ./row-fluid -->
		</div><!-- ./container -->
    
    <?php endblock();?>

  


