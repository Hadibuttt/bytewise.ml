<?php
include("dH.php");
?>

<?php
$sql="SELECT * FROM sign_in WHERE User_id='$user'";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
       {
           $Name=$row['Name'];
           $image=$row['image'];
           $designation=$row['designation'];
           $bio=$row['About1'];
           $Email=$row['Email'];
           $Phone=$row['Phone'];
           $Cell=$row['Cell'];
           $Skype=$row['Skype'];
           $City=$row['City'];
           $Company=$row['Company'];
           $Country=$row['Country'];
           $Address=$row['Address'];
           $status=$row['status'];
       }
?>

    
    <!-- ************************************************ MAIN CONTENT ************************************************ -->
       
    <section id="main-content">
    <section class="wrapper site-min-height">
      <div class="row mt">
        <div class="col-lg-12">
          <div class="row content-panel">
            <div class="col-md-4 profile-text mt mb centered">
              <div class="right-divider hidden-sm hidden-xs">
                <h4 style="color: firebrick;">214</h4>
                <h6 style="color: #797979;">FOLLOWERS</h6>
                <h4 style="color: firebrick;">187</h4>
                <h6 style="color: #797979;">FOLLOWING</h6>
                <h4 style="color: firebrick;">$ 1212</h4>
                <h6 style="color: #797979;">MONTHLY EARNINGS</h6>
              </div>
            </div>
            <!-- /col-md-4 -->
            <div class="col-md-4 profile-text">
              <h3 style="font-weight: 700;
	color: firebrick;"><?php echo $Name; ?></h3>
              <h6 style="color: #797979;"><?php echo $designation; ?></h6>
              <p><?php echo $bio; ?></p>
              <br>
              <p><button class="btn btn-theme" style="color: #FFFF;background-color: firebrick;border-color: firebrick;"><i class="fa fa-envelope"></i> Send Message</button></p>
            </div>
            <!-- /col-md-4 -->
            <div class="col-md-4 centered">
              <div class="profile-pic">
                <p><img src="<?php echo $image; ?>" class="img-circle"></p>
                <p>
                  <button class="btn btn-theme" style="color: #FFFF;background-color: firebrick;border-color: firebrick;"><i class="fa fa-check"></i> Following</button>
                  
                </p>
              </div>
            </div>
            <!-- /col-md-4 -->
          </div>
          <!-- /row -->
        </div>
        <!-- /col-lg-12 -->
        <div class="col-lg-12 mt">
          <div class="row content-panel">
            <div class="panel-heading">
              <ul class="nav nav-tabs nav-justified"  style="background-color:#e0e1e7;">
                <li class="active">
                  <a data-toggle="tab" href="#overview" style="color:#555;">Overview</a>
                </li>
                <li>
                  <a data-toggle="tab" href="#contact" class="contact-map" style="color:#555;">Contact</a>
                </li>
                <li>
                  <a data-toggle="tab" href="#edit" style="color:#555;">Edit Profile</a>
                </li>
              </ul>
            </div>
            <!-- /panel-heading -->
            <div class="panel-body">
              <div class="tab-content">
                <div id="overview" class="tab-pane active" style="background-color:#ffff;color:#555;">
                  <div class="row">
                    <div class="col-md-6">
    <form action="" method="POST" enctype="multipart/form-data "> 
                      <textarea rows="3" name="3" class="form-control" placeholder="Whats on your mind?"></textarea>
                      <div class="grey-style"  style="background-color:#f2f4f6;color:#ffff;">
                        <div class="pull-left">
                          <button class="btn btn-sm btn-theme" style="background-color: firebrick;color:#ffff;"><i class="fa fa-camera"></i></button>
                          <button class="btn btn-sm btn-theme" style="background-color: firebrick;color:#ffff;"><i class="fa fa-map-marker"></i></button>
                        </div>
                        <div class="pull-right">
                          <button style="background-color: firebrick; border-color: firebrick;color:#ffff;" class="btn btn-sm btn-theme03" name="BTN7">POST</button>
    </form>
    <?php 
    if(isset($_POST['BTN7']))
    {
        $recent= $_POST['3'];
        $sql1="UPDATE sign_in SET status='$recent' WHERE User_id='$user'";
        if($conn->query($sql1)===TRUE)
            {
                
            }
    
            else
            {
                
            }
    }
    ?>
                        </div>
                      </div>
                      <div class="detailed mt">
                        <h4 style="color: firebrick;">Recent Activity</h4>
                        <div class="recent-activity">
                          <div class="activity-icon bg-theme" style="background-color: firebrick;color:#ffff;"><i class="fa fa-check"></i></div>
                          <div class="activity-panel" style="background-color:#f2f2f2;">
                            <h5>Recent News</h5>
                            <p><?php echo $status; ?></p>
                          </div>
                          <div class="activity-icon" style="background-color: firebrick;color:#ffff;"><i class="fa fa-trophy"></i></div>
                          <div class="activity-panel" style="background-color:#f2f2f2;">
                            <h5>5 HOURS AGO</h5>
                            <p>Task Completed. Resolved issue with Disk Space.</p>
                          </div>
                          <div class="activity-icon" style="background-color: firebrick;color:#ffff;"><i class="fa fa-rocket"></i></div>
                          <div class="activity-panel" style="background-color:#f2f2f2;">
                            <h5>3 DAYS AGO</h5>
                            <p>Launched a new product: Bytewise Dashboard.</p>
                          </div>
                        </div>
                        <!-- /recent-activity -->
                      </div>
                      <!-- /detailed -->
                    </div>
                    <!-- /col-md-6 -->
                    <div class="col-md-6 detailed">
                      <h4 style="color: firebrick;">User Stats</h4>
                      <div class="row centered mt mb">
                        <div class="col-sm-4">
                          <h1><i class="fa fa-money"></i></h1>
                          <h3>$2,980</h3>
                          <h6>LIFETIME EARNINGS</h6>
                        </div>
                        <div class="col-sm-4">
                          <h1><i class="fa fa-trophy"></i></h1>
                          <h3>18</h3>
                          <h6>COMPLETED TASKS</h6>
                        </div>
                        <div class="col-sm-4">
                          <h1><i class="fa fa-shopping-cart"></i></h1>
                          <h3>69</h3>
                          <h6>ITEMS SOLD</h6>
                        </div>
                      </div>
                      <!-- /row -->
                      <h4 style="color: firebrick;">My Friends</h4>
                      <div class="row centered mb">
                        <ul class="my-friends">
                          <li>
                            <div class="friends-pic"><img class="img-circle" width="35" height="35" src="Cropped-Pics/Usman.png"></div>
                          </li>
                          <li>
                            <div class="friends-pic"><img class="img-circle" width="35" height="35" src="Cropped-Pics/Abdullah.png"></div>
                          </li>
                          <li>
                            <div class="friends-pic"><img class="img-circle" width="35" height="35" src="Cropped-Pics/Ubaid.png"></div>
                          </li>
                          <li>
                            <div class="friends-pic"><img class="img-circle" width="35" height="35" src="Cropped-Pics/Obaid.png"></div>
                          </li>
                          <li>
                            <div class="friends-pic"><img class="img-circle" width="35" height="35" src="Cropped-Pics/Zubair.png"></div>
                          </li>
                          <li>
                            <div class="friends-pic"><img class="img-circle" width="35" height="35" src="Cropped-Pics/Ahtisham.png"></div>
                          </li>
                          <li>
                            <div class="friends-pic"><img class="img-circle" width="35" height="35" src="Cropped-Pics/Hadi.png"></div>
                          </li>
                          
                        <li>
                            <div class="friends-pic"><img class="img-circle" width="35" height="35" src="Cropped-Pics/Abdullah.png"></div>
                          </li>
                          <li>
                            <div class="friends-pic"><img class="img-circle" width="35" height="35" src="Cropped-Pics/Ubaid.png"></div>
                          </li>
                          <li>
                            <div class="friends-pic"><img class="img-circle" width="35" height="35" src="Cropped-Pics/Obaid.png"></div>
                          </li>
                          <li>
                            <div class="friends-pic"><img class="img-circle" width="35" height="35" src="Cropped-Pics/Zubair.png"></div>
                          </li>
                          <li>
                            <div class="friends-pic"><img class="img-circle" width="35" height="35" src="Cropped-Pics/Ahtisham.png"></div>
                          </li>

                        </ul>
                        <div class="row mt">
                          <div class="col-md-4 col-md-offset-4">
                            <h6><a href="">VIEW ALL</a></h6>
                          </div>
                        </div>
                      </div>
                      <!-- /row -->
                      <h4 style="color: firebrick;">Pending Tasks</h4>
                      <div class="row centered">
                        <div class="col-md-8 col-md-offset-2">
                          <h5>Dashboard Update (40%)</h5>
                          <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="background-color:firebrick;width:40%;">
                              <span class="sr-only">40% Complete (success)</span>
                            </div>
                          </div>
                          <h5>Unanswered Messages (80%)</h5>
                          <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="background-color:firebrick;width:80%;">
                              <span class="sr-only">80% Complete (success)</span>
                            </div>
                          </div>
                          <h5>Product Review (60%)</h5>
                          <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="background-color:firebrick;width:60%;">
                              <span class="sr-only">60% Complete (success)</span>
                            </div>
                          </div>
                          <h5>Friend Requests (90%)</h5>
                          <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="background-color:firebrick;width:90%;">
                              <span class="sr-only">90% Complete (success)</span>
                            </div>
                          </div>
                        </div>
                        <!-- /col-md-8 -->
                      </div>
                      <!-- /row -->
                    </div>
                    <!-- /col-md-6 -->
                  </div>
                  <!-- /OVERVIEW -->
                </div>
                <!-- /tab-pane -->
                <div id="contact" class="tab-pane">
                  <div class="row">
                    <div class="col-md-6">
                      <div id="map">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1459734.5702753505!2d16.91089086619977!3d48.577103681657675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssk!2ssk!4v1457640551761" width="100%" height="450" frameborder="0" style="border:0"></iframe>
                      </div>
                    </div>
                    <!-- /col-md-6 -->
                    <div class="col-md-6 detailed">
                      <h4 style="color: firebrick;">Location</h4>
                      <div class="col-md-8 col-md-offset-2 mt">
                        <p>
                          Postal Address<br/> <?php echo $Address; ?><br/> <?php echo $City; ?>, <?php echo $Country; ?>.
                        </p>
                        <br>
                        <p>
                          Headquarters<br/> <?php echo $Company; ?><br/> 9003, <?php echo $Country; ?>.
                        </p>
                      </div>
                      <h4 style="color: firebrick;">Contacts</h4>
                      <div class="col-md-8 col-md-offset-2 mt">
                        <p>
                          Phone: <?php echo $Phone; ?><br/> Cell: <?php echo $Cell; ?><br/>
                        </p>
                        <br>
                        <p>
                          Email: <?php echo $Email; ?><br/> Skype: <?php echo $Skype; ?><br/> Website: http://bytewise.ml
                        </p>
                      </div>
                    </div>
                    <!-- /col-md-6 -->
                  </div>
                  <!-- /row -->
                </div>
                <!-- /tab-pane -->
                <div id="edit" class="tab-pane">
                  <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 detailed">
                      <h4 style="color: firebrick;">Personal Information</h4>
                      <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                          
                          <div class="col-lg-6">
                            
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Company</label>
                          <div class="col-lg-6">
                            <input type="text" name="1" value="<?php echo $Company; ?>" id="c-name" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">City</label>
                          <div class="col-lg-6">
                            <input type="text" name="2" value="<?php echo $City; ?>" id="lives-in" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Country</label>
                          <div class="col-lg-6">
                            <input type="text" name="3" value="<?php echo $Country; ?>" id="country" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Description</label>
                          <div class="col-lg-10">
                          <input type="text" name="4" value="<?php echo $bio; ?>" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-theme" style="color: #FFFF;background-color: firebrick;border-color: firebrick;" name="btnF" type="submit">Save</button>
                          </div>
                        </div>
                      </form>
                    </div>

<?php
if(isset($_POST['btnF']))
{
    $Company= $_POST['1'];
    $City= $_POST['2'];
    $Country= $_POST['3'];
    $b_1= $_POST['4'];

    $sql1="UPDATE sign_in SET Company='$Company',City='$City',Country='$Country',About1='$b_1' WHERE User_id='$user'";
    if($conn->query($sql1)===TRUE)
        {
            echo "DATA EDITED SUCCESSFULLY";
        }

        else
        {
            echo "DATA EDITED SUCCESSFULLY";
        }
}
?>

                    <div class="col-lg-8 col-lg-offset-2 detailed mt">
                      <h4 style="color: firebrick;">Contact Information</h4>
                      <form role="form" method="post" class="form-horizontal ">
                        <div class="form-group">
                          
                          <div class="col-lg-6">
                           
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Address</label>
                          <div class="col-lg-6">
                            <input name="5" type="text" value="<?php echo $Address; ?>" id="addr2" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Phone</label>
                          <div class="col-lg-6">
                            <input type="text" name="6" value="<?php echo $Phone; ?>" id="phone" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Cell</label>
                          <div class="col-lg-6">
                            <input type="text" name="7" value="<?php echo $Cell; ?>" id="cell" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Email</label>
                          <div class="col-lg-6">
                            <input type="text" name="8" value="<?php echo $Email; ?>" id="email" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Skype</label>
                          <div class="col-lg-6">
                            <input type="text" name="9" value="<?php echo $Skype; ?>" id="skype" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-theme" style="color: #FFFF;background-color: firebrick;border-color: firebrick;" name="btnG" type="submit">Save</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /col-lg-8 -->
                  </div>
                  <!-- /row -->
                </div>
                <!-- /tab-pane -->
              </div>
              <!-- /tab-content -->
            </div>
            <!-- /panel-body -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </section>
    <!-- /wrapper -->
  </section>
  <!-- /MAIN CONTENT -->
  <!--main content end-->

  <?php
if(isset($_POST['btnG']))
{
    $Address= $_POST['5'];
    $Phone= $_POST['6'];
    $Cell= $_POST['7'];
    $Email= $_POST['8'];
    $Skype= $_POST['9'];
    
    $sql1="UPDATE sign_in SET Address='$Address',Phone='$Phone',Cell='$Cell',Email='$Email',Skype='$Skype' WHERE User_id='$user'";
    if($conn->query($sql1)===TRUE)
        {
            echo "DATA EDITED SUCCESSFULLY";
        }

        else
        {
            echo "DATA EDITED SUCCESSFULLY";
        }
}
?>

<?php
include("dF.php");
?>

