<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
      #form 
        {
           visibility: hidden;
        }
    </style>
<script src="jquery-1.10.2.min.js" ></script>
<script src="jquery-1.8.3.min.js"></script>
<script>
    function myFunction() 
        {
	    document.getElementById('form').style.cssText = 'visibility: visible;';
        document.getElementById('btn').style.cssText = 'display: hidden;';
        document.getElementById('btn').style.cssText = 'display: none;';
        }
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Leave Module</title>
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="../css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
	 <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>   
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <?php// include('../header.php'); ?>
            <?php// include('../date_picker.php'); ?>
        </nav>
        <div class="navbar-default sidebar" role="navigation" style="padding-top: 0px;">
            <div class="sidebar-nav navdisplaybar-collapse" style="margin-top: -30px;" >
              <?php include('../nav.html'); ?>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <div class="col-md-8 col-md-offset-3">
        <div class="row">
                                        <!-- Approved table starts -->
        <div class="form-group">
        <div class="col-md-12   " style="border:1px solid black;">
            <table width="600px" align="center" border="5px" class= " table table-bordered">
            <center><h1> Approved Leave Requests</h1></center>
            <tr>
                <th>S.No.</th>
                <th>Name</th>
                <th>From </th>
                <th>To</th>
                <th>Leave Type</th>
                <th>Reason</th>
                <th>Message</th>
                <th>Leave Status</th>
            </tr>  

        <?php
                        # Select query to fetch all Approved requests        
            $dbconnect = mysqli_connect('localhost','root','pulkit5-1','dc_database');
            $selectQuery=mysqli_query($dbconnect,"SELECT * FROM `leave` WHERE approve=1 LIMIT 10") or die(mysqli_error($dbconnect));
                $i=1;
            while($row=mysqli_fetch_array($selectQuery)){          
        ?>  
            <tr align="center">
            <td><?php echo $i; ?></td>  
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td><?php echo $row[4]; ?></td>
            <td><?php echo $row[5]; ?></td>
            <td><?php echo $row[6]; ?></td>
            <td><?php 
            $approve=$row[7];
            if($approve==1)
                echo "approved";
            if($approve==-1)
                echo "Rejected";
            if($approve==0)
                echo "Pending";

             ?></td>
            </tr>
        <?php
            $i=$i+1;
            }
        ?>
    </table>
</div>
</div>
</div><br><br>

<center><button id="btn" type= "submit" class="btn btn-primary" onclick="myFunction()" >Apply for Leave</button></center></center>
 
                                     <!-- Application form Starts -->
  <div class="row">
     <form role="form" method="POST" id="theForm" action="leaven.php"> 
        <div class="form-group" id="form" style="visiblity:hidden">
        <div class="col-md-6.col-md-offset-3">
            <label>
                <h2>Leave Application</h2>
            </label><br/>
     
            <div class="row">
                <div class='col-md-12'>
                    <label>Name</label>
                    <input type="text" name="name" required="required" required="alphabetic_space" class="form-control">
                </div>
            </div>

             <div class="row">
                <div class='col-md-12'>
                    <label>Date of leaving </label>
                    <input type="text" name="leaving_date" required="required" required="alphabetic_space" class="form-control">
                </div>
            </div>  

            <div class="row">
                <div class='col-md-12'>
                    <label>Date of Returning</label>
                    <input type="date" name="coming_date" required="required" class="form-control" id="datepicker">
                </div>  
            </div>

        <div class="row">
            <div class='col-md-12'>
                <label>Leave type</label>
                  <select value="type" name="type" class="form-control">
                     <option>Sick Leave</option>
                     <option>Recreation</option>
                     <option>Festival</option>
                </select>
            </div>
        </div>

         <div class="row">    
            <div class='col-md-12'>
                <label>Reason</label>
                <input type="text" name="reason" required="required" required="alphabetic_space" class="form-control">
            </div>
        </div>


        <div class="row">
            <div class='col-md-12'>
                    <label>Message</label>
                    <input type="text" name="message" required="required" required="alphabetic_space" class="form-control">
            </div>
        </div><br><br>
    <input class="btn btn-success" type="submit" value="Submit" id="submit" name="submit">
    </div><br><br><br>
    </form>
        </div>
</div>
</div>
</div>
<?php
 $dbconnect = mysqli_connect('localhost','root','pulkit5-1','dc_database');
if(isset($_POST['submit']))     //   Insert data if submit button is clicked 
{
    $type=mysqli_real_escape_string($dbconnect,$_POST['type']);
    $name=mysqli_real_escape_string($dbconnect,$_POST['name']);
    $leaving_date=mysqli_real_escape_string($dbconnect,$_POST['leaving_date']);
    $coming_date=mysqli_real_escape_string($dbconnect,$_POST['coming_date']);
    $reason=mysqli_real_escape_string($dbconnect,$_POST['reason']);
    $message=mysqli_real_escape_string($dbconnect,$_POST['message']);
    $insertQuery = mysqli_query($dbconnect,"INSERT INTO `dc_database`.`leave` (name,leaving_date,coming_date,type,reason,message)
        VALUES ('$name','$leaving_date','$coming_date','$type','$reason','$message')") or die(mysqli_error($dbconnect));
    if($insertQuery){
        //echo "<script>alert('Record Submitted')</script>";
        header('location:leaven.php');
        exit;
    }
    else
        echo "Not Submitted";       
}       
?>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/sb-admin-2.js"></script>
</body>

</html>

