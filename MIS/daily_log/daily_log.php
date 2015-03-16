   <div class="col-md-8 col-md-offset-3">
<?php                                //daily_log form
include 'database_connect.php';               

if(isset($_POST['date']) && isset($_POST['member_id']) && isset($_POST['link']))
{
  if (isset($_POST['submit'])) //to insert data in a table 
  {
        
    $date=$_POST['date'];
    $member_id=$_POST['member_id'];
    $link=$_POST['link'];
    


if(!empty($date) && !empty($member_id) && !empty($link))
  {
  $query="insert into daily_log values('','$date','$member_id','$link')";
        
  if(mysql_query($query)){
      echo 'record inserted';
              }
    else{
      mysql_error();
        }
  }
  else{
    echo 'Please Enter all Fields.';
  }
  }
}
?>

<form class="form-horizontal" action=""paper.php" method="POST">
<fieldset>

<!-- Form Name -->
<legend>	DAILY LOG</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="date">Date</label>
  <div class="controls">
   <head>
       <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
      
       <script src="//code.jquery.com/jquery-1.10.2.js"></script>
     
       <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      
       <link rel="stylesheet" href="/resources/demos/style.css">
      
       <script>
       
       $(function() {

         $('.datepicker').datepicker({ dateFormat: 'yy-mm-dd' }).val();
            
         $('#datepicker').datepicker({ dateFormat: 'yy-mm-dd' }).val();
      
         });
      
       </script>

     </head>
    

    <input id="datepicker" name="date" type="text" placeholder="Date" class="input-medium">
    
  
  </div>
</div><br/><br/>

<!-- Password input-->
<div class="control-group">
  <label class="control-label" for="member_id">Member_id</label>
  <div class="controls">
      <input id="member_id" name="member_id" type="text" placeholder="Member_id" class="input-medium">
    
    
    
  </div>
</div><br/><br/>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="link">Link</label>
  <div class="controls">
    <input id="link" name="link" type="text" placeholder="Link" class="input-large">
    
  </div>
</div><br/><br/>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for="submit"></label>
  <div class="controls">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div><br/><br/>

</fieldset>
</form>                            
</div>