<div class="main"> 
    <div class="main-inner"> 
        <div class="container"> 
            <div class="row"> 
                <div class="span12">       
                    <div class="widget "> 
                        <div class="widget-content"> 
                            <div class="tab-pane" id="formcontrols"> 
                                <?php echo form_open_multipart('admin/location/add_sublocation', array("class" => "form-horizontal", "id" => "edit-profile")); ?>
                                <fieldset> 

                                    <div class="control-group">											
                                        <label class="control-label" for="firstname">Tên Thành phố</label>
                                        <div class="controls">
                                            <select name="locationid">
                                                <?php foreach ($list_all_location as $location): ?>
                                                <option value="<?php echo $location->id;?>"><?php echo $location->location_name;?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>  				
                                    </div>  


                                    <div class="control-group">											
                                        <label class="control-label" for="firstname">Tên Quận huyện, tỉnh</label>
                                        <div class="controls">
                                            <input type="text" class="span6" name='name' id="firstname" value="">
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