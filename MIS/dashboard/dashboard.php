<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="../js/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    function udacity(){
                $.getJSON("https://www.udacity.com/public-api/v0/courses", function(data) {
                $.each(data.courses, function(count) {
                    //console.log(data.courses[count].title);
                    //console.log(data.courses[count].homepage);
                    
                });
                    var i;
                    for(i=0; i < data.courses.length; i++){
                        
                        if (/https:\/\/www\.udacity\.com\/course\/[cu][sd].*?/.test(data.courses[i].homepage)) {
                            //console.log(data.courses[i].title)
                            console.log("i="+i);     
                    document.getElementById("demo").innerHTML = document.getElementById("demo").innerHTML + "<b class='fa fa-check-circle'>"+data.courses[i].title+"</b>"+"<br>"+"<a href='data.courses[i].homepage'>"+data.courses[i].homepage+"</a>"+"<br>";
                 }
}
                //document.getElementById("demo").innerHTML = typeof(data.courses[count]);
            });
        };
        
    </script>


</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        	<?php include('../header.php'); ?>
        </nav>
        <div class="navbar-default sidebar" role="navigation" style="padding-top: 0px;">

             <div class="sidebar-nav navbar-collapse" style="margin-top: -30px;" >
            		<?php include('../nav.html'); ?>
           	</div>
            </div>
                <div class="row">
             
        <div class="col-md-8 col-md-offset-3">
           <div class="panel panel-default boxShadow" style="overflow:hidden;">
              <div class="panel-heading">
                 <h3 class="panel-title">News </h3>
                 <h3 class="panel-title pull-right" style="margin-top:-15px;">Activities </h3>

              </div>
              <div class="panel-body">
                  <div class="tab-content">
                     <div class="tab-pane active" id="news" >
                        <ul class="media-list">
                           <li class="media">
                              <div class="media-body"><br>
                              
                                    <div class="row">
                                        <!-- <div class="col-md-1">
                                          <img class="featurette-image img-responsive" src="data:image/png;base64," data-src="holder.js/60x60/auto" alt="Generic placeholder image">
                                        </div> -->
                                        <div class="col-md-7">
                                            <!-- <h5><a href="news#">IIPS Naac Visit complete on 15-Jan-2014  </a>  <span class="pull-right">Posted - 31st Dec 2013 </span></h5>-->
                                            
                                            <h5><a href="news#new_website"><i class="icon-info-sign"></i>  New mobile responsive IIPS website soon to be released </a><img src="images/new.gif" ></h5>
                                        28, 0j    <h5><a href="download"><i class="icon-info-sign"></i> Download your cousre presentations by subject teachers </a><img src="images/new.gif" ></h5>
                                            <h5><a href="news#invitation"><i class="icon-info-sign"></i> Invitation to 13th Case Writing Workshop: International Publication by Prestige Institute of MGMT-GWl.  </a><img src="images/new.gif" ></h5>   
                                            <h5><a href="news#seniority_list"> <i class="icon-info-sign"></i> UTD Teachers Seniority List (EFFECTIVE FROM 01.01.2014 TO 31.12.2014)</a><img src="images/new.gif" ></h5> 
                                            
                                        </div>

                                        <div class="col-md-5">
                                            <h5>Activities</h5>
                                            <!-- <h5><a href="news#">IIPS Naac Visit complete on 15-Jan-2014  </a>  <span class="pull-right">Posted - 31st Dec 2013 </span></h5>-->
                                            
                                            <h5><a href="news#naac_photos"><i class="icon-info-sign"></i> Naac Visit photos dated 16/01/14 </a><img src="images/new.gif" ></h5>
                                            <h5><a href="news#naac_photos1"><i class="icon-info-sign"></i> Naac Visit photos dated 15/01/14 </a><img src="images/new.gif" ></h5>
                                            <h5><a href="news#naac_visit"><i class="icon-info-sign"></i> IIPS Naac Visit complete on 15-Jan-2014 </a><img src="images/new.gif" ></h5>
                                            
                                        </div>


                                    </div><br><!-- end of row class -->
                                    
                                    <!-- 
                                    <div class="row">
                                     -->    <!-- <div class="col-md-1">
                                          <img class="featurette-image img-responsive" src="data:image/png;base64," data-src="holder.js/60x60/auto" alt="Generic placeholder image">
                                        </div> -->
                                        <!-- <div class="col-md-11">
                                            <h5>Students Preparing for Synergy 2014 Event <span class="text-muted"><a href="news#synergy">Click Here</a> for details</span><span class="postDate pull-right">Posted - 28th Dec 2013</span></h5> 
                                        </div>
                                    </div> --><!-- end of row class -->
                               </div>
                            </li>
                        </ul>
                      </div>
    
                      <div class="tab-pane" id="events">
                        <ul class="media-list">
                           <li class="media">
                              <a class="pull-left" href="#"> <img class="media-object" src="..." alt="..."> </a>
                              <div class="media-body">
                                 <br /><h4 class="media-heading">Expressions</h4>
                                     Expression Coming Soon
                              </div>
                            </li>
                          </ul>
                       </div>
                   </div><!--.tab-content -->
                </div><!--Panel body -->
            </div><!--End of Panel -->
        </div><!--End of col-md-12 -->
    </div>
        <!-- Page Content -->
        <div id="page-wrapper">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title" onclick="udacity()">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">1. See Udacity Courses</a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <p id="demo"></p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">2. See Coursera Courses</a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>Twitter Bootstrap is a powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="http://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Learn more.</a></p>
                    </div>
                </div>
            </div>
        </div>
 
            <div class="row">
                <div class="col-lg-12">
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
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

