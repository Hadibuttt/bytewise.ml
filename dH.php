<?php
$user=$_GET['user'];
?>

<?php
include("Php and Database Connection.php");
?>

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
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles-->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

</head>

<body>
  <section id="container">

    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="dashboard.php?user=<?php echo $user; ?>" class="logo"><b>Byte<span>wise</span></b></a>
      <!--logo end-->
      
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="Sign_In.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    
    <?php
$sql="SELECT * FROM sign_in WHERE User_id='$user'";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
       {
           $Name=$row['Name'];
           $image=$row['image'];
       }
?>

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.php?user=<?php echo $user; ?>"><img src="<?php echo $image; ?>" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?php echo $Name; ?></h5>
          <li class="mt">
            <a class="active" href="dashboard.php?user=<?php echo $user; ?>">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="">
              <i class="fa fa-cogs"></i>
              <span>Edit Pages</span>
              </a>
            <ul class="sub">
              <li><a href="edit_main.php?user=<?php echo $user; ?>">Home</a></li>
              <li><a href="edit_products.php?user=<?php echo $user; ?>">Products</a></li>
              <li><a href="edit_about.php?user=<?php echo $user; ?>">About</a></li>
            </ul>
          </li>
          <li>
            <a href="inbox.php?user=<?php echo $user; ?>">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li>
          <li>
            <a href="lock_screen.php?user=<?php echo $user; ?>">
              <i class="fa fa-lock"></i>
              <span>Lock Screen</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
              </a>
            <ul class="sub">
              <li><a href="lobby.php?user=<?php echo $user; ?>">Lobby</a></li>
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->