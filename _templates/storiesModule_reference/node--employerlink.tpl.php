<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix" <?php print $attributes; ?> >
  <div class="content clearfix"<?php print $content_attributes; ?>>
   
   <div class="employerlink-item">
     <div class="employerlink-image" style="background-image:url(../../sites/default/files/<?php $field= field_get_items('node', $node, 'employerlink_image');print $field[0]['filename'];?>);"></div>
     <a href="<?php $field= field_get_items('node', $node, 'employerlink_address');print $field[0]['value'];?>" class="employerlink-link">
       <?php $field= field_get_items('node', $node, 'employerlink_label');print $field[0]['value'];?>
     </a>
   </div>

  </div>
</div>


	
