<html>


    <head>
        <meta charset="utf-8">
        <link href="<?php echo base_url(); ?>visitor/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>visitor/bootstrap-3.3.7-dist/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>visitor/css/mycss.css" rel="stylesheet">
        <title>My Govrn | Candidate-Info Page</title>
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
        <div class="services-section style-two"> 
            <div class="container">

                <div class="auto-container" style="margin-top:-50px;margin-bottom: -160px; ">
                    <?php
                    $q = $this->md->my_query("select * from tbl_party_registration where party_id='" . $this->uri->segment(2) . "'");
                    foreach ($q as $query) {
                        ?>

                        <div class="row" style="background-color: #fff;">

                            <div class="col-md-6">
                                <h3 class="myhead" style="font-size: 20px;padding-top: 30px;"><?php echo $query->p_name; ?></h3>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -90px;background-color: #fff;">
                            <section class="project-single-section">
                                <div class="auto-container">
                                    <!--Inner Container-->
                                    <div class="inner-container">
                                        <div class="lower-container">
                                            <div class="row clearfix">

                                                <div class="column col-md-6 col-sm-12 col-xs-12">

                                                    <div class="form-group default-form" style="padding-top: 20px;">

                                                        <div class="group-inner">
                                                            <div class="text"><b>Party Name : </b><?php echo $query->p_name; ?></div>

                                                        </div>
                                                        <div class="group-inner">
                                                            <div class="text"><b>Email : </b><?php echo $query->email; ?></div>
                                                        </div>
                                                        <div class="group-inner">
                                                            <div class="text"><b>Since : </b><?php echo $query->since; ?></div>
                                                        </div>
                                                        <div class="group-inner">
                                                            <div class="text"><b>Slogan : </b><?php echo $query->slogan; ?>
                                                            </div>
                                                        </div>
                                                        <div class="group-inner">
                                                            <div class="text"><b>Party Chairman Name : </b><?php echo $query->p_chairman_name; ?></div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group default-form" style="padding-top: 20px;">
                                                        <img src="<?php
                                                        echo base_url();
                                                        echo $query->p_logo;
                                                        ?>" class="center-block"  style="width:50%; height:200px;"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div></section>
                        </div>
                        <div class="row" style="margin-top: -230px;background-color: #fff;">
                            <section class="project-single-section">
                                <div class="auto-container">
                                    <!--Inner Container-->
                                    <div class="inner-container">
                                        <div class="lower-container">
                                            <div class="row clearfix">

                                                <div class="column col-md-6 col-sm-12 col-xs-12">

                                                    <div class="form-group default-form" style="padding-top: 20px;">


                                                        <div class="group-inner">
                                                            <div class="text" style="text-align: justify;"><b>Description:</b><?php echo $query->description; ?></div>
                                                        </div>
                                                        <div class="group-inner">
                                                            <div class="text"><b>President : </b><p style="display: inline;" class="<?php
                                                                if ($query->president == "") {
                                                                    echo "err_message";
                                                                }
                                                                ?>"><?php
                                                                                                        if ($query->president == "") {
                                                                                                            echo "Data Not Found";
                                                                                                        } else {
                                                                                                            echo $query->president;
                                                                                                        }
                                                                                                        ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="group-inner">
                                                            <div class="text"><b>Parliamentary Chairman Person : </b><p style="display: inline;" class="<?php
                                                                if ($query->parliamentary_chairperson == "") {
                                                                    echo "err_message";
                                                                }
                                                                ?>"><?php
                                                                                                                            if ($query->parliamentary_chairperson == "") {
                                                                                                                                echo "Data Not Found";
                                                                                                                            } else {
                                                                                                                                echo $query->parliamentary_chairperson;
                                                                                                                            }
                                                                                                                            ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="group-inner">
                                                            <div class="text"><b>Lok Sabha Leader : </b><p style="display: inline;" class="<?php
                                                                if ($query->lok_sabha_leader == "") {
                                                                    echo "err_message";
                                                                }
                                                                ?>"><?php
                                                                                                               if ($query->lok_sabha_leader == "") {
                                                                                                                   echo "Data Not Found";
                                                                                                               } else {
                                                                                                                   echo $query->lok_sabha_leader;
                                                                                                               }
                                                                                                               ?></p></div>

                                                        </div>
                                                        <div class="group-inner">
                                                            <div class="text"><b>International Affiliation : </b><p style="display: inline;" class="<?php
                                                                if ($query->international_affiliation == "") {
                                                                    echo "err_message";
                                                                }
                                                                ?>"><?php
                                                                                                                        if ($query->international_affiliation == "") {
                                                                                                                            echo "Data Not Found";
                                                                                                                        } else {
                                                                                                                            echo $query->international_affiliation;
                                                                                                                        }
                                                                                                                        ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="group-inner">
                                                            <div class="text"><b>Colours : </b><p style="display: inline;" class="<?php
                                                                if ($query->colours == "") {
                                                                    echo "err_message";
                                                                }
                                                                ?>"><?php
                                                                                                      if ($query->colours == "") {
                                                                                                          echo "Data Not Found";
                                                                                                      } else {
                                                                                                          echo $query->colours;
                                                                                                      }
                                                                                                      ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="group-inner">
                                                            <div class="text"><b>Seats In Lok Sabha : </b><p style="display: inline;" class="<?php
                                                                if ($query->seats_in_lok_sabha == "") {
                                                                    echo "err_message";
                                                                }
                                                                ?>"><?php
                                                                                                                 if ($query->seats_in_lok_sabha == "") {
                                                                                                                     echo "Data Not Found";
                                                                                                                 } else {
                                                                                                                     echo $query->seats_in_lok_sabha;
                                                                                                                 }
                                                                                                                 ?></p>                                                </div>
                                                        </div>
                                                        <div class="group-inner">
                                                            <div class="text"><b>Seats In Rajya Sabha : </b><p style="display: inline;" class="<?php
                                                                if ($query->seats_in_rajya_sabha == "") {
                                                                    echo "err_message";
                                                                }
                                                                ?>"><?php
                                                                                                                   if ($query->seats_in_rajya_sabha == "") {
                                                                                                                       echo "Data Not Found";
                                                                                                                   } else {
                                                                                                                       echo $query->seats_in_rajya_sabha;
                                                                                                                   }
                                                                                                                   ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column col-md-6 col-sm-12 col-xs-12">
                                                    <div class="group-inner">
                                                        <div class="text"><b>Rajya Sabha Leader : </b><p style="display: inline;" class="<?php
                                                            if ($query->lok_sabha_leader == "") {
                                                                echo "err_message";
                                                            }
                                                            ?>"><?php
                                                                                                             if ($query->rajya_sabha_leader == "") {
                                                                                                                 echo "Data Not Found";
                                                                                                             } else {
                                                                                                                 echo $query->rajya_sabha_leader;
                                                                                                             }
                                                                                                             ?></p></div>

                                                    </div>
                                                    <div class="group-inner">
                                                        <div class="text"><b>Head Quarters : </b><p style="display: inline;" class="<?php
                                                            if ($query->headquarters == "") {
                                                                echo "err_message";
                                                            }
                                                            ?>"><?php
                                                                                                        if ($query->headquarters == "") {
                                                                                                            echo "Data Not Found";
                                                                                                        } else {
                                                                                                            echo $query->headquarters;
                                                                                                        }
                                                                                                        ?></p></div>
                                                    </div>
                                                    <div class="group-inner">
                                                        <div class="text"><b>Newspaper : </b><p style="display: inline;" class="<?php
                                                            if ($query->newspaper == "") {
                                                                echo "err_message";
                                                            }
                                                            ?>"><?php
                                                                                                    if ($query->newspaper == "") {
                                                                                                        echo "Data Not Found";
                                                                                                    } else {
                                                                                                        echo $query->newspaper;
                                                                                                    }
                                                                                                    ?></p></div>
                                                    </div>
                                                    <div class="group-inner">
                                                        <div class="text"><b>Youth Wing : </b><p style="display: inline;" class="<?php
                                                            if ($query->youth_wing == "") {
                                                                echo "err_message";
                                                            }
                                                            ?>"><?php
                                                                                                     if ($query->youth_wing == "") {
                                                                                                         echo "Data Not Found";
                                                                                                     } else {
                                                                                                         echo $query->youth_wing;
                                                                                                     }
                                                                                                     ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="group-inner">
                                                        <div class="text"><b>Women Wing : </b><p style="display: inline;" class="<?php
                                                            if ($query->women_wing == "") {
                                                                echo "err_message";
                                                            }
                                                            ?>"><?php
                                                                                                     if ($query->women_wing == "") {
                                                                                                         echo "Data Not Found";
                                                                                                     } else {
                                                                                                         echo $query->women_wing;
                                                                                                     }
                                                                                                     ?></p></div>
                                                    </div>
                                                    <div class="group-inner">
                                                        <div class="text"><b>Minority Wing : </b><p style="display: inline;" class="<?php
                                                            if ($query->minority_wing == "") {
                                                                echo "err_message";
                                                            }
                                                            ?>"><?php
                                                                                                        if ($query->minority_wing == "") {
                                                                                                            echo "Data Not Found";
                                                                                                        } else {
                                                                                                            echo $query->minority_wing;
                                                                                                        }
                                                                                                        ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="group-inner">
                                                        <div class="text"><b>Membership : </b><p style="display: inline;" class="<?php
                                                            if ($query->membership == "") {
                                                                echo "err_message";
                                                            }
                                                            ?>"><?php
                                                                                                     if ($query->membership == "") {
                                                                                                         echo "Data Not Found";
                                                                                                     } else {
                                                                                                         echo $query->membership;
                                                                                                     }
                                                                                                     ?></p></div>
                                                    </div>
                                                    <div class="group-inner">
                                                        <div class="text"><b>Ideology : </b><p style="display: inline;" class="<?php
                                                            if ($query->ideology == "") {
                                                                echo "err_message";
                                                            }
                                                            ?>"><?php
                                                                                                   if ($query->ideology == "") {
                                                                                                       echo "Data Not Found";
                                                                                                   } else {
                                                                                                       echo $query->ideology;
                                                                                                   }
                                                                                                   ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="group-inner">
                                                        <div class="text"><b>Political Position : </b><p style="display: inline;" class="<?php
                                                            if ($query->political_position == "") {
                                                                echo "err_message";
                                                            }
                                                            ?>"><?php
                                                                                                             if ($query->political_position == "") {
                                                                                                                 echo "Data Not Found";
                                                                                                             } else {
                                                                                                                 echo $query->political_position;
                                                                                                             }
                                                                                                             ?></p></div>
                                                    </div>
                                                    <div class="group-inner">
                                                        <div class="text"><b>ECI Status : </b><p style="display: inline;" class="<?php
                                                            if ($query->eci_status == "") {
                                                                echo "err_message";
                                                            }
                                                            ?>"><?php
                                                                                                     if ($query->eci_status == "") {
                                                                                                         echo "Data Not Found";
                                                                                                     } else {
                                                                                                         echo $query->eci_status;
                                                                                                     }
                                                                                                     ?></p></div>
                                                    </div>
                                                    <div class="group-inner">
                                                        <div class="text"><b>Alliance : </b><p style="display: inline;" class="<?php
                                                            if ($query->alliance == "") {
                                                                echo "err_message";
                                                            }
                                                            ?>"><?php
                                                                                                   if ($query->alliance == "") {
                                                                                                       echo "Data Not Found";
                                                                                                   } else {
                                                                                                       echo $query->alliance;
                                                                                                   }
                                                                                                   ?></p></div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                        <div class="row" style="background-color: #fff;">

                            <div class="col-md-6">
                                <h3 class="myhead" style="font-size: 20px;margin-top: -70px;">Enhancement</h3>
                            </div>
                        </div>
                        <div class="row" style="background-color: #fff;">

                            <div class="col-md-12">
                                <?php
                                $q = $this->md->my_query("select * from tbl_enhancement where party_id=" . $this->uri->segment(2));
                                if(!empty($q))
                                {
                                foreach ($q as $val) {
                                    echo $val->description;
                                }
                                }
                                else
                                {
                                    ?>
                                <p><?php echo "No Enhancement Available";?></p>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
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

</html>
