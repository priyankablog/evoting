<html>


    <head>
        <meta charset="utf-8">
        <link href="<?php echo base_url(); ?>visitor/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>visitor/bootstrap-3.3.7-dist/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>visitor/css/mycss.css" rel="stylesheet">
        <title>My Govrn | Party-Profile Page</title>
        <?php
        $this->load->view('headlink');
        ?>
        <!-- Stylesheets -->

        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    </head>
    <body>
        <div class="page-wrapper">



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
        <div class="menu-overlay"></div>
        <div class="services-section style-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 contact-form default-form" >
                        <div class="sec-title" style="margin-top: -70px;">

                            <h3 style="line-height: 2.6em;"><span class="theme_color">Party</span> Registration</h3>
                            <span class="separator"></span>
                        </div>
                        
                        <div class="prod-tabs" id="product-tabs" style="background-color: white;padding: 20px;background: #fff;box-shadow: 0 0 0 2px #eee,0 0 0 7px #fff,0 0 0 9px #eee;">
                            <div class="tab-btns clearfix" style="padding-left: 10px">
                                <a href="<?php
                                if ($val == 1) {
                                    echo "#basic-info";
                                } else {
                                    echo "javascript: void(0)";
                                }
                                ?>"  class="tab-btn <?php
                                   if ($val == 1) {
                                       echo "active-btn";
                                   }
                                   ?>">Basic Info</a>
                                <a href="<?php
                                if ($val == 2) {
                                    echo "#chairman-info";
                                } else {
                                    echo "javascript: void(0)";
                                }
                                ?>" class="tab-btn <?php
                                   if ($val == 2) {
                                       echo "active-btn";
                                   }
                                   ?>">Chairman Info</a>
                                <a href="<?php
                                if ($val == 3) {
                                    echo "#account-info";
                                } else {
                                    echo "javascript: void(0)";
                                }
                                ?>" class="tab-btn <?php
                                   if ($val == 3) {
                                       echo "active-btn";
                                   }
                                   ?>">Account Info</a>
                            </div>
                            <div class="tabs-container"  style="padding: 10px;background-color: #ffffff;border:none;">
                                <form name="" method="post" enctype="multipart/form-data" autocomplete="off">
                                    <div class="tab <?php
                                    if ($val == 1) {
                                        echo "active-tab";
                                    }
                                    ?>" id="basic-info">
                                        <div class="content">
                                            <div class="form-group">
                                                <div class="group-inner">
                                                    <label name="" class="">Party Name</label>

                                                    <input class="form-control <?php
                                                    if (form_error('pname')) {
                                                        echo "error_style";
                                                    }
                                                    ?>" name="pname"  id="pname" placeholder="Party Name" type="text" value="<?php
                                                           if (!isset($success)) {
                                                               echo set_value('pname');
                                                           }
                                                           ?>">
                                                    <p class="error_msg" ><?php echo form_error('pname'); ?>
                                                    </p>
                                                </div>

                                                <div class="group-inner" style="margin-top: 16px;"> 
                                                    <label name="">Party Logo</label>

                                                    <input class="form-control <?php
                                                    if (isset($error)) {
                                                        echo "error_style";
                                                    }
                                                    ?>" name="plogo"  id="plogo" type="file">
                                                    <p class="error_msg"><?php
                                                        if (isset($error)) {
                                                            echo $error;
                                                        }
                                                        ?></p>
                                                </div>

                                                <div class="group-inner"  style="margin-top: 16px;">
                                                    <label name=""  class="">Since</label>

                                                    <input class="form-control <?php
                                                    if (form_error('since')) {
                                                        echo "error_style";
                                                    }
                                                    ?>" name="since"  id="since" placeholder="Since" type="text" maxlength="4" value="<?php
                                                           if (!isset($success)) {
                                                               echo set_value('since');
                                                           }
                                                           ?>">
                                                    <p class="error_msg"><?php echo form_error('since'); ?>
                                                    </p>
                                                </div>

                                                <div class="group-inner"  style="margin-top: 16px;">
                                                    <label name=""  class="">Slogan</label>

                                                    <input class="form-control <?php
                                                    if (form_error('slogan')) {
                                                        echo "error_style";
                                                    }
                                                    ?>" name="slogan"  id="slogan" placeholder="Slogan" type="text" value="<?php
                                                           if (!isset($success)) {
                                                               echo set_value('slogan');
                                                           }
                                                           ?>">
                                                    <p class="error_msg"><?php echo form_error('slogan'); ?>
                                                    </p>
                                                </div>

                                                <div class="form-group"  style="margin-top: 16px;">
                                                    <br/>
                                                    <!--<a href="#chairman-info" class="tab-btn active-btn"><input type="submit" class="theme-btn btn-style-one" value="Next" name="next1"/></a>-->
                                                    <input type="submit" class="theme-btn btn-style-one" value="Next" name="next1"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Tab-->
                                    <div class="tab <?php
                                    if ($val == 2) {
                                        echo "active-tab";
                                    }
                                    ?>" id="chairman-info">
                                        <div class="form-group">
                                            <div class="group-inner">
                                                <label name=""  class="">Chairman Name</label>

                                                <input class="form-control <?php
                                                if (form_error('cname')) {
                                                    echo "error_style";
                                                }
                                                ?>" name="cname"  id="cname" placeholder="Chairman Name" type="text" value="<?php
                                                       if (!isset($success)) {
                                                           echo set_value('cname');
                                                       }
                                                       ?>">
                                                <p class="error_msg"><?php echo form_error('cname'); ?>
                                                </p>
                                            </div>

                                            <div class="group-inner">
                                                <label name="">Chairman Photo</label>

                                                <input class="form-control <?php
                                                    if (isset($error)) {
                                                        echo "error_style";
                                                    }
                                                    ?>" name="cphoto"  id="cphoto" type="file">
                                                <p class="error_msg"><?php
                                                        if (isset($error)) {
                                                            echo $error;
                                                        }
                                                        ?></p>
                                            </div>

                                            <div class="group-inner">
                                                <label name=""  class="">Description</label>

                                                <textarea class="form-control <?php
                                                if (form_error('description')) {
                                                    echo "error_style";
                                                }
                                                ?>" name="description" cols="50" rows="5" placeholder="Description Here..."><?php
                                                              if (!isset($success)) {
                                                                  echo set_value('description');
                                                              }
                                                              ?></textarea>
                                                <p class="error_msg"><?php echo form_error('description'); ?>
                                                </p>
                                            </div>

                                            <div class="form-group">
                                                <br/>
    <!--                                              <a href="#account-info" class="tab-btn active-btn"><input type="submit" class="theme-btn btn-style-one" value="Next" name="next2"/></a>-->
                                                <input type="submit" class="theme-btn btn-style-one" value="Next" name="next2"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab <?php
                                    if ($val == 3) {
                                        echo "active-tab";
                                    }
                                    ?>" id="account-info">
                                        <div class="form-group">
                                            <div class="group-inner">
                                                <label name=""  class="">Email</label>

                                                <input class="form-control <?php
                                                if (form_error('email')) {
                                                    echo "error_style";
                                                }
                                                ?>" name="email"  id="email" placeholder="Email" type="text" value="<?php
                                                       if (!isset($success)) {
                                                           echo set_value('email');
                                                       }
                                                       ?>">
                                                <p class="error_msg"><?php echo form_error('email'); ?>
                                                </p>
                                            </div>

                                            <div class="group-inner">
                                                <label name=""  class="">Password</label>

                                                <input class="form-control <?php
                                                if (form_error('password')) {
                                                    echo "error_style";
                                                }
                                                ?>" name="password"  id="password" type="password" placeholder="Password" >
                                                <p class="error_msg"><?php echo form_error('password'); ?>
                                                </p>
                                            </div>



                                            <div class="form-group">
                                                <br/>
                                                <input type="submit" class="theme-btn btn-style-one" value="Submit" name="submit" />
                                                <div class="" style="padding-top: 10px;">
                                                    <div class="" style="padding-top: 20px;font-size: 12px;">By Clicking on "Submit" Button you accept all the <a href="<?php echo base_url(); ?>Terms-And-Condition" class="text" target="_new" style="font-size: 12px;">Terms and Condition</a> of MyGovrn.</div>
                                                </div>
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
                    <div class="col-md-6">
                        <div class="sec-title" style="margin-top: -70px;">

                            <h3 style="line-height: 2.6em;">Why Choose <span class="theme_color">E-Voting ?</span></h3>
                            <span class="separator"></span>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-2" style="padding-top: 18px;">
                                <div class="point-img white"><img src="<?php echo base_url(); ?>visitor/images/locked.png" alt="Secure"></div>
                                
                            </div>
                            <div class="col-md-10">
                                <h3 class="heading">Secure</h3>
                                <p class="font" style="text-align: justify;">Voting pages are encrypted for your security. View the demonstration poll and see the lock icon to the left of the address bar.</p>
                                
                            </div>
                            
                            
                        </div>
                        <div class="col-md-12">
                            <hr>
                        </div>
                        <div class="col-xs-12   ">
                            <div class="col-md-2"  style="padding-top: 18px;">
                                <div class="point-img white"><img src="<?php echo base_url(); ?>visitor/images/shake-hands.png" alt="Reliable"></div>
                            </div>
                            <div class="col-md-10">
                                <h3 class="heading">Reliable</h3>
                                <p class="font" style="text-align: justify;">MyGovrn runs on Google servers for maximum reliability and scalability. Use the same infrastructure that powers Google search.</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <hr>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-md-2" style="padding-top: 18px;">
                                <div class="point-img white"><img src="<?php echo base_url(); ?>visitor/images/private.png" alt="Private"></div>
                            </div>
                            <div class="col-md-10">
                                <h3 class="heading">Private</h3>
                                <p class="font" style="text-align: justify;">Voter email addresses are not shared and not used for any purposes outside of the election. See our privacy policy for more details.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
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
