
<html>
<head>
  <title>Sign-in</title>
  <style type="text/css">
  html, body { margin: 0; padding:0;}
  #signin-button {
   padding: 5px;
  }

  #oauth2-results pre { margin: 0; padding:0;}
  .hide { display: none;}
  .show { display: block;}
  </style>
  <script type="text/javascript">
    function signinCallback(authResult) {
  if (authResult['status']['signed_in']) {
    // Update the app to reflect a signed in user
    // Hide the sign-in button now that the user is authorized, for example:
    document.getElementById('signinButton').setAttribute('style', 'display: none');
  } else {
    // Update the app to reflect a signed out user
    // Possible error values:
    //   "user_signed_out" - User is signed-out
    //   "access_denied" - User denied access to your app
    //   "immediate_failed" - Could not automatically log in the user
    console.log('Sign-in state: ' + authResult['error']);
  }s

  </script>
  <script src="https://apis.google.com/js/client:platform.js" async defer></script>
</head>
<body>
 <span id="signinButton">
  <span
    class="g-signin"
    data-callback="signinCallback"
    data-clientid="CLIENT_ID"
    data-cookiepolicy="single_host_origin"
    data-requestvisibleactions="http://schema.org/AddAction"
    data-scope="https://www.googleapis.com/auth/plus.login">
  </span>
</span>

  <div id="oauth2-results" class="hide"></div>
  <div style="font: 12px sans-serif, Arial; margin-left: 0.5em; margin-top: 0.5em"><a href="javascript:document.location.reload();">Reload the example</a> or <a
    href="/+/demos/signin_demo_basic" target="_blank">open in a new window</a></div>
</body>
</html>
