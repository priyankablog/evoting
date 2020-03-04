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
        <div class="services-section style-two">
            <div class="container" style="margin-top: -45px;">
                <div class="container">
                    <div class="row">
                        <form name="" method="post">
                            <?php
                            $q = $this->md->my_query("select * from tbl_election_category");
                            $q2 = $this->md->my_query("select * from tbl_schedule");

                            //$data=$this->md->my_query("select p.p_name,p.p_logo ,c.* from tbl_party_registration p ,tbl_candidate_registration c where c.party_id=p.party_id and p.party_id='".$id."'");
                            $data = $this->md->my_query("select * from tbl_candidate_registration where candidate_id='" . $this->uri->segment(2) . "'");
                            $data1 = $this->md->my_query("select * from tbl_party_registration where party_id='" . $data[0]->party_id . "'");
                            $c = $this->md->my_query("select * from tbl_voter_registration where voter_id=" . $this->session->userdata('voter'));
                            $q1 = $this->md->my_query("select * from tbl_location where l_id=" . $c[0]->location_id);
                            ?>

                            <div class="col-md-8" style="background-color: #E5EFF8;margin-bottom: 30px;margin-left: 200px;">
                                <center>
                                    <?php
                                    if (!isset($error)) {
                                        ?>
                                        <img src="<?php echo base_url(); ?>visitor/images/vote.gif" style="height:250px;width:250px;"/>
                                        <p style="font-size: 28px;" class="text-primary">Confirm Cast Your Vote <i class="fa fa-check-circle text-success"></i> </p>
                                        <?php
                                    } else {
                                        ?> 
                                        <br/>
                                        <img src="<?php echo base_url(); ?>visitor/images/warning.gif" style="height:100px;width:100px;padding: 4px"/>
                                        <p style="font-size: 24px;" class="text-warning">You already cast your vote!</p>
                                        <?php
                                    }
                                    ?>



                                </center>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-offset-2 col-md-4" style="padding-left: 107px;">
                                            <p style="">
                                                <b>Election Category :</b></p>
                                            <p style=""><b>
                                                    Party Name : </b></p>
                                            <p style=""><b>
                                                    Candidate Name : </b></p>
                                            <p style=""><b>
                                                    Voter Name : </b></p>
                                            <p style=""><b>
                                                    Voting ID : </b></p>
                                            <p style=""><b>
                                                    Area Name : </b></p>
                                        </div>
                                        <div class="col-md-6">
                                            <p>   <?php
                                                echo $q[0]->category;
                                                ?></p>
                                            <p>
                                                <?php
                                                echo $data1[0]->p_name;
                                                ?></p>
                                            <p>
                                                <?php
                                                echo $data[0]->candidate_name;
                                                ?></p>
                                            <p>
                                                <?php
                                                echo $voter->voter_name;
                                                ?></p>
                                            <p>
                                                <?php
                                                echo $voter->voting_id;
                                                ?></p>
                                            <p>
                                                <?php
                                                echo $q1[0]->name;
                                                ?></p>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                if ($this->session->userdata('voter') != "") {
                                    $this->session->set_userdata('candidate_id', $data[0]->candidate_id);
                                }
                                if (!isset($error)) {
                                    ?>
                                <center>
                                <div class="col-md-12">
                                            <div class="g-recaptcha" data-sitekey="6LdC9lMUAAAAAORixUtNglnBOxjTmtqzhfx9fjEX"></div>
                                            <p class="err_msg">
                                                <?php if(form_error('g-recaptcha-response')){ echo form_error('g-recaptcha-response'); }  ?>
                                            </p>
                                        </div>
                                </center>
                                    <center>
                                        <input type="submit" class="btn btn-primary" style="background-color:green;
                                               border-color: #00b7f1;margin-bottom: 30px;margin-top: 10px;" value="Confirm Vote" name="confirm"/>
                                    </center>
                                    <?php
                                } else {
                                    ?>
                                    <center>
                                        <a href="<?php echo base_url('Dashboard'); ?>" class="btn btn-danger" style="margin-bottom: 30px;margin-top: 10px;" > &leftarrow; Back To Dashboard</a>
                                    </center>
                                    <?php
                                }
                                if (isset($success)) {
                                    ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo $success; ?>
                                    </div>
                                    <?php
                                }
                                ?>

                            </div>
                            <!--                        <div class="col-md-offset-2 col-md-8" style="background-color: #fff;margin-bottom: 30px;">
                                                        <center>
                                                            <img src="<?php echo base_url(); ?>visitor/images/vote-icon.png" style="height:150px;width:150px;"/>
                                                            <p style="font-size: 24px;">Confirm Cast Your Vote</p>
                                                            <p style="display: inline;">
                                                                <b>Election Category :</b></p>
                            <?php
                            echo $q[0]->category;
                            ?>
                                                            <br>
                                                            <p style="display: inline;"><b>
                                                                    Party Name : </b></p>
                            <?php
                            echo $data1[0]->p_name;
                            ?><br>
                                                            <p style="display: inline;"><b>
                                                                    Candidate Name : </b></p>
                            <?php
                            echo $data[0]->candidate_name;
                            ?>
                                                            <br>
                                                            <p style="display: inline;"><b>
                                                                    Area Name : </b></p>
                            <?php
                            echo $q1[0]->name;
                            ?>
                                                            <br>
                            <?php
                            if ($this->session->userdata('voter') != "") {
                                $this->session->set_userdata('candidate_id', $data[0]->candidate_id);
                            }
                            ?>
                                                            <input type="submit" class="btn btn-primary" style="background-color:green;
                                                                   border-color: #00b7f1;margin-bottom: 30px;margin-top: 10px;" value="Confirm Vote" name="confirm"/>
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
                                                                                                                    <div class="alert alert-danger" role="alert">
                                <?php echo $error; ?>
                                                                                                                    </div>
                                <?php
                            }
                            ?>
                                                        </center>
                                                    </div>-->
                        </form>
                    </div>
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
