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
      <h2><i class="fa fa-users"></i>VIEW ALL USERS</h2>
    </div>

    
    <div class="contentpanel">
	 <div class="panel panel-default">

        <div class="panel-body">
		
<?php

$did = $_GET["del"];


$co = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM users WHERE id='".$did."'"));

if($co[0]>=1){
if ($did!=""){

$res = mysql_query("DELETE FROM users WHERE id='".$did."'");

if($res){
	echo "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Deleted Successfully!

</div>";
}else{
	echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Some Problem Occurs, Please Try Again. 

</div>";
}
}
}



?>	
		
		
		
		 <div class="clearfix mb30"></div>
		 
				
				
				
				
          <div class="table-responsive">
          <table class="table table-striped" id="table2">
              <thead>
                 <tr>

                    <th>#</th>
                    <th>Username</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Subscription</th>
                    <th>EDIT</th>
                    <th>Delete</th>
                    
					</tr>
              </thead>
              <tbody>
                
				
				<?php

$i=1;

$ddaa = mysql_query("SELECT id, username, fname, lname, email, utype FROM users ORDER BY id");
    echo mysql_error();
    while ($data = mysql_fetch_array($ddaa))
    {
	
	
if($data[5]==0){
$subtype = "<p class=\"btn btn-danger-alt btn-xs\">Not Subscribed</p>";
}

if($data[5]==1){
$subtype = "<p class=\"btn btn-primary-alt btn-xs\">Basic</p>";
}

if($data[5]==2){
$subtype = "<p class=\"btn btn-success-alt btn-xs\">Premium</p>";
}
	
	
 echo "                                
 <tr>
   <td>$i</td>
   <td>$data[1]</td>
   <td>$data[2]</td>
   <td>$data[3]</td>
   <td>$data[4]</td>
   <td>$subtype</td>
  
   <td><a href=\"edituser.php?id=$data[0]\"><button class=\"btn btn-info btn-xs\">EDIT</button></a></td>
   <td><a href=\"users.php?del=$data[0]\"><button class=\"btn btn-danger btn-xs\">DELETE</button></a></td>

                                        </tr>
	";
	
	$i++;
	}
?>
				
				
			
				




				
				 
              </tbody>
           </table>
          </div><!-- table-responsive -->
		  
        </div>
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



