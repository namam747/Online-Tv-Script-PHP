<?php
include ('include/header.php');
?>
</head>

	<body>
<?php
include ('include/menu.php');
?>

		<!-- begin Content -->
		<section>
		<div style="margin-top:60px;"></div>
			

			<article class="features" id="menu_features">
			<div class="container">
					
				<div class="row">
				<div class="col-md-12">
<h2 class="animated" data-animation="fadeInUp" data-animation-delay="200" style="text-align:center;">Edit Profile</h2>
				</div>
				</div>

		<div style="margin-top:60px;"></div>
									
				<div class="row">

<?php
include ('accwarn.php');
?>

				<div class="col-md-6 col-md-offset-3">
		<?php

if($_POST)
{

$fnm = mysql_real_escape_string($_POST["fnm"]);
$lnm = mysql_real_escape_string($_POST["lnm"]);
$email = mysql_real_escape_string($_POST["email"]);
$phone = mysql_real_escape_string($_POST["phone"]);



///////////////////////-------------------->> names ki faka??

if(trim($fnm)=="")
      {
$err1=1;
}

if(trim($lnm)=="")
      {
$err2=1;
}

///////////////////////-------------------->> EMAIL OK??

if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
$err3=1;
}

$count = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM users WHERE email='".$email."' AND id<>'".$uid."'"));
if($count[0]>=1)
      {
$err4=1;
}


if(trim($phone)=="")
      {
$err5=1;
}


$error = $err1+$err2+$err3+$err4+$err5;


if ($error == 0){
$res = mysql_query("UPDATE users SET fname='".$fnm."', lname='".$lnm."', email='".$email."', phone='".$phone."' WHERE id='".$uid."'");
if($res){
	echo "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Profile Updated Successfully!

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

First Name Can Not Be Empty!!!

</div>";
}		
if ($err2 == 1){
	echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Last Name Can Not Be Empty!!!

</div>";

}		

if ($err3 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Email is Invalid!!

</div>";
}		

if ($err4 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Email already used!!

</div>";
}
if ($err5 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Phone Number Can Not Be Empty!!!

</div>";
}		
}


} 

$old = mysql_fetch_array(mysql_query("SELECT fname, lname, email, phone, username FROM users WHERE id='".$uid."'"));

?>


				<form action="" method="post">
		
		

<div class="form-group">
<label class="control-label">Usernaame</label>
<input type="text" name="fnm" value="<?php echo $old[4];?>" class="form-control input-lg" disabled="" />
</div>

<div class="form-group">
<label class="control-label">First Name</label>
<input type="text" name="fnm" value="<?php echo $old[0];?>" class="form-control input-lg" />
</div>

<div class="form-group">
<label class="control-label">Last Name</label>
<input type="text" name="lnm" value="<?php echo $old[1];?>" class="form-control input-lg" />
</div>

<div class="form-group">
<label class="control-label">Email</label>
<input type="text" name="email" value="<?php echo $old[2];?>" class="form-control input-lg" />
</div>
						
	
<div class="form-group">
<label class="control-label">Phone</label>
<input type="text" name="phone" value="<?php echo $old[3];?>" class="form-control input-lg" />
</div>
						
						
						
					<input type="submit" class="btn btn-lg btn-success btn-block" value="Update">
				</form>
                </div>
				
					
				</div>
				</div>
			</article>

			

		</section>
		<!-- end Content -->

<?php
include ('include/footer.php');
?>