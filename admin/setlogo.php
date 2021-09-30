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
      <h2><i class="fa fa-cog"></i> SET LOGO</h2>
    </div>

    
    <div class="contentpanel">
      <div class="panel panel-default">

        <div class="panel-body">
<div class="row">
<div class="col-md-6">

<form action="logo.php" method="post" enctype="multipart/form-data" >
                 
            <div class="form-group">
              <div class="col-sm-6"><label for="bgimg" class="control-label">Logo</label></div>
              <div class="col-sm-6"><input name="bgimg" type="file" id="bgimg" /></div>
            </div>

            <div class="form-group">
              <div class="col-sm-6"><label for="icon" class="control-label">Logo</label></div>
              <div class="col-sm-6"><input name="icon" type="file" id="icon" /></div>
              <br>
              <br>
              <div class="col-sm-6"> <button type="submit" class="btn btn-primary btn-block">UPLOAD</button></div>
            </div>
                
          </form>

</div>

          
        <div class="col-md-6">  
        
Current Image : <br/><br/><br/><img src="../logo.png"  alt="IMG">
</div>

        <div class="col-md-6 col-md-offset-6">  
        
Current Icon : <br/><br/><br/><img src="../icon.png"  alt="IMG">
</div>



</div>


<?php
include ('include/footer.php');
?>


</body>
</html>