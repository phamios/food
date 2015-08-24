<?php foreach ($list_work as $work): ?>
    <div class="row user-infos cyruxx">
        <div
            class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
            <div class="panel panel-primary">
                <?php echo form_open_multipart('admincp/details_work/' . $work->id, array("class" => "form-horizontal", "id" => "edit-profile")); ?>
                <div class="panel-body">
                    <div class="row">
                        <?php echo $result; ?>
                        <div class=" col-md-9 col-lg-9 hidden-xs hidden-sm">
                            <table class="table table-user-information">
                                <tbody>
                                    <tr>
                                        <td>Lượng người Bid hiện tại:</td>
                                        <td> <?php echo $work->static_now; ?>  bid </td>
                                    </tr>
                                    <tr>
                                        <td>Người tạo:</td>
                                        <td> 
                                            <?php foreach ($list_homeowner as $home): ?>
                                                <?php if ($home->id == $work->master_id): ?>
                                                    <?php echo $home->uemail; ?>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jobs:</td>
                                        <td><select name="contractor"> 
                                                <?php foreach ($list_contractor as $contractor): ?> 
                                                    <option
                                                    <?php if ($contractor->id == $work->contractor_id): ?>
                                                            selected="selected" <?php endif; ?>
                                                        value="<?php echo $contractor->id; ?>"><?php echo $contractor->name; ?></option>
                                                    <?php endforeach; ?>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td>Task:</td>
                                        <td><select name="jobs"> 
                                                <?php foreach ($list_jobs as $jobs): ?>
                                                    <option
                                                    <?php if ($jobs->id == $work->job_id): ?>
                                                            selected="selected" <?php endif; ?>
                                                        value=" <?php echo $jobs->id; ?>"> <?php echo $jobs->name; ?></option>
                                                    <?php endforeach; ?>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td>Ngày đăng</td>
                                        <td> <?php echo $work->post_date; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Vị trí</td>
                                        <td><select name="location">
                                                <?php foreach ($list_location as $location): ?>
                                                    <option
                                                        value="<?php echo $location->id; ?>"
                                                        <?php if ($location->id == $work->locationid): ?>
                                                            selected="selected" <?php endif; ?>>
                                                            <?php echo $location->location_name; ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td>Vị trí</td>
                                        <td><select name="sub_location">
                                                <?php foreach ($sublocation as $sub): ?>
                                                    <option
                                                        value="<?php echo $sub->id; ?>"
                                                        <?php if ($sub->id == $work->sub_locationid): ?>
                                                            selected="selected" <?php endif; ?>>
                                                            <?php echo $sub->sub_name; ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>

                                        </td>
                                    </tr>


                                    <tr>
                                        <td>Giá thầu</td>
                                        <td><select name="cost">
                                                <?php foreach ($list_cost as $cost): ?>
                                                    <option
                                                        value="<?php echo $cost->id; ?>"
                                                        <?php if ($cost->id == $work->cost): ?> selected="selected"
                                                        <?php endif; ?>>
                                                            <?php echo $cost->cost_amount ?> 
                                                    </option>
                                                <?php endforeach; ?> 
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td>Mức giá xem thầu</td>
                                        <td><select name="cost_rate" id="cost_rate">
                                                <?php foreach ($list_cost as $cost): ?>
                                                    <option
                                                        value="<?php echo $cost->cost_rate; ?>"
                                                        <?php if ($cost->cost_rate == $work->cost_id): ?> selected="selected"
                                                        <?php endif; ?>>
                                                            <?php echo number_format($cost->cost_rate); ?> 
                                                    </option>
                                                <?php endforeach; ?> 
                                            </select>
                                            <script type="text/javascript">
                                                $('#cost_rate').on('change', function () {
                                                    var amount = document.getElementById("cost_rate").value; 
                                                    $.ajax({
                                                        url: '<?php echo site_url("ajax/update_cost_rate"); ?>' + "/" + <?php echo $work->id ?> + '/' + amount,
                                                        type: 'post',
                                                        success: function (response) {
                                                            alert("Thay đổi thành công !");
                                                            location.reload(true);
                                                        }
                                                    });
                                                });
                                            </script>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Nội dung yêu cầu</td>
                                        <td><textarea name="job_require">  <?php echo $work->job_requirements; ?> </textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Điện thoại liên hệ:</td>
                                        <td><input style="height: 30px;" type="text"
                                                   name="phonecontact" value="<?php echo $work->phone_contact ?>"></td>
                                    </tr>

                                    <tr>
                                        <td>Thời gian liên hệ</td>
                                        <td>
                                            <select name="contact_time">
                                                <option <?php if ($work->jobcontacttime == 1): ?>selected="selected"<?php endif; ?> value="1">Sáng(8:00am - 12pm)</option>
                                                <option <?php if ($work->jobcontacttime == 2): ?>selected="selected"<?php endif; ?> value="2">Trưa-Chiều (12pm to 6 pm)</option>
                                                <option <?php if ($work->jobcontacttime == 3): ?>selected="selected"<?php endif; ?> value="3">Tối (6pm - 9 pm)</option>
                                            </select>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Các thành viên đấu thầu </td>
                                        <td>
                                            <?php foreach ($list_worker as $worker): ?>
                                                <?php foreach ($worker_bidded as $bid): ?>
                                                    <?php if ($worker->id == $bid->workerid): ?>
                                                        <a href="<?php echo site_url('admincp/profile/' . $worker->id); ?>"><?php echo $worker->uemail; ?></a><br/>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            <?php endforeach; ?>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
                <div class="panel-footer">
                    <a class="btn btn-sm btn-primary" data-toggle="tooltip"
                       data-original-title="Send message to user">Thông tin gói thầu</a> <span
                       class="pull-right">
                        <button class="btn btn-sm btn-warning" type="submit" name="btt_edit">
                            <i class="glyphicon glyphicon-edit"> Save</i>
                        </button>
                        <a href="<?php echo site_url('admincp/del_work/' . $work->id); ?>" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"> </i>Delete</a>

                    </span>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>

<?php endforeach; ?>
