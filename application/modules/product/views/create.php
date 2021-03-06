 
<script type="text/javascript" src="<?php echo base_url('js'); ?>/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: "textarea",
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor"
        ],
    });
</script>

<div class="row">
    <?php echo form_open_multipart('product/create_new'); ?>
    <div class="col-md-8">
        <br>
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane active in" id="home">

                <div class="form-group">
                    <label><?php echo $this->lang->line('proname'); ?></label>
                    <input name="proname" type="text"   class="form-control">
                </div>

                <div class="form-group">
                    <label><?php echo $this->lang->line('mainprice'); ?></label>
                    <input name="mainprice" type="text"   class="form-control">
                </div>

                <div class="form-group">
                    <label><?php echo $this->lang->line('secondprice'); ?></label>
                    <input name="secondprice" type="text"    class="form-control">
                </div>

                <div class="form-group">
                    <label><?php echo $this->lang->line('prodes'); ?></label>
                    <textarea name="prodes"   class="form-control">Sản phẩm </textarea>
                </div>
                <div class="form-group">
                    <label>Ảnh sản phẩm</label> 
                    <div id="viewimage"></div>
                    <input id="sortpicture" type="file" name="sortpic" /> 
                    <span id="upload" class="btn btn-success btn-lg"><i class="glyphicon glyphicon-ok"></i> Upload</span>
                    <script type="text/javascript">
                        $('#upload').on('click', function () {
                            var file_data = $('#sortpicture').prop('files')[0];
                            var form_data = new FormData();
                            form_data.append('file', file_data)
                            $.ajax({
                                url: '<?php echo site_url("product/uploadimage"); ?>', // point to server-side PHP script 
                                dataType: 'text', // what to expect back from the PHP script, if anything
                                cache: false,
                                contentType: false,
                                processData: false,
                                data: form_data,
                                type: 'post',
                                success: function (php_script_response) {
                                    $("#viewimage").append(php_script_response);
                                }
                            });
                        });
                    </script>
                </div>


                <div class="form-group">
                    <label><?php echo $this->lang->line('proorder'); ?></label>
                    <input name="proorder" type="text"  value="0"  class="form-control">
                </div>
                <div class="form-group">
                    <label><?php echo $this->lang->line('protypeid'); ?></label>
                    <select name="protypeid" id="catedispay" class="form-control">
                        <option value="5" selected="selected"></option>
                        <option value="1"  >Hot</option>
                        <option value="2"  >Khuyến mại </option>
                        <option value="3"  >Giảm giá </option>
                        <option value="4"  >Giờ vàng</option>
                    </select>
                </div>

                <div class="form-group">
                    <label><?php echo $this->lang->line('procateid'); ?></label>
                    <select name="procateid" id="cateroot" class="form-control">
                        <option value="0" selected="selected">------</option>
                        <?php if ($list_category <> null): ?>
                            <?php foreach ($list_category as $cateroot): ?>
                                <option value="<?php echo $cateroot->id ?>"><?php echo $cateroot->catename ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label><?php echo $this->lang->line('proactive'); ?></label>
                    <select name="proactive" id="cateactive" class="form-control">
                        <option value="0" > Unactive</option>
                        <option value="1" selected="selected"  >Active</option>
                    </select>
                </div>

            </div>


        </div>

        <div class="btn-toolbar list-toolbar">
            <button class="btn btn-primary" name="btt_submit" type="submit"><i class="fa fa-save"></i> 
                <?php echo $this->lang->line('save'); ?>
            </button>

            <a href="#myModal" data-toggle="modal" class="btn btn-danger">
                <?php echo $this->lang->line('delete'); ?>
            </a>
        </div>
    </div>


    <div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Delete Confirmation</h3>
                </div>
                <?php if (isset($id)): ?>
                    <div class="modal-body">
                        <p class="error-text">
                            <i class="fa fa-warning modal-icon"></i>
                            Are you sure you want to delete the user?
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">
                            <?php echo $this->lang->line('cancel'); ?>
                        </button>
                        <button class="btn btn-danger" data-dismiss="modal">
                            <?php echo $this->lang->line('delete'); ?>
                        </button>
                    </div>
                <?php else: ?>
                    <div class="modal-body">
                        <p class="error-text">
                            <i class="fa fa-warning modal-icon"></i>
                            <?php echo $this->lang->line('can_not_delete'); ?>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">
                            <?php echo $this->lang->line('ok'); ?>
                        </button> 
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

</div>

<?php echo form_close(); ?>