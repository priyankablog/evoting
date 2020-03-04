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
        <section class="services-section style-two">
            <div class="container">
                <div class="sec-title" style="margin-top: -70px;">

                    <h3 style="line-height: 2.6em;">Indian Election <span class="theme_color">Party</span></h3>
                    <span class="separator"></span>
                </div>
                <div class="auto-container">

                    <div class="row clearfix">
                        <!--Services Block Two-->
                        <?php
                        $q = $this->md->my_query("select * from tbl_party_registration where status=1");
                        foreach ($q as $query) {
                            ?>
                            <div class="services-block-two col-md-4 col-sm-6 col-xs-12" >
                                <div class="inner-box" style="height:250px;" >
                                    <div class="content">
                                        <img src="<?php echo $query->p_logo; ?>" class="" style="height: 40px;width:50px;"/>
                                        <h3 style="padding-left: 60px; margin-top: -46px;margin-left: 7px;"><a href="<?php echo base_url(); ?>Party-Info/<?php echo $query->party_id; ?>" target="_new"><?php echo $query->p_name; ?></a></h3>
                                        <div class="text"style="height:90px;"><?php
                                            $str = $query->description;
                                            echo substr($str, 0, 120)."...";
                                            ?></div>

                                    </div>
                                    <div class="col-md-2 col-lg-offset-8">
                                        <a class="btn btn-primary" style="background-color: #00b7f1;
                                           border-color: #00b7f1;" href="<?php echo base_url(); ?>Party-Info/<?php echo $query->party_id; ?>" target="_new">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>

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
    <script type="text/javascript" src="<?php echo base_url(); ?>visitor/js/set.js"></script>
</html>
