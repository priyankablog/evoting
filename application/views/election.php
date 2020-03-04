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
                <div style="margin: 5% 0">
                    <div class="sec-title" style="margin-top: -120px;">

                        <h3 style="line-height: 2.6em;"><span class="theme_color">Election</span> Schedule</h3>
                        <span class="separator"></span>
                    </div>

                    <div style="margin-bottom: 5%;background: #fff !important">
                        <div class="col-md-1">
                            <div style="border:1px solid #dfdfdf;height: 55px;width: 55px;"></div> 
                        </div>
                        <div class="col-md-3">
                            <p style="padding-top: 12px;">
                                Election Done</p>
                        </div>
                        <div class="col-md-1">
                            <div style="border:1px solid #00b7f1;height: 55px;width: 55px;"></div> 
                        </div>
                        <div class="col-md-3">
                            <p style="padding-top: 12px;">
                                Current Election</p>
                        </div>
                        <div class="col-md-1">
                            <div style="border:1px solid #555;height: 55px;width: 55px;"></div> 
                        </div>
                        <div class="col-md-3">
                            <p style="padding-top: 12px;">
                                Upcoming Election</p>
                        </div>
                    </div>
                    <br><br>
                    <hr />
                    <br/>
                    <div class="row"> 

                        <div class="col-md-12" style="margin-bottom: -80px;">

                            <?php
                            $schedule = $this->md->my_query("select * from tbl_schedule order by date");
                            if ($schedule[0]->s_id <> "") {
                                foreach ($schedule as $val) {
                                    $voter = $this->md->my_query("select * from tbl_voter_registration where voter_id='" . $this->session->userdata('voter') . "'");


                                    $t = $this->md->my_query("select * from tbl_schedule where s_id='" . $val->s_id . "'");
                                    $q = $this->md->my_query("select * from tbl_election_category where category_id='" . $val->category_id . "'");

                                    if ($this->session->userdata('voter') != "") {
                                        if ($voter[0]->status == 1) {

                                            $arr = $voter[0]->location_id;
//                                            $location = $this->md->my_query("select * from tbl_location where l_id='" . $arr . "'");
                                            $q1 = "select st.l_id as st,ci.l_id as ci,ar.l_id as ar from tbl_location as st,tbl_location as ci,tbl_location as ar where st.l_id = ci.parent_id and ci.l_id = ar.parent_id and ar.l_id =" . $arr;
                                            $loc_data = $this->md->my_query($q1)[0];
                                            if ($loc_data->ci == $val->location_id) {
                                                if ($t[0]->date == date('Y-m-d')) {
                                                    ?>

                                                    <div class="services-block-five style-two col-lg-4 col-md-12 col-sm-12 col-xs-12">

                                                        <div class="inner-box">
                                                            <div class="icon-box" style="padding-top: 40px;">
                                                                <p>
                                                                    <?php
                                                                    $st = strtotime($val->date);

                                                                    echo date('M', $st);
                                                                    ?>
                                                                </p> 
                                                                <p style="font-size: 40px"><?php echo date('d', $st); ?></p>
                                                                <p><?php echo date('Y', $st); ?></p>
                                                            </div>
                                                            <div class="content-box">

                                                                 <h3 style="height: 100px">
                                                                    <a href="<?php echo base_url(); ?>Give-Election/<?php echo $q[0]->category_id; ?>"  onclick="giveelection('<?php echo $val->s_id; ?>', 'schedule')"><?php $str = explode(' ', $q[0]->category);
                                                                    echo $str[0]."<br>".$str[1];?></a>
                                                                </h3> 
                                                                <div class="text" style="font-size: 14px;">
                                                                    <a  class="btn btn-primary" href="<?php echo base_url();?>Give-Election/<?php echo $q[0]->category_id; ?>" data-target="#finalresult" style="background-color:green;border-color: #00b7f1;margin-bottom: 30px;margin-top: 10px;" onclick="giveelection('<?php echo $val->s_id; ?>', 'schedule')">View Election</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                } else {

                                                    if ($t[0]->date < date('Y-m-d')) {
                                                        ?>
                                                        <div  class="services-block-five style-two col-lg-4 col-md-12 col-sm-12 col-xs-12" >

                                                            <div class="inner-box">
                                                                <div class="icon-box" style="padding-top: 40px;border:#dfdfdf 1px solid;background: #eeeeee80;color: #555;height">
                                                                    <p>
                                                                        <?php
                                                                        $st = strtotime($val->date);

                                                                        echo date('M', $st);
                                                                        ?>
                                                                    </p> 
                                                                    <p style="font-size: 40px"><?php echo date('d', $st); ?></p>
                                                                    <p><?php echo date('Y', $st); ?></p>
                                                                </div>
                                                                <div class="content-box" style="background: #eeeeee80;min-height: 225px">

                                                                     <h3 style="height: 100px">
                                                                        <a><?php $str = explode(' ', $q[0]->category);
                                                                    echo $str[0]."<br>".$str[1];?></a>
                                                                    </h3> 

                                                                    <div class="text" style="font-size: 14px;">
                                                                        <a  class="btn btn-primary" href="<?php echo base_url('Election-Result/' . $val->s_id); ?>" data-target="#finalresult" style="background-color:green;border-color: #00b7f1;margin-bottom: 30px;margin-top: 10px;">View Full Result</a>

                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <div style="" class="services-block-five style-two col-lg-4 col-md-12 col-sm-12 col-xs-12" >

                                                            <div class="inner-box">
                                                                <div class="icon-box" style="padding-top: 40px;border:#555 1px solid;background: #eeeeee80;color: #555">
                                                                    <p>
                                                                        <?php
                                                                        $st = strtotime($val->date);

                                                                        echo date('M', $st);
                                                                        ?>
                                                                    </p> 
                                                                    <p style="font-size: 40px"><?php echo date('d', $st); ?></p>
                                                                    <p><?php echo date('Y', $st); ?></p>
                                                                </div>
                                                                <div class="content-box" style="background: #eeeeee80;min-height: 225px;">

                                                                     <h3 style="height: 100px">
                                                                        <a><?php $str = explode(' ', $q[0]->category);
                                                                    echo $str[0]."<br>".$str[1];?></a>
                                                                    </h3> 

                                                                    <div class="text" style="font-size: 14px;">
                                                                        <button  class="btn btn-primary"  style="background-color:green;border-color: #00b7f1;margin-bottom: 30px;margin-top: 10px;">View Election</button>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                }
                                            }
                                        } else {
                                            if ($t[0]->date == date('Y-m-d')) {
                                                ?>

                                                <div class="services-block-five style-two col-lg-4 col-md-12 col-sm-12 col-xs-12" >

                                                    <div class="inner-box">
                                                        <div class="icon-box" style="padding-top: 40px;">
                                                            <p>
                                                                <?php
                                                                $st = strtotime($val->date);

                                                                echo date('M', $st);
                                                                ?>
                                                            </p> 
                                                            <p style="font-size: 40px"><?php echo date('d', $st); ?></p>
                                                            <p><?php echo date('Y', $st); ?></p>
                                                        </div>
                                                        <div class="content-box">

                                                             <h3 style="height: 100px">
                                                                <a><?php $str = explode(' ', $q[0]->category);
                                                                    echo $str[0]."<br>".$str[1];?></a>
                                                            </h3> 
                                                            <div class="text" style="font-size: 14px;">
                                                                <button  class="btn btn-primary"  style="background-color:green;border-color: #00b7f1;margin-bottom: 30px;margin-top: 10px;">View Election</button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            } else {
                                                if ($voter[0]->location_id != "0") {
                                                    $arr = $voter[0]->location_id;
//                                            $location = $this->md->my_query("select * from tbl_location where l_id='" . $arr . "'");
                                                    $q1 = "select st.l_id as st,ci.l_id as ci,ar.l_id as ar from tbl_location as st,tbl_location as ci,tbl_location as ar where st.l_id = ci.parent_id and ci.l_id = ar.parent_id and ar.l_id =" . $arr;
                                                    $loc_data = $this->md->my_query($q1)[0];
                                                    if ($loc_data->ci == $val->location_id) {
                                                        if ($t[0]->date < date('Y-m-d')) {
                                                            ?>
                                                            <div style="" class="services-block-five style-two col-lg-4 col-md-12 col-sm-12 col-xs-12" >

                                                                <div class="inner-box">
                                                                    <div class="icon-box" style="padding-top: 40px;border:#dfdfdf 1px solid;background: #eeeeee80;color: #555">
                                                                        <p>
                                                                            <?php
                                                                            $st = strtotime($val->date);

                                                                            echo date('M', $st);
                                                                            ?>
                                                                        </p> 
                                                                        <p style="font-size: 40px"><?php echo date('d', $st); ?></p>
                                                                        <p><?php echo date('Y', $st); ?></p>
                                                                    </div>
                                                                    <div class="content-box" style="background: #eeeeee80;min-height: 225px">

                                                                         <h3 style="height: 100px">
                                                                            <a><?php $str = explode(' ', $q[0]->category);
                                                                    echo $str[0]."<br>".$str[1];?></a>
                                                                        </h3> 

                                                                        <div class="text" style="font-size: 14px;">
                                                                            <a class="btn btn-primary" href="<?php echo base_url('Election-Result/' . $val->s_id); ?>" data-target="#finalresult" style="background-color:green;border-color: #00b7f1;margin-bottom: 30px;margin-top: 10px;">View Full Result</a>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <?php
                                                        } else {
                                                            ?>
                                                            <div style="" class="services-block-five style-two col-lg-4 col-md-12 col-sm-12 col-xs-12" >

                                                                <div class="inner-box">
                                                                    <div class="icon-box" style="padding-top: 40px;border:#555 1px solid;background: #eeeeee80;color: #555">
                                                                        <p>
                                                                            <?php
                                                                            $st = strtotime($val->date);

                                                                            echo date('M', $st);
                                                                            ?>
                                                                        </p> 
                                                                        <p style="font-size: 40px"><?php echo date('d', $st); ?></p>
                                                                        <p><?php echo date('Y', $st); ?></p>
                                                                    </div>
                                                                    <div class="content-box" style="background: #eeeeee80">

                                                                         <h3 style="height: 100px">
                                                                            <a><?php $str = explode(' ', $q[0]->category);
                                                                    echo $str[0]."<br>".$str[1];?></a>
                                                                        </h3> 

                                                                        <div class="text" style="font-size: 14px;">
                                                                             <button  class="btn btn-primary"  style="background-color:green;border-color: #00b7f1;margin-bottom: 30px;margin-top: 10px;">View Election</button>

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php
                                                        }
                                                    }
                                                } else {
                                                    echo "No Election Yet";
                                                    break;
                                                }
                                            }
                                        }
                                    } else {
                                        if ($t[0]->date == date('Y-m-d')) {
                                            ?>

                                            <div class="services-block-five style-two col-lg-4 col-md-12 col-sm-12 col-xs-12" >

                                                <div class="inner-box">
                                                    <div class="icon-box" style="padding-top: 40px;">
                                                        <p>
                                                            <?php
                                                            $st = strtotime($val->date);

                                                            echo date('M', $st);
                                                            ?>
                                                        </p> 
                                                        <p style="font-size: 40px"><?php echo date('d', $st); ?></p>
                                                        <p><?php echo date('Y', $st); ?></p>
                                                    </div>
                                                    <div class="content-box">

                                                        <h3 style="height: 100px">
                                                            <a><?php $str = explode(' ', $q[0]->category);
                                                                    echo $str[0]."<br>".$str[1];?></a>
                                                        </h3> 
                                                        <div class="text" style="font-size: 14px;">
                                                            <button  class="btn btn-primary" style="background-color:green;border-color: #00b7f1;margin-bottom: 30px;margin-top: 10px;" value="View Election">View Election</button>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        } else {
                                            if ($t[0]->date < date('Y-m-d')) {
                                                ?>
                                                <div style="" class="services-block-five style-two col-lg-4 col-md-12 col-sm-12 col-xs-12" >

                                                    <div class="inner-box">
                                                        <div class="icon-box" style="padding-top: 40px;border:#dfdfdf 1px solid;background: #eeeeee80;color: #555">
                                                            <p>
                                                                <?php
                                                                $st = strtotime($val->date);

                                                                echo date('M', $st);
                                                                ?>
                                                            </p> 
                                                            <p style="font-size: 40px"><?php echo date('d', $st); ?></p>
                                                            <p><?php echo date('Y', $st); ?></p>
                                                        </div>
                                                        <div class="content-box" style="background: #eeeeee80;min-height: 225px;">

                                                            <h3 style="height: 100px">
                                                                <a><?php $str = explode(' ', $q[0]->category);
                                                                    echo $str[0]."<br>".$str[1];?></a>
                                                            </h3> 

                                                            <!--                                                            <div class="text" style="font-size: 14px;"><?php
                                                            $str = substr($q[0]->description, 0, 55);
                                                            echo $str;
                                                            ?>
                                                                                                                        </div>-->
                                                            <div class="text" style="font-size: 14px;">
                                                                <a  class="btn btn-primary" href="<?php echo base_url('Election-Result/' . $val->s_id); ?>" data-target="#finalresult" style="background-color:green;border-color: #00b7f1;margin-bottom: 30px;margin-top: 10px;">View Full Result</a>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <?php
                                            } else {
                                                ?>
                                                <div style="" class="services-block-five style-two col-lg-4 col-md-12 col-sm-12 col-xs-12" >

                                                    <div class="inner-box">
                                                        <div class="icon-box" style="padding-top: 40px;border:#555 1px solid;background: #eeeeee80;color: #555">
                                                            <p>
                                                                <?php
                                                                $st = strtotime($val->date);

                                                                echo date('M', $st);
                                                                ?>
                                                            </p> 
                                                            <p style="font-size: 40px"><?php echo date('d', $st); ?></p>
                                                            <p><?php echo date('Y', $st); ?></p>
                                                        </div>
                                                        <div class="content-box" style="background: #eeeeee80">

                                                            <h3 style="height: 100px">
                                                                <a><?php $str = explode(' ', $q[0]->category);
                                                                    echo $str[0]."<br>".$str[1];?></a>
                                                            </h3> 


                                                            <div class="text" style="font-size: 14px;">
                                                                
<button  class="btn btn-primary" style="background-color:green;border-color: #00b7f1;margin-bottom: 30px;margin-top: 10px;" value="View Election">View Election</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        }
                                    }
                                }
                            } else {
                                ?>

                                <div class="alert alert-danger" role="alert">
                                    <?php echo "No Any Election Yet"; ?>
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
        <div class="modal fade" id="finalresult" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

        </div>
    </body>
    <?php
    $this->load->view('footerscript');
    ?>

</html>
