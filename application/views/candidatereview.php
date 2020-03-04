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
                          $q1 = $this->md->my_query("select * from tbl_party_registration where party_id='" . $this->session->userdata('party') . "'");
                                        if ($q1[0]->status == 1) {
                        ?>
                        <section class="contact_us sec-padd-bottom" style="margin-bottom: -130px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-xs-12" id="mycss1" style="padding: 20px;background: #fff;box-shadow: 0 0 0 2px #eee,0 0 0 7px #fff,0 0 0 9px #eee;margin-left: 26px;margin-top: 28px;">
                                        <div class="section-title">
                                            <h3 class="myhead">Candidate Review</h3>

                                        </div>

                                        <div class="default-form-area" id="css1">
                                            <form name="contact_form" class="default-form" method="post">
                                                <div class="panel-body">

                                                    <table id="data-table" class="table table-striped table-bordered my-pagging nova-pagging" style="background: transparent !important;font-size: 13px;">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th nova-search="yes">Candidate</th>
                                                                <th nova-search="yes">Voter Name</th>
                                                                <th nova-search="yes">Review</th>
                                                                <th nova-search="yes">Date</th>
                                                                <th>Status</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $c = 0;
 $q1 = $this->md->my_query("select candidate_id from tbl_candidate_registration where party_id='" . $this->session->userdata('party') . "'");
                                                            foreach ($q1 as $vl) {

                                                                $q2 = $this->md->my_query("select r.status as st ,r.*,c.* from tbl_review r,tbl_candidate_registration c where r.candidate_id=c.candidate_id and r.candidate_id='" . $vl->candidate_id . "'");


                                                                foreach ($q2 as $val) {
                                                                    $q = $this->md->my_query("select * from tbl_voter_registration where voter_id='" . $val->voter_id . "'");
                                                                    $c++;
                                                                    ?>
                                                                    <tr class="odd gradeX">
                                                                        <td><?php echo $c; ?></td>
                                                                        <td><?php echo $val->candidate_name; ?></td>
                                                                        <td><?php echo $q[0]->voter_name; ?></td>
                                                                        <td><?php echo $val->review; ?></td>
                                                                        <td><?php echo $val->datetime; ?></td>
                                                                        <?php
                                                                        if ($val->st == 0) {
                                                                            ?>
                                                                            <td><a class="deactive" id="<?php echo $val->review_id; ?>" onclick="active(this.id, 'candidatereview');" style="color: red;">Deactive</a></td>
                                                                            <?php
                                                                        } else {
                                                                            ?>
                                                                            <td><a class="active" id="<?php echo $val->review_id; ?>" onclick="active(this.id, 'candidatereview');" style="color:green;">Active</a></td>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    </tr>

                                                                    <?php
                                                                }
                                                            }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <?php
                         }
                    else
                    {
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
            <style type="text/css">
                .input-group-addon select{
                    background: transparent !important;
                }  
                .nova-tab ul li{
                    display: inline-block !important;
                    padding: 10px;
                }
            </style>

            <?php
            $this->load->view('footer');
            ?>

    </body>

    <?php
    $this->load->view('footerscript');
    ?>

</html>
