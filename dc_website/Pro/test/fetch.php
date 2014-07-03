<?php
            $connect=mysqli_connect('localhost','root','','Rajat');
              $retrival = mysqli_query($connect,"SELECT * FROM `faculty`");
          		echo "<table border='1'><tr><th>Name</th>
                                          <th>Surname</th>
                                          <th>username</th>
                                          <th>gender</th> 
                                          <th>contact</th>
                                          <th>Email</th>
                                          <th>Batch Facilitator</th> 
                                          <th>Current Address</th>
                                          <th>Delete</th>
                                      </tr>";
              while($row = mysqli_fetch_array($retrival, MYSQL_ASSOC))
              {
                echo "<tr><td>";
                echo "<b>"."{$row['name']}"."</b></td><td>";
                echo "<b>"."{$row['lastname']}"."</b></td><td>";
                echo "<b>"."{$row['username']}"."</b></td><td>";
                echo "<b>"."{$row['gender']}"."</b></td><td>";  
                echo "<b>"."{$row['contact']}"."</b></td><td>";
                echo "<b>"."{$row['email']}"."</b></td><td>";
                echo "<b>"."{$row['bf']}"."</b></td><td>";
                echo "<b>"."{$row['currentaddress']}"."</b></td><td>";
              }
              $var="{$row['username']}";
              echo "</td></tr></table>";
               mysqli_close($connect); 
          ?>  
          <html>
          <body>
            <form action="fetch.php" method="POST">
            <input type="text" name="del" placeholder="username">
            <input type="submit" name="submit" value="delete">
            </form>
          </body>
          </html>
          
          <?php
            $connect=mysqli_connect('localhost','root','','Rajat');

            if(isset($_POST['submit']))
          {
              $remove=mysqli_real_escape_string($connect, $_POST['del']);
              if(!empty($remove))
            {
              $test=mysqli_query($connect,"DELETE FROM `faculty` WHERE username='$remove'") or die(mysqli_error($connect));
              if($test)
                  echo "Faculty Deleted";
              else
                  echo "Faculty is not deleted"; 
            }
              else
                  echo "Please Enter something";
          }

          ?>      