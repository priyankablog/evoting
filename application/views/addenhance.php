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
                        $q1 = $this->md->my_query("select * from tbl_party_registration where party_id='" . $this->session->userdata('party') . "'");
                    if ($q1[0]->status == 1) {
                        ?>
                        <section class="contact_us sec-padd-bottom" style="margin-bottom: -190px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-xs-12" id="mycss1" style="padding: 20px;background: #fff;box-shadow: 0 0 0 2px #eee,0 0 0 7px #fff,0 0 0 9px #eee;margin-left: 26px;margin-top: 28px;width:822px;">
                                        <div class="section-title">
                                            <h3 class="myhead">Party Future Enhancement</h3>

                                        </div>

                                        <div class="default-form-area" id="css1">

                                            <form class="form-horizontal" method="post">
                                                <div class="form-group">
                                                    <div class="col-md-12  m-b-20 panel-body panel-form">
                                                        <textarea class="ckeditor" id="editor1" name="editor1" rows="20"></textarea>
                                                        <script src="<?php echo base_url(); ?>/admin/ckeditor/ckeditor.js" type="text/javascript"></script>
                                                        <script>CKEDITOR.replace('editor1')</script>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="login-buttons col-md-3">
                                                        <button type="submit" class="btn btn-success btn-block" value="submit" name="submit" style="background-color: #00bffd;border:none;height:39px;">Add</button>
                                                    </div>
                                                    <div class="login-buttons col-md-9">
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

                        <section class="contact_us sec-padd-bottom" style="margin-bottom: -190px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-xs-12" id="mycss1" style="padding: 20px;background: #fff;box-shadow: 0 0 0 2px #eee,0 0 0 7px #fff,0 0 0 9px #eee;margin-left: 26px;margin-top: 48px;width:822px;">
                                        <div class="section-title">
                                            <h3 class="myhead">Enhancement</h3>

                                        </div>

                                        <div class="col-md-12">
                                            <ul>
                                            
                                          
                                            <?php
                                            $q = $this->md->my_query("select * from tbl_enhancement where party_id=" . $this->session->userdata('party'));
                                            if (!empty($q)) {
                                                foreach ($q as $val) {
                                                    ?>
                                                    <li style="list-style: decimal;">
                                            <div style="background: #f7f7f7;padding: 10px;margin-bottom: 20px;">
                                                    <?php
                                                    echo $val->description;
                                                    ?>
                                                <p style="text-align: right">
                                                <a class="btn btn-danger" href="<?php echo base_url(); ?>delete/enhance/<?php echo $val->enhancement_id; ?>" onclick="return confirm('Are You Sure you want to delete')">Delete</a>
                                                </p>
                                            </div>
                                                </li>
                                                    <?php
                                                }
                                            } else {
                                                echo "No Enhancement Found.";
                                            }
                                            ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </section>
                        <?php
                        }
                        else
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
        </section>
<?php
$this->load->view('footer');
?>

    </body>
        <?php
        $this->load->view('footerscript');
        ?>

</html>
