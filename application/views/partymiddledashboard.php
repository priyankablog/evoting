
<div class="col-md-3" style="background: #fff;padding: 10px;">
    <?php
    $c = $this->md->my_query("select * from tbl_party_registration where party_id=" . $this->session->userdata('party'));
//    echo $c[0]->voting_id_proof_path;
    ?>
    <img src="
    <?php
    echo base_url();
    if ($c[0]->p_logo != "") {
        echo $c[0]->p_logo;
    } else {
        echo "visitor/images/background/user.png";
    }
    ?>"alt="<?php echo $c[0]->p_name; ?>" class="img-responsive center-block" style="width: 170px;height:160px;padding: 10px" id="blah"/>
    <p style="font-size: 12px" class="text-center text-info">Last Access: 
        <?php
        $wh['party_id'] = $this->session->userdata('party');
        $time = $this->md->my_select('tbl_party_registration', $wh);
        if($time[0]->lastlogin!="")
        {
        $t = date('m/d/y h:i:s', strtotime($time[0]->lastlogin));
        $st = strtotime($t);
        echo date('d-M-y h:i:s', $st);
        }
        else
        {
            echo date('d-M-y h:i:s');
        }
        ?></p>

    <div class="sidepanel">
        <ul>
            <li><i class="fa fa-dashboard"></i> <a href="<?php echo base_url(); ?>Party-Dashboard">Dashboard</a></li>
            <li><i class="fa fa-info-circle"></i> <a href="<?php echo base_url(); ?>Party-Basic-Info">Basic Information</a></li>

            <li><i class="fa fa-user-plus"></i>
                <a href="<?php echo base_url(); ?>Add-Candidate">Add Candidate</a></li>
            <li><i class="fa fa-user-plus"></i>
                <a href="<?php echo base_url(); ?>Add-Enhanced">Add Enhancement</a></li>

            <li><i class="fa fa-users"></i><a href="<?php echo base_url(); ?>Candidate">All Candidate</a></li>
            <li><i class="fa fa-user"></i><a href="<?php echo base_url(); ?>Unblock-Candidate">Unblock Candidate</a></li>
            <li><i class="fa fa-user-times"></i><a href="<?php echo base_url(); ?>Block-Candidate">Block Candidate</a></li>
            
            <li><i class="fa fa-calendar"></i><a href="<?php echo base_url(); ?>Show-Schedule">Show Schedule</a></li>
            <li><i class="fa fa-comment"></i><a href="<?php echo base_url(); ?>Candidate-Review">Candidate Review</a></li>
            <li><i class="fa fa-gear"></i><a href="<?php echo base_url(); ?>Party-Change-Password">Setting</a></li>
            <li><i class="fa fa-power-off"></i><a href="<?php echo base_url(); ?>Party-Logout"> Logout</a></li>

        </ul>
    </div>
</div>
<div class="col-md-9  my-dash">
    <?php
    if ($c[0]->status == 1) {
        ?>
        <img src="<?php echo base_url(); ?>/visitor/images/check.png" title="Valid Party" style="cursor: pointer;height: 50px;width:50px;position: absolute;right: -14px;top: -16px;"/>
        <?php
    } else {
        ?>
        <img src="<?php echo base_url(); ?>/visitor/images/cross.png" title="Invalid Party" style="cursor: pointer;height: 50px;width:50px;position: absolute;right: -14px;top: -16px;"/>
        <?php
    }
    ?>
    <h3 class="head text-primary">Welcome, <?php echo $c[0]->p_name; ?></h3>
    <div class="pull-left upper-top clearfix">
        <div class="upper-column info-box">
            <div class="icon-box container">
                <div class="row">
                    <div class="" style="float: left" > 
                        <div class=" cir cir1" id="icon">
                            <i class="fa fa-envelope"></i>
                        </div>

                        <div class=" cir cir1" id="icon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="" style="padding: 10px;">
                            <div class="text-capitalize" style="margin-left: -17px;">
                                <?php echo $c[0]->email; ?>
                                <br><br>
                                <?php echo $c[0]->p_chairman_name; ?>
                            </div>

                        </div>


                    </div>

                </div>

            </div>


        </div>
    </div>
</div>
