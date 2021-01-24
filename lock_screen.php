<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <title>ByteIT - We Make IT Happen!</title>
  <!-- Favicons -->
  <link href="img/B_icon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  
  
<body onload="getTime()">

<?php
include("Php and Database Connection.php");
?>

<?php
$user=$_GET['user'];
?>

<?php
$sql="SELECT * FROM sign_in WHERE User_id='$user'";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
       {
           $image=$row['image'];
       }
?>

  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div class="container">
    <div id="showtime"></div>
    <div class="col-lg-4 col-lg-offset-4">
      <div class="lock-screen">
        <h2><a data-toggle="modal" href="#myModal" style="color:#ffff"><i class="fa fa-lock"></i></a></h2>
        <p>UNLOCK</p>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Welcome Back</h4>
              </div>
              <div class="modal-body">
                  <form action="" method="post">
                <p class="centered"><img class="img-circle" width="80" src="<?php echo $image; ?>"></p>
                <input type="password" name="password" placeholder="Password" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer centered">
                <button data-dismiss="modal" class="btn btn-theme04" type="button" style="color:#fff;background-color:#ed5565;border-color:#da4453;">Cancel</button>
                <button class="btn btn-theme03" name="btn66" type="submit" style="color:#fff;background-color:#48cfad;border-color: #37bc9b;">Login</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
      </div>
      <!-- /lock-screen -->
    </div>
    <!-- /col-lg-4 -->
  </div>
  <!-- /container -->

  <?php
                      if(isset($_POST['btn66']))
                          {
                            $Password=$_POST['password'];
                            $sql="SELECT * FROM sign_in WHERE User_id='$user' AND Password='$Password'";
                            $result=$conn->query($sql);
                            if($result->num_rows>0)
                                {
                                  
                                  //Also Used to Redirect to Next Page:
                                  header("Location: dashboard.php?user=$user");
                                  
                                  //Also Used to Redirect to Next Page:
                                  // echo "<script>window.location = 'dashboard.php?user=$User_id'</script>";
                            }
                                    else
                                    {
                                      header("Location: lock_screen.php?user=$user");
                                    }
                                } 
                                
                           ?>

  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/B_Sign.jpg", {
      speed: 500
    });
  </script>
  <script>
    function getTime() {
      var today = new Date();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      // add a zero in front of numbers<10
      m = checkTime(m);
      s = checkTime(s);
      document.getElementById('showtime').innerHTML = h + ":" + m + ":" + s;
      t = setTimeout(function() {
        getTime()
      }, 500);
    }

    function checkTime(i) {
      if (i < 10) {
        i = "0" + i;
      }
      return i;
    }
  </script>
</body>

</html>
