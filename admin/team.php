<?php
include ('include/header.php');
?>
</head>
<body>   
 <?php
include ('include/sidebar.php');
?>

    <div class="pageheader">
      <h2><i class="fa fa-file-image-o"></i> Add New Member</h2>
    </div>

    
    <div class="contentpanel">
      <div class="panel panel-default">

        <div class="panel-body">
          
          
          
          
          
      <div class="row">
      <div class="col-md-12">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                

     
<?php

if($_POST)
{
$name = mysql_real_escape_string($_POST["name"]);
$about = mysql_real_escape_string($_POST["about"]);
$position = mysql_real_escape_string($_POST["position"]);

$err1 = 0;

if (empty($name) || empty($about) || !isset($_FILES['img'])) {
$err1 = 1;
} else {
// IMAGE UPLOAD //////////////////////////////////////////////////////////
    $folder = "../asset/images/";
    $extention = strrchr($_FILES['img']['name'], ".");
    $new_name = time();
    $bgimg = $new_name.'.'.$extention;
    $uploaddir = $folder . $bgimg;
    move_uploaded_file($_FILES['img']['tmp_name'], $uploaddir);

    $img = $baseurl . '/asset/images/' . $bgimg;
}

$error = $err1;


if ($error == 0){

$social = serialize(array(
    'facebook' => $_POST['facebook'],
    'twitter' => $_POST['twitter'],
    'google' => $_POST['google'],
    'instagram' => $_POST['instagram']
));

$res = mysql_query("INSERT INTO team SET name='".$name."', about='".$about."', position='".$position."', img='".$img."', social='".$social."'");
echo mysql_error();
if($res){

echo "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>  
New Member Added Successfully! 
</div>";
}else{

echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>    
Some Problem Occurs, Please Try Again. 
</div>";
}
}else{
if ($err1 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>    

All Option are REQUIRED!!!

</div>";
} 

}
}

?>                  
                    
                    
    
                                <div class="portlet-body form">
                                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

                                        <div class="form-body"> 
                
     
                        <div class="form-group">
              <label class="col-sm-3 control-label"><strong>NAME</strong></label>
              <div class="col-sm-6"><input type="text" class="form-control" name="name"></div>
          
                 </div>

                        <div class="form-group">
              <label class="col-sm-3 control-label"><strong>Position</strong></label>
              <div class="col-sm-6"><input type="text" class="form-control" name="position"></div>
          
                 </div>
             

            <div class="form-group">
              <label class="col-sm-3 control-label"><strong>About</strong></strong></label>
              <div class="col-sm-6">
                <textarea name="about" class="form-control">
                    
                </textarea>
                </div>          
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label"><strong>Picture</strong></label>
              <div class="col-sm-6"><input type="file" class="form-control" name="img"></div>
          
                 </div>

                 <div class="form-group">
              <label class="col-sm-3 control-label"><strong>Facebook</strong></label>
              <div class="col-sm-6"><input type="text" class="form-control" name="facebook"></div>
          
                 </div>

                 <div class="form-group">
              <label class="col-sm-3 control-label"><strong>Twitter</strong></label>
              <div class="col-sm-6"><input type="text" class="form-control" name="twitter"></div>
          
                 </div>

                 <div class="form-group">
              <label class="col-sm-3 control-label"><strong>Google</strong></label>
              <div class="col-sm-6"><input type="text" class="form-control" name="google"></div>
          
                 </div>

                 <div class="form-group">
              <label class="col-sm-3 control-label"><strong>Instagram</strong></label>
              <div class="col-sm-6"><input type="text" class="form-control" name="instagram"></div>
          
                 </div>
        
        
           
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-6">
                                                    <button type="submit" class="btn btn-success btn-block">ADD NEW</button>
                                                </div>
                                            </div>
                      
                                        </div>
                                    </form>
                                </div>
                            </div>


<div style="margin-top: 40px;">-</div>



<?php


          
//------------------------------------------->>> DELETE             

if(isset($_GET['did'])) {
$did = $_GET["did"];
$exist = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM team WHERE id='".$did."'"));
if($exist[0]>=1){
    
$res = mysql_query("DELETE FROM team WHERE id='".$did."'");

if($res){
echo "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>    
DELETED Successfully! 
</div>";
}else{
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>    
Some Problem Occurs, Please Try Again. 
</div>";
}
}else{
    /*
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>    
NOT FOUND IN DATABASE (MAY ALREADY DELETED)
</div>";
*/
}   
}
//------------------------------------------->>> DELETE         



$ddaa = mysql_query("SELECT id, name, img FROM team ORDER BY id");
echo mysql_error();
    while ($data = mysql_fetch_array($ddaa))
    {

echo "<div class=\"col-md-6 col-sm-12\">

 <h3 style=\"font-weight:bold; min-height:40px;\">$data[1] </h3> <br><br>
 <img src=\"$data[2]\" style=\"height: 250px;margin: 0 auto;\" alt=\"$data[1]\" class=\"img-responsive\">

<a href=\"?did=$data[0]\" class='btn btn-danger btn-block'>DELETE</a>
<br><br><br><br>
</div>";





}
?>                    
                        </div>    
                        </div><!---ROW-->   





          
          
          
          
          
          
      
          
          
          
          
          
          
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            
      


<?php
 include ('include/footer.php');
 ?>

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
        <script src="./assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <script>
        
    
        
        </script>
        
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/pages/scripts/components-editors.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
<script src="http://www.appelsiini.net/projects/chained/jquery.chained.js"></script>
<script>
    $("#subcat").chained("#cat");
$("#child").chained("#subcat");
</script>
</body>
</html>