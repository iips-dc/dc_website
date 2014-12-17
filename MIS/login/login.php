	<?php 
	session_start();
	?>
	
	
	
	<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="google_sso.js"></script>
		  
	<div id="gConnect">
	    <button class="g-signin"
	        data-scope="https://www.googleapis.com/auth/plus.profile.emails.read"
	        data-requestvisibleactions="http://schemas.google.com/AddActivity"
	        data-clientId="238957888379-kifeq199a8mauc2cod4j2m8tapmsirg0.apps.googleusercontent.com"
	        data-callback="onSignInCallback"
	        data-theme="dark"
	        data-cookiepolicy="single_host_origin"
	        data-height="tall"
	        data-width="wide">
	    </button>
    </div>
  	<div id="authOps" style="display:none">
  	</div>
	<div class="container-fluid">
		<div class="row-fluid">
				
				
				
		<script type="text/javascript">
			function onSignInCallback(authResult) {
			  helper.onSignInCallback(authResult);
			}

			console.log("from login ");
			console.log(profile.emails[0]['value']);
		</script>

		

  

