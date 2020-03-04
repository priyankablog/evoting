<!DOCTYPE html>

<html lang="en"> 



    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8"/>
        <title>My Govrn Admin | Manage-Voter Page</title>
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
                <li class="active">Manage Voter</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Managed Voter

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

                            <h4 class="panel-title">Display All Voter Information</h4>
                        </div>
                        <div class="panel-body">
                            <form method="post">
                                <table id="data-table" class="table table-striped table-bordered my-pagging nova-pagging">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th nova-search="yes">Voter Name</th>

                                            <th nova-search="yes">Email Id</th>
                                            <th nova-search="yes">Phone No</th>
                                            <th nova-search="yes">Age</th>
                                            <th nova-search="yes">Gender</th>
                                            <th nova-search="yes">View Proof</th>
                                            <th>Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $c = 0;
                                        foreach ($voterdata as $val) {
                                            $c++;
                                            ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $c; ?></td>
                                                <td><?php echo $val->voter_name; ?></td>
                                                <td><?php echo $val->email; ?></td>
                                                <td><?php echo $val->phone; ?></td>
                                                <td><?php
                                                    if ($val->dob == "") {
                                                        echo "";
                                                    } else {
                                                        $dob = explode("-", $val->dob);
                                                        $age = date('Y') - $dob[2];
                                                        echo $age;
                                                    }
                                                    ?></td>
                                                <td><?php echo $val->gender; ?></td>
                                                <td><a href="<?php echo base_url(); ?>View-Proof/<?php echo $val->voter_id; ?>" target="_new">View</a></td>
                                                <?php
                                                if ($val->status == 0) {
                                                    ?>
                                                    <td align="center">
                                                        <a style="cursor: pointer" >  <i title="Activate this voter" onclick="act(this.id, 'managevoter')" id="<?php echo $val->voter_id; ?>" class="fa fa-check-circle fa-2x text-success"></i> </a>
                                                    </td>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <td align="center">
                                                        <a style="cursor: pointer" > <i title="Deactivate this voter" onclick="act(this.id, 'managevoter')" id="<?php echo $val->voter_id; ?>" class="fa fa-ban fa-2x text-danger"></i></a>
                                                    </td>
                                                    <?php
                                                }
                                                ?>
                                            </tr>

                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>

                            </form>
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