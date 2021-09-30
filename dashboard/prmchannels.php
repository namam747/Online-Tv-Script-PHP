<?php
include ('include/header.php');
?>
</head>

    <body oncontextmenu="return false;" onkeydown="return false;" onmousedown="return false;">
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
<h2 class="animated" data-animation="fadeInUp" data-animation-delay="200" style="text-align:center;">Premium Channels</h2>
                </div>
                </div>

        <div style="margin-top:60px;"></div>
                                    
                <div class="row">
                <?php
include ('accwarn.php');




$rtm = mysql_fetch_array(mysql_query("SELECT utype, regtm FROM users WHERE id='".$uid."'"));

    
if ($rtm[0] == 0){

echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>    
<center>
Currently You are not subscribed to any Plan <a href=\"upgrade.php\"class=\"btn btn-xs btn-info\"> Subscribe Now</a> to Enjoy our features.
<br/><br/>
<b>Your are not Authorized to view</b>
</center>
</div>";
echo "<div style=\"margin-top:60px;\"></div>";
}else if ($rtm[0] == 1){

echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>    
<center>
Currently You are not subscribed to Premium Plan <a href=\"upgrade.php\"class=\"btn btn-xs btn-info\"> Subscribe Now</a> to Enjoy our features.
<br/><br/>
<b>Your are not Authorized to view</b>
</center>
</div>";
echo "<div style=\"margin-top:60px;\"></div>";
}else{
?>


</div><!-- row-->


                
<div class="row">   

<?php

    if (isset($_GET['id'])) {
        $id = mysql_real_escape_string($_GET['id']);
        $single_stmt = mysql_query('SELECT cnm, code FROM channel WHERE typ=\'2\' AND id=\''.$id.'\'');
        if ($single = mysql_fetch_array($single_stmt)) {
             
             ?>
                <div class="col-sm-12">
                    <div class="panel panel-primary panel-alt">
                        <div class="panel-heading">
                            <h3 class="panel-title" style="font-size: 20px;"><?php echo $single[0]; ?></h3>
                        </div>
                        <div class="panel-body">
                            <?php echo $single[1]; ?>
                        </div>
                    </div>
                </div>
                
            <?php

        } else {

            $ddaa = mysql_query("SELECT id, cnm, img FROM channel WHERE typ='2'");
            echo mysql_error();
            while ($data = mysql_fetch_array($ddaa))
            {

                $img = $baseurl . '/asset/images/' . $data[2];

            echo "<div class=\"col-sm-4\">
                  <div class=\"panel panel-primary panel-alt\">
                  <div class=\"panel-heading\"><h3 class=\"panel-title\" style=\"font-size:20px\">$data[1]</h3></div>
                    <div class=\"panel-body\">
                   <a href=\"$dashurl/prmchannels/$data[0]\"><img class=\"img-responsive\" src=\"$img\" alt=\"$data[1]\"></a>
                    </div></div></div>";
            
            
            }

        }
    } else {
        $ddaa = mysql_query("SELECT id, cnm, img FROM channel WHERE typ='2'");
        echo mysql_error();
        while ($data = mysql_fetch_array($ddaa))
        {

            $img = $baseurl . '/asset/images/' . $data[2];

        echo "<div class=\"col-sm-4\">
              <div class=\"panel panel-primary panel-alt\">
              <div class=\"panel-heading\"><h3 class=\"panel-title\" style=\"font-size:20px\">$data[1]</h3></div>
                <div class=\"panel-body\">
               <a href=\"$dashurl/prmchannels/$data[0]\"><img class=\"img-responsive\" src=\"$img\" alt=\"$data[1]\"></a>
                </div></div></div>";
        
        
        }
    }



}

?>

        
        
</div><!-- row-->               
                    
                </div>
            </article>

            

        </section>
        <!-- end Content -->

<?php
include ('include/footer.php');
?>