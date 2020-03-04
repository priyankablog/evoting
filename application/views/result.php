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
            <div class="container">
                <div class="row">
                    <div class="sec-title" style="margin-top: -70px;">

                        <h3 style="line-height: 2.6em;">Winning Seats by <span class="theme_color">Party</span></h3>
                        <span class="separator"></span>
                    </div>
                    <div class="row clearfix">
                        <!--Services Block Two-->
                        <?php
                        foreach ($arrParty as $part) {
                            ?>
                            <div class="col-md-3" style="margin-bottom: 20px;position: relative;">
                                <div style="background: #fff;padding: 20px 10px">
                                    <?php
                                    if ($part['winner']) {
                                        ?>
                                        <img src="<?php echo base_url('visitor/images/trophy.png'); ?>" title="Winning party" style="position: absolute;right: -4px;top: -21px;width: 50px" />
                                        <?php
                                    }
                                    ?>
                                    <img src="<?php echo base_url($part['p_logo']); ?>" class="center-block" style="height: 80px;" />
                                    <h4 class="text-center" style="font-size: 14px;margin-top: 10px"><?php echo $part['p_name']; ?></h4>
                                    <br/>
                                    <p class="text-center text-primary" style="font-size: 30px">
                                        <?php
                                        echo $part['sets'];
                                        ?>
                                    </p> 
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>


                <div class="row" style="margin-top: 7%">
                    <div class="sec-title" style="margin-top: -70px;">

                        <h3 style="line-height: 2.6em;">Area wise <span class="theme_color">Candidate </span> Reports</h3>
                        <span class="separator"></span>
                    </div>

                    <div class="row">
                        <?php 
                        foreach ($arrResult as $final) {
                            ?>
                            <div class="col-md-6">
                                <div style="background: #fff;padding: 20px;margin-bottom: 20px">
                                    <i class="fa fa-map-marker fa-2x text-primary mymap"></i>
                                    &nbsp;&nbsp;&nbsp;
                                    <?php
                                    echo $final['location']->area;
                                    ?>
                                    &nbsp; &nbsp;
                                    <i class="fa fa-chevron-circle-right"></i>
                                    &nbsp; &nbsp;
                                    <?php
                                    echo $final['location']->city;
                                    ?>
                                    &nbsp; &nbsp;
                                    <i class="fa fa-chevron-circle-right"></i>
                                    &nbsp; &nbsp;
                                    <?php
                                    echo $final['location']->state;
                                    ?>

                                    <hr />


                                    <table class="table table-striped table-bordered">
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">Party</th>
                                            <th class="text-center">Candidate</th>
                                            <th class="text-center">Photo</th>
                                            <th class="text-center">Vote</th>
                                        </tr>
                                        <?php
                                        foreach ($final['result'] as $candidate) {
                                        ?>
                                        <tr class="text-center" style="position: relative">
                                            <td> <img src="<?php echo base_url($candidate->p_logo); ?>" style="height: 40px" class="center-block" /></td>
                                            <td><?php echo $candidate->p_name; ?></td>
                                            <td><?php echo $candidate->candidate_name; ?></td>
                                            <td> <img src="<?php echo base_url($candidate->profile_pic); ?>" style="height: 40px" class="center-block" /></td>
                                            <td style="font-size: 20px">
                                                <?php echo $candidate->vote_count; ?>
                                                <?php
                                                    if($candidate->winner){
                                                ?>
                                                <img src="<?php echo base_url('visitor/images/trophy.png'); ?>" style="width: 33px;position: absolute;right: 0" />
                                                <?php
                                                    }
                                                ?>
                                            </td>
                                            
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </table>

                                </div>


                            </div>
                            <?php
                        }
                        ?>
                    </div>

                </div>
            </div>
        </div>
        <?php
        $this->load->view('footer');
        ?>
        <div class="modal fade" id="finalresult" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

        </div>
    </body>
    <?php
    $this->load->view('footerscript');
    ?>

</html>
