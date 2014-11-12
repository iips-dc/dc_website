<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Social Profile</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

    
    <?php
        include('nav.html');
    ?>
    <div class="container">
        <form role="form" method="post" id="theForm" action="#"> 
            <div class="form-group">
            
                
                <div class="col-md-12" style="border:1px solid black;background-color:white;">
                    <label>
                        <h2>Insert your Social Information</h2>
                    </label><br/>
                    <label>Name</label>
                        

                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Enter your full-name" name="name" required>
                        </div>
                    </div>
                    <br>
                    <label>Email-Id</label>
                        

                    <div class="row">
                        <div class="col-md-4">
                            <p><i>Eg: larry_page@gmail.com</i></p>
                            <input type="email" class="form-control" placeholder="Enter your Email address:" name="email" required>
                        </div>
                    </div>

                    <br/>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Google+</label>
                            <p><i>Eg: https://plus.google.com/u/0/+larry_page</i></p>
                            <input type="url" class="form-control" placeholder="Enter your Google+ profile URL:" name="googleplus" required>
                            
                        </div>
                        <div class="col-md-4">
                            <label>Blog</label>
                            <p><i>Eg: http://larry_page.blogspot.in</i></p>
                            <input type="url" class="form-control" placeholder="Enter your blog's URL:" name="blog" >
                        </div>
                    </div>
                    <br>            
                    <div class="row">
                        <div class="col-md-4">
                            <label>LinkedIn profile</label>
                            <p><i>Eg: http://in.linkedin.com/pub/larry_page/85/5a3/321</i></p>
                            <input type="url" class="form-control" placeholder="Enter your LinkedIn profile URL:"  name="linkedin" required>
                        </div>
                        <div class="col-md-4">
                            <label>Github profile</label>
                            <p><i>Eg: https://github.com/larry_page</i></p>
                            <input type="url" class="form-control" placeholder="Enter your Github URL:  "  name="github" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Twitter URL</label>
                            <p><i>Eg: https://twitter.com/larry_page</i></p>
                            <input type="" class="form-control" placeholder="Enter your Twitter profile URL:" name="twitter" required>
                        </div>
                        <div class="col-md-4">
                            <label>Facebook profile</label>
                            <p><i>Eg: https://www.facebook.com/public/larry_page</i></p>
                            <input type="url" class="form-control" placeholder="Enter your Facebook profile URL:" name="facebook">
                        </div>
                    </div> 
                    <br>
       
                    <input class="btn btn-success"type="submit" value="Submit" id="submit" >
                    <input class="btn btn-danger" type="reset" value="Reset">
                    <br><br>
                </div>
            </form>
        </div>
    </div>
    <!-- /.container -->
</body>

    <?php


        include ('database_connect.php');
          
        $github=$_POST['github'];
        $blog=$_POST['blog'];
        $facebook=$_POST['facebook'];
        $twitter=$_POST['twitter'];
        $linkedin=$_POST['linkedin'];
        $googleplus=$_POST['googleplus'];
        $name=$_POST['name'];
        $members=$_POST['members'];
        $email=$_POST['email'];
        $sql="INSERT INTO `dc_database`.`dc_member_social` (`github`, `facebook`, `googleplus`, `linkedin`, `name`, `twitter`, `blog`,`email`) VALUES ('$github', '$facebook', '$googleplus', '$linkedin', '$name', '$twitter', '$blog','$email');";
          
        $query=mysqli_query($dbconnect,$sql);
        if ($query) {
            echo "<script>data_submitted();</script>";
        }
        

    ?>
    <br><br><br>
    <?php include ('footer.html') ?>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>
    <script type="text/javascript">
        function data_submitted() {
           alert("Your data is submitted sucessfully.");
        }
    </script>



</html>
