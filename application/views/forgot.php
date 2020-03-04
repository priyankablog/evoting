<html>


    <head>
        <meta charset="utf-8">
        <link href="<?php echo base_url(); ?>visitor/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>visitor/bootstrap-3.3.7-dist/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>visitor/css/mycss.css" rel="stylesheet">
        <title>Change-Password</title>
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
                                                            <input type="submit" class="theme-btn btn-style-one" value="Change Password" name="change"/>
                                                        </div>
                                                        
                                                    </div>
                                     
                                    <div class="">
                                                    <?php
                                                   
                                                    if (isset($success)) {
                                                        ?>
                                                        <div class="alert alert-warning" role="alert">
                                                            <?php echo $success; ?>
                                                        </div>     
                                                        <?php
                                                    }
                                                    ?>
                                        </div>  
                                     <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <a href="<?php echo base_url();?>Home"style="font-size: 15px"> <i class="fa fa-arrow-circle-left"></i> Back to login page</a>
                                            </div>
                                        </div> 
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
