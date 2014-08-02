<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Knowledge center</title>
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<script type="text/javascript">
		$(function(){
$(".search").keyup(function() 
{ 
var searchid = $(this).val();
var dataString = 'search='+ searchid;
if(searchid!='')
{
	$.ajax({
	type: "POST",
	url: "search.php",
	data: dataString,
	cache: false,
	success: function(html)
	{
	$("#result").html(html).show();
	}
	});
}return false;    
});

jQuery("#result").live("click",function(e){ 
	var $clicked = $(e.target);
	var $name = $clicked.find('.name').html();
	var decoded = $("<div/>").html($name).text();
	$('#searchid').val(decoded);
});
jQuery(document).live("click", function(e) { 
	var $clicked = $(e.target);
	if (! $clicked.hasClass("search")){
	jQuery("#result").fadeOut(); 
	}
});
$('#searchid').click(function(){
	jQuery("#result").fadeIn();
});
});
</script>
<style type="text/css">
	.body{ 
		font-family:Tahoma, Geneva, sans-serif;
		font-size:18px;
	}
	.content{
		width:900px;
		margin:0 auto;
	}
	#searchid
	{
		width:500px;
		border:solid 1px #000;
		padding:10px;
		font-size:14px;
	}
	#tarea{

		width:210px;
		padding:10px;
		font-size:14px;
	
	}
	#result
	{
		position:absolute;
		width:500px;
		padding:10px;
		display:none;
		margin-top:-1px;
		border-top:0px;
		overflow:hidden;
		border:1px #CCC solid;
		background-color: white;
	}
	.show
	{
		padding:10px; 
		border-bottom:1px #999 dashed;
		font-size:15px; 
		height:50px;
	}
	.show:hover
	{
		background:#4c66a4;
		color:#FFF;
		cursor:pointer;
	}
</style>
</head>

<body>

	<div class="content">
		<h1>Knowledge Center</h1>
		<form action="search_result.php" method="post">
		<input type="text" class="search" id="searchid" placeholder="Search for Knowledge Center" name="searching" />
		<input type="submit" name="serching2" value="Submit"><br /> 
		</form>
	<div id="result">
	</div>

	<div>

		<h2>Recently Added</h2>
		<?php
			include ('db.php');

			$result = mysqli_query($conn,"SELECT title,description,link FROM knowledge_center ORDER BY date DESC LIMIT 10 ");

			//$link=$row['link'];

			while($row = mysqli_fetch_array($result))
			  {
			    
			  
			  echo "<strong>".$row['title']."</strong>"."<br>";
			  echo $row['description']."<br>";
			  echo "<a href='$link'>".$row['link']."</a>"."<br><br><br>";

			  
			 
			  }
			   

			mysqli_close($conn);
		?>

	</div>

	<div>
		<h2>Enter content for Knowledge Center</h2>
		<form role="form" method="post" action="#">
		<input type="text" class="search" placeholder="Title" name="title" style="width: 666px; height: 27px; opacity: 1.0; z-index: 1; position: relative;"><br>
		<input type="text" class="search" placeholder="Link" name="link" style="width: 666px; height: 27px; opacity:1.0 ; z-index: 1; position: relative;"><br>
		<textarea type="text" id="tarea" placeholder="Description(Max. 200 words)" name="description" style="width: 650px; height: 27px; opacity: 1.0; z-index: 1; position: relative;"></textarea><br>
		<input type="text" class="search" placeholder="Tags" name="tags" style="width: 666px; height: 27px; opacity: 1.0; z-index: 1; position: relative;"><br>
		<input type="submit" value="Submit" name="submit" >
		</form>
		 <?php

			include ('db.php');



			if(isset($_POST['submit'])){
			$date=date("Y/m/d");
			$title=$_POST['title'];
			$link=$_POST['link'];
			$description=$_POST['description'];
			$sql= "INSERT INTO `dc_database`.`knowledge_center` (`date`,`description`,`link`,`s_no`,`title`) VALUES ('$date', '$description','$link',' ','$title');";
			 mysqli_query($conn, $sql);

			
			$sql2= "SELECT s_no FROM  `knowledge_center`  WHERE  `link` = '$link'";
			$s_no= mysqli_query($conn, $sql2) or die ('ERROR'.mysqli_error($conn));
				
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
	    			mysqli_query($conn, $query1) or die('ERROR'.mysqli_error($conn));
	    		}
    			
    		
    	}


	
		}
			 
		?>

	</div>

</div>
</body>
</html>
