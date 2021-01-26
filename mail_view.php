<?php
include("dH.php");
?>

<?php
$mail=$_GET['mail'];
?>

<?php
$sql="SELECT * FROM contact WHERE ID='$mail'";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
       {
           $Name=$row['Name'];
           $Subject=$row['Subject'];
           $Message=$row['Message'];
           $E_mail=$row['E_mail'];
           $Waqaat=$row['Waqt'];        
       }
       ?>

<?php
$sql="SELECT * FROM sign_in WHERE User_id='$user'";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
       {
           $Name=$row['Name'];
       }
       ?>

<!--main content start-->
<section id="main-content">
      <section class="wrapper">
        <!-- page start-->
        <div class="row mt">
          <div class="col-sm-3">
            <section class="panel">
              <div class="panel-body">
                <a href="mail_compose.php?user=<?php echo $user; ?>" class="btn btn-compose" style="color: #FFFF;background-color:firebrick;border-color: firebrick;">
                  <i class="fa fa-pencil"></i>  Compose Mail
                  </a>
                <ul class="nav nav-pills nav-stacked mail-nav">
                  <li class="active"><a href="inbox.php?user=<?php echo $user; ?>"> <i class="fa fa-inbox"></i> Inbox  <span class="label label-theme pull-right inbox-notification">3</span></a></li>
                  <li><a href=""> <i class="fa fa-envelope-o"></i> Sent Mail</a></li>
                  <li><a href=""> <i class="fa fa-file-text-o"></i> Drafts <span class="label label-info pull-right inbox-notification" style="background-color:firebrick;">8</span></a></a>
                  </li>
                  <li><a href=""> <i class="fa fa-trash-o"></i> Trash</a></li>
                </ul>
              </div>
            </section>
            <section class="panel">
              <div class="panel-body">
                <ul class="nav nav-pills nav-stacked labels-info ">
                  <li>
                    <h4>Friends Online</h4>
                  </li>
                  <li>
                    <a href="">
                        <img src="Cropped-Pics/Usman.png" class="img-circle" width="20">Usman
                        <p><span class="label label-success">Available</span></p>
                      </a>
                  </li>
                  <li>
                    <a href="">
                        <img src="Cropped-Pics/Ubaid.png" class="img-circle" width="20">Umair
                        <p><span class="label label-danger"> Busy</span></p>
                      </a>
                  </li>
                  <li>
                    <a href="">
                        <img src="Cropped-Pics/Zubair.png" class="img-circle" width="20">Zubair
                        <p>Offline</p>
                      </a>
                  </li>
                  <li>
                    <a href="">
                        <img src="Cropped-Pics/Obaid.png" class="img-circle" width="20">Obaid
                        <p>Offline</p>
                      </a>
                  </li>
                  <li>
                    <a href="">
                        <img src="Cropped-Pics/Ahtisham.png" class="img-circle" width="20">Ahtisham
                        <p>Offline</p>
                      </a>
                  </li>
                </ul>
                <a href=""> + Add More</a>
                <div class="inbox-body text-center inbox-action">
                  <div class="btn-group">
                    <a class="btn mini btn-default" href="">
                      <i class="fa fa-power-off"></i>
                      </a>
                  </div>
                  <div class="btn-group">
                    <a class="btn mini btn-default" href="">
                      <i class="fa fa-cog"></i>
                      </a>
                  </div>
                </div>
              </div>
            </section>
          </div>
  


          <div class="col-sm-9">
            <section class="panel">
              <header class="panel-heading wht-bg">
                <h4 class="gen-case">
                    View Message
                    <form action="#" class="pull-right mail-src-position">
                      <div class="input-append">
                        <input type="text" class="form-control " placeholder="Search Mail">
                      </div>
                    </form>
                  </h4>
              </header>
              <div class="panel-body ">
                <div class="mail-header row">
                  <div class="col-md-8">
                    <h4 class="pull-left"><?php echo $Name; ?> [admin]</h4>
                  </div>
                  <div class="col-md-4">
                    <div class="compose-btn pull-right">
                      <a href="mail_compose.html" class="btn btn-sm btn-theme"><i class="fa fa-reply"></i> Reply</a>
                      <button class="btn  btn-sm tooltips" data-original-title="Print" type="button" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-print"></i> </button>
                      <button class="btn btn-sm tooltips" data-original-title="Trash" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-trash-o"></i></button>
                    </div>
                  </div>
                </div>
                <div class="mail-sender">
                  <div class="row">
                    <div class="col-md-8">
                      <strong><?php echo $Name; ?></strong>
                      <span>[<?php echo $E_mail; ?>]</span> to
                      <strong>me</strong>
                    </div>
                    <div class="col-md-4">
                      <p class="date"><?php echo $Waqaat; ?></p>
                    </div>
                  </div>
                </div>
                <div class="view-mail">
                <?php echo $Message; ?>
                </div>
                <div class="attachment-mail">
                  
                </div>
                <div class="compose-btn pull-left">
                  <a href="mail_compose.html" class="btn btn-sm btn-theme"><i class="fa fa-reply"></i> Reply</a>
                  <button class="btn btn-sm "><i class="fa fa-arrow-right"></i> Forward</button>
                  <button class="btn  btn-sm tooltips" data-original-title="Print" type="button" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-print"></i> </button>
                  <button class="btn btn-sm tooltips" data-original-title="Trash" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-trash-o"></i></button>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>



          <?php
include("dF.php");
?>
