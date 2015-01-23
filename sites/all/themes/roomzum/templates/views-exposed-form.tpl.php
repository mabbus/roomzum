<div class="row">
     <form class="ctools-auto-submit-full-form ctools-auto-submit-processed jquery-once-1-processed">
     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12 formItem">
       <div class="formField">
           <label><?php print $widgets['filter-city']->label;?></label>
           <?php print $widgets['filter-city']->widget; ?>
        </div>
     </div>

     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12 formItem">
       <div class="formField">
         <label><?php print $widgets['filter-field_bedrooms_tid']->label;?></label>
         <?php print $widgets['filter-field_bedrooms_tid']->widget;?>
       </div>
     </div>
     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12 formItem">
       <div class="formField">
         <?php print $widgets['filter-field_bathrooms_tid']->label; ?>
         <?php print $widgets['filter-field_bathrooms_tid']->widget; ?>        
       </div>
     </div>
     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12 formItem">
       <div class="formField">
         <?php print $widgets['filter-field_amenities_tid']->label; ?>
         <?php print $widgets['filter-field_amenities_tid']->widget; ?>        
       </div>
     </div>
     <input type="submit" id="edit-submit-roomzum-map" name="" value="Apply" class="form-submit">
</form>
</div>