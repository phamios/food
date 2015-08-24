<div class="main">

    <div class="main-inner">

        <div class="container">

            <div class="row">

                <div class="span12">

                    <div id="target-1" class="widget">

                        <div class="widget widget-table action-table">
                            <div class="widget-header">
                                <i class="icon-th-list"></i>
                                <h3>
                                    <a href="<?php echo site_url('admincp/create_ads'); ?>"
                                       class="btn btn-small btn-success"> Thêm mới </a>
                                </h3>
                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Banner</th> 
                                            <th>Link </th> 
                                            <th>Tình trạng</th>
                                            <th class="td-actions"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($list_ads <> null): ?>
                                            <?php foreach ($list_ads as $value): ?>
                                                <tr>
                                                    <td> <?php echo $value->id ?> </td>

                                                    <td><img width="200px"
                                                            src="<?php echo $value->imagelink; ?>" alt="image"/>
                                                    </td>
                                                    <td>
                                                        <?php echo $value->link;?>
                                                    </td>
                                                    <td>
                                                        <?php if ($value->active == 1): ?>
                                                            Đang bật
                                                        <?php endif; ?>
                                                        <?php if ($value->active == 2): ?>
                                                            Đã tắt
                                                        <?php endif; ?>
                                                    </td>

                                                    <td class="td-actions"><a
                                                            href="<?php echo site_url('admincp/edit_ads/' . $value->id); ?>"
                                                            class="btn btn-small btn-success"><i
                                                                class="btn-icon-only icon-ok"> </i></a> <a
                                                            href="<?php echo site_url('admincp/del_ads/' . $value->id); ?>"
                                                            class="btn btn-danger btn-small"><i
                                                                class="btn-icon-only icon-remove"> </i></a></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            Chưa có dữ liệu, vui lòng tạo
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