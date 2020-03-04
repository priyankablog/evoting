<!--Header Top-->
<div class="header-top">
    <div class="container clearfix">
        <!--Top Left-->
        <div class="col-md-9">
            <marquee style="color:#f8f8f8;" width="100%;" scrollamount="10px;" scrolldelay="20px;">
               
<?php
                $q=$this->md->my_query("select * from tbl_party_registration");
                foreach($q as $query)
                {
                ?>
            
                <?php echo "<b>".$query->p_name."</b> : ".$query->slogan." || ";?>
                
            <?php
                }
                ?>
                
</marquee>
        </div>

        <!--Top Right-->
        <div class="col-md-3">

            <ul class="social-icons clearfix" style="padding-left: 56px;">
                <li><a href="https://www.facebook.com/Mygovrn-341014076390318/?ref=bookmarks" target="_new"><span class="fa fa-facebook-f"></span></a> &nbsp;</li>
                <li><a href="https://twitter.com/mygovrn" target="_new"><span class="fa fa-twitter"></span></a> &nbsp;</li>
                <li><a href="https://plus.google.com/u/0/102982163479602927030" target="_new"><span class="fa fa-google-plus"></span></a> &nbsp;</li>
                <li><a href="https://www.linkedin.com/learning/me" target="_new"><span class="fa fa-linkedin"></span></a> </li>
                <li><a href="https://www.instagram.com/mygovrn/" target="_new"><span class="fa fa-instagram" style="font-size: large;width: 30px;"></span></a>&nbsp;</li>
            </ul>
        </div>
    </div>
</div><!--End Header Top-->
