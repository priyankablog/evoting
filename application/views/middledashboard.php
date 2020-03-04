
<div class="col-md-3 " style="background: #fff;padding: 10px;">
    <?php
    $c = $this->md->my_query("select * from tbl_voter_registration where voter_id=" . $this->session->userdata('voter'));
//    $c1 = $this->md->my_query("select * from tbl_idproof where voter_id=" . $this->session->userdata('voter') . " and type='Passport'");
//    if (!empty($c1)) {
        $path = $this->encryption->decrypt($c[0]->profile);
        ?>
        <img src="
        <?php
        echo base_url();
        if ($path != "") {
            echo $path;
        } else {
            echo "visitor/images/background/user.png";
        }
        ?>" alt="<?php echo $c[0]->voter_name; ?>" class="img-responsive center-block" style="width: 170px;height:160px;padding: 10px" id="pro_voter"/>
     

    <p style="font-size: 12px" class="text-center text-info">Last Access: 
        <?php
        $wh['voter_id'] = $this->session->userdata('voter');
        $time = $this->md->my_select('tbl_voter_registration', $wh);
        if($time[0]->lastlogin!=""){
        $t = date('m/d/y h:i:s', strtotime($time[0]->lastlogin));
        $st = strtotime($t);
        echo date('d-M-y h:i:s', $st);
        }
        else
        {
        echo date('d-M-y h:i:s');
        }
        ?>
    </p>
    <div class="sidepanel">
        <ul>
            <li><i class="fa fa-dashboard"></i> <a href="<?php echo base_url(); ?>Dashboard">Dashboard</a></li>
            <li><i class="fa fa-info-circle"></i> <a href="<?php echo base_url(); ?>Basic-Info">Basic Information</a></li>
            <li><i class="fa fa-photo"></i> <a href="<?php echo base_url(); ?>Id-Proof">Id Proof</a></li>
            <li><i class="fa fa-gear"></i><a href="<?php echo base_url(); ?>Change-Password"> Setting</a></li>
            <li><i class="fa fa-power-off"></i><a href="<?php echo base_url(); ?>Logout"> Logout</a></li>

        </ul>
    </div>
</div>
<div class="col-md-9 my-dash">
    <?php
    if ($c[0]->status == 1) {
        ?>
        <img src="<?php echo base_url(); ?>/visitor/images/check.png" title="Valid Voter" style="cursor: pointer;height: 50px;width:50px;position: absolute;right: -14px;top: -16px;"/>
        <?php
    } else {
        ?>
        <img src="<?php echo base_url(); ?>/visitor/images/cross.png" title="Invalid Voter" style="cursor: pointer;height: 50px;width:50px;position: absolute;right: -14px;top: -16px;"/>
        <?php
    }
    ?>
    <h3 class="head text-primary">Welcome, <?php echo $c[0]->voter_name; ?></h3>
    <div class="pull-left upper-top clearfix">
        <div class="upper-column info-box">
            <div class="icon-box container">
                <div class="row">
                    <div class="" style="float: left" > 
                        <div class=" cir cir1" id="icon">
                            <i class="fa fa-envelope"></i>
                        </div>

                        <div class=" cir cir1" id="icon">
                            <i class="fa fa-phone"></i>
                        </div>
                    </div>
                    <div class="" style="padding: 10px;">
                        <div class="text-capitalize">
                            &nbsp; <?php echo $c[0]->email; ?>
                            <br><br>
                            &nbsp;  +91 <?php
                            $str=$c[0]->phone;
                            echo substr($str,0,3)." ".substr($str,3,3)." ".substr($str,6,4);
                           
                            ?>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                </div>

            </div>


        </div>
    </div>
</div>
