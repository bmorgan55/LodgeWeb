<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix" <?php print $attributes; ?> >
  <div class="content clearfix"<?php print $content_attributes; ?>>
    <div class="navigation-item">
      <a class="navigation-item-link" href="<?php $field= field_get_items('node', $node, 'navigationlink_address');print $field[0]['value'];?>">
	    <?php $field= field_get_items('node', $node, 'navigationlink_label');print $field[0]['value'];?>
      <?php 
        $field= field_get_items('node', $node, 'field_image');
        if(!empty($field)){ 
          print "<img alt='social-channel' role='presentation' class='navigation-image' style='width: 16px; height: auto;' src='../../sites/default/files/". $field[0]['filename'] ."'/>";
        } 
      ?>
      </a>
    </div>	
  </div>
</div>