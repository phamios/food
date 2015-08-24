<div class="main"> 
    <div class="main-inner"> 
        <div class="container"> 
            <div class="row"> 
                <div class="span12">     
                    <div class="widget "> 
                        <div class="widget-content">
                            <?php foreach ($details as $value): ?>
                                <div class="tab-pane" id="formcontrols"> 
                                    <?php echo form_open_multipart('admincp/edit_contractor/' . $value->id, array("class" => "form-horizontal", "id" => "edit-profile")); ?>
                                    <fieldset> 
                                        <div class="control-group">											
                                            <label class="control-label" for="firstname">Tên contractor</label>
                                            <div class="controls">
                                                <input type="text" class="span6" name='name' value="<?php echo $value->name; ?>" id="firstname" value="">
                                            </div>  			
                                        </div>  
                                        <div class="form-actions">
                                            <button type="submit" name="btt_add" class="btn btn-primary">Save</button>  
                                        </div>  
                                    </fieldset>
                                    <?php echo form_close(); ?>
                                </div> 
                            <?php endforeach; ?>
                        </div> 
                    </div> 
                </div>  
            </div> 
        </div> 
    </div> 
</div> 