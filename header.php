<?php
require_once('function.php');
connectdb();
session_start();
$gen = mysql_fetch_array(mysql_query("SELECT sitetitle, about, social, color, mobile, email FROM general_setting WHERE id='1'"));
$social = unserialize($gen[2]);
$about = unserialize($gen[1]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $gen[0];?></title>

    <link href="<?php echo $baseurl; ?>/asset/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $baseurl; ?>/asset/css/animate.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $baseurl; ?>/asset/css/hover.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $baseurl; ?>/asset/css/swiper.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $baseurl; ?>/asset/css/flexslider.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $baseurl; ?>/asset/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $baseurl; ?>/asset/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $baseurl; ?>/asset/css/responsive.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $baseurl; ?>/asset/css/colors.css" rel="stylesheet" type="text/css">
    <link rel=icon href="<?php echo $baseurl; ?>/icon.png" type="image/png">

</head>

<body class="<?php echo $gen[3]; ?>">
    <!--start Preloader -->
    <div id="loader-wrapper">
        <div id="loader">
            <div id="loading">
                <div id="loading-center">
                    <div id="loading-center-absolute">
                        <div class="object" id="object_one"></div>
                        <div class="object" id="object_two"></div>
                        <div class="object" id="object_three"></div>
                        <div class="object" id="object_four"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end Preloader -->

    <!-- start header section-->
    <header class="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="header-left">
                        <div class="contact-mathod">
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> Call us <?php echo $gen[4]; ?></li>
                                <li><i class="fa fa-envelope" aria-hidden="true"></i> Mail us <?php echo $gen[5]; ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-right">
                        <div class="social-icon">
                            <ul>
                                <?php 
                                    foreach ($social as $key => $value) {
                                ?>
                                    <li><a href="<?php echo $value; ?>"><i class="fa fa-<?php echo $key; ?>" aria-hidden="true"></i></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom menu-scroll">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <nav class="navbar navbar-default">
                            <div class="container">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                     </button>
                                    <a class="navbar-brand" href="<?php echo $baseurl; ?>">
                                        <img src="<?php echo $baseurl; ?>/logo.png" alt="logo">
                                    </a>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div id="navbar" class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav">
                                        <li><a href="<?php echo $baseurl; ?>">home</a></li>
                      <?php 
                      $ddaa = mysql_query("SELECT id, name FROM menus ORDER BY RAND() LIMIT 4");
                      while ($data = mysql_fetch_array($ddaa))
                      {
                      $uri = urlmod($data[1]);
                      ?>
                        <li>
                            <a href="<?php echo "$baseurl/menu/$data[0]/$uri"; ?>">
                                <?php echo $data[1];  ?>
                            </a>
                        </li>

                      <?php 
                      }
                      ?>
                      <li>
                          <a href="<?php echo $baseurl; ?>/dashboard/">LOGIN</a>
                      </li>
                      <li>
                          <a href="<?php echo $baseurl; ?>/dashboard/signup">REGISTER</a>
                      </li>
                      <li><a href="<?php echo $baseurl; ?>/contact.php">CONTACT</a></li>
                                    </ul>
                                </div>
                                <!-- /.navbar-collapse -->
                            </div>
                            <!-- /.container -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header section-->