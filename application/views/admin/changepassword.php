
<html lang="en">
    <!--<![endif]-->



    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8"/>
        <title>My Govrn Admin | Change-Password Page</title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <?php
        $this->load->view('admin/link');
        ?>
        <script src="<?php echo base_url(); ?>admin/plugins/pace/pace.min.js"></script>

    </head>
    <body class="pace-top">
        <?php
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        ?>
        <div id="content" class="content" style="margin-top: 60px;">

            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li><a href="<?php echo base_url(); ?>Admin-Dashboard">Home</a></li>
                <li class="active">Change Password</li>

            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Changed Password

            </h1>
            <!-- end page-header -->

            <!-- begin row -->
            <div class="row">


                <div class="col-md-6">
                    <!-- begin pane -->
                    <div class="panel panel-inverse">

                        <form class="form-horizontal" style="padding: 20px;" method="post">
                            <div class="form-group">
                                <div class="col-md-12 form">
                                    <label  class="my_label">Current Password</label>
                                </div>                     
                                <div class="col-md-12" style="display: inline">
                                    <input type="password" class="form-control <?php
                                    if (isset($error)) {
                                        echo "error_border";
                                    }
                                    ?>"  placeholder="Current Password" name="cpwd"/>
                                    <p class="error_msg">
                                        <?php
                                        if (isset($error)) {
                                            echo $error;
                                        }
                                        ?>
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 form">
                                    <label  class="my_label">New Password</label>
                                </div>                     
                                <div class="col-md-12">
                                    <input type="password" class="form-control <?php
                                    if (form_error('npwd')) {
                                        echo "error_border";
                                    }
                                    ?>"placeholder="New Password" name="npwd"/>
                                    <p class="error_message">
                                        <?php
                                        echo form_error('npwd');
                                        ?>

                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 form">
                                    <label  class="my_label">Retype Password</label>
                                </div>                     
                                <div class="col-md-12">
                                    <input type="password" class="form-control <?php
                                    if (form_error('rpwd')) {
                                        echo "error_border";
                                    }
                                    ?>"placeholder="Retype Password" name="rpwd" />
                                    <p class="error_message">
                                        <?php
                                        echo form_error('rpwd');
                                        ?>
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="login-buttons col-md-3">
                                    <input type="submit" class="btn btn-success btn-block" name="changepwd" value="Change"/>

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

                        </form>


                    </div>
                    <!-- end panel -->
                </div>





            </div>
        </div>
        <!-- end page container -->

        <style type="text/css">
            p{
                color: red !important;
                font-size: 13px !important;
            } 

        </style>
    </body>
    <?php
    $this->load->view('admin/script');
    ?>
</html>