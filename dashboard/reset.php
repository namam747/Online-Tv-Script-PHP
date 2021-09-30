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
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Reset Password</title>

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
                            <h1><strong><a href="http://live--stream.com">Live Stream </a></strong>  Reset Password</h1>
                            <div class="description">
                            	<p>
	                       					
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6 col-md-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Reset Password</h3>

                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-edit"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    
								
								               		
										 
<?php

$code = $_GET["code"];

if($_POST)
{


$pass = $_POST["pass"];

$passmd = md5($pass);

$user = mysql_fetch_array(mysql_query("SELECT usid FROM forgot_pass WHERE code='".$code."'"));


$res = mysql_query("UPDATE users SET password='".$passmd."' WHERE id='".$user[0]."'");

if($res){

mysql_query("UPDATE forgot_pass SET status='1' WHERE code='".$code."'");



echo "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Password Updated Successfully! <br/> Please Check Your login.

<meta http-equiv=\"refresh\" content=\"3; url=index.php\" />


</div>";
}else{
	echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Some Problem Occurs, Please Try Again. 

</div>";
}

}else{
				
				
				
				
	
$eee = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM forgot_pass WHERE code='".$code."' AND status='0'"));

if($eee[0]=="1")
      {			
echo "<form role=\"form\" action=\"\" method=\"post\" class=\"registration-form\">
<div class=\"form-group\">
<input type=\"text\" name=\"pass\" placeholder=\"New Password\" class=\"form-email form-control\">
</div>

<button type=\"submit\" class=\"btn\"> Submit</button>
</form>";
}else{


echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	
Code Not found in our Database
</div>";

}
}

?>

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
