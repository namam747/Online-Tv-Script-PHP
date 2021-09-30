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
      <h2><i class="fa fa-edit"></i> EDIT CHANNEL</h2>
    </div>

    
    <div class="contentpanel">
      <div class="panel panel-default">

        <div class="panel-body">
		
		   
<?php

$cid = mysql_real_escape_string($_GET["id"]);
if($_POST)
{

$cnm = mysql_real_escape_string($_POST["cnm"]);
$type = mysql_real_escape_string($_POST["type"]);
$code = mysql_real_escape_string($_POST["code"]);


$res = mysql_query("Update channel SET cnm='".$cnm."', typ='".$type."', code='".$code."' WHERE id='".$cid."'");

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


$old = mysql_fetch_array(mysql_query("SELECT cnm, typ, code FROM channel WHERE id='".$cid."'"));


                  
                  

if($old[1]==1){
$sel = "<option value=\"1\">Basic</option>";
}

if($old[1]==2){
$sel = "<option value=\"2\">Premium</option>";
}
				  
				  
?>	
		
		
		
		<form action="" method="post">
		
		
		<div class="form-group">
             


<!--FORMS-->

			
			

			
<label class="col-sm-3 control-label text-right  input-lg">Channel Name</label>
<div class="col-sm-6"><input name="cnm" value="<?php echo $old[0]; ?>"  class="form-control input-lg" type="text"></div>
<div class="clearfix"></div>

<label class="col-sm-3 control-label text-right  input-lg">Embedded Code</label>
<div class="col-sm-6"><textarea class="form-control" name="code" rows="5"><?php echo $old[2]; ?></textarea></div>
<div class="clearfix"></div>






<label class="col-md-3 control-label text-right  input-lg">Channel Type</label>
<div class="col-md-6"><select name="type" value="" class="form-control input-lg">
                   <?php echo $sel; ?>
                  <option value="0">-----SELECT-----</option>
                  <option value="1">Basic</option>
                  <option value="2">Premium</option>
                </select>


</div>

<div class="clearfix"></div>


<div class="col-sm-3"></div>
<div class="col-sm-6"><input type="submit" class="btn btn-success btn-block" value="UPDATE">	</div>
		
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


<script src="js/bootstrap-timepicker.min.js"></script>


<script src="js/wysihtml5-0.3.0.min.js"></script>
<script src="js/bootstrap-wysihtml5.js"></script>
<script src="js/ckeditor/ckeditor.js"></script>
<script src="js/ckeditor/adapters/jquery.js"></script>



<script>
jQuery(document).ready(function(){
    
    "use strict";
    
  // HTML5 WYSIWYG Editor
  jQuery('#wysiwyg').wysihtml5({color: true,html:true});
  
  // CKEditor
  jQuery('#ckeditor').ckeditor();
  
  jQuery('#inlineedit1, #inlineedit2').ckeditor();
  
  // Uncomment the following code to test the "Timeout Loading Method".
  // CKEDITOR.loadFullCoreTimeout = 5;

  window.onload = function() {
  // Listen to the double click event.
  if ( window.addEventListener )
	document.body.addEventListener( 'dblclick', onDoubleClick, false );
  else if ( window.attachEvent )
	document.body.attachEvent( 'ondblclick', onDoubleClick );
  };

  function onDoubleClick( ev ) {
	// Get the element which fired the event. This is not necessarily the
	// element to which the event has been attached.
	var element = ev.target || ev.srcElement;

	// Find out the div that holds this element.
	var name;

	do {
		element = element.parentNode;
	}
	while ( element && ( name = element.nodeName.toLowerCase() ) &&
		( name != 'div' || element.className.indexOf( 'editable' ) == -1 ) && name != 'body' );

	if ( name == 'div' && element.className.indexOf( 'editable' ) != -1 )
		replaceDiv( element );
	}

	var editor;

	function replaceDiv( div ) {
		if ( editor )
			editor.destroy();
		editor = CKEDITOR.replace( div );
	}

	 jQuery('#timepicker').timepicker({defaultTIme: false});
  jQuery('#timepicker2').timepicker({showMeridian: false});
  jQuery('#timepicker3').timepicker({minuteStep: 15});

	
	
});


  jQuery('#datepicker').datepicker();
  
</script>
</body>
</html>



