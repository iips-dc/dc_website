<!DOCTYPE html>
<html lang="en">

<head>
	<style type="text/css">
      #form 
        {
           visibility: hidden;
        }
    </style>
    <script>
    function myFunction() 
        {
	    document.getElementById('form').style.cssText = 'visibility: visible;';
        document.getElementById('btn').style.cssText = 'display: hidden;';
        document.getElementById('btn').style.cssText = 'display: none;';
        }
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Knowledge Center</title>

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
	<link rel="stylesheet" type="text/css" href="../css/style.css">
<script type="text/javascript">
	$(document).ready(function(){
		$("#search_box").keyup(function(){
			var search_string = $("#search_box").val();
			if(search_string == ''){
				$("#searchres").html('');
			}
			else
				{
					postdata = {'string' : search_string}
					$.post("check.php",postdata,function(data){
						$("#searchres").html(data);
					});
				}
		});
	});
	function fillme(name){
		$("#search_box").val(name);$("#searchres").html('');
	}
</script>
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
	<div class="content">
		<h1>Knowledge Center</h1>
		<form action="search_result.php" method="post">

			<div class="header">
				<input type="text" class="search_box" id="search_box" placeholder="Search Your Friends" autocomplete="off" name="searching" style="border:1px solid blue">
				<input type="submit" name="serching2" value="Submit"><br />
			</div>
			<div id="searchres" class="searchres"></div>
		</form>
		<h2>Recently Added</h2>
								<?php
									include ('../database_connect.php');

									$result = mysqli_query($dbconnect,"SELECT title,description,link FROM knowledge_center ORDER BY date DESC LIMIT 10 ");

									//$link=$row['link'];

									while($row = mysqli_fetch_array($result))
									  {
									    
								
									  echo "<strong>".$row['title']."</strong>"."<br>";
									  echo $row['description']."<br>";
									  echo "<a href='$link'>".$row['link']."</a>"."<br><br><br>";

									  
									 
									  }
									   

									mysqli_close($dbconnect);
								?>
	</div>
</div>

<center><button id="btn" type= "submit" class="btn btn-primary" onclick="myFunction()" >Insert into Knowledge Center</button></center></center>

<div class="col-md-8 col-md-offset-3">
        <div class="row">
  <form role="form" method="post" id="theForm" action="#"> 
        <div class="form-group" id="form" >
        <div class="col-md-12" style="border:1px solid blue;">
            <label>
                <h2>Enter into Knowledge Center</h2>
            </label><br/>
            <label></label>
                

            <div class="row">
                <div class='col-md-12'>
                    <label>Title</label> 
                    <input type="text" name="title" required="required" required="alphabetic_space" class="form-control">
                </div>                
            </div>

          <br/>
                
            <div class="row">
                <div class='col-md-12'>
                    <label>Link</label>
                    <input type="url" name="link" required="required" required="alphabetic_space" class="form-control">
                </div>
            </div>
                           
             
            <br>
            
            <div class="row">
                <div class='col-md-12'>
                    <label>Description</label>
                   	<textarea type="text" name="description" required="required" required="alphabetic_space" class="form-control">
                	</textarea>
                </div>
            </div>
            <div class="row">
                <div class='col-md-12'>
                    <label>tags</label>
                    <input type="text" name="tags" required="required" required="alphabetic_space" class="form-control">
                </div>
            </div>
             <input class="btn btn-success" type="submit" value="Submit" id="submit" name="submit">
    <input class="btn btn-danger" type="reset" value="Reset">
    <br><br><br><br>
</div></div></div></div>
<div class="row">
								 <?php

			include ('../database_connect.php');



			if(isset($_POST['submit'])){
			$date=date("Y/m/d");
			$title=$_POST['title'];
			$link=$_POST['link'];
			$description=$_POST['description'];
			$sql= "INSERT INTO `dc_database`.`knowledge_center` (`date`,`description`,`link`,`s_no`,`title`) VALUES ('$date', '$description','$link',' ','$title');";
			 $insert=mysqli_query($dbconnect, $sql);
			 	if ($insert) {
     				echo "<script>alert('Record submitted successfully!')</script>";
        			header('location:post.php');
    			}
    			else{
              		echo "Already exists";
    			}

			
			$sql2= "SELECT s_no FROM  `knowledge_center`  WHERE  `link` = '$link'";
			$s_no= mysqli_query($dbconnect, $sql2) or die ('ERROR'.mysqli_error($dbconnect));
				
				$row = mysqli_fetch_array($s_no);


			//while($row = mysqli_fetch_array($s_no))
			  //{
			   echo "hiii..." ;
			  
			  echo "<strong>".$row['s_no']."</strong>"."<br>";
			  
			  
			 
			//  }
			


			$tags= $_POST['tags'];
			$t=explode(" ",$tags);
			

			print_r($t);
			for ($x = 0; $x <count($t); $x++){
				if (count($t)>=5) {
					
					break;
				}
				else{
	    			echo $t[$x];
	    			//$conn = mysql_connect('localhost','root','pulkit5-1') or die(mysql_error());
	    			//$mysqli = new mysqli("localhost", "root", "pulkit5-1", "dc_database");
	    			//$clean_url = mysqli_real_escape_string($mysqli, $page);

	    			$query1 = "INSERT INTO `tags`(`tag_id`,`s_id`,`tags`) VALUES ('','".$row['s_no']."','".$t[$x]."')";
	    			mysqli_query($dbconnect, $query1) or die('ERROR'.mysqli_error($dbconnect));
	    		}
				
			
		}



		}
			 
		?>

		</div>
		 <?php include('../../footer.html');?>

</body>
 <!-- jQuery Version 1.11.0 -->
    <script src="../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/sb-admin-2.js"></script>
</html>