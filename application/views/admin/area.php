
<html lang="en">
    <!--<![endif]-->



    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8"/>
        <title>My Govrn Admin | Area Page</title>
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
                <li class="active">Area</li>

            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Managed Area

            </h1>
            <!-- end page-header -->

            <!-- begin row -->
            <div class="row">
                <!-- begin col-2 -->
                <!-- begin col-10 -->
                <div class="col-md-4">
                    <!-- begin pane -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                           
                            <h4 class="panel-title">Display All Area Information</h4>
                        </div>
                        <br>
                        <?php
                        if(isset($updatearea))
                        {
                        ?>
                        <form class="form-horizontal" style="padding: 20px;" method="post">
                            <div class="form-group">
                                <div class="col-md-12 ">
                                    <label  class="my_label">Select State</label>
                                </div>
                                <div class="col-md-12">
                                    <select class="form-control <?php if(form_error('upstate')){ echo "error_border";} ?>" id="state" name="upstate" onchange="set_combo(this.value,'city')">  
                                        <option value="">State</option>
                                        <?php
                                       $citydt=$this->md->my_query("select * from tbl_location where parent_id='".$state[0]->l_id."'");
                                        foreach ($state as $val)
                                         {
                                            ?>
                                        
                                           <option class="" value="<?php echo $val->l_id; ?>"
                                                   
                                                   <?php
                                        if($this->input->post('upstate') !="")
                                        {
                                            if($val->l_id==$this->input->post('upstate'))
                                            {
                                                echo "selected";
                                            }
                                        }
                                        else
                                        {
                                            if($val->l_id==$citydt[0]->parent_id)
                                            {
                                                echo "selected";
                                            }
                                            
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
                                    <?php echo form_error('upstate');?>
                                </p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 ">
                                    <label  class="my_label">Select City</label>
                                </div>
                                <div class="col-md-12">
                                    <select class="form-control <?php if(form_error('upcity')){ echo "error_border";} ?>" name="upcity" id="city"> 
                                        <option value="">City</option>
                                           <?php
                                     
                                        foreach ($citydt as $val)
                                         {
                                            ?>
                                        
                                           <option class="" value="<?php echo $val->l_id; ?>"
                                                   
                                                   <?php
                                        if($this->input->post('upcity') !="")
                                        {
                                            if($val->l_id==$this->input->post('upcity'))
                                            {
                                                echo "selected";
                                            }
                                        }
                                        else
                                        {
                                            if($val->l_id==$updatearea[0]->parent_id)
                                            {
                                                echo "selected";
                                            }
                                            
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
                                    <?php echo form_error('upcity');?>
                                </p>
                                </div>
                            </div>

                            <div class="form-group">
                                
                                <div class="col-md-12 ">
                                    
                                    <label class="my_label"> Update Area</label>
                                </div>
                                <div class="col-md-12 ">
                                    <input type="text" class="form-control <?php if(form_error('uparea')){ echo "error_border";} ?>" placeholder="Area Name" name="uparea" value="<?php echo $updatearea[0]->name; ?>"/>
                                    
                               
                                <p class="error_message">
                                    <?php echo form_error('uparea');?>
                                </p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="login-buttons col-md-4">
                                    <input type="submit" class="btn btn-success btn-block" name="update" value="Update"/>

                                </div>
                                
                                <div class="login-buttons col-md-4">
                                    <a href="<?php echo base_url(); ?>Manage-Area" class="btn btn-success btn-block" name="cancel">Cancel</a>    

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
                        }
                        else
                        {
                        ?>
                        <form class="form-horizontal" style="padding: 20px;" method="post">
                            <div class="form-group">
                                <div class="col-md-12 ">
                                    <label  class="my_label">Select State</label>
                                </div>
                                
                                <div class="col-md-12">
                                    <select class="form-control  <?php if(form_error('state')){ echo "error_border";} ?>" id="state" name="state" onchange="set_combo(this.value,'city')" value="<?php if(!isset($success)){echo set_value('state');}?>">  
                                        <option value="">State</option>
                                        <?php
                                      
                                        foreach ($state as $val)
                                         {
                                            ?>
                                        
                                           <option class="" value="<?php echo $val->l_id; ?>"
                                                   
                                                   <?php
                                            if(set_select('state',$val->l_id) && !isset($success))
                                                {
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
                                    <?php echo form_error('state');?>
                                </p>
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 ">
                                    <label  class="my_label">Select City</label>
                                </div>
                                
                                <div class="col-md-12">
                                    
                                    <select class="form-control  <?php if(form_error('city')){ echo "error_border";} ?>" name="city" id="city" value="<?php if(!isset($success)){echo set_value('city');}?>"> 
                                        <option value="">City</option>
                                        
                                       <?php
                                        if(set_value('city')!="" && !isset($success)) 
                                        {
                                            $q=$this->md->my_query("select * from tbl_location where parent_id=".set_value('state'));
                                            foreach($q as $query)
                                            {
                                        ?>
                                        <option class="" value="<?php echo $query->l_id; ?>" 
                                            <?php
                                               if(set_value('city')==$query->l_id && !isset($success)) 
                                               {echo "selected";
                                               }
                                               
                                               ?>
                                             >
                                            <?php
                                            echo $query->name;
                                            ?></option>
                                        <?php
                                            }
                                        }?>
                                      
                                    </select>
                                    <p class="error_message">
                                    <?php echo form_error('city');?>
                                </p>
                                </div>
                                
                            </div>

                            <div class="form-group">
                                
                                <div class="col-md-12 ">
                                    
                                    <label class="my_label"> Add Area</label>
                                </div>
                                
                                <div class="col-md-12 ">
                                    <input type="text" class="form-control  <?php if(form_error('area')){ echo "error_border";} ?>" placeholder="Area Name" name="area" value="<?php if(!isset($success)){echo set_value('area');} ?>"/>
                             
                                <p class="error_message">
                                    <?php echo form_error('area');?>
                                </p>
                                </div>   
                            </div>
                            <div class="form-group">
                                <div class="login-buttons col-md-4">
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
                                <div class="alert alert-danger" role="alert">
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

                <div class="col-md-8">
                    <!-- begin pane -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                           
                            <h4 class="panel-title">Display All Area Information</h4>
                        </div>
                        <br>
                        <div class="panel-body">
                            <table id="data-table" class="table table-striped  my-pagging nova-pagging table-bordered"style="background-color: white;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th nova-search="yes">State</th>
                                        <th nova-search="yes">City</th>
                                        <th nova-search="yes">Area</th>
                                        <th>Edit</th>
                                        <th>Remove</th>
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                    
                                    $c = 0;
                                    foreach ($area as $val)
                                    {
                                        $c++;
                                            $getcity1=$this->md->my_query("select name,parent_id from tbl_location where l_id=$val->parent_id ");
                                            $dt=$getcity1[0]->parent_id;
                                            $getstate1=$this->md->my_query("select name from tbl_location where l_id=$dt");
                                            ?>
                                       
                                        
                                            <tr class="odd gradeX">
                                            <td><?php echo $c; ?></td>
                                            <td><?php echo $getstate1[0]->name; ?></td>
                                            <td><?php echo $getcity1[0]->name;?></td>
                                            <td><?php echo $val->name; ?></td>
                                            <td><a href="<?php echo base_url();?>Edit/area/<?php echo $val->l_id;?>">Edit</a></td>
                                            <td><a href="<?php echo base_url();?>Delete/area/<?php echo $val->l_id;?>" onclick="return confirm('Are You Sure you want to delete')">Delete</a></td>
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