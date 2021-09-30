
<div class="site_wrapper">

      <!--Notification bar-->
  <!--div class="topbar white topbar-padding">
    <div class="container">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi quod, doloremque nostrum molestiae ab, magni omnis a optio enim distinctio quos </p>
	
    </div>
  </div-->
        <!--Notification bar END-->
  
  <div class="clearfix"></div>
  
  <div id="header">
    <div class="container">
      <div class="navbar navbar-default yamm">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          <a href="<?php echo $dashurl; ?>" class="navbar-brand"><img src="<?php echo $baseurl; ?>/logo.png" style="width: 180px;" alt=""/></a> </div>
        <div id="navbar-collapse-grid" class="navbar-collapse collapse pull-right">
          <ul class="nav navbar-nav">
            
<li><a href="<?php echo $dashurl; ?>/home">Home</a></li>
<li><a href="<?php echo $dashurl; ?>/channels">Channels</a></li>


<?php 

$subs = mysql_fetch_array(mysql_query("SELECT utype FROM users WHERE id='".$uid."'"));
if($subs[0]==2){
echo "<li><a href=\"$dashurl/prmchannels\">Premium Channels</a></li>";
}
?>
            <li class="" style="padding-left: 40px;"> &nbsp; </li>





<li class="dropdown"> <a class="dropdown-toggle align-1" style="color: #000;"><i class="fa fa-user"></i> Account</a>

<ul class="dropdown-menu align-1 two" role="menu">


<li> <a href="<?php echo $dashurl; ?>/upgrade"><i class="fa fa-cog"></i> Upgrade Account</a> </li>
<li> <a href="<?php echo $dashurl; ?>/updateprofile"><i class="fa fa-edit"></i> Edit Profile</a> </li>
<li> <a href="<?php echo $dashurl; ?>/changepassword"><i class="fa fa-cog"></i> Change Password</a> </li>
<li> <a href="<?php echo $dashurl; ?>/signout"><i class="fa fa-sign-out"></i> Sign Out</a> </li>

</ul>
</li>

          </ul>
        </div>
      </div>
    </div>
  </div>
  <!--end menu-->
  <div class="clearfix"></div>

  <div id="abir">
