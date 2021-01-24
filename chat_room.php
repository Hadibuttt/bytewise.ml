<?php
include("dH.php");
?>

<?php
$user2=$_GET['user2'];
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
      <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="chat-room mt">
          <aside class="mid-side">
            <div class="chat-room-head" style="background-color:firebrick;">
              <h3>Chat Room</h3>
              <form action="#" class="pull-right position">
              <input type="text" placeholder="Search" class="form-control search-btn" style="color:#333;background-color:#ffff;">
              </form>
            </div>
            <div class="group-rom">
              <div class="first-part odd"><?php echo $Name; ?></div>
              <div class="second-part">Hello, do you have a minute?</div>
              <div class="third-part">12:30</div>
            </div>
            <div class="group-rom">
              <div class="first-part"><?php echo $user2; ?></div>
              <div class="second-part">Of course, what you need?</div>
              <div class="third-part">12:31</div>
            </div>
            <div class="group-rom">
              <div class="first-part odd"><?php echo $Name; ?></div>
              <div class="second-part">I want you examine my summer kit.</div>
              <div class="third-part">12:32</div>
            </div>
            <div class="group-rom">
              <div class="first-part"><?php echo $user2; ?></div>
              <div class="second-part">Ok, send me the picture</div>
              <div class="third-part">12:32</div>
            </div>
            <div class="group-rom">
              <div class="first-part odd"><?php echo $Name; ?></div>
              <div class="second-part">
                <p><img class="img-responsive" style="height:150px;" src="img/port06.jpg" alt=""></p>
              </div>
              <div class="third-part">12:32</div>
            </div>
            <div class="group-rom">
              <div class="first-part"><?php echo $user2; ?></div>
              <div class="second-part">Alluring, love it :)</div>
              <div class="third-part">12:32</div>
            </div>
            <div class="group-rom last-group">
              <div class="first-part odd"><?php echo $Name; ?></div>
              <div class="second-part">Thanks!!</div>
              <div class="third-part">12:33</div>
            </div>
            <footer>
              <div class="chat-txt">
                <input type="text" class="form-control">
              </div>
              <div class="btn-group hidden-sm hidden-xs">
                <button type="button" class="btn btn-white"><i class="fa fa-meh-o"></i></button>
                <button type="button" class="btn btn-white"><i class=" fa fa-paperclip"></i></button>
              </div>
              <button class="btn btn-theme">Send</button>
            </footer>
          </aside>
          <aside class="right-side" >
            <div class="user-head" style="background-color:firebrick;border-left: 1px solid firebrick;">
              <a href="" class="chat-tools btn-theme"><i class="fa fa-cog"></i> </a>
              <a href="" class="chat-tools btn-theme03"><i class="fa fa-key"></i> </a>
            </div>
            <div class="invite-row">
              <h4 class="pull-left">Team Members</h4>
              <a href="" class="btn btn-theme04 pull-right" style="color:#fff;background-color:firebrick;">+ Invite</a>
            </div>
            <ul class="chat-available-user">
            <li>
            <a href="chat_room.php?user=<?php echo $user; ?>&user2=Ubaid-ur-rehman" style="color:#333;">
              <img class="img-circle" src="Cropped-Pics/Ubaid.png" width="32">
              Ubaid-ur-Rehman
              </a>
          </li>
          <li>
            <a href="chat_room.php?user=<?php echo $user; ?>&user2=Hadi Butt" style="color:#333;">
              <img class="img-circle" src="Cropped-Pics/Hadi.png" width="32">
              Hadi Butt
              </a>
          </li>
          <li>
            <a href="chat_room.php?user=<?php echo $user; ?>&user2=Abdullah Durrani" style="color:#333;">
              <img class="img-circle" src="Cropped-Pics/Abdullah.png" width="32">
              Abdullah Durrani
              </a>
          </li>
          <li>
            <a href="chat_room.php?user=<?php echo $user; ?>&user2=Zubair Qureshi" style="color:#333;">
              <img class="img-circle" src="Cropped-Pics/Zubair.png" width="32">
              Zubair Qureshi
              </a>
          </li>
          <li>
            <a href="chat_room.php?user=<?php echo $user; ?>&user2=Obaid Khan" style="color:#333;">
              <img class="img-circle" src="Cropped-Pics/Obaid.png" width="32">
              Obaid Khan
              </a>
          </li>
            </ul>
          </aside>
        </div>
        <!-- page end-->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->




<?php
include("dF.php");
?>
