

<html lang="en">
    <!--<![endif]-->



    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8"/>
        <title>My Govrn Admin | State Page</title>
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
                <li><a href="<?php echo base_url(); ?>Admin-Dashboard">HomeEEE</a></li>
                <li class="active">State</li>

            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Managed State

            </h1>
            <!-- end page-header -->

            <!-- begin row -->
            <div class="row">
                <!-- begin col-2 -->
                <!-- begin col-10 -->
                <div class="col-md-6">
                    <!-- begin pane -->
                    <div class="panel panel-inverse"  data-sortable-id="table-basic-2">
                        <div class="panel-heading">
                            
                            <h4 class="panel-title">Display All State Information</h4>
                        </div>
                        <br>
                        <?php
                        if (isset($statedt)) {
                            ?>

                            <form class="form-horizontal" style="padding: 20px;" method="post">
                                <div class="form-group">
                                    <div class="col-md-12 ">
                                        <label class="my_label" style="text-align:left; font-size: 18px;" name ="state" >State</label>
                                    </div>
                                 
                                    <div class="col-md-12">
                                        <input type="text" class="form-control <?php if(form_error('upstate')){ echo "error_border";} ?>" name="upstate" placeholder="State Name" value="<?php echo $statedt[0]->name; ?>"/>
                                   
                                       <p class="error_message">
                                        <?php echo form_error('upstate'); ?>
                                    </p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="login-buttons col-md-3">
                                        <input type="submit" class="btn btn-success btn-block" name="update" value="Update"/>

                                    </div>
                                    
                                    <div class="login-buttons col-md-3">
                                        <a href="<?php echo base_url(); ?>Manage-State" class="btn btn-success btn-block" name="cancel">Cancel</a>
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

                            <?php
                        } else {
                            ?>
                            <form class="form-horizontal" style="padding: 20px;" method="post">
                                <div class="form-group">
                                    <div class="col-md-12 ">
                                        <label class="my_label" style="text-align:left; font-size: 18px;" name ="state">Add State</label>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <input type="text" autofocus="" class="form-control  <?php if(form_error('state')){ echo "error_border";} ?>"name="state" placeholder="State Name" value="<?php if(!isset($success)){  echo set_value('state');}?>"/>

                                    <p class="error_message">
                                        <?php echo form_error('state'); ?>
                                    </p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="login-buttons col-md-3">
                                        <input type="submit" class="btn btn-success btn-block" name="submit" value="Add"/>

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
                            <?php
                        }
                        ?>

                    </div>
                    <!-- end panel -->
                </div>

                <div class="col-md-6">
                    <!-- begin pane -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            
                            <h4 class="panel-title">Display All State Information</h4>
                        </div>
                        <br>
                        <div class="panel-body">
                            <table id="data-table" class="table table-striped my-pagging nova-pagging table-bordered"style="background-color: white;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th nova-search="yes">State</th>
                                        <th>Edit</th>
                                        <th>Remove</th>
                                    </tr>                              
                                </thead>
                                <tbody>
                                    <?php
                                    $c = 0;
                                    foreach ($statedata as $val) {
                                        $c++;
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $c; ?></td>
                                            <td><?php echo $val->name; ?></td>
                                            <td><a href="<?php echo base_url(); ?>Edit/state/<?php echo $val->l_id; ?>">Edit</a></td>
                                            <td><a href="<?php echo base_url(); ?>Delete/state/<?php echo $val->l_id; ?>" onclick="return confirm('Are You Sure you want to delete')">Delete</a></td>
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




            </div>
        </div>
        <!-- end page container -->

    </body>
    <?php
    $this->load->view('admin/script');
    ?>
</html>