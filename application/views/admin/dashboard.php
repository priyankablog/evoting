<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->


    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8"/>
        <title>My Govrn Admin | Dashboard Page</title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <?php
        $this->load->view('admin/link');
                
        ?>

        <script src="<?php echo base_url();?>admin/plugins/pace/pace.min.js"></script>

    </head>
    <body>
        <!-- begin #page-loader -->
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <!-- end #page-loader -->

        <!-- begin #page-container -->
        <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
            <!-- begin #header -->
             <?php
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        ?>

            <!-- begin #content -->
            <div id="content" class="content">
                <!-- begin breadcrumb -->
                <ol class="breadcrumb pull-right">
                    <li><a href="<?php echo base_url();?>Admin-Dashboard">Home</a></li>
                        
                    <li class="active">Dashboard</li>
                </ol>
                <!-- end breadcrumb -->
                <!-- begin page-header -->
                <h1 class="page-header">Dashboard
                   
                </h1>
                <!-- end page-header -->

                <!-- begin row -->
                <div class="row">
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget-stats bg-red-darker">
                            <div class="stats-icon"><i class="fa fa-phone"></i></div>
                            <div class="stats-info">
                                <h4>CONTACT</h4>
                                <p><?php echo $contact[0]->count;?></p>
                            </div>
                            <div class="stats-link">
                                <a href="<?php echo base_url();?>Manage-Contact-Us" target="_new">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget-stats bg-blue-darker">
                            <div class="stats-icon"><i class="fa fa-pencil-square"></i></div>
                            <div class="stats-info">
                                <h4>FEEDBACK</h4>
                                <p><?php echo $feedback[0]->count;?></p>
                            </div>
                            <div class="stats-link">
                                <a href="<?php echo base_url();?>Manage-Feedback" target="_new">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget-stats bg-purple-darker">
                            <div class="stats-icon"><i class="fa fa-envelope"></i></div>
                            <div class="stats-info">
                                <h4>EMAIL SUBSCRIBER</h4>
                                <p><?php echo $email[0]->count;?></p>
                            </div>
                            <div class="stats-link">
                                <a href="<?php echo base_url();?>Manage-Email-Subscriber" target="_new">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget-stats bg-green-darker">
                            <div class="stats-icon"><i class="fa fa-user"></i></div>
                            <div class="stats-info">
                                <h4>VOTER</h4>
                                <p><?php echo $vregistration[0]->count;?></p>
                            </div>
                            <div class="stats-link">
                                <a href="<?php echo base_url();?>Manage-Voter" target="_new">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                </div>
                <div class="row">
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget-stats bg-red-darker">
                            <div class="stats-icon"><i class="fa fa-users"></i></div>
                            <div class="stats-info">
                                <h4>PARTY</h4>
                                <p><?php echo $partyreg[0]->count;?></p>
                            </div>
                            <div class="stats-link">
                                <a href="<?php echo base_url();?>Manage-Party" target="_new">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget-stats bg-blue-darker">
                            <div class="stats-icon"><i class="fa fa-circle-o"></i></div>
                            <div class="stats-info">
                                <h4>STATE</h4>
                                <p><?php echo $state[0]->count;?></p>
                            </div>
                            <div class="stats-link">
                                <a href="<?php echo base_url();?>Manage-State" target="_new">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget-stats bg-purple-darker">
                            <div class="stats-icon"><i class="fa fa-map-marker"></i></div>
                            <div class="stats-info">
                                <h4>CITY</h4>
                                <p><?php echo $city[0]->count;?></p>
                            </div>
                            <div class="stats-link">
                                <a href="<?php echo base_url();?>Manage-City" target="_new">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget-stats bg-green-darker">
                            <div class="stats-icon"><i class="fa fa-area-chart"></i></div>
                            <div class="stats-info">
                                <h4>AREA</h4>
                                <p><?php echo $area[0]->count;?></p>
                            </div>
                            <div class="stats-link">
                                <a href="<?php echo base_url();?>Manage-Area" target="_new">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                </div>
                <div class="row">
                    <!-- begin col-3 -->
                    
                    <!-- end col-3 -->

                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget-stats bg-red-darker">
                            <div class="stats-icon"><i class="fa fa-newspaper-o"></i></div>
                            <div class="stats-info">
                                <h4>NEWS</h4>
                                <p><?php echo $news[0]->count;?></p>
                            </div>
                            <div class="stats-link">
                                <a href="<?php echo base_url();?>Manage-News" target="_new">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end col-3 -->

              
                <!-- end row -->

                <!-- end theme-panel -->
                <!-- begin scroll to top btn -->
                <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i
                        class="fa fa-angle-up"></i></a>
                <!-- end scroll to top btn -->
            </div>
        </div>
            <!-- end page container -->
            
    </body>
<?php
            $this->load->view('admin/script');
            ?>
    
</html>