<?php

class Backend extends CI_Controller {

    public function city() {
        $id = $this->input->post('id');
        $action = $this->input->post('action');
        if ($action == 'city') {
            $wh['parent_id'] = $id;
            $dt = $this->md->my_select('tbl_location', $wh);
            echo "<option value=''>City</option>";
            foreach ($dt as $val) {
                ?>
                <option value="<?php echo $val->l_id; ?>"><?php echo $val->name; ?></option>
                <?php
            }
        }
    }

    public function area() {
        $id = $this->input->post('id');
        $action = $this->input->post('action');
        if ($action == 'area') {
            $wh['parent_id'] = $id;
            $dt = $this->md->my_select('tbl_location', $wh);
            echo "<option value=''>Area</option>";
            foreach ($dt as $val) {
                ?>
                <option value="<?php echo $val->l_id; ?>"><?php echo $val->name; ?></option>
                <?php
            }
        }
    }

    public function act() {
        $id = $this->input->post('id');
        $action = $this->input->post('action');
        if ($action == 'managevoter') {
            $dt = $this->md->my_select('tbl_voter_registration', array("voter_id" => $id))[0]->status;
            if ($dt == 1) {
                $this->md->my_update("tbl_voter_registration", array("status" => 0), array("voter_id" => $id));
                echo "1";
            } else {
                $this->md->my_update("tbl_voter_registration", array("status" => 1), array("voter_id" => $id));
                echo "0";
            }
        }
        if ($action == 'manageparty') {
            $dt = $this->md->my_select('tbl_party_registration', array("party_id" => $id))[0]->status;
            if ($dt == 1) {
                $this->md->my_update("tbl_party_registration", array("status" => 0), array("party_id" => $id));
                echo "1";
            } else {
                $this->md->my_update("tbl_party_registration", array("status" => 1), array("party_id" => $id));
                echo "0";
            }
        }
    }

    public function emailsubscriber() {
        $id = $this->input->post('id');
        $action = $this->input->post('action');
        if ($action == 'emailsubscriber') {

            $q = $this->md->my_query("select es_id from tbl_email_subscriber where email_id = '" . $id . "'");
            if (!isset($q[0]->es_id)) {
                $wh['email_id'] = $id;
                echo $ans = $this->md->my_insert('tbl_email_subscriber', $wh);
            }
        }
    }

    public function newsdata() {
        $id = $this->input->post('id');
        $q = $this->md->my_query("select * from tbl_news where news_id='" . $id . "'");
        
        ?>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                    <h4 class="modal-title" id="myModalLabel"><?php echo $q[0]->name; ?></h4>
                </div>
                <div class="modal-body">
                    <img src="<?php echo $q[0]->news_path; ?>" alt="" style="height: 225px;width:100%;"/>
                </div>
                <div class="modal-body">
                    <?php echo $q[0]->date; ?>
                </div>
                <div class="modal-body">
                    <?php echo $q[0]->news; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
        <?php
    }

    public function candidate() {
       $id = $this->input->post('id');
        $action = $this->input->post('action');
        if ($action == 'candidate') {
// echo $action;
            $data = $this->md->my_query("select p.p_name,p.p_logo ,c.* from tbl_party_registration p ,tbl_candidate_registration c where c.party_id=p.party_id and p.party_id='" . $id . "'");
            $c = $this->md->my_query("select * from tbl_voter_registration where voter_id=" . $this->session->userdata('voter'));
            $q = $this->md->my_query("select * from tbl_location where l_id=" . $c[0]->location_id);
            $q1 = $this->md->my_query("select * from tbl_candidate_registration where party_id='" . $id . "'");
            foreach ($q1 as $val) {
                if ($val->location_id == $c[0]->location_id) {
                    ?>

                    <div class="sec-title">
                        <p style="font-size: 18px;margin-top: -60px;">Selected Candidate <span class="theme_color"> In Your Area</span></p>
                        <span class="separator"></span>
                    </div>
                    <?php
                    echo '<div class="" style="position: absolute; padding-left: 70%; padding-top: 15px;z-index:99;">';
                    echo '<img src=" ';
                    echo base_url() . $data[0]->p_logo;
                    echo '" alt="" class="" style="width: 40px; height:30px;position: relative;">';
                    echo '</div>';
                    echo '<div class="inner-box wow fadeInLeft mybox animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft; border:1px solid #dfdfdf;padding: 20px;height:500px;    background-color: #ffffff;">';
                    echo '<figure class="image-box" style="position: relative; width: 154px;height: 154px;overflow: hidden;border-radius: 50%;margin: 0 auto;margin-bottom: 25px;">';
                    echo '<img src="';
                    echo base_url() . $val->profile_pic;
                    echo '" alt="" class="">';
                    echo '</figure>';
                    echo '<div class="lower-content" style="border:none">';
                    echo '<div class="upper-box">';
                    echo '<div class="sec-title">';
                    echo '<h3 class="" style="text-transform: uppercase;font-size: 18px;font-weight: 500;"><a href="';
                    echo base_url();
                    echo 'Candidate-Info/';
                    echo $val->candidate_id;
                    echo '" target="_new">';
                    echo $val->candidate_name;
                    echo '</a></h3>';
                    echo '<span class="separator"></span>';
                    echo '</div>';
                    echo '<div class="lower-box" style="margin-top:-30px;border:none">';
                    echo '<div class="date"><b>Party</b> : ';
                    echo $data[0]->p_name;
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="lower-box" style="padding: 0px 0px 7px">';
                    echo '<div class="date"><b>Age</b> : ';

                    $dob = explode("-", $data[0]->dob);
                    $age = date('Y') - $dob[2];
                    echo $age;

                    echo '</div>';
                    echo '</div>';
                    echo '<div class="text" style="height:100px;">';
                    $str = $val->description;
                    echo substr($str, 0, 90);
                    echo '</div>';
                    ?>
                    <center>
                        <a class="btn btn-primary" style="background-color: #00b7f1;
                           border-color: #00b7f1;" href="<?php echo base_url(); ?>Cast-Vote/<?php echo $val->candidate_id; ?>">Cast Your Vote</a>
                    </center>


                    <?php
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            }
        }
    }

    public function active() {
        $id = $this->input->post('id');
//echo $id;die();
        $action = $this->input->post('action');

        if ($action == "candidatereview") {
//echo $id;
            $dt = $this->md->my_select('tbl_review', array("review_id" => $id))[0]->status;
//echo $dt;
            if ($dt == 1) {
                $this->md->my_update("tbl_review", array("status" => 0), array("review_id" => $id));
            } else {
                $this->md->my_update("tbl_review", array("status" => 1), array("review_id" => $id));
            }
        }
    }

    public function block() {
        $id = $this->input->post('id');

        $action = $this->input->post('action');
        $this->md->my_update("tbl_candidate_registration", array("status" => 0), array("candidate_id" => $id));
        $dt = $this->md->my_query("select status from tbl_candidate_registration where candidate_id =" . $id)[0]->status;
        ?>
        <?php
        $q1 = $this->md->my_query("select * from tbl_party_registration where party_id='" . $this->session->userdata('party') . "'");
        $q = $this->md->my_query("select * from tbl_candidate_registration where party_id='" . $this->session->userdata('party') . "' and status=1");
        if(!empty($q)){
        if ($q[0]->candidate_id != "") {
            foreach ($q as $query) {
                ?>
                <div class="box col-md-4 col-sm-4 col-xs-12" style="padding-top:30px;">
                    <div class="inner-box wow fadeInLeft mybox animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft; border:1px solid #dfdfdf;padding: 20px;height:550px;background-color: #ffffff;">
                        <figure class="image-box" style="position: relative; width: 154px;height: 154px;overflow: hidden;border-radius: 50%;margin: 0 auto;margin-bottom: 25px;">

                            <a href="<?php echo base_url(); ?>Candidate-Info/<?php echo $query->candidate_id; ?>">
                                <img src="<?php echo base_url() . $query->profile_pic; ?>" alt="" class="center-block"></a>

                        </figure>
                        <div class="lower-content" style="border:none">
                            <div class="upper-box">
                                <h3 class="myhead" style="margin-bottom: 1px;text-align:left;"><a href="<?php echo base_url(); ?>Candidate-Info/<?php echo $query->candidate_id; ?>"><?php echo $query->candidate_name; ?></a></h3>
                                <div class="lower-box" style="padding: 11px 0px 0px;border:none">
                                    <div class="date"><b>Party</b> : <?php echo $q1[0]->p_name; ?></div>
                                </div>
                                <div class="lower-box" style="padding: 0px 0px 7px">
                                    <div class="date"><b>Age</b> :
                                        <?php
                                        $dob = explode("-", $query->dob);
                                        $age = date('Y') - $dob[2];
                                        echo $age;
                                        ?>
                                    </div>
                                </div>
                                <div class="text" style="height:140px;"><?php
                                    $str = $query->description;
                                    echo substr($str, 0, 120) . "...";
                                    ?></div>
                                <div class="col-md-12">

                                    <a class="btn btn-primary" style="background-color: #00b7f1;border-color: #00b7f1;" href="<?php echo base_url(); ?>Edit-Candidate/<?php echo $query->candidate_id; ?>">Edit</a>
                                    <a class="btn btn-primary" target="_new" style="background-color: #00b7f1;border-color: #00b7f1;" href="<?php echo base_url(); ?>Candidate-Info/<?php echo $query->candidate_id; ?>">Read More</a>

                                </div>
                                <div class="col-md-12" style="margin-top: 5px;">
                                    <?php
                                    if ($query->status == 0) {
                                        ?>

                                        <a class="btn btn-danger unbl" style="width: 53%;" id="<?php echo $query->candidate_id; ?>" onclick="block(this.id, 'candidateblock');">Unblock Candidate</a>

                                        <?php
                                    } else {
                                        ?>

                                        <a class="btn btn-danger bl" style="width: 53%;" id="<?php echo $query->candidate_id; ?>" onclick="block(this.id, 'candidateblock');">Block Candidate</a>


                                        <?php
                                    }
                                    ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <?php
            }
        } else {
            ?>
            <div class="text">
                <p>Candidate Not Available</p>
            </div>
            <?php
        }
        }else{
            ?>
            <div class="text">
                <p>Candidate Not Available</p>
            </div>
            <?php
        }
        ?>
        <?php
    }

    public function unblock() {
        $id = $this->input->post('id');

        $action = $this->input->post('action');
        $this->md->my_update("tbl_candidate_registration", array("status" => 1), array("candidate_id" => $id));
        $dt = $this->md->my_query("select status from tbl_candidate_registration where candidate_id =" . $id)[0]->status;
        ?>
        <?php
        $q1 = $this->md->my_query("select * from tbl_party_registration where party_id='" . $this->session->userdata('party') . "'");
        $q = $this->md->my_query("select * from tbl_candidate_registration where party_id='" . $this->session->userdata('party') . "' and status=0");
         if(!empty($q)){
        if ($q[0]->candidate_id != "") {
            foreach ($q as $query) {
                ?>
                <div class="box col-md-4 col-sm-4 col-xs-12" style="padding-top:30px;">
                    <div class="inner-box wow fadeInLeft mybox animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft; border:1px solid #dfdfdf;padding: 20px;height:550px;background-color: #ffffff;">
                        <figure class="image-box" style="position: relative; width: 154px;height: 154px;overflow: hidden;border-radius: 50%;margin: 0 auto;margin-bottom: 25px;">

                            <a href="<?php echo base_url(); ?>Candidate-Info/<?php echo $query->candidate_id; ?>">
                                <img src="<?php echo base_url() . $query->profile_pic; ?>" alt="" class="center-block"></a>

                        </figure>
                        <div class="lower-content" style="border:none">
                            <div class="upper-box">
                                <h3 class="myhead" style="margin-bottom: 1px;text-align:left;"><a href="<?php echo base_url(); ?>Candidate-Info/<?php echo $query->candidate_id; ?>"><?php echo $query->candidate_name; ?></a></h3>
                                <div class="lower-box" style="padding: 11px 0px 0px;border:none">
                                    <div class="date"><b>Party</b> : <?php echo $q1[0]->p_name; ?></div>
                                </div>
                                <div class="lower-box" style="padding: 0px 0px 7px">
                                    <div class="date"><b>Age</b> :
                                        <?php
                                        $dob = explode("-", $query->dob);
                                        $age = date('Y') - $dob[2];
                                        echo $age;
                                        ?>
                                    </div>
                                </div>
                                <div class="text" style="height:140px;"><?php
                                    $str = $query->description;
                                    echo substr($str, 0, 120) . "...";
                                    ?></div>
                                <div class="col-md-12">

                                    <a class="btn btn-primary" style="background-color: #00b7f1;border-color: #00b7f1;" href="<?php echo base_url(); ?>Edit-Candidate/<?php echo $query->candidate_id; ?>">Edit</a>
                                    <a class="btn btn-primary" target="_new" style="background-color: #00b7f1;border-color: #00b7f1;" href="<?php echo base_url(); ?>Candidate-Info/<?php echo $query->candidate_id; ?>">Read More</a>

                                </div>
                                <div class="col-md-12" style="margin-top: 5px;">
                                    <?php
                                    if ($query->status == 0) {
                                        ?>

                                        <a class="btn btn-danger unbl" style="width: 53%;" id="<?php echo $query->candidate_id; ?>" onclick="unblock(this.id, 'candidateblock');">Unblock Candidate</a>

                                        <?php
                                    } else {
                                        ?>

                                        <a class="btn btn-danger bl" style="width: 53%;" id="<?php echo $query->candidate_id; ?>" onclick="unblock(this.id, 'candidateblock');">Block Candidate</a>


                                        <?php
                                    }
                                    ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <?php
            }
        } else {
            ?>
            <div class="text">
                <p>Candidate Not Available</p>
            </div>
            <?php
        }
         }else
         {
            ?>
            <div class="text">
                <p>Candidate Not Available</p>
            </div>
            <?php
         }
        ?>
        <?php
    }

    public function ublock() {
        $id = $this->input->post('id');
        // echo "dfbdui";
        $action = $this->input->post('action');

        if ($action == "candidateblock") {

            $dt = $this->md->my_query("select status from tbl_candidate_registration where candidate_id =" . $id)[0]->status;

            if ($dt == 1) {

                $this->md->my_update("tbl_candidate_registration", array("status" => 0), array("candidate_id" => $id));
            } else {
                $this->md->my_update("tbl_candidate_registration", array("status" => 1), array("candidate_id" => $id));
            }
        }
    }

    public function setcandidate() {

        $id = $this->input->post('id');

        $action = $this->input->post('action');

        if ($action == 'setcandidate') {

            $data = $this->md->my_query("select p.p_name,p.p_logo ,c.* from tbl_party_registration p ,tbl_candidate_registration c where c.party_id=p.party_id and c.status=1 and p.party_id='" . $id . "'");
            ?>

            <?php
            foreach ($data as $query) {
                ?>

                <div class="box col-md-4 col-sm-4 col-xs-12" style="padding-top: 30px;">

                    <div class="col-md-offset-1" style="position: absolute; padding-left: 70%; padding-top: 15px;z-index: 99;">
                        <img src="<?php echo base_url($query->p_logo); ?>" alt="<?php $query->p_name; ?>" class="" style="width: 40px; height:30px;position: relative;">    
                    </div>

                    <div class="inner-box wow fadeInLeft mybox animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft; border:1px solid #dfdfdf;padding: 20px;height:480px;background-color: #ffffff;">

                        <figure class="image-box" style="position: relative; height: 160px;width:160px;overflow: hidden;border-radius: 50%;margin: 0 auto;margin-bottom: 25px;">
                            <img src="<?php echo base_url() . $query->profile_pic; ?>" alt="" class="">
                        </figure>
                        <div class="lower-content" style="border:none">
                            <div class="upper-box">
                                <h3 class="" style="text-transform: uppercase;"><a href="<?php echo base_url(); ?>Candidate-Info/<?php echo $query->candidate_id; ?>"><?php echo $query->candidate_name; ?></a></h3>
                                <div class="lower-box" style="padding: 11px 0px 0px;border:none">
                                    <div class="date"><b>Party</b> :<?php echo $query->p_name; ?></div>

                                </div>
                                <div class="lower-box" style="padding: 0px 0px 7px">
                                    <div class="date"><b>Age</b> :
                                        <?php
                                        $dob = explode("-", $query->dob);
                                        $age = date('Y') - $dob[2];
                                        echo $age;
                                        ?>
                                    </div>
                                </div>
                                <div class="text" style="height:90px;"><?php
                                    $str = $query->description;
                                    echo substr($str, 0, 120);
                                    ?></div>
                                <div class="col-lg-offset-8">

                                    <a class="btn btn-primary" style="background-color: #00b7f1;border-color: #00b7f1;" href="<?php echo base_url(); ?>Candidate-Info/<?php echo $query->candidate_id; ?>" target="_new !important">Read More</a>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <?php
            }
        }
    }

    public function schedule() {
        $id = $this->input->post('id');
        $action = $this->input->post('action');
        if ($action == 'schedule') {
            $this->session->set_userdata('schedule', $id);
        }
    }
    

    public function finalresult() {
        $id = $this->input->post('id');
        ?>
        <div class="modal-dialog"  role="document">
            <div class="modal-content" style="background: #eee">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"> Final Result</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-2"><b>Logo</b></div> 
                        <div class="col-md-5"><b>Party Name</b></div> 
                        <div class="col-md-5"><b>Vote</b></div> 
                    </div>
                    <?php
                    $sc = $this->md->my_query("select distinct candidate_id from tbl_voting where s_id = " . $id);
                    foreach ($sc as $sc_data) {
                        $can = $this->md->my_query("select * from tbl_party_registration where party_id in ( select party_id from tbl_candidate_registration where candidate_id =" . $sc_data->candidate_id . ")")[0];
                        ?>
                        <div class="row" style="margin-bottom: 8px;">
                            <div class="col-md-2">
                                <img src="<?php echo base_url($can->p_logo); ?>" width="40px" height="40px" />
                            </div>
                            <div class="col-md-5">
                                <?php echo $can->p_name; ?>
                            </div>

                            <div class="col-md-5"></div>

                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
        <?php
    }

}
