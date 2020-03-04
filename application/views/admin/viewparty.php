<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->



    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8"/>
        <title>My Govrn Admin | Manage-Party Page</title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <?php
        $this->load->view('admin/link');
        ?>
        <script src="<?php echo base_url();?>admin/plugins/pace/pace.min.js"></script>

    </head>
    <body class="pace-top">
         <?php
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        ?>
        <div id="content" class="content" style="margin-top: 60px;">

           
            <div class="row">
                <!-- begin col-2 -->
                <!-- begin col-10 -->
                <div class="col-md-12">
                    <!-- begin pane -->
                    <div class="panel panel-inverse">
                        
                        
                            <div class="auto-container">
             <?php
                $q = $this->md->my_query("select * from tbl_party_registration where party_id='".$this->uri->segment(2)."'");
                foreach ($q as $query)
                {
                ?>
                
            <div class="row">
                
                <div class="col-md-6">
                 <h3 class="myhead" style="font-size: 20px;"><?php echo $query->p_name;?></h3>
                </div>
            </div>
            <div class="row" style="">
                <section class="project-single-section">
                    <div class="auto-container">
                        <!--Inner Container-->
                        <div class="inner-container">
                        <div class="lower-container">
                        <div class="row clearfix">
                                    
<div class="column col-md-6 col-sm-12 col-xs-12">
                                        
                                        <div class="form-group default-form" style="padding-top: 20px;">
                        
                                            <div class="group-inner">
                                                <div class="text"><b>Party Name : </b><?php echo $query->p_name;?></div>
                                                
                                            </div>
                                            <div class="group-inner" style="padding-top: 20px;">
                                                <div class="text"><b>Email : </b><?php echo $query->email;?></div>
                                            </div>
                                            <div class="group-inner" style="padding-top: 20px;" >
                                                <div class="text"><b>Since : </b><?php echo $query->since;?></div>
                                            </div>
                                            <div class="group-inner" style="padding-top: 20px;">
                                                <div class="text"><b>Slogan : </b><?php echo $query->slogan;?>
                                                </div>
                                            </div>
                                           <div class="group-inner" style="padding-top: 20px;">
                                                <div class="text"><b>Party Chairman Name : </b><?php echo $query->p_chairman_name;?></div>
                                                
                                            </div>
                                        </div>
                                    </div>
<div class="column col-md-6 col-sm-12 col-xs-12">
     <div class="form-group default-form">
         <img src="<?php echo base_url();echo $query->p_logo; ?>" class="center-block"  style="width:50%; height:200px;"/>
     </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="row" style="">
                <section class="project-single-section">
                    <div class="auto-container">
                        <!--Inner Container-->
                        <div class="inner-container">
                        <div class="lower-container">
                        <div class="row clearfix">
                                    
<div class="column col-md-6 col-sm-12 col-xs-12">
                                        
                                        <div class="form-group default-form" style="">
                        
                                            
                                            <div class="group-inner" style="margin-top: -20px;">
                                                <div class="text" style="text-align: justify;padding-top: 20px;"><b>Description:</b><?php echo $query->description;?></div>
                                            </div>
                                            <div class="group-inner">
                                                <div class="text" style="padding-top: 20px;"><b>President : </b><?php echo $query->president;?></div>
                                            </div>
                                            <div class="group-inner">
                                                <div class="text" style="padding-top: 20px;"><b>Parliamentary Chairman Person : </b><p style="display: inline;" class="<?php if($query->parliamentary_chairperson == ""){echo "err_message";}?>"><?php if($query->parliamentary_chairperson == ""){echo "Data Not Found";}else{echo $query->parliamentary_chairperson;}?></p>
                                                </div>
                                            </div>
                                            <div class="group-inner">
                                                <div class="text" style="padding-top: 20px;"><b>Lok Sabha Leader : </b><p style="display: inline;" class="<?php if($query->lok_sabha_leader == ""){echo "err_message";}?>"><?php if($query->lok_sabha_leader == ""){echo "Data Not Found";}else{echo $query->lok_sabha_leader;}?></p></div>
                                                
                                            </div>
                                            <div class="group-inner">
                                                <div class="text" style="padding-top: 20px;"><b>International Affiliation : </b><p style="display: inline;" class="<?php if($query->international_affiliation == ""){echo "err_message";}?>"><?php if($query->international_affiliation == ""){echo "Data Not Found";}else{echo $query->international_affiliation;}?></p>
                                                </div>
                                            </div>
                                            <div class="group-inner">
                                                <div class="text" style="padding-top: 20px;"><b>Colours : </b><?php echo $query->colours;?>
                                                </div>
                                            </div>
                                            <div class="group-inner">
                                                <div class="text" style="padding-top: 20px;"><b>Seats In Lok Sabha : </b><p style="display: inline;" class="<?php if($query->seats_in_lok_sabha == ""){echo "err_message";}?>"><?php if($query->seats_in_lok_sabha == ""){echo "Data Not Found";}else{echo $query->seats_in_lok_sabha;}?></p>                                                </div>
                                            </div>
                                            <div class="group-inner">
                                                <div class="text" style="padding-top: 20px;"><b>Seats In Rajya Sabha : </b><p style="display: inline;" class="<?php if($query->seats_in_rajya_sabha == ""){echo "err_message";}?>"><?php if($query->seats_in_rajya_sabha == ""){echo "Data Not Found";}else{echo $query->seats_in_rajya_sabha;}?></p>
                                                </div>
                                        </div>
                                    </div>
</div>
<div class="column col-md-6 col-sm-12 col-xs-12">
    <div class="group-inner">
                                                <div class="text" style="padding-top: 20px;"><b>Rajya Sabha Leader : </b><p style="display: inline;" class="<?php if($query->lok_sabha_leader == ""){echo "err_message";}?>"><?php if($query->rajya_sabha_leader == ""){echo "Data Not Found";}else{echo $query->rajya_sabha_leader;}?></p></div>
                                                
                                            </div>
                                            <div class="group-inner">
                                                <div class="text" style="padding-top: 20px;"><b>Head Quarters : </b><p style="display: inline;" class="<?php if($query->headquarters == ""){echo "err_message";}?>"><?php if($query->headquarters == ""){echo "Data Not Found";}else{echo $query->headquarters;}?></p></div>
                                            </div>
                                            <div class="group-inner">
                                                <div class="text" style="padding-top: 20px;"><b>Newspaper : </b><p style="display: inline;" class="<?php if($query->newspaper == ""){echo "err_message";}?>"><?php if($query->newspaper == ""){echo "Data Not Found";}else{echo $query->newspaper;}?></p></div>
                                            </div>
                                            <div class="group-inner">
                                                <div class="text" style="padding-top: 20px;"><b>Youth Wing : </b><p style="display: inline;" class="<?php if($query->youth_wing  == ""){echo "err_message";}?>"><?php if($query->youth_wing == ""){echo "Data Not Found";}else{echo $query->youth_wing;}?></p>
                                                </div>
                                            </div>
                                            <div class="group-inner">
                                                <div class="text" style="padding-top: 20px;"><b>Women Wing : </b><p style="display: inline;" class="<?php if($query->women_wing == ""){echo "err_message";}?>"><?php if($query->women_wing == ""){echo "Data Not Found";}else{echo $query->women_wing;}?></p></div>
                                            </div>
                                            <div class="group-inner">
                                                <div class="text" style="padding-top: 20px;"><b>Minority Wing : </b><p style="display: inline;" class="<?php if($query->minority_wing == ""){echo "err_message";}?>"><?php if($query->minority_wing == ""){echo "Data Not Found";}else{echo $query->minority_wing;}?></p>
                                                </div>
                                            </div>
                                            <div class="group-inner">
                                                <div class="text" style="padding-top: 20px;"><b>Membership : </b><p style="display: inline;" class="<?php if($query->membership == ""){echo "err_message";}?>"><?php if($query->membership == ""){echo "Data Not Found";}else{echo $query->membership;}?></p></div>
                                            </div>
                                            <div class="group-inner">
                                                <div class="text" style="padding-top: 20px;"><b>Ideology : </b><p style="display: inline;" class="<?php if($query->ideology == ""){echo "err_message";}?>"><?php if($query->ideology == ""){echo "Data Not Found";}else{echo $query->ideology;}?></p>
                                                </div>
                                            </div>
                                            <div class="group-inner">
                                                <div class="text" style="padding-top: 20px;"><b>Political Position : </b><p style="display: inline;" class="<?php if($query->political_position == ""){echo "err_message";}?>"><?php if($query->political_position == ""){echo "Data Not Found";}else{echo $query->political_position;}?></p></div>
                                            </div>
                                            <div class="group-inner">
                                                <div class="text" style="padding-top: 20px;"><b>ECI Status : </b><p style="display: inline;" class="<?php if($query->eci_status == ""){echo "err_message";}?>"><?php if($query->eci_status == ""){echo "Data Not Found";}else{echo $query->eci_status;}?></p></div>
                                            </div>
                                            <div class="group-inner">
                                                <div class="text" style="padding-top: 20px;"><b>Alliance : </b><p style="display: inline;" class="<?php if($query->alliance == ""){echo "err_message";}?>"><?php if($query->alliance == ""){echo "Data Not Found";}else{echo $query->alliance;}?></p></div>
                                            </div>
    
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                  
            </div>
            <?php
            }
            ?>
        </div>
                      
                    </div>
                    <!-- end panel -->
                </div>




            </div>
        </div>
        <!-- end page container -->


    </body>
    <style type="text/css">
        .myhead {
	font-size: 16px;
	font-weight: 600;
	text-transform: uppercase;
	padding-bottom: 14px;
	color: #000;
	margin-bottom: 20px;
}
        </style>
    <?php
    $this->load->view('admin/script');
    ?>
</html>