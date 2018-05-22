<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix" <?php print $attributes; ?> >
  <div class="content clearfix"<?php print $content_attributes; ?>>
   
   <div class="videoitem-item">
     
    <video mute class="small-12" controls>
      <source src="../../sites/default/files/<?php $field = field_get_items('node', $node, 'videoitem_video');print $field[0]['filename'];?>" type="video/mp4">
    </video>
    
    <div class="videoitem-text">
      <div class="videoitem-title"><?php print $title;?></div>
      <p class="videoitem-body"><?php print $body[0]['value']; ?></p>
      <a class="videoitem-link" href="<?php $field= field_get_items('node', $node, 'videoitem_address');print $field[0]['value'];?>"><?php $field= field_get_items('node', $node, 'videoitem_label');print $field[0]['value'];?></a>
    </div>
     
   </div>

  </div>
</div>


	
