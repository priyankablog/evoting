<html>


    <head>
        <meta charset="utf-8">
        <link href="<?php echo base_url();?>visitor/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url();?>visitor/bootstrap-3.3.7-dist/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo base_url();?>visitor/css/mycss.css" rel="stylesheet">
        <title>My Govrn | Verify-Email Page</title>
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

            <!-- Preloader -->
            <div class="preloader"></div> 

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
                            <h3 class="myhead">Verify Your Email</h3>
                                              
                       </div>
                        
                        <div class="default-form-area" id="css1">
                            <form name="contact_form" class="default-form" method="post">
                                <p style="color: #000;font-size: 15px">Enter Your Registered Email Address for getting your forgot password.</p>
                                <br>
                                <div class="row clearfix">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input name="email" autofocus="" class="form-control required email" placeholder="Enter Email Address" type="email">
                                        </div>
                                    </div> 
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <a href="<?php echo base_url();?>Login" style="font-size: 15px"> <i class="fa fa-arrow-circle-left"></i> Back to login page</a>
                                        </div>
                                    </div> 
                                     <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" class="theme-btn btn-style-one">Submit </button>
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
