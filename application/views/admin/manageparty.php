<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->



    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8"/>
        <title>My Govrn Admin | Manage-Party Page</title>
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
                <li class="active">Manage Party</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Managed Party

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

                            <h4 class="panel-title">Display All Party Information</h4>
                        </div>

                        <div class="panel-body">
                            <table id="data-table" class="table table-striped table-bordered nova-pagging my-pagging">
                                <thead>
                                    <tr style="vertical-align: top;">
                                        <th>No</th>
                                        <th nova-search="yes">Party Name</th>
                                        <th nova-search="yes">Logo</th>
                                        <th nova-search="yes">Since</th>
                                        <th nova-search="yes">Party Chairman Name</th>
                                        <th nova-search="yes">Email</th>
                                        <th nova-search="yes">View Party</th>
                                        <th nova-search="yes">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $c = 0;
                                    foreach ($partydata as $val) {
                                        $c++;
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $c; ?></td>
                                            <td><?php echo $val->p_name; ?></td>
                                            <td><center><a href="<?php echo base_url($val->p_logo); ?>" target="_new !important;"><img src="<?php echo base_url() . $val->p_logo; ?>" height="50px" width="50px" title="<?php echo $val->p_name; ?>"/></a></center></td>
                                    <td><?php echo $val->since; ?></td>
                                    <td><?php echo $val->p_chairman_name; ?></td>
                                    <td><?php echo $val->email; ?></td>
                                    <td><center><a href="<?php echo base_url(); ?>View-Party/<?php echo $val->party_id; ?>" target="_new">View</a></center></td>
                                    <?php
                                    if ($val->status == 0) {
                                        ?>
                                        <td align="center">
                                            <a style="cursor: pointer" >  <i title="Activate this voter" onclick="act(this.id, 'manageparty')" id="<?php echo $val->party_id; ?>" class="fa fa-check-circle fa-2x text-success"></i> </a>
                                        </td>
                                        <?php
                                    } else {
                                        ?>
                                        <td align="center">
                                            <a style="cursor: pointer" > <i title="Deactivate this party" onclick="act(this.id, 'manageparty')" id="<?php echo $val->party_id; ?>" class="fa fa-ban fa-2x text-danger"></i></a>
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