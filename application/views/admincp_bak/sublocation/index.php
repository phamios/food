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
                        <?php echo form_open_multipart('admin/location/del_all_sublocation', array('id' => "frm1")); ?> 
                        <div class="widget widget-table action-table">
                            <div class="widget-header"> <i class="icon-th-list"></i>
                                <h3><a href="<?php echo site_url('admin/location/add_sublocation'); ?>" class="btn btn-small btn-success"> Thêm mới </a></h3>
                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content">
                                <table class="table table-striped table-bordered">
                                    <thead> 
                                        <tr>
                                            <th> <button type="submit" name="btt_del" class="btn btn-default" data-dismiss="modal">Xoá</button>
                                                <input type='checkbox'  onclick='checkedAll(frm1);'></th>
                                            <th> ID</th>
                                            <th> Thành phố </th>
                                            <th> Tỉnh, quận, huyện</th>
                                            <th class="td-actions"> </th>
                                        </tr> 
                                    </thead>
                                    <tbody>
                                        <?php if ($list_sublocation <> null): ?>
                                            <?php foreach ($list_sublocation as $value): ?>
                                                <tr>
                                                    <td style="width: 50px;"><input type="checkbox" name="chk1[]"  value="<?php echo $value->id ?>"></td>
                                                    <td> <?php echo $value->id ?> </td>
                                                    <td> <?php foreach ($list_all_location as $location): ?> 
                                                            <?php if ($location->id == $value->locationid): ?>
                                                                <?php echo $location->location_name; ?>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </td>
                                                    <td> <?php echo $value->sub_name; ?> </td>
                                                    <td class="td-actions">
                                                        <a href="<?php echo site_url('admin/location/edit_sublocation/' . $value->id); ?>" class="btn btn-small btn-success">Sửa</a>
                                                        <a href="<?php echo site_url('admin/location/del_sublocation/' . $value->id); ?>" class="btn btn-danger btn-small">Xoá</a></td>
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