</div>





  <div class="clearfix"></div>
  <section class="section-copyrights sec-moreless-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <span>Copyright © <?php echo date("Y"); ?> <?php echo $gen[0]; ?>. All rights reserved.</span>
          </div>
      </div>
    </div>
  </section>
  <!--end section-->
  
  <div class="clearfix"></div>
  <a href="#" class="scrollup">--</a><!-- end scroll to top of the page--> 
  
</div>
<!--end sitewraper--> 

<!-- ========== Js Files ========== -->
 
<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.2.min.js"></script>  -->

<script src="<?php echo $baseurl; ?>/asset/js/jquery-2.2.2.min.js" type="text/javascript"></script>
<script src="<?php echo $baseurl; ?>/asset/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>

<script src="<?php echo $baseurl; ?>/asset/js/mainmenu/customeUI.js"></script> 
<script src="<?php echo $baseurl; ?>/asset/js/mainmenu/jquery.sticky.js"></script> 
<script src="<?php echo $baseurl; ?>/asset/js/scrolltotop/totop.js"></script> 
<script src="<?php echo $baseurl; ?>/asset/js/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script> 
 
<script type="text/javascript" src="<?php echo $baseurl; ?>/asset/js/cubeportfolio/main.js"></script> 
<script src="<?php echo $baseurl; ?>/asset/js/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script> 
<script src="<?php echo $baseurl; ?>/asset/js/style-swicher/style-swicher.js"></script> 
<script src="<?php echo $baseurl; ?>/asset/js/style-swicher/custom.js"></script> 
<!--script src="<?php echo $baseurl; ?>/asset/js/scripts/functions.js" type="text/javascript"></script-->
<script>




      $(function() {
         var pgurl = window.location.href;



$('#navbar-collapse-grid li a').each(function(){


   var myHref= $(this).attr('href');
   if( pgurl == myHref) {
        $(this).parent().addClass("active");
   }



});

        
    });

  
  $(document).ready(function() {













  
$(window).load(function(){
      $("#header, #header2, #header3, #header4, #header5, #header6").sticky({ topSpacing: 0 });
    }); 

   }); 




</script>


</body>
</html>