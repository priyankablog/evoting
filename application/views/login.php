<!DOCTYPE html>
<html>


    <head>
        <meta charset="utf-8">
        <link href="<?php echo base_url(); ?>visitor/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>visitor/bootstrap-3.3.7-dist/css/bootstrap-theme.css" rel="stylesheet">
        <title>My Govrn | Login Page</title>
        <?php
        $this->load->view('headlink');
        ?>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    </head>
    <body>
        <div class="page-wrapper">

            <!-- Preloader -->


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
                <div class="row" >
                    <div class="col-md-6  col-md-offset-3 col-sm-12 col-xs-12 contact-form default-form" style="padding: 20px;background: #f9f9f9;box-shadow: 0 0 0 2px #eee,0 0 0 7px #fff,0 0 0 9px #eee;height: 680px;background-color: white;">
                        <form id="form1" method="post" action="" autocomplete="off">

                            <div class="col-md-12 col-sm-12 col-xs-12 " style="margin-bottom: 20px;padding: 0">
                                <h3 class="myhead">Already Registered Member</h3>
                            </div>

                            <div class="form-group">

                                <div class="group-inner">
                                    <label name="">Login as a</label>
                                </div>
                                <div class="row" style="padding-left:20px;">
                                    <label style="font-weight: normal;zoom:1.5;font-size: 11px"><input type="radio" name="login" value="party" style="vertical-align: sub" />&nbsp;Party&nbsp;&nbsp;</label>
                                    <label style="font-weight: normal;zoom:1.5;font-size: 11px"><input type="radio" name="login" value="voter" style="vertical-align: sub"/>&nbsp;Voter</label>
                                    <p class="err_msg"><?php echo form_error('login'); ?>
                                    </p>
                                </div>

                                <div class="group-inner">
                                    <label name="email" class="">Email</label>

                                    <input class="form-control <?php
                                    if (form_error('email')) {
                                        echo "error_style";
                                    }
                                    ?>" name="email" id="email" placeholder="Email Id" type="email"value="<?php
                                           if (!isset($success)) {
                                               echo set_value('email');
                                           }
                                           if (get_cookie('email')) {
                                               echo get_cookie('email');
                                           }
                                           ?>">
                                    <p class="err_msg"><?php echo form_error('email'); ?>
                                    </p>
                                </div> 
                                <div class="group-inner">
                                    <label name="password" style="padding-bottom: 0px !important;" class="">Password</label>
                                    <div class="input-group" style="margin-top: 0px !important;padding-top:0px !important;">
                                        <input class="passme form-control <?php
                                        if (form_error('password')) {
                                            echo "error_border_msg";
                                        }
                                        ?>" name="password" id="password" placeholder="Password" type="password" style="border-right:none;" value="<?php
                                               if (!isset($success)) {
                                                   echo set_value('password');
                                               }
                                               if (get_cookie('password')) {
                                                   echo get_cookie('password');
                                               }
                                               ?>" style="border: none;box-shadow: none;">
                                        <div class="input-group-addon <?php
                                        if (form_error('password')) {
                                            echo "error_border_pass";
                                        }
                                        ?>" style="border-left: none !important;background: transparent !important;border: 1px solid #f4f4f4;"><label class="eye" style="background: transparent !important;color: black;width:30px;text-align: center; margin-top: -30px;">Show</label></div>

                                    </div>
                                    <p class="err_msg"><?php echo form_error('password'); ?>
                                    </p>


                                </div>
                                <div class="row"  style="margin-top: 2%;"> 
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label style="font-weight: normal">
                                                    <input class="" name="svp" style="width: auto;line-height: none;height: auto" type="checkbox" value="yes"
                                                    <?php
                                                    if (get_cookie('email')) {
                                                        echo "checked";
                                                    }
                                                    ?>
                                                           >&nbsp;Remember Me!
                                                </label>
                                            </div>
                                            <div class="col-md-4 " style="padding-left: 50px;">
                                                <a href="<?php echo base_url(); ?>Forgot-Password">Forgot Password?</a>
                                            </div>
                                        </div>


                                    </div>

                                </div>

                            </div>
                            <br/>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <input type="submit" class="theme-btn btn-style-one" id="more" value="Login" name="submit" />
                                <div class="" style="padding-top: 20px;font-size: 12px;">By Clicking on "Login" Button you accept all the <a href="<?php echo base_url(); ?>Terms-And-Condition" class="text" target="_new !important" style="font-size: 12px;">Terms and Condition</a> of MyGovrn.</div>

                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="col-md-6">
                                    <a href="<?php echo base_url(); ?>Add-Party" class="theme-btn btn-style-one" id="more"  name="submit" >Party Registration</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="<?php echo base_url(); ?>Registration" class="theme-btn btn-style-one" id="more" name="submit" >Voter Registration</a>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-12">
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
