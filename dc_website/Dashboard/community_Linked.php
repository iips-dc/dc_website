
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Knowledge Center</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
       <link href="../css/modern-business.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class ="row">
	<div class = "col-lg - 10 ">
		<?php include 'header.html'?>
	</div>
</div>
<div class= "row">
	<nav class = "col-lg-3">

		<?php include 'nav.html'?>
	</nav>


<div class = "col-lg-9 ">
	<div class="tab-pane fade" id="Profile">
      
        <div class="row">
           <?php include 'profile.php';?>
            
         </div>
        </div>

       <div class="tab-pane fade" id="home">
      <div class="row">
      <?php include '../knowledge_center/index1.php'?>
           </div>
         </div>
</div>

 <script src="js/modern-business.js"></script>
  <script src="js/jquery.easing.min.js"></script>


</body>
</html>