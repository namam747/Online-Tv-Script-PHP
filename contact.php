<?php 
include('header.php');
$hometxt = mysql_fetch_array(mysql_query("SELECT head, htext FROM general_setting WHERE id='1'"));
?>
<!--start-contact-info-->
    <section class="contact-info section-padding">
        <div class="container">
            <div class="row">
                <div class="section-heading">
                    <h2>contact<span>info</span></h2>
                    <div class="head-img">
                        <img src="asset/images/header.png" alt="header-img">
                    </div>
                </div>
                <div class="col-sm-6 contact-item">
                    <div class="item-icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <h2>phone</h2>
                    <p><?php echo $gen[4]; ?></p>
                </div>
                <div class="col-sm-6 contact-item">
                    <div class="item-icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <h2>e-mail</h2>
                    <p><?php echo $gen[5]; ?></p>
                </div>
                <br><br><br>
                <div class="col-sm-6 col-md-offset-3">
                                <?php
                                    if ($_POST && isset($_POST['name']) && $_POST['email'] && $_POST['text']) {
                                        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['text'])) {
                                            $msg = 'Name: ' . $_POST['name'] . '<br>';
                                            $msg .= 'Email: ' . $_POST['email'] . '<br>';
                                            $msg .= 'Message: ' . $_POST['text'] . '<br>';
                                            $res = mail( $gen[5], 'New Submission From LiveTV', $msg);
                                            if ($res) { ?>
                                                <div class="alert alert-success">Send Successfull</div>
                                            <?php } else { ?>
                                                <div class="alert alert-danger">Message Not Send</div>
                                            <?php }
                                        } else { ?>
                                            <div class="alert alert-danger">Name, Email, And Message Can Not Be Empty</div>
                                        <?php }
                                    }
                                ?>
                                </div>
            </div>
        </div>
    </section>
    <!--end-contact-info-->

    <!--start-message-section-->
    <section class="message-section login-section">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <form action="" method="POST">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input required="1" type="text" name="name" class="form-control" id="name" placeholder="Full name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input required="1" type="email" name="email" class="form-control" id="inputPassword3" placeholder="email address">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <textarea required="1" name="text" class="form-control text-area" rows="8" placeholder="Message"></textarea>
                            <button type="submit" class="btn btn-default"> Submit a message</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--end-message-section-->
<?php 
include('footer.php');
?>