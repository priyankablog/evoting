<!-- begin #sidebar -->
    <div id="sidebar" class="sidebar">
        <!-- begin sidebar scrollbar -->
        <div data-scrollbar="true" data-height="100%">
            <!-- begin sidebar user -->
            <ul class="nav">
                <li class="nav-profile">
                    <div class="image">
                        <a href="javascript:;"><img src="<?php echo base_url();?>admin/img/user-13.jpg" alt=""/></a>
                    </div>
              
                    <div class="info" style="padding-top: 10px;">
                        Administrator
                        
                    </div>
                </li>
            </ul>
            <!-- end sidebar user -->
            <!-- begin sidebar nav -->
            <ul class="nav">
                <li><a href="<?php echo base_url();?>Admin-Dashboard"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <span class="badge pull-right"></span>
                        <i class="fa fa-paw"></i>
                        <span>Extra Pages</span>
                        <b class="caret pull-right"></b>
                    </a>
                    <ul class="sub-menu">
                        
                        <li><a href="<?php echo base_url();?>Manage-Contact-Us">Contact</a></li>
                        <li><a href="<?php echo base_url();?>Manage-Feedback">Feedback</a></li>
                        <li><a href="<?php echo base_url();?>Manage-Email-Subscriber">Email Subscriber</a></li>
                        <li><a href="<?php echo base_url();?>Manage-News">News</a></li>
                        <li><a href="<?php echo base_url();?>Manage-Banner">Banner</a></li>
                        
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <span class="badge pull-right"></span>
                       <i class="fa fa-map-marker"></i>
                        <span>Location</span>
                        <b class="caret pull-right"></b>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo base_url();?>Manage-State">State</a></li>
                        <li><a href="<?php echo base_url();?>Manage-City">City</a></li>
                        <li><a href="<?php echo base_url();?>Manage-Area">Area</a></li>
                        
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <span class="badge pull-right"></span>
                       <i class="fa fa-user"></i> 
                        <span>Voter / Party</span>
                        <b class="caret pull-right"></b>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo base_url();?>Manage-Voter">Voter</a></li>
                        <li><a href="<?php echo base_url();?>Manage-Party">Party</a></li>
                    </ul>
                </li>
<li><a href="<?php echo base_url();?>Manage-Category"><i class="fa fa-asterisk "></i><span>Election Category</span></a></li>
                <li><a href="<?php echo base_url();?>Manage-Schedule"><i class="fa fa-calendar"></i><span>Schedule</span></a></li>
              <li><a href="<?php echo base_url();?>Admin-Logout"><i class="fa fa-power-off"></i><span>Logout</span></a></li>
                
            </ul>
            <!-- end sidebar nav -->
        </div>
        <!-- end sidebar scrollbar -->
    </div>
    <div class="sidebar-bg"></div>
   
    <!-- end #sidebar -->
