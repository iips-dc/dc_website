<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" href="FormValidation.css">

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

<title>Events</title>



<?php
    include('../css.php');
    
?>

</head>
<body style="background-color:white;">

<!-- 
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

                                To print out the event details  -->

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

            <div class="col-lg-8">

                <h1 class="page-header">Events </h1>
                    
                
                <ul id="myTab" class="nav nav-tabs">
                    
                    <li class="active"><a href="#home" data-toggle="tab">Home</a>
                    </li>
                    <li><a href="#presentation" data-toggle="tab">Presentation</a>
                    </li>
                    <li><a href="#workshop" data-toggle="tab">Workshop</a>
                    </li>
                    <li><a href="#seminar" data-toggle="tab">Seminar</a>
                    </li>
                    <li><a href="#gd" data-toggle="tab">GD</a>
                    </li>
                    <li><a href="#outdoor" data-toggle="tab">Outdoor</a>
                    </li>
                    <li><a href="#add_event" data-toggle="tab">Add Event</a>
                    </li>
                                        
                </ul>
            </div>

            <?php 
                // include('project_taskbar.php');
                include ('../database_connect.php');     
            ?>
          </div>

          <br><br>

   
          <!-- <div class="col-lg-12"> -->
          <div id="myTabContent" class="tab-content" style="text-align:justify;">  <!-- main div -->



<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                               Home page
   -->   

            <!-- <a name="home"></a> -->

            <div class="tab-pane fade in active" id="home">

              <div id="myTabContent" class="tab-content" style="text-align:justify;">

                      
                      <div class="col-md-12">
                          <?php
                            $result = mysqli_query($dbconnect,"SELECT * FROM events ");
 
                            while($row = mysqli_fetch_array($result))
                              {
                                
                                echo "<h3> <a href=".$row['summary_link'].">". $row['topic']."</a>". " </h3>";

                                echo "Date :".$row['date'];
                                echo "<br>";

                                echo "Event: ". $row['type_of_event'];
                                echo "<br>";

                                echo "Reference :".$row['material_link'];
                                echo "<br>";

                                
                              }
                               
                          ?>
                      </div>

              </div>

            </div>


            <div class="tab-pane fade" id="presentation">

              <div id="myTabContent" class="tab-content" style="text-align:justify;">

                      
                      <div class="col-md-12">
                          <?php
                            $result = mysqli_query($dbconnect,"SELECT * FROM events where type_of_event= 'Presentation'");
 
                            while($row = mysqli_fetch_array($result))
                              {
                                
                                echo "<h3> <a href=".$row['summary_link'].">". $row['topic']."</a>". " </h3>";

                                echo "Date :".$row['date'];
                                echo "<br>";

                                echo "Reference :".$row['material_link'];
                                echo "<br>";

                                
                              }
                               
                          ?>
                      </div>

              </div>

            </div>



            <div class="tab-pane fade" id="workshop">

              <div id="myTabContent" class="tab-content" style="text-align:justify;">

                      
                      <div class="col-md-12">
                          <?php
                            $result = mysqli_query($dbconnect,"SELECT * FROM events where type_of_event= 'Workshop'");
 
                            while($row = mysqli_fetch_array($result))
                              {
                                
                                echo "<h3> <a href=".$row['summary_link'].">". $row['topic']."</a>". " </h3>";

                                echo "Date :".$row['date'];
                                echo "<br>";

                                echo "Reference :".$row['material_link'];
                                echo "<br>";

                                
                              }
                               
                          ?>
                      </div>

              </div>

            </div>




            <div class="tab-pane fade" id="seminar">

              <div id="myTabContent" class="tab-content" style="text-align:justify;">

                      
                      <div class="col-md-12">
                          <?php
                            $result = mysqli_query($dbconnect,"SELECT * FROM events where type_of_event= 'Seminar'");
 
                            while($row = mysqli_fetch_array($result))
                              {
                                
                                echo "<h3> <a href=".$row['summary_link'].">". $row['topic']."</a>". " </h3>";

                                echo "Date :".$row['date'];
                                echo "<br>";

                                echo "Reference :".$row['material_link'];
                                echo "<br>";

                                
                              }
                               
                          ?>
                      </div>

              </div>

            </div>





            <div class="tab-pane fade" id="gd">

              <div id="myTabContent" class="tab-content" style="text-align:justify;">

                      
                      <div class="col-md-12">
                          <?php
                            $result = mysqli_query($dbconnect,"SELECT * FROM events where type_of_event= 'GD'");
 
                            while($row = mysqli_fetch_array($result))
                              {
                                
                                echo "<h3> <a href=".$row['summary_link'].">". $row['topic']."</a>". " </h3>";

                                echo "Date :".$row['date'];
                                echo "<br>";

                                echo "Reference :".$row['material_link'];
                                echo "<br>";

                                
                              }
                               
                          ?>
                      </div>

              </div>

            </div>




            <div class="tab-pane fade" id="outdoor">

              <div id="myTabContent" class="tab-content" style="text-align:justify;">

                      
                      <div class="col-md-12">
                          <?php
                            $result = mysqli_query($dbconnect,"SELECT * FROM events where type_of_event= 'Outdoor'");
 
                            while($row = mysqli_fetch_array($result))
                              {
                                
                                echo "<h3> <a href=".$row['summary_link'].">". $row['topic']."</a>". " </h3>";

                                echo "Date :".$row['date'];
                                echo "<br>";

                                echo "Reference :".$row['material_link'];
                                echo "<br>";

                                
                              }
                               
                          ?>
                      </div>

              </div>

            </div>



  <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  <!--                               Form for Adding Event Details                          -->


  <!--  <a name="add_event"></a> --> 


            <div class="tab-pane fade" id="add_event">      


                <form role="form" method="POST" id="theForm" action="#add_event"> 

                  <div class="form-group">
                                                
                    <div class="col-md-8" style="border:1px solid black;background-color:white;">

                        <label>
                            <h2>Add Event</h2>
                        </label><br/>

                        <label>Date of Event</label>
                          <div class="row">
                            <div class="col-md-4">
                               <input type="date" class="form-control" required="required" name="date_of_event" class="datepicker"> 
                               
                            </div>
                            
                          </div>

                        <br/>

                        <label>Event Information</label> 

                          <div class="row">
                                                         
                            <div class="col-md-4">

                                <label>Event</label>
                                <select class="form-control" name="event_name">
                                  <option>Presentation</option>
                                  <option>Workshop</option>
                                  <option>Seminar</option>
                                  <option>GD</option>
                                  <option>Outdoor</option>                                
                                </select>
                            </div>

                            
                             <div class="col-md-4">
                                <label>Event ID</label>
                                 <input type="text" class="form-control" required="required" name="event_id" id="project_id">
                             </div>
                             <div class="col-md-4">
                                <label>Organiser ID</label>
                                  <input type="text" class="form-control" required="required" name="organiser_id" id="lname"> 
                              
                             </div>
                          </div>
                                           
                           
                        <br>
                          
                          <div class="row">
                             <div class="col-md-8">
                                <label>Topic</label>
                                 <input type="text" class="form-control" required="required" onkeypress="return onlyChars(event)" name="topic" id="name"> 
                             </div>

                              <div class="col-md-4">
                              <label>Duration</label>
                                 <input type="text" class="form-control" name="duration" id="name"> 
                              </div>

                              
                              
                          </div>
                          
                        <br>

                          <div class="row">
                             <div class="col-md-8">
                                <label>Venue</label>
                                 <input type="text" class="form-control" required="required" onkeypress="return onlyChars(event)" name="venue" id="name"> 
                             </div>

                              <div class="col-md-4">
                              <label>Time</label>
                                 <input type="text" class="form-control" name="time" id="name"> 
                              </div>

                              
                              
                          </div>
                          
                        <br>

                            <label>Material Link</label>
                              <input type="text" class="form-control"  required="required" id="inputEmail3" name="material_link"> 

                        <br>

                            <label>Summary Link</label>
                              <input type="text" class="form-control"  id="inputEmail3" name="summary_link"> 

                        
                        <br><br>

                        <div>
                          <input class="btn btn-success" type="submit" name="submit1" value="Submit" id="submit">
                          <input class="btn btn-danger" type="reset" value="Reset">
                        </div>

                    </div> 

                  </div>

                </form>  


            </div>    <!-- add_event -->


          </div>  <!-- main div -->


        </div> <!-- Container-->

      </div> <!-- Offset-->

    </div>  <!-- row -->

  </div> <!-- Wrapper-->    

    
  <!-- </div> -->

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                 DATABASE CONNECTIVITY of FORM
                     /////////////////////////////////////////////////////
                                 
                            TO insert data into database of events
 -->

  <?php

    

    if ( isset( $_POST['submit1'] ) ) 
       
    {  
        $date_of_event=$_POST['date_of_event'];
        $event_name=$_POST['event_name'];
        $event_id=$_POST['event_id'];
        $organiser_id=$_POST['organiser_id'];
        $topic=$_POST['topic'];
        $duration=$_POST['duration'];
        $venue=$_POST['venue'];
        $time=$_POST['time'];
        $material_link=$_POST['material_link'];
        $summary_link=$_POST['summary_link'];
        
        
       $sql="INSERT INTO `dc_database`.`events` (`event_id`, `type_of_event`, `organizer_id`, `topic`, `venue`, `date`, `time`, `duration`, `material_link`, `summary_link`) VALUES ('$event_id', '$event_name', '$organiser_id', '$topic', '$venue', '$date_of_event', '$time', '$duration', '$material_link', '$summary_link');";

        
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





  <br><br>

  <?php 
      include('../footer.php');
      include('../javascript.php');
  ?>
</body>
</html>

