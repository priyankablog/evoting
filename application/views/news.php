<!DOCTYPE html>
<html>


    <head>
        <meta charset="utf-8">
        <title>My Govrn | News Page</title>
        <!-- Stylesheets -->
        <?php
        $this->load->view('headlink');
        ?>

        <link href="<?php echo base_url(); ?>visitor/css/mycss.css" rel="stylesheet">

        <!--Favicon-->
        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    </head>

    <body>
        <div class="page-wrapper">

            <!-- Preloader -->
            <div class="preloader"></div> 

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
               

            </header>
            <!--End Main Header -->

            <!--Page Title-->
            <section class="page-title" style="background-image: url(<?php echo base_url(); ?>visitor/images/background/news.jpg);background-size: cover; background-position: right bottom;">
                <div class="auto-container">
                    <h1>News</h1>
                    <ul class="bread-crumb">
                        <li><a href="<?php echo base_url(); ?>Home">Home</a></li>
                        <li class="active">News</li>
                    </ul>
                </div>
            </section>
           <div class="services-section style-two">
               <div class="container">
                    <div class="sec-title" style="margin-top: -70px;margin-bottom: 80px;">

                        <h3 style="line-height: 2.6em;">News</h3>
                        <span class="separator"></span>
                    </div> 
               <div class="sidebar-page-container right-side-bar" style="margin-bottom: -100px;margin-top: -120px;">
                <div class="auto-container">
                    <div class="row">

                        <?php
                        
            $query=$this->md->my_query("SELECT * FROM tbl_news  ORDER BY news_id  DESC");
            
            foreach($query as $val)
                {
                            ?>

                        <div class="news-block col-md-4 col-sm-6 col-xs-12" style="height:550px;">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <figure class="">
                                        <img src="<?php echo $val->news_path; ?>" alt="" style="height: 225px;width:100%;"/>
                                    </figure>
                                    <div class="lower-content">
                                        <div class="upper-box" style="padding:30px 30px 50px;">
                                            <a href="" id="<?php echo $val->news_id; ?>" onclick="news('<?php echo $val->news_id; ?>','newsdata');" data-toggle="modal" data-target="#newsdata"><h3><?php echo $val->name;?></h3></a>
                                            <div class="lower-box">
                                                <div class="date"><?php echo $val->date;?></div>
                                            </div>
                                            <div class="" style="height:50px;">
                                                <?php $str = $val->news;
                        echo substr($str,0,100)."...";?>
                                            </div>
                            

 <div class="col-md-2 col-lg-offset-8">
<input type="button" style="margin-top: 10px;" class="btn btn-primary" id="<?php echo $val->news_id; ?>" onclick="news('<?php echo $val->news_id; ?>','newsdata');" value="Read More" data-toggle="modal" data-target="#newsdata"/>
<!--<a class="btn btn-primary" href="" data-toggle="modal" data-target="#myModal" style="background-color: #00b7f1;border-color:#00b7f1; ">Read More</a>-->

                                            </div>

                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <?php
                        }
                        ?>





                    </div>
                </div>
            </div>
           </div>
           </div>
            <div class="modal fade" id="newsdata" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                
            </div>
            <?php
            $this->load->view('footer');
            ?>

        </div>

    </body>
    <?php
    $this->load->view('footerscript');
    ?>

</html>
