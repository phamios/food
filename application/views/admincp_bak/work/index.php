<script type="text/javascript">
    $(function () {
        $('#table').searchable({
            striped: true,
            oddRow: {'background-color': '#f5f5f5'},
            evenRow: {'background-color': '#fff'},
            searchType: 'fuzzy'
        });

        $('#searchable-container').searchable({
            searchField: '#container-search',
            selector: '.row',
            childSelector: '.col-xs-4',
            show: function (elem) {
                elem.slideDown(100);
            },
            hide: function (elem) {
                elem.slideUp(100);
            }
        })
    });
</script>
<div class="container"> 
    <div class="row">
        <div class="col-lg-6 col-lg-offset-6">
            <input type="search" id="search" value="" class="form-control" placeholder="Tìm kiếm">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table" id="table">

                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Chủ nhà</th>
                        <th>Jobs</th>
                        <th>Task</th>
                        <th>Ngày đăng</th>
                        <th>Vị trí </th>  
                        <th>Mức giá</th>
                        <th>Static</th> 
                        <th>Xong</th> 
                        <th>Setting</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($list_work <> null): ?>
                        <?php foreach ($list_work as $work): ?> 
                            <tr> 
                                <td><?php echo $work->id; ?></td>
                                <td>
                                    <?php foreach ($list_homeowner as $home): ?>
                                        <?php if ($home->id == $work->master_id): ?>
                                            <?php echo $home->uemail; ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </td>
                                <td>
                                    <?php foreach ($list_contractor as $contractor): ?>
                                        <?php if ($contractor->id == $work->contractor_id): ?>
                                            <?php echo $contractor->name; ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </td>
                                <td>
                                    <?php foreach ($list_jobs as $jobs): ?>
                                        <?php if ($jobs->id == $work->job_id): ?>
                                    <a href="<?php echo site_url('admincp/details_work/'.$work->id);?>"> <?php echo $jobs->name; ?></a>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </td>
                                <td>
                                    <?php echo $work->post_date; ?>
                                </td>
                                <td>
                                    <?php foreach ($list_location as $location): ?>
                                        <?php if ($location->id == $work->locationid): ?>
                                            <?php echo $location->location_name; ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </td> 
                                
                                <td>
                                    <?php foreach ($list_cost as $cost): ?>
                                        <?php if ($cost->id == $work->cost): ?>
                                            <?php echo $cost->cost_amount ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?> 
                                </td> 
                                <td>
                                    <?php echo $work->static_now; ?>  bid 
                                </td>
                                <td>
                                    <?php if($work->workerid <> 0 ):?>  
                                    <i class="icon-large icon-money "></i>
                                <?php else:?>
                                   <!--  <i class="icon-large icon-money "></i> -->
                                <?php endif;?>
                                </td>
                                <td>
                                    <a href="<?php echo site_url('admincp/details_work/' . trim($work->id)); ?>"> View </a>
                                    &nbsp;
                                    <a href="<?php echo site_url('admincp/del_work/' . trim($work->id)); ?>"> Xoá </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        none
                    <?php endif; ?>
                </tbody>

            </table>
            <hr>
        </div>
    </div>

</div>

<script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>

