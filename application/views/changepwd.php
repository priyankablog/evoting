<html>


    <head>
        <meta charset="utf-8">
        <link href="<?php echo base_url(); ?>visitor/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>visitor/bootstrap-3.3.7-dist/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>visitor/css/mycss.css" rel="stylesheet">

        <?php
        $this->load->view('headlink');
        ?>
        <!-- Stylesheets -->

        <title>My Govrn | Change-Password Page</title><!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    </head>
    <body style="overflow-x: hidden">
        <div class="page-wrapper">



            <!-- Main Header / Header Style Two -->
            <header class="main-header header-style-two">
                <?php
                $this->load->view('header');
                ?>

                <?php
                $this->load->view('middleheader');
                $this->load->view('menu');
                ?>
            </header>
        </div>
        <div class="menu-overlay"></div>
        <section class="services-section style-two">
            <div class="container">
                <div class="sec-title" style="margin-top: -70px;">

                    <h3 style="line-height: 2.6em;">Voter <span class="theme_color">Zone</span></h3>
                    <span class="separator"></span>
                </div>
                <div class="auto-container">

                    <div class="row clearfix">
                    <?php
                    $this->load->view('middledashboard');
                    ?>    
                        <section class="contact_us sec-padd-bottom" style="margin-bottom: -130px;"> 
                        <div class="container">
                            <div class="row">

                                <div class="col-md-4" id="mycss1" style="padding: 40px;background: #fff;box-shadow: 0 0 0 2px #eee,0 0 0 7px #fff,0 0 0 9px #eee; height: 70%;margin-left: 26px;margin-top: 28px;width:398px;">
                                    <div class="row">
                                        <div class="">
                                            <div class="section-title">
                                                <h3 class="myhead">Change Password</h3>

                                            </div>
                                            <div class="default-form-area" id="css1">
                                                <form name="contact_form" class="default-form" method="post">
                                                    <div class="form-group">

                                                        <div class="group-inner">
                                                            <label id="new" class="">New Password</label>

                                                            <input class="form-control <?php
                                                            if (form_error('npwd')) {
                                                                echo "error_style";
                                                            }
                                                            ?>" name="npwd" id="newpwd" placeholder="New Password" type="password"> 
                                                            <p class="err_msg"><?php echo form_error('npwd'); ?>
                                                            </p>
                                                        </div>
                                                        <div class="group-inner">
                                                            <label id="confirm" class="">Confirm Password</label>

                                                            <input class="form-control <?php
                                                            if (form_error('rpwd')) {
                                                                echo "error_style";
                                                            }
                                                            ?>" name="rpwd" id="conpwd" placeholder="Confirm Password" type="password">
                                                            <p class="err_msg"><?php echo form_error('rpwd'); ?>
                                                            </p>
                                                        </div><br>
                                                        <div class="form-group">
                                                            <input type="submit" class="theme-btn btn-style-one" value="Change Password" name="changepwd"/>
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
                                                    ?>
                                                    
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                               
                                <div class="col-md-4" id="mycss1" style="padding: 40px;background: #fff;box-shadow: 0 0 0 2px #eee,0 0 0 7px #fff,0 0 0 9px #eee;height: 70%;margin-left: 26px;margin-top: 28px;width:398px;" >
                                    <div class="row">
                                        <div class="">
                                            <div class="section-title">
                                                <h3 class="myhead">Edit Profile</h3>

                                            </div>
                                            <div class="default-form-area" id="css1">
                                                <form name="idproof_form" class="default-form" method="post" enctype="multipart/form-data">
                                                    <div class="form-group">

                                                        <div class="group-inner">
                                                            <label id="new" class="">Select Profile</label>

                                                            <input class="form-control <?php
                                                            if (isset($error1)) {
                                                                echo "error_style";
                                                            }
                                                            ?>" onchange="readURL(this);" name="profile" type="file"> 
                                                            <p class="err_msg"> <?php
                                                                if (isset($error1)) {
                                                                    echo $error1;
                                                                }
                                                                ?></p>
                                                        </div><br>

                                                        <div class="form-group">
                                                            <input type="submit" class="theme-btn btn-style-one" value="Submit" name="changeprofile"/>
                                                        </div>
                                                    </div>


                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </section>
                </div>
            </div>  
        </div>
        </section>
    <?php
    $this->load->view('footer');
    ?>

</body>
<script src="<?php echo base_url(); ?>/visitor/js/set.js" type="text/javascript"></script>
<?php
$this->load->view('footerscript');
?>

</html>
