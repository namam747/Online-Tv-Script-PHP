<?php
include ('include/header.php');
?>
</head>
<body>   
 <?php
include ('include/sidebar.php');
?>

 

    <div class="pageheader">
      <h2><i class="fa fa-dollar"></i> PACKAGE SETTING</h2>
    </div>

    
    <div class="contentpanel">
      <div class="panel panel-default">

        <div class="panel-body">

					
					
					
					
					
			<div class="row">
			<div class="col-md-12">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                
                                <div class="portlet-body form">
                                    <form class="form-horizontal" action="" method="post" role="form">
                                        <div class="form-body">

		   
<?php
if($_POST)
{

$p1 = mysql_real_escape_string($_POST["p1"]);
$p2 = mysql_real_escape_string($_POST["p2"]);
$p3 = mysql_real_escape_string($_POST["p3"]);
$p4 = mysql_real_escape_string($_POST["p4"]);

$err1=0;
$err2=0;
$err3=0;



if ($p1<=0 || $p2<=0 || $p3<=0 || $p4<=0) {
$err1=1;
}




$error = $err1+$err2+$err3;


if ($error == 0){
$res = mysql_query("UPDATE general_setting SET p1='".$p1."', p2='".$p2."', p3='".$p3."', p4='".$p4."' WHERE id='1'");
echo mysql_error();
if($res){
	
	
echo "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

UPDATED Successfully! 

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

PRICE MUST BE A POSITIVE NUMBER

</div>";
}		
	




}




}

$old = mysql_fetch_array(mysql_query("SELECT p1, p2, p3, p4 FROM general_setting WHERE id='1'"));

?>										
										
										
										
										
										
										
					<div class="form-group">
                    <label class="col-md-3 control-label"><strong>P1 - 07 Days</strong></label>
                    <div class="col-md-6">
                     <input class="form-control input-lg" name="p1" value="<?php echo $old[0]; ?>" type="text">
                    </div>
                    </div>
                     
										
										
										
										
					<div class="form-group">
                    <label class="col-md-3 control-label"><strong>P2 - 03 Months</strong></label>
                    <div class="col-md-6">
                     <input class="form-control input-lg" name="p2" value="<?php echo $old[1]; ?>" type="text">
                    </div>
                    </div>
                     
										
										
										
										
					<div class="form-group">
                    <label class="col-md-3 control-label"><strong>P3 - 06 Months</strong></label>
                    <div class="col-md-6">
                     <input class="form-control input-lg" name="p3" value="<?php echo $old[2]; ?>" type="text">
                    </div>
                    </div>
                     
										
										
										
										
					<div class="form-group">
                    <label class="col-md-3 control-label"><strong>P4 - 12 Months</strong></label>
                    <div class="col-md-6">
                     <input class="form-control input-lg" name="p4" value="<?php echo $old[3]; ?>" type="text">
                    </div>
                    </div>
                     
										


					 
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-6">
                                                    <button type="submit" class="btn btn-success btn-block">UPDATE</button>
                                                </div>
                                            </div>
											
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>		
                        </div><!---ROW-->		
					
					
					
					
					
					
			
					
					
					
					
					
					
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            
			


<?php
 include ('include/footer.php');
 ?>


</body>
</html>