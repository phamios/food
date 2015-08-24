<div class="main">

    <div class="main-inner">

        <div class="container">

            <div class="row">	      	

                <div class="span12"> 
                    <?php foreach ($details_payment as $values): ?> 
                        <?php echo form_open_multipart('admincp/nganluong/' . $values->id); ?> 
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane active in" id="home">  
                                <div class="form-group">
                                    <label>Tên tài khoản</label>
                                    <input name="payment_email" type="text" value="<?php echo $values->payment_email ?>"   class="form-control">
                                </div> 
                                <div class="form-group">
                                    <label>Loại thanh toán</label>
                                    <input name="payment_name" type="text" value="<?php echo $values->payment_name_type ?>"   class="form-control">
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


