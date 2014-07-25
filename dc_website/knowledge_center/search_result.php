<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Knowledge center</title>
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<style type="text/css">
	.content{
			width:900px;
			margin:0 auto;
		}
</style>
<body>
	<div class="content">
			<h1>Search Results</h1>
	<?php

		include('db.php');
		
		$q=$_POST['searching'];
		//echo $q;
		
		$tag=explode(" ",$q);
		//echo "<br><br>";
		//sprint_r($tag);
		//echo "<br><br>";
		$size=sizeof($tag);
		//echo "<br><br>".$size."<br><br>";
		$sql=" OR tags.tags=";
		$sql_res1="SELECT  `title` ,  `link` ,  `description` FROM  `knowledge_center` INNER JOIN  `tags` ON knowledge_center.s_no = tags.s_id
			  WHERE tags.tags ='".$tag[0]."'";
		for ($i=0; $i <$size-1 ; $i++) {
			if ($size===1) {
				$sql_res="SELECT  `title` ,  `link` ,  `description` FROM  `knowledge_center` INNER JOIN  `tags` ON knowledge_center.s_no = tags.s_id
			    WHERE tags.tags ='".$tag[$i]."'";

			}
			else{
				$sql_res1 .=$sql_res.$sql."'".$tag[$i+1]."'";

			}
				
		}
		//echo $sql_res1;
		//$sql_res="SELECT  `title` ,  `link` ,  `description` FROM  `knowledge_center` INNER JOIN  `tags` ON knowledge_center.s_no = tags.s_id
		//	  WHERE tags.tags ='".$tag[1]."'";
		$query=mysqli_query($conn,$sql_res1) or die ('ERROR'.mysqli_error($conn));
		
		 	
		while($row=mysqli_fetch_array($query, MYSQL_ASSOC))
		{
		
		echo "<strong>".$title=$row['title']."</strong>"."<br>";
		echo $description=$row['description']."<br>";
		echo "<a href='".$link."'>".$link=$row['link']."</a>";
		echo "<br><br>";
		}
	?>	
		
	</div>
	</body>
</html>