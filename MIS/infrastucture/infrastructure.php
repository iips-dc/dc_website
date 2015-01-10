<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" href="FormValidation.css">

<style type="text/css">
      #form , #form2 , #form3, #form4
        {
           visibility: hidden;
        }
</style>

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

  function myFunction() 
  {
      document.getElementById('form').style.cssText = 'visibility: visible;';     
      //document.getElementById('btn').style.cssText = 'display: hidden;';
      document.getElementById('btn').style.cssText = 'display: none;';
      
  }

  function myFunction2() 
  {
      document.getElementById('form2').style.cssText = 'visibility: visible;';
      //document.getElementById('btn2').style.cssText = 'display: hidden;';
      document.getElementById('btn2').style.cssText = 'display: none;';
  }

  function myFunction3() 
  {
      document.getElementById('form3').style.cssText = 'visibility: visible;';
      //document.getElementById('btn2').style.cssText = 'display: hidden;';
      document.getElementById('btn3').style.cssText = 'display: none;';
  }

  function myFunction4() 
  {
      document.getElementById('form4').style.cssText = 'visibility: visible;';
      //document.getElementById('btn2').style.cssText = 'display: hidden;';
      document.getElementById('btn4').style.cssText = 'display: none;';
  }

  

</script>

<style type=”text/css”>
.panel {
  background: blue;
  color: black;

}


</style>

<title>Infrastructure</title>



<?php
    include('../css.php');
    
?>

</head>
<body style="background-color:white;">

<!-- 
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

                                To print out the Infrastructure details  -->

 <div id="wrapper">

    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
          <?php 
                include('../header.php'); 
                include ('date_picker.php');
                include ('../database_connect.php');   
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

          <div class="col-lg-8">

                <h1 class="page-header">Infrastructure </h1>
                    
                
                <ul id="myTab" class="nav nav-tabs">
                    
                    <li class="active"><a href="#home" data-toggle="tab">Home</a>
                    </li>
                    <li><a href="#books" data-toggle="tab">Allotted Books</a>
                    </li>
                    <li><a href="#sys_info" data-toggle="tab">System Details</a>
                    </li>
                    <li><a href="#book_info" data-toggle="tab">Book Details</a>
                    </li>
                    
                </ul>

          </div>

            

          <div id="myTabContent" class="tab-content" style="text-align:justify;">  <!-- main div -->

              <div class="tab-pane fade in active" id="home"> <!-- home -->

                  <div class="row"><br>
                                        
                    <div class="form-group">
                
                      <div class="col-md-8"> 

                        <table width="600px" align="center" border="0px" class= " table table-bordered"> <br>

                          <h4><b> Alloted Resources</b></h4>
                                <tr align="center">
                                    <th>S.No.</th>
                                    <th>Resource</th>
                                    <th>Issued to </th>
                                    <th>Issue Date</th>
                                    <th>Submission Date</th>
                                    
                                </tr>  

                            <?php
                                            # Select query to fetch all Approved requests        
                                $selectQuery=mysqli_query($dbconnect,"SELECT * FROM `issued_resource_to`") or die(mysqli_error($dbconnect));
                                    $i=1;
                                while($row=mysqli_fetch_array($selectQuery)){          
                            ?>  
                                <tr align="center">
                                    <td><?php echo $i; ?></td>  
                                    <td><?php echo $row[1]; ?></td>
                                    <td><?php echo $row[3]; ?></td>
                                    <td><?php echo $row[4]; ?></td>
                                    <td><?php echo $row[6]; ?></td>
                                                                  
                                </tr>
                            <?php
                                $i=$i+1;
                                }
                            ?>
                        </table>
                      </div>
                    </div>
                  </div><br>


                  <button id="btn" type= "submit"class="btn btn-primary" onclick="myFunction()" >Allot new Resource</button>
                  
                        <div class="container">
                           
                            <form role="form" action="infrastructure.php" method="POST">
                                <div class="form-group" id="form" style="visiblity:hidden">
                                  <div class="col-md-8" style="border:1px solid black;background-color:#EEEEEE;">
                                    <label>
                                      <h2>Insert information of Resource allotment</h2>
                                    </label><br/>

                                    <br>

                                    <div class="row">
                                      <div class="col-md-6">
                                        <label>Resource Id:</label>
                                        <input type="text" name="resource_id" class="form-control" required="required">
                                      </div>
                                    
                                    
                                      <div class="col-md-6">
                                        <label>Resource Name:</label>
                                        <input type="text" name="resource_name" class="form-control" required="required">
                                      </div>
                                    </div>

                                    <br>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <label>Issued by:</label>
                                        <input type="text" name="issued_by" class="form-control" required="required" onkeypress="return onlyChars(event)">
                                      </div>
                                    
                                      <div class="col-md-6">
                                        <label>Issued To:</label>
                                        <input type="text" name="issued_to" class="form-control" required="required" onkeypress="return onlyChars(event)">
                                      </div>
                                    </div>
                                
                                    <br>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <label>Issuing date:</label>
                                        <input type="text" name="issued_date" class="form-control datepicker" required="required">
                                      </div>
                                    
                                      <div class="col-md-6">
                                        <label>Issuing time:</label>
                                        <input type="text" name="issued_time" class="form-control">
                                      </div>
                                    </div>
                                    
                                    <br>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <label>Submission date:</label>
                                        <input type="text" name="submission_date" class="form-control datepicker" required="required">
                                      </div>
                                    
                                      <div class="col-md-6">
                                        <label>Submission time:</label>
                                        <input type="text" name="submission_time" class="form-control">
                                      </div>
                                    </div>

                                    <br>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <label>Other detail:</label>
                                        <input type="text" name="detail" class="form-control">
                                      </div>
                                    </div>
                                    
                                    <br>
                                    <input class="btn btn-success"type="submit" value="Submit" id="submit" name="Submit1">
                                    <br>
                                    
                                  </div>
                              </div>
                            </form>
                          </div>


                          <?php 
                            if (isset($_POST['Submit1'])) {
          
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

                              if($query_run){
                                  echo "<script>alert('Record Submitted')</script>";
                                  header('location:infrastructure.php');
                                }
                                else
                                {  
                                  echo "<script>alert('Record not Submitted, Please check the entries')</script>";
                                  header('location:infrastructure.php');
                                }
                            }
                            
                          ?>  
                  

              </div><!-- home -->


              <!-- BOOK ALLOTMENT AND DETAILS -->

              <div class="tab-pane fade" id="books"> <!-- books -->

                  <div class="row"><br>
                                        
                    <div class="form-group" >
                
                      <div class="col-md-8"> 

                        <table width="600px" align="center" border="0px" class= " table table-bordered"> <br>

                          <h4><b> Alloted Books</b></h4>
                                <tr align="center">
                                    <th>S.No.</th>
                                    <th>Book name</th>
                                    <th>Issued to </th>
                                    <th>Issue Date</th>
                                    <th>Submission Date</th>
                                    
                                </tr>  

                            <?php
                                            # Select query to fetch all Approved requests        
                                $selectQuery=mysqli_query($dbconnect,"SELECT * FROM `issued_books_to`") or die(mysqli_error($dbconnect));
                                    $i=1;
                                while($row=mysqli_fetch_array($selectQuery)){          
                            ?>  
                                <tr align="center">
                                    <td><?php echo $i; ?></td>  
                                    <td><?php echo $row[1]; ?></td>
                                    <td><?php echo $row[3]; ?></td>
                                    <td><?php echo $row[4]; ?></td>
                                    <td><?php echo $row[7]; ?></td>
                                                                  
                                </tr>
                            <?php
                                $i=$i+1;
                                }
                            ?>
                        </table>

                      </div>

                    </div>

                  </div><br>


                  <button id="btn2" type= "submit" class="btn btn-primary" onclick="myFunction2()" >Allot new Book</button>
                  
                  <br>

                      <div class="container">
                         
                        <form role="form" action="infrastructure.php" method="POST">
                          
                          <div class="form-group" id="form2" style="visiblity:hidden">

                              <div class="col-md-8" style="border:1px solid black;background-color:#EEEEEE;">
                                <label>
                                  <h2>Insert information of Books allotment</h2>
                                </label><br/>

                                <br>

                                <div class="row">
                                  <div class="col-md-6">
                                    <label>Book Id:</label>
                                    <input type="text" name="book_id" class="form-control" required="required">
                                  </div>
                                
                                  <div class="col-md-6">
                                    <label>Book Title:</label>
                                    <input type="text" name="book_title" class="form-control" required="required">
                                  </div>
                                </div>

                                <br>
                                <div class="row">
                                  <div class="col-md-6">
                                    <label>Issued by:</label>
                                    <input type="text" name="issued_by" class="form-control" required="required" onkeypress="return onlyChars(event)">
                                  </div>
                                
                                  <div class="col-md-6">
                                    <label>Issued To:</label>
                                    <input type="text" name="issued_to" class="form-control" required="required" onkeypress="return onlyChars(event)">
                                  </div>
                                </div>
                            
                                <br>
                                <div class="row">
                                  <div class="col-md-6">
                                    <label>Issuing date:</label>
                                    <input type="text" name="issued_date" class="form-control datepicker" required="required">
                                  </div>
                                
                                  <div class="col-md-6">
                                    <label>Issuing time:</label>
                                    <input type="text" name="issued_time" class="form-control">
                                  </div>
                                </div>
                                
                                <br>
                                <div class="row">
                                  <div class="col-md-6">
                                    <label>Submission date:</label>
                                    <input type="text" name="submission_date" class="form-control datepicker" required="required">
                                  </div>
                                
                                  <div class="col-md-6">
                                    <label>Submission time:</label>
                                    <input type="text" name="submission_time" class="form-control">
                                  </div>
                                </div>

                                <br>
                                <div class="row">
                                  <div class="col-md-12">
                                    <label>Other detail:</label>
                                    <input type="text" name="detail" class="form-control">
                                  </div>
                                </div>
                                
                                <br>
                                <input class="btn btn-success" type="submit" value="Submit" id="submit" name="Submit2">
                                <br>
                                <!--<br>
                                <input class="btn btn-danger" type="reset" value="Reset">-->
                              </div>
                            </div>
                          </form>
                        </div>

                        <?php 
                          if (isset($_POST['Submit2'])) {

                            $book_id = $_POST['book_id'];
                            $book_title = $_POST['book_title'];
                            $issued_to = $_POST['issued_to'];
                            $issued_by = $_POST['issued_by'];
                            $issued_date = $_POST['issued_date'];
                            $issued_time = $_POST['issued_time'];
                            $submission_date = $_POST['submission_date'];
                            $submission_time = $_POST['submission_time'];
                            $detail = $_POST['detail'];

                            $query = "INSERT INTO `issued_books_to` (`book_id`, `book_title`, `issue_by`, `issue_to`, `date`, `time`, `submission_date`, `submission_time`, `details`) VALUES('$book_id', '$book_title','$issued_by', '$issued_to', '$issued_date', '$issued_time', '$submission_date', '$submission_time', '$detail')";

                            $query_run = mysqli_query($dbconnect, $query);

                            if($query_run){
                                  echo "<script>alert('Record Submitted')</script>";
                                  header('location:infrastructure.php');
                                }
                                else
                                {  
                                  echo "<script>alert('Record not Submitted, Please check the entries')</script>";
                                  header('location:infrastructure.php');
                                }

                          }
                          
                        ?>  
                        




              </div><!-- books -->

              <div class="tab-pane fade" id="sys_info"> <!-- System Information -->

                  <div class="row"><br>
                                        
                    <div class="form-group">
                
                      <div class="col-md-8"> 

                        <table width="600px" align="center" border="0px" class= " table table-bordered"> <br>

                          <h4><b>System Information</b></h4>
                                <tr align="center">
                                    <th>S.No.</th>
                                    <th>System Name</th>
                                    <th>RAM</th>
                                    <th>RAM Type</th>
                                    <th>HDD Capacity</th>
                                    <th>Monitor Type</th>
                                    <th>LAN</th>
                                    <th>Access</th>
                                    <th>OS Installed</th>
                                    <th>SW Dtails</th>
                                    
                                </tr>  

                            <?php
                                            # Select query to fetch all Approved requests        
                                $selectQuery=mysqli_query($dbconnect,"SELECT * FROM `system_information`") or die(mysqli_error($dbconnect));
                                    $i=1;
                                while($row=mysqli_fetch_array($selectQuery)){          
                            ?>  
                                <tr align="center">
                                    <td><?php echo $i; ?></td>  
                                    <td><?php echo $row[0]; ?></td>
                                    <td><?php echo $row[1]; ?></td>
                                    <td><?php echo $row[2]; ?></td>
                                    <td><?php echo $row[3]; ?></td>
                                    <td><?php echo $row[4]; ?></td>
                                    <td><?php echo $row[5]; ?></td>
                                    <td><?php echo $row[6]; ?></td>
                                    <td><?php echo $row[7]; ?></td>
                                    <td><?php echo $row[8]; ?></td>
                                                                  
                                </tr>
                            <?php
                                $i=$i+1;
                                }
                            ?>
                        </table>
                      </div>
                    </div>
                  </div><br>


                  <button id="btn3" type= "submit"class="btn btn-primary" onclick="myFunction3()" >Add new System Information</button>
                  
                        <div class="container">
                           
                            <form role="form" action="infrastructure.php" method="POST">
                                <div class="form-group" id="form3" style="visiblity:hidden">
                                  <div class="col-md-8" style="border:1px solid black;background-color:#EEEEEE;">
                                    <label>
                                      <h2>Insert information of System</h2>
                                    </label><br/>

                                    <br>

                                    <div class="row">
                                      <div class="col-md-4">
                                        <label>System Name</label>
                                        <input type="text" name="system_name" class="form-control" required="required">
                                      </div>
                                    
                                    
                                      <div class="col-md-4">
                                        <label>RAM (in GB)</label>
                                        <input type="text" name="ram" class="form-control" required="required" onkeypress="return onlyNumbers(event)">
                                      </div>

                                      <div class="col-md-4">
                                        <label>RAM Type</label>
                                        <input type="text" name="ram_type" class="form-control">
                                      </div>
                                    </div>

                                    <br>
                                    <div class="row">
                                      <div class="col-md-4">
                                        <label>Monitor Type</label>
                                        <input type="text" name="monitor_type" class="form-control" required="required" >
                                      </div>
                                    
                                      <div class="col-md-4">
                                        <label>OS Installed</label>
                                        <select name="os_installed" class="form-control">
                                          <option>Windows</option>
                                          <option>Linux</option>
                                          <option>Both</option>
                                        </select>
                                      </div>
                                    </div>
                                
                                    <br>
                                    <div class="row">
                                      <div class="col-md-4">
                                        <label>HDD Capacity (in GB)</label>
                                        <input type="text" name="hdd" class="form-control datepicker" required="required" onkeypress="return onlyNumbers(event)">
                                      </div>
                                    
                                      <div class="col-md-4">
                                        <label>LAN</label>
                                        <select name="lan" class="form-control">
                                          <option>Yes</option>
                                          <option>No</option>
                                        </select>
                                      </div>

                                      <div class="col-md-4">
                                        <label>Access</label>
                                        <select name="access" class="form-control">
                                          <option>Yes</option>
                                          <option>No</option>
                                        </select>
                                      </div>
                                    </div>
                                    

                                    <br>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <label>Software detail:</label>
                                        <input type="text" name="detail" class="form-control">
                                      </div>
                                    </div>
                                    
                                    <br>
                                    <input class="btn btn-success"type="submit" value="Submit" id="submit" name="Submit3">
                                    <br>
                                    
                                  </div>
                              </div>
                            </form>
                          </div>


                          <?php 
                            if (isset($_POST['Submit3'])) {
          
                              $system_name = $_POST['system_name'];
                              $ram = $_POST['ram'];
                              $ram_type = $_POST['ram_type'];
                              $monitor_type = $_POST['monitor_type'];
                              $os_installed = $_POST['os_installed'];
                              $hdd = $_POST['hdd'];
                              $lan = $_POST['lan'];
                              $access = $_POST['access'];
                              $detail = $_POST['detail'];

                              $query = "INSERT INTO `dc_database`.`system_information` (`system_name`, `ram`, `ram_type`, `hdd_capacity`, `monitor_type`, `lan`, `access`, `os_installed`, `sw_details`) VALUES ('$system_name', '$ram', '$ram_type', '$hdd', '$monitor_type', '$lan', '$access', '$os_installed', '$detail')";
                              $query_run = mysqli_query($dbconnect, $query);

                              if($query_run){
                                  echo "<script>alert('Record Submitted')</script>";
                                  header('location:infrastructure.php');
                                }
                                else
                                {  
                                  echo "<script>alert('Record not Submitted, Please check the entries')</script>";
                                  header('location:infrastructure.php');
                                }
                            }
                            
                          ?>  

              </div><!-- System Information -->


              <div class="tab-pane fade" id="book_info"> <!-- Book Information -->

                  <div class="row"> 

                      <div class="form-group" >
                    
                          <div class="col-md-8"> 

                            <table width="600px" align="center" border="0px" class= " table table-bordered"><br>

                              <h4><b> Book Details</b></h4>
                                    <tr align="center">
                                        <th>S.No.</th>
                                        <th>Book name</th>
                                        <th>Author</th>
                                        <th>Edition</th>
                                        <th>Publication</th>
                                        
                                    </tr>  

                                <?php
                                                # Select query to fetch all Approved requests        
                                    $selectQuery=mysqli_query($dbconnect,"SELECT * FROM `books`") or die(mysqli_error($dbconnect));
                                        $i=1;
                                    while($row=mysqli_fetch_array($selectQuery)){          
                                ?>  
                                    <tr align="center">
                                        <td><?php echo $i; ?></td>  
                                        <td><?php echo $row[1]; ?></td>
                                        <td><?php echo $row[2]; ?></td>
                                        <td><?php echo $row[3]; ?></td>
                                        <td><?php echo $row[4]; ?></td>
                                                                      
                                    </tr>
                                <?php
                                    $i=$i+1;
                                    }
                                ?>
                            </table>

                          </div>

                      </div>
                  </div>

        <br>

            <button id="btn4" type="submit" class="btn btn-primary" onclick="myFunction4()" >Add new Book</button>

                  
        <br>

            <form role="form" action="infrastructure.php" method="POST">

                <div class="form-group" id="form4" style="visiblity:hidden">

                    <div class="col-md-8" style="border:1px solid black;border-radius:10px;background-color:#EEEEEE;">

                      <label>
                        <h2>Insert information of Books</h2>
                      </label><br/>
                      <br>

                      <div class="row">
                        <div class="col-md-6">
                          <label>Book Id:</label>
                          <input type="text" name="book_id" class="form-control" required="required">
                        </div>
                      </div>

                      <br>
                      <div class="row">
                        <div class="col-md-12">
                          <label>Book Title:</label>
                          <input type="text" name="book_title" class="form-control" required="required">
                        </div>
                      </div>

                      <br>
                      <div class="row">
                        <div class="col-md-6">
                          <label>author:</label>
                          <input type="text" name="author" class="form-control" required="required" onkeypress="return onlyChars(event)">
                        </div>
                      
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
                     
                        <div class="col-md-6">
                          <label>ISBN No. :</label>
                          <input type="text" name="isbn_no" class="form-control" onkeypress="return onlyNumbers(event)">
                        </div>
                      </div>

                      <br>
                      <input class="btn btn-success"type="submit" value="Submit" id="submit" name="Submit4">
                      <br>
                      <br>

                  </div>  
                </div>
            </form>

      <?php
        if (isset($_POST['Submit4'])) {

          $book_id = $_POST['book_id'];
          $book_title = $_POST['book_title'];
          $author = $_POST['author'];
          $edition = $_POST['edition'];
          $publication = $_POST['publication'];
          $isbn_no = $_POST['isbn_no'];

          $query = "INSERT INTO `books` (`book_id`, `book_title`, `author`, `edition`, `publication`, `isbn_no`) VALUES('$book_id', '$book_title', '$author', '$edition', '$publication', '$isbn_no')";
          $query_run = mysqli_query($dbconnect, $query);

          if($query_run){
              echo "<script>alert('Record Submitted')</script>";
              header('location:infrastructure.php');
                        }
                    else
                        {  
              echo "<script>alert('Record not Submitted, Please check the entries')</script>";
              header('location:infrastructure.php');
                        }
        }
      
      
      ?>

              </div><!-- Book Information -->

          </div><!-- main div --> 


        </div> <!-- Container-->

      </div> <!-- Offset-->

    </div>  <!-- row -->

  </div> <!-- Wrapper-->    

    
  <!-- </div> -->


  <br><br>

  <?php 
      include('../footer.php');
      include('../javascript.php');
  ?>
</body>
</html>

