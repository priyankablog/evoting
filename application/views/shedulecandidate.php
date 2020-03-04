
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

                    <div class="row clearfix">            <?php
                        $this->load->view('partymiddledashboard');
                        $s = $this->md->my_query("select * from tbl_schedule where location_id='" . $this->uri->segment(2) . "'");
                        $e = $this->md->my_query("select * from tbl_election_category where category_id='" . $this->uri->segment(3) . "'");
                        $qu1 = $this->md->my_query("select * from tbl_location where l_id='" . $this->uri->segment(2) . "' and label='city'");
                        $qu2 = $this->md->my_query("select * from tbl_location where l_id='" . $qu1[0]->parent_id . "' and label='state'");
                        ?>
                        <div class="col-md-9" style="padding-top: 30px;">
                            <div class="auto-container">

                                <div class="row" style="background: #fff;border:5px double #eee;width:840px;">
                                    <div class="sec-title" style="margin-bottom: 0;padding: 10px">

                                            <h3 style="line-height: 2.6em">About <span class="theme_color">Schedule</span></h3>
                                        <span class="separator"></span>
                                    </div>
                                    <div class="col-md-12 text-capitalize" style="padding-top: 10px;padding-bottom: 10px;">
                                        <div class="col-md-2">
                                            <h3 style="font-size: 18px;padding-top: 18%"><?php echo $e[0]->category; ?></h3>
                                        </div>
                                        <div class="col-md-2" style="">
                                            <img src="<?php echo base_url(); ?>visitor/images/handright.png" alt="" style="height:70px;width:70px;margin-top: -3px;"/>
                                        </div>
                                        <div class="col-md-3">
                                            <h3 style="font-size: 18px;padding-top: 11%"><?php echo $qu2[0]->name . "," . $qu1[0]->name; ?></h3>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="<?php echo base_url(); ?>visitor/images/handright.png" alt="" style="height:70px;width: 70px;margin-top: -3px;" />
                                        </div>
                                        <div class="col-md-3">
                                            <h3 style="font-size: 17px;text-align: left;padding-top: 11%"><?php
                                                $st = strtotime($s[0]->date);

                                                echo date('d', $st) . " - " . date('M', $st) . " - " . date('Y', $st);
                                                ?></h3>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-side-bar">
                            <div class="auto-container" >
                                <div class="row">
                                    <div class="col-md-9">
                                        <!--News Block-->
                                        <?php
                                        $query3 = $this->md->my_query("select * from tbl_location where l_id='" . $this->uri->segment(2) . "'");

                                        $qu = $this->md->my_query("select * from tbl_location where parent_id='" . $query3[0]->l_id . "'");
                                        foreach ($qu as $v) {
                                            $query2 = $this->md->my_query("select * from tbl_candidate_registration where party_id='" . $this->session->userdata('party') . "' and location_id='" . $v->l_id . "' and category_id='" . $e[0]->category_id . "'");
                                            $query = $this->md->my_query("select parent_id from tbl_location where l_id='" . $this->uri->segment(2) . "'");
                                            $query1 = $this->md->my_query("select l_id from tbl_location where l_id='" . $query[0]->parent_id . "'");

                                            $q = $this->md->my_query("select * from tbl_candidate_registration where location_id='" . $query1[0]->l_id . "' and party_id='" . $this->session->userdata('party') . "'");

                                            $q1 = $this->md->my_query("select * from tbl_party_registration where party_id='" . $this->session->userdata('party') . "'");
                                            //$q=$this->md->my_query("select * from tbl_candidate_registration where party_id='".$this->session->userdata('party')."'");

                                            foreach ($query2 as $query) {
                                                ?>
                                                <div class="box col-md-4 col-sm-4 col-xs-12" style="padding-top:30px;">
                                                    <div class="inner-box wow fadeInLeft mybox animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft; border:1px solid #dfdfdf;padding: 20px;height:570px;background-color: #ffffff;width:270px;">
                                                        <figure class="image-box" style="position: relative; width: 154px;height: 154px;overflow: hidden;border-radius: 50%;margin: 0 auto;margin-bottom: 25px;">

                                                            <a href="<?php echo base_url(); ?>Candidate-Info/<?php echo $query->candidate_id; ?>">
                                                                <img src="<?php echo base_url() . $query->profile_pic; ?>" alt="" class="center-block"></a>

                                                        </figure>
                                                        <div class="lower-content" style="border:none">
                                                            <div class="upper-box">
                                                                <h3 class="myhead" style="margin-bottom: 1px;text-align:left;"><a href="<?php echo base_url(); ?>Candidate-Info/<?php echo $query->candidate_id; ?>"><?php echo $query->candidate_name; ?></a></h3>
                                                                <div class="lower-box" style="padding: 11px 0px 0px;border:none">
                                                                    <div class="date"><b>Party</b> : <?php echo $q1[0]->p_name; ?></div>
                                                                </div>
                                                                <div class="lower-box" style="padding: 0px 0px 7px">
                                                                    <div class="date"><b>Age</b> :
                                                                        <?php
                                                                        $dob = explode("-", $query->dob);
                                                                        $age = date('Y') - $dob[2];
                                                                        echo $age;
                                                                        ?>
                                                                    </div>
                                                                </div>
                                                                <div class="text" style="height:160px;"><?php
                                                                    $str = $query->description;
                                                                    echo substr($str, 0, 120)."...";
                                                                    ?></div>
                                                                <div class="col-lg-offset-6">


                                                                    <a class="btn btn-primary" target="_new" style="background-color: #00b7f1;
                                                                       border-color: #00b7f1;" href="<?php echo base_url(); ?>Candidate-Info/<?php echo $query->candidate_id; ?>">Read More</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
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

