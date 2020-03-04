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

                    <h3 style="line-height: 2.6em;">Voter <span class="theme_color">Zone</span></h3>
                    <span class="separator"></span>
                </div>
                <div class="auto-container">

                    <div class="row clearfix">
                        <?php
                        $this->load->view('middledashboard');
                        ?>
                        <section class="contact_us sec-padd-bottom">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-offset-0 col-md-8 col-sm-8 col-xs-12" id="mycss1" style="padding: 20px;background: #fff;box-shadow: 0 0 0 2px #eee,0 0 0 7px #fff,0 0 0 9px #eee;margin-bottom: -10px;margin-top: 28px;margin-left: 26px;width:822px;">
                                        <div class="section-title">
                                            <h3 class="myhead">Basic Information</h3>

                                        </div>

                                        <div class="default-form-area" id="css1">
                                            <form name="contact_form" class="default-form" method="post">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="group-inner">
                                                                <?php
                                                                $c = $this->md->my_query("select * from tbl_voter_registration where voter_id=" . $this->session->userdata('voter'));
                                                                $q = $this->md->my_query("select * from tbl_location");
                                                                $q1 = $this->md->my_query("select * from tbl_location where l_id='" . $q[0]->parent_id . "' and label = 'city'");
//                                                            $q2 = $this->md->my_query("select * from tbl_location");
                                                                if ($c[0]->dob != "") {
                                                                    $dob = explode("-", $c[0]->dob);
                                                                }
                                                                ?>

                                                                <label name="">Full Name</label>
                                                                <input type="text" class="form-control" name="fullname" id="fullname" readonly="" value="<?php echo $c[0]->voter_name;
                                                                ?>">

                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="group-inner">
                                                                <label name="">Email</label>
                                                                <input type="text" class="form-control" name="email" id="email" readonly="" value="<?php echo $c[0]->email; ?>">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="group-inner">
                                                                <label name="">Phone No</label>
                                                                <input type="text" class="form-control" name="phone" id="phone" readonly="" value="<?php echo $c[0]->phone; ?>">
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
                                                                <p class="err_msg"><?php echo form_error('gender'); ?>
                                                                </p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="group-inner">
                                                                <label name="" class="">Voting Card Number</label>
                                                                <input type="text" class="form-control <?php
                                                                if (form_error('id')) {
                                                                    echo "error_style";
                                                                }
                                                                ?>" name="id" id="email"  value="<?php echo $c[0]->voting_id; ?>" maxlength="10">
                                                                <p class="err_msg"><?php echo form_error('id'); ?>
                                                                </p>
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
                                                                        if (isset($dob)) {
                                                                            if ($dob[0] == $i) {
                                                                                echo "selected";
                                                                            }
                                                                        }
                                                                        ?>>
                                                                                <?php echo $i; ?>
                                                                        </option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                                <p class="err_msg"><?php echo form_error('day'); ?>
                                                                </p>
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
                                                                    if (isset($dob)) {
                                                                        if ($dob[1] == "January") {
                                                                            echo "selected";
                                                                        }
                                                                    }
                                                                    ?>>January </option>
                                                                    <option
                                                                    <?php
                                                                    if (isset($dob)) {
                                                                        if ($dob[1] == "February") {
                                                                            echo "selected";
                                                                        }
                                                                    }
                                                                    ?>>February</option>
                                                                    <option
                                                                    <?php
                                                                    if (isset($dob)) {
                                                                        if ($dob[1] == "March") {
                                                                            echo "selected";
                                                                        }
                                                                    }
                                                                    ?>>March</option>
                                                                    <option
                                                                    <?php
                                                                    if (isset($dob)) {
                                                                        if ($dob[1] == "April") {
                                                                            echo "selected";
                                                                        }
                                                                    }
                                                                    ?>>April</option>
                                                                    <option
                                                                    <?php
                                                                    if (isset($dob)) {
                                                                        if ($dob[1] == "May") {
                                                                            echo "selected";
                                                                        }
                                                                    }
                                                                    ?>>May</option>
                                                                    <option
                                                                    <?php
                                                                    if (isset($dob)) {
                                                                        if ($dob[1] == "June") {
                                                                            echo "selected";
                                                                        }
                                                                    }
                                                                    ?>>June</option>
                                                                    <option
                                                                    <?php
                                                                    if (isset($dob)) {
                                                                        if ($dob[1] == "July") {
                                                                            echo "selected";
                                                                        }
                                                                    }
                                                                    ?>>July</option>
                                                                    <option
                                                                    <?php
                                                                    if (isset($dob)) {
                                                                        if ($dob[1] == "August") {
                                                                            echo "selected";
                                                                        }
                                                                    }
                                                                    ?>>August</option>  
                                                                    <option
                                                                    <?php
                                                                    if (isset($dob)) {
                                                                        if ($dob[1] == "September") {
                                                                            echo "selected";
                                                                        }
                                                                    }
                                                                    ?>>September</option>
                                                                    <option
                                                                    <?php
                                                                    if (isset($dob)) {
                                                                        if ($dob[1] == "October") {
                                                                            echo "selected";
                                                                        }
                                                                    }
                                                                    ?>>October</option>
                                                                    <option
                                                                    <?php
                                                                    if (isset($dob)) {
                                                                        if ($dob[1] == "November") {
                                                                            echo "selected";
                                                                        }
                                                                    }
                                                                    ?>>November</option>
                                                                    <option
                                                                    <?php
                                                                    if (isset($dob)) {
                                                                        if ($dob[1] == "December") {
                                                                            echo "selected";
                                                                        }
                                                                    }
                                                                    ?>>December</option>


                                                                </select>
                                                                <p class="err_msg"><?php echo form_error('month'); ?>
                                                                </p>
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
                                                                        if (isset($dob)) {
                                                                            if ($dob[2] == $i) {
                                                                                echo "selected";
                                                                            }
                                                                        }
                                                                        ?>><?php echo $i; ?></option>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                </select>
                                                                <p class="err_msg"><?php echo form_error('year'); ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <div class="group-inner">
                                                                <?php
                                                                $arr = $voter->location_id;
                                                               
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
                                                                <p class="err_msg"><?php echo form_error('state'); ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <div class="group-inner">

                                                                <label name="" class="">Select City</label>
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
                                                                <p class="err_msg"><?php echo form_error('area'); ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="group-inner">
                                                                <label name="" class="">Address</label>
                                                                <textarea class="form-control <?php
                                                                if (form_error('address')) {
                                                                    echo "error_style";
                                                                }
                                                                ?>"  id="fulladdress" placeholder="Full Address" value="" name="address"><?php
                                                                          if ($c[0]->address != "") {
                                                                              echo $c[0]->address;
                                                                          }
                                                                          ?></textarea>
                                                            </div>
                                                            <p class="err_msg"><?php echo form_error('address'); ?>
                                                            </p>
                                                        </div> 
                                                    </div>
                                                    <br>

                                                    <div class="form-group  col-md-12 col-sm-12 col-xs-12">
                                                        <input type="submit" class="theme-btn btn-style-one" value="Submit" name="submit"/>
                                                    </div>
                                                    <div class="form-group  col-md-12 col-sm-12 col-xs-12">
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

                                                </div>

                                            </form>
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
