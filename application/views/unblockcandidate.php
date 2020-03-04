
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
        <div class="services-section style-two">
            <div class="container">
                <div class="sec-title" style="margin-top: -70px;">

                    <h3 style="line-height: 2.6em;">All Unblock <span class="theme_color">Candidate</span></h3>
                    <span class="separator"></span>
                </div> 
            <div style="margin: 5% 0">
                <div class="row">
                    
                    <div class="right-side-bar">
                        <div class="auto-container">
                            <div class="row">
                                <div class="col-md-12" id="blockcandidate">
                                    <!--News Block-->
                                    <?php
                                   $q1 = $this->md->my_query("select * from tbl_party_registration where party_id='" . $this->session->userdata('party') . "'");
                    if ($q1[0]->status == 1) {
                        

                                    $q = $this->md->my_query("select * from tbl_candidate_registration where party_id='" . $this->session->userdata('party') . "' and status=1");
                                    if(!empty($q))
                                    {
                                    foreach ($q as $query) {
                                        if($query->candidate_id!="")
                                    {
                                        ?>
                                        <div class="box col-md-4 col-sm-4 col-xs-12" style="padding-top:30px;">
                                            <div class="inner-box wow fadeInLeft mybox animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft; border:1px solid #dfdfdf;padding: 20px;height:550px;background-color: #ffffff;">
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
                                                        <div class="text" style="height:140px;"><?php
                                                            $str = $query->description;
                                                            echo substr($str, 0, 120)."...";
                                                            ?></div>
                                                        <div class="col-md-12">

                                                            <a class="btn btn-primary" style="background-color: #00b7f1;border-color: #00b7f1;" href="<?php echo base_url(); ?>Edit-Candidate/<?php echo $query->candidate_id; ?>">Edit</a>
                                                            <a class="btn btn-primary" target="_blank" style="background-color: #00b7f1;border-color: #00b7f1;" href="<?php echo base_url(); ?>Candidate-Info/<?php echo $query->candidate_id; ?>">Read More</a>

                                                        </div>
                                                        <div class="col-md-12" style="margin-top: 5px;">
                                                            <?php
                                                            if ($query->status == 0) {
                                                                ?>

                                                            <a class="btn btn-danger unbl" style="width: 53%;" id="<?php echo $query->candidate_id; ?>" onclick="block(this.id, 'candidateblock');">Unblock Candidate</a>

                                                                <?php
                                                            } else {
                                                                ?>

                                                                <a class="btn btn-danger bl" style="width: 53%;" id="<?php echo $query->candidate_id; ?>" onclick="block(this.id, 'candidateblock');">Block Candidate</a>


                                                                <?php
                                                            }
                                                            ?>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                    }
                                    }
                                    }
                                    else
                                    {
                                    ?>
                                    <div class="text">
                                        <p>Candidate  Not Available</p>
                                    </div>
                                    <?php
                                    }
                    }else
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

</html>

