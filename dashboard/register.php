<?php
require_once('../function.php');
connectdb();
session_start();


if (is_user()) {
redirect("$dashurl/home");
}

$gen = mysql_fetch_array(mysql_query("SELECT sitetitle FROM general_setting WHERE id='1'"));
?>



<!DOCTYPE html>
<html lang="en">
<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Join Now | <?php echo $gen[0]; ?></title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
<style>

.pass {
width: 100%;
height: 50px;
}
</style>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head>

    <body>

		<!-- Top menu -->
		
        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong><a href="<?php echo $baseurl; ?>"><?php echo $gen[0]; ?></a></strong>  Registration</h1>
                            <div class="description">
                            	<p>
	                            	Already Have an account? You Can <a href="<?php echo $dashurl; ?>"><strong>LOGIN </strong></a> Here
									
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6 col-md-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Sign Up</h3>
                            		<p>Fill in the form below to get instant access:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-edit"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    
								
								               		
										 
<?php


if($_POST)
{

$fname = mysql_real_escape_string($_POST["fname"]);
$lname = mysql_real_escape_string($_POST["lname"]);
$username = mysql_real_escape_string($_POST["username"]);
$pass1 = mysql_real_escape_string($_POST["pass1"]);
$pass2 = mysql_real_escape_string($_POST["pass2"]);
$email = mysql_real_escape_string($_POST["email"]);
$phone = mysql_real_escape_string($_POST["phone"]);


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

if(trim($fname)=="")
      {
$err10=1;
}


$error = $err1+$err2+$err3+$err4+$err5+$err6+$err7+$err8+$err9+$err10;


if ($error == 0){

$passmd = md5($pass1);
$rtm = time();

$res = mysql_query("INSERT INTO users SET fname='".$fname."', lname='".$lname."', username='".$username."', email='".$email."', password='".$passmd."', phone='".$phone."', regtm='".$rtm."'");

if($res){
	echo "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Registered Successfully! <br/> You can Sign in now..
<meta http-equiv=\"refresh\" content=\"3; url=index.php\" />
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
	
if ($err10 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Phone Number Can Not be Empty!!!

</div>";
}		

}







}

?>
				
				
				
				
				
				
				
				
			
								
								
<form role="form" action="register.php" method="post" class="registration-form">
								
<div class="form-group">
<input type="text" name="fname" placeholder="First Name" class="form-first-name form-control">
</div>								

<div class="form-group">
<input type="text" name="lname" placeholder="Last Name" class="form-last-name form-control">
</div>

<div class="form-group">
<input type="text" name="username" placeholder="Username" class="form-user-name form-control">
</div>

<div class="form-group">
<input type="password" name="pass1" placeholder="Password" class="pass form-control">
</div>

<div class="form-group">
<input type="password" name="pass2" placeholder="Retype Password" class="pass form-control">
</div>

<div class="form-group">
<input type="text" name="email" placeholder="email" class="form-email form-control">
</div>

<div class="form-group">
<input type="text" name="phone" placeholder="Phone Number" class="form-phone form-control">
</div>

			                        <button type="submit" class="btn"> Submit</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>
</html>
