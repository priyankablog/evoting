<html>


    <head>
        <meta charset="utf-8">
        <link href="<?php echo base_url(); ?>visitor/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>visitor/bootstrap-3.3.7-dist/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>visitor/css/mycss.css" rel="stylesheet">
        <title>Phone Verification</title>
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
                                <h3 class="myhead">Phone Verification</h3>

                            </div>

                            <div class="default-form-area" id="css1">
                                <form name="contact_form" class="default-form" method="post">
                                    <p style="color: #000;font-size: 15px">Enter Your Registered Mobile Number for getting your forgot password.</p>
                                    <br>
                                    <div class="row clearfix form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="group-inner">
                                                <div class="form-group">
                                                    <input name="code" autofocus="" class="form-control required email" maxlength="6" placeholder="XXXXXX" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <input name="oldcode" class="form-control" value="<?php echo $this->session->userdata('code'); ?>"  type="hidden" placeholder="XXXXXX">
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <button type="submit" value="11" class="theme-btn btn-style-one" name="verify">Verify Now</button>
                                        
                                            <button type="submit" value="34" class="theme-btn btn-style-one" name="resend">Resend Now</button>
                                        </div>
                                            <div class="form-group  col-md-12 col-sm-12 col-xs-12">
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
