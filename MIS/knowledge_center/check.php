<?php 
$con = mysql_connect("localhost","root","pulkit5-1");
mysql_select_db('dc_database', $con) or die("Could not connect to Server");
if(isset($_POST['string'])){
	$s = mysql_real_escape_string($_POST['string']);
	$query = "select * from knowledge_center where title like '%$s%' || description like '%$s%' || CONCAT(title, ' ',description) like '%$s%' order by date limit 5";
	$res = mysql_query($query);
	if(mysql_num_rows($res)>0){
	while($row = mysql_fetch_object($res)){?>
	<a target="_blank" href="http://www.facebook.com/<?php echo $row->description;?>" onclick="fillme('<?php echo $row->title." ".$row->link;?>');">
		<div class="user_div">
			<!--<img src="imgs/<?php echo $row->ID;?>.png" style="border-radius:5px;float:left;">-->
			<div class="name"><?php echo $row->title?><br> <?php echo $row->description;?></div>
		</div>
	</a>
	<?php }
	}else{?>
	<div class="no_data">No Result Found !</div>
	<?php }
}
?>
