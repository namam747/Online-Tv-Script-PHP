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
      <h2><i class="fa fa-edit"></i> EDIT MENU</h2>
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

$iidd = $_GET["id"];

if($_POST)
{

$name = mysql_real_escape_string($_POST["name"]);
$btext = mysql_real_escape_string($_POST["btext"]);


$err1=0;
$err2=0;




if(trim($name)=="")
      {
$err1=1;
}




$error = $err1+$err2;


if ($error == 0){
	
$res = mysql_query("UPDATE menus SET name='".$name."', btext='".$btext."' WHERE id='".$iidd."'");
echo mysql_error();
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
} else {
	
if ($err1 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Name Can Not be Empty!!!

</div>";
}		
	
}


}

$old = mysql_fetch_array(mysql_query("SELECT name, btext FROM menus WHERE id='".$iidd."'"));
?>										
										
										
										
										
										
										
					<div class="form-group">
                    <label class="col-md-3 control-label"><strong>Menu Name</strong></label>
                    <div class="col-md-6">
                     <input class="form-control input-lg" name="name" value="<?php echo $old[0]; ?>" type="text">
                    </div>
                    </div>

                     
                     
                    <div class="form-group">
                    <label class="col-md-3 control-label"><strong>MenuContent</strong></label>
                    <div class="col-md-6">
                    <textarea id="wysiwyg" class="form-control" rows="10" name="btext"><?php echo $old[1]; ?></textarea>
                    </div>
                    </div>

					 
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-6">
                                                    <button type="submit" class="btn btn-success btn-block">Update</button>
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