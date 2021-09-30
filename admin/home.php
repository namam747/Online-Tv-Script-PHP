<?php
include ('include/header.php');
?>

  
  <link href="css/style.default.css" rel="stylesheet">
  <link href="css/jquery.datatables.css" rel="stylesheet">
</head>
<body>   
 <?php
include ('include/sidebar.php');
?>

    <div class="pageheader">
      <h2><i class="fa fa-th-list"></i>ADMIN DASH BOARD</h2>
    </div>

    
    <div class="contentpanel">
	<div class="row">

        <div class="col-sm-6 col-md-3">
          <div class="panel panel-info panel-stat">
            <div class="panel-heading">

              <div class="stat">
                <div class="row">
                  <div class="col-xs-4">
                    <img src="images/is-user.png" alt="">
                  </div>
                  <div class="col-xs-8">
                    <small class="stat-label">Total Member</small>
                    <h1>
<?php
$co = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM users"));
echo "$co[0]";
?>					
					</h1>
                  </div>
                </div><!-- row -->


              </div><!-- stat -->

            </div><!-- panel-heading -->
          </div><!-- panel -->
        </div><!-- col-sm-6 -->

        <div class="col-sm-6 col-md-3">
          <div class="panel panel-success panel-stat">
            <div class="panel-heading">

              <div class="stat">
                <div class="row">
                  <div class="col-xs-4">
                    <img src="images/is-document.png" alt="">
                  </div>
                  <div class="col-xs-8">
                    <small class="stat-label">Premium Member</small>
                    <h1>
<?php
$co = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM users WHERE utype='2'"));
echo "$co[0]";
?>						
					
					</h1>
                  </div>
                </div><!-- row -->


              </div><!-- stat -->

            </div><!-- panel-heading -->
          </div><!-- panel -->
        </div><!-- col-sm-6 -->

        <div class="col-sm-6 col-md-3">
          <div class="panel panel-primary panel-stat">
            <div class="panel-heading">

              <div class="stat">
                <div class="row">
                  <div class="col-xs-4">
                    <img src="images/is-document.png" alt="">
                  </div>
                  <div class="col-xs-8">
                    <small class="stat-label">Basic Member</small>
                    <h1>
<?php
$co = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM users WHERE utype='1'"));
echo "$co[0]";
?>						
					</h1>
                  </div>
                </div><!-- row -->


   

              </div><!-- stat -->

            </div><!-- panel-heading -->
          </div><!-- panel -->
        </div><!-- col-sm-6 -->

        <div class="col-sm-6 col-md-3">
          <div class="panel panel-dark panel-stat">
            <div class="panel-heading">

              <div class="stat">
                <div class="row">
                  <div class="col-xs-6">
                    <small class="stat-label">TOTAL Channel</small>
                    <h1>
<?php
$co = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM channel"));
echo "$co[0]";
?>						
					</h1>
                  </div>

                  <div class="col-xs-6">
                    <small class="stat-label">Basic : <b>
<?php
$co = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM channel WHERE typ='1'"));
echo "$co[0]";
?>		</b></small>				

                    <small class="stat-label">Premium : <b>
<?php
$co = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM channel WHERE typ='2'"));
echo "$co[0]";
?> </b></small>
                  </div>
                </div><!-- row -->

              </div><!-- stat -->

            </div><!-- panel-heading -->
          </div><!-- panel -->
        </div><!-- col-sm-6 -->
      </div>
      
    </div><!-- contentpanel -->
    


  
</section>


<?php
 include ('include/footer.php');
 ?>

<script src="js/jquery.datatables.min.js"></script>
<script src="js/select2.min.js"></script>

<script>
  jQuery(document).ready(function() {
    
    "use strict";
    
    jQuery('#table1').dataTable();
    
    jQuery('#table2').dataTable({
      "sPaginationType": "full_numbers"
    });
    
    // Select2
    jQuery('select').select2({
        minimumResultsForSearch: -1
    });
    
    jQuery('select').removeClass('form-control');
    
    // Delete row in a table
    jQuery('.delete-row').click(function(){
      var c = confirm("Continue delete?");
      if(c)
        jQuery(this).closest('tr').fadeOut(function(){
          jQuery(this).remove();
        });
        
        return false;
    });
    
    // Show aciton upon row hover
    jQuery('.table-hidaction tbody tr').hover(function(){
      jQuery(this).find('.table-action-hide a').animate({opacity: 1});
    },function(){
      jQuery(this).find('.table-action-hide a').animate({opacity: 0});
    });
  
  
  });
</script>



</body>
</html>



