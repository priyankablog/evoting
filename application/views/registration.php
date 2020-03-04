<!DOCTYPE html>
<html>


    <head>
        <meta charset="utf-8">
        <link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
        <link href="bootstrap-3.3.7-dist/css/bootstrap-theme.css" rel="stylesheet">


        <title>My Govrn | Registration Page</title>
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
        <div class="services-section style-two">
            <div class="container">

                <div class="row">
                    <div class="col-md-6">
                        <div class="sec-title" style="margin-top: -70px;">

                            <h3 style="line-height: 2.6em;">Why Choose <span class="theme_color">E-Voting ?</span></h3>
                            <span class="separator"></span>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-2" style="padding-top: 18px;">
                                <div class="point-img white"><img src="<?php echo base_url(); ?>visitor/images/locked.png" alt="Secure"></div>

                            </div>
                            <div class="col-md-10">
                                <h3 class="heading">Secure</h3>
                                <p class="font" style="text-align: justify;">Voting pages are encrypted for your security. View the demonstration poll and see the lock icon to the left of the address bar.</p>

                            </div>


                        </div>
                        <div class="col-md-12">
                            <hr>
                        </div>
                        <div class="col-xs-12   ">
                            <div class="col-md-2"  style="padding-top: 18px;">
                                <div class="point-img white"><img src="<?php echo base_url(); ?>visitor/images/shake-hands.png" alt="Reliable"></div>
                            </div>
                            <div class="col-md-10">
                                <h3 class="heading">Reliable</h3>
                                <p class="font" style="text-align: justify;">MyGovrn runs on Google servers for maximum reliability and scalability. Use the same infrastructure that powers Google search.</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <hr>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-md-2" style="padding-top: 18px;">
                                <div class="point-img white"><img src="<?php echo base_url(); ?>visitor/images/private.png" alt="Private"></div>
                            </div>
                            <div class="col-md-10">
                                <h3 class="heading">Private</h3>
                                <p class="font" style="text-align: justify;">Voter email addresses are not shared and not used for any purposes outside of the election. See our privacy policy for more details.</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 contact-form default-form">
                        <div class="sec-title" style="margin-top: -70px;">

                            <h3 style="line-height: 2.6em;"><span class="theme_color">Voter</span> Registration</h3>
                            <span class="separator"></span>
                        </div>
                        <div  style="padding: 20px;background: #f9f9f9;box-shadow: 0 0 0 2px #eee,0 0 0 7px #fff,0 0 0 9px #eee;background-color: #ffffff;">
                            <form id="form1" method="post" action="" autocomplete="off">

                                <div class="form-group">

                                    <div class="group-inner">
                                        <label name="name" class="">Full Name</label>

                                        <input class="form-control <?php
                                        if (form_error('name')) {
                                            echo "error_style";
                                        }
                                        ?>" name="name"  id="fname" placeholder="Full Name" type="text"value="<?php
                                               if (!isset($success)) {
                                                   echo set_value('name');
                                               }
                                               ?>">
                                        <!--<p class="<?php
                                        if (form_error('name')) {
                                            echo "error_msg";
                                        }
                                        ?>"><?php
                                        if (form_error('name')) {
                                            echo form_error('name');
                                        }
                                        ?></p>-->
                                        <p class="err_msg"><?php echo form_error('name'); ?>
                                        </p>
                                    </div>

                                    <div class="group-inner">
                                        <label name="email" class="">Email</label>

                                        <input class="form-control  <?php
                                        if (form_error('email')) {
                                            echo "error_style";
                                        }
                                        ?>" name="email" id="email" placeholder="Email Address" type="email" value="<?php
                                               if (!isset($success)) {
                                                   echo set_value('email');
                                               }
                                               ?>">
                                        <p class="err_msg"><?php echo form_error('email'); ?>
                                        </p>
                                    </div>
                                    <div class="group-inner">
                                        <label name="phno" class="">Phone No</label>

                                        <input class="form-control <?php
                                        if (form_error('phone')) {
                                            echo "error_style";
                                        }
                                        ?>" name="phone" id="phno" placeholder="Phone Number" type="text" maxlength="10" value="<?php
                                               if (!isset($success)) {
                                                   echo set_value('phone');
                                               }
                                               ?>"/>
                                        <p class="err_msg"><?php echo form_error('phone'); ?>
                                        </p>
                                    </div>
                                    <div class="group-inner">
                                        <label name="epassword" style="padding-bottom: 0px !important;" class="">Password</label>
                                        <div class="input-group" style="margin-top: 0px !important;padding-top:0px !important;">
                                            <input class="passme form-control <?php
                                            if (form_error('password')) {
                                                echo "error_border_msg";
                                            }
                                            ?>" name="password" id="password" placeholder="Password" type="password" style="border-right:none !important;" value="<?php
                                                   if (!isset($success)) {
                                                       echo set_value('password');
                                                   }
                                                   ?>">
                                            <div class="input-group-addon  <?php
                                            if (form_error('password')) {
                                                echo "error_border_pass";
                                            }
                                            ?>" style="border-left: none !important;background: transparent !important;border: 1px solid #f4f4f4;"><label class="eye" style="background: transparent !important;color: black;width:30px;text-align: center; margin-top: -30px;">Show</label></div>

                                        </div>
                                        <p class="err_msg"><?php echo form_error('password'); ?>
                                        </p>

                                    </div>

                                    <div class="row"  style="margin-top: 2%">
                                        <div class="col-md-6">
                                            <label style="font-weight: normal">
                                                <input class="" name="chkbox" style="width: auto;line-height: none;height: auto" type="checkbox">&nbsp;Remember Me!
                                            </label>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 20px;padding: 0px;">
                                        <input type="submit" class="theme-btn btn-style-one" name="submit" value="Registartion"/>
                                        <div class="" style="padding-top: 20px;font-size: 12px;">By Clicking on "Registration" Button you accept all the <a href="<?php echo base_url(); ?>Terms-And-Condition" class="text" target="_new !important;" style="font-size: 12px;">Terms and Condition</a> of MyGovrn.</div>

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 20px;padding: 0">
                                        <?php
                                        if (isset($success)) {
                                            ?>
                                            <div class="alert alert-success" role="alert">
                                                <?php echo $success; ?>
                                            </div>
                                            <?php
                                        }
                                        if (isset($error)) {
                                            ?>
                                            <div class="alert alert-warning" role="alert">
                                                <?php echo $error; ?>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <?php
        $this->load->view('footer');
        ?>
    </body>
    <?php
    $this->load->view('footerscript');
    ?>
    <script type="text/javascript" src="<?php echo base_url(); ?>visitor/js/set.js"></script>
</html>
