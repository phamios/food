<script type="text/javascript">
    checked = false;
    function checkedAll(frm1) {
        var aa = document.getElementById('frm1');
        if (checked == false)
        {
            checked = true
        }
        else
        {
            checked = false
        }
        for (var i = 0; i < aa.elements.length; i++) {
            aa.elements[i].checked = checked;
        }
    }
</script> 
<div class="main">

    <div class="main-inner">

        <div class="container">

            <div class="row">	      	

                <div class="span12">

                    <div id="target-1" class="widget">
                        <?php echo form_open_multipart('admincp/del_all_job', array('id' => "frm1")); ?> 
                        <div class="widget widget-table action-table">
                            <div class="widget-header"> <i class="icon-th-list"></i>
                                <h3><a href="<?php echo site_url('admincp/add_jobs'); ?>" class="btn btn-small btn-success"> Thêm mới </a></h3>
                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content">
                                <table class="table table-striped table-bordered">
                                    <thead> 
                                        <tr>
                                            <th> <button type="submit" name="btt_del" class="btn btn-default" data-dismiss="modal">Xoá</button>
                                                <input type='checkbox'  onclick='checkedAll(frm1);'></th>
                                            <th> ID</th>
                                            <th>Loại Contractor</th>
                                            <th>Tên công việc</th>
                                            <th class="td-actions"> </th>
                                        </tr> 
                                    </thead>
                                    <tbody>
                                        <?php if ($list_all <> null): ?>
                                            <?php foreach ($list_all as $value): ?>
                                                <tr>
                                                    <td style="width: 50px;"><input type="checkbox" name="chk1[]"  value="<?php echo $value->id ?>"></td>
                                                    <td> <?php echo $value->id ?> </td>
                                                    <td> 
                                                        <?php foreach ($listcontractor as $contract): ?>
                                                            <?php if ($contract->id == $value->contractorid): ?>
                                                                <?php echo $contract->name; ?>
                                                            <?php endif; ?> 
                                                        <?php endforeach; ?>
                                                    </td>
                                                    <td> <?php echo $value->name; ?> </td>
                                                    <td class="td-actions">
                                                        <a href="<?php echo site_url('admincp/edit_jobs/' . $value->id); ?>" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a>
                                                        <a href="<?php echo site_url('admincp/del_jobs/' . $value->id); ?>" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /widget-content --> 
                        </div> 
                        <?php echo form_close(); ?>
                    </div>  

                </div>  


            </div>  

        </div> 
    </div>
</div>