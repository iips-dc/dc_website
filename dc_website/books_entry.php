<!DOCTYPE html>
<html lang="en">

	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>Books Entry</title>

	    <!-- Bootstrap core CSS -->
	    <link href="css/bootstrap.css" rel="stylesheet">

	    <!-- Add custom CSS here -->
	    <link href="css/modern-business.css" rel="stylesheet">
	    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	</head>

	<body style="background-color:#EEEEEE;">
		<?php 
			include 'database_connect.php';
			include 'header.php';
		?>


		<div class="container">
		 	<div class="row">

            	<div class="col-lg-12">
                	<br>
                	<h1 class="page-header">Books Entry</h1>
            	</div>

        	</div>

        	<form role="form" action="books_entry.php" method="POST">
        		<div class="form-group">
					<div class="col-md-12" style="border:1px solid black;border-radius:10px;background-color:#EEEEEE;">
						<label>
							<h2>Insert information of Books</h2>
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
								<label>author:</label>
								<input type="text" name="author" class="form-control">
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-md-6">
								<label>Edition:</label>
								<input type="text" name="edition" class="form-control">
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-md-6">
								<label>Publication:</label>
								<input type="text" name="publication" class="form-control">
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-md-6">
								<label>ISBN No. :</label>
								<input type="text" name="isbn_no" class="form-control">
							</div>
						</div>

						<br>
						<input class="btn btn-success"type="submit" value="Submit" id="submit" name="Submit">
						<br>
						<br>
					</div>	
				</div>
			</form>

			<?php
				if (isset($_POST['Submit'])) {
					# code...
					$book_id = $_POST['book_id'];
					$book_title = $_POST['book_title'];
					$author = $_POST['author'];
					$edition = $_POST['edition'];
					$publication = $_POST['publication'];
					$isbn_no = $_POST['isbn_no'];

					$query = "INSERT INTO `books` (`book_id`, `book_title`, `author`, `edition`, `publication`, `isbn_no`) VALUES('$book_id', '$book_title', '$author', '$edition', '$publication', '$isbn_no')";
					$query_run = mysqli_query($dbconnect, $query);
				}
			
				include ('footer.php');
			?>
		</div>
	</body>
</html>