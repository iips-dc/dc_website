<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

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
</script>

<title>Projects</title>



<?php
    include('../css.php');
    
?>

</head>
<body style="background-color:white;">



 <div id="wrapper">

    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
          <?php 
                include('../header.php'); 
                include ('date_picker.php');
           ?>
    </nav>

    <div class="navbar-default sidebar" role="navigation" style="padding-top: 0px;">

         <div class="sidebar-nav navbar-collapse" style="margin-top: -30px;" >
                      <?php include('../nav.html'); ?>
         </div>



 <div id="wrapper">

    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
          <?php 
                include('../header.php'); 
                include ('date_picker.php');
           ?>
    </nav>

    <div class="navbar-default sidebar" role="navigation" style="padding-top: 0px;">

         <div class="sidebar-nav navbar-collapse" style="margin-top: -30px;" >
                      <?php include('../nav.html'); ?>
         </div>

    </div>

    <div class="row">

      <div class="col-md-8 col-md-offset-3">

        <div class="container">

          <div class="row">
                  <?php 
                      include('project_taskbar.php');
                      include ('../database_connect.php');
                  ?>
          </div>

          <br><br>

   
          <!-- <div class="col-lg-12"> -->
          <div id="myTabContent" class="tab-content" style="text-align:justify;">  <!-- main div -->




            <div class="tab-pane fade in active" id="home">

              <div class="col-lg-8">
                <ul id="myTab" class="nav nav-tabs">
                      <li class="active"><a href="#iips" data-toggle="tab">IIPS</a>
                      </li>
                      <li><a href="#davv" data-toggle="tab">DAVV</a>
                      </li>
                      <li><a href="#other" data-toggle="tab">Other</a>
                      </li>
                      
                </ul> 
              </div>

              <div id="myTabContent" class="tab-content" style="text-align:justify;">

                    <div class="tab-pane fade in active" id="iips">
                      
                        <div class="col-md-12">
                          <?php
                            $result = mysqli_query($dbconnect,"SELECT * FROM projects where deployment='IIPS improvement'");
 
                            while($row = mysqli_fetch_array($result))
                              {
                                
                                echo "<h3> <a href=".$row['github_page_link'].">". $row['project_name']."</a>". " </h3>";
                            
                                echo "Status: ". $row['project_status'];
                                echo "<br>";
                                echo "Description :".$row['project_desc'];
                                echo "<br>";
                                echo "Description :".$row['project_desc'];
                                echo "<br>";
                                echo "Team: ".$row['team_members'];
                               
                              }
                               
                            ?>
                        </div>

                        
                    </div>



                    <div class="tab-pane fade" id="davv">

                        <div class="col-md-12">

                          
                          <?php
                            $result = mysqli_query($dbconnect,"SELECT * FROM projects where deployment='University improvement'");
 
                            while($row = mysqli_fetch_array($result))
                              {
                                
                                echo "<h3> <a href=".$row['github_page_link'].">". $row['project_name'] ."</a>". " </h3>";
                            
                                echo "Status: ". $row['project_status'];
                                echo "<br>";
                                echo "Description :".$row['project_desc'];
                                echo "<br>";
                                echo "Description :".$row['project_desc'];
                                echo "<br>";
                                echo "Team: ".$row['team_members'];
                               
                              }
                               
                            ?>
                        </div>

                    </div>




                    <div class="tab-pane fade" id="other">

                        <div class="col-md-12">

                           <?php
                            $result = mysqli_query($dbconnect,"SELECT * FROM projects where deployment='Other'");
 
                            while($row = mysqli_fetch_array($result))
                              {
                                
                                echo "<h3> <a href=".$row['github_page_link'].">". $row['project_name'] ."</a>". " </h3>";
                            
                                echo "Status: ". $row['project_status'];
                                echo "<br>";
                                echo "Description :".$row['project_desc'];
                                echo "<br>";
                                echo "Description :".$row['project_desc'];
                                echo "<br>";


                                echo "Team: ".$row['team_members'];
                               
                              }
                               
                            ?>

                        </div>

                    </div>

                </div>
              </div>
                      





            <div class="tab-pane fade" id="add_project">      


                <form role="form" method="POST" id="theForm" action="#add_project"> 

                  <div class="form-group">
                                                
                    <div class="col-md-8" style="border:1px solid black;background-color:white;">

                        <label>
                            <h2>Add Project</h2>
                        </label><br/>

                        <label>Date of Starting</label>
                          <div class="row">
                            <div class="col-md-4">
                               <input type="date" class="form-control" required="required" name="date_of_registration" class="datepicker"> 
                               
                            </div>
                            
                          </div>

                        <br/>

                        <label>Project Information</label> 

                          <div class="row">
                             <div class="col-md-4">

                              <label>Project Name</label>
                                 <input type="text" class="form-control" required="required" onkeypress="return onlyChars(event)" name="project_name" id="project_name"> <span id="nameError" class="green"></span>
                             </div>
                             <div class="col-md-4">
                                <label>Project ID</label>
                                 <input type="text" class="form-control" name="project_id" id="project_id">
                             </div>
                             <div class="col-md-4">
                                <label>Project Type</label>
                                  <input type="text" class="form-control" required="required" onkeypress="return onlyChars(event)" name="project_type" id="lname"> <span id="lnameError" class="red"></span>
                              
                             </div>
                          </div>
                                           
                           
                        <br>
                          
                          <div class="row">
                             <div class="col-md-4">
                                <label>Team Leader</label>
                                 <input type="text" class="form-control" required="required" onkeypress="return onlyChars(event)" name="team_leader" id="name"> <span id="nameError" class="green"></span>
                             </div>

                              <div class="col-md-4">
                              <label>Team ID</label>
                                 <input type="text" class="form-control" name="team_id" id="name"> <span id="nameError" class="green"></span>
                              </div>

                              <div class="col-md-4">
                              <label>Project Status</label>
                                 <input type="text" class="form-control" required="required" onkeypress="return onlyChars(event)" name="project_status" id="name"> <span id="nameError" class="green"></span>
                              </div>
                              
                          </div>
                          
                        <br>

                          <label>Deployed at</label>
                            <div class="row">

                              <div class="col-md-4">

                              <select class="form-control" name="deployed">
                                <option>IIPS improvement</option>
                                <option>University improvement</option>
                                <option>Other</option>
                              
                              </select>
                              </div>

                            </div>

                        <br>

                            <label>Team Members</label>
                              <input type="text" class="form-control"  required="required" placeholder="jeff , jenny, jack" id="inputEmail3" name="members"> 

                        <br>

                            <label>Github Link</label>
                              <input type="text" class="form-control"  required="required" id="inputEmail3" name="github_link"> 

                        <br>

                            <label>DC page link on web</label>
                              <input type="text" class="form-control"  id="inputEmail3" name="link"> 

                        <br>
                            <label>Project Description</label>
                              <textarea class="form-control" rows="3" required="required" id="add" name="project_description" ></textarea>

                        <br><br>

                        <div>
                          <input class="btn btn-success" type="submit" name="submit1" value="Submit" id="submit">
                          <input class="btn btn-danger" type="reset" value="Reset">
                        </div>

                    </div> 

                  </div>

                </form>  


            </div>    


    <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////// 
         ///////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


    <!-- Form for  Project Documentation -->

    <!-- <a name="add_documentation"></a> -->


          <div class="tab-pane fade" id="add_documentation">   


              <form role="form" method="post" id="theForm" action="#add_documentation"> 

                <div class="form-group">
                                  
                  <div class="col-md-8" style="border:1px solid black;background-color:white;">
                    <label>
                        <h2>Add Project Documentation</h2>
                    </label><br/>

                    <label>Date</label>
                      <div class="row">
                         <div class="col-md-4">
                             <input type="date" class="form-control" class="datepicker" required="required" name="date" id="date"> 
                         </div>   
                      </div>

                    <br/>

                    <label>Project Information</label>
                          
                      <div class="row">
                        <div class="col-md-4">
                          <label>Project Name</label>             
                           <input type="text" class="form-control" required="required" onkeypress="return onlyChars(event)" name="project_name" id="name"> 
                        </div>

                        
                        <div class="col-md-4"> 
                            <label>Project ID</label>  
                             <input type="text" class="form-control" name="project_id">
                        </div>
                          
                      </div>
                                       
                       
                    <br>
                      
                      <div class="row">
                        
                    <label>
                        <h2>Add Project Documentation</h2>
                    </label><br/>

                    <label>Date</label>
                      <div class="row">
                         <div class="col-md-4">
                             <input type="date" class="form-control" class="datepicker" required="required" name="date" id="date"> 
                         </div>   
                      </div>

                    <br/>

                    <label>Project Information</label>
                          
                      <div class="row">
                        <div class="col-md-4">
                          <label>Project Name</label>             
                           <input type="text" class="form-control" required="required" onkeypress="return onlyChars(event)" name="project_name" id="name"> 
                        </div>

                        
                        <div class="col-md-4"> 
                            <label>Project ID</label>  
                             <input type="text" class="form-control" name="project_id">
                        </div>
                          
                      </div>
                                       
                       
                    <br>
                      
                      <div class="row">
                        
                         <div class="col-md-6"> 
                          <label>SPMP Link</label>
                             <input type="text" class="form-control" name="spmp_link" id="name"> <span id="nameError" class="green"></span>
                         </div>

                        
                         <div class="col-md-6"> 
                           <label>SPMP Status</label>               
                             <input type="text" class="form-control" required="required" onkeypress="return onlyChars(event)" name="spmp_status" id="name"> <span id="nameError" class="green"></span>
                         </div>

                      </div>

                    <br>

                      <div class="row">
                        
                         <div class="col-md-6">
                          <label>SRS Link</label>
                             <input type="text" class="form-control" name="srs_link" id="name"> <span id="nameError" class="green"></span>
                         </div>
                        
                          <div class="col-md-6">  
                            <label>SRS Status</label>            
                             <input type="text" class="form-control" required="required" onkeypress="return onlyChars(event)" name="srs_status" id="name"> <span id="nameError" class="green"></span>
                          </div>

                      </div>

                    <br>

                      <div class="row">
                        
                        <div class="col-md-6"> 
                            <label>SDD Link</label>             
                             <input type="text" class="form-control" name="sdd_link" id="name"> <span id="nameError" class="green"></span>
                        </div>

                     
                       
                        <div class="col-md-6">
                             <label>SDD Status</label>
                            <input type="text" class="form-control" required="required" onkeypress="return onlyChars(event)" name="sdd_status" id="name"> 
                        </div>

                      </div>
                      
                    <br>

                      <div class="row">
                       
                         <div class="col-md-6"> 
                            <label>STD Link</label>               
                             <input type="text" class="form-control" name="std_status" id="name"> <span id="nameError" class="green"></span>
                         </div>

                        
                         <div class="col-md-6">
                            <label>STD Status</label>    
                             <input type="text" class="form-control" required="required"  onkeypress="return onlyChars(event)" name="std_link" id="name"> <span id="nameError" class="green"></span>
                         </div>

                      </div>
                      

                     <br><br>

                  

                    <input class="btn btn-success" type="submit" name="submit2" value="Submit" id="submit">
                    <input class="btn btn-danger" type="reset" value="Reset">

                  </div>

                </div>


              </form>

                </div>


              </form>

          </div>
                    
            

            
     


  <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////
         ///////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

         <!-- For Project Review -->

    <!-- <a name="add_review"></a> -->

            <div class="tab-pane fade" id="add_review">
                
                <form role="form" method="post" id="theForm" action="#add_review"> 

                  <div class="form-group">
                             
                    <div class="col-md-8" style="border:1px solid black;background-color:white;">
                      
                      <label>
                        <h2>Add Review</h2>
                      </label><br/>
                      
                      <label>Date of Review</label>
                        
                      <div class="row">
                        <div class="col-md-4">
                           <input type="date" class="form-control"  required="required" name="review_date" class="datepicker">
                        </div>
                        
                      </div>

                    <br/>
                      
                      <div class="row"> 
                          <div class="col-md-4">
                            <label>Project ID</label>   
                             <input type="text" class="form-control" name="project_id" id="name"> 
                          </div>

                        <div class="col-md-4">
                          <label>Project Name</label>
                           <input type="text" class="form-control" required="required" onkeypress="return onlyChars(event)" name="project_name" id="name"> <span id="nameError" class="green"></span>
                        </div>
                        <div class="col-md-4">
                          <label>Project Status</label>
                           <input type="text" class="form-control" required="required" onkeypress="return onlyChars(event)" name="project_status">
                        </div>
                        
                      </div>
                                       
                       
                    <br>
                      
                      <div class="row">
                        <div class="col-md-4">
                          <label>Review By</label>
                           <input type="text" class="form-control" required="required" onkeypress="return onlyChars(event)" name="review_by"> <span id="nameError" class="green"></span>
                        </div>
                      </div>
                      
                    <br>

                      <label>Review link</label>
                       <input type="text" class="form-control" id="inputEmail3" name="review_link"> 

                    <br>
                      
                      <label>Review</label>
                        <textarea class="form-control" required="required" onkeypress="return onlyChars(event)" rows="3" id="add" name="review" ></textarea>

                    <br><br>

                    

                      <input class="btn btn-success" type="submit" name="submit3" value="Submit" id="submit"  >
                      <input class="btn btn-danger" type="reset" value="Reset">
                      

                    </div>

                  </div>

                </form>
                    
                <br>

              

            
          

            </div> <!-- review -->

          </div>  <!-- main div -->


        </div> <!-- Container-->

      </div> <!-- Offset-->

    </div>  <!-- row -->

    </div>  <!-- row -->

  </div> <!-- Wrapper-->    

    
  <!-- </div> -->

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                 DATABASE CONNECTIVITY of FORMS
                     /////////////////////////////////////////////////////
                                 
                            TO insert data into database of projects
 -->

  <?php

    

    if ( isset( $_POST['submit1'] ) ) 
       
    {  
        $date_of_registration=$_POST['date_of_registration'];
        $project_name=$_POST['project_name'];
        $project_id=$_POST['project_id'];
        $project_type=$_POST['project_type'];
        $team_leader=$_POST['team_leader'];
        $team_id=$_POST['team_id'];
        $project_status=$_POST['project_status'];
        $members=$_POST['members'];
        $deployed = $_POST['deployed'];
        $github_link=$_POST['github_link'];
        $link=$_POST['link'];
        $project_description=$_POST['project_description'];
        
        
       $sql="INSERT INTO  `dc_database`.`projects` (
        `date_of_start` ,
        `project_id` ,
        `project_name` ,
        `project_type` ,
        `project_leader` ,
        `team_members` ,
        `project_status` ,
        `team_id` ,
        `deployment` ,
        `dc_page_link` ,
        `github_page_link` ,
        `project_desc`
        )
        VALUES (
        '$date_of_registration',  '$project_id',  '$project_name',  '$project_type',  '$team_leader',  '$members',  '$project_status',  '$team_id',  '$deployed',  '$link',  '$github_link',  '$project_description'
        )";

        
        $insertQuery1 = mysqli_query($dbconnect,$sql) or die(mysqli_error($dbconnect));
        if($insertQuery1){
          echo "<script>alert('Record Submitted')</script>";
          header('location:project.php');
        }
        else
        {  
          echo "<script>alert('Record not Submitted, Please check the entries')</script>";
          header('location:project.php');
        }
        
        mysqli_query($dbconnect,$sql);
      
    }
  ?>



<!-- // for insertion of data into database of Documentation-->


  </div> <!-- Wrapper-->    

    
  <!-- </div> -->

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                 DATABASE CONNECTIVITY of FORMS
                     /////////////////////////////////////////////////////
                                 
                            TO insert data into database of projects
 -->

  <?php
    
    if ( isset( $_POST['submit1'] ) ) 
       
    {  
        $date_of_registration=$_POST['date_of_registration'];
        $project_name=$_POST['project_name'];
        $project_id=$_POST['project_id'];
        $project_type=$_POST['project_type'];
        $team_leader=$_POST['team_leader'];
        $team_id=$_POST['team_id'];
        $project_status=$_POST['project_status'];
        $members=$_POST['members'];
        $deployed = $_POST['deployed'];
        $github_link=$_POST['github_link'];
        $link=$_POST['link'];
        $project_description=$_POST['project_description'];
        
        
       $sql="INSERT INTO  `dc_database`.`projects` (
        `date_of_start` ,
        `project_id` ,
        `project_name` ,
        `project_type` ,
        `project_leader` ,
        `team_members` ,
        `project_status` ,
        `team_id` ,
        `deployment` ,
        `dc_page_link` ,
        `github_page_link` ,
        `project_desc`
        )
        VALUES (
        '$date_of_registration',  '$project_id',  '$project_name',  '$project_type',  '$team_leader',  '$members',  '$project_status',  '$team_id',  '$deployed',  '$link',  '$github_link',  '$project_description'
        )";
        
        $insertQuery1 = mysqli_query($dbconnect,$sql) or die(mysqli_error($dbconnect));
        if($insertQuery1){
          echo "<script>alert('Record Submitted')</script>";
          header('location:project.php');
        }
        else
        {  
          echo "<script>alert('Record not Submitted, Please check the entries')</script>";
          header('location:project.php');
        }
        
        mysqli_query($dbconnect,$sql);
      
    }
  ?>



<!-- // for insertion of data into database of Documentation-->


  <?php
  include ('../database_connect.php');
  if(isset($_POST['submit2']))
  { 
    
    $date=$_POST['date'];
    $project_name=$_POST['project_name'];
    $project_id=$_POST['project_id'];
    $spmp_link=$_POST['spmp_link'];
    $spmp_status=$_POST['spmp_status'];
    $srs_link=$_POST['srs_link'];
    $srs_status=$_POST['srs_status'];
    $sdd_link=$_POST['sdd_link'];
    $sdd_status=$_POST['sdd_status'];
    $std_link=$_POST['std_link'];
    $std_status=$_POST['std_status'];
    
    
    $sql="INSERT INTO `dc_database`.`documentation` (`date_of_documentation`, `project_name`, `project_id`, 
      `spmp_link`, `spmp_status`, `srs_link`, `srs_status`, `sdd_link`, `sdd_status`, `std_link`, `std_status`)
     VALUES ('$date', '$project_name', '$project_id', '$spmp_link', '$spmp_status', 
    '$srs_link', '$srs_status', '$sdd_link', '$sdd_status', '$std_link', '$std_status')";
    
    $insertQuery2 = mysqli_query($dbconnect,$sql) or die(mysqli_error($dbconnect));
    if($insertQuery2){
      echo "<script>alert('Record Submitted')</script>";
      header('location:project.php');
    }
    else
    {  echo "<script>alert('Record not Submitted, Please Provide unique Project ID')</script>";
      header('location:project.php');
    }

    
  } 


    
  } 


    mysqli_close($dbconnect);
  ?>



<!-- for insertion of data in to database of project review -->

  <?php

  include ('../database_connect.php');
  if(isset($_POST['submit3']))
  { 
    $review_date=$_POST['review_date'];
    $project_name=$_POST['project_name'];
    $project_id=$_POST['project_id'];
    $project_status=$_POST['project_status'];
    $review_by=$_POST['review_by'];
    $review_link=$_POST['review_link'];
    $review=$_POST['review'];
    
    $sql= "INSERT INTO `dc_database`.`project_review` (`project_id`, `project_name`, `review_date`, `link_of_review`, `project_status`, `review_by`, `review`) 
    VALUES ('$project_id', '$project_name', '$review_date', '$review_link', '$project_status', '$review_by', '$review')";
   
  // mysqli_query($dbconnect,$sql);
    $insertQuery3 = mysqli_query($dbconnect,$sql) or die(mysqli_error($dbconnect));
      if($insertQuery3){
        echo "<script>alert('Record Submitted')</script>";
        header('location:project.php');
      }
      else
      {  echo "<script>alert('Record not Submitted')</script>";
        header('location:project.php');
      }
    
  }
  mysqli_close($dbconnect);
  ?>

  <br><br>

  <?php 
      include('../footer.php');
      include('../javascript.php');
  ?>
</body>
</html>

