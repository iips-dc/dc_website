<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
  
    

</head>

<body>
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
                <a class="navbar-brand" href="../index.php">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../aboutus.php">About Us</a>
                    </li>
                    <li><a href="../open_source.php">Open Source</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">DC-Members <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../current_dcmembers.php">Current DC-members</a>
                            </li>
                            <li><a href="../past_dcmembers.php">Past DC-members</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../current_projects.php">Current Projects</a>
                            </li>
                            <li><a href="../past_projects.php">Past Projects</a>
                            </li>

                        </ul>
                    </li>

                    <li><a href="signin/signin.php">Login</a></li>
                    

                  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    
    
 <!-- Carousel
    ================================================== -->

    <!--  <div class="carousel-inner  " style=" background-color: black; width:100% ; height: 450px;">
         <video  poster="images/dc.png" autoplay src="video/DC-IIPS-Signature_Video.mp4" 
          style="position: absolute; z-index: 0; top: 0px; left: 0px; width:100% ; height: 450px; align-content:center;"></video>
        </div> -->   <!-- Indicators -->
    <!-- /.carousel -->



       
   
    <br><br><br><br><br><br><br><br>
    <div class="section-colored text-center">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div id="wrap">
                       <div class="container" style="background-color:#FFFFFF;">
                        <h4><b>
                        <br>
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
                          $client_id = '238957888379-kifeq199a8mauc2cod4j2m8tapmsirg0.apps.googleusercontent.com';
                          $client_secret = 'j488CqlKD2UECsnmAVO0V55-';
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

                          //echo pageHeader("User Query - Retrieving An Id Token");
                           if (
                              $client_id == '238957888379-kifeq199a8mauc2cod4j2m8tapmsirg0.apps.googleusercontent.com'   || $client_secret == 'j488CqlKD2UECsnmAVO0V55-'
                              || $redirect_uri == 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']) {
                              //echo missingClientSecretsWarning();
                             }
                          ?>
                      <div class="box">
                            <div class="request">
                              <?php if (isset($authUrl)): ?>
                                <a class='login btn' href='<?php echo $authUrl; ?>'>Sign in with Google</a>
                              <?php else: ?>
                                <!--<a class='logout' href='?logout'>Logout</a>-->
                              <?php endif ?>
                            </div>

                            <?php if (isset($token_data)): ?>
                              <div class="data">
                                <?php 
                                // echo ($token_data['payload']['email']);

                                //echo "<br>";
                                 $email = $token_data['payload']['email'];
                                //echo $email;
                                //header('location:intermediate.php?email='.$email);
                                //exit();

                                //$newstr = var_dump($token_data); 
                                // var_dump($token_data);

                                //echo "Hiii", $newstr;
                                ?>
                                <script>
                                  var email = "<?php echo $email;  ?>";
                                  location.href="intermediate.php?user_email=" + email;
                                </script>
                              </div>
                            <?php endif ?>
                          </div>
                        </div><!--.container class ended -->  
                     </div> <!-- End of wrap -->
                  </div>  

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section-colored -->

    

 
   <br><br><br><br><br><br><br><br>
   
   <?php include ('../footer.html') ?>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/modern-business.js"></script>
    <script type="text/javascript" src="js/jQuery-hashchange.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-46860115-2', 'redirectme.net');
      ga('send', 'pageview');

    </script>

  
</body>

</html>






































	



