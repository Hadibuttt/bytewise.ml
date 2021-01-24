<?php
include("dH.php");
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
                    Compose Mail
                    <form action="#" class="pull-right mail-src-position">
                      <div class="input-append">
                        <input type="text" class="form-control " placeholder="Search Mail">
                      </div>
                    </form>
                  </h4>
              </header>
              <div class="panel-body">
                <div class="compose-btn pull-right">
                  <button class="btn btn-theme btn-sm"><i class="fa fa-check"></i> Send</button>
                  <button class="btn btn-sm"><i class="fa fa-times"></i> Discard</button>
                  <button class="btn btn-sm">Draft</button>
                </div>
                <div class="compose-mail">
                  <form role="form-horizontal" method="post">
                    <div class="form-group">
                      <label for="to" class="">To:</label>
                      <input type="text" tabindex="1" id="to" class="form-control">
                      <div class="compose-options">
                        <a onclick="$(this).hide(); $('#cc').parent().removeClass('hidden'); $('#cc').focus();" href="javascript:;">Cc</a>
                        <a onclick="$(this).hide(); $('#bcc').parent().removeClass('hidden'); $('#bcc').focus();" href="javascript:;">Bcc</a>
                      </div>
                    </div>
                    <div class="form-group hidden">
                      <label for="cc" class="">Cc:</label>
                      <input type="text" tabindex="2" id="cc" class="form-control">
                    </div>
                    <div class="form-group hidden">
                      <label for="bcc" class="">Bcc:</label>
                      <input type="text" tabindex="2" id="bcc" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="subject" class="">Subject:</label>
                      <input type="text" tabindex="1" id="subject" class="form-control">
                    </div>
                    <div class="compose-editor">
                      <textarea class="wysihtml5 form-control" rows="9"></textarea>
                      <input type="file" class="default">
                    </div>
                    <div class="compose-btn">
                      <button class="btn btn-theme btn-sm"><i class="fa fa-check"></i> Send</button>
                      <button class="btn btn-sm"><i class="fa fa-times"></i> Discard</button>
                      <button class="btn btn-sm">Draft</button>
                    </div>
                  </form>
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