<?php
include ('include/header.php');
?>

  
  <link rel="stylesheet" href="css/bootstrap-timepicker.min.css" />
 
  <link rel="stylesheet" href="css/bootstrap-wysihtml5.css" />
</head>
<body>   
 <?php
include ('include/sidebar.php');
?>

    <div class="pageheader">
      <h2><i class="fa fa-user"></i> EDIT USER</h2>
    </div>

    
    <div class="contentpanel">
      <div class="panel panel-default">

        <div class="panel-body">
		
		   
<?php

$idd= $_GET["id"];

if($_POST)
{

$fristname = $_POST["fristname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$subs = $_POST["subs"];
$pkgend = $_POST["pkgend"];
$pkgtm = strtotime("$pkgend");


$res = mysql_query("UPDATE users SET fname='".$fristname."', lname='".$lastname."', email='".$email."', phone='".$phone."', utype='".$subs."', pkgend='".$pkgtm."' WHERE id='".$idd."'");

if($res){
	echo "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Updated Successfully! 

</div>";
}else{
	echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Some Problem Occurs, Please Try Again. 

</div>";
}


}

$old = mysql_fetch_array(mysql_query("SELECT username, fname, lname, email, utype, pkgend, phone FROM users WHERE id='".$idd."'"));

if($old[4]==0){
$subtype = "<p class=\"btn btn-danger-alt btn-xs\">Not Subscribed</p>";
$sel = "<option value=\"0\">Not Subscribed</option>";
}

if($old[4]==1){
$subtype = "<p class=\"btn btn-primary-alt btn-xs\">Basic</p>";
$sel = "<option value=\"1\">Basic</option>";
}

if($old[4]==2){
$subtype = "<p class=\"btn btn-success-alt btn-xs\">Premium</p>";
$sel = "<option value=\"2\">Premium</option>";
}


$pkg = date("m/d/Y", $old[5]);
?>	
		
		
		
		<form action="" method="post">
		
		
		<div class="form-group">
             


<!--FORMS-->

			
			
<label class="col-sm-3 control-label text-right  input-lg">Username</label>
<div class="col-sm-6"><input name="" value="<?php echo $old[0]; ?>" class="form-control input-lg" disabled="" type="text"></div>
<div class="clearfix"></div>			
<label class="col-sm-3 control-label text-right  input-lg">First Name</label>
<div class="col-sm-6"><input name="fristname" value="<?php echo $old[1]; ?>" class="form-control input-lg" type="text"></div>
<div class="clearfix"></div>

<label class="col-sm-3 control-label text-right  input-lg">Last Name</label>
<div class="col-sm-6"><input name="lastname" value="<?php echo $old[2]; ?>" class="form-control input-lg" type="text"></div>
<div class="clearfix"></div>


<label class="col-sm-3 control-label text-right  input-lg">Email</label>
<div class="col-sm-6"><input name="email" value="<?php echo $old[3]; ?>" class="form-control input-lg" type="text"></div>
<div class="clearfix"></div>


<label class="col-sm-3 control-label text-right  input-lg">Phone</label>
<div class="col-sm-6"><input name="phone" value="<?php echo $old[6]; ?>" class="form-control input-lg" type="text"></div>
<div class="clearfix"></div>




<label class="col-md-3 control-label text-right  input-lg">Subscription Type</label>
<div class="col-md-6"><select name="subs" value="" class="form-control input-lg">
                   <?php echo $sel; ?>
                  <option value="0">-----SELECT-----</option>
                  <option value="0">Not Subscribed</option>
                  <option value="1">Basic</option>
                  <option value="2">premium</option>
                </select>


</div>
<div class="col-md-1"><?php echo $subtype;?></div>
<div class="clearfix"></div>


<label class="col-sm-3 control-label text-right  input-lg">Subscription End: </label>
<div class="col-sm-6"><input name="pkgend" id="datepicker" value="<?php echo $pkg; ?>" class="form-control input-lg" type="text"></div>
<div class="clearfix"></div>



<div class="col-sm-3"></div>
<div class="col-sm-6"><input type="submit" class="btn btn-success btn-block" value="Update">	</div>
		
			 </form>


			 </div>
			
			
				
           
      </div>
                  
      
         </div>
      
    </div><!-- contentpanel -->
    
  </div><!-- mainpanel -->

  
</section>


<?php
 include ('include/footer.php');
 ?>
</body>
</html>



