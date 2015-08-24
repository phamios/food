<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Quản trị hệ thống</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


        <link href="<?php echo base_url('src/admin/css/'); ?>/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url('src/admin/css/'); ?>/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
              rel="stylesheet">
        <link href="<?php echo base_url('src/admin/css/'); ?>/font-awesome.css" rel="stylesheet">
        <link href="<?php echo base_url('src/admin/css/'); ?>/style.css" rel="stylesheet">
        <link href="<?php echo base_url('src/admin/css/'); ?>/pages/dashboard.css" rel="stylesheet">

        <script src="<?php echo base_url('src/admin/js/'); ?>/jquery-1.7.2.min.js"></script> 


        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
              <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->
    </head>
    <body>
        <?php $this->load->view('admincp/widget/nav') ?>
        <!-- /navbar -->
        <?php $this->load->view('admincp/widget/menu') ?>
        <!-- /subnavbar -->
        <div class="main">
            <?php $this->load->view('admincp/_main'); ?>
            <!-- /main-inner --> 
        </div>

        <div class="footer">
            <div class="footer-inner">
                <div class="container">
                    <div class="row">
                        <div class="span12"> &copy; 2015 <a href="http://www.vietadmob.com/">Hệ thống được xây dựng bởi VietAdmob.com</a>. </div>
                        <!-- /span12 --> 
                    </div>
                    <!-- /row --> 
                </div>
                <!-- /container --> 
            </div>
            <!-- /footer-inner --> 
        </div>
        <!-- /footer --> 
        <!-- Le javascript
        ================================================== --> 
        <!-- Placed at the end of the document so the pages load faster --> 

        <script src="<?php echo base_url('src/admin/js/'); ?>/excanvas.min.js"></script> 
        <script src="<?php echo base_url('src/admin/js/'); ?>/chart.min.js" type="text/javascript"></script> 
        <script src="<?php echo base_url('src/admin/js/'); ?>/bootstrap.js"></script>
        <script language="javascript" type="text/javascript" src="<?php echo base_url('src/admin/js/'); ?>/full-calendar/fullcalendar.min.js"></script>

        <script src="<?php echo base_url('src/admin/js/'); ?>/base.js"></script> 
         
    </body>
</html>
