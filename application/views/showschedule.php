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

                                    <div class="col-md-9" style="margin-top: 30px;">
                                        <?php
                                        $q1 = $this->md->my_query("select * from tbl_party_registration where party_id='" . $this->session->userdata('party') . "'");
                                        if ($q1[0]->status == 1) {
                                            $schedule= $this->md->my_query("select * from tbl_schedule order by s_id desc");

                                            foreach ($schedule as $val) {


                                                $q = $this->md->my_query("select category from tbl_election_category where category_id='" . $val->category_id . "'");
                                                $q1 = $this->md->my_query("select * from tbl_location where l_id='" . $val->location_id . "' and label='city'");
                                                $q2 = $this->md->my_query("select * from tbl_location where l_id='" . $q1[0]->parent_id . "' and label='state'");
                                                ?>

                                                <div class="services-block-five style-two col-lg-6 col-md-12 col-sm-12 col-xs-12" >
                                                    <div class="inner-box">
                                                        <div class="icon-box" style="padding-top: 40px;background-color: #f8f8f8;">
                                                            <p>
                                                                <?php
                                                                $st = strtotime($val->date);

                                                                echo date('M', $st);
                                                                ?>
                                                            </p> 
                                                            <p style="font-size: 40px"><?php echo date('d', $st); ?></p>
                                                            <p><?php echo date('Y', $st); ?></p>
                                                        </div>
                                                        <div class="content-box" style="">
                                                            <h3><?php echo $q[0]->category;
                                                                ?></h3>
                                                            <div class="text"><?php echo $q2[0]->name; ?><br><?php echo $q1[0]->name; ?></div>

                                                            <a href="<?php echo base_url(); ?>Shedule-Candidate/<?php echo $q1[0]->l_id ?>/<?php echo $val->category_id; ?>" class="know-more" title="Show Candidate of <?php echo $q1[0]->name; ?>">Show Candidate</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
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
