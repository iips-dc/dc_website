<!DOCTYPE html>
<html lang="en">

<head>
<style type="text/css">
      #form 
        {
           visibility: hidden;
        }
    </style>
<script src="jquery-1.10.2.min.js" ></script>
<script src="jquery-1.8.3.min.js"></script>
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
    <script src="../js/jquery-1.11.0.min.js" type="text/javascript"></script>    

    <script type="text/javascript">
        $(function() {
        $( "#accordion" ).accordion({
          disabled: true
        });
      });
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
	<h1>Search Results</h1>
		<?php

			include('../database_connect.php');
			
			$q=$_POST['searching'];
			//echo $q;
			
			$tag=explode(" ",$q);
			//echo "<br><br>";
			//sprint_r($tag);
			//echo "<br><br>";
			$size=sizeof($tag);
			//echo "<br><br>".$size."<br><br>";
			$sql=" OR tags.tags=";
			$sql_res1="SELECT DISTINCT  `title` ,  `link` ,  `description` FROM  `knowledge_center` INNER JOIN  `tags` ON knowledge_center.s_no = tags.s_id
				  WHERE tags.tags ='".$tag[0]."'";
			for ($i=0; $i <$size-1 ; $i++) {
				if ($size===1) {
					$sql_res="SELECT DISTINCT  `title` ,  `link` ,  `description` FROM  `knowledge_center` INNER JOIN  `tags` ON knowledge_center.s_no = tags.s_id
				    WHERE tags.tags ='".$tag[$i]."'";

				}
				else{
					$sql_res1 .=$sql_res.$sql."'".$tag[$i+1]."'";

				}
					
			}
			//echo $sql_res1;
			//$sql_res="SELECT  `title` ,  `link` ,  `description` FROM  `knowledge_center` INNER JOIN  `tags` ON knowledge_center.s_no = tags.s_id
			//	  WHERE tags.tags ='".$tag[1]."'";
			$query=mysqli_query($dbconnect,$sql_res1) or die ('ERROR'.mysqli_error($conn));
			
			 	
			while($row=mysqli_fetch_array($query, MYSQL_ASSOC))
			{
			
			echo "<strong>".$title=$row['title']."</strong>"."<br>";
			echo $description=$row['description']."<br>";
			echo "<a href='".$link."'>".$link=$row['link']."</a>";
			echo "<br><br>";
			}
		?>	
		
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

</body>

</html>



	<!-- <div class="content">
	<h1>Search Results</h1>
		<?php

			// include('../database_connect.php');
			
			// $q=$_POST['searching'];
			// //echo $q;
			
			// $tag=explode(" ",$q);
			// //echo "<br><br>";
			// //sprint_r($tag);
			// //echo "<br><br>";
			// $size=sizeof($tag);
			// //echo "<br><br>".$size."<br><br>";
			// $sql=" OR tags.tags=";
			// $sql_res1="SELECT DISTINCT  `title` ,  `link` ,  `description` FROM  `knowledge_center` INNER JOIN  `tags` ON knowledge_center.s_no = tags.s_id
			// 	  WHERE tags.tags ='".$tag[0]."'";
			// for ($i=0; $i <$size-1 ; $i++) {
			// 	if ($size===1) {
			// 		$sql_res="SELECT DISTINCT  `title` ,  `link` ,  `description` FROM  `knowledge_center` INNER JOIN  `tags` ON knowledge_center.s_no = tags.s_id
			// 	    WHERE tags.tags ='".$tag[$i]."'";

			// 	}
			// 	else{
			// 		$sql_res1 .=$sql_res.$sql."'".$tag[$i+1]."'";

			// 	}
					
			// }
			// //echo $sql_res1;
			// //$sql_res="SELECT  `title` ,  `link` ,  `description` FROM  `knowledge_center` INNER JOIN  `tags` ON knowledge_center.s_no = tags.s_id
			// //	  WHERE tags.tags ='".$tag[1]."'";
			// $query=mysqli_query($dbconnect,$sql_res1) or die ('ERROR'.mysqli_error($conn));
			
			 	
			// while($row=mysqli_fetch_array($query, MYSQL_ASSOC))
			// {
			
			// echo "<strong>".$title=$row['title']."</strong>"."<br>";
			// echo $description=$row['description']."<br>";
			// echo "<a href='".$link."'>".$link=$row['link']."</a>";
			// echo "<br><br>";
			// }
		?>	
		
	</div>-->

