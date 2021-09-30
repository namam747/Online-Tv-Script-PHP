<?php
require_once('../function.php');

connectdb();
session_start();

if (!is_user()) {
redirect("$dashurl/signin");
}



$user = $_SESSION['username'];
$sid = $_SESSION['sid'];

$userdetails = mysql_fetch_array(mysql_query("SELECT id, sid FROM users WHERE username='".$user."'"));
$uid = $userdetails[0];
$mallu = $userdetails[2];
$ufnm = $userdetails[1];

if($sid!=$userdetails[1]){
redirect("$dashurl/signout");
}



$gen = mysql_fetch_array(mysql_query("SELECT sitetitle FROM general_setting WHERE id='1'"));

?>


<!doctype html>
<html lang="en">
<head>
<title><?php echo $gen[0]; ?></title>
<meta charset="utf-8">
<!-- Meta -->
<meta name="keywords" content="" />
<meta name="author" content="">
<meta name="robots" content="" />
<meta name="description" content="" />

<!-- this styles only adds some repairs on idevices  -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo $baseurl; ?>/asset/images/favicon.ico">

<!-- Google fonts - witch you want to use - (rest you can just remove) -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- stylesheets -->
<link rel="stylesheet" media="screen" href="<?php echo $baseurl; ?>/asset/js/bootstrap/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $baseurl; ?>/asset/js/mainmenu/menu.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $baseurl; ?>/asset/css/default.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $baseurl; ?>/asset/css/layouts.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $baseurl; ?>/asset/css/shortcodes.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $baseurl; ?>/asset/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" media="<?php echo $baseurl; ?>/asset/screen" href="css/responsive-leyouts.css" type="text/css" />
<link rel="stylesheet" type="<?php echo $baseurl; ?>/asset/text/css" href="css/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
<link rel="stylesheet" href="<?php echo $baseurl; ?>/asset/css/et-line-font/et-line-font.css">
<link rel="stylesheet" href="<?php echo $baseurl; ?>/asset/js/custom-scrollbar/jquery.mCustomScrollbar.css">


<link rel="stylesheet" type="text/css" href="<?php echo $baseurl; ?>/asset/js/smart-forms/smart-forms.css">

  

<style>
  
table {
   border: 1px solid #ddd;
    width: 95%;
} 

.btn{
    border-radius: 6px;
}


#abir {

  min-height: 800px;
}
</style>

