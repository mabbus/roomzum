<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
<h3><?php print $title; ?></h3>
<?php endif; ?>
<?php $vars = get_defined_vars(); $results = $vars['view']->result;?>

<?php foreach ($results as $id => $row): ?>
<?php $entity = $row->_field_data['nid']['entity'];?>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 <?php if ($classes_array[$id]) { print $classes_array[$id];  } ?>">
    <a href="<?php print url('node/' . $row->nid); ?>" class="card">
      <div class="figure">
        <img src="<?php print image_style_url('featured_home', $entity->field_images['und'][0]['uri']);?>" />
        <div class="figCaption">
          <div>$<?php print '1,324';?></div>
        </div>
        <div class="figView"><span class="icon-eye"></span></div>      
      </div>
      <h2><?php print $entity->title;?></h2>
      <div class="cardAddress"><span class="icon-pointer"></span><?php print $entity->field_room_location['und'][0]['street'] . ' ' . $entity->field_room_location['und'][0]['city'] . ' ' . $entity->field_room_location['und'][0]['province'];?></div>
      <div class="cardRating">
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        (123)
      </div>
      <ul class="cardFeat">
        <li><span class="fa fa-moon-o"></span> 2</li>
        <li><span class="icon-drop"></span> 2</li>
        <li><span class="icon-frame"></span> 4430 Sq Ft</li>
      </ul>
    </a>
</div>
<?php endforeach; ?>