<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Publications</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="../js/jquery-1.10.2.min.js" type="text/javascript"></script>


</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        	<?php include('../header.php'); ?>
            <?php include('../date_picker.php'); ?>
        </nav>
        <div class="navbar-default sidebar" role="navigation" style="padding-top: 0px;">

             <div class="sidebar-nav navbar-collapse" style="margin-top: -30px;" >
            		<?php include('../nav.html'); ?>
           	</div>
            </div>
        <!-- /#page-wrapper -->

    </div>
    <div class="col-md-8 col-md-offset-3">
        <div class="row">
  <form role="form" method="post" id="theForm" action="#"> 
        <div class="form-group">
        <div class="col-md-12" style="border:1px solid black;">
            <label>
                <h2>Details of Organiser</h2>
            </label><br/>
            <label></label>
                

            <div class="row">
                <div class="col-md-4"> 
                    <label>Type of paper</label>
                    <select class="form-control" name="type">
                        <option>Journal</option>
                        <option>Conference</option>
                    </select>
                </div>
               <div class="col-md-4">
                    <label>Level of Paper</label>            
                    <select class="form-control" name="level">
                      <option>Regional</option>
                      <option>National</option>
                      <option>International</option>
                    </select>
                </div>
                <div class='col-md-4'>
                    <label>Organizer Name</label> 
                    <input type="text" name="organizer_name" required="required" required="alphabetic_space">
                </div>                
            </div>

          <br/>
                
            <div class="row">
                <div class='col-md-4'>
                    <label>Sponsers Name</label>
                    <input type="text" name="sponsers_name" required="required" required="alphabetic_space" class="form-control">
                </div>
                <div class='col-md-4'>
                    <label>Location</label>
                    <input type="text" name="location" required="required" required="alphabetic_space" class="form-control">
                </div>
                <div class='col-md-4'>
                    <label>Year of publication</label>
                    <input type="number" name="year" required="required" required="alphabetic_space" class="form-control">
                </div>
            </div>
                           
             
            <br>
            
            <div class="row">
                <div class='col-md-4'>
                    <label>Paper Id</label>
                    <input type="text" name="paper_id" required="required" required="alphabetic_space" class="form-control">
                </div>
                <div class='col-md-4'>
                    <label>Paper Title</label>
                    <input type="text" name="paper_title" required="required" required="alphabetic_space" class="form-control">
                </div>
                <div class='col-md-4'>
                    <label>Date of Publication</label>
                    <input type="date" name="date_of_publication" required="required" class="form-control" id="datepicker">
                </div>  
            </div>

        <br>

        <div class="row">
            <div class='col-md-6'>
                <label>Link</label>
                <input type="url" name="link" required="required" required="alphabetic_space" class="form-control">
            </div>
            <div class='col-md-6'>
                <label>Author</label>
                <input type="text" name="authors" required="required" required="alphabetic_space" class="form-control">
            </div>

        </div>

        <br>

        <div class="row">
            <div class='col-md-12'>
                    <label>Abstract</label>
                    <input type="text" name="abstract" required="required" required="alphabetic_space" class="form-control">
                </div>

          </div>
        <br><br>
    <input class="btn btn-success"type="submit" value="Submit" id="submit">
    <input class="btn btn-danger" type="reset" value="Reset">
    </div>
    <br><br><br>
    </form>
    <br>
</div>
</div>
</div>
</div>

    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/sb-admin-2.js"></script>
<?php
include ('../database_connect.php');
  
  $type=$_POST['type'];
  $level=$_POST['level'];
  $organizer_name=$_POST['organizer_name'];
  $sponsers_name=$_POST['sponsers_name'];
  $location=$_POST['location'];
  $year_of_publication=$_POST['year'];
  $paper_id=$_POST['paper_id'];
  $paper_title=$_POST['paper_title'];
  $date_of_publication=$_POST['date_of_publication'];
  $abstract=$_POST['abstract'];
  $link=$_POST['link'];
  $author=$_POST['authors'];
  
  


$sql="INSERT INTO `dc_database`.`publication` (`type`, `level`, `organizer_name`, `sponsers_name`, `location`, `year_of_publication`, `paper_id`, `paper_title`, `date_of_publication`, `abstract`, `link`, `author`) VALUES ('$type', '$level', '$organizer_name', '$sponsers_name', '$location', '$year_of_publication', '$paper_id', '$paper_title', '$date_of_publication', '$abstract', '$link', '$author')";  
$insert= mysqli_query($dbconnect,$sql);
  if ($insert) {
      echo "<script>alert('Record submitted successfully!')</script>";
        header('location:post.php');
    }
    else{
              echo "<script>alert('Your record is already exists!')</script>";
        header('location:post.php');
    }






?>

</body>

</html>

