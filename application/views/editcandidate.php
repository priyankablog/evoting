
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
                    <section class="contact_us sec-padd-bottom">
                        <div class="container">

                            <div class="row">
                                <?php
                                $c = $this->md->my_query("select * from tbl_candidate_registration where candidate_id='" . $this->uri->segment(2) . "'");
                                $q = $this->md->my_query("select * from tbl_location where l_id=" . $c[0]->location_id);
                                $q1 = $this->md->my_query("select * from tbl_location where l_id=" . $q[0]->parent_id);
                                $q2 = $this->md->my_query("select * from tbl_location");
                                $dob = explode("-", $c[0]->dob);

                                $q1 = "select co.l_id as co,st.l_id as st,ci.l_id as ci from tbl_location as co,tbl_location as st,tbl_location as ci where co.l_id = st.parent_id and st.l_id = ci.parent_id and ci.l_id = " . $c[0]->location_id;
                                $res = $this->md->my_query($q1);
                                ?>

                                <div class="col-md-8 col-sm-8 col-xs-12" id="mycss1" style="padding: 40px;background: #fff;box-shadow: 0 0 0 2px #eee,0 0 0 7px #fff,0 0 0 9px #eee;margin-left: 26px;margin-top: 28px;width:822px;margin-bottom: -20px;">
                                    <div class="row">

                                        <div class="section-title">
                                            <h3 class="myhead">Edit Candidate</h3>
                                        </div>
                                        
                                        <div class="default-form-area" id="css1">
                                            <form name="" class="default-form" method="post">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="group-inner">
                                                                <label name="" class="">
                                                                    Candidate Name:
                                                                </label>
                                                                <input type="text" class="form-control <?php
                                                                if (form_error('cname')) {
                                                                    echo "error_style";
                                                                }
                                                                ?>" name="cname" id=""  value="<?php
                                                                       if ($c[0]->candidate_name != "") {
                                                                           echo $c[0]->candidate_name;
                                                                       }
                                                                       ?>">
                                                                <p class="err_msg"><?php echo form_error('cname'); ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="col-md-offset-5">
                                                             <img class="center-block"  src="<?php echo base_url() . $c[0]->profile_pic; ?>" alt="" style="height: 120px;width:70%;padding-left: 30px;position: relative;margin-top: -20px; "/>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="group-inner">
                                                                <label name="" class="">Email Address:
                                                                </label>
                                                                <input type="text" class="form-control <?php
                                                                if (form_error('email')) {
                                                                    echo "error_style";
                                                                }
                                                                ?>" name="email" id=""  value="<?php
                                                                       if ($c[0]->email_id != "") {
                                                                           echo $c[0]->email_id;
                                                                       }
                                                                       ?>" style="height:50px;"> 
                                                                <p class="err_msg"><?php echo form_error('email'); ?></p>
                                                            </div>
                                                        </div>
<div class="col-md-6 col-sm-6 col-xs-12">

                                                            <div class="group-inner">
                                                                <label name="" class="">Gender</label>

                                                                <select name="gender" style="height:50px;width: 100%;" class="<?php
                                                                if (form_error('gender')) {
                                                                    echo "error_style";
                                                                }
                                                                ?>">
                                                                    <option value="">Select Gender</option>

                                                                    <option  <?php
                                                                    if ($c[0]->gender == 'Male') {
                                                                        echo "selected";
                                                                    }
                                                                    ?>><?php
                                                                            if ($c[0]->gender == 'Male') {
                                                                                echo "Male";
                                                                            } else {
                                                                                echo "Male";
                                                                            }
                                                                            ?> </option>
                                                                    <option <?php
                                                                    if ($c[0]->gender == 'Female') {
                                                                        echo "selected";
                                                                    }
                                                                    ?>><?php
                                                                            if ($c[0]->gender == 'Female') {
                                                                                echo "Female";
                                                                            } else {
                                                                                echo "Female";
                                                                            }
                                                                            ?></option>
                                                                </select>
                                                                <p class="err_msg"><?php echo form_error('gender'); ?></p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12" style="margin-top: 30px;">
                                                            <label name="" class="">Date Of Birth</label>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-3 col-xs-12">

                                                            <div class="group-inner">

                                                                <select name="day" style="height:50px;width: 100%;"class="<?php
                                                                if (form_error('day')) {
                                                                    echo "error_style";
                                                                }
                                                                ?>">
                                                                    <option value="">Day</option>
                                                                    <?php
                                                                    for ($i = 1; $i <= 31; $i++) {
                                                                        ?>
                                                                        <option
                                                                        <?php
                                                                        if ($dob[0] == $i) {
                                                                            echo "selected";
                                                                        }
                                                                        ?>>
                                                                                <?php echo $i; ?>
                                                                        </option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                                <p class="err_msg"><?php echo form_error('day'); ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-3 col-xs-12">
                                                            <div class="group-inner">

                                                                <select name="month" style="height:50px;width: 100%;" class="<?php
                                                                if (form_error('month')) {
                                                                    echo "error_style";
                                                                }
                                                                ?>">
                                                                    <option value="">Month</option>
                                                                    <option <?php
                                                                    if ($dob[1] == "January") {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>January</option>
                                                                    <option
                                                                    <?php
                                                                    if ($dob[1] == "February") {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>February</option>
                                                                    <option
                                                                    <?php
                                                                    if ($dob[1] == "March") {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>March</option>
                                                                    <option
                                                                    <?php
                                                                    if ($dob[1] == "April") {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>April</option>
                                                                    <option
                                                                    <?php
                                                                    if ($dob[1] == "May") {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>May</option>
                                                                    <option
                                                                    <?php
                                                                    if ($dob[1] == "June") {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>June</option>
                                                                    <option
                                                                    <?php
                                                                    if ($dob[1] == "July") {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>July</option>
                                                                    <option
                                                                    <?php
                                                                    if ($dob[1] == "August") {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>August</option>  



                                                                    <option
                                                                    <?php
                                                                    if ($dob[1] == "September") {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>September</option>
                                                                    <option
                                                                    <?php
                                                                    if ($dob[1] == "October") {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>October</option>
                                                                    <option
                                                                    <?php
                                                                    if ($dob[1] == "November") {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>November</option>
                                                                    <option
                                                                    <?php
                                                                    if ($dob[1] == "December") {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>December</option>


                                                                </select>
                                                                <p class="err_msg"><?php echo form_error('month'); ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-3 col-xs-12">
                                                            <div class="group-inner">

                                                                <select name="year" style="height:50px;width: 100%;" class="<?php
                                                                if (form_error('year')) {
                                                                    echo "error_style";
                                                                }
                                                                ?>">
                                                                    <option value="">Year</option>
                                                                    <?php
                                                                    for ($i = 1950; $i <= 2000; $i++) {
                                                                        ?>
                                                                        <option <?php
                                                                        if ($dob[2] == $i) {
                                                                            echo "selected";
                                                                        }
                                                                        ?>><?php echo $i; ?></option>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                </select>
                                                                <p class="err_msg"><?php echo form_error('year'); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <div class="group-inner">
                                                                <?php
                                                                $arr = $candidate->location_id;
                                                               
                                                                if ($arr != "0") {
                                                                    $q1 = "select st.l_id as st,ci.l_id as ci,ar.l_id as ar from tbl_location as st,tbl_location as ci,tbl_location as ar where st.l_id = ci.parent_id and ci.l_id = ar.parent_id and ar.l_id =" . $arr;
                                                                    $loc_data = $this->md->my_query($q1)[0];
                                                                }
                                                               
                                                                ?>
                                                                <label class="">Select State</label>
                                                                <select class="<?php
                                                                if (form_error('state')) {
                                                                    echo "error_style";
                                                                }
                                                                ?>" id="state" name="state" onchange="set_combo(this.value, 'city')" value="<?php
                                                                        if (!isset($success)) {
                                                                            echo set_value('state');
                                                                        }
                                                                        ?>"style="height:50px;width:100%;">  

                                                                    <option value="">State</option>
                                                                      <?php
                                                                    foreach ($state as $val) {
                                                                        $a2 = $val->l_id;
                                                                        $a1 = $loc_data->st;
                                                                        ?>
                                                                        <option <?php
                                                                        if (isset($loc_data)) {
                                                                            if ($a1 == $a2) {
                                                                                echo "selected";
                                                                            }
                                                                        }
                                                                        ?> value="<?php echo $val->l_id; ?>"   >
                                                                                <?php
                                                                                echo $val->name;
                                                                                ?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                                <p class="err_msg"><?php echo form_error('state'); ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <div class="group-inner">
                                                                <label name="" class="<?php
                                                                if (form_error('city')) {
                                                                    echo "box_msg";
                                                                }
                                                                ?>">Select City</label>
                                                                <select class="<?php
                                                                if (form_error('city')) {
                                                                    echo "error_style";
                                                                }
                                                                ?>"  style="height:50px;width:100%;" name="city" id="city" onchange="set_combo(this.value, 'area')" >
                                                                    <option value="">City</option>
                                                                    <?php
                                                                    $q2 = $this->md->my_query("select * from tbl_location where label = 'city' and parent_id='" . $loc_data->st . "'");
                                                                    foreach ($q2 as $vl) {
                                                                        $a2 = $vl->l_id;
                                                                        $a1 = $loc_data->ci;
                                                                        ?>
                                                                        <option <?php
                                                                        if ($a1 == $a2) {
                                                                            echo "selected";
                                                                        }
                                                                        ?> value="<?php echo $vl->l_id; ?>"   >
                                                                                <?php
                                                                                echo $vl->name;
                                                                                ?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                                <p class="err_msg"><?php echo form_error('city'); ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <div class="group-inner">
                                                                <label name="" class="">Select Area</label>
                                                                <select name="area" style="height:50px;width:100%;"  class="<?php
                                                                if (form_error('area')) {
                                                                    echo "error_style";
                                                                }
                                                                ?>" id="area">
                                                                    <option value="">Area</option>
                                                                     <?php
                                                                    $q2 = $this->md->my_query("select * from tbl_location where label = 'area' and parent_id='" . $loc_data->ci . "'");
                                                                    foreach ($q2 as $vl) {
                                                                        $a2 = $vl->l_id;
                                                                        $a1 = $loc_data->ar;
                                                                        ?>
                                                                        <option <?php
                                                                        if ($a1 == $a2) {
                                                                            echo "selected";
                                                                        }
                                                                        ?> value="<?php echo $vl->l_id; ?>"   >
                                                                                <?php
                                                                                echo $vl->name;
                                                                                ?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                                <p class="err_msg"><?php echo form_error('area'); ?></p>
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
                                                                ?>"  id="fulladdress"  name="description" ><?php echo $c[0]->description; ?></textarea>
                                                                <p class="err_msg"><?php echo form_error('description'); ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="group-inner">
                                                                <label name="">Office Address</label>
                                                                <textarea class="form-control <?php
                                                                if (form_error('address')) {
                                                                    echo "error_style";
                                                                }
                                                                ?>"  id="fulladdress"  name="address" ><?php echo $c[0]->office_address; ?></textarea>
                                                                <p class="err_msg"><?php echo form_error('address'); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <input type="submit" class="theme-btn btn-style-one" value="Edit Candidate" name="change"/>
                                                    </div>
                                                </div>
                                                <?php
                                                if (isset($success)) {
                                                    ?>
                                                    <div class="alert alert-success" role="alert">
                                                        <?php echo $success; ?>
                                                    </div>     
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if (isset($error)) {
                                                    ?>
                                                    <div class="alert alert-warning" role="alert">
                                                        <?php echo $error; ?>

                                                    </div>     
                                                    <?php
                                                }
                                                ?>
                                            </form>
                                        </div>
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

