<html>
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>

        <link href="css/bootstrap-3.3.7-dist/css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="css/bootstrap-3.3.7-dist/js/bootstrap.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    
  
                    <table class="table table-bordered table-responsive my-pagging nova-pagging" style="">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th nova-search="yes">Name</th>
                                <th nova-search="yes">City</th>
                                <th nova-search="yes">Country</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                for($i=1;$i<=150;$i++)
                                {
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo "Vikas Gando ".$i; ?></td>
                                <td><?php echo "Vikasit ".$i; ?></td>
                                <td><?php echo "Modi JI ".$i; ?></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>l 
        <script type="text/javascript" src="js/new.js"></script>
        <style type="text/css">
            .nova-tab ul{
                list-style: none;
            }
            .nova-tab ul li{
                display: inline-block;
                padding:0 5px;
            }
            .nova-tab ul .active{
                color: green;
                border-bottom: solid 1px green;
            }
            </style>
    </body>
</html>