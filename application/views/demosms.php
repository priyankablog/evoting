<!--
Author: MobGyan
Author URL: https://goprohost.net
-->
<!DOCTYPE html>
<html>
    <head>
        <title>FREE2SMS By MobGyan</title>
        <!-- Meta tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Free2sms,MobGyan,Send Free Sms" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Meta tag Keywords -->

        
        <link href="<?php echo base_url('sms');?>style.css" rel="stylesheet" type="text/css" media="all">
        <link href="//fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
    </head>
    <body>
        <div class="form">

            <div class="form-content">
                <form action="" method="post" id="myForm">
                    <div class="form-info">
                        <h2>SEND SMS</h2>

                        <p><span class="w3-tag w3-blue" id="ack">Message Status</span></p>
                    </div>
                    <div class="name">
                        <label>Mobile No.</label>
                        <input class="input1" type="text" name="user" placeholder="9999999999" required="" value="8141053182">
                    </div>
                    <div class="email">
                        <label>Password</label>
                        <input type="password" class="input1" type="email" name="pass" placeholder="**********" required="" value="mygovrnmygovrn">

                    </div>
                    <div class="email">
                        <label>Receipt</label>
                        <input type="text" class="input1" type="email" name="phone" placeholder="8888888888" >

                    </div>
                    <div class="pass1">
                        <label>Message</label>
                        <input class="input1" type="text" name="message" placeholder="hi friend how are you">
                    </div>

                    <div class="signup">
                        <input type="submit" value="SEND NOW" id="submit" name="sendsms"/>
                    </div>
                </form>

            </div>
        </div>
        <script type="text/javascript" src="<?php echo base_url('sms'); ?>jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('sms');?>my_script.js"></script>
    </body>
</html>