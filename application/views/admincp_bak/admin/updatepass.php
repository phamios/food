<div class="main">

    <div class="main-inner">

        <div class="container">

            <div class="row">	      	

                <div class="span12"> 
                    <?php foreach ($profile as $values): ?>

                        <?php echo form_open_multipart('admincp/updatepass/' . $id); ?>

                        <br>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane active in" id="home"> 
                                <?php echo $notify; ?>
                                <div class="form-group">
                                    <label>Thay đổi mật khẩu</label>
                                    <input name="yourpassword" type="password" value="<?php echo $values->upass ?>"   class="form-control">
                                </div>

                            </div> 
                        </div>

                        <div class="btn-toolbar list-toolbar">
                            <button class="btn btn-primary" name="btt_submitedit" type="submit"><i class="fa fa-save"></i> 
                               Lưu
                            </button> 
                        </div>


                        <?php echo form_close(); ?>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</div>


