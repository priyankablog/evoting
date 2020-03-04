<html lang="en">
    <!--<![endif]-->


    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8"/>
        <title>My Govrn Admin | Forgot-Password Page</title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <?php
        $this->load->view('admin/link');
        ?>
        <script src="<?php echo base_url(); ?>admin/plugins/pace/pace.min.js"></script>
        <link href="<?php echo base_url(); ?>visitor/mycss.css" rel="stylesheet">

    </head>
    <body class="pace-top">
        <div id="page-container" class="fade">
            <!-- begin login -->
            <div class="login animated fadeInDown">
                <div style="background: #f8f8f8;box-shadow: 0 0 0 2px #f1f1f1,0 0 0 7px #fff,0 0 0 12px #f3f3f3" class="login-content panel panel-inverse">

                    <!-- end brand -->
                    <div class="section-title">
                        <h3 class="myhead">Password Recovery</h3>

                    </div>

                    <div class="default-form-area" id="css1">
                        <form name="contact_form" class="default-form" method="post">
                            <p style="color: #000;font-size: 15px">Enter Your Registered Email Address for getting your forgot password.</p>
                            <br>
                            <div class="row clearfix">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input name="email" class="form-control <?php if(form_error('email')){ echo "error_border";} ?>" placeholder="Enter Email Address" type="text">
                                        <p class="error_message">
                                <?php echo form_error('email'); ?></p>
                                    </div>
                                
                                <div class="login-buttons m-b-20">
                                    <button type="submit" class="btn btn-success btn-block btn-lg" name="sendnow" value="send now">Send Now</button>
                                </div>
                                </div>
                                
                           
                                <div class="login-buttons col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <a href="<?php echo base_url(); ?>Admin-Home" style="font-size: 15px"> <i class="fa fa-arrow-circle-left"></i> Back to login page</a>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="">
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
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- end page container -->

        <?php
        $this->load->view('admin/script');
        ?>
    </body>
</html>