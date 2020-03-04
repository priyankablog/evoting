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
                        <section class="contact_us sec-padd-bottom">
                            <div class="container">
                                <div class="row">
                                    <?php
                                    $q = $this->md->my_query("select * from tbl_voter_registration where voter_id=" . $this->session->userdata('voter'));

                                    $q1 = $this->md->my_query("select * from tbl_idproof where voter_id='" . $this->session->userdata('voter') . "'");
                                    ?>
                                    <div class="col-md-8 col-sm-8 col-xs-12" id="mycss1" style="padding: 20px;background: #fff;box-shadow: 0 0 0 2px #eee,0 0 0 7px #fff,0 0 0 9px #eee;margin-left: 26px;margin-top: 28px;width:822px;">
                                        <div class="section-title">
                                            <h3 class="myhead">ID Proof</h3>

                                        </div>

                                        <div class="default-form-area" id="css1">
                                            <form name="contact_form" class="default-form" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <div class="row">


                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="group-inner">
                                                                <label name="idproof"class="<?php
                                                                if (form_error('type')) {
                                                                    echo "error_msg";
                                                                }
                                                                ?>" >Select Id Proof</label>
                                                                <select name="type" style="height:50px;width: 100%;" class="<?php
                                                                if (form_error('type')) {
                                                                    echo "error_style";
                                                                }
                                                                ?>">
                                                                    <option value="">Select Id Proof</option>
                                                                    <option>Adhar Card</option>
                                                                    <option>Driving Licence</option>
                                                                    <option>Election/Voting Card</option>
                                                                    <option>Passport</option>
                                                                    <option>Ration Card</option>
                                                                    <option>Pan Card</option>

                                                                </select>
                                                                <p class="err_msg"><?php echo form_error('type'); ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">


                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="group-inner">
                                                                        <label name="uploadproof" >Upload Files</label>
                                                                        <input type="file" name="proof" onchange="idpreview(this);" class="<?php
                                                                        if (isset($error)) {
                                                                            echo "error_style";
                                                                        }
                                                                        ?>">
                                                                        <p class="err_msg"><?php
                                                                            if (isset($error)) {
                                                                                echo $error;
                                                                            }
                                                                            ?>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <?php
                                                                    $c = $this->md->my_query("select * from tbl_idproof where voter_id=" . $this->session->userdata('voter'));
                                                                    ?>
                                                                    <img src="" alt="Id Proof" class="img-responsive center-block"  style="width: 100px;height:100px;padding: 10px;display: none" id="id_prv"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="form-group  col-md-12 col-sm-12 col-xs-12">
                                                        <input type="submit" class="theme-btn btn-style-one" value="Upload" name="submit"/>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <p style="color:red;font-size:13px;">Note : You must Upload Adhar Card, Passport(Photo), Election/Voting Card and Pan Card.</p>
                                                    </div>


                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">

                                                        <?php
                                                        if (isset($success)) {
                                                            ?>
                                                            <div class="alert alert-success" role="alert">
                                                                <?php echo $success; ?>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>

                                                </div>


                                            </form>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </section>
                        <div class="col-md-offset-3 col-md-9" style="margin-top: -160px;margin-bottom: 30px;background-color: #ffffff;border:1px solid #eee;    margin-left: 301px;width: 841px;">
                            <div class="section-title" style="padding-top: 25px;">
                                <h3 class="myhead">Your Uploaded ID Proof</h3>

                            </div>
                            <?php
                            foreach ($q1 as $query) {

                                $q = $this->encryption->decrypt($query->path);
                                ?>

                                <div class="col-md-6 col-sm-12 col-xs-12">

                                    <div class="">
                                        <div class=""><?php echo $query->type; ?></div>
                                    </div>
                                    <div class="">

                                        <img src="<?php echo base_url($q); ?>" class="" style="width:100%;"/>
                                    </div>


                                </div>


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
    <script src="<?php echo base_url(); ?>/visitor/js/set.js" type="text/javascript"></script>
    <?php
    $this->load->view('footerscript');
    ?>

</html>
