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
<div class="main-inner">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="widget ">
					<div class="widget-content">
						<div class="tab-pane" id="formcontrols"> 
                                <?php echo form_open_multipart('admin/page/add_page', array("class" => "form-horizontal", "id" => "edit-profile")); ?>
                                <fieldset>

								<div class="control-group">
									<label class="control-label" for="firstname">Loại page</label>
									<div class="controls">
										<select name="page_type">
											<option value="0">----- Lựa chọn ---</option>
											<option value="1">Giới thiệu homeowner</option>
											<option value="5">Giới thiệu contractor</option>
											<option value="2">Về chúng tôi</option>
											<option value="3">Hướng dẫn Homeowner</option>
											<option value="4">Hướng dẫn Contractor</option>
											<option value="6">Bảng giá</option>
											<option value="7">Liên hệ</option> 
											<option value="8">Đăng việc</option> 
											<option value="9">Lưu ý</option> 
											<option value="10">Hỏi đáp cho chủ nhà</option>
											<option value="11">Đăng ký nhà thầu</option>
											<option value="12">Hỏi đáp cho nhà thầu</option> 
                                                                                        <option value="13">Báo giá nạp tiền</option> 
                                                                                        <option value="14">Hướng dẫn chủ nhà </option> 
                                                                                        <option value="15">Hướng dẫn nhà thầu</option> 
                                                                                        
										</select>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="firstname">Tiêu đề</label>
									<div class="controls">
										<input type="text" class="span6" name='page_title' id="firstname"
											value="">
									</div>
								</div>
								
								<div class="control-group">
									<label class="control-label" for="firstname">Nội dung</label>
									<div class="controls">
										 <textarea name="page_des" id="page_des"  class="form-control"></textarea> 
									</div>
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
