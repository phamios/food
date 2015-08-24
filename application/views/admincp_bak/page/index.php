<div class="main">

    <div class="main-inner">

        <div class="container">

            <div class="row">	      	

                <div class="span12">

                    <div id="target-1" class="widget">

                        <div class="widget widget-table action-table">
                            <div class="widget-header"> <i class="icon-th-list"></i>
                                <h3><a href="<?php echo site_url('admin/page/add_page'); ?>" class="btn btn-small btn-success"> Thêm mới </a></h3>
                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content">
                                <table class="table table-striped table-bordered">
                                    <thead> 
                                        <tr>
                                            <th> ID</th>
                                            <th>Loại page</th>
                                            <th>Tên </th>

                                            <th class="td-actions"> </th>
                                        </tr> 
                                    </thead>
                                    <tbody>
                                        <?php if ($list_page <> null): ?>
                                            <?php foreach ($list_page as $value): ?>
                                                <tr>
                                                    <td> <?php echo $value->id ?> </td>
                                                    <td> 
                                                        <?php if ($value->pagetype == 1): ?>
                                                            Giới thiệu homeowner
                                                        <?php endif; ?>
                                                        <?php if ($value->pagetype == 5): ?>
                                                            Giới thiệu contractor
                                                        <?php endif; ?>

                                                        <?php if ($value->pagetype == 2): ?>
                                                            Về chúng tôi
                                                        <?php endif; ?>

                                                        <?php if ($value->pagetype == 3): ?>
                                                            Hướng dẫn Homeowner
                                                        <?php endif; ?>

                                                        <?php if ($value->pagetype == 4): ?>
                                                            Hướng dẫn Contractor
                                                        <?php endif; ?>

                                                        <?php if ($value->pagetype == 6): ?>
                                                            Bảng giá
                                                        <?php endif; ?>

                                                        <?php if ($value->pagetype == 7): ?>
                                                            Liên hệ
                                                        <?php endif; ?>

                                                        <?php if ($value->pagetype == 8): ?>
                                                            Đăng việc
                                                        <?php endif; ?>

                                                        <?php if ($value->pagetype == 9): ?>
                                                            Lưu ý
                                                        <?php endif; ?>

                                                        <?php if ($value->pagetype == 10): ?>
                                                            Hỏi đáp cho chủ nhà
                                                        <?php endif; ?>

                                                        <?php if ($value->pagetype == 11): ?>
                                                            Đăng ký nhà thầu
                                                        <?php endif; ?>

                                                        <?php if ($value->pagetype == 12): ?>
                                                            Hỏi đáp cho nhà thầu
                                                        <?php endif; ?>
                                                        <?php if ($value->pagetype == 13): ?>
                                                            Báo giá nạp tiền
                                                        <?php endif; ?>
                                                            <?php if ($value->pagetype == 14): ?>
                                                            Hướng dẫn chủ nhà
                                                        <?php endif; ?>
                                                            <?php if ($value->pagetype == 15): ?>
                                                            Hướng dẫn nhà thầu 
                                                        <?php endif; ?>

                                                    </td>
                                                    <td> <?php echo $value->pagetitle; ?> </td>

                                                    <td class="td-actions">
                                                        <a href="<?php echo site_url('admin/page/edit_page/' . $value->id); ?>" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a>
                                                        <a href="<?php echo site_url('admin/page/del_page/' . $value->id); ?>" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
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