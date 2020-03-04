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
                $this->load->view('menu');
                ?>
            </header>
        </div>
        <div class="menu-overlay"></div>
        <div class="services-section style-two">
            <div class="container">
                <div class="row" >
                    <form name="" method="post">
                        <div class="col-md-10  col-md-offset-1 col-sm-12 col-xs-12 contact-form default-form" style="padding: 20px;background: #f9f9f9;height: 350px;background-color: white;">
                            <center>
                                
                                <img src="<?php echo base_url();?>/visitor/images/check.gif" alt="Valid" style="height: 90px;"/>

                                <div class="col-md-12">

                                    <p style="font-size: 16px; color: black;padding-top: 20px;">Yeah, Party Successfully Added</p>
                                </div>
                                <div class="col-md-12">

                                    <p style="font-size: 16px; color: #00b7f1;padding-top: 10px;">Go to Your Profile Page </p>
                                </div>
                                <div class="col-md-12" style="padding-top: 20px;">

       <!--<a href="<?php echo base_url(); ?>Party-Dashboard" class="theme-btn btn-style-one" id="more" name="submit" >Go To Profile</a>-->
                                    <input type="submit" class="theme-btn btn-style-one" id="more" name="submit" value="Go To Profile"/>


                                </div>
                            </center>
                        </div>
                    </form>
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
