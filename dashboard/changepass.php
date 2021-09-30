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
<h2 class="animated" data-animation="fadeInUp" data-animation-delay="200" style="text-align:center;">Change Password</h2>
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

$oldword = mysql_real_escape_string($_POST["oldword"]);
$newword = mysql_real_escape_string($_POST["newword"]);
$newwword = mysql_real_escape_string($_POST["newwword"]);

$oldmd = MD5($oldword);

$cpass = mysql_fetch_array(mysql_query("SELECT password FROM users WHERE id='".$uid."'"));


///////////////////////-------------------->> CURRENT PASS THIK ACHE TO?
if ($cpass[0]!=$oldmd){
$err1=1;
}

///////////////////////-------------------->> 2 bar ki same?
if ($newword!=$newwword){
$err2=1;
}

///////////////////////-------------------->> Pass ki faka??

 if(trim($newword)=="")
      {
$err3=1;
}

 if(strlen($newword)<=3)
      {
$err4=1;
}

$error = $err1+$err2+$err3+$err4;


if ($error == 0){
$passmd = MD5($newword);
$res = mysql_query("UPDATE users SET password='".$passmd."' WHERE id='".$uid."'");
if($res){
	echo "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Password Updated Successfully!

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

Your Current Password Does Not Match.

</div>";
}		
if ($err2 == 1){
	echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

You Enter Different Password in two field. Please enter same password in both field.

</div>";

}		
if ($err3 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Password Can Not Be Empty!!!

</div>";
}		
if ($err4 == 1){
	echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Password Must be 4 or more char.

</div>";
}	

	
}



} 
	?>


				<form action="changepass.php" method="post">
		
<div class="form-group"><input class="form-control input-lg" placeholder="Current Password" name="oldword" type="password"></div>
<div class="form-group"><input class="form-control input-lg" placeholder="New Password" name="newword" type="password"></div>
<div class="form-group"><input class="form-control input-lg" placeholder="New Password Again" name="newwword" type="password"></div>
					<input type="submit" class="btn btn-lg btn-success btn-block" value="Change">
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