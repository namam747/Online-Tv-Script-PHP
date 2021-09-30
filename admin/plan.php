<?php
include ('include/header.php');
?>
</head>
<body>   
 <?php
include ('include/sidebar.php');
?>

    <div class="pageheader">
      <h2><i class="fa fa-file-image-o"></i> All Pricing Plan</h2>
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

    $id = $_POST['id'];
    $option = $_POST['option'];

    if (in_array($id, array(1, 2, 3, 4))) {

        $options = serialize($option);

        $res = mysql_query("UPDATE plan SET options='".$options."' WHERE id='".$id."'");
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

    }
}

?>

<?php
    if (isset($_GET['id']) && in_array($_GET['id'], array(1, 2, 3, 4))) {

        $get_plan = mysql_fetch_array(mysql_query("SELECT id, name, options FROM plan WHERE id='".$_GET['id']."'"));
        $get_options = unserialize($get_plan[2]);$i = 1;

        $plan = 'p' . $_GET['id'];
        $p_arr = mysql_fetch_array(mysql_query("SELECT $plan FROM general_setting WHERE id='1'"));

?>

        <div class="portlet-body form">
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                <div class="form-body">
                    <h1 class="text-center text-success"><?php echo $plan; ?> <small><?php echo $p_arr[0]; ?> USD</small></h1>
                <?php foreach($get_options as $get_option){ ?>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><strong>Option <?php echo $i; ?></strong></label>
                        <div class="col-sm-6">
                            <input type="text" value="<?php echo $get_option; ?>" class="form-control" name="option[]">
                        </div>
                    </div>
                <?php $i++; } ?>
                    <div class="row">
                        <div class="col-md-offset-3 col-md-6">
                            <button type="submit" class="btn btn-success btn-block">UPDATE</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        
        <?php
    }
?>

<div style="margin-top: 40px;">-</div>



<?php


          
//------------------------------------------->>> DELETE             

if(isset($_GET['did'])) {
$did = $_GET["did"];
$exist = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM plan WHERE id='".$did."'"));
if($exist[0]>=1){
    
$res = mysql_query("DELETE FROM plan WHERE id='".$did."'");

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



$ddaa = mysql_query("SELECT id, name, options FROM plan ORDER BY id");
echo mysql_error();
    while ($data = mysql_fetch_array($ddaa))
    {

        $plan = 'p' . $data[0];
        $p_arr = mysql_fetch_array(mysql_query("SELECT $plan FROM general_setting WHERE id='1'"));
        $options = unserialize($data[2]);

        ?>

        <div class="col-md-6">
            <h2><?php echo $plan; ?> <small><?php echo $p_arr[0]; ?> USD</small></h2>
            <ul>
            <?php foreach($options as $option){
                if(!empty($option)) {
            ?>
                <li><?php echo $option; ?></li>
            <?php } } ?>
            </ul>
            <a href="?id=<?php echo $data[0]; ?>" class="btn btn-warning btn-block">EDIT</a>
        </div>

        <?php
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