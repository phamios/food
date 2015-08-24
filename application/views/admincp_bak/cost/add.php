<div class="main"> 
    <div class="main-inner"> 
        <div class="container"> 
            <div class="row"> 
                <div class="span12">       
                    <div class="widget "> 
                        <div class="widget-content"> 
                            <div class="tab-pane" id="formcontrols"> 
                                <?php echo form_open_multipart('admin/cost/add_cost', array("class" => "form-horizontal", "id" => "edit-profile")); ?>
                                <fieldset> 
                                    <div class="control-group">											
                                        <label class="control-label" for="firstname">Điền khoảng giá</label>
                                        <div class="controls">
                                            <input type="text" class="span6" name='amount' placeholder="1 triệu - 5 triệu" id="firstname" value="">
                                        </div>  				
                                    </div>  
                                    <div class="control-group">											
                                        <label class="control-label" for="firstname">Phí phải trả</label>
                                        <div class="controls">
                                            <input type="text" class="span6" name='rate' id="firstname"  placeholder="5000"/>
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
</div>  