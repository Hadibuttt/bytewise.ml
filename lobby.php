<?php
include("dH.php");
?>

<?php
$sql="SELECT * FROM sign_in WHERE User_id='$user'";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
       {
           $Name=$row['Name'];
       }
?>

<?php
$sql="SELECT * FROM sign_in order by ID DESC LIMIT 1";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
       {
           $ID=$row['ID'];
       }
       ?>

<!--main content start-->
<section id="main-content">
      <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="chat-room mt">
          <aside class="mid-side">
            <div class="chat-room-head" style="background-color:firebrick;">
              <h3>Lobby Room</h3>
              <form action="#" class="pull-right position">
                <input type="text" placeholder="Search" class="form-control search-btn" style="color:#333;background-color:#ffff;">
              </form>
            </div>
            <div class="room-desk">
              <h4 class="pull-left">Open Room</h4>
              <a href="" class="pull-right btn" style="color:#333;">+ Create Room</a>
              <div class="room-box">
                <h5 class="text-primary"><a href="chat_room.html" style="color:firebrick;">Dashboard</a></h5>
                <p>We talk here about our dashboard.</p>
                <p><span class="text-muted">Admin :</span> <?php echo $Name; ?> | <span class="text-muted">Members :</span> <?php echo $ID; ?> | <span class="text-muted">Last Activity :</span> 2 min ago</p>
              </div>
              <div class="room-box">
                <h5 class="text-primary"><a href="chat_room.html" style="color:firebrick;">Edit Pages</a></h5>
                <p>Edit Pages for Bytewise.</p>
                <p><span class="text-muted">Admin :</span> <?php echo $Name; ?> | <span class="text-muted">Member :</span> <?php echo $ID; ?> | <span class="text-muted">Last Activity :</span> 15 min ago</p>
              </div>
              <div class="room-box">
                <h5 class="text-primary"><a href="chat_room.html" style="color:firebrick;">Mails</a></h5>
                <p>Mails sent by clients.</p>
                <p><span class="text-muted">Admin :</span> <?php echo $Name; ?> | <span class="text-muted">Member :</span> <?php echo $ID; ?> | <span class="text-muted">Last Activity :</span> 15 min ago</p>
              </div>
            </div>
            <div class="room-desk">
              <h4 class="pull-left">private room</h4>
              <div class="room-box">
                <h5 class="text-primary"><a href="chat_room.html" style="color:firebrick;">Team Bytewise</a></h5>
                <p>Private chat regarding our team work.</p>
                <p><span class="text-muted">Admin :</span> <?php echo $Name; ?> | <span class="text-muted">Member :</span> <?php echo $ID; ?> | <span class="text-muted">Last Activity :</span> 15 min ago</p>
              </div>
              <div class="room-box">
                <h5 class="text-primary"><a href="chat_room.html" style="color:firebrick;">Khobcha</a></h5>
                <p>Private chat regarding current memes & Affairs.</p>
                <p><span class="text-muted">Admin :</span> <?php echo $Name; ?> | <span class="text-muted">Member :</span> <?php echo $ID; ?> | <span class="text-muted">Last Activity :</span> 15 min ago</p>
              </div>
            </div>
          </aside>
          <aside class="right-side">
            <div class="user-head" style="background-color:firebrick;border-left: 1px solid firebrick;">
              <a href="" class="chat-tools btn-theme"><i class="fa fa-cog"></i> </a>
              <a href="" class="chat-tools btn-theme03"><i class="fa fa-key"></i> </a>
            </div>
            <div class="invite-row">
              <h4 class="pull-left" style="color:#333;">Team Members</h4>
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