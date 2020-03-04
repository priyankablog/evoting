
<html lang="en">
    <!--<![endif]-->



    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8"/>
        <title>My Govrn Admin | News Page</title>
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
                <li class="active">News</li>

            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Managed News

            </h1>
            <!-- end page-header -->

            <!-- begin row -->
            <div class="row">
                <!-- begin col-2 -->
                <!-- begin col-10 -->
                <div class="col-md-6">
                    <!-- begin pane -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                         
                            <h4 class="panel-title">Display All News Information</h4>
                        </div>
                        <br>
                        <form class="form-horizontal" style="padding: 20px;" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label  class="my_label">Title</label>
                                </div>    
                                
                                <div class="col-md-12">
                                    <input type="text" class="form-control  <?php if(form_error('title')){ echo "error_border";} ?>" placeholder="Title" name="title" value="<?php if(!isset($success)){  echo set_value('title');}?>"/>
                                
                                <p class="error_message">
                                    <?php echo form_error('title');?>
                                </p>
                                </div>
                            </div>
                      
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label  class="my_label">News</label>
                                </div>
                                
                                <div class="col-md-12">
                                    <textarea class="form-control  <?php if(form_error('description')){ echo "error_border";} ?>" placeholder="News" cols="63"  rows="5" name="description"><?php if(!isset($success)){  echo set_value('description');}?></textarea>   
                                
                                <p class="error_message">
                                    <?php echo form_error('description');?>
                                </p>
                                </div>
                            </div>
                                  <div class="form-group">
                                <div class="col-md-12">
                                    <label  class="my_label">Select Image</label>
                                </div>                     
                                <div class="col-md-6">
                                    <input type="file" class="form-control  <?php if(isset($error)){ echo "error_border";} ?> "  id="blah" onchange="readURL(this);" name="news"/>
                                    <p class="error_message"><?php
                                    if(isset($error))
                                    {
                                        echo $error;
                                    }
                                    ?></p>
                                </div>
                                <div class="col-md-6">
                                                                       <img src="" alt="Id Proof" class="img-responsive center-block"  style="width: 100px;height:100px;padding: 10px;display: none" id="blah1"/>
                                </div>
                                
                            </div>
<div class="form-group">
                                <div class="login-buttons col-md-3">
                                    <input type="submit" class="btn btn-success btn-block" name="submit" value="Add"/>

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
                           
                            <h4 class="panel-title">Display All News Information</h4>
                        </div>
                        <br>
                        <div class="panel-body">
                            <table id="data-table" class="table table-striped table-bordered my-pagging nova-pagging"style="background-color: white;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th nova-search="yes">Title</th>
                                        <th nova-search="yes">Photo</th>
                                        
                                        <th nova-search="yes">Date</th>
                                        <th>Remove</th>
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                    $c=0;
                                    foreach($news as $val)
                                    {
                                        $c++;
                                        ?>
                                        <tr class="odd gradeX">

                                            <td><?php echo $c;?></td>
                                            <td><?php echo $val->name;?></td>
                                            <td><a href="<?php echo $val->news_path; ?>" target="_blank"><img class="center-block" src="<?php echo $val->news_path;?>" title="<?php echo $val->news; ?>" style="width: 50px; height: 50px;"/></a></td>
                                            
                                            <td><?php echo $val->date;?></td>
                                            <td><a href="<?php echo base_url();?>Delete/news/<?php echo $val->news_id;?>" onclick="return confirm('Are You Sure you want to delete')">Delete</a></td>
                                        
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