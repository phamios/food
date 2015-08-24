<div class="main"> 
    <div class="main-inner"> 
        <div class="container"> 
            <div class="row"> 
                <div class="span12">       
                    <div class="widget "> 
                        <div class="widget-content">
                            <?php foreach($location_details as $location):?>
                            <div class="tab-pane" id="formcontrols"> 
                                <?php echo form_open_multipart('admin/location/edit_location/'.$location->id, array("class" => "form-horizontal", "id" => "edit-profile")); ?>
                                <fieldset> 
                                    <div class="control-group">											
                                        <label class="control-label" for="firstname">Tên contractor</label>
                                        <div class="controls">
                                            <input type="text" class="span6" name='name' id="firstname" value="<?php echo $location->location_name;?>">
                                        </div>  				
                                    </div>  
                                    <div class="form-actions">
                                        <button type="submit" name="btt_edit" class="btn btn-primary">Save</button>  
                                    </div>  
                                </fieldset>
                                <?php echo form_close(); ?>
                            </div> 
                            <?php endforeach;?>
                        </div> 
                    </div>  
                </div>  
            </div>   
        </div>  
    </div>  
</div>  