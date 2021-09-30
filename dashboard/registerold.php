<?php
 
require_once('function.php');
connectdb();
session_start();

if (is_user()) {
	redirect('home.php');
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title>Sign UP</title>

  <link href="css/style.default.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="signin">


<section>
  
    <div class="signinpanel">
        
        <div class="row">
            
            <div class="col-md-2">
                
               
            </div><!-- col-sm-7 -->
            
            <div class="col-md-8">
                
                <form method="post" action="">
                    
                    <h3 class="nomargin">Sign Up</h3>
                    <p class="mt5 mb20">Already have an Account? <a href="index.php"><strong>Sign In</strong></a></p>
                
				
				
				 
<?php


if($_POST)
{

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$username = $_POST["username"];
$pass1 = $_POST["pass1"];
$pass2 = $_POST["pass2"];
$email = $_POST["email"];


if(trim($fname)=="")
      {
$err1=1;
}

if(trim($lname)=="")
      {
$err2=1;
}

if(trim($username)=="")
      {
$err3=1;
}

if(trim($email)=="")
      {
$err4=1;
}

if($pass1!=$pass2)
      {
$err5=1;
}

if(strlen($pass1)<="3")
      {
$err6=1;
}

$nnn = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM users WHERE username='".$username."'"));

if($nnn[0]>="1")
      {
$err7=1;
}

$eee = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM users WHERE email='".$email."'"));

if($eee[0]>="1")
      {
$err8=1;
}

if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
$err9=1;
}


$error = $err1+$err2+$err3+$err4+$err5+$err6+$err7+$err8+$err9;


if ($error == 0){

$passmd = md5($pass1);
$rtm = time();

$res = mysql_query("INSERT INTO users SET fname='".$fname."', lname='".$lname."', username='".$username."', email='".$email."', password='".$passmd."', regtm='".$rtm."'");

if($res){
	echo "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Registered Successfully! <br/> You can Sign in now..

</div>";
}else{
	echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Some Problem Occurs, Please Try Again. 

</div>";
}
} else {
	
if ($err1 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

First Name Can Not be Empty!!!

</div>";
}		
	
if ($err2 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Last Name Can Not be Empty!!!

</div>";
}		
	
if ($err3 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Username Can Not be Empty!!!

</div>";
}		
	
if ($err4 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Email Can Not be Empty!!!

</div>";
}		
	
if ($err5 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Passwords Don't match!!

</div>";
}		
	
if ($err6 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	
Password Can not be less than 4 Letter 
</div>";
}		
	
if ($err7 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	
Username Already Exist !
</div>";
}	
	
if ($err8 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	
Email Already Exist !
</div>";
}		
	
if ($err9 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	
Email is invalid !
</div>";
}		

}







}

?>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
                    <label class="control-label">Name</label>
                    <div class="row mb10">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="fname" placeholder="Firstname" />
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="lname" placeholder="Lastname" />
                        </div>
                    </div>
                    
                    <div class="mb10">
                        <label class="control-label">Username</label>
                        <input type="text" name="username" class="form-control" />
                    </div>
                    
                    <div class="mb10">
                        <label class="control-label">Password</label>
                        <input type="password" name="pass1" class="form-control" />
                    </div>
                    
                    <div class="mb10">
                        <label class="control-label">Retype Password</label>
                        <input type="password" name="pass2" class="form-control" />
                    </div>
                    
                    
                    <div class="mb10">
                        <label class="control-label">Email Address</label>
                        <input type="text" name="email" class="form-control" />
                    </div>

               
                    
                    <button class="btn btn-success btn-block">Sign Up</button>     
                </form>
            </div><!-- col-sm-6 -->
            
        </div><!-- row -->

		
    </div><!-- signin -->
  
		<div style="margin-top:60px;"></div>
</section>


<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/jquery.cookies.js"></script>

<script src="js/toggles.min.js"></script>
<script src="js/retina.min.js"></script>

<script src="js/custom.js"></script>
<script>
    jQuery(document).ready(function(){
        
        // Please do not use the code below
        // This is for demo purposes only
        var c = jQuery.cookie('change-skin');
        if (c && c == 'greyjoy') {
            jQuery('.btn-success').addClass('btn-orange').removeClass('btn-success');
        } else if(c && c == 'dodgerblue') {
            jQuery('.btn-success').addClass('btn-primary').removeClass('btn-success');
        } else if (c && c == 'katniss') {
            jQuery('.btn-success').addClass('btn-primary').removeClass('btn-success');
        }
    });
</script>

</body>
</html>



