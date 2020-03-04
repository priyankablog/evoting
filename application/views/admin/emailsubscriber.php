
<html lang="en">
    <!--<![endif]-->



    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8"/>
        <title>My Govrn Admin | Email-Subscriber Page</title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="<?php echo base_url(); ?>admin/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>admin/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>admin/css/animate.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>admin/css/style.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>admin/css/style-responsive.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>admin/css/theme/default.css" rel="stylesheet" id="theme"/>
        <link href="<?php echo base_url(); ?>admin/css/essential.css" rel="stylesheet"/>
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
                <li><a href="<?php echo base_url(); ?>admin-Dashboard">Home</a></li>
                <li class="active">Email Subscriber</li>

            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Managed Email Subscriber

            </h1>
           
            <?php
                if(isset($success)){
            ?>
            <div class="alert alert-success " ><?php echo $success;  ?> </div>
            <?php 
                }
            ?>
            <!-- end page-header -->

            <!-- begin row -->
            <div class="row">
                <form class="form-horizontal" style="padding: 20px;" method="post">
                    <div class="col-md-6">

                        <!-- begin pane -->
                        <div class="panel panel-inverse">
                            <div class="panel-heading">

                                <h4 class="panel-title">Display All Email Subscriber Information</h4>
                            </div>
                            <br>
                            <div class="panel-body">
                                <table id="data-table" class="table table-striped table-bordered nova-pagging my-pagging"style="background-color: white;">

                                    <thead>
                                        <tr>
                                            <th class="email-select">#</th>
<!--                                            <th class="email-select">
                                                <a href="#" data-click="email-select-all"><i class="fa fa-square-o fa-fw"></i></a>
                                            </th>-->
                                           

                                            <th>No</th>
                                            <th nova-search="yes">Email Subscriber</th>
                                            <th>Remove</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $c = 0;
                                        foreach ($emailsubscriber as $val) {
                                            $c++;
                                            ?>
                                            <tr class="odd gradeX">
                                                <td><input type="checkbox" name="receiver[]" value="<?php echo $val->email_id; ?>"/></td>
<!--                                                <td class="email-select">
                                                    <a href="#" data-click="email-select-single"><i
                                                            class="fa fa-square-o fa-fw"></i></a>
                                                </td>-->
                                                <td><?php echo $c; ?></td>
                                                <td><?php echo $val->email_id; ?></td>
                                                <td><a href="<?php echo base_url(); ?>Delete/emailsubscriber/<?php echo $val->es_id; ?>" onclick="return confirm('Are You Sure you want to delete')">Remove</a></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>


                        </div>
                        <!-- end panel -->
                    </div>

                    <div class="col-md-6">
                        <!-- begin pane -->
                        <div class="panel panel-inverse">
                            <div class="panel-heading">

                                <h4 class="panel-title">Send Email</h4>
                            </div>
                            <br>

                            <div class="form-group">
                                <div class="col-md-12  m-b-10 form">
                                    <label class="my_label">Add Title</label>
                                </div>
                                <div class="col-md-12  m-b-20">
                                    <input type="text" class="form-control" placeholder="Title" name="subject"/>
                                    <p class="error_message">
                                        <?php echo form_error('subject'); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12  m-b-20 panel-body panel-form">
                                    <textarea class="ckeditor" id="editor1" name="msg" rows="20"></textarea>
                                    <script src="<?php echo base_url(); ?>/admin/ckeditor/ckeditor.js" type="text/javascript"></script>
                                    <script>CKEDITOR.replace('editor1')</script>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="login-buttons col-md-3">
                                    <button type="submit" class="btn btn-success btn-block" value="submit" name="send">Submit</button>

                                </div>
                                
                            </div>


                        </div>
                        <!-- end panel -->
                    </div>
                </form>
            </div>
        </div>
        <!-- end page container -->

        <script src="<?php echo base_url(); ?>admin/js/inbox_demo.js"></script>
        <script src="<?php echo base_url(); ?>admin/js/app.js"></script>
    </body>
    <?php
    $this->load->view('admin/script');
    ?>
</html>