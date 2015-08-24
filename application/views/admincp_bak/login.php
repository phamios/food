<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Đăng nhập hệ thống</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes"> 

        <link href="<?php echo base_url('src/admin/css'); ?>/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('src/admin/css'); ?>/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url('src/admin/css'); ?>/font-awesome.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

        <link href="<?php echo base_url('src/admin/css'); ?>/style.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('src/admin/css'); ?>/pages/signin.css" rel="stylesheet" type="text/css">

    </head>

    <body>

        <div class="navbar navbar-fixed-top">

            <div class="navbar-inner">

                <div class="container">

                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <a class="brand" href="index.html">
                        Hệ thống quản lý Tìm Việc Nhanh				
                    </a>		

                    <div class="nav-collapse">
                        <ul class="nav pull-right">



                            <li class="">						
                                <a href="<?php echo site_url(); ?>" class="">
                                    <i class="icon-chevron-left"></i>
                                    Quay lại trang chủ
                                </a>

                            </li>
                        </ul>

                    </div><!--/.nav-collapse -->	

                </div> <!-- /container -->

            </div> <!-- /navbar-inner -->

        </div> <!-- /navbar -->



        <div class="account-container">

            <div class="content clearfix">

                <?php echo form_open_multipart('admincp/login'); ?>

                    <h1>Đăng nhập quản trị</h1>		

                    <div class="login-fields">


                        <div class="field">
                            <label for="username">Tên đăng nhập</label>
                             <input type="text" name="email" id="email" placeholder="Username" class="login username-field" />
                            
                        </div> <!-- /field -->

                        <div class="field">
                            <label for="password">Mật khẩu:</label>
                             <input type="password" name="password" placeholder="Password" class="login password-field"> 
                        </div> <!-- /password -->

                    </div> <!-- /login-fields -->

                    <div class="login-actions">
                        
                        <button type="submit" name="go"  class="button btn btn-success btn-large">Đăng nhập</button>

                    </div> <!-- .actions -->



                <?php echo form_close(); ?>

            </div> <!-- /content -->

        </div> <!-- /account-container -->



        <script src="<?php echo base_url('src/admin/js'); ?>/jquery-1.7.2.min.<?php echo base_url('src/admin/js'); ?>"></script>
        <script src="<?php echo base_url('src/admin/js'); ?>/bootstrap.<?php echo base_url('src/admin/js'); ?>"></script>

        <script src="<?php echo base_url('src/admin/js'); ?>/signin.<?php echo base_url('src/admin/js'); ?>"></script>

    </body>

</html>
