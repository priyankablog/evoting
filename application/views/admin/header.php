<div id="header" class="header navbar navbar-default navbar-fixed-top">
        <!-- begin container-fluid -->
        <div class="container-fluid">
            <!-- begin mobile sidebar expand / collapse button -->
            <div class="navbar-header">
                <a href="<?php echo base_url();?>Admin-Dashboard" class="navbar-brand"><img src="<?php echo base_url();?>admin/img/logo1.png" alt="logo" style="height: 45px;width:80px;"></a>
                <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- end mobile sidebar expand / collapse button -->

            <!-- begin header navigation right -->
            <ul class="nav navbar-nav navbar-right hidden-xs">
                
                <li class="dropdown navbar-user">
                    
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo base_url();?>admin/img/user-13.jpg" alt=""/>
                        <span class="hidden-xs">Administrator</span> <b class="caret"></b>
                        <br>
                    </a>
                    
                    <ul class="dropdown-menu animated fadeInLeft">
                        <li class="arrow"></li>
                        
                        <li class="" style="padding-left: 15px;padding-top: 10px; padding-bottom: 5px;">
                            <p style="color:#2196F3;margin-bottom:0px;">Last Access Time</p>    
                        <?php
                        $wh['admin_login_id']=$this->session->userdata('admin');
                        $time=$this->md->my_select('tbl_admin_login',$wh);
                        $t=date('d/m/y h:i:s',strtotime($time[0]->last_login));
                        
                        echo $t;
                        ?>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url();?>Manage-Change-Password">Change Password</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url();?>Admin-Logout">Log Out</a></li>
                    </ul>
                </li>
               
            </ul>
            
            
            <!-- end header navigation right -->
        </div>
        
        <!-- end container-fluid -->
    </div>