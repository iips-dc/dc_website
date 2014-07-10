<!DOCTYPE html>
<html lang="en">

	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>Resource Allotment</title>

	    <!-- Bootstrap core CSS -->
	    <link href="css/bootstrap.css" rel="stylesheet">

	    <!-- Add custom CSS here -->
	    <link href="css/modern-business.css" rel="stylesheet">
	    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	</head>

	<?php
		require ('database_connect.php');
	?>

	<body style="background-color:#EEEEEE;">
		<?php 
			include 'header.php';
		?>


	<div class="container">
		 <div class="row">

            <div class="col-lg-12">
                <br>
                <h1 class="page-header">Resource Allotment</h1>
            </div>

        </div>

        <form role="form" action="resource_allotment_form.php" method="POST">
        	<div class="form-group">
				<div class="col-md-12" style="border:1px solid black;background-color:#EEEEEE;">
					<label>
						<h2>Insert information of Resource allotment</h2>
					</label><br/>

					<br>

					<div class="row">
						<div class="col-md-6">
							<label>Resource Id:</label>
							<input type="text" name="resource_id" class="form-control">
						</div>
					</div>

					<br>
					<div class="row">
						<div class="col-md-6">
							<label>Resource Name:</label>
							<input type="text" name="resource_name" class="form-control">
						</div>
					</div>

					<br>
					<div class="row">
						<div class="col-md-6">
							<label>Issued by:</label>
							<input type="text" name="issued_by" class="form-control">
						</div>
					</div>	

					<br>
					<div class="row">
						<div class="col-md-6">
							<label>Resource To:</label>
							<input type="text" name="issued_to" class="form-control">
						</div>
					</div>
			
					<br>
					<div class="row">
						<div class="col-md-6">
							<label>Issuing date:</label>
							<input type="text" name="issued_date" class="form-control datepicker">
						</div>
					</div>
			
					<br>
					<div class="row">
						<div class="col-md-6">
							<label>Issuing time:</label>
							<input type="text" name="issued_time" class="form-control">
						</div>
					</div>
					
					<br>
					<div class="row">
						<div class="col-md-6">
							<label>Submission date:</label>
							<input type="text" name="submission_date" class="form-control datepicker">
						</div>
					</div>
					
					<br>
					<div class="row">
						<div class="col-md-6">
							<label>Submission time:</label>
							<input type="text" name="submission_time" class="form-control">
						</div>
					</div>

					<br>
					<div class="row">
						<div class="col-md-6">
							<label>Other detail:</label>
							<input type="text" name="detail" class="form-control">
						</div>
					</div>
					
					<br>
					<input class="btn btn-success"type="submit" value="Submit" id="submit" name="Submit">
					<br>
					<!--<br>
					<input class="btn btn-danger" type="reset" value="Reset">-->
				</div>
			</div>
		</form>
    </div>
		

		<?php	
			if (isset($_POST['Submit'])) {
				# code...
				$resource_id = $_POST['resource_id'];
				$resource_name = $_POST['resource_name'];
				$issued_to = $_POST['issued_to'];
				$issued_by = $_POST['issued_by'];
				$issued_date = $_POST['issued_date'];
				$issued_time = $_POST['issued_time'];
				$submission_date = $_POST['submission_date'];
				$submission_time = $_POST['submission_time'];
				$detail = $_POST['detail'];

				$query = "INSERT INTO `issued_resource_to` (`resource_id`, `resource_name`, `issue_by`, `issue_to`, `date`, `time`, `submission_date`, `submission_time`, `detail`) VALUES('$resource_id', '$resource_name','$issued_by', '$issued_to', '$issued_date', '$issued_time', '$submission_date', '$submission_time', '$detail')";
				$query_run = mysqli_query($dbconnect, $query);
			}
			
			include ('footer.php');
		?>	
	</body>
</html>