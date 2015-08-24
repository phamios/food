<div class="main">

    <div class="main-inner">

        <div class="container">

            <div class="row">	      	

                <div class="span12">

                    <div id="target-1" class="widget">

                        <div class="widget widget-table action-table">
                            <div class="widget-header"> <i class="icon-th-list"></i>
                                <h3><a href="<?php echo site_url('admincp/add_deposittype'); ?>" class="btn btn-small btn-success"> Thêm mới </a></h3>
                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content">
                                <table class="table table-striped table-bordered">
                                    <thead> 
                                        <tr>
                                            <th> ID</th>
                                            <th> Tên gọi </th>
                                            <th> Số tiền nạp </th>
                                            <th>Tình trạng</th>
                                            <th class="td-actions"> </th>
                                        </tr> 
                                    </thead>
                                    <tbody>
                                        <?php if ($list_all <> null): ?>
                                            <?php foreach ($list_all as $value): ?>
                                                <tr>
                                                    <td> <?php echo $value->id ?> </td>
                                                    <td> <?php echo $value->deposit_name; ?> </td>
                                                    <td> <?php echo $value->deposit_amount; ?> </td>
                                                    <td> <?php if($value->active == 1): ?>
                                                            Hiển thị
                                                    <?php endif;?>
                                                             <?php if($value->active == 2): ?>
                                                            Ẩn
                                                    <?php endif;?>
                                                    </td>
                                                    <td class="td-actions">
                                                        <a href="<?php echo site_url('admincp/edit_deposit/' . $value->id); ?>" class="btn btn-small btn-success">Sửa</a>
                                                        <a href="<?php echo site_url('admincp/del_deposit/' . $value->id); ?>" class="btn btn-danger btn-small">Xoá</a></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /widget-content --> 
                        </div> 

                    </div>  

                </div>  


            </div>  

        </div> 
    </div>
</div>