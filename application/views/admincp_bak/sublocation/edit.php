<div class="main"> 
    <div class="main-inner"> 
        <div class="container"> 
            <div class="row"> 
                <div class="span12">       
                    <div class="widget "> 
                        <div class="widget-content">
                            <?php foreach ($location_details as $location): ?>
                                <div class="tab-pane" id="formcontrols"> 
                                    <?php echo form_open_multipart('admin/location/edit_sublocation/' . $location->id, array("class" => "form-horizontal", "id" => "edit-profile")); ?>
                                    <fieldset> 
                                        
                                        <div class="control-group">											
                                            <label class="control-label" for="firstname">Tên Thành phố</label>
                                            <div class="controls">
                                                <select name="locationid">
                                                    <?php foreach ($list_all_location as $value): ?>
                                                    <option <?php if($value->id == $location->locationid):?> selected="selected" <?php endif;?> value="<?php echo $value->id; ?>"><?php echo $value->location_name; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>  				
                                        </div>  

                                        <div class="control-group">											
                                            <label class="control-label" for="firstname">Tên Quận huyện, tỉnh</label>
                                            <div class="controls">
                                                <input type="text" class="span6" name='name' id="firstname" value="<?php echo $location->sub_name;; ?>">
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