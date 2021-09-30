<?php 
include('header.php');
$iidd = mysql_real_escape_string($_GET['id']);
$hometxt = mysql_fetch_array(mysql_query("SELECT name, btext FROM menus WHERE id='".$iidd."'"));

?>
  
  <div class="clearfix"></div>

<section class="about-section">
<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3">


<div class="section-heading">
                        <h2><?php echo $hometxt[0]; ?></h2>
                        <div class="head-img">
                            <img src="<?php echo $baseurl; ?>/asset/images/header.png" alt="header-img">
                        </div>
                    </div>
                    
                    <div class="about-content">
                        <p>
                            <?php echo $hometxt[1]; ?>
                        </p>
                    </div>


</div>
</div>
</div>
</section>
<!-- end section -->






<div class="clearfix"></div> 






<?php 
include('footer.php');
?>
 