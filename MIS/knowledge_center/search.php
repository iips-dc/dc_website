<?php
include('db.php');

$q=$_POST['search'];
echo $sql_res=mysqli_query($conn,"select title,date,link,description from knowledge_center where title like '%".$q."%' order by date LIMIT 5");
while($row=mysql_fetch_array($sql_res))
{
$title=$row['title'];
$description=$row['description'];
$link=$row['link'];
$b_title='<strong>'.$q.'</strong>';
$b_description='<strong>'.$q.'</strong>';
$final_title = str_ireplace($q, $b_title, $title);
$final_description = str_ireplace($q, $b_description, $description);

}

?>
<div class="show" align="left">
	<span class="name"><a href="<?php echo "$link";  ?>"><?php echo $final_title; ?></a>
	</span>&nbsp;<br/><?php echo $final_description; ?><br/>
</div>

