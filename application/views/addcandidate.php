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

                    $c = $this->md->my_query("select * from tbl_party_registration where party_id=" . $this->session->userdata('party'));
                    if ($c[0]->status == 1) {
                        ?>

                        <section class="contact_us sec-padd-bottom">
                            <div class="container">
                                <div style="margin: 5% 0">
                                    <div class="row">
                                        <div class="col-md-7 contact-form default-form" style="margin-left: 26px;margin-top: 28px;background-color: white;padding: 20px;background: #fff;box-shadow: 0 0 0 2px #eee,0 0 0 7px #fff,0 0 0 9px #eee;width:822px;">
                                            <div class="prod-tabs" id="product-tabs">
                                                <div class="tab-btns clearfix" style="background: white;padding-left: 10px;">
                                                    
                                                     <a href="<?php
                                if ($val1 == 1) {
                                    echo "#basic-info";
                                } else {
                                    echo "javascript: void(0)";
                                }
                                ?>"  class="tab-btn <?php
                                if ($val1 == 1) {
                                    echo "active-btn";
                                }
                                ?>">Basic Info</a>
                                <a href="<?php
                                if ($val1 == 2) {
                                    echo "#identification";
                                } else {
                                    echo "javascript: void(0)";
                                }
                                ?>" class="tab-btn <?php
                                   if ($val1 == 2) {
                                       echo "active-btn";
                                   }
                                   ?>">Identification Info</a>
                                <a href="<?php
                                if ($val1 == 3) {
                                    echo "#account-info";
                                } else {
                                    echo "javascript: void(0)";
                                }
                                ?>" class="tab-btn <?php
                                   if ($val1 == 3) {
                                       echo "active-btn";
                                   }
                                   ?>">Account Info</a>
                                                    
                                                    
                                                </div>
                                                <div class="tabs-container" style="padding: 10px;border:none;">
                                                    <form name="" method="post" enctype="multipart/form-data">
                                                        <?php
                                                        $c = $this->md->my_query("select * from tbl_party_registration where party_id=" . $this->session->userdata('party'));

                                                        // $query=$this->md->my_query("select * from tbl_party_registration");
                                                        $query1 = $this->md->my_query("select * from tbl_election_category");
                                                        //$q=$this->md->my_query("select * from tbl_location where l_id=".$c[0]->location_id);
                                                        //$q1=$this->md->my_query("select * from tbl_location where l_id=".$q[0]->parent_id);
                                                        ?>
                                                        <div class="tab <?php
                                                        if ($val1 == "1") {
                                                            echo "active-tab";
                                                        }
                                                        ?>" id="basic-info">

                                                            <div class="form-group">
                                                                <div class="group-inner">

                                                                    <label name="" class="<?php
                                                                    if (form_error('party')) {
                                                                        echo "box_msg";
                                                                    }
                                                                    ?>" >Select Party</label>

                                                                    <select name="party" style="height:50px;width: 100%;" class="<?php
                                                                    if (form_error('party')) {
                                                                        echo "error_style";
                                                                    }
                                                                    ?>" >
                                                                        <option value="">Select Party</option>
                                                                        <?php
                                                                        foreach ($c as $val) {
                                                                            ?>
                                                                            <option class="" value="<?php echo $val->party_id; ?>"

                                                                                    <?php
                                                                                    if ($c[0]->p_name == $val->p_name) {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?> >
                                                                                        <?php
                                                                                        echo $val->p_name;
                                                                                        ?></option>
                                                                            <?php
                                                                        }
                                                                        ?>  
                                                                    </select>
                                                                   <p class="err_msg"><?php echo form_error('party'); ?>
                                                                    </p>

                                                                </div>

                                                                <div class="group-inner">
                                                                    <label name="" class="">Candidate Name</label>

                                                                    <input class="form-control <?php
                                                                    if (form_error('candidate')) {
                                                                        echo "error_style";
                                                                    }
                                                                    ?>" name="candidate"  id="cname" type="text" placeholder="Candidate Name" value="<?php echo set_value('candidate'); ?>"/>
                                                                    <p class="error_msg"><?php echo form_error('candidate'); ?>
                                                                    </p>
                                                                </div>

                                                                <div class="group-inner">
                                                                    <label name="" class="">Select Gender</label>
                                                                </div>
                                                                <div class="row" style="padding-left:20px;">
                                                                    <label>    <input type="radio" name="gender" value="Male"
                                                                        <?php
                                                                        if (set_radio('gender', 'Male')) {
                                                                            echo "checked";
                                                                        }
                                                                        ?>
                                                                                      />&nbsp;Male&nbsp;&nbsp;</label>
                                                                    <label><input type="radio" name="gender" value="Female"
                                                                        <?php
                                                                        if (set_radio('gender', 'Female')) {
                                                                            echo "checked";
                                                                        }
                                                                        ?>
                                                                                  />&nbsp;Female</label>
                                                                    <p class="err_msg"><?php echo form_error('gender'); ?>
                                                                    </p>
                                                                </div>
                                                                <div class="group-inner">
                                                                    <label name="">Date Of Birth</label>
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
                                                                                        if (set_select('day', $i) && !isset($success)) {
                                                                                            echo "selected";
                                                                                        }
                                                                                        ?>>
                                                                                                <?php echo $i; ?>
                                                                                        </option>
                                                                                        <?php
                                                                                    }
                                                                                    ?>
                                                                                </select>
                                                                                <p class="error_msg"><?php echo form_error('day'); ?>
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
                                                                                    if (set_select('month', 'January')) {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>>January</option>
                                                                                    <option
                                                                                    <?php
                                                                                    if (set_select('month', 'February')) {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>>February</option>
                                                                                    <option
                                                                                    <?php
                                                                                    if (set_select('month', 'March')) {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>>March</option>
                                                                                    <option
                                                                                    <?php
                                                                                    if (set_select('month', 'April')) {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>>April</option>
                                                                                    <option
                                                                                    <?php
                                                                                    if (set_select('month', 'May')) {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>>May</option>
                                                                                    <option
                                                                                    <?php
                                                                                    if (set_select('month', 'June')) {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>>June</option>
                                                                                    <option
                                                                                    <?php
                                                                                    if (set_select('month', 'July')) {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>>July</option>
                                                                                    <option
                                                                                    <?php
                                                                                    if (set_select('month', 'Auguest')) {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>>Auguest</option>  



                                                                                    <option
                                                                                    <?php
                                                                                    if (set_select('month', 'September')) {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>>September</option>
                                                                                    <option
                                                                                    <?php
                                                                                    if (set_select('month', 'October')) {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>>October</option>
                                                                                    <option
                                                                                    <?php
                                                                                    if (set_select('month', 'November')) {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>>November</option>
                                                                                    <option
                                                                                    <?php
                                                                                    if (set_select('month', 'December')) {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>>December</option>


                                                                                </select>
                                                                                <p class="error_msg"><?php echo form_error('month'); ?>
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
                                                                                    for ($i = 1950; $i <= 1997; $i++) {
                                                                                        ?>
                                                                                        <option <?php
                                                                                        if (set_select('year', $i) && !isset($success)) {
                                                                                            echo "selected";
                                                                                        }
                                                                                        ?>><?php echo $i; ?></option>
                                                                                            <?php
                                                                                        }
                                                                                        ?>
                                                                                </select>
                                                                                <p class="error_msg"><?php echo form_error('year'); ?>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                                <div class="group-inner">
                                                                    <label name="" class="">Description</label>
                                                                    <textarea class="form-control <?php
                                                                    if (form_error('description')) {
                                                                        echo "error_style";
                                                                    }
                                                                    ?>" name="description" id="desc" placeholder="Description Here..."><?php echo set_value('description') ?></textarea>
                                                                    <p class="error_msg"><?php echo form_error('description'); ?>
                                                                    </p>
                                                                </div>
                                                                <br>

                                                                <div class="form-group">
                                                                    <!--<a href="#identification" class="tab-btn active-btn"><button type="submit" class="theme-btn btn-style-one">Next</button></a>-->
                                                                    <input type="submit" class="theme-btn btn-style-one" name="next1" value="Next"/>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <!--Tab-->

                                                        <div class="tab <?php
                                                        if ($val1 == "2") {
                                                            echo "active-tab";
                                                        }
                                                        ?>" id="identification">
                                                            <div class="form-group">
                                                                <div class="group-inner">
                                                                    <label name="">Profile Pic</label>

                                                                    <input class="form-control <?php
                                                    if (isset($error)) {
                                                        echo "error_style";
                                                    }
                                                    ?>" name="profile"  id="pic" type="file">
                                                                    <p class="error_msg"><?php
                                                                        if (isset($error))
                                                                            echo $error;
                                                                        ?></p>
                                                                </div>

                                                                <div class="group-inner">
                                                                    <label name="" class="">Select Category</label>

                                                                    <select name="category" style="height:50px;width: 100%;" class="<?php
                                                                    if (form_error('category')) {
                                                                        echo "error_style";
                                                                    }
                                                                    ?>">
                                                                        <option value="">Select Category</option>
                                                                        <?php
                                                                        foreach ($query1 as $val) {
                                                                            ?>
                                                                            <option class="" value="<?php echo $val->category_id; ?>"

                                                                                    <?php
                                                                                    if ($query1[0]->category == $val->category) {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                    >
                                                                                        <?php
                                                                                        echo $val->category;
                                                                                        ?></option>
                                                                            <?php
                                                                        }
                                                                        ?>  

                                                                    </select>
                                                                    <p class="error_msg"><?php echo form_error('category'); ?>
                                                                    </p>
                                                                </div>
                                                                <div class="group-inner">
                                                                    <label name="" class="">Office Address</label>
                                                                    <textarea class="form-control <?php
                                                                    if (form_error('address')) {
                                                                        echo "error_style";
                                                                    }
                                                                    ?>" name="address" id="add" placeholder="Office Address"><?php echo set_value('address') ?></textarea>
                                                                    <p class="error_msg"><?php echo form_error('address'); ?>
                                                                    </p>
                                                                </div>
                                                                <br>

                                                                <div class="form-group">
                                                                    <!--<a href="#account-info" class="tab-btn active-btn"><button type="submit" class="theme-btn btn-style-one">Next</button></a>-->
                                                                    <input type="submit" class="theme-btn btn-style-one" name="next2" value="Next"/>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="tab <?php
                                                        if ($val1 == "3") {
                                                            echo "active-tab";
                                                        }
                                                        ?>" id="account-info">

                                                            <div class="form-group">
                                                                <div class="group-inner">
                                                                    <label class="">Select Location</label>

                                                                    <div class="row">
                                                                        <div class="col-md-4 col-sm-3 col-xs-12">

                                                                            <div class="group-inner">

                                                                                <select class="<?php
                                                                                if (form_error('state')) {
                                                                                    echo "error_style";
                                                                                }
                                                                                ?>" name="state" style="height:50px;width: 100%;" onchange="set_combo(this.value, 'city')" value="<?php
                                                                                        if (!isset($success)) {
                                                                                            echo set_value('state');
                                                                                        }
                                                                                        ?>">
                                                                                    <option value="">Select State</option>
                                                                                    <?php
                                                                                    foreach ($state as $val) {
                                                                                        ?>

                                                                                        <option class="" value="<?php echo $val->l_id; ?>"

                                                                                                <?php
                                                                                                if (set_select('state', $val->l_id) && !isset($success)) {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?> >
                                                                                                    <?php
                                                                                                    echo $val->name;
                                                                                                    ?></option>
                                                                                        <?php
                                                                                    }
                                                                                    ?>  
                                                                                    }
                                                                                    ?>  
                                                                                </select>
                                                                                <p class="error_msg"><?php echo form_error('state'); ?>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-3 col-xs-12">
                                                                            <div class="group-inner">

                                                                                <select class="<?php
                                                                                if (form_error('city')) {
                                                                                    echo "error_style";
                                                                                }
                                                                                ?>"name="city" style="height:50px;width: 100%;"  id="city" onchange="set_combo(this.value, 'area')">
                                                                                    <option value="">Select City</option>
                                                                                    <?php
                                                                                    if ($this->input->post('state') != "" && !isset($success)) {

                                                                                        $wh['parent_id'] = $this->input->post('state');
                                                                                        $dt = $this->md->my_select('tbl_location', $wh);
                                                                                        foreach ($dt as $val) {
                                                                                            ?>
                                                                                            <option class="" value="<?php echo $val->l_id; ?>" 
                                                                                            <?php
                                                                                            if (set_select('city', $val->l_id) && !isset($success)) {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                    >
                                                                                                        <?php
                                                                                                        echo $val->name;
                                                                                                        ?></option>
                                                                                            <?php
                                                                                        }
                                                                                    }
                                                                                    ?>
                                                                                </select>
                                                                                <p class="error_msg"><?php echo form_error('city'); ?>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-3 col-xs-12">
                                                                            <div class="group-inner">
                                                                                <select class="<?php
                                                                                if (form_error('area')) {
                                                                                    echo "error_style";
                                                                                }
                                                                                ?>" name="area" style="height:50px;width: 100%;" id="area">
                                                                                    <option value="">Select Area</option>

                                                                                    <?php
                                                                                    if (set_value('city') != "" && !isset($success)) {
                                                                                        $q = $this->md->my_query("select * from tbl_location where parent_id=" . set_value('city'));
                                                                                        foreach ($q as $query) {
                                                                                            ?>
                                                                                            <option class="" value="<?php echo $query->l_id; ?>" 
                                                                                            <?php
                                                                                            if (set_value('area') == $query->l_id && !isset($success)) {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                    >
                                                                                                        <?php
                                                                                                        echo $query->name;
                                                                                                        ?></option>
                                                                                            <?php
                                                                                        }
                                                                                    }
                                                                                    ?>
                                                                                </select>
                                                                                <p class="error_msg"><?php echo form_error('area'); ?>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="group-inner">
                                                                    <label name="" class="">Email</label>

                                                                    <input class="form-control <?php
                                                                    if (form_error('email')) {
                                                                        echo "error_style";
                                                                    }
                                                                    ?>" name="email"  id="email" placeholder="Email" type="email" value="<?php
                                                                           if (!isset($success)) {
                                                                               echo set_value('email');
                                                                           }
                                                                           ?>">
                                                                    <p class="error_msg"><?php echo form_error('email'); ?>
                                                                    </p>
                                                                </div>

                                                                <div class="group-inner">
                                                                    <label name="" class="">Password</label>

                                                                    <input class="form-control <?php
                                                                    if (form_error('password')) {
                                                                        echo "error_style";
                                                                    }
                                                                    ?>" name="password"  id="password" type="password" placeholder="Password">
                                                                    <p class="error_msg"><?php echo form_error('password'); ?>
                                                                    </p>
                                                                </div>
                                                                <br>

                                                                <div class="form-group">
                                                                    <input type="submit" class="theme-btn btn-style-one" name="submit" value="Submit"/>
                                                                    <div class="" style="padding-top: 10px; font-size: 13px;">By Clicking on "Submit" Button you accept all the <a href="<?php echo base_url(); ?>Terms-And-Condition" class="text" style="font-size: 13px;" target="_new">Terms and Condition</a> of MyGovrn.</div>
                                                                </div>
                                                                <div class="row">
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


                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                        <?php
                    } else {
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
            .group-inner p{
                color: red !important;
                margin-top: -10px !important;
                font-size: 13px !important;
            } 
            .prod-tabs .tabs-container .tab .content p{
                margin-bottom: 10px;
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

