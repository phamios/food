<div class="main"> 
    <div class="main-inner"> 
        <div class="container"> 
            <div class="row"> 
                <div class="span12">       
                    <div class="widget "> 
                        <div class="widget-content"> 
                            <div class="tab-pane" id="formcontrols"> 
                                <?php foreach($list_time as $time):?>
                                <?php echo form_open_multipart('admincp/timeauto/1', array("class" => "form-horizontal", "id" => "edit-profile")); ?>
                                <fieldset> 
                                    <div class="control-group">											
                                        <label class="control-label" for="firstname">Thời gian (theo khung 24h)</label>
                                        <div class="controls">
                                            <input style="height: 30px;" type="text" class="span6" name='timeauto' placeholder="12" id="firstname" value="<?php echo $time->config_time; ?>" >
                                        </div>  				
                                    </div>  
                                     <div class="control-group">											
                                        <label class="control-label" for="firstname">Số phút</label>
                                        <div class="controls">
                                            <input style="height: 30px;" type="text" class="span6" name='minuteauto' id="firstname" value="<?php echo $time->config_minute?>" >
                                        </div>  				
                                    </div>  
                                     
                                    <div class="form-actions">
                                        <button type="submit" name="btt_edit" class="btn btn-primary"> Lưu </button>  
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