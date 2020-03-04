<style type="text/css">
    .active a{
        color: #00b7f1 !important;
    }
</style>
<div class="header-bottom">
    <div class="auto-container">
        <div class="clearfix">

            <?php
            $toppage = '';
            ?>

            <div class="nav-outer clearfix">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-header">
                        <!-- Toggle Button -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <?php
                            if ($toppage == "index") {
                                ?>
                                <li class="active"><a href="<?php echo base_url(); ?>Home">Home</a></li>
                                <?php
                            } else {
                                ?>
                                <li class=""><a href="<?php echo base_url(); ?>Home">Home</a></li>
                                <?php
                            }
                            ?>

                            <?php
                            if ($toppage == "aboutus") {
                                ?>
                                <li class="active"><a href="<?php echo base_url(); ?>About-Us">About Us</a></li>
                                <?php
                            } else {
                                ?>
                                <li class=""><a href="<?php echo base_url(); ?>About-Us">About Us</a></li>
                                <?php
                            }
                            ?>
                            <?php
                            if ($toppage == "news") {
                                ?>
                                <li class="active"><a href="<?php echo base_url(); ?>News">News</a></li>
                                <?php
                            } else {
                                ?>

                                <li class=""><a href="<?php echo base_url(); ?>News">News</a></li>
                                <?php
                            }
                            ?>
                            <?php
                            if ($toppage == "party") {
                                ?>  
                                <li class="active"><a href="<?php echo base_url(); ?>Party">Party</a></li>
                                <?php
                            } else {
                                ?>
                                <li class=""><a href="<?php echo base_url(); ?>Party">Party</a></li>
                                <?php
                            }
                            ?>
                            <?php
                            if ($toppage == "candidatedata") {
                                ?>  
                                <li class="active"><a href="<?php echo base_url(); ?>CandidateInfo">Candidate</a></li>
                                <?php
                            } else {
                                ?>
                                <li class=""><a href="<?php echo base_url(); ?>CandidateInfo">Candidate</a></li>
                                <?php
                            }
                            ?>
                            <?php
                            if ($toppage == "election") {
                                ?>  
                                <li class="active"><a href="<?php echo base_url(); ?>Election">Election</a></li>
                                <?php
                            } else {
                                ?>
                                <li class=""><a href="<?php echo base_url(); ?>Election">Election</a></li>
                                <?php
                            }
                            ?>
                            <?php
                            if ($this->session->userdata('value') == "2") {
                                ?><?php
                                if ($this->session->userdata('type') == 'party') {
                                    ?>
                                    <li class=""><a href="<?php echo base_url(); ?>Party-Dashboard">Hey, <?php
                                            $c = $this->md->my_query("select * from tbl_party_registration where party_id=" . $this->session->userdata('party'));
                                            $str = explode(' ', $c[0]->p_name);
                                            echo $str[0];
                                            ?></a>  </li>
                                    <?php
                                } else if ($this->session->userdata('type') == 'voter') {
                                    ?>
                                    <li class=""> <a href="<?php echo base_url(); ?>Dashboard">Hey, <?php
                                            $c = $this->md->my_query("select * from tbl_voter_registration where voter_id=" . $this->session->userdata('voter'));
                                            $str = explode(' ', $c[0]->voter_name);
                                            echo $str[0];
                                            ?></a>  </li>
                                    <?php
                                }
                                else if ($this->session->userdata('voter') != "") {
                                    ?>
                                    <li class=""> <a href="<?php echo base_url(); ?>Dashboard">Hey, <?php
                                            $c = $this->md->my_query("select * from tbl_voter_registration where voter_id=" . $this->session->userdata('voter'));
                                            $str = explode(' ', $c[0]->voter_name);
                                            echo $str[0];
                                            ?></a>  </li>
                                    <?php
                                }
                                else if ($this->session->userdata('party') != "") {
                                    ?>
                                    <li class=""> <a href="<?php echo base_url(); ?>Party-Dashboard">Hey, <?php
                                            $c = $this->md->my_query("select * from tbl_party_registration where party_id=" . $this->session->userdata('party'));
                                            echo $c[0]->p_name;
                                            ?></a>  </li>
                                    <?php
                                }
                                ?>  <?php
                            } else {
                                ?>
                                <?php
                                if ($toppage == "partyprofile") {
                                    ?>  
                                    <li class="active"><a href="<?php echo base_url(); ?>Add-Party">Add Party</a></li>
                                    <?php
                                } else {
                                    ?>
                                    <li class=""><a href="<?php echo base_url(); ?>Add-Party">Add Party</a></li>
                                    <?php
                                }
                                ?>
                                <?php
                                if ($toppage == "login") {
                                    ?>  
                                    <li class="active"><a href="<?php echo base_url(); ?>Login">Login</a></li>
                                    <?php
                                } else {
                                    ?>
                                    <li class=""><a href="<?php echo base_url(); ?>Login">Login</a></li>
                                    <?php
                                }
                                ?>

                                <?php
                            }
                            ?>
                            <li style="padding-top: 15px">
                                <div id="google_translate_element"></div><script type="text/javascript">
                                    function googleTranslateElementInit() {
                                        new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,gu,hi,kn,ml,mr,ta,te', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                                    }
                                </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
        </div>
    </div>
</div>