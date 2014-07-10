<!DOCTYPE html>
<html lang="en">

	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>Books Allotment</title>

	    <!-- Bootstrap core CSS -->
	    <link href="css/bootstrap.css" rel="stylesheet">

	    <!-- Add custom CSS here -->
	    <link href="css/modern-business.css" rel="stylesheet">
	    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	</head>

	<?php
		require 'date_picker.php';
		$dbserver = "localhost";
		$dbname = "dc_database";
		$username = "root";
		$password = "root";
		$error = "Can't connect";

		$dbconnect = mysqli_connect($dbserver, $username, $password, $dbname) or die('Connection error');
	?>

	<body style="background-color:#EEEEEE;">
		<?php 
			include 'header.php';
		?>


	<div class="container">
		 <div class="row">

            <div class="col-lg-12">
                <br>
                <h1 class="page-header">Books Allotment</h1>
            </div>

        </div>

        <form role="form" action="books_allotment_form.php" method="POST">
        	<div class="form-group">
				<div class="col-md-12" style="border:1px solid black;background-color:#EEEEEE;">
					<label>
						<h2>Insert information of Books allotment</h2>
					</label><br/>

					<br>

					<div class="row">
						<div class="col-md-6">
							<label>Book Id:</label>
							<input type="text" name="book_id" class="form-control">
						</div>
					</div>

					<br>
					<div class="row">
						<div class="col-md-6">
							<label>Book Title:</label>
							<input type="text" name="book_title" class="form-control">
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
							<label>Issued To:</label>
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
				$book_id = $_POST['book_id'];
				$book_title = $_POST['book_title'];
				$issued_to = $_POST['issued_to'];
				$issued_by = $_POST['issued_by'];
				$issued_date = $_POST['issued_date'];
				$issued_time = $_POST['issued_time'];
				$submission_date = $_POST['submission_date'];
				$submission_time = $_POST['submission_time'];
				$detail = $_POST['detail'];

				//	INSERT INTO `dc_database`.`issued_books_to` (`book_id`, `book_title`, `issue_by`, `issue_to`, `date`, `time`, `submission_date`, `submission_time`, `details`) VALUES ('1', 'Data Science', 'vedi', 'Prashant', '2014-07-01', '12:00:00', '2014-07-04', '12:00:00', 'open');
				$query = "INSERT INTO `issued_books_to` (`book_id`, `book_title`, `issue_by`, `issue_to`, `date`, `time`, `submission_date`, `submission_time`, `details`) VALUES('$book_id', '$book_title','$issued_by', '$issued_to', '$issued_date', '$issued_time', '$submission_date', '$submission_time', '$detail')";
				$query_run = mysqli_query($dbconnect, $query);
			}
			
			include ('footer.php');
		?>	
	</body>
</html>