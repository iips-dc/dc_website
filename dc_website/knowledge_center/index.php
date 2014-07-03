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
	body{ 
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
		
		<input type="text" class="search" id="searchid" placeholder="Search for Knowledge Center" /><br /> 
		
	<div id="result">
	</div>

	<div>

		<h2>Recently Added</h2>
		<?php
			$con=mysqli_connect("localhost","root","pulkit5-1","dc_database");
			// Check connection
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }

			$result = mysqli_query($con,"SELECT title,description,link FROM knowledge_center ORDER BY date DESC LIMIT 10 ");

			$link=$row['link'];

			while($row = mysqli_fetch_array($result))
			  {
			    
			  
			  echo "<strong>".$row['title']."</strong>"."<br>";
			  echo $row['description']."<br>";
			  echo "<a href='$link'>".$row['link']."</a>"."<br><br><br>";

			  
			 
			  }
			   

			mysqli_close($con);
		?>

	</div>

	<div>
		<h2>Enter content for Knowledge Center</h2>
		<form role="form" method="post" action="#">
		<input type="text" class="search" placeholder="Title" name="title"><br>
		<textarea type="text" id="tarea" placeholder="Description(Max. 200 words)" name="description"></textarea><br>
		<input type="text" class="search" placeholder="Link" name="link"><br>
		<input type="submit" value="Submit" name="submit" >
		</form>
		 <?php

			$DBServer = 'localhost';
			$DBUser   = 'root';
			$DBPass   = 'pulkit5-1';
			$DBName   = 'dc_database';
			$conn = mysqli_connect($DBServer, $DBUser, $DBPass, $DBName);
			 
			// check connection
			if (mysqli_connect_errno()) {
			  trigger_error('Database connection failed: '  . mysqli_connect_error(), E_USER_ERROR);
			}



			if(isset($_POST['submit'])){
			$date=date("Y/m/d");
			$title=$_POST['title'];
			$link=$_POST['link'];
			$description=$_POST['description'];
			$sql= "INSERT INTO `dc_database`.`knowledge_center` (`date`,`description`,`link`,`s_no`,`title`) VALUES ('$date', '$description','$link',' ','$title');";
			 mysqli_query($conn, $sql);
			}
			//$sql='SELECT * FROM daily_log';
			 
		?>

	</div>

</div>
</body>
</html>
