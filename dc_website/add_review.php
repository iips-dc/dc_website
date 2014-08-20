<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" href="FormValidation.css">
<!--<script type="text/javascript" src="MyFormValidation.js" ></script>-->
<script>

function onlyNumbers(event)				
{
    	var e =event; 
   	var charCode = e.which || e.keyCode;

    		if ((charCode >= 48 && charCode <= 57) || charCode == 8 || charCode == 37 || charCode == 39 || charCode == 9) 
       			 return true;
			else
				 return false;

}

function onlyChars(event)
{
  var e =event;
  var charCode = e.which || e.keyCode;
  if ((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122) || charCode == 8 || charCode == 9 || charCode == 32)
    return true;
  else 
    return false;
}


// function digitsonly(event)
// {
//   var data=document.getElementById('date').value;
//   if(data.Length!=6)
//        {
//        alert("Please enter valid date in format YYMMDD ");
//        return false;
//        }
//     else
//       return true;   
// }
	
</script>
<title>Review</title>
</head>
<body>
<body style="background-color:white;">

	<?php 
        include ('header.php');
        include('date_picker.php')
   ?> <br><br>
	<div class="container">
    <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Projects
                    
                </h1>
                <ol class="breadcrumb">
                    <li><a href="project_mgm.php">Home</a>
                    </li>
                    <li><a href="current_projects.php">Current Projects</a>
                    </li>
                    <li><a href="past_projects.php">Past Projects</a>
                    </li>
                    <li><a href="review.php">Project Reviews</a>
                    </li>
                    <li><a href="documentation.php">Documentation</a>
                    </li>
                    <li><a href="add_project.php">Add Project</a>
                    </li>
                    
                    
                    
                </ol>
            </div>

        </div>
		<div class="row">

	<form role="form" method="post" id="theForm" action="#"> 
	 		<div class="form-group">
			
			
<div class="col-md-12" style="border:1px solid black;background-color:white;">
	<label>
		<h2>Add Review</h2>
	</label><br/>
	<label>Date of Review</label>
		

	 <div class="row">
 	 <div class="col-md-4">
   		 <input type="date" class="form-control" onkeypress="return onlyNumbers(event)" placeholder="YYMMDD" name="review_date" id="datepicker">
  	</div>
  	
	</div>

<br/>
    
    	
	<div class="row">
    <div class="col-md-4">
    <label>Project ID</label>
       <input type="text" class="form-control" name="project_id" id="name"> <span id="nameError" class="green"></span>
    </div>
 	 <div class="col-md-4">
 	 	<label>Project Name</label>
   		 <input type="text" class="form-control" onkeypress="return onlyChars(event)" name="project_name" id="name"> <span id="nameError" class="green"></span>
  	</div>
  	<div class="col-md-4">
  		<label>Project Status</label>
   		 <input type="text" class="form-control" onkeypress="return onlyChars(event)" name="project_status">
  	</div>
  	
	</div>
                   
	 
	<br>
	
	<div class="row">
 	 <div class="col-md-4">
 	 	<label>Review By</label>
   		 <input type="text" class="form-control" onkeypress="return onlyChars(event)" name="review_by"> <span id="nameError" class="green"></span>
  	</div>

  	
  	
  	</div>
	
    <br>
    <label>Review link</label>
 	<input type="text" class="form-control" id="inputEmail3" name="review_link"> 

 	<br>

 	
 	<label>Review</label>
 	<textarea class="form-control" onkeypress="return onlyChars(event)" rows="3" id="add" name="review" ></textarea>

 	<br><br>

	</div>

	<input class="btn btn-success" type="submit" value="Submit" id="submit" name="submit" >
	<input class="btn btn-danger" type="reset" value="Reset">
	
		</form>
		
		<br>
		

		</div>
				
		</div>
	</div>


<?php


include ('database_connect.php');
if(isset($_POST['submit'])){ 
  $review_date=$_POST['review_date'];
  $project_name=$_POST['project_name'];
  $project_id=$_POST['project_id'];
  $project_status=$_POST['project_status'];
  $review_by=$_POST['review_by'];
  $review_link=$_POST['review_link'];
  $review=$_POST['review'];
  


 $sql="INSERT INTO `dc_database`.`project_review` (`s_no`, `project_id`, `project_name`, `project_status`, `review_date`, `review_by`, `link_of_review`, `review`)
       VALUES('','$project_id','$project_name','$project_status','$review_date','review_by','$link_of_review','$review') ";
  
 mysqli_query($dbconnect,$sql);

//  $result = mysqli_query($dbconnect,"SELECT * FROM projects ");
//  echo "<table class='table table-hover'>";

//   echo "<td>".'PROJECT ID'."<td>". 'PROJECT NAME' . "<td>" . 'PROJECT TYPE'."<td>". 'PROJECT LEADER'."<td>". 'TEAM_MEMBERS'."<td>". 'PROJECT STATUS'."<td>". 'TEAM ID'."<td>". 'DC PAGE LINK'."<td>". 'GITHUB PAGE LINK';
 

// while($row = mysqli_fetch_array($result))
//   {
    
//   echo "<tr>";
//   echo "<td>".$row['project_id']."<td>". $row['project_name'] . "<td>" . $row['project_type']."<td>". $row['project_leader']."<td>". $row['team_members']."<td>". $row['project_status']."<td>". $row['team_id']."<td>". $row['dc_page_link']."<td>". $row['github_page_link'];
//   echo "</tr>";
 
//   }
//    echo "</table>";
//    //echo "</div>";

// mysqli_close($dbconnect);
  
}

?>
<?php 
    include('footer.php');
?>
</body>
</html>

