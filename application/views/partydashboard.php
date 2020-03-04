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

        <title>My Govrn | Dashboard Page</title><!-- Responsive -->
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

                    <h3 style="line-height: 2.6em;">Party <span class="theme_color">Zone</span></h3>
                    <span class="separator"></span>
                </div>
                <div class="auto-container">

                    <div class="row clearfix">
                        <?php
                        $this->load->view('partymiddledashboard');
                        ?> 
                        <section class="contact_us sec-padd-bottom">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9">
                                        <?php
                                        $c = $this->md->my_query("select * from tbl_party_registration where party_id=" . $this->session->userdata('party'));
                                        if ($c[0]->status == 1) {
                                            ?>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="services-block-two col-md-6" style="margin-top: 30px;" >
                                                <div class="inner-box">
                                                    <div class="content">
                                                        <p class="text-primary" style="text-align: center;font-size:30px"><?php echo $dactcandidate[0]->count; ?></p>
                                                        <p  style="text-align: center;padding-bottom: 5px;">Unblock Candidate</p>
                                                        <center>
                                                            <a class="btn btn-primary" target="_new" style="font-size: 13px;background-color: #00b7f1;border-color: #00b7f1;" href="<?php echo base_url(); ?>Unblock-Candidate">View More</a>
                                                        </center>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="services-block-two col-md-6" style="margin-top: 30px;" >
                                                <div class="inner-box">
                                                    <div class="content">
                                                        <p  style="text-align: center;font-size: 30px" class="text-primary"><?php echo $actcandidate[0]->count; ?></p>
                                                        <p  style="text-align: center;padding-bottom: 5px;">Block Candidate</p>
                                                        <center>
                                                            <a class="btn btn-primary" target="_new" style="font-size: 13px;background-color: #00b7f1;border-color: #00b7f1;" href="<?php echo base_url(); ?>Block-Candidate">View More</a>
                                                        </center>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="services-block-two col-md-6" >
                                                <div class="inner-box">
                                                    <div class="content">
                                                        <p style="text-align: center;font-size: 30px" class="text-primary"><?php echo $actreview[0]->count; ?></p>
                                                        <p  style="text-align: center;">Unblock Candidate Review</p>
                                                        <center>
                                                            <a class="btn btn-primary" target="_new" style="font-size: 13px;background-color: #00b7f1;border-color: #00b7f1;" href="<?php echo base_url(); ?>Candidate-Review">View More</a>
                                                        </center>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="services-block-two col-md-6">
                                                <div class="inner-box">
                                                    <div class="content">
                                                        <p style="text-align: center;font-size: 30px" class="text-primary"><?php echo $dactreview[0]->count; ?></p>
                                                        <p  style="text-align: center;">Block Candidate Review</p>
                                                        <center>
                                                            <a class="btn btn-primary" target="_new" style="font-size: 13px;background-color: #00b7f1;border-color: #00b7f1;" href="<?php echo base_url(); ?>Candidate-Review">View More</a>
                                                        </center>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <?php
                                    } else {
                                        ?>
                                        <center>
                                            <img src="<?php echo base_url(); ?>/visitor/images/cross.png" style="height: 150px;width:150px;margin-top: 120px;"/>
                                            <p style="font-size: 20px;color: #e94e38;display: block;z-index: -9999;position: static">You are not activated party!</p>
                                            <span style="font-size: 12px;">NOTE :</span> <mark style="font-size: 12px;">Only valid voter can cast vote, for more info contact to admin. </mark><a href="<?php echo base_url(); ?>Contact-Us" target="_blank" style="font-size: 13px;color: blue">Contact Now</a>
                                        </center>
                                        <?php
                                    }
                                    ?>
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
    <?php
    $this->load->view('footerscript');
    ?>

</html>
