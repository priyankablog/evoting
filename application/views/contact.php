<!DOCTYPE html>
<html>


    <head>
        <meta charset="utf-8">
        <title>My Govrn | Contact Page</title>
        <!-- Stylesheets -->
        <?php
        $this->load->view('headlink');
        ?>



        <!--Favicon-->
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



                <!--Page Title-->
                <section class="page-title" style="background-image: url(<?php echo base_url(); ?>visitor/images/background/contact_us_savers.jpg); background-size: 100%; background-position: right bottom;">
                    <div class="auto-container">
                        <h1>Contact</h1>
                        <ul class="bread-crumb">
                            <li><a href="<?php echo base_url(); ?>Home">Home</a></li>
                            <li class="active">Contact</li>
                        </ul>
                    </div>
                </section>
                <!--End Page Title-->

                <div class="services-section style-two">
                    <section class="contact-section" style="margin-top: -150px;margin-bottom: -40px;">
                        <div class="auto-container">
                            <div class="row clearfix">

                                <!--Form Column-->
                                <div class="column form-column col-md-7 col-sm-12 col-xs-12">
                                    <div class="default-title"><h3>Send Us Message</h3><div class="separator"></div></div>
                                    <div class="contact-form default-form">
                                        <form id="form1" method="post" action="">
                                            <div class="form1 row clearfix">

                                                <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                                    <div class="group-inner"> 
                                                        <input type="text" class="form-control <?php
                                                        if (form_error('name')) {
                                                            echo "error_style";
                                                        }
                                                        ?>" name="name" id="p-name"  placeholder="Name *" value="<?php
                                                               if (!isset($success)) {
                                                                   echo set_value('name');
                                                               }
                                                               ?>"/>

                                                    </div>
                                                    <p class="err_msg"><?php echo form_error('name'); ?>
                                                    </p>
                                                </div>

                                                <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                                    <div class="group-inner">
                                                        <input type="text" class="form-control <?php
                                                        if (form_error('email')) {
                                                            echo "error_style";
                                                        }
                                                        ?>" name="email" id="p-email" placeholder="Email *" value="<?php
                                                               if (!isset($success)) {
                                                                   echo set_value('email');
                                                               }
                                                               ?>"/>

                                                    </div>
                                                    <p class="err_msg"><?php echo form_error('email'); ?>
                                                    </p>
                                                </div>

                                                <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                                    <div class="group-inner">
                                                        <input type="text" class="form-control <?php
                                                        if (form_error('phone')) {
                                                            echo "error_style";
                                                        }
                                                        ?>" name="phone" id="p-number" placeholder="Phone" value="<?php
                                                               if (!isset($success)) {
                                                                   echo set_value('phone');
                                                               }
                                                               ?>" maxlength="10"/>

                                                    </div>
                                                    <p class="err_msg"><?php echo form_error('phone'); ?>
                                                    </p>
                                                </div>

                                                <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                                    <div class="group-inner">
                                                        <input type="text" class="form-control <?php
                                                        if (form_error('subject')) {
                                                            echo "error_style";
                                                        }
                                                        ?>" name="subject" id="p-subject" placeholder="Subject"value="<?php
                                                               if (!isset($success)) {
                                                                   echo set_value('subject');
                                                               }
                                                               ?>"/>

                                                    </div>
                                                    <p class="err_msg"><?php echo form_error('subject'); ?>
                                                    </p>
                                                </div>

                                                <div class="form-group col-md-12 col-sm-12 col-xs-12">

                                                    <div class="group-inner">
                                                        <textarea class="form-control <?php
                                                        if (form_error('message')) {
                                                            echo "error_style";
                                                        }
                                                        ?>" name="message" id="p-destination" placeholder="Message *"value=""><?php
                                                                  if (!isset($success)) {
                                                                      echo set_value('message');
                                                                  }
                                                                  ?></textarea>

                                                    </div>
                                                    <p class="err_msg"><?php echo form_error('message'); ?>
                                                    </p>
                                                </div>
                                                 <div class="col-md-12">
                                            <div class="g-recaptcha" data-sitekey="6LdC9lMUAAAAAORixUtNglnBOxjTmtqzhfx9fjEX"></div>
                                            <p class="err_msg">
                                                <?php if(form_error('g-recaptcha-response')){ echo form_error('g-recaptcha-response'); }  ?>
                                            </p>
                                        </div>

                                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                    <button type="submit" name="submit" value="submit" class="theme-btn btn-style-one">SUBMIT </button>
                                                </div>


                                            </div>
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

                                        </form>
                                    </div>


                                </div>

                                <!--Info Column-->
                                <div class="column info-column col-md-5 col-sm-12 col-xs-12">

                                    <div class="inner-box">
                                        <!--Default Title-->
                                        <div class="default-title"><h3>Contact Us</h3><div class="separator"></div></div>
                                        <!--Contact Info-->
                                        <div class="contact-info">
                                            <ul>
                                                <li><span class="icon flaticon-placeholder"></span>Wadia Women's College Campus, Athwa Lines, Surat</li>
                                                <li><span class="icon flaticon-envelope"></span>mygovrn@gmail.com</li>
                                                <li><span class="icon flaticon-phone-call"></span>+91 757 490 7598</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>

                    <!--Map Section-->
                    <section class="map-section" style="margin-bottom: -49px;">
                        <div class="map-outer">
                            <!--Map Canvas-->
                            <!--                        <div class="map-canvas"
                                                         data-zoom="13"
                                                         data-lat="-37.817085"
                                                         data-lng="144.955631"			  
                                                         data-type="roadmap"
                                                         data-hue="#ffc400"
                                                         data-title="Envato"
                                                         data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>"							
                                                         style="height: 450px;">
                                                    </div>-->

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59520.77319032188!2d72.81541116245454!3d21.190239186233775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e79cd053f01%3A0x717eeac42634794!2sZ.F.+Wadia+Womens+College+%26+N.K.+Jhota+College+Of+Commerce!5e0!3m2!1sen!2sin!4v1519884264689" width="1280" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </section>
                </div>
                <!--End Map Section-->
            </header>

            <?php
            $this->load->view('footer');
            ?>


        </div>


        <?php
        $this->load->view('footerscript');
        ?>
        <!--Google Map APi Key-->

<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI"></script>-->
        <script src="<?php echo base_url(); ?>visitor/js/map-script.js"></script>
        <!--End Google Map APi-->

        

    </body>


</html>
