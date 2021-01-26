<?php
    include("Php and Database Connection.php");
?>

<?php session_start();
      //Put session start at the beginning of the file
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>ByteIT - We Make IT Happen!</title>

  <!-- Favicons -->
  <link href="img/B_Icon.png" rel="icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
</head>

<body>
  
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="" method="post">
        <h2 class="form-login-heading">sign in now</h2>
        <div class="login-wrap">
          
          <input type="text" class="form-control" required="" name="User_id" placeholder="User ID" autofocus>
          <br>
          <input type="password" class="form-control" required="" name="Password" placeholder="Password">
          
          <label class="checkbox">
          <span>&nbsp &nbsp &nbsp &nbsp</span> <input type="checkbox" value="remember-me"> Remember me
            <span class="pull-right">
            <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
            </span>
            </label>
          <button class="btn btn-block" name="Sign_in" type="submit" style="color: #FFFF;background-color:firebrick;border-color: firebrick;"> SIGN IN</button>
          <hr>
          
          </div>
        </div>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
              </div>
              <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="button">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
      </form>
    </div>
  </div>
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

<?php
                      if(isset($_POST['Sign_in']))
                          {
                            $User_id=$_POST['User_id'];
                            $Password=$_POST['Password'];
                            $sql="SELECT * FROM sign_in WHERE User_id='$User_id' AND Password='$Password'";
                            $result=$conn->query($sql);
                            if($result->num_rows>0)
                                {
                                  $_SESSION['User_id']=$User_id;
                                  
                                  //Also Used to Redirect to Next Page:
                                  header("Location: dashboard.php?user=$User_id");
                                  
                                  //Also Used to Redirect to Next Page:
                                  // echo "<script>window.location = 'dashboard.php?user=$User_id'</script>";
                            }
                                    else
                                    {
                                      echo '<script language="javascript">';
                                      echo 'alert("Incorrect UserID or Password! Please Try Again Later!")';
                                      echo '</script>';
                                      exit;
                                    }
                                } 
                                
                           ?>

</body>

</html>
