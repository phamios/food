<script type="text/javascript" src="<?php echo base_url('js'); ?>/tinymce/tinymce.min.js"></script> 
<script type="text/javascript">

    tinymce.init({
        selector: "textarea", 
        theme: "modern", 
        theme_advanced_font_sizes: "6px,7px,8px,9px,10px,12px,13px,14px,16px,18px,20px",
        font_size_style_values: "6px,7px,8px,9px,10px,12px,13px,14px,16px,18px,20px",
        
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern",
            "insertdatetime media table contextmenu paste jbimages"
        ],
        // ===========================================
        // PUT PLUGIN'S BUTTON on the toolbar
        // ===========================================
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | link image jbimages",
    toolbar2: "sizeselect | bold italic | fontselect |  fontsizeselect | print preview media | forecolor backcolor emoticons",
    image_advtab: true,
        // ===========================================
        // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
        // ===========================================

        relative_urls: false

    });

</script>

<?php foreach ($list_product as $details): ?>
    <?php echo form_open_multipart('news/update/' . $details->id); ?>
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Thêm mới
                <div class="pull-right" >
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle btn-xs" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                            <span class="glyphicon glyphicon-cog"></span>
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url('admincp/content'); ?>">Quay lại</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel-body">

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane active in" id="home">

                        <div class="form-group">
                            <label><?php echo $this->lang->line('news_cateid'); ?></label>
                            <select name="news_cateid" id="cateroot" class="form-control">
                                <option value="0" selected="selected">------</option>
                                <?php if ($list_catenews <> null): ?>
                                    <?php foreach ($list_catenews as $cateroot): ?>
                                        <option value="<?php echo $cateroot->id ?>" <?php if ($details->news_cateid == $cateroot->id): ?> selected="selected" <?php endif; ?> >
                                            <?php echo $cateroot->catenewsname ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>IMAGES</label>

                            <div id="viewimage">
                                <?php foreach ($allimages as $image): ?> 

                                    <?php if ($image->newsid == $details->id): ?> 
                                        <div class="">
                                            <input type='hidden' value='<?php echo $image->id; ?>' name='file_exit' />
                                            <img width="20%" src="<?php echo base_url('uploads/' . $image->imagelink); ?>" width="80%"/>

                                        <?php endif; ?> 
                                    <?php endforeach; ?>
                                </div>
                                <input id="sortpicture" type="file" name="sortpic" />
                                
                                <input type='hidden' value='<?php echo $imageid; ?>' name='file_image_main' />

                                <span id="upload" class="btn btn-success btn-lg"><i class="glyphicon glyphicon-ok"></i> Upload</span>

                                <script type="text/javascript">
                                    $('#upload').on('click', function () {
                                        var file_data = $('#sortpicture').prop('files')[0];
                                        var form_data = new FormData();
                                        form_data.append('file', file_data)
                                        $.ajax({
                                            url: '<?php echo site_url("news/uploadimage"); ?>', // point to server-side PHP script 
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
                                <label><?php echo $this->lang->line('news_active'); ?></label>
                                <select name="news_active" id="cateactive" class="form-control">
                                    <option value="0" <?php if ($details->news_active == 0): ?> selected="selected" <?php endif; ?>> Unactive</option>
                                    <option value="1" <?php if ($details->news_active == 1): ?> selected="selected" <?php endif; ?>  >Active</option>
                                </select>
                            </div>
                        </div> 
                    </div> 

                </div>

            </div>
        </div>

        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-body">

                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane active in" id="home"> 
                            <div class="form-group">
                                <label><?php echo $this->lang->line('news_title'); ?></label>
                                <input name="news_title" type="text"  value="<?php echo $details->news_title ?>"  class="form-control">
                            </div>

                            <div class="form-group">
                                <label><?php echo $this->lang->line('news_short'); ?></label> 
                                <textarea name="news_short" id="news_short"   class="form-control"><?php echo $details->news_short ?></textarea>
                            </div>

                            <div class="form-group">
                                <label><?php echo $this->lang->line('news_des'); ?></label>
                                <textarea name="news_des" id="news_des"   class="form-control"><?php echo $details->news_des ?></textarea>

                            </div>
                        </div> 
                    </div> 
                    <div class="btn-toolbar list-toolbar">
                        <button class="btn btn-primary" name="btt_submit" type="submit"><i class="fa fa-save"></i> 
                            Lưu
                        </button>  
                    </div>   
                </div>

            </div>
        </div>

        <?php echo form_close(); ?>
    <?php endforeach; ?>


