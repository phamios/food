<div class="subnavbar">
    <div class="subnavbar-inner">
        <div class="container">
            <ul class="mainnav">
                <li class="active">
                    <a href="<?php echo site_url('admincp'); ?>"><i class="icon-dashboard"></i><span>Dashboard</span> </a> 
                </li>
				
				<li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-list-alt"></i><span>News Manager</span> 
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('admincp/catenews'); ?>">Category of News</a></li>
                        <li><a href="<?php echo site_url('admincp/content'); ?>">Article Management</a></li>
                        
                    </ul>
                </li>
				
				<li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-code"></i><span>Jobs Manager</span> 
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
						<li><a href="<?php echo site_url('admincp/list_work');?>"  > List Current Jobs</a>	</li><hr/>
                        <li><a href="<?php echo site_url('admincp/contractor'); ?>">Jobs Categories</a></li>
                        <li><a href="<?php echo site_url('admincp/add_contractor'); ?>">Add new Category</a></li>
                        <hr/>
						<li><a href="<?php echo site_url('admincp/jobs'); ?>">List Skills</a></li>
                        <li><a href="<?php echo site_url('admincp/add_jobs'); ?>">Add new Skill</a></li>
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-list-alt"></i><span>Users Manager</span> 
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('admincp/user/1'); ?>">List Worker</a></li>
                        <li><a href="<?php echo site_url('admincp/user/2'); ?>">List Hire</a></li>
                        <li><a href="<?php echo site_url('admincp/user/0'); ?>">List Moderator</a></li>
                    </ul>
                </li>

                
 
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-bar-chart"></i><span>Location Manager</span> 
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('admin/location'); ?>">City Location</a></li>
                        <li><a href="<?php echo site_url('admin/location/sub_location'); ?>">District Location</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-list-alt"></i><span>Config Site</span> 
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('admincp/depositconfig'); ?>"><span>Cấu hình nạp tiền</span> </a></li>
                        <li><a href="<?php echo site_url('admincp/nganluong'); ?>"><span>Cấu hình Ngân Lượng</span> </a></li>
                        <li><a href="<?php echo site_url('admin/cost'); ?>"><span>Cấu hình mức giá</span> </a></li>
                        <li><a href="<?php echo site_url('admin/mail/index'); ?>"><span>Cấu hình Email gửi</span> </a></li>
                        <li><a href="<?php echo site_url('admin/page'); ?>"><span>Thông tin chung trên site</span> </a></li>
                        <li><a href="<?php echo site_url('admincp/timeauto'); ?>"><span>Cấu hình thời gian gửi tin auto</span> </a></li>
                    </ul>
                </li>


                

                <li><a href="<?php echo site_url('admincp/ads'); ?>"><i class="icon-bar-chart"></i><span>Advertis Manager</span> </a></li>

                <li><a href="<?php echo site_url('admin/report'); ?>"><i class="icon-bar-chart"></i><span>Report</span> </a></li>


<!--        <li><a href="charts.html"><i class="icon-bar-chart"></i><span>Charts</span> </a> </li>
<li><a href="shortcodes.html"><i class="icon-code"></i><span>Shortcodes</span> </a> </li>


<li class="dropdown">
    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
        <i class="icon-bar-chart"></i><span>Quản lý thành viên</span> 
        <b class="caret"></b>
    </a>
  <ul class="dropdown-menu">
    <li><a href="#">Người tìm việc</a></li>
    <li><a href="#">Người tạo việc</a></li>
  </ul>
</li>-->
            </ul>
        </div>
        <!-- /container --> 
    </div>
    <!-- /subnavbar-inner --> 
</div>