<?php if ($usertype == 0): ?>
    <?php $this->load->view('admincp/users/createnew'); ?> 
<?php endif; ?>
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

    <div class="row">
        <div class="col-lg-12">
            <table class="table" id="table">
                <?php if ($list_user <> null): ?>
                    <?php echo form_open_multipart('admin/users/delete_all_user', array('id' => "frm1")); ?> 

                    <thead>
                        <tr>
                            <th> <button type="submit" name="btt_del" class="btn btn-default" data-dismiss="modal">Xoá</button>
                                <input type='checkbox'  onclick='checkedAll(frm1);'></th>
                            <th>Id</th>
                            <th>Tên thành viên</th>
                            <th>Balance</th>
                            <th>Ngày gia nhập</th>
                            <th>Ngày lên Pro</th>
                            <th>Ngày hết Pro</th>
                            <th>Tình trạng</th> 
                            <?php if ($usertype == 1): ?>
                                <th>Tặng tiền</th>
                            <?php endif; ?>
                            <th>Setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list_user as $value): ?>

                            <tr>
                                <td><input type="checkbox" name="chk1[]"  value="<?php echo $value->id ?>"></td>
                                <td><?php echo $value->id ?></td>
                                <td><a
                                        href="<?php echo site_url('admincp/profile/' . $value->id); ?>">
                                            <?php echo '{' . $value->uname . '} ' . $value->uemail ?>
                                    </a></td>
                                <td><?php echo number_format($value->balance); ?> đ </td>
                                <td><?php echo $value->udate ?></td>
                                <td><?php echo $value->update_pakace_time ?></td>
                                <td><?php echo $value->update_pakace_endtime ?></td>
                                <td>
                                    <?php if ($value->uactive == 1): ?>
                                        Đang hoạt động
                                    <?php elseif ($value->uactive == 2): ?>
                                        Chờ verify <a href="<?php echo site_url('system/active_user/'.$value->id);?>">Accept</a>
                                    <?php else: ?>
                                        Tạm khóa
                                    <?php endif; ?>
                                </td>
                                
                                <?php if ($usertype == 1): ?>
                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $("#bonusmoney_<?php echo $value->id; ?>").keydown(function (e) {
                                        // Allow: backspace, delete, tab, escape, enter and .
                                        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                                                // Allow: Ctrl+A
                                                        (e.keyCode == 65 && e.ctrlKey === true) ||
                                                        // Allow: Ctrl+C
                                                                (e.keyCode == 67 && e.ctrlKey === true) ||
                                                                // Allow: Ctrl+X
                                                                        (e.keyCode == 88 && e.ctrlKey === true) ||
                                                                        // Allow: home, end, left, right
                                                                                (e.keyCode >= 35 && e.keyCode <= 39)) {
                                                                    // let it happen, don't do anything
                                                                    return;
                                                                }
                                                                // Ensure that it is a number and stop the keypress
                                                                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                                                                    e.preventDefault();
                                                                }
                                                            });
                                                });
                            </script>
                            <td>
                                <input type="hidden" id="userid_bonus_<?php echo $value->id; ?>" value="<?php echo $value->id; ?>" />
                                <input type="text" style='height:25px; width: 100px;' onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="0" id="bonusmoney_<?php echo $value->id; ?>">
                                <input type="button" id="btt_bonus_<?php echo $value->id; ?>" class="btt_bonus" value="Bonus" />
                            </td>
                            <script type="text/javascript">
                                        $('#btt_bonus_<?php echo $value->id; ?>').on('click', function () {
                                            var userid = document.getElementById("userid_bonus_<?php echo $value->id; ?>").value;
                                            var amount = document.getElementById("bonusmoney_<?php echo $value->id; ?>").value;
                                            $.ajax({
                                                url: '<?php echo site_url("ajax/bonus_money"); ?>' + "/" + userid + '/' + amount,
                                                type: 'post',
                                                success: function (response) {
                                                    alert("Bonus thành công !");
                                                    location.reload(true);
                                                }
                                            });
                                        });
                            </script>
                        <?php endif; ?>
                        <td> 
                            <a  href="<?php echo site_url('admin/users/delete/' . trim($value->id)); ?>">
                                Xoá </a>    
                        </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                    <?php echo form_close(); ?>
                <?php else: ?>
                    <?php echo $this->lang->line('no_result'); ?>
                <?php endif; ?>
            </table>
            <hr>
        </div>
    </div>

</div>

<script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>

