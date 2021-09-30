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
        <title>Sign In | <?php echo $gen[0]; ?></title>

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
                            <h1><strong><a href="<?php echo $baseurl; ?>"><?php echo $gen[0]; ?></a></strong>  Login</h1>
                            <div class="description">
                            	<p>
	                            	Don't Have an account? You Can <a href="<?php echo $dashurl; ?>/signup"><strong>REGISTER</strong></a> Here
									
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6 col-md-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Sign In</h3>
                            		<p>Fill in the form below to get instant access:</p>
 <a href="<?php echo $dashurl; ?>/ForgotPassword"><strong>Forgot Password?</strong></a> 
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-user"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    
								
								               		
						<?php if (!empty($_GET['error'])): ?>
	                              <div class="alert alert-danger alert-dismissable">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>	
							      <?php echo $_GET['error']?>
                                  </div>
                                <?php endif ?>
								
								
								<form role="form" action="signin_post.php" method="post" class="registration-form">
								
<div class="form-group">
<input type="text" name="username" placeholder="User Name" class="form-first-name form-control">
</div>
<div class="form-group">
<input type="password" name="password" placeholder="Password" class="pass form-control">
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
        

    </body>
</html>
