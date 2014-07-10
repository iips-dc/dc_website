<?php include 'base_full_width.php' ?>

<!DOCTYPE html>
  <?php startblock('page_title'); ?>
  Signin | DC
  <?php endblock(); ?>
  <?php startblock('style'); ?>

  <style type="text/css">
    
    .postDate{
      font-size:14px; 
      color:green;
    }
    .notice{
      background-color:white;
      padding: 10px 10px 10px 10px;
      margin-left:15px;
      margin-right:15px;
    }
  </style>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/modern-business.css" rel="stylesheet">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <?php endblock(); ?>
    <?php startblock('content'); ?>
      <?php

        include_once "base_signin.php";

        session_start();

        set_include_path("." . PATH_SEPARATOR . get_include_path());
        require_once 'Google/Client.php';

        /************************************************
          ATTENTION: Fill in these values! Make sure
          the redirect URI is to this page, e.g:
          http://localhost:8080/user-example.phps
         ************************************************/
        $client_id = '560967921691-2jo97te2doofvla3ggrgh222q1i42vdg.apps.googleusercontent.com';
        $client_secret = 'Pmomsx9NK_idj9U2p0a1hr4U';
        $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
        $client = new Google_Client();
        $client->setClientId($client_id);
        $client->setClientSecret($client_secret);
        $client->setRedirectUri($redirect_uri);
        $client->setScopes('email');
        /************************************************
          If we're logging out we just need to clear our
          local access token in this case
         ************************************************/
        if (isset($_REQUEST['logout'])) {
          unset($_SESSION['access_token']);
        }

        /************************************************
          If we have a code back from the OAuth 2.0 flow,
          we need to exchange that with the authenticate()
          function. We store the resultant access token
          bundle in the session, and redirect to ourself.
         ************************************************/
        if (isset($_GET['code'])) {
          $client->authenticate($_GET['code']);
          $_SESSION['access_token'] = $client->getAccessToken();
          $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
          header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
        }

        /************************************************
          If we have an access token, we can make
          requests, else we generate an authentication URL.
         ************************************************/
        if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
          $client->setAccessToken($_SESSION['access_token']);
        } else {
          $authUrl = $client->createAuthUrl();
        }

        /************************************************
          If we're signed in we can go ahead and retrieve
          the ID token, which is part of the bundle of
          data that is exchange in the authenticate step
          - we only need to do a network call if we have
          to retrieve the Google certificate to verify it,
          and that can be cached.
         ************************************************/
        if ($client->getAccessToken()) {
          $_SESSION['access_token'] = $client->getAccessToken();
          $token_data = $client->verifyIdToken()->getAttributes();
        }

        echo pageHeader("Welcome to the Development Center");
       
         if (
            $client_id == '560967921691-2jo97te2doofvla3ggrgh222q1i42vdg.apps.googleusercontent.com'
            || $client_secret == 'Pmomsx9NK_idj9U2p0a1hr4U'
            || $redirect_uri == 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']) {
          // echo missingClientSecretsWarning();
        }
        ?>
        <div class="box">
          <div class="request">
            <?php if (isset($authUrl)): ?>
              <a class='login btn' href='<?php echo $authUrl; ?>'>Sign in with Google</a>
            <?php else: ?>
              <a class='logout' href='?logout'>Logout</a><br><br>
               <a href="dailylog.php">Daily Log</a><br><br>
            <?php endif ?>
          </div>

          <?php if (isset($token_data)): ?>
            <div class="data">
              <?php 
              //session_start();
             // require_once 'connect.inc.php';
              $_SESSION['email']=$token_data['payload']['email'];
              echo ($email);
              echo $_SESSION['email'];
              $sql='SELECT email FROM DC_MEMBER_REGULAR';
                 
              // $rs=$conn->query($sql);
              //   echo "Hello";
              // if($rs === false) {
              //   trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
              // } 
              if($email != $sql){
                echo "<br>";
                echo "";



              }
              else{
                    echo "You are a not a autharised user";

                  echo "<br><br><br>";

                  // // $newstr = var_dump($token_data); 
                  // // // var_dump($token_data);

                  
                }  
              ?>
            </div>
          <?php endif ?>
         
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
      
  
  <?php endblock(); ?>
  <?php startblock('script'); ?>
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>
  <?php endblock(); ?>
