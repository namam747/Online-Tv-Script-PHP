<?php
include ('include/header.php');
?>
</head>
<body>   
 <?php
include ('include/sidebar.php');
?>

 

    <div class="pageheader">
      <h2><i class="fa fa-cog"></i> GENERAL SETTING</h2>
    </div>

    
    <div class="contentpanel">
      <div class="panel panel-default">

        <div class="panel-body">

                    
                    
                    
                    
                    
            <div class="row">
            <div class="col-md-12">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                
                                <div class="portlet-body form">
                                    <form class="form-horizontal" action="" method="post" role="form" enctype="multipart/form-data">
                                        <div class="form-body">

           
<?php
if($_POST)
{

$title = mysql_real_escape_string($_POST["title"]);
$paypal = mysql_real_escape_string($_POST["paypal"]);

$email = mysql_real_escape_string($_POST["email"]);
$mobile = mysql_real_escape_string($_POST["mobile"]);

// IMAGE UPLOAD //////////////////////////////////////////////////////////
    $folder = "../asset/images/";
    $extention = strrchr($_FILES['aimg']['name'], ".");
    $new_name = 'about';
    $bgimg = $new_name.'.'.$extention;
    $uploaddir = $folder . $bgimg;
    move_uploaded_file($_FILES['aimg']['tmp_name'], $uploaddir);

    $img = $baseurl . '/asset/images/' . $bgimg;

    $about = serialize(array(
        'img' => $img,
        'text' => $_POST['atext']
    ));

    $social = serialize(array(
        'facebook' => $_POST['facebook'],
        'twitter' => $_POST['twitter'],
        'linkedin' => $_POST['linkedin'],
        'google-plus' => $_POST['gplus'],
        'pinterest-p' => $_POST['pinterest']
    ));

    $color = empty($_POST['color'])?'color_one':$_POST['color'];


$err1=0;
$err2=0;
$err3=0;




if(trim($title)==""){
$err1=1;
}






$error = $err1+$err2+$err3;


if ($error == 0){
$res = mysql_query("UPDATE general_setting SET sitetitle='".$title."', paypal='".$paypal."', email='".$email."', mobile='".$mobile."', about='".$about."', social='".$social."', color='".$color."' WHERE id='1'");
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

Website Title Can Not be Empty!!!

</div>";
}       
    




}




}

$old = mysql_fetch_array(mysql_query("SELECT sitetitle, paypal, email, mobile, color, about, social FROM general_setting WHERE id='1'"));

$about = unserialize($old[5]);
$social = unserialize($old[6]);

?>                                      
                                        
                                        
                                        
                                        
                                        
                                        
                    <div class="form-group">
                    <label class="col-md-3 control-label"><strong>Website Title</strong></label>
                    <div class="col-md-6">
                     <input class="form-control input-lg" name="title" value="<?php echo $old[0]; ?>" type="text">
                    </div>
                    </div>
                     
                                        
                                        
                                        
                    <div class="form-group">
                    <label class="col-md-3 control-label"><strong>PayPal Business Account</strong></label>
                    <div class="col-md-6">
                     <input class="form-control input-lg" name="paypal" value="<?php echo $old[1]; ?>" type="text">
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-md-3 control-label"><strong>Email</strong></label>
                    <div class="col-md-6">
                     <input class="form-control input-lg" name="email" value="<?php echo $old[2]; ?>" type="text">
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-md-3 control-label"><strong>Mobile</strong></label>
                    <div class="col-md-6">
                     <input class="form-control input-lg" name="mobile" value="<?php echo $old[3]; ?>" type="text">
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-md-3 control-label"><strong>About Text</strong></label>
                    <div class="col-md-6">
                     <textarea class="form-control" name="atext">
                         <?php echo $about['text']; ?>
                     </textarea>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-md-3 control-label"><strong>About Image</strong></label>
                    <div class="col-md-6">
                     <input type="file" name="aimg">
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-md-3 control-label"><strong>Facebook</strong></label>
                    <div class="col-md-6">
                     <input class="form-control input-lg" type="text" name="facebook" value="<?php echo $social['facebook']; ?>">
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-md-3 control-label"><strong>Twitter</strong></label>
                    <div class="col-md-6">
                     <input class="form-control input-lg" type="text" name="twitter" value="<?php echo $social['twitter']; ?>">
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-md-3 control-label"><strong>Linkedin</strong></label>
                    <div class="col-md-6">
                     <input class="form-control input-lg" type="text" name="linkedin" value="<?php echo $social['linkedin']; ?>">
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-md-3 control-label"><strong>Google Plus</strong></label>
                    <div class="col-md-6">
                     <input class="form-control input-lg" type="text" name="gplus" value="<?php echo $social['google-plus']; ?>">
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-md-3 control-label"><strong>Pinterest</strong></label>
                    <div class="col-md-6">
                     <input class="form-control input-lg" type="text" name="pinterest" value="<?php echo $social['pinterest-p']; ?>">
                    </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"><strong>Theme</strong></label>
                        <div class="col-md-6">
                        <select name="color" class="form-control input-lg">
                            <option value="color_one" <?php echo ($old[4]=='color_one')?'selected':''; ?>>Color One</option>
                            <option value="color_two" <?php echo ($old[4]=='color_two')?'selected':''; ?>>Color Two</option>
                            <option value="color_three" <?php echo ($old[4]=='color_three')?'selected':''; ?>>Color Three</option>
                            <option value="color_four" <?php echo ($old[4]=='color_four')?'selected':''; ?>>Color Four</option>
                            <option value="color_five" <?php echo ($old[4]=='color_five')?'selected':''; ?>>Color Five</option>
                            <option value="color_six" <?php echo ($old[4]=='color_six')?'selected':''; ?>>Color Six</option>
                            <option value="color_seven" <?php echo ($old[4]=='color_seven')?'selected':''; ?>>Color Seven</option>
                            <option value="color_eight" <?php echo ($old[4]=='color_eight')?'selected':''; ?>>Color Eight</option>
                            <option value="color_nine" <?php echo ($old[4]=='color_nine')?'selected':''; ?>>Color Nine</option>
                            <option value="color_ten" <?php echo ($old[4]=='color_ten')?'selected':''; ?>>Color Ten</option>
                            <option value="color_eleven" <?php echo ($old[4]=='color_eleven')?'selected':''; ?>>Color Eleven</option>
                            <option value="color_twelve" <?php echo ($old[4]=='color_twelve')?'selected':''; ?>>Color Twelve</option>
                        </select>
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