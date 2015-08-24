<?php foreach ($user_details as $user): ?>
    <div class="row user-infos cyruxx">
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $user_name . ' - ' . $user_email; ?> </h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 hidden-xs hidden-sm">
                            <img class="img-circle"
                                 src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100"
                                 alt="User Pic">
                        </div>
                        <div class="col-xs-2 col-sm-2 hidden-md hidden-lg">
                            <img class="img-circle"
                                 src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=50"
                                 alt="User Pic">
                        </div>

                        <div class=" col-md-9 col-lg-9 hidden-xs hidden-sm"> 
                            <table class="table table-user-information">
                                <tbody>
                                    <tr>
                                        <td>Loại gói</td>
                                        <td>
                                            <select name="user_pakage" id="user_pakage" class="user_pakage">
                                                <option value="1" <?php if ($user->upakage == 1): ?> selected="selected" <?php endif; ?> > FREE </option>
                                                <option value="2" <?php if ($user->upakage == 2): ?> selected="selected" <?php endif; ?>> PRO </option>
                                            </select>
                                            <input type="hidden" id="userpakagenow" class="userpakagenow" value="<?php echo $user->upakage; ?>" />
                                            <script type="text/javascript">
                                                $('#user_pakage').on('change', function () {
                                                    var userid = "<?php echo $user->id; ?>";
                                                    var amount = document.getElementById("userpakagenow").value;
                                                    $.ajax({
                                                        url: '<?php echo site_url("ajax/change_pakage"); ?>' + "/" + userid + '/' + amount,
                                                        type: 'post',
                                                        success: function (response) {
                                                            alert("Cập nhật thành công !");
                                                            location.reload(true);
                                                        }
                                                    });
                                                });
                                            </script>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ngày nâng cấp gói</td>
                                        <td><?php echo $user->update_pakace_time?></td>
                                    </tr>
                                    <tr>
                                        <td>Tổng Points</td>
                                        <td><h3><?php echo $user->upoint; ?></h3></td>
                                    </tr>
                                    <tr>
                                        <td>Loại thành viên:</td>
                                        <td>
                                            <?php if ($user->utype == 1): ?>
                                                Nhà thầu ( contractor )
                                            <?php endif ?>
                                            <?php if ($user->utype == 2): ?>
                                                Chủ nhà ( homewoner )
                                            <?php endif ?>
                                            <?php if ($user->utype == 0): ?>
                                                Admin
                                            <?php endif ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Tên thành viên</td>
                                        <td><?php echo $user->uname.'('.$user->ufirstname . ' ' . $user->ulastname.')'; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><?php echo $user->uemail ?></td>
                                    </tr>
                                    <tr>
                                        <td>Phone</td>
                                        <td><?php echo $user->uphone ?></td>
                                    </tr>
                                    <tr>
                                        <td>Ngày tham gia:</td>
                                        <td><?php echo $user->udate ?></td>
                                    </tr>
                                    <tr>
                                        <td>Balance</td>
                                        <td><font color="red"><?php echo number_format($user->balance); ?> đ </font>

                                            <?php if ($user->utype == 1): ?>
                                                <script type="text/javascript">
                                                    $(document).ready(function () {
                                                        $("#bonusmoney_<?php echo $user->id; ?>").keydown(function (e) {
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
                                                &nbsp;
                                                <input type="hidden" id="userid_bonus_<?php echo $user->id; ?>" value="<?php echo $user->id; ?>" />
                                                <input type="text" style="height:25px; width:90px; onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="0" id="bonusmoney_<?php echo $user->id; ?>">
                                                <input type="button" id="btt_bonus_<?php echo $user->id; ?>" class="btt_bonus" value="Bonus" />

                                                <script type="text/javascript">
                                                            $('#btt_bonus_<?php echo $user->id; ?>').on('click', function () {
                                                                var userid = document.getElementById("userid_bonus_<?php echo $user->id; ?>").value;
                                                                var amount = document.getElementById("bonusmoney_<?php echo $user->id; ?>").value;
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
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Địa chỉ</td>
                                        <td><?php echo $user->uaddress ?></td>
                                    </tr>
                                    <tr>
                                        <td>Công ty</td>
                                        <td><?php echo $user->ucompany; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Mã số công ty / Mã số cá nhân</td>
                                        <td><?php echo $user->ucompany_id; ?></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <a href="<?php echo site_url('home/account/'.$user->id);?>"
                       data-original-title="Send message to user">Thông tin cá nhân thành viên</a>
                    <span class="pull-right">
                        <button class="btn btn-sm btn-warning" type="button"
                                data-toggle="tooltip"
                                data-original-title="Edit this user"><i class="glyphicon glyphicon-edit"></i></button>
                        <button class="btn btn-sm btn-danger" type="button"
                                data-toggle="tooltip"
                                data-original-title="Remove this user"><i class="glyphicon glyphicon-remove"></i></button>
                    </span>
                </div>
            </div>
        </div>
    </div>

<?php endforeach; ?>
