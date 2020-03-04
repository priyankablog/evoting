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

                    <h3 style="line-height: 2.6em;">Voter <span class="theme_color">Zone</span></h3>
                    <span class="separator"></span>
                </div>
                <div class="auto-container">

                    <div class="row clearfix">
                        <?php
//                   $this->load->view('middledashboard');
                        $this->load->view('middledashboard');
                        ?> 

                        <div class="" style="background: #f8f8f8;padding: 40px;text-align: center;">
                            <?php
                            $c = $this->md->my_query("select * from tbl_voter_registration where voter_id=" . $this->session->userdata('voter'));
                            if ($c[0]->status == 1) {
                                ?>
                                <center>
                                    <img src="<?php echo base_url(); ?>/visitor/images/approve.png" style="height: 150px;width:150px;margin-top: 50px;"/>
                                    <p style="font-size: 20px;color: green;display: block;z-index: -9999;position: static">You are now activated voter!</p>
                                    <mark style="font-size: 12px;">Now, you can cast your valuable vote to any party, for more info contact to admin. </mark><a href="<?php echo base_url();?>Contact-Us" target="_blank" style="font-size: 13px;color: blue">Contact Now</a>
                                </center>
                                <?php
                            } else {
                                ?>
                                <center>
                                    <img src="<?php echo base_url(); ?>/visitor/images/invalid.png" style="height: 150px;width:150px;margin-top: 50px;"/>
                                    <p style="font-size: 20px;color: #e94e38;display: block;z-index: -9999;position: static">You are not activated voter!</p>
                                    <span style="font-size: 12px;">NOTE :</span> <mark style="font-size: 12px;">Only valid voter can cast vote, for more info contact to admin. </mark><a href="<?php echo base_url();?>Contact-Us" target="_blank" style="font-size: 13px;color: blue">Contact Now</a>
                                </center>
                                <?php
                            }
                            ?>
                        </div>
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
