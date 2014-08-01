<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Our Community</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <style type="text/css">


                
    </style>
</head>
<body>

 <?php include 'header.php';?>

 <div class="row">

       <div class="col-lg-5">
                <h1 class="page-header">Our Community
                    
                </h1>
        </div>        
</div>


<ul id="myTab" class="nav nav-tabs">
   <li class="active">
      <a href="#home" data-toggle="tab">
         What we are?
      </a>
   </li>
   
         <li><a href="#jmeter" tabindex="-1" data-toggle="tab">Current Contributers</a></li>
         <li><a href="#ejb" tabindex="-1" data-toggle="tab">Past Contributers</a></li>
         <li><a href="#form" tabindex="-1" data-toggle="tab">Register Yourself</a></li>

     
  
</ul>
<div id="myTabContent" class="tab-content">
   <div class="tab-pane fade in active" id="home">
     <div class="container well" color:'black' >
    <h2><center>What we are..?</center></h2>
</div>
<div id="footer">
    <div class="container">
        <div class="row">
            <center><h4 class="footertext">We are enthusiastic, commited and strongly motiveted IIPS students, having guidance of expertise of industrious team, Alumni and Mentor. 
                We are working 24x7 with full dedication and team efforts.</h4></center>
            <br><br><br>
              <div class="col-md-4">
                <center>
                  <img src="http://oi60.tinypic.com/w8lycl.jpg" class="img-circle" alt="the-brains">
                  <br>
                  <h4 class="footertext">Programmer</h4>
                  <p class="footertext">Logically strong and expertise DC members contributes here.<br>
                </center>
              </div>
              <div class="col-md-4">
                <center>
                  <img src="http://oi60.tinypic.com/2z7enpc.jpg" class="img-circle" alt="...">
                  <br>
                  <h4 class="footertext">Artist</h4>
                  <p class="footertext">Thinking of our's is different from world.<br>
                </center>
              </div>
              <div class="col-md-4">
                <center>
                  <img src="http://oi61.tinypic.com/307n6ux.jpg" class="img-circle" alt="...">
                  <br>
                  <h4 class="footertext">Designer</h4>
                  <p class="footertext">Creative and innovative thinker always deal with new technology.<br>
                </center>
              </div>
            </div>
            <div class="row">
            
        </div>
      <div class="container">

        <hr>

    <footer>
            <div class="row" style="text-align:center;">
                <div class="col-lg-3 col-md-3" >
                    <p><a href="contactus.php">Contact Us</a></p>
                   
            </div>
                <div class="col-lg-3 col-md-3">
                    <p><a href="developer.php">Site Developers</a></p>
            </div>
                <div class="col-lg-3 col-md-3">
                    <p>Help</p>
            </div>
                <div class="col-lg-3 col-md-3">
                    <p>Copyright &copy; Company 2013</p>
            </div>
        </footer>
    </div>

    </div>
</div>

   </div>
   
   <div class="tab-pane fade" id="jmeter">
      
        <div class="row">
           <?php include 'current_dcmembers.php';?>
            

        </div>

       
   </div>
  </div> 
   <div class="tab-pane fade" id="ejb">
      <div class="row">
      <?php include 'past_dcmembers.php';?>
           
         </div></div> 
   <div class="tab-pane fade" id="form">
      <div class="row">
      <?php include 'entrance.php';?>
           
         </div></div>       


 <!-- Core JavaScript Files -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>

      
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>
    <script src="js/scrolling-nav.js"></script>


</body>
</html>
