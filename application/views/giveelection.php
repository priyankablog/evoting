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

        <title>My Vote</title><!-- Responsive -->
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
                ?>            </header>
        </div>
        <div class="menu-overlay"></div>
        <section class="services-section style-two">

            <div class="auto-container">
                <div class="sec-title">
                    <p style="font-size: 20px;margin-top: -60px;">Lok Sabha <span class="theme_color"> Election Parties</span></p>
                    <span class="separator"></span>
                </div>
                <div style="margin: 5% 0">
                    <form name="" method="post">
                        <div class="container">
                            <div class="row" style="">
                                <div class="col-md-9" style="background-color: #fff;">


                                    <div class="row clearfix">

                                        <?php
                                        $q = $this->md->my_query("select * from tbl_party_registration where status=1");
                                        foreach ($q as $query) {
                                            ?>
                                            <div class="services-block-two col-md-4 col-sm-6 col-xs-12" style="height: 320px;">

                                                <img src="<?php echo base_url($query->p_logo); ?>" class="center-block" style="height: 200px;width:100%;"/>

                                                <div class="sec-title" style="margin-bottom: 10px;margin-top: 10px">
                                                    <h3 style="margin-top: 10px;font-size: 18px;font-weight: 500;"><a href="<?php echo base_url(); ?>Party-Info/<?php echo $query->party_id; ?>" target="_blank"><?php echo $query->p_name; ?></a></h3>
                                                    <span class="separator"></span>

                                                </div>

                                                <center>
                                                    <input type="button" style="margin-top: 10px;" id="<?php echo $query->party_id; ?>" onclick="candidate('<?php echo $query->party_id; ?>');" class="btn btn-default" value="Show Party Candidate"/>
                                                </center>

                                            </div>



                                            <?php
                                        }
                                        ?>
                                    </div>



                                </div>
                                <div class="col-md-3" id="candidate" style="margin-top: 90px;">

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div></section>

        <?php
        $this->load->view('footer');
        ?>

    </body>
    <?php
    $this->load->view('footerscript');
    ?>

</html>
