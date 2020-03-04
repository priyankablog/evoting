
<html lang="en">



    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
        <title>My Govrn Admin | Login Page</title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <?php
        $this->load->view('admin/link');
        ?>
        <script src="<?php echo base_url(); ?>admin/plugins/pace/pace.min.js"></script>

    </head>
    <body class="pace-top">
        <!-- begin #page-loader -->

               
        <!-- end #page-loader -->

        <!-- begin #page-container -->
        <div id="page-container" class="fade">
            <!-- begin login -->
            <div class="login animated fadeInDown" style="top: 46%">
                <!-- begin brand -->

                <!-- end brand -->
                <div style="background: #f8f8f8;box-shadow: 0 0 0 2px #f1f1f1,0 0 0 7px #fff,0 0 0 12px #f3f3f3" class="login-content panel panel-inverse">
                    <h1 class="center m-b-20" style="">Admin Zone</h1>
                    <form action="" method="POST" class="margin-bottom-0" id="" autocomplete="off">
                        
                        <div class="form-group m-b-20" >
                            <input type="text" id="" class="form-control <?php if(form_error('email')){ echo "error_border";} ?>" placeholder="Email Address"  name="email" value="<?php 
                            if(get_cookie('admin_email'))
                            {
                                echo get_cookie('admin_email');
                            }
                            ?>"/>
                            <p class="error_message"><?php echo form_error('email');?></p>
                        </div>
                                         
                        <div class="form-group m-b-20 input-group">
                         
                            
                            <input type="password" name="password"  class="pass form-control <?php if(form_error('password')){ echo "error_border_msg";} ?>" placeholder="Password" style="border-right:none;" value="<?php 
                            if(get_cookie('admin_password'))
                            {
                                echo get_cookie('admin_password');
                            }
                            ?>"/>
                                <div class="input-group-addon ps1 <?php if(form_error('password')){ echo "error_border_pass";} ?>" style="background: rgba(255, 255, 255, .2);border:1px solid #ccd0d4;border-left:none;"><i class="show">Show</i></div>
                            
                        </div>
                         <p class="error_msg"><?php echo form_error('password');?></p>         
                        <div class="checkbox m-b-20">
                            <label>
                                <input type="checkbox" name="svp" value="yes" <?php 
                            if(get_cookie('admin_email'))
                            {
                                echo "checked";
                            }
                            ?>/> Remember Me
                            </label>
                        </div>
                        <div class="login-buttons m-b-20">
                            <input type="submit" name="login" class="btn btn-success btn-block btn-lg" value="Sign me in"/>
                            
                        </div>
                        <div class="login-buttons">

                            <center><a href="<?php echo base_url(); ?>Manage-Forgot-Password" class="">Forgot Password ?</a>
                            </center>
                        </div>
                        <div class="login-buttons">
                         <?php
                         if(isset($error))
                         {
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
            <!-- end login -->
        </div>
        <!-- end page container -->
    </body>
    <?php
    $this->load->view('admin/script');
    ?>

</html>