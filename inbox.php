<?php
include("dH.php");
?>

<?php
$sql="SELECT * FROM contact order by ID DESC LIMIT 1";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
       {
           $ID=$row['ID'];
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
                        <img src="Cropped-Pics/Ubaid.png" class="img-circle" width="20">Ubaid
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
                    Inbox (3)
                    <form action="#" class="pull-right mail-src-position">
                      <div class="input-append">
                        <input type="text" class="form-control " placeholder="Search Mail">
                      </div>
                    </form>
                  </h4>
              </header>
              <div class="panel-body minimal">
                <div class="mail-option">
                  <div class="chk-all">
                    <div class="pull-left mail-checkbox">
                      <input type="checkbox" class="">
                    </div>
                    <div class="btn-group">
                      <a data-toggle="dropdown" href="#" class="btn mini all">
                        All
                        <i class="fa fa-angle-down "></i>
                        </a>
                      <ul class="dropdown-menu">
                        <li><a href="#"> None</a></li>
                        <li><a href="#"> Read</a></li>
                        <li><a href="#"> Unread</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="btn-group">
                    <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                      <i class=" fa fa-refresh"></i>
                      </a>
                  </div>
                  <div class="btn-group hidden-phone">
                    <a data-toggle="dropdown" href="#" class="btn mini blue">
                      More
                      <i class="fa fa-angle-down "></i>
                      </a>
                    <ul class="dropdown-menu">
                      <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                      <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                      <li class="divider"></li>
                      <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <a data-toggle="dropdown" href="#" class="btn mini blue">
                      Move to
                      <i class="fa fa-angle-down "></i>
                      </a>
                    <ul class="dropdown-menu">
                      <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                      <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                      <li class="divider"></li>
                      <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                    </ul>
                  </div>
                  <ul class="unstyled inbox-pagination">
                    <li><span>1-<?php echo $ID; ?> of <?php echo $ID; ?></span></li>
                    <li>
                      <a class="np-btn" href=""><i class="fa fa-angle-left  pagination-left"></i></a>
                    </li>
                    <li>
                      <a class="np-btn" href=""><i class="fa fa-angle-right pagination-right"></i></a>
                    </li>
                  </ul>
                </div>

<?php
$sql="SELECT * FROM contact order by ID DESC";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
       {
           $ID=$row['ID'];
           $Name=$row['Name'];
           $Subject=$row['Subject'];
           $Waqaat=$row['Waqt'];
       ?>
                <div class="table-inbox-wrap ">
                  <table class="table table-inbox table-hover">
                    <tbody>
                      <tr class="unread">
                        <td class="inbox-small-cells">
                          <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                        <td class="view-message  dont-show"><a href="mail_view.php?user=<?php echo $user; ?>&mail=<?php echo $ID; ?>"><?php echo $Name; ?></a></td>
                        <td class="view-message "><a href="mail_view.php?user=<?php echo $user; ?>&mail=<?php echo $ID; ?>"><?php echo $Subject; ?>.</a></td>
                        <td class="view-message  inbox-small-cells"></td>
                        <td class="view-message  text-right"><?php echo $Waqaat; ?></td>
                        <?php } ?>   
                    </tr>
                                        
                    </tbody>
                  </table>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->

<?php
include("dF.php");
?>