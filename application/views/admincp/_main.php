<?php if ($this->router->class == 'admincp'): ?>
    <?php if ($this->router->fetch_method() == 'index'): ?>
        <?php $this->load->view('admincp/home/index'); ?> 
    <?php endif; ?>  
    <?php if ($this->router->fetch_method() == 'menu'): ?>
        <?php $this->load->view('admincp/navigator/index'); ?> 
    <?php endif; ?> 
    <?php if ($this->router->fetch_method() == 'configsite'): ?> 
        <?php $this->load->view('admincp/config/index'); ?> 
    <?php endif; ?> 
    <?php if ($this->router->fetch_method() == 'configslide'): ?> 
        <?php $this->load->view('admincp/slide/index'); ?> 
    <?php endif; ?> 
    <?php if ($this->router->fetch_method() == 'giftcard'): ?> 
        <?php $this->load->view('admincp/giftcard/index'); ?> 
    <?php endif; ?> 
    <?php if ($this->router->fetch_method() == 'catenews'): ?> 
        <?php $this->load->view('admincp/catenews/list'); ?> 
    <?php endif; ?>  
    <?php if ($this->router->fetch_method() == 'updatepass'): ?> 
        <?php $this->load->view('admincp/admin/updatepass'); ?> 
    <?php endif; ?> 
    <?php if ($this->router->fetch_method() == 'depositconfig'): ?> 
        <?php $this->load->view('admincp/depositconfig/index'); ?> 
    <?php endif; ?>
    <?php if ($this->router->fetch_method() == 'add_deposittype'): ?> 
        <?php $this->load->view('admincp/depositconfig/add'); ?> 
    <?php endif; ?>
    <?php if ($this->router->fetch_method() == 'edit_deposit'): ?> 
        <?php $this->load->view('admincp/depositconfig/edit'); ?> 
    <?php endif; ?>

    <?php if ($this->router->fetch_method() == 'nganluong'): ?> 
        <?php $this->load->view('admincp/nganluong/index'); ?> 
    <?php endif; ?>

<!-- -----------Contractor-------------     -->
<?php if ($this->router->fetch_method() == 'contractor'): ?> 
        <?php $this->load->view('admincp/contractor/index'); ?> 
    <?php endif; ?>  
    <?php if ($this->router->fetch_method() == 'add_contractor'): ?> 
        <?php $this->load->view('admincp/contractor/add'); ?> 
    <?php endif; ?> 
    <?php if ($this->router->fetch_method() == 'edit_contractor'): ?> 
        <?php $this->load->view('admincp/contractor/edit'); ?> 
    <?php endif; ?>
<!-- -----------Jobs-------------     -->
<?php if ($this->router->fetch_method() == 'jobs'): ?> 
        <?php $this->load->view('admincp/jobs/index'); ?> 
    <?php endif; ?>  
    <?php if ($this->router->fetch_method() == 'add_jobs'): ?> 
        <?php $this->load->view('admincp/jobs/add'); ?> 
    <?php endif; ?> 
    <?php if ($this->router->fetch_method() == 'edit_jobs'): ?> 
        <?php $this->load->view('admincp/jobs/edit'); ?> 
    <?php endif; ?> 

    <?php if ($this->router->fetch_method() == 'list_work'): ?> 
        <?php $this->load->view('admincp/work/index'); ?> 
    <?php endif; ?> 
    <?php if ($this->router->fetch_method() == 'details_work'): ?> 
        <?php $this->load->view('admincp/work/details'); ?> 
    <?php endif; ?> 
    
     <?php if ($this->router->fetch_method() == 'timeauto'): ?> 
        <?php $this->load->view('admincp/timeauto/index'); ?> 
    <?php endif; ?> 
    
    <?php if ($this->router->fetch_method() == 'ads'): ?> 
        <?php $this->load->view('admincp/ads/index'); ?> 
    <?php endif; ?> 
     <?php if ($this->router->fetch_method() == 'create_ads'): ?> 
        <?php $this->load->view('admincp/ads/add'); ?> 
    <?php endif; ?> 
     <?php if ($this->router->fetch_method() == 'edit_ads'): ?> 
        <?php $this->load->view('admincp/ads/edit'); ?> 
    <?php endif; ?> 
    
<?php endif; ?>

<?php if ($this->router->class == 'report'): ?>
    <?php if ($this->router->fetch_method() == 'index'): ?>
        <?php $this->load->view('admincp/report/index'); ?> 
    <?php endif; ?> 
<?php endif; ?>


<?php if ($this->router->class == 'page'): ?>
    <?php if ($this->router->fetch_method() == 'index'): ?>
        <?php $this->load->view('admincp/page/index'); ?> 
    <?php endif; ?>
    <?php if ($this->router->fetch_method() == 'add_page'): ?>
        <?php $this->load->view('admincp/page/add'); ?> 
    <?php endif; ?>
    <?php if ($this->router->fetch_method() == 'edit_page'): ?>
        <?php $this->load->view('admincp/page/edit'); ?> 
    <?php endif; ?>
<?php endif; ?>



<!--Xử lý phần COST - GIÁ KHI ORDER -->
<?php if ($this->router->class == 'cost'): ?>
    <?php if ($this->router->fetch_method() == 'index'): ?>
        <?php $this->load->view('admincp/cost/index'); ?>
    <?php endif; ?>   
    <?php if ($this->router->fetch_method() == 'add_cost'): ?>
        <?php $this->load->view('admincp/cost/add'); ?>
    <?php endif; ?> 
    <?php if ($this->router->fetch_method() == 'edit_cost'): ?>
        <?php $this->load->view('admincp/cost/edit'); ?>
    <?php endif; ?> 
<?php endif; ?>

<!--Xử lý phần EMAIL -->
<?php if ($this->router->class == 'mail'): ?>
    <?php if ($this->router->fetch_method() == 'index'): ?>
        <?php $this->load->view('admincp/email/index'); ?>
    <?php endif; ?>   
    <?php if ($this->router->fetch_method() == 'add_mail'): ?>
        <?php $this->load->view('admincp/email/add'); ?>
    <?php endif; ?> 
    <?php if ($this->router->fetch_method() == 'edit_mail'): ?>
        <?php $this->load->view('admincp/email/update'); ?>
    <?php endif; ?> 
<?php endif; ?>


<?php if ($this->router->class == 'location'): ?>
    <?php if ($this->router->fetch_method() == 'index'): ?>
        <?php $this->load->view('admincp/location/index'); ?> 
    <?php endif; ?> 
    <?php if ($this->router->fetch_method() == 'add_location'): ?>
        <?php $this->load->view('admincp/location/add'); ?> 
    <?php endif; ?> 
    <?php if ($this->router->fetch_method() == 'edit_location'): ?>
        <?php $this->load->view('admincp/location/edit'); ?> 
    <?php endif; ?>

<!-- SUB LOCATION -->
<?php if ($this->router->fetch_method() == 'sub_location'): ?>
        <?php $this->load->view('admincp/sublocation/index'); ?> 
    <?php endif; ?> 
    <?php if ($this->router->fetch_method() == 'add_sublocation'): ?>
        <?php $this->load->view('admincp/sublocation/add'); ?> 
    <?php endif; ?> 
    <?php if ($this->router->fetch_method() == 'edit_sublocation'): ?>
        <?php $this->load->view('admincp/sublocation/edit'); ?> 
    <?php endif; ?> 


<?php endif; ?>


<?php if ($this->router->class == 'moduledmos'): ?>
    <?php if ($this->router->fetch_method() == 'index'): ?>
        <?php $this->load->view('admincp/modules/list'); ?> 
    <?php endif; ?> 
    <?php if ($this->router->fetch_method() == 'create_new'): ?>
        <?php $this->load->view('admincp/modules/create'); ?> 
    <?php endif; ?> 
<?php endif; ?>

<?php if ($this->router->class == 'users'): ?>
    <?php if ($this->router->fetch_method() == 'index'): ?>
        <?php $this->load->view('admincp/users/list'); ?> 
    <?php endif; ?>  
    <?php if ($this->router->fetch_method() == 'list_user'): ?>
        <?php $this->load->view('admincp/users/list'); ?> 
    <?php endif; ?> 
    <?php if ($this->router->fetch_method() == 'profile'): ?>
        <?php $this->load->view('admincp/users/profile'); ?> 
    <?php endif; ?>  
<?php endif; ?>

<?php if ($this->router->class == 'media'): ?>
    <?php if ($this->router->fetch_method() == 'index'): ?>
        <?php $this->load->view('admincp/cateimage/list'); ?> 
    <?php endif; ?>  
    <?php if ($this->router->fetch_method() == 'pictures'): ?>
        <?php $this->load->view('admincp/media/list_pictures'); ?> 
    <?php endif; ?>  
    <?php if ($this->router->fetch_method() == 'video'): ?>
        <?php $this->load->view('admincp/media/list_video'); ?> 
    <?php endif; ?>  
    <?php if ($this->router->fetch_method() == 'create_new'): ?>
        <?php $this->load->view('admincp/media/create_new'); ?> 
    <?php endif; ?> 
    <?php if ($this->router->fetch_method() == 'edit_catenews'): ?>
        <?php $this->load->view('admincp/cateimage/edit'); ?> 
    <?php endif; ?> 
<?php endif; ?>

<?php if ($this->router->class == 'app'): ?>
    <?php if ($this->router->fetch_method() == 'index'): ?>
        <?php $this->load->view('admincp/app/index'); ?> 
    <?php endif; ?>  
    <?php if ($this->router->fetch_method() == 'categories'): ?>
        <?php $this->load->view('admincp/app/category'); ?> 
    <?php endif; ?>
    <?php if ($this->router->fetch_method() == 'details_cate'): ?>
        <?php $this->load->view('admincp/app/details'); ?> 
    <?php endif; ?>
    <?php if ($this->router->fetch_method() == 'add_app'): ?>
        <?php $this->load->view('admincp/app/create'); ?> 
    <?php endif; ?> 
<?php endif; ?>



<?php if ($this->session->userdata('admin_id') <> null): ?>
    <?php foreach ($list_menu as $menu): ?>
        <?php if ($this->router->class == trim($menu->mod_name)): ?>
            <?php
            $xml = simplexml_load_file(
                    './application/modules/' . trim($menu->mod_name) .
                             '/note.xml');
            foreach ($xml->functions as $key => $value) {
                if ($this->router->fetch_method() == $value->name) {
                    $this->load->view($value->view);
                }
            }
            ?> 
        <?php endif; ?>
    <?php endforeach; ?> 
<?php endif; ?>