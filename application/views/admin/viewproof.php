<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->



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
            <?php
            $q = $this->md->my_query("select * from tbl_voter_registration where voter_id=" . $this->uri->segment(2));
            
            $q2 = $this->md->my_query("select count(*) as cn from tbl_idproof where voter_id='".$q[0]->voter_id."'")[0]->cn;
            $q1 = $this->md->my_query("select * from tbl_idproof where voter_id='".$q[0]->voter_id."'");
            
            ?>
            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
             
                <li><a href="<?php echo base_url(); ?>Admin-Dashboard">Home</a></li>
                <li class="active">Managed User</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">
                <?php
                echo $q[0]->voter_name . "'s Id Proof";
                ?>
            </h1>
            <br>
            <?php
            if($q2<>0)
            {
            if ($q1[0]->voter_id == $q[0]->voter_id) {
                ?>

                <section class="services-section style-two">
                    <div class="auto-container">

                        <div class="row clearfix">
                            <!--Services Block Two-->
    <?php
    foreach ($q1 as $query) {
        $q=$this->encryption->decrypt($query->path);
        ?>

                                <div class="column col-md-6 col-sm-12 col-xs-12">
                                    <center>
 <div class="">
                                            <div class=""><?php echo $query->type; ?></div>
                                        </div>
                                        <div class="" style="padding-top: 20px;">
                                            <img src="<?php echo base_url();
                        echo $q; ?>" class="" style="width:100%;"/>
                                        </div>
                                       
                                    </center>
                                </div>


        <?php
    }
    ?>

                        </div>

                    </div>
                </section>
    <?php
}
            }else {
    echo "No Id Proof Available";
}
?>


        </div>
    </div>

</body>
<?php
$this->load->view('admin/script');
?>
</html>