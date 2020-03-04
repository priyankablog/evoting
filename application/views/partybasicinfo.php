<html>


    <head>
        <meta charset="utf-8">
        <link href="<?php echo base_url(); ?>visitor/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>visitor/bootstrap-3.3.7-dist/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>visitor/css/mycss.css" rel="stylesheet">

        <?php
        $this->load->view('headlink');
        ?>
        <title>My Govrn | Basic-Info Page</title><!-- Responsive -->
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
                    <section class="contact_us sec-padd-bottom" style="margin-bottom: -190px;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-sm-8 col-xs-12" id="mycss1" style="padding: 20px;background: #fff;box-shadow: 0 0 0 2px #eee,0 0 0 7px #fff,0 0 0 9px #eee;margin-left: 26px;margin-top: 28px;width:822px;">
                                    <div class="section-title">
                                        <h3 class="myhead">Basic Information</h3>

                                    </div>

                                    <div class="default-form-area" id="css1">
                                        <form name="contact_form" class="default-form" method="post">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="group-inner">
                                                            <?php
                                                            $c = $this->md->my_query("select * from tbl_party_registration where party_id=" . $this->session->userdata('party'));


//$dob=explode("-",$c[0]->dob);
                                                            ?>
                                                            <label name="">Party Name</label>
                                                            <input type="text" class="form-control" name="pname" id="partyname" readonly="" value="<?php echo $c[0]->p_name; ?>">

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="group-inner">
                                                            <label name="">Email</label>
                                                            <input type="text" class="form-control" name="email" id="email" readonly="" value="<?php echo $c[0]->email; ?>">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="group-inner">
                                                            <label name="">Since</label>
                                                            <input type="text" class="form-control" name="since" id="since" readonly="" value="<?php echo $c[0]->since; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="group-inner">
                                                            <label name="">Slogan</label>
                                                            <input type="text" class="form-control" name="slogan" id="slogan" readonly="" value="<?php echo $c[0]->slogan; ?>">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="group-inner">
                                                            <label name="">Chairman Name</label>
                                                            <input type="text" class="form-control" name="cname" id="since" readonly="" value="<?php echo $c[0]->p_chairman_name; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="group-inner">
                                                            <label name="" class="">President</label>
                                                            <input type="text" class="form-control <?php
                                                            if (form_error('president')) {
                                                                echo "error_style";
                                                            }
                                                            ?>" name="president" id=""  value="<?php
                                                                   if ($c[0]->president != "") {
                                                                       echo $c[0]->president;
                                                                   }
                                                                   ?>">

                                                            <p class="err_msg"><?php echo form_error('president'); ?>
                                                            </p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="group-inner">
                                                            <label name=""class="">Parliamentary Chairperson</label>
                                                            <input type="text" class="form-control <?php
                                                            if (form_error('chairman')) {
                                                                echo "error_style";
                                                            }
                                                            ?>" name="chairman" id=""  value="<?php
                                                                   if ($c[0]->parliamentary_chairperson != "") {
                                                                       echo $c[0]->parliamentary_chairperson;
                                                                   }
                                                                   ?>">
                                                            <p class="err_msg"><?php echo form_error('chairman'); ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="group-inner">
                                                            <label name="" class="">Lok Sabha Leader</label>
                                                            <input type="text" class="form-control <?php
                                                            if (form_error('lokleader')) {
                                                                echo "error_style";
                                                            }
                                                            ?>" name="lokleader" id=""  value="<?php
                                                                   if ($c[0]->lok_sabha_leader != "") {
                                                                       echo $c[0]->lok_sabha_leader;
                                                                   }
                                                                   ?>">
                                                            <p class="err_msg"><?php echo form_error('lokleader'); ?>
                                                            </p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="group-inner">
                                                            <label name=""class="">Rajya Sabha Leader</label>
                                                            <input type="text" class="form-control <?php
                                                            if (form_error('rajyaleader')) {
                                                                echo "error_style";
                                                            }
                                                            ?>" name="rajyaleader" id=""  value="<?php
                                                                   if ($c[0]->rajya_sabha_leader != "") {
                                                                       echo $c[0]->rajya_sabha_leader;
                                                                   }
                                                                   ?>">
                                                            <p class="err_msg"><?php echo form_error('rajyaleader'); ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="group-inner">
                                                            <label name=""class="">Newspaper</label>
                                                            <input type="text" class="form-control <?php
                                                            if (form_error('newspaper')) {
                                                                echo "error_style";
                                                            }
                                                            ?>" name="newspaper" id=""  value="<?php
                                                                   if ($c[0]->newspaper != "") {
                                                                       echo $c[0]->newspaper;
                                                                   }
                                                                   ?>">
                                                            <p class="err_msg"><?php echo form_error('newspaper'); ?>
                                                            </p>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="group-inner">
                                                            <label name=""class="">Youth Wing</label>
                                                            <input type="text" class="form-control <?php
                                                            if (form_error('youthwing')) {
                                                                echo "error_style";
                                                            }
                                                            ?>" name="youthwing" id=""  value="<?php
                                                                   if ($c[0]->youth_wing != "") {
                                                                       echo $c[0]->youth_wing;
                                                                   }
                                                                   ?>">
                                                            <p class="err_msg"><?php echo form_error('youthwing'); ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="group-inner">
                                                            <label name="" class="">Women Wing</label>
                                                            <input type="text" class="form-control <?php
                                                            if (form_error('womenwing')) {
                                                                echo "error_style";
                                                            }
                                                            ?>" name="womenwing" id=""  value="<?php
                                                                   if ($c[0]->women_wing != "") {
                                                                       echo $c[0]->women_wing;
                                                                   }
                                                                   ?>">
                                                            <p class="err_msg"><?php echo form_error('womenwing'); ?>
                                                            </p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="group-inner">
                                                            <label name=""class="">Alliance</label>
                                                            <input type="text" class="form-control <?php
                                                            if (form_error('alliance')) {
                                                                echo "error_style";
                                                            }
                                                            ?>" name="alliance" id=""  value="<?php
                                                                   if ($c[0]->alliance != "") {
                                                                       echo $c[0]->alliance;
                                                                   }
                                                                   ?>">

                                                            <p class="err_msg"><?php echo form_error('alliance'); ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="group-inner">
                                                            <label name="" class="">Minority Wing</label>
                                                            <input type="text" class="form-control <?php
                                                            if (form_error('minoritywing')) {
                                                                echo "error_style";
                                                            }
                                                            ?>" name="minoritywing" id=""  value="<?php
                                                                   if ($c[0]->minority_wing != "") {
                                                                       echo $c[0]->minority_wing;
                                                                   }
                                                                   ?>">
                                                            <p class="err_msg"><?php echo form_error('minoritywing'); ?>
                                                            </p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="group-inner">
                                                            <label name=""class="">Membership</label>
                                                            <input type="text" class="form-control <?php
                                                            if (form_error('membership')) {
                                                                echo "error_style";
                                                            }
                                                            ?>" name="membership" id=""  value="<?php
                                                                   if ($c[0]->membership != "") {
                                                                       echo $c[0]->membership;
                                                                   }
                                                                   ?>">
                                                            <p class="err_msg"><?php echo form_error('membership'); ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="group-inner">
                                                            <label name="" class="">Ideology</label>
                                                            <input type="text" class="form-control <?php
                                                            if (form_error('ideology')) {
                                                                echo "error_style";
                                                            }
                                                            ?>" name="ideology" id=""  value="<?php
                                                                   if ($c[0]->ideology != "") {
                                                                       echo $c[0]->ideology;
                                                                   }
                                                                   ?>">
                                                            <p class="err_msg"><?php echo form_error('ideology'); ?>
                                                            </p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="group-inner">
                                                            <label name=""class="">Political Position</label>
                                                            <input type="text" class="form-control <?php
                                                            if (form_error('politicalposition')) {
                                                                echo "error_style";
                                                            }
                                                            ?>" name="politicalposition" id=""  value="<?php
                                                                   if ($c[0]->political_position != "") {
                                                                       echo $c[0]->political_position;
                                                                   }
                                                                   ?>">
                                                            <p class="err_msg"><?php echo form_error('politicalposition'); ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="group-inner">
                                                            <label name="" class="">International Affiliation</label>
                                                            <input type="text" class="form-control <?php
                                                            if (form_error('internationalaffiliation')) {
                                                                echo "error_style";
                                                            }
                                                            ?>" name="internationalaffiliation" id=""  value="<?php
                                                                   if ($c[0]->international_affiliation != "") {
                                                                       echo $c[0]->international_affiliation;
                                                                   }
                                                                   ?>">
                                                        </div><p class="err_msg"><?php echo form_error('internationalaffiliation'); ?>
                                                        </p>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="group-inner">
                                                            <label name=""class="">Colours</label>
                                                            <input type="text" class="form-control <?php
                                                            if (form_error('colours')) {
                                                                echo "error_style";
                                                            }
                                                            ?>" name="colours" id=""  value="<?php
                                                                   if ($c[0]->colours != "") {
                                                                       echo $c[0]->colours;
                                                                   }
                                                                   ?>">
                                                            <p class="err_msg"><?php echo form_error('colours'); ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="group-inner">
                                                            <label name="" class="">ECI Status</label>
                                                            <input type="text" class="form-control <?php
                                                            if (form_error('ecistatus')) {
                                                                echo "error_style";
                                                            }
                                                            ?>" name="ecistatus" id=""  value="<?php
                                                                   if ($c[0]->eci_status != "") {
                                                                       echo $c[0]->eci_status;
                                                                   }
                                                                   ?>">
                                                            <p class="err_msg"><?php echo form_error('ecistatus'); ?>
                                                            </p>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="group-inner">
                                                            <label name=""class="">Seats in Rajya Sabha</label>
                                                            <input type="text" class="form-control <?php
                                                            if (form_error('seatsrajyasabha')) {
                                                                echo "error_style";
                                                            }
                                                            ?>" name="seatsrajyasabha" id=""  value="<?php
                                                                   if ($c[0]->seats_in_rajya_sabha != "") {
                                                                       echo $c[0]->seats_in_rajya_sabha;
                                                                   }
                                                                   ?>">
                                                            <p class="err_msg"><?php echo form_error('seatsrajyasabha'); ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="group-inner">
                                                            <label name="" class="">Seates in Lok Sabha</label>
                                                            <input type="text" class="form-control <?php
                                                            if (form_error('seatsloksabha')) {
                                                                echo "error_style";
                                                            }
                                                            ?>" name="seatsloksabha" id=""  value="<?php
                                                                   if ($c[0]->seats_in_lok_sabha != "") {
                                                                       echo $c[0]->seats_in_lok_sabha;
                                                                   }
                                                                   ?>">
                                                            <p class="err_msg"><?php echo form_error('seatsloksabha'); ?>
                                                            </p>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="group-inner">
                                                            <label name="">Description</label>
                                                            <textarea class="form-control <?php
                                                            if (form_error('description')) {
                                                                echo "error_style";
                                                            }
                                                            ?>"  id="fulladdress"  name="description" value="<?php
                                                                      if ($c[0]->description != "") {
                                                                          echo $c[0]->description;
                                                                      }
                                                                      ?>"><?php echo $c[0]->description; ?></textarea>
                                                            <p class="err_msg"><?php echo form_error('description'); ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="group-inner">
                                                            <label name="" class="">Headquarters</label>
                                                            <textarea class="form-control <?php
                                                            if (form_error('headquarters')) {
                                                                echo "error_style";
                                                            }
                                                            ?>" name="headquarters" id=""  value="<?php
                                                                      if ($c[0]->headquarters != "") {
                                                                          echo $c[0]->headquarters;
                                                                      }
                                                                      ?>"><?php echo $c[0]->headquarters; ?></textarea>
                                                            <p class="err_msg"><?php echo form_error('headquarters'); ?>
                                                            </p>
                                                        </div>
                                                    </div>


                                                </div>
                                                <br>
                                                <div class="form-group  col-md-12 col-sm-12 col-xs-12">
                                                    <input type="submit" class="theme-btn btn-style-one" value="Submit" name="submit"/>
                                                </div>
                                                <div class="form-group  col-md-12 col-sm-12 col-xs-12">
                                                    <?php
                                                    if (isset($success)) {
                                                        ?>
                                                        <div class="alert alert-success" role="alert">
                                                            <?php echo $success; ?>
                                                        </div>
                                                        <?php
                                                    }
                                                    if (isset($error)) {
                                                        ?>
                                                        <div class="alert alert-warning" role="alert">
                                                            <?php echo $error; ?>
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
