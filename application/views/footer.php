<!--Main Footer-->
<footer class="main-footer" style="padding-top: 40px;">

    <div class="auto-container">
        <div class="row clearfix">

            <!--Big Column-->
            <div class="big-column col-md-6 col-sm-12 col-xs-12">
                <div class="row clearfix">

                    <!--Footer Column-->
                    <div class="footer-column col-md-8 col-sm-6 col-xs-12">
                        <div class="footer-widget logo-widget">
                            <div class="footer-logo"><a href="<?php echo base_url(); ?>Home"><img src="<?php echo base_url(); ?>visitor/images/logo1.png" alt="" title="My Govrn" style="max-width: 50%;"></a></div>
                            <div class="widget-content">
                                <div class="text">We used MyGovrn for the annual meeting of our organization (20K+ members). For anyone looking for a professional, reasonably priced <a href="<?php echo base_url(); ?>About-Us" target="_new">Read More</a></div>

                                <ul class="social-icons light clearfix">
                                    <li><a href="https://www.facebook.com/Mygovrn-341014076390318/?ref=bookmarks" target="_new"><span class="fa fa-facebook-f"  style="font-size: large; width: 30px;"></span></a>&nbsp;</li>
                                    <li><a href="https://twitter.com/mygovrn" target="_new"><span class="fa fa-twitter"  style="font-size: large;width: 30px;"></span></a>&nbsp;</li>
                                    <li><a href="https://plus.google.com/u/0/102982163479602927030" target="_new"><span class="fa fa-google-plus" style="font-size: large;width: 30px;"></span></a>&nbsp;</li>
                                    <li><a href="https://www.linkedin.com/learning/me" target="_new"><span class="fa fa-linkedin" style="font-size: large;width: 30px;"></span></a>&nbsp;</li>
                                    <li><a href="https://www.instagram.com/mygovrn/" target="_new"><span class="fa fa-instagram" style="font-size: large;width: 30px;"></span></a>&nbsp;</li>
                                </ul>

                            </div>
                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-widget links-widget">
                            <h2>QUICK LINKS</h2>
                            <div class="widget-content">
                                <ul class="list">

                                    <li><a href="<?php echo base_url(); ?>About-Us">About Us</a></li>
                                    <li><a href="<?php echo base_url(); ?>Faq">FAQ</a></li>
                                    <li><a href="<?php echo base_url(); ?>News">News</a></li>
                                    <li><a href="<?php echo base_url(); ?>Privacy-Policy">Privacy Policy</a></li>
                                    <li><a href="<?php echo base_url(); ?>Contact-Us">Contact Us</a></li>
                                    <li><a href="<?php echo base_url(); ?>Terms-And-Condition">Terms &amp; Condition</a></li>
                                    <li><a href="<?php echo base_url(); ?>Feedback">Feedback</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

<!-- <div class="big-column col-md-6 col-sm-12 col-xs-12">
                <div class="row clearfix">
                    Footer Column
                    <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                        <h2>Latest News</h2>
                         <?php
                        
            $query=$this->md->my_query("select * from tbl_news LIMIT 2");
            
            foreach($query as $val)
                {
                            ?>

                        <div class="posts-widget">
                            <div class="posts">
                                <div class="post">
                                    <figure class="post-thumb"><img src="<?php echo base_url();echo $val->news_path; ?>" alt=""/></figure>
                                    <div class="">
                                                <?php $str = $val->news;
                        echo substr($str,0,40);?>
                                            </div>
                                    <div class="time"><?php echo $val->date;?></div>
                                    
                                </div>
                           </div>
                        </div>
                        <?php
                }
                ?>
                        <div class="centered"><a href="<?php echo base_url();?>News" style="color: #00bdfd;">View More News</a></div>
                    </div>
                </div>
 </div>-->

           

            <!--Big Column-->
            <div class="big-column col-md-6 col-sm-12 col-xs-12">
                <div class="row clearfix">
                    <!--Footer Column-->
                    <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                        <div class="fb-page" data-width="300" data-height="300" data-href="https://www.facebook.com/Mygovrn-341014076390318/?ref=bookmarks" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Mygovrn-341014076390318/?ref=bookmarks" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Mygovrn-341014076390318/?ref=bookmarks">Mygovrn</a></blockquote></div>
                    </div>

                    <!--Footer Column-->
                    <div class="footer-column col-md-6 col-sm-6 col-xs-12">

                        <h2>News Letter</h2>

                        <div class="footer-widget gallery-widget">
                            <form name="myForm" method="post" action="">
                                <div class="subscribe-widget">

                                    <div class="form-group">
                                        <input name="text" placeholder="Email Address" type="text" id="emailsub" >
                                        <label id="emailerr" style="font-size: 13px;"></label>
                                    </div>

                                    <div class="form-group">
                                        Enter Email Address to get latest News and Updates from Us.                                        
                                    </div>
                                    <div class="form-group">
                                        <input type="button" onclick="set_insert('email');" class="theme-btn btn-style-one" value="SUBSCRIBE NOW" name="submit" id=""/>
                                    </div>

                                </div>
                            </form>
                            
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="copyright">Copyrights &copy; 2018 Right Democracy.Developed by-Daya Biladiya,Priyanka Mangukiya,Disha Vadaliya. My Govrn All Rights Reserved.</div>
    </div>


</footer>
<!--End Main Footer-->
<!--End pagewrapper-->

<!--End Search Popup-->