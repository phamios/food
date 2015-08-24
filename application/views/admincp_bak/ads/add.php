 
<div class="main-inner">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="widget ">
                    <div class="widget-content">
                        <div class="tab-pane" id="formcontrols"> 
                            <?php echo form_open_multipart('admincp/create_ads', array("class" => "form-horizontal", "id" => "edit-profile")); ?>
                            <fieldset>
                                
                                <div class="form-actions">
                                    <label>Link của banner</label>
                                    <input style="height: 30px;" type="text" value="" name="banner_url" />
                                </div>
                                
                                <div class="form-actions">
                                    <label>Ảnh ( có thể chọn nhiều ảnh )</label>

                                    <div id="viewimage"></div>
                                    <input id="sortpicture" type="file" name="sortpic" />

                                    <span id="upload" class="btn btn-success btn-lg"><i class="glyphicon glyphicon-ok"></i> Upload</span>

                                    <script type="text/javascript">
                                        $('#upload').on('click', function () {
                                            var file_data = $('#sortpicture').prop('files')[0];
                                            var form_data = new FormData();
                                            form_data.append('file', file_data)
                                            $.ajax({
                                                url: '<?php echo site_url("system/uploadbanner_timnhathau"); ?>', // point to server-side PHP script 
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
                                
                                 <div class="form-actions">
                                    <label>Link của banner</label>
                                   <select name="banner_active">
                                       <option value="1"> Hiển thị  </option>
                                       <option value="0"> Ẩn </option>
                                   </select>
                                </div>



                                <div class="form-actions">
                                    <button type="submit" name="btt_add" class="btn btn-primary">Save</button>
                                </div>
                            </fieldset>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
