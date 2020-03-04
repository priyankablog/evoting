

<html lang="en">
    <!--<![endif]-->



    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8"/>
        <title>My Govrn Admin | Contact Page</title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <?php
        $this->load->view('admin/link');
        ?>
        <script src="<?php echo base_url();?>admin/plugins/pace/pace.min.js"></script>

    </head>
    <body class="pace-top">
        <?php
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        ?>
        <div id="content" class="content" style="margin-top: 60px;">

            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li><a href="<?php echo base_url();?>Admin-Dashboard">Home</a></li>
                <li class="active">Contact</li>
                
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Managed Contact

            </h1>
            <!-- end page-header -->

            <!-- begin row -->
            <div class="row">
                <!-- begin col-2 -->
                <!-- begin col-10 -->
                <div class="col-md-12">
                    <!-- begin pane -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                           
                            <h4 class="panel-title">Display All Contact Information</h4>
                        </div>
                          <div class="panel-body">
                            <table id="data-table" class="table table-striped table-bordered  my-pagging nova-pagging">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th nova-search="yes">Name</th>
                                        <th nova-search="yes">Email</th>
                                        <th nova-search="yes">Phone</th>
                                        <th nova-search="yes">Subject</th>
                                        <th nova-search="yes">Message</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $c=0;
                                    foreach($contactdata as $val)
                                    {
                                        $c++;
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $c;?></td>
                                        <td><?php echo $val->name;?></td>
                                        <td><?php echo $val->email;?></td>
                                        <td><?php echo $val->phone;?></td>
                                        <td><?php echo $val->subject;?></td>
                                        <td><?php echo $val->message;?></td>
                                        <td><a href="<?php echo base_url();?>Delete/contact/<?php echo $val->c_id;?>" onclick="return confirm('Are You Sure you want to delete')">Delete</a></td>
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