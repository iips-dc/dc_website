<?php
$name= $_FILES['file']['name'];
$extension=strtolower(substr($name,strpos($name,'.')+1));
$size= $_FILES['file']['size'];
$type= $_FILES['file']['type'];
$tmp_name =$_FILES['file']['tmp_name'];
$max_size=2097152; 
if(isset($name)){
	if(!empty($name)){
		if(($extension=='jpg'||$extension=='jpeg')&& ($type=='image/jpeg' || $type=='image/jpeg') && $size<=$max_size){
		$location= 'uploads/';
		if(move_uploaded_file($tmp_name, $location.$name)){
			echo 'Uploaded';
		}
	else{
		echo "Ther was an error";
	}
}else{
	echo "File must be jpeg/jpg";
}
}
}
?>
<html>
	<body>
		<form action="upload.php" method="POST" enctype="multipart/form-data">
			<input type="file" value="Browse" name="file"><br><br>
			<input type="submit" value="Submit" name="submit">
		</form>	
	</body>
</html>