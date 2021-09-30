    <!--start-footer-->
    <footer>
        <div class="footer-top">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4  col-sm-6 footer-bottom-widget">
                            <div class="section-heading">
                                <h2><span>ABOUT US</span></h2>
                                <div class="head-img">
                                    <img src="<?php echo $baseurl; ?>/asset/images/header.png" alt="header-img">
                                </div>
                            </div>
                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <img src="logo.png" alt="footer-logo">
                                </div>
                                <p><?php echo $about['text']; ?></p>
                                <div class="address-box">
                                    <ul class="address">
                                        <li>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <span><?php echo $gen[4]; ?></span>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                            <span><?php echo $gen[5]; ?></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="social-icon">
                                    <ul>
                                        <?php 
                                            foreach ($social as $key => $value) {
                                        ?>
                                            <li><a href="<?php echo $value; ?>"><i class="fa fa-<?php echo $key; ?>" aria-hidden="true"></i></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 footer-bottom-widget">
                            <div class="section-heading">
                                <h2><span>all services</span></h2>
                                <div class="head-img">
                                    <img src="<?php echo $baseurl; ?>/asset/images/header.png" alt="header-img">
                                </div>
                            </div>
                            <div class="footer-widget">
                                <div class="services">
                                    <ul>
                                        <?php
                                            $servstmt = mysql_query('SELECT name FROM services ORDER BY RAND() LIMIT 6');
                                            while($i = mysql_fetch_array($servstmt)){
                                        ?>
                                        <li><?php echo $i[0]; ?></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 footer-bottom-widget">
                            <div class="section-heading">
                                <h2><span>feeadback</span></h2>
                                <div class="head-img">
                                    <img src="<?php echo $baseurl; ?>/asset/images/header.png" alt="header-img">
                                </div>
                            </div>
                            <div class="footer-widget">

                                <form action="<?php echo $baseurl; ?>/contact.php" method="POST">
                                    <input required="1" type="text" name="name" placeholder="name">
                                    <input required="1" type="email" name="email" placeholder="email">
                                    <textarea required="1" name="text" class="form-control text-area" rows="5" placeholder="Message"></textarea>
                                    <input type="submit" value="send message">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p>&copy; <?php echo date('Y'); ?> <?php echo $gen[0]; ?>. All rights Reserved.</p>
                    </div>

                    <div class="col-sm-6">
                        <div class="footer-content">
                            <ul>
                                <li><a href="<?php echo $baseurl; ?>">home</a></li>
                                    <?php 
                                    $ddaa = mysql_query("SELECT id, name FROM menus ORDER BY RAND() LIMIT 4");
                                    while ($data = mysql_fetch_array($ddaa))
                                    {
                                    $uri = urlmod($data[1]);
                                    ?>
                                      <li>
                                          <a href="<?php echo "$baseurl/menu/$data[0]/$uri"; ?>">
                                              <?php echo $data[1];  ?>
                                          </a>
                                      </li>

                                    <?php 
                                    }
                                    ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--end-footer-->

    <!--start-scroll- up-->
    <div class="scrollUp" id="return-to-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
    <!--end-scroll- up-->
    <script type='text/javascript' src="<?php echo $baseurl; ?>/asset/js/plugins.js"></script>
    <script type='text/javascript' src="<?php echo $baseurl; ?>/asset/js/colors.js"></script>
    <script type='text/javascript' src="<?php echo $baseurl; ?>/asset/js/custom.js"></script>
    <script type='text/javascript'>
        /*----counter-up----*/
        var a = 0;
        $(window).scroll(function() {
            var oTop = $('.counter-section').offset().top - window.innerHeight;
            if (a == 0 && $(window).scrollTop() > oTop) {
                $('.counter-value').each(function() {
                    var $this = $(this),
                        countTo = $this.attr('data-count');
                    $({
                        countNum: $this.text()
                    }).animate({
                        countNum: countTo
                    }, {
                        duration: 2000,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                            //alert('finished');
                        }
                    });
                });
                a = 1;
            }
        });

    </script>

</body>
</html>
