<div class="header-upper">
    <div class="auto-container">
        <div class="clearfix border-bottom" style="padding-bottom: 0">

            <div class="pull-left logo-outer">
                <div class="logo"><a href="<?php echo base_url();?>Home"><img src="<?php echo base_url();?>visitor/images/logo1.png" alt="" title="My Govrn" width="110"></a></div>
            </div>

            <div class="pull-right upper-right clearfix">

                <!--Info Box-->
                <div class="upper-column info-box">
                    <div class="icon-box"><span class="flaticon-phone-call"></span></div>
                    Call Us
                    <div class="light-text">+91 757 490 7598</div>
                </div>

                <!--Info Box-->
                <div class="upper-column info-box">
                    <div class="icon-box"><span class="flaticon-envelope"></span></div>
                    Drop Your Mail
                    <div class="light-text">mygovrn@gmail.com</div>
                </div>
                <?php
                                if($this->session->userdata('value')=="2")
                                {
//                                 $this->session->unset_userdata('value');
//                                 $this->session->set_userdata('value1',3);
                                    
                                ?>

               
                <?php
                                }
                                else
                                {
                                    //$this->session->unset_userdata('value');
                                 ?>
                 <div class="upper-column info-box">
                    
                    <div class="link"><a href="<?php echo base_url();?>Registration" class="theme-btn btn-style-one">Voter Registration</a></div>
                </div>
                <?php
                                }
                                ?>
            </div>

        </div>
    </div>
</div>

<!--Header-Upper-->