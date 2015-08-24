<div class="main"> 
    <div class="main-inner"> 
        <div class="container"> 
            <div class="row"> 
                <div class="span12">       
                    <div class="widget "> 
                        <div class="widget-content"> 
                            <div class="tab-pane" id="formcontrols"> 
                                 <?php foreach($deposit_details as $details):?>
                                <?php echo form_open_multipart('admincp/edit_deposit/'.$details->id, array("class" => "form-horizontal", "id" => "edit-profile")); ?>
                                <fieldset> 
                                    <div class="control-group">											
                                        <label class="control-label" for="firstname">Tên giá</label>
                                        <div class="controls">
                                            <input type="text" class="span6" name='deposit_name' id="firstname" value="<?php echo $details->deposit_name ?>">
                                        </div>  				
                                    </div>  
                                    <div class="control-group">											
                                        <label class="control-label" for="firstname">Số lượng tiền</label>
                                        <div class="controls">
                                            <input type="text" class="span6" name='deposit_amount' id="firstname" value="<?php echo $details->deposit_amount ?>">
                                        </div>  				
                                    </div> 
                                    <div class="control-group">											
                                        <label class="control-label" for="firstname">Tình trạng</label>
                                        <div class="controls">
                                            <select name="deposit_status">
                                                <option value="1" <?php if($details->active == 1):?>selected="selected" <?php endif; ?> >Hiện</option>
                                                <option value="2" <?php if($details->active == 2):?>selected="selected" <?php endif; ?>>Ẩn</option>
                                            </select>
                                        </div>  				
                                    </div> 
                                    <div class="form-actions">
                                        <button type="submit" name="btt_edit" class="btn btn-primary">Save</button>  
                                    </div>  
                                </fieldset>
                                <?php echo form_close(); ?>
                                 <?php endforeach;?>
                            </div> 
                        </div> 
                    </div>  
                </div>  
            </div>   
        </div>  
    </div>  
</div>  