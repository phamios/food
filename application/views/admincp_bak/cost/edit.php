<div class="main"> 
    <div class="main-inner"> 
        <div class="container"> 
            <div class="row"> 
                <div class="span12">       
                    <div class="widget "> 
                        <div class="widget-content">
                            <?php foreach ($details as $cost): ?>
                                <div class="tab-pane" id="formcontrols"> 
                                    <?php echo form_open_multipart('admin/cost/edit_cost/' . $cost->id, array("class" => "form-horizontal", "id" => "edit-profile")); ?>
                                    <fieldset> 
                                        <div class="control-group">											
                                            <label class="control-label" for="firstname">Khoảng giá</label>
                                            <div class="controls">
                                                <input type="text" class="span6" name='amount' id="firstname" value="<?php echo $cost->cost_amount; ?>">
                                            </div>  				
                                        </div>  
                                        <div class="control-group">											
                                            <label class="control-label" for="firstname">Phí phải trả</label>
                                            <div class="controls">
                                                <input type="text" class="span6" name='rate' id="firstname" value="<?php echo $cost->cost_rate; ?>">
                                            </div>  				
                                        </div>  
                                        <div class="form-actions">
                                            <button type="submit" name="btt_edit" class="btn btn-primary">Save</button>  
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