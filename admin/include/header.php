<?php

require_once('../function.php');
connectdb();
session_start();

if (!is_user()) {
redirect('index.php');
}

$user = $_SESSION['username'];
$sid = $_SESSION['sid'];

$usid = mysql_fetch_array(mysql_query("SELECT id, sid FROM admin WHERE username='".$user."'"));
$uid = $usid[0];

if($sid!=$usid[1]){
redirect('signout.php');
}



include ('udel.php');

$gen = mysql_fetch_array(mysql_query("SELECT sitetitle FROM general_setting WHERE id='1'"));
 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title><?php echo $gen[0]; ?> Admin</title>

  <link href="css/style.default.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
  
