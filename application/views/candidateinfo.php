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
        <section class="services-section style-two">
            <div class="container">
                <div class="sec-title" style="margin-top: -70px;">

                    <h3 style="line-height: 2.6em;">Candidate  &amp; <span class="theme_color">Party Info</span></h3>
                    <span class="separator"></span>
                </div>
                <div class="row">
                    <?php
                    $q = $this->md->my_query("select * from tbl_candidate_registration where candidate_id='" . $this->uri->segment(2) . "'");

                    $q1 = $this->md->my_query("select * from tbl_location where l_id='" . $q[0]->location_id . "' and label='area'");
                    $q2 = $this->md->my_query("select * from tbl_location where l_id='" . $q1[0]->parent_id . "' and label='city'");
                    $q3 = $this->md->my_query("select * from tbl_location where l_id='" . $q2[0]->parent_id . "' and label='state'");
                    //print_r($q3);die();
                    // $q1=$this->md->my_query("select * from tbl_party_registration where party_id='".$q[0]->party_id."'");

                    $data = $this->md->my_query("select p.*,p.description as party ,c.* from tbl_party_registration p ,tbl_candidate_registration c where c.party_id=p.party_id and candidate_id='" . $this->uri->segment(2) . "'");
                    foreach ($data as $query) {
                        ?>

                        <section class="project-single-section" style="margin-top: -100px;">
                            <div class="auto-container"   style="background-color: #ffffff;">
                                <!--Inner Container-->
                                <div class="inner-container">
                                    <!--Images Gallery-->
                                    <div class="images-gallery" >
                                        <div class="row clearfix" >
                                            <!--Image Column-->
                                            <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 27px;">
                                                <div class="image">
                                                    <img class="center-block"  src="<?php echo base_url() . $query->profile_pic; ?>" alt="" style="height: 40%;width:50%; "/>
                                                </div>
                                            </div>
                                            <!--Image Column-->
                                            <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 27px;">
                                                <div class="image">
                                                    <img class="center-block" src="<?php echo base_url() . $query->p_logo; ?>" alt="" style="height: 40%;width:50%; "/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="lower-container">
                                        <div class="row clearfix">

                                            <div class="column col-md-6 col-sm-12 col-xs-12 default-form">
                                                <h3 class="myhead" style="font-size: 20px;">Candidate Info</h3>

                                                <div class="form-group" style="padding-top: 20px;">
                                                    <div class="group-inner">
                                                        <div class="text"><b>Candidate Name : </b><?php echo $query->candidate_name; ?></div>
                                                    </div>
                                                    <div class="group-inner">
                                                        <div class="text" style="text-align: justify;"><b>Description : </b><?php echo $query->description; ?><br>No More Info</div>
                                                    </div>
                                                    <div class="group-inner">
                                                        <div class="text"><b>Gender : </b><?php echo $query->gender; ?></div>
                                                    </div>
                                                    <div class="group-inner">
                                                        <div class="text"><b>Email : </b><?php echo $query->email_id; ?></div>
                                                    </div>
                                                    <div class="group-inner">
                                                        <div class="text"><b>Age : </b><?php
                                                            $dob = explode("-", $query->dob);
                                                            $age = date('Y') - $dob[2];
                                                            echo $age;
                                                            ?></div>
                                                    </div>
                                                    <div class="group-inner">
                                                        <div class="text"><b>Location : </b>
                                                            <?php
                                                            echo $q3[0]->name . "-";
                                                            echo $q2[0]->name . "-";
                                                            echo $q1[0]->name;
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="group-inner">
                                                        <div class="text"><b>Date Of Birth : </b>
                                                            <?php
                                                            echo $query->dob;
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="group-inner">
                                                        <div class="text"><b>Office Address : </b>
                                                            <?php
                                                            echo $query->office_address;
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="column col-md-6 col-sm-12 col-xs-12">
                                                <h3 class="myhead" style="font-size: 20px;">Party Info</h3>
                                                <div class="form-group" style="padding-top: 20px;">
                                                    <div class="group-inner">
                                                        <div class="text"><b>Party Name : </b><?php echo $query->p_name; ?></div>
                                                    </div>

                                                    <div class="group-inner">
                                                        <div class="text"><b>Party Slogan : </b><?php echo $query->slogan; ?></div>
                                                    </div>
                                                    <div class="group-inner">
                                                        <div class="text"><b>Email : </b><?php echo $query->email; ?></div>
                                                    </div>
                                                    <div class="group-inner">
                                                        <div class="text"><b>Since : </b><?php echo $query->since; ?></div>
                                                    </div>
                                                    <div class="group-inner">
                                                        <div class="text"><b>Chairman Name : </b><?php echo $query->p_chairman_name; ?></div>
                                                    </div>

                                                    <div class="text" style="text-align: justify;"><b>Description : </b>
                                                        <?php
                                                        echo $query->party;
                                                        ?>
                                                        <br>No More Info</div>
                                                    <div class="group-inner">
                                                        <div class="text"><b>President : </b><?php echo $query->president; ?></div>
                                                    </div>
                                                    <div class="group-inner">
                                                        <div class="text"><b>Parliamentary Chairman Person : </b><?php echo $query->parliamentary_chairperson; ?>
                                                        </div>
                                                    </div>
                                                    <div class="group-inner">
                                                        <div class="text"><b>Lok Sabha Leader : </b><p style="display: inline;" class="<?php
                                                            if ($query->lok_sabha_leader == "-") {
                                                                echo "error_msg";
                                                            }
                                                            ?>"><?php
                                                                                                           if ($query->lok_sabha_leader == "-") {
                                                                                                               echo "Data Not Found";
                                                                                                           } else {
                                                                                                               echo $query->lok_sabha_leader;
                                                                                                           }
                                                                                                           ?></p></div>

                                                    </div>
                                                    <div class="group-inner">
                                                        <div class="text"><b>International Affiliation : </b><p style="display: inline;" class="<?php
                                                            if ($query->international_affiliation == "-") {
                                                                echo "error_msg";
                                                            }
                                                            ?>"><?php
                                                                                                                    if ($query->international_affiliation == "-") {
                                                                                                                        echo "Data Not Found";
                                                                                                                    } else {
                                                                                                                        echo $query->international_affiliation;
                                                                                                                    }
                                                                                                                    ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="group-inner">
                                                        <div class="text"><b>Colours : </b><?php echo $query->colours; ?>
                                                        </div>
                                                    </div>
                                                    <div class="group-inner">
                                                        <div class="text"><b>Seats In Lok Sabha : </b><p style="display: inline;" class="<?php
                                                            if ($query->seats_in_lok_sabha == "-") {
                                                                echo "error_msg";
                                                            }
                                                            ?>"><?php
                                                                                                             if ($query->seats_in_lok_sabha == "-") {
                                                                                                                 echo "Data Not Found";
                                                                                                             } else {
                                                                                                                 echo $query->seats_in_lok_sabha;
                                                                                                             }
                                                                                                             ?></p>                                                </div>
                                                    </div>
                                                    <div class="group-inner">
                                                        <div class="text"><b>Seats In Rajya Sabha : </b><p style="display: inline;" class="<?php
                                                            if ($query->seats_in_rajya_sabha == "-") {
                                                                echo "error_msg";
                                                            }
                                                            ?>"><?php
                                                                                                               if ($query->seats_in_rajya_sabha == "-") {
                                                                                                                   echo "Data Not Found";
                                                                                                               } else {
                                                                                                                   echo $query->seats_in_rajya_sabha;
                                                                                                               }
                                                                                                               ?></p>
                                                        </div>
                                                        <div class="group-inner">
                                                            <div class="text"><b>Rajya Sabha Leader : </b><p style="display: inline;" class="<?php
                                                                if ($query->lok_sabha_leader == "-") {
                                                                    echo "error_msg";
                                                                }
                                                                ?>"><?php
                                                                                                                 if ($query->rajya_sabha_leader == "-") {
                                                                                                                     echo "Data Not Found";
                                                                                                                 } else {
                                                                                                                     echo $query->rajya_sabha_leader;
                                                                                                                 }
                                                                                                                 ?></p></div>

                                                        </div>
                                                        <div class="group-inner">
                                                            <div class="text"><b>Head Quarters : </b><p style="display: inline;" class="<?php
                                                                if ($query->headquarters == "-") {
                                                                    echo "error_msg";
                                                                }
                                                                ?>"><?php
                                                                                                            if ($query->headquarters == "-") {
                                                                                                                echo "Data Not Found";
                                                                                                            } else {
                                                                                                                echo $query->headquarters;
                                                                                                            }
                                                                                                            ?></p></div>
                                                        </div>
                                                        <div class="group-inner">
                                                            <div class="text"><b>Newspaper : </b><p style="display: inline;" class="<?php
                                                                if ($query->newspaper == "-") {
                                                                    echo "error_msg";
                                                                }
                                                                ?>"><?php
                                                                                                        if ($query->newspaper == "-") {
                                                                                                            echo "Data Not Found";
                                                                                                        } else {
                                                                                                            echo $query->newspaper;
                                                                                                        }
                                                                                                        ?></p></div>
                                                        </div>
                                                        <div class="group-inner">
                                                            <div class="text"><b>Youth Wing : </b><p style="display: inline;" class="<?php
                                                                if ($query->youth_wing == "-") {
                                                                    echo "error_msg";
                                                                }
                                                                ?>"><?php
                                                                                                         if ($query->youth_wing == "-") {
                                                                                                             echo "Data Not Found";
                                                                                                         } else {
                                                                                                             echo $query->youth_wing;
                                                                                                         }
                                                                                                         ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="group-inner">
                                                            <div class="text"><b>Women Wing : </b><p style="display: inline;" class="<?php
                                                                if ($query->women_wing == "-") {
                                                                    echo "error_msg";
                                                                }
                                                                ?>"><?php
                                                                                                         if ($query->women_wing == "-") {
                                                                                                             echo "Data Not Found";
                                                                                                         } else {
                                                                                                             echo $query->women_wing;
                                                                                                         }
                                                                                                         ?></p></div>
                                                        </div>
                                                        <div class="group-inner">
                                                            <div class="text"><b>Minority Wing : </b><p style="display: inline;" class="<?php
                                                                if ($query->minority_wing == "-") {
                                                                    echo "error_msg";
                                                                }
                                                                ?>"><?php
                                                                                                            if ($query->minority_wing == "-") {
                                                                                                                echo "Data Not Found";
                                                                                                            } else {
                                                                                                                echo $query->minority_wing;
                                                                                                            }
                                                                                                            ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="group-inner">
                                                            <div class="text"><b>Membership : </b><p style="display: inline;" class="<?php
                                                                if ($query->membership == "-") {
                                                                    echo "error_msg";
                                                                }
                                                                ?>"><?php
                                                                                                         if ($query->membership == "-") {
                                                                                                             echo "Data Not Found";
                                                                                                         } else {
                                                                                                             echo $query->membership;
                                                                                                         }
                                                                                                         ?></p></div>
                                                        </div>
                                                        <div class="group-inner">
                                                            <div class="text"><b>Ideology : </b><p style="display: inline;" class="<?php
                                                                if ($query->ideology == "-") {
                                                                    echo "error_msg";
                                                                }
                                                                ?>"><?php
                                                                                                       if ($query->ideology == "-") {
                                                                                                           echo "Data Not Found";
                                                                                                       } else {
                                                                                                           echo $query->ideology;
                                                                                                       }
                                                                                                       ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="group-inner">
                                                            <div class="text"><b>Political Position : </b><p style="display: inline;" class="<?php
                                                                if ($query->political_position == "-") {
                                                                    echo "error_msg";
                                                                }
                                                                ?>"><?php
                                                                                                                 if ($query->political_position == "-") {
                                                                                                                     echo "Data Not Found";
                                                                                                                 } else {
                                                                                                                     echo $query->political_position;
                                                                                                                 }
                                                                                                                 ?></p></div>
                                                        </div>
                                                        <div class="group-inner">
                                                            <div class="text"><b>ECI Status : </b><p style="display: inline;" class="<?php
                                                                if ($query->eci_status == "-") {
                                                                    echo "error_msg";
                                                                }
                                                                ?>"><?php
                                                                                                         if ($query->eci_status == "-") {
                                                                                                             echo "Data Not Found";
                                                                                                         } else {
                                                                                                             echo $query->eci_status;
                                                                                                         }
                                                                                                         ?></p></div>
                                                        </div>
                                                        <div class="group-inner">
                                                            <div class="text"><b>Alliance : </b><p style="display: inline;" class="<?php
                                                                if ($query->alliance == "-") {
                                                                    echo "error_msg";
                                                                }
                                                                ?>"><?php
                                                                                                       if ($query->rajya_sabha_leader == "-") {
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

                                </div>
                            </div>
                        </section>
                        <?php
                    }
                    ?>
                </div>
                <div class="row">

                    <section class="testimonial-section" data-parallax="scroll" style="padding-top:30px;margin-bottom: -100px;">

                        <div class="sec-title light">
                            <div class="sec-title" style="margin-top: -120px;">

                                <h3 style="line-height: 2.6em;">Candidate <span class="theme_color">Reviews</span></h3>
                                <span class="separator"></span>
                            </div>
                            <form name="contact_form" class="default-form" method="post">
                                <div class="form-group">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <?php
                                            if ($this->session->userdata('voter') != "") {
                                                ?>

                                                <div class="group-inner">
                                                    <label name="" style="font-size:17px;">Add Review for <?php echo $query->candidate_name; ?></label>
                                                </div>
                                                <div class="group-inner"style="padding-top: 10px;">
                                                    <input type="text" class="form-control <?php
                                                    if (form_error('review')) {
                                                        echo "error_style";
                                                    }
                                                    ?>" name="review" id="review"  value="" >
                                                    <p class="err_msg"><?php echo form_error('review'); ?>
                                                    </p>
                                                </div>
                                                <div class="group-inner" style="padding-top: 20px;">
                                                    <button type="submit" name="submit" value="submit" class="theme-btn btn-style-one">Add Review</button>
                                                    <p style="font-size: 12px;padding-top: 10px;">Note: Only Valid Review Display by Party</p>
                                                </div>
                                                <div class="" style="padding-top: 20px;">

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

                                                <?php
                                            } else if ($this->session->userdata('party') == "") {
                                                ?>
                                                <div class="group-inner">

                                                    <center>    
                                                        <label name="" style="font-size:17px;">For Giving Review,You Have To Login First !</label>
                                                        <br>
                                                        <br> 

                                                        <a type="submit" href="<?php echo base_url(); ?>Login" class="theme-btn btn-style-one" id="more"  target="_new !important" name="submit" style="height: 40px;width:50%;text-align: center;">Login Now</a>

                                                        <div class="" style="padding-top: 20px;font-size: 12px;"><b>Note : </b>Only Valid Voter Can Give Review. Only Approve Voter Can Give Review To Candidate.</div>
                                                    </center>
                                                </div>
                                                <?php
                                            }
                                            ?>
                                        </div>

                                        <div class="col-md-6 col-sm-12">
                                            <!--Testimonial Column-->
                                            <div class="testimonial-column">
                                                <div class="single-item-carousel">
                                                    <?php
                                                    $c = 0;
                                                    $q = $this->md->my_query("select v.*,r.* from tbl_voter_registration v, tbl_review r where v.voter_id=r.voter_id and r.status='1'");
                                                    foreach ($q as $query) {
                                                        $c++;
                                                        ?>


                                                        <div class="testimonial-style-one">
                                                            <div class="number" style="font-size: 30px;font-weight: 500;
                                                                 text-transform: capitalize;
                                                                 color: #222;
                                                                 line-height: 30px;border-bottom:  1px solid #e5e5e6;"><?php echo $c; ?>.</div>
                                                            <div class="text"style="text-transform: capitalize; color: #222;border:  1px solid #e5e5e6;"><?php echo $query->review; ?></div>
                                                            <div class="author-info">
                                                                <div class="author-thumb">
                                                                    <?php
                                                                    if ($query->profile != "") {
                                                                        ?>
                                                                        <img src="<?php echo base_url() . $this->encryption->decrypt($query->profile); ?>" alt=""  style="height: 65px;width:100px;"/>
                                                                        <?php
                                                                    } else {
                                                                        ?>
                                                                        <img src="<?php echo base_url() . "visitor/images/background/user.png" ?>" alt=""  style="height: 65px;width:100px;"/>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                    }

                                                                </div>

                                                                <div class="designation" style="text-transform: capitalize; color: #222;"><?php echo $query->voter_name ?></div>
                                                                <div class="" style="text-transform: capitalize; color: #222;"><i class="fa fa-clock-o" style="padding-right: 10px;"></i><?php echo $query->datetime; ?></div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>


                    </section>

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
