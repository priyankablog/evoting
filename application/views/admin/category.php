

<html lang="en">
    <!--<![endif]-->



    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8"/>
        <title>My Govrn Admin | Category Page</title>
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
                <li class="active">Category</li>

            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Managed Category

            </h1>
            <!-- end page-header -->

            <!-- begin row -->
            <div class="row">
                <!-- begin col-2 -->
                <!-- begin col-10 -->
                <div class="col-md-5">
                    <!-- begin pane -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            
                            <h4 class="panel-title">Display All Category Information</h4>
                        </div>
                        <br>
                        <?php
                        if (isset($categorydata)) {
                            ?>

                            <form class="form-horizontal" style="padding: 20px;" method="post">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label class="my_label" style="text-align:left; font-size: 18px;" name ="" >Category</label>
                                    </div>

                                    <div class="col-md-12">
                                        <input type="text" class="form-control <?php
                                        if (form_error('upcategory')) {
                                            echo "error_border";
                                        }
                                        ?>"name="upcategory" placeholder="Category Name" value="<?php echo $categorydata[0]->category; ?>"/>

                                        <p class="error_message">
                                            <?php
                                            echo form_error('upcategory');
                                            ?>
                                        </p>

                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label class="my_label" style="text-align:left; font-size: 18px;" name ="" >Description</label>
                                    </div>


                                    <div class="col-md-12">
                                        <textarea class="form-control <?php
                                        if (form_error('updescription')) {
                                            echo "error_border";
                                        }
                                        ?>" name="updescription" rows="5" placeholder="Description here..." ><?php echo $categorydata[0]->description; ?></textarea>

                                        <p class="error_message">
                                            <?php
                                            echo form_error('updescription');
                                            ?>
                                        </p></div>
                                </div>

                                <div class="form-group">
                                    <div class="login-buttons col-md-3">
                                        <input type="submit" class="btn btn-success btn-block" name="update" value="Update"/>

                                    </div>
                                    
                                    <div class="login-buttons col-md-3">
                                        <a href="<?php echo base_url(); ?>Manage-Category" class="btn btn-success btn-block" name="cancel">Cancel</a>    
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
                                    <div class="alert alert-danger" role="alert">
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
                                    <div class="col-md-12">
                                        <label class="my_label" style="text-align:left; font-size: 18px;" name ="" >Category</label>
                                    </div>

                                    <div class="col-md-12">
                                        <input type="text" class="form-control <?php
                                        if (form_error('category')) {
                                            echo "error_border";
                                        }
                                        ?>"name="category" placeholder="Category Name" value="<?php
                                               if (!isset($success)) {
                                                   echo set_value('category');
                                               }
                                               ?>"/>
                                   
                                    <p class="error_message"><?php echo form_error('category'); ?></p>                       
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label class="my_label" style="text-align:left; font-size: 18px;" name ="" >Description</label>
                                    </div>

                                    <div class="col-md-12">
                                        <textarea class="form-control <?php
                                        if (form_error('description')) {
                                            echo "error_border";
                                        }
                                        ?>" name="description" rows="5" placeholder="Description here..." value=""><?php
                                                  if (!isset($success)) {
                                                      echo set_value('description');
                                                  }
                                                  ?></textarea>

                                        <p class="error_message">
                                            <?php echo form_error('description'); ?>
                                        </p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="login-buttons col-md-3">
                                        <input type="submit" class="btn btn-success btn-block" name="submit" value="Submit"/>

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

                <div class="col-md-7">
                    <!-- begin pane -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                           
                            <h4 class="panel-title">Display All Category Information</h4>
                        </div>
                        <br>
                        <div class="panel-body">
                            <table id="data-table" class="table table-striped table-bordered my-pagging nova-pagging"style="background-color: white;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th nova-search="yes">Category</th>
                                        <th nova-search="yes">Description</th>
                                        <th>Edit</th>
                                        <th>Remove</th>
                                    </tr>                              
                                </thead>
                                <tbody>
                                    <?php
                                    $c = 0;
                                    foreach ($category as $val) {
                                        $c++;
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $c; ?></td>
                                            <td><?php echo $val->category; ?></td>
                                            <td><?php echo $val->description; ?></td>
                                            <td><a href="<?php echo base_url(); ?>Edit/category/<?php echo $val->category_id; ?>">Edit</a></td>
                                            <td><a href="<?php echo base_url(); ?>Delete/category/<?php echo $val->category_id; ?>" onclick="return confirm('Are You Sure you want to delete')">Delete</a></td>
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


























