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
      <h2><i class="fa fa-desktop"></i> ADD CHANNEL</h2>
    </div>

    
    <div class="contentpanel">
      <div class="panel panel-default">

        <div class="panel-body">
        
           
<?php


if($_POST)
{

$cnm = mysql_real_escape_string($_POST["cnm"]);
$type = mysql_real_escape_string($_POST["type"]);
$code = mysql_real_escape_string($_POST["code"]);

//$code = str_replace("&","aannddaanndd","$code");

if (!empty($_FILES['img']['name'])) {
// IMAGE UPLOAD //////////////////////////////////////////////////////////
    $folder = "../asset/images/";
    $extention = strrchr($_FILES['img']['name'], ".");
    $new_name = time();
    $bgimg = $new_name.$extention;
    $uploaddir = $folder . $bgimg;
    move_uploaded_file($_FILES['img']['tmp_name'], $uploaddir);
    $img = $bgimg;
} else {
    $img = 'nopic.png';
}


echo "$code";

$res = mysql_query("INSERT INTO channel SET cnm='".$cnm."', typ='".$type."', code='".$code."', img='".$img."'");

if($res){
    echo "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>    

Added Successfully! 

</div>";
}else{
    echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>    

Some Problem Occurs, Please Try Again. 

</div>";
}


}

?>  
        
        
        
        <form action="" method="post" enctype="multipart/form-data">
        
        
        <div class="form-group">
             


<!--FORMS-->

            
            

            
<label class="col-sm-3 control-label text-right  input-lg">Channel Name</label>
<div class="col-sm-6"><input name="cnm" class="form-control input-lg" type="text"></div>
<div class="clearfix"></div>

<label class="col-sm-3 control-label text-right  input-lg">Channel Image</label>
<div class="col-sm-6"><input name="img" type="file"></div>
<div class="clearfix"></div>

<label class="col-sm-3 control-label text-right  input-lg">Embedded Code</label>
<div class="col-sm-6"><textarea class="form-control" name="code" rows="5"></textarea></div>
<div class="clearfix"></div>






<label class="col-md-3 control-label text-right  input-lg">Channel Type</label>
<div class="col-md-6"><select name="type" value="" class="form-control input-lg">
                  <option value="1">Basic</option>
                  <option value="2">Premium</option>
                </select>


</div>

<div class="clearfix"></div>


<div class="col-sm-3"></div>
<div class="col-sm-6"><input type="submit" class="btn btn-success btn-block" value="Add">   </div>
        
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



