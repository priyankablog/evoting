

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
                <li><a href="<?php echo base_url(); ?>Admin-Dashboard">Home</a></li>
                <li class="active">Schedule</li>

            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Managed Schedule

            </h1>
            <!-- end page-header -->

            <!-- begin row -->
            <div class="row">
                <!-- begin col-2 -->
                <!-- begin col-10 -->
                <div class="col-md-5">
                    <!-- begin pane -->
                    <div class="panel panel-inverse"  data-sortable-id="table-basic-2">
                        <div class="panel-heading">

                            <h4 class="panel-title">Display All Schedule Information</h4>
                        </div>
                        <br>

                        <form class="form-horizontal" style="padding: 20px;" method="post">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label class="my_label" style="text-align:left; font-size: 18px;" name ="">Select Category</label>

                                </div>
                                <div class="col-md-12">
                                    <select class="form-control <?php
                                    if (form_error('category')) {
                                        echo "error_border";
                                    }
                                    ?>" name="category">
                                        <option value="">Category</option>
                                        <?php
                                        $c = 0;
                                        foreach ($category as $val) {
                                            $c++;
                                            ?>
                                            <option class="" value="<?php echo $val->category_id; ?>"
                                            <?php
                                            if (set_select('category', $val->category_id) && !isset($success)) {
                                                echo "selected";
                                            }
                                            ?>
                                                    ><?php echo $val->category; ?></option>
                                                    <?php
                                                }
                                                ?>
                                    </select> 

                                    <p class="error_message">
                                        <?php echo form_error('category'); ?>
                                    </p>
                                </div>


                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label class="my_label" style="text-align:left; font-size: 18px;" name ="">Select Date</label>
                                </div>

                                <div class="col-md-12">
                                    <input type="date" class="form-control <?php
                                    if (form_error('date')) {
                                        echo "error_border";
                                    }
                                    ?>" id="datepicker-default"
                                           placeholder="Select Date" value="<?php
                                           if (!isset($success)) {
                                               echo set_value('date');
                                           }
                                           ?>" name="date"/>

                                    <p class="error_message">
                                        <?php echo form_error('date'); ?>
                                    </p>
                                </div>


                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label  class="my_label">Select State</label>
                                </div>

                                <div class="col-md-12">
                                    <select class="form-control  <?php
                                    if (form_error('state')) {
                                        echo "error_border";
                                    }
                                    ?>" id="state" name="state" onchange="set_combo(this.value, 'city')" value="<?php
                                            if (!isset($success)) {
                                                echo set_value('state');
                                            }
                                            ?>">  
                                        <option value="">State</option>
                                        <?php
                                        foreach ($state as $val) {
                                            ?>

                                            <option class="" value="<?php echo $val->l_id; ?>"

                                                    <?php
                                                    if (set_select('state', $val->l_id) && !isset($success)) {
                                                        echo "selected";
                                                    }
                                                    ?> >
                                                        <?php
                                                        echo $val->name;
                                                        ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>

                                    <p class="error_message">
                                        <?php echo form_error('state'); ?>
                                    </p>
                                </div>  

                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label  class="my_label">Select City</label>
                                </div>

                                <div class="col-md-12">
                                    <select class="form-control  <?php
                                    if (form_error('city')) {
                                        echo "error_border";
                                    }
                                    ?>" name="city" id="city" value="<?php
                                            if (!isset($success)) {
                                                echo set_value('city');
                                            }
                                            ?>"> 
                                        <option value="">City</option>
                                        <?php
                                        if (set_value('city') != "" && !isset($success)) {
                                            $q = $this->md->my_query("select * from tbl_location where parent_id=" . set_value('state'));
                                            foreach ($q as $query) {
                                                ?>
                                                <option class="" value="<?php echo $query->l_id; ?>" 
                                                <?php
                                                if (set_value('city') == $query->l_id && !isset($success)) {
                                                    echo "selected";
                                                }
                                                ?>
                                                        >
                                                            <?php
                                                            echo $query->name;
                                                            ?></option>
                                                <?php
                                            }
                                        }
                                        ?>

                                    </select>

                                    <p class="error_message">
                                        <?php echo form_error('city'); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="login-buttons col-md-3">
                                    <input type="submit" class="btn btn-success btn-block" name="submit" value="Add"/>

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
                                if (isset($error1)) {
                                    ?>
                                    <div class="alert alert-warning" role="alert">
                                        <?php echo $error1; ?>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </form>


                    </div>
                    <!-- end panel -->
                </div>

                <div class="col-md-7">
                    <!-- begin pane -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">

                            <h4 class="panel-title">Display All Schedule Information</h4>
                        </div>
                        <br>
                        <div class="panel-body">
                            <table id="data-table" class="table table-striped my-pagging nova-pagging table-bordered"style="background-color: white;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th nova-search="yes">Category</th>
                                        <th nova-search="yes">Date</th>
                                        <th nova-search="yes">State</th>
                                        <th nova-search="yes">City</th>

                                        <th>Remove</th>
                                    </tr>                              
                                </thead>
                                <tbody>
                                    <?php
                                    $c = 0;
                                    foreach ($schedule as $val) {
                                        $q = $this->md->my_query("select category from tbl_election_category where category_id='" . $val->category_id . "'");
                                        $q1 = $this->md->my_query("select * from tbl_location where l_id='" . $val->location_id . "' and label='city'");
                                        $q2 = $this->md->my_query("select * from tbl_location where l_id='" . $q1[0]->parent_id . "' and label='state'");

                                        $c++;
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $c; ?></td>
                                            <td><?php echo $q[0]->category; ?></td>
                                            <td><?php echo $val->date; ?></td>
                                            <td><?php echo $q2[0]->name; ?></td>
                                            <td><?php echo $q1[0]->name; ?></td>

                                            <td><a href="<?php echo base_url(); ?>Delete/manageschedule/<?php echo $val->s_id; ?>" onclick="return confirm('Are You Sure you want to delete')">Delete</a></td>
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