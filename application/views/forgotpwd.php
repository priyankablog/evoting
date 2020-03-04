<html>


    <head>
        <meta charset="utf-8">
        <link href="<?php echo base_url(); ?>visitor/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>visitor/bootstrap-3.3.7-dist/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>visitor/css/mycss.css" rel="stylesheet">
        <title>Forgot-Password</title>
        <?php
        $this->load->view('headlink');
        ?>
        <!-- Stylesheets -->

        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    </head>
    <body>
        <div class="page-wrapper">

            <!-- Main Header / Header Style Two -->
            <header class="main-header header-style-two">
                <?php
                $this->load->view('header');
                ?>

                <?php
                $this->load->view('middleheader');
                ?>
                <?php
                $this->load->view('menu');
                ?>
            </header>
        </div>
        <div class="menu-overlay"></div>
        <div class="mycss2">
            <section class="contact_us sec-padd-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6  col-md-offset-3 col-sm-12 col-xs-12" id="mycss1" style="padding: 20px;background: #fff;box-shadow: 0 0 0 2px #eee,0 0 0 7px #fff,0 0 0 9px #eee">
                            <div class="section-title">
                                <h3 class="myhead">Password Recovery</h3>


                            </div>
                            <div class="row" style="padding-left:20px;">
                                <label style="font-weight: normal;zoom:1.5;vertical-align: sub;" onclick="$('#voterpart').hide();$('#partypart').show();"><input type="radio" name="login" value="party" />&nbsp;Party&nbsp;&nbsp;</label>
                                <label style="font-weight: normal;zoom:1.5;vertical-align: sub;" onclick="$('#partypart').hide();$('#voterpart').show();"><input type="radio" name="login" value="voter" checked="" />&nbsp;Voter</label>
                            </div>
                            
                            <div class="default-form-area voter" id="voterpart">

                                <p class="font-20 grey" style="font-style: normal;font-size: 22px;color: #888888;">Why we ask for Phone Verification?</p>
                                <p style="font-style: normal;color: #888888;">Phone confirmation is an important security check that helps prevent other people from signing up for an Perfect MyGovrn account using your Phone Number.</p>
                                <form method="post" class="mt-10">

                                    <input type="hidden" value="<?php echo $this->session->userdata('smscode'); ?>" name="oldcode"/> 
                                    <p class="font-12 text-black">A text message with a verification code was just sent to your registered phone number.  </p>
                                    <label class="pl-5">Enter your Phone Number</label>
                                    <div class="group pl-10" style="margin-top: 10px;">
                                        <input name="phone"  class="form-control required email <?php
                                        if (form_error('phone')) {
                                            echo "error_style";
                                        }
                                        ?>" placeholder="XXX XXX XXXX" type="text" maxlength="10">

                                        <span class="highlight"></span><span class="bar"></span>

                                        <p class="err_msg">
                                            <?php
                                            if (form_error('phone')) {
                                                echo form_error('phone');
                                            }
                                            ?>
                                        </p>
                                    </div>  

                                    <button type="submit" style="margin-top: 30px;" class="theme-btn btn-style-one" name="send" value="send">Send OTP Now</button>
                                    <div class="" style="margin-top: 20px;">
                                        <?php
                                        if (isset($error)) {
                                            ?>
                                            <div class="alert alert-warning" role="alert">
                                                <?php echo $error; ?>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </form>  
                            </div>
                            
                            <div class="default-form-area party" id="partypart" style="display: none">

                                <p class="font-20 grey" style="font-style: normal;font-size: 22px;color: #888888;">Why we ask for Email Verification?</p>
                                <p style="font-style: normal;color: #888888;">Email confirmation is an important security check that helps prevent other people from signing up for an Perfect MyGovrn account using your Email Address.</p>
                                <form method="post" class="mt-10">

                                    <input type="hidden" value="<?php echo $this->session->userdata('smscode'); ?>" name="oldcode"/> 
                                    <p class="font-12 text-black">A text message with a verification code was just sent to your registered email address.  </p>
                                    <label class="pl-5">Enter your Email Address</label>
                                    <div class="group pl-10" style="margin-top: 10px;">
                                        <input name="email"  class="form-control required email <?php
                                        if (form_error('email')) {
                                            echo "error_style";
                                        }
                                        ?>" placeholder="Enter Email Address" type="text">

                                        <span class="highlight"></span><span class="bar"></span>

                                        <p class="err_msg">
                                            <?php
                                            if (form_error('email')) {
                                                echo form_error('email');
                                            }
                                            ?>
                                        </p>
                                    </div>  

                                    <button type="submit" style="margin-top: 30px;" class="theme-btn btn-style-one" name="sendotp" value="send">Send OTP Now</button>
                                    <div class="" style="margin-top: 20px;">
                                        <?php
                                        if (isset($error)) {
                                            ?>
                                            <div class="alert alert-warning" role="alert">
                                                <?php echo $error; ?>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </form>  
                            </div>


                        </div>
                    </div>
                </div>

            </section>
        </div>
        <?php
        $this->load->view('footer');
        ?>

    </body>
    <?php
    $this->load->view('footerscript');
    ?>

</html>
