        
<div class="tp-banner-container">
    <div class="tp-banner">
        <ul>
            <?php
            
            $query=$this->md->my_query("select * from tbl_banner");
            foreach($query as $val)
                {
                ?>
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/5.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="<?php echo $val->banner_path; ?>"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                    <div class="tp-caption sfl sfb tp-resizeme"
                         data-x="left" data-hoffset="15"
                         data-y="center" data-voffset="-100"
                         data-speed="1500"
                         data-start="0"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.3"
                         data-endspeed="1200"
                         data-endeasing="Power4.easeIn">
                        <h2 class="light"><?php echo $val->title;?></h2>
                    </div>


                    <div class="tp-caption sfr sfb tp-resizeme"
                         data-x="left" data-hoffset="15"
                         data-y="center" data-voffset="20"
                         data-speed="1500"
                         data-start="0"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.3"
                         data-endspeed="1200"
                         data-endeasing="Power4.easeIn">
                        <div class="text light"><?php $str = $val->description;
                        echo chunk_split($str, 50,"<br>");
                        ?></div>
                    </div>

                    <div class="tp-caption sfl sfb tp-resizeme"
                         data-x="left" data-hoffset="15"
                         data-y="center" data-voffset="110"
                         data-speed="1500"
                         data-start="0"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.3"
                         data-endspeed="1200"
                         data-endeasing="Power4.easeIn">
                        <div class="btn-box"><a href="<?php echo base_url();?>About-Us" target="_new" class="theme-btn btn-style-one">OUR SERVICES</a>
                            <a href="<?php echo base_url();?>Contact-Us" target="_new" class="theme-btn btn-style-two mar-left-20">Contact Us</a></div>
                    </div>

                </li>
                <?php
            }
            ?>  
        </ul>

        <div class="tp-bannertimer"></div>

    </div>

</div>
