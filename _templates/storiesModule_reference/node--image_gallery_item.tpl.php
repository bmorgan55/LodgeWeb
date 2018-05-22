<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix" <?php print $attributes; ?> >
  <div class="content clearfix"<?php print $content_attributes; ?>>
   
   <div class="imagegalleryitem-item">
     <div class="imagegalleryitem-body">
       <?php $field= field_get_items('node', $node, 'body');print $field[0]['value'];?>
     </div>
     <div class="imagegalleryitem-image" style="background-image:url(../../sites/default/files/<?php $field= field_get_items('node', $node, 'field_image');print $field[0]['filename'];?>);"></div>
   </div>
   
   <div class="imagegalleryitem-preview">
     <div class="imagegalleryitem-image" style="background-image:url(../../sites/default/files/<?php $field= field_get_items('node', $node, 'field_image');print $field[0]['filename'];?>);"></div>
     <!--<img class="imagegalleryitem-image" src="/sites/default/files/<?php //$field= field_get_items('node', $node, 'field_image');print $field[0]['filename'];?>"/>-->
   </div>

  </div>
</div>


	
