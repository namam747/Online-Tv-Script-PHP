<?php
include ('include/header.php');
?>
</head>

	<body>
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
<h2 class="animated" data-animation="fadeInUp" data-animation-delay="200" style="text-align:center;">Upgrade Account</h2>
				</div>
				</div>

		<div style="margin-top:60px;"></div>
									
				<div class="row">


<?php
include ('accwarn.php');
?>

				<div class="col-md-12">
		<?php

$utype = mysql_fetch_array(mysql_query("SELECT utype FROM users WHERE id='".$uid."'"));

$payment = mysql_fetch_array(mysql_query("SELECT paypal, p1, p2, p3, p4, sitetitle FROM general_setting WHERE id='1'"));


echo "<div style=\"margin-top:60px;\"></div>";

?>


<div class="col-md-3">
<form action="https://secure.paypal.com/uk/cgi-bin/webscr" method="post" name="paypal" id="paypal">


    <input type="hidden" name="cmd" value="_xclick" />
    <input type="hidden" name="business" value="<?php echo $payment[0]; ?>" />
    <input type="hidden" name="cbt" value="<?php echo $payment[5]; ?>" />
    <input type="hidden" name="currency_code" value="USD" />
    <!-- Allow the customer to enter the desired quantity -->
    <input type="hidden" name="quantity" value="1" />
    <input type="hidden" name="item_name" value="Subscribe to a Plan" />
    <!-- Custom value you want to send and process back in the IPN -->
    <input type="hidden" name="custom" value="<?php echo $uid; ?>" />

<input name="amount" type="hidden" value="<?php echo $payment[1]; ?>">
                 

    <input type="hidden" name="return" value="<?php echo $dashurl; ?>"/>
    <input type="hidden" name="cancel_return" value="<?php echo $dashurl; ?>" />
    <!-- Where to send the PayPal IPN to. -->
    <input type="hidden" name="notify_url" value="<?php echo $dashurl; ?>/paypal-ipn.php" />


<button type="submit" class="btn btn-warning btn-block">PACK 1<br/> 7 Days - <?php echo $payment[1]; ?> USD</button>
</form>



</div>


<div class="col-md-3">
<form action="https://secure.paypal.com/uk/cgi-bin/webscr" method="post" name="paypal" id="paypal">


    <input type="hidden" name="cmd" value="_xclick" />
    <input type="hidden" name="business" value="<?php echo $payment[0]; ?>" />
    <input type="hidden" name="cbt" value="<?php echo $payment[5]; ?>" />
    <input type="hidden" name="currency_code" value="USD" />
    <!-- Allow the customer to enter the desired quantity -->
    <input type="hidden" name="quantity" value="1" />
    <input type="hidden" name="item_name" value="Subscribe to a Plan" />
    <!-- Custom value you want to send and process back in the IPN -->
    <input type="hidden" name="custom" value="<?php echo $uid; ?>" />

<input name="amount" type="hidden" value="<?php echo $payment[2]; ?>">
                 

    <input type="hidden" name="return" value="<?php echo $dashurl; ?>"/>
    <input type="hidden" name="cancel_return" value="<?php echo $dashurl; ?>" />
    <!-- Where to send the PayPal IPN to. -->
    <input type="hidden" name="notify_url" value="<?php echo $dashurl; ?>/paypal-ipn.php" />


<button type="submit" class="btn btn-info btn-block">PACK 2<br/> 3 Months - <?php echo $payment[2]; ?> USD</button>
</form>



</div>


<div class="col-md-3">
<form action="https://secure.paypal.com/uk/cgi-bin/webscr" method="post" name="paypal" id="paypal">


    <input type="hidden" name="cmd" value="_xclick" />
    <input type="hidden" name="business" value="<?php echo $payment[0]; ?>" />
    <input type="hidden" name="cbt" value="<?php echo $payment[5]; ?>" />
    <input type="hidden" name="currency_code" value="USD" />
    <!-- Allow the customer to enter the desired quantity -->
    <input type="hidden" name="quantity" value="1" />
    <input type="hidden" name="item_name" value="Subscribe to a Plan" />
    <!-- Custom value you want to send and process back in the IPN -->
    <input type="hidden" name="custom" value="<?php echo $uid; ?>" />

<input name="amount" type="hidden" value="<?php echo $payment[3]; ?>">
                 

    <input type="hidden" name="return" value="<?php echo $dashurl; ?>"/>
    <input type="hidden" name="cancel_return" value="<?php echo $dashurl; ?>" />
    <!-- Where to send the PayPal IPN to. -->
    <input type="hidden" name="notify_url" value="<?php echo $dashurl; ?>/paypal-ipn.php" />


<button type="submit" class="btn btn-primary btn-block">PACK 3<br/> 6 Month - <?php echo $payment[3]; ?> USD</button>
</form>



</div>


<div class="col-md-3">
<form action="https://secure.paypal.com/uk/cgi-bin/webscr" method="post" name="paypal" id="paypal">


    <input type="hidden" name="cmd" value="_xclick" />
    <input type="hidden" name="business" value="<?php echo $payment[0]; ?>" />
    <input type="hidden" name="cbt" value="<?php echo $payment[5]; ?>" />
    <input type="hidden" name="currency_code" value="USD" />
    <!-- Allow the customer to enter the desired quantity -->
    <input type="hidden" name="quantity" value="1" />
    <input type="hidden" name="item_name" value="Subscribe to a Plan" />
    <!-- Custom value you want to send and process back in the IPN -->
    <input type="hidden" name="custom" value="<?php echo $uid; ?>" />

<input name="amount" type="hidden" value="<?php echo $payment[4]; ?>">
                 

    <input type="hidden" name="return" value="<?php echo $dashurl; ?>"/>
    <input type="hidden" name="cancel_return" value="<?php echo $dashurl; ?>" />
    <!-- Where to send the PayPal IPN to. -->
    <input type="hidden" name="notify_url" value="<?php echo $dashurl; ?>/paypal-ipn.php" />


<button type="submit" class="btn btn-success btn-block">PACK 1<br/> 12 months - <?php echo $payment[4]; ?> USD</button>
</form>



</div>





<div style="margin-top:220px;"></div>


	


				
                </div>
				
			
				</div>
				</div>
			</article>

			

		</section>
		<!-- end Content -->

<?php
include ('include/footer.php');
?>