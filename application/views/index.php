<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title>My Govrn</title>
        <?php
        $this->load->view('headlink');
        ?>
        <!-- Stylesheets -->

        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


    </head>

    <body>
        <div class="page-wrapper">

            <!-- Preloader -->
 
            <!-- Main Header / Header Style Two -->
            <header class="main-header header-style-two">
                <?php
                $this->load->view('header');
                ?>

                <?php
                $this->load->view('middleheader');
                ?>
                <?php
                $this->load->view('menu');
                ?>


                <div class="menu-overlay"></div>

                <div class="side-content" id="scrollbar">
                    <div class="side-content-info">
                        <div class="menu-toggle-hamburger menu-close"><span class="flaticon-cancel"> </span></div>
                        <div class="side-logo">
                            <div class="text-center"><img class="img-responsive mb-30" src="<?php echo base_url(); ?>visitor/images/logo1.png" alt=""></div>
                            <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy. Sit aut explicabo mollitia, sed, eos, magni quos laborum dolores ab distinctio voluptates quae ipsam.</p>
                            <hr class="mar-bottom-30" />
                        </div>
                        <div class="contact-address">
                            <div class="address-title mar-bottom-30">
                                <h4 class="mb-15">Office 01</h4>
                                <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
                            </div>
                            <div class="contact-box mar-bottom-20">

                                <div class="contact-info">
                                    <div class="text-left">
                                        <h6>25, King St. 20170</h6>
                                        <span>Melbourne Australia</span>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-box mar-bottom-20">

                                <div class="contact-info">
                                    <div class="text-left">
                                        <h6>0011 234 56789</h6>
                                        <span>Mon-Fri 8:30am-6:30pm</span>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-box mar-bottom-20">

                                <div class="contact-info">
                                    <div class="text-left">
                                        <h6>info@yoursite.com</h6>
                                        <span>24 X 7 online support</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="social-icons theme-color mar-top-20 clearfix">
                            <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                </div>

                <!--Sticky Header-->
                <div class="sticky-header">
                    <div class="auto-container clearfix">
                        <!--Right Col-->
                        <div class="right-col pull-right">
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


                            </nav><!-- Main Menu End-->
                        </div>

                    </div>
                </div>
                <!--End Sticky Header-->

            </header>
            <!--End Main Header -->

            <!--Main Slider-->
            <section class="main-slider" data-start-height="700" data-slide-overlay="yes">
                <?php
                $this->load->view('banner');
                ?>
            </section>
            <!--End Main Slider-->

            <section class="white">
                <div class="container">
                    <div class="sec-title" style="padding-top: 50px;">
                        <h3 style="line-height: 2.6em;">Our Voting  <span class="theme_color">Services</span></h3>
                        <span class="separator"></span>
                    </div>
                    <div class="row home-band">

                        <div class="col-xs-12 col-sm-4 point">
                            <div class="point-img blue"><img src="<?php echo base_url(); ?>visitor/images/election.png" alt="Online Elections"></div>
                            <h3>Online Elections</h3>
                            <p>MyGovrn sends an email to each voter with a secure voting link (or you can send emails yourself) and only authorized voters can vote.</p>
                        </div>
                        <div class="col-xs-12 col-sm-4 point">
                            <div class="point-img blue"><img src="<?php echo base_url(); ?>visitor/images/poll.png" alt="Online Polls"></div>
                            <h3>Online Polls</h3>
                            <p>Anyone can vote using your personalized voting web page that you publicize using your website, email, or social media.</p>
                        </div>
                        <div class="col-xs-12 col-sm-4 point">
                            <div class="point-img blue"><img src="<?php echo base_url(); ?>visitor/images/count.png" alt="Count Ranked Ballots"></div>
                            <h3>Count Ranked Ballots</h3>
                            <p>Count ranked ballots that you have already collected (e.g., paper ballots or your own vote collection software.)</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- services -->
            <section class="services-section gray_bg" style="padding-top: 50px;margin-top: 50px;">
                <div class="auto-container">

                    <!--Services Box-->
                    <div class="services-box">
                        <div class="row clearfix">


                            <div class="container">

                                <div class="sec-title">
                                    <h3 style="line-height: 2.6em;">Secure and  <span class="theme_color">Trustworthy</span></h3>
                                    <span class="separator"></span>
                                </div>

                                <div class="points row">

                                    <div class="col-xs-12 col-sm-4 point">
                                        <div class="point-img white"><img src="<?php echo base_url(); ?>visitor/images/locked.png" alt="Secure"></div>
                                        <h3 class="heading">Secure</h3>
                                        <p class="font">Voting pages are encrypted for your security. View the demonstration poll and see the lock icon to the left of the address bar.</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 point">
                                        <div class="point-img white"><img src="<?php echo base_url(); ?>visitor/images/shake-hands.png" alt="Reliable"></div>
                                        <h3 class="heading">Reliable</h3>
                                        <p class="font">MyGovrn runs on Google servers for maximum reliability and scalability. Use the same infrastructure that powers Google search.</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 point">
                                        <div class="point-img white"><img src="<?php echo base_url(); ?>visitor/images/private.png" alt="Private"></div>
                                        <h3 class="heading">Private</h3>
                                        <p class="font">Voter email addresses are not shared and not used for any purposes outside of the election. See our privacy policy for more details.</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </section>

            <!--Two Default Section-->
            <section class="default-section-two">
                <div class="auto-container">
                    <div class="sec-title">
                        <h3 style="line-height: 2.6em;">About <span class="theme_color">Us</span></h3>
                        <span class="separator"></span>
                    </div>

                    <div class="row clearfix">

                        <div class="about-column column col-md-6 col-sm-12 col-xs-12">
                            <div class="inner">


                                <div class="image-box"><img src="<?php echo base_url(); ?>visitor/images/ab.jpg" alt=""></div>
                                <div class="row clearfix">
                                    <!--Text Column-->
                                    <div class="text-column col-md-6 col-sm-6 col-xs-12">
                                        <h3>Who We Are?</h3>

                                        <div class="text">MyGovrn was founded by Our Team. MyGovrn passion for helping people vote the right way motivated him to start writing to found MyGovrn in 2018.

                                        </div>
                                        <div class="btn-box"><a href="<?php echo base_url(); ?>About-Us" class="theme-btn btn-style-one">Learn More</a></div>
                                    </div>
                                    <!--Text Column-->
                                    <div class="text-column col-md-6 col-sm-6 col-xs-12">
                                        <h3>Our Mission</h3>
                                        <div class="text">Provide the best possible experience for both voters and election managers. Getting voters to vote is challenging so we provide a clean and simple user interface for voters.</div>

                                    </div>
                                </div>
                            </div>
                        </div>            
                        <!--Accordion Column-->
                        <div class="accordion-block column col-lg-6 col-md-12 col-sm-12">

                            <!--Accordion Box-->
                            <ul class="accordion-box">

                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span> <span class="icon icon-minus fa fa-angle-up"></span></div>How much time does it take to get a voter ID card?</div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <p>It usually takes 6-8 weeks for the state to send out your voter card. If 8 weeks have passed and you haven't received your card, you probably are not registered and should call your state to make sure your registration went through properly. </p>
                                        </div>
                                    </div>
                                </li>

                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span> <span class="icon icon-minus fa fa-angle-up"></span></div>What is a proxy vote?</div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <p>A proxy vote is a ballot cast by one person on behalf of a shareholder of a corporation who would rather cast a proxy vote than attend a shareholder meeting. ... Registered investment management companies may also cast proxy votes for the securities in their portfolios, such as on behalf of mutual fund shareholders.</p>
                                        </div>
                                    </div>
                                </li>

                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span> <span class="icon icon-minus fa fa-angle-up"></span></div>What is an electoral roll in India?</div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <p> According to Section 19 of the R. P. Act, 1950, only a person who is ordinarily resident in a constituency is entitled to be registered in the electoral roll of that constituency.</p>
                                        </div>
                                    </div>
                                </li>

                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span> <span class="icon icon-minus fa fa-angle-up"></span></div>Can a non resident Indian citizen become a voter?</div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <p>Yes,according to the provisions of the Representation of the People (Amendment)Act,2010,a person who is a citizen of India and who has not acquired the citizenship of any other country and is otherwise eligible to be registered as a voter and who is absenting from his place of ordinary residence in India owing to his employment,education or otherwise is eligible to be registered as a voter in the constituency in which his place of residence in India as mentioned in his passport is located.</p>
                                        </div>
                                    </div>
                                </li>


                            </ul>
                            <!--End Accordion Box-->

                        </div>


                    </div>

                </div>
            </section>
            <!--End Two Default Section-->

            <!--Fun Facts Section-->
            <div class="fact-counter-column" data-parallax="scroll" data-image-src="<?php echo base_url(); ?>visitor/images/background/2.jpg">
                <div class="auto-container">
                    <div class="fact-counter">
                        <div class="row clearfix">

                            <!--Column-->
                            <div class="column counter-column wow fadeIn col-md-3 col-sm-6 col-xs-12">
                                <div class="inner">
                                    <div class="icon-box"><i class="flaticon-user"></i></div>
                                    <div class="count-outer">
                                        <span class="count-text"><?php echo $voter[0]->count; ?></span>
                                    </div>
                                    <h4 class="counter-title">Voter</h4>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column wow fadeIn col-md-3 col-sm-6 col-xs-12">
                                <div class="inner">
                                    <div class="icon-box"><i class="flaticon-target"></i></div>
                                    <div class="count-outer">
                                        <span class="count-text"><?php echo $party[0]->count; ?></span>
                                    </div>
                                    <h4 class="counter-title">Party</h4>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column wow fadeIn col-md-3 col-sm-6 col-xs-12">
                                <div class="inner">
                                    <div class="icon-box"><i class="fa fa-user"></i></div>
                                    <div class="count-outer">
                                        <span class="count-text"><?php echo $candidate[0]->count; ?></span>
                                    </div>
                                    <h4 class="counter-title">Candidate</h4>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column wow fadeIn col-md-3 col-sm-6 col-xs-12">
                                <div class="inner">
                                    <div class="icon-box"><i class="flaticon-competition"></i></div>
                                    <div class="count-outer">
                                        <span class="count-text"><?php echo $election[0]->count; ?></span>
                                    </div>
                                    <h4 class="counter-title">Election</h4>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <section class="team-section">
                <div class="auto-container">
                    <div class="sec-title">
                        <h3 style="line-height: 2.6em;margin-top: 30px;">Meet All <span class="theme_color">Candidate</span></h3>
                        <span class="separator"></span>
                    </div>


                    <div class="three-item-carousel owl-theme owl-carousel owl-loaded owl-nav-none owl-dots-none">
                        <?php
                        $q = $this->md->my_query("select * from tbl_candidate_registration");
                        $q1 = $this->md->my_query("select * from tbl_party_registration where party_id='" . $q[0]->party_id . "'");
                        $data = $this->md->my_query("select p.p_name ,c.* from tbl_party_registration p ,tbl_candidate_registration c where c.party_id=p.party_id and c.status=1");
                        foreach ($data as $query) {
                            ?>
                            <div class="team-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <img src="<?php echo base_url() . $query->profile_pic; ?>" style="height: 160px;width:160px;" alt="<?php echo $query->candidate_name; ?>" >
                                    </div>
                                    <h3 style="text-transform: uppercase;">
                                        <a href="<?php echo base_url(); ?>Candidate-Info/<?php echo $query->candidate_id; ?>" target="_new"><?php echo $query->candidate_name; ?></a></h3>
                                    <div class="" ></div>
                                    <div class="text"><?php $str = $query->description;
                        echo substr($str, 0, 80);
                            ?></div>

                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>

                </div>
            </section>
            <div class="">
                <center>
                    <a href="<?php echo base_url(); ?>CandidateInfo" target="_new" class="btn btn-primary" style="margin-bottom: 25px;">View All Candidate</a>
                </center>
            </div>
            <br>
            <section class="sponsors-style-one">
                <div class="auto-container">
                    <div class="sec-title">
                        <h3 style="line-height: 2.6em;margin-top: -40px;">All Indian  <span class="theme_color">Parties</span></h3>
                        <span class="separator"></span>
                    </div>
                    <div class="sec-title center" style="margin-bottom: 9px;">

                        <?php
                        $query = $this->md->my_query("select * from tbl_party_registration where status=1");
                        ?>

                    </div>
                    <!--Sponsors Slider-->
                    <ul class="sponsors-carousel-one owl-theme owl-carousel">
                        <?php
                        foreach ($query as $val) {
                            ?>
                            <li><div class="image-box tool_tip" title="<?php echo $val->p_name; ?>" style="margin-bottom: 30px;">
                                    <a href="<?php echo base_url(); ?>Party-Info/<?php echo $val->party_id; ?>" target="_new"><img src="<?php echo $val->p_logo; ?>" alt="" style="height: 100px;width:70%;"></a></div></li>
                                        <?php
                                    }
                                    ?>
                    </ul>

                </div>
            </section>

            <?php
            $this->load->view('footer');
            ?>
        </div>
    </body>
    <?php
    $this->load->view('footerscript');
    ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $t = setInterval(function () {
                responsiveVoice.speak("hello welcome to our site");
                clearInterval($t);
            }, 1000);
        });
    </script>

</html>
