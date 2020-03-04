
<html lang="en">
    <!--<![endif]-->



    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8"/>
        <title>My Govrn Admin | Banner Page</title>
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
                <li class="active">Banner</li>

            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Managed Banner

            </h1>
            <!-- end page-header -->

            <!-- begin row -->
            <div class="row">


                <div class="col-md-6">
                    <!-- begin pane -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            
                            <h4 class="panel-title">Display All Banner Information</h4>
                        </div>
                        <br>
                        <form class="form-horizontal" style="padding: 20px;" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label  class="my_label">Title</label>
                                </div>                     
                                
                                <div class="col-md-12">
                                    <input type="text" class="form-control  <?php if(form_error('title')){ echo "error_border";} ?>" id="" name="title" placeholder="Title" value="<?php if(!isset($success)){ echo set_value('title');}?>"/>
                                
                                <p class="error_message">
                                    <?php echo form_error('title');?>
                                </p>
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label  class="my_label">Description</label>
                                </div>
                                
                                <div class="col-md-12">
                                     <textarea name="description" class="form-control  <?php if(form_error('description')){ echo "error_border";} ?>" placeholder="Description" cols="63"  rows="5"><?php if(!isset($success)){  echo set_value('description');}?></textarea>   
                                
                                <p class="error_message">
                                    <?php echo form_error('description');?>
                                </p>
                                </div>
                            </div>
                             <div class="form-group">
                                <div class="col-md-12 ">
                                    <label  class="my_label">Select Banner</label>
                                </div>                     
                                <div class="col-md-6">
                                    <input type="file" class="form-control <?php if(isset($error)){ echo "error_border";}?>" multiple="" name="banner" id="blah" onchange="readURL(this);"/>
                                      <p class="error_message"><?php
                                    if(isset($error))
                                    {
                                        echo $error;
                                    }
                                    ?></p>
                                </div>
                                
                                <div class="col-md-6" >
                               <img src="" alt="Id Proof" class="img-responsive center-block"  style="width: 100px;height:100px;
                                padding: 10px;display: none" id="blah1"/>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="login-buttons col-md-3">
                                    <input type="submit" class="btn btn-success btn-block" value="Add" name="submit"/>

                                </div>
                            </div>
                            <div class="form-group">
                                 <?php
                            if (isset($success)) {
                                ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $success; ?>
                                </div>
                                <?php
                            }
                           ?>
                            </div>
                        </form>


                    </div>
                    <!-- end panel -->
                </div>

                <div class="col-md-6">
                    <!-- begin pane -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                          
                            <h4 class="panel-title">Display All Banner Information</h4>
                        </div>
                        <br>
                        <div class="panel-body">
                            <table id="data-table" class="table table-striped table-bordered my-pagging nova-pagging"style="background-color: white;">
                                <thead>
                                    <tr>

                                        <th>No</th>
                                        <th nova-search="yes">Title</th>
                                        <th nova-search="yes">Banner</th>
                                        <th>Remove</th>
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $c=0;
                                    foreach($banner as $val)
                                    {
                                        $c++;
                                        ?>
                                        <tr class="odd gradeX">

                                            <td><?php echo $c;?></td>
                                            <td><?php echo $val->title;?></td>
                                            <td><a href="<?php echo base_url($val->banner_path); ?>" target="_new"><img class="center-block" src="<?php echo $val->banner_path;?>" title="<?php echo $val->description; ?>" style="width: 50px; height: 50px;"/></a></td>
                                            <td><a href="<?php echo base_url();?>Delete/banner/<?php echo $val->b_id;?>" onclick="return confirm('Are You Sure you want to delete')">Delete</a></td>
                                        
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
    <script src="<?php echo base_url(); ?>/admin/js/set.js" type="text/javascript"></script>
    <?php
    $this->load->view('admin/script');
    ?>
</html>