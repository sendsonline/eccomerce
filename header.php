<?php
session_start();
  include 'connection/connection.php';
    define('URL', '/eccomerce/');
    if(isset($_GET['product'])){
      $url = $_GET['product'];
    }
    else{
      $url='';
    }
    // $url = !isset($_GET['product'] ? $_GET['product'] : '');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ecommerce</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!--CSS-->
    <link rel="stylesheet" href="<?= URL ?>assets/css/bootstrap.css" >
    <link rel="stylesheet" href="<?= URL ?>assets/css/main.css" >
    <link rel="stylesheet" href="<?= URL ?>assets/css/custom.css" >
    <link rel="stylesheet" href="<?= URL ?>assets/css/style.css" >
    <link rel="stylesheet" href="<?= URL ?>assets/css/font-awesome.min.css" >

    <script type="text/javascript" src="<?= URL ?>assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?= URL ?>assets/js/jquery-ui.js"></script>
    <script type="text/javascript" src="<?= URL ?>assets/js/bootstrap.js"></script>
    <script type="text/javascript"  src="<?= URL ?>assets/js/custom.js"></script>
  </head>
  <body>
    <div class="outer-wrapper">

    <nav class="navbar navbar-default navbar-bg  navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= URL ?>">LavadaaaZ</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


      <ul class="nav navbar-nav navbar-right">
        <form class="navbar-form navbar-left searchForm">
          <div class="form-group">
            <input type="text" class="input-head" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-orange btn-xs">Search</button>
        </form>
       
        <?php
            $to = isset($_SESSION['cart']) ? count($_SESSION['cart']) : '0';
           
            ?>

             <li><a href="<?= URL ?>cart.php"> <span class="fa fa-cart-arrow-down cart"></span><span class="cart-badge"><?= $to ?></span></a></li>
              <li><a href="<?= URL ?>transaction.php" class=""> <span class="fa fa-gear orange"></span> Transactions </a></li>
<!--              <li><a href="--><?//= URL ?><!--function/logout.php" class=""> <span class="fa fa-sign-out orange"></span> Logout</a></li>-->
            <?php
            

            ?>
<!--             <li><a class="btn-logins"><span class="fa fa-sign-in orange"></span> Login</a></li>-->
<!--            <li><a class="btn-signups" href="#"><span class="fa fa-file-text-o orange "></span> Signup</a></li>-->


        
       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  <div class="row separator">
  <div class="container">
    <div class="row">
      <ul class="navbar-under">
        <li class="<?= $url==1 ? 'active-link' : '' ?>">
          <a href="<?= URL ?>?product=1">Powders</a>
        </li>
        <li class="<?= $url==2 ? 'active-link' : '' ?>"><a href="<?= URL ?>?product=2">Suspension</a></li>
        <li class="<?= $url==3 ? 'active-link' : '' ?>"><a href="<?= URL ?>?product=3">Sticks</a></li>
        <li class="<?= $url==4 ? 'active-link' : '' ?>"><a href="<?= URL ?>?product=4">Lotions</a></li>
      </ul>
    </div>
  </div>
</div>
</nav>
<div id="logins-modal" class="modal fade" role="dialog">
<div class="container">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <div class="modal-dialog margin-top100" style="width: 100%">
          <div class="modal-content" id="first-time-modal-content">
            <div class="modal-body" id="first-time-modal-body">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <div class="row">
                <div class="login-title">LOGIN</div>
              </div>
              <div class="login-content">
              <form method="post" action="function/login.php">
                  <input type="hidden" name="curent_page" value="<?= $url ?>">
                <label>Email Address:</label>
                <p><input type="email" name="email" class="input-form" required></p>
                <label>Password:</label>
                <p><input type="password" name="password" class="input-form" required></p>
                <p><button type="submit" name="login" class="btn btn-xs btn-cart"><span class="fa fa-sign-in"></span> Login</button></p>
                

              </form>
              <p class="text-center">or</p>
                <p><button type="button" class="btn btn-xs btn-cart btn-signup"><span class="fa fa-file-text-o"></span> Signup</button></p>
              
              </div>
              
            </div>
            <div class="modal-footer">
              <!-- <button type="button" class="btn-sm btn-blue" id="welcome-btn">Okay</button> -->
            </div>
          </div>
    <div id="welcome-loading" style="display:none">
    </div>
  </div>
    </div>
    <div class="col-sm-4"></div>
  </div>
</div>
</div>
<div id="signups-modal" class="modal fade" role="dialog">
<div class="container">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <div class="modal-dialog margin-top100" style="width: 100%">
          <div class="modal-content" id="first-time-modal-content">
            <div class="modal-body" id="first-time-modal-body">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <div class="row">
                <div class="login-title">SIGNUP</div>
              </div>
              <div class="login-content">
              <form method="post" action="<?= URL ?>function/signup.php">
              <input type="hidden" name="curent_page" value="<?= $url ?>">
              <label>Fullname:</label>
                <p><input type="text" class="input-form" name="name" required></p>
                <label>Email Address:</label>
                <p><input type="email" name="email" class="input-form" required></p>
                <label>Birthday:</label>
                <p><input type="date" name="bday" class="input-form" required></p>
                <label>Gender:</label>
                <p><select name="gender"  class="input-form" required>
                  <option>Male</option>
                  <option>Female</option>
                </select></p>
                <label>Address:</label>
                <p><input type="text" name="address" class="input-form" required></p>
                <label>Password:</label>
                <p><input type="password" name="password" class="input-form" required></p>
                
                <p><button type="submit" name="signup" class="btn btn-xs btn-cart"><span class="fa fa-file-text-o"></span> Signup</button></p>
              </form>
              </div>
              
            </div>
            <div class="modal-footer">
              <!-- <button type="button" class="btn-sm btn-blue" id="welcome-btn">Okay</button> -->
            </div>
          </div>
    <div id="welcome-loading" style="display:none">
    </div>
  </div>
    </div>
    <div class="col-sm-4"></div>
  </div>
</div>


</div>