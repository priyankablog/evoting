<!DOCTYPE html>
<html>


    <head>
        <meta charset="utf-8">
        <link href="<?php echo base_url(); ?>visitor/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>visitor/bootstrap-3.3.7-dist/css/bootstrap-theme.css" rel="stylesheet">
        <title>My Govrn | Feedback Page</title>
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
            <section class="page-title" style="background-image: url(<?php echo base_url(); ?>visitor/images/background/feedback.jpg);background-size: cover; background-position: right bottom;">
                <div class="auto-container">
                    <h1>Suggestion Box</h1>
                    <ul class="bread-crumb">
                        <li><a href="<?php echo base_url(); ?>Home">Home</a></li>
                        <li class="active">Feedback</li>
                    </ul>
                </div>
            </section>
            <div class="services-section style-two">
            <section class="contact-section">
                <div class="auto-container">
                    <div class="row clearfix">

                        <!--Form Column-->
                        <div class="column form-column col-md-7 col-sm-12 col-xs-12" style="margin-top: -130px;margin-bottom: -90px;">

                            <div class="default-title"><h3>Send Us Message</h3><div class="separator"></div></div>
                            <div class="contact-form default-form">
                                <form id="form1" method="post" action="">
                                    <div class="row clearfix">

                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            
                                                    <div class="group-inner">
                                                        
                                            
                                                <input type="text" class="form-control <?php if(form_error('name')){ echo "error_style";} ?>"   name="name" id="p-name" placeholder="Name *"value="<?php if(!isset($success)){  echo set_value('name');}?>"/>
                                                    </div>
                                   <p class="err_msg"><?php echo form_error('name');?>
                                                    </p>
                                        
                                             
                                        </div>

                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                          
                                            <div class="group-inner">
                                                <input type="text" class="form-control <?php if(form_error('email')){ echo "error_style";} ?>" name="email" id="p-email" placeholder="Email *"  value="<?php if(!isset($success)){  echo set_value('email');}?>"/>
                                                
                                            </div>
                                               <p class="err_msg"><?php echo form_error('email');?>
                                                    </p>
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                          
                                            <div class="group-inner">
                                                <input type="subject" class="form-control <?php if(form_error('subject')){ echo "error_style"; }  ?>" name="subject" id="subject" placeholder="Subject *" value="<?php if(!isset($success)){  echo set_value('subject');}?>"/>
                                                
                                            </div>
                                               <p class="err_msg"><?php echo form_error('subject');?>
                                                    </p>
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            
                                            <div class="group-inner">
                                                <textarea class="form-control <?php if(form_error('message')){ echo "error_style"; }  ?>" name="message" id="p-destination" placeholder="Message *" value=""><?php if(!isset($success)){  echo set_value('message');}?></textarea>
                                                
                                            </div>
                                             <p class="err_msg"><?php echo form_error('message');?>
                                                    </p>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="g-recaptcha" data-sitekey="6LdC9lMUAAAAAORixUtNglnBOxjTmtqzhfx9fjEX"></div>
                                            <p class="err_msg">
                                                <?php if(form_error('g-recaptcha-response')){ echo form_error('g-recaptcha-response'); }  ?>
                                            </p>
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12 col-xs-12" style="margin-top: 20px;">
                                            <input type="submit" class="theme-btn btn-style-one" name="submit" value="submit"/>
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
            </section>
            </div>



<?php
$this->load->view('footer');
?>

        </div>

    </body>
<?php
$this->load->view('footerscript');
?>

</html>