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

        <div class="services-section style-two">
            <div class="container">
                <div class="sec-title" style="margin-top: -70px;">

                    <h3 style="line-height: 2.6em;">All <span class="theme_color">Candidate</span></h3>
                    <span class="separator"></span>

                </div> 
                <div class="auto-container">

                    <div class="row">
                        <div class="col-md-12">
                            <?php
                            $party = $this->md->my_query("select * from tbl_party_registration where status=1");
                            ?>
                            <label nama="" >Select Party</label>
                            <select class="" id="party" name="party" onchange="setcandidate(this.value)" value="" style="height:50px;width:100%;">  

                                <option value="">Party</option>
                                <?php
                                foreach ($party as $vl) {
                                    ?>
                                    <option class="" value="<?php echo $vl->party_id; ?>" >
                                        <?php
                                        echo $vl->p_name;
                                        ?></option>
                                    <?php
                                }
                                ?>  
                            </select>
                        </div>
                        <div class="col-md-12" id="setcandidate">
                            <div class="row">
                                <div class="col-md-12" id="load">
                                    
                                </div>
                            </div>
                            <?php
                            $data = $this->md->my_query("select p.p_name,p.p_logo ,c.* from tbl_party_registration p ,tbl_candidate_registration c where c.party_id=p.party_id and c.status=1");

                            foreach ($data as $query) {
                                ?>
                                <div class="box col-md-4 col-sm-4 col-xs-12" style="padding-top: 30px;">
                                    <div class="col-md-offset-1" style="position: absolute; padding-left: 70%; padding-top: 15px;z-index: 99;">
                                        <img src="<?php echo base_url($query->p_logo); ?>" alt="<?php $query->p_name; ?>" class="" style="width: 40px; height:30px;position: relative;">    
                                    </div>

                                    <div class="inner-box fadeInLeft mybox animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft; border:1px solid #dfdfdf;padding: 20px;height:480px;background-color: #ffffff;">

                                        <figure class="image-box" style="position: relative; height: 160px;width:160px;overflow: hidden;border-radius: 50%;margin: 0 auto;margin-bottom: 25px;">
                                            <img src="<?php echo base_url() . $query->profile_pic; ?>" alt="" class="">
                                        </figure>
                                        <div class="lower-content" style="border:none">
                                            <div class="upper-box">
                                                <h3 class="" style="text-transform: uppercase;"><a href="<?php echo base_url(); ?>Candidate-Info/<?php echo $query->candidate_id; ?>"><?php echo $query->candidate_name; ?></a></h3>
                                                <div class="lower-box" style="padding: 11px 0px 0px;border:none">
                                                    <div class="date"><b>Party</b> :<?php echo $query->p_name; ?></div>

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
                                                <div class="text" style="height:90px;"><?php
                                                    $str = $query->description;
                                                    echo substr($str, 0, 120)."...";
                                                    ?></div>
                                                <div class="col-lg-offset-8">

                                                    <a class="btn btn-primary" style="background-color: #00b7f1;border-color: #00b7f1;" href="<?php echo base_url(); ?>Candidate-Info/<?php echo $query->candidate_id; ?>" target="_blank">Read More</a>

                                                </div>

                                            </div>
                                        </div>
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


        <?php
        $this->load->view('footer');
        ?>
    </body>

    <?php
    $this->load->view('footerscript');
    ?>
    <script type="text/javascript" src="<?php echo base_url(); ?>visitor/js/set.js"></script>
</html>
