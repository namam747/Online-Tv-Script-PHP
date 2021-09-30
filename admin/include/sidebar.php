<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>

  <div class="leftpanel">

    <div class="logopanel">
        <h1><span>Live</span> TV<span></span></h1>
    </div><!-- logopanel -->

    <div class="leftpanelinner">

        <!-- This is only visible to small devices -->
        <div class="visible-xs hidden-sm hidden-md hidden-lg">

            <h5 class="sidebartitle actitle">Account</h5>
            <ul class="nav nav-pills nav-stacked nav-bracket mb30">
              <li><a href="changepass.php"><i class="fa fa-cog"></i> <span>Change Password</span></a></li>
              <li><a href="signout.php"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
            </ul>
        </div>

      <h5 class="sidebartitle">Navigation</h5>
      <ul class="nav nav-pills nav-stacked nav-bracket">
        <li><a href="home.php"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li><a href="users.php"><i class="fa fa-users"></i> <span>View User</span></a></li>
        <li><a href="cadd.php"><i class="fa fa-desktop"></i> <span>Add Channel</span></a></li>
        <li><a href="clist.php"><i class="fa fa-table"></i> <span>Channel list</span></a></li>

        <li><a href="paymentlog.php"><i class="fa fa-dollar"></i> <span>Payment log</span></a></li>
        
<li class="nav-parent"><a href="#"><i class="fa fa-cogs"></i> <span>Website Control</span></a>
          <ul class="children">


<li class="nav-item"><a href="setgeneral.php" class="nav-link"><i class="fa fa-cogs"></i> General Setting </a></li>

<li class="nav-item"><a href="features.php" class="nav-link"><i class="fa fa-cogs"></i> Features </a></li>
<li class="nav-item"><a href="services.php" class="nav-link"><i class="fa fa-cogs"></i> Services </a></li>
<li class="nav-item"><a href="team.php" class="nav-link"><i class="fa fa-cogs"></i> Team </a></li>
<li class="nav-item"><a href="plan.php" class="nav-link"><i class="fa fa-cogs"></i> Pricing Plan </a></li>
<li class="nav-item"><a href="testimonial.php" class="nav-link"><i class="fa fa-cogs"></i> Testimonials </a></li>

<li class="nav-item"><a href="setpack.php" class="nav-link"><i class="fa fa-dollar"></i> Package Setting </a></li>
<li class="nav-item"><a href="addmenu.php" class="nav-link"><i class="fa fa-edit"></i> Add Menu</a></li>
<li class="nav-item"><a href="listmenu.php" class="nav-link"><i class="fa fa-desktop"></i> View Menu </a></li>
<li class="nav-item"><a href="setlogo.php" class="nav-link"><i class="fa fa-cogs"></i> Logo Setting</a></li>
<li class="nav-item"><a href="setslider.php" class="nav-link"><i class="fa fa-cogs"></i> Slider Setting</a></li>
<li class="nav-item"><a href="sethtxt.php" class="nav-link"><i class="fa fa-cogs"></i> Home Text Setting</a></li>



          </ul>
        </li>





                 
        

      </ul>

      

    </div><!-- leftpanelinner -->
  </div><!-- leftpanel -->

  <div class="mainpanel">

    <div class="headerbar">

      <a class="menutoggle"><i class="fa fa-bars"></i></a>


      <div class="header-right">
        <ul class="headermenu">
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">

<?php
echo "<img src=\"../uid.png\" alt=\"\" />";
echo " $user";
?>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
              <li><a href="changepass.php"><i class="fa fa-cog"></i> <span>Change Password</span></a></li>
              <li><a href="signout.php"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
              </ul>
            </div>
          </li>

        </ul>
      </div><!-- header-right -->

    </div><!-- headerbar -->
