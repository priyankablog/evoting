<div class="col-md-3 ">
    <?php
    $c = $this->md->my_query("select * from tbl_voter_registration where voter_id=" . $this->session->userdata('voter'));
//    echo $c[0]->voting_id_proof_path;
    ?>
    <img src="
    <?php
    echo base_url();
    if ($c[0]->voting_id_proof_path != "") {
        echo $c[0]->voting_id_proof_path;
    } else {
        echo "visitor/images/background/user.png";
    }
    ?>" alt="" class="img-responsive center-block" style="width: 190px;" id="blah"/>
    <Br/>
    <p style="font-size: 12px" class="text-center text-info">Last Access: 
<?php
$wh['voter_id'] = $this->session->userdata('voter');
$time = $this->md->my_select('tbl_voter_registration', $wh);
$t = date('d/m/y h:i:s', strtotime($time[0]->lastlogin));

echo $t;
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