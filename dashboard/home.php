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
<h2 class="animated" data-animation="fadeInUp" data-animation-delay="200" style="text-align:center;">DASHBORAD</h2>
				</div>
				</div>

		<div style="margin-top:60px;"></div>
									
				<div class="row">
				<?php
include ('accwarn.php');

$subdet = mysql_fetch_array(mysql_query("SELECT utype, pkgend FROM users WHERE id='".$uid."'"));
$ctm = time();

$seconds = $subdet[1]-$ctm;

$days    = floor($seconds / 86400);
$hours   = floor(($seconds - ($days * 86400)) / 3600);
$minutes = floor(($seconds - ($days * 86400) - ($hours * 3600))/60);
$seconds = floor(($seconds - ($days * 86400) - ($hours * 3600) - ($minutes*60)));

$tms = "$days Days $hours HOURS";
?>



<div class="col-md-6 col-md-offset-3">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"><center>Subscription Details</center></h3>
            </div>
            <div class="panel-body"><center>

<?php

if($subdet[0]==0){
echo "<p class=\"btn btn-danger btn-md\">Not Subscribed yet</p>";
}

if($subdet[0]==1){
echo "<p class=\"btn btn-primary btn-md\">Basic</p> <p class=\"btn btn-info btn-md\">$tms Remain</p>";
}

if($subdet[0]==2){
echo "<p class=\"btn btn-success btn-md\">Premium</p> <p class=\"btn btn-info btn-md\">$tms Remain</p>";
}


?>	
			
			
			
           </center> </div>
          </div><!-- panel -->
        </div>




</div>


				
		

					
					
				</div>
			</article>

			

		</section>
		<!-- end Content -->

<?php
include ('include/footer.php');
?>