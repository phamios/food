<div class="main"> 
    <div class="main-inner"> 
        <div class="container"> 
            <div class="row">	 
                <div class="span12"> 
                    <div id="target-1" class="widget"> 
                        <div class="widget widget-table action-table">
                            <div class="widget-header"> <i class="icon-th-list"></i>
                                <h3><a href="<?php echo site_url('admin/cost/add_cost'); ?>" class="btn btn-small btn-success"> Thêm mới </a></h3>
                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content">
                                <table class="table table-striped table-bordered">
                                    <thead> 
                                        <tr>
                                            <th> ID</th>
                                            <th> Mức giá</th>
                                            <th> Bid Rate</th>
                                            <th class="td-actions"> </th>
                                        </tr> 
                                    </thead>
                                    <tbody>
                                        <?php if ($list_cost <> null): ?>
                                            <?php foreach ($list_cost as $value): ?>
                                                <tr>
                                                    <td> <?php echo $value->id ?> </td>
                                                    <td> <?php echo $value->cost_amount; ?> </td>
                                                    <td> <?php echo number_format($value->cost_rate); ?> vnd</td>
                                                    <td class="td-actions">
                                                        <a href="<?php echo site_url('admin/cost/edit_cost/' . $value->id); ?>" class="btn btn-small btn-success">Sửa</a>
                                                        <a href="<?php echo site_url('admin/cost/del_cost/' . $value->id); ?>" class="btn btn-danger btn-small">Xoá</a>
                                                    </td>
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