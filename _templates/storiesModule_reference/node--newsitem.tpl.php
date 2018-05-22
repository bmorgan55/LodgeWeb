<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix" <?php print $attributes; ?> >
  <div class="content clearfix"<?php print $content_attributes; ?>>

    <div class="newsitem-item">
      <div class="newsitem-image">
        <?php //
          $image = field_get_items('node', $node, 'newsitem_featuredimage');
          $output = field_view_value('node', $node, 'newsitem_featuredimage', $image[0], array(
            'type' => 'image',
            'settings' => array(
              'image_style' => 'focus_style',
            ),
          ));
          print render ($output);
        ?>
      </div>
      <div class="newsitem-title-box">
        <?php $field=field_get_items('node',$node,'newsitem_topic');foreach($field as $key=>$value){ $name = $value['taxonomy_term']->name;$tid = $value['taxonomy_term']->tid;print'<a href="/taxonomy/term/'.$tid.'" class="newsitem-topic">'.$name.'</a>';} ?>
        <h2 class="newsitem-title"><?php print($title);?></h2>     
      </div>
      <div class="newsitem-publish-info">
        <p class="newsitem-publish-info-author"><?php echo "<strong>BY</strong> "; $field= field_get_items('node', $node, 'newsitem_authorname');print $field[0]['value'];?></p>
        <p class="newsitem-publish-info-date"><?php echo "<strong>PUBLISHED ON</strong> "; echo date("M d Y", $node->created); ?></p>
      </div>
      <div class="newsitem-body"><?php print $body[0]['value']; ?></div>
    </div>
    
    <div class="newsitem-preview">
      <a href="/node/<?php echo $nid;?>">
        <div class="newsitem-image">
          <?php //
            $image = field_get_items('node', $node, 'newsitem_featuredimage');
            $output = field_view_value('node', $node, 'newsitem_featuredimage', $image[0], array(
              'type' => 'image',
              'settings' => array(
                'image_style' => 'focus_style',
              ),
            ));
            print render ($output);
          ?>
        </div>
      </a>
      <?php $field=field_get_items('node',$node,'newsitem_topic');foreach($field as $key=>$value){ $name = $value['taxonomy_term']->name;$tid = $value['taxonomy_term']->tid;print'<a href="/taxonomy/term/'.$tid.'" class="newsitem-topic">'.$name.'</a>';} ?>
      <a href="/node/<?php echo $nid;?>" class="newsitem-title"><h2><?php print($title);?></h2></a> 
      <div class="newsitem-body"><?php print $body[0]['summary']; ?></div>
      <div class="newsitem-prm">
        <?php echo "<em>"; echo date("M d Y", $node->created); echo "</em>"?>
        <a href="/node/<?php echo $nid;?>">Read more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
      </div>
    </div>
    
    <div class="newsitem-featured featured-item">
      <div class="newsitem-image">
        <?php //
          $image = field_get_items('node', $node, 'newsitem_featuredimage');
          $output = field_view_value('node', $node, 'newsitem_featuredimage', $image[0], array(
            'type' => 'image',
            'settings' => array(
              'image_style' => 'focus_style',
            ),
          ));
          print render ($output);
        ?>
        <div class="newsitem-label">
          <?php $field=field_get_items('node',$node,'newsitem_topic');foreach($field as $key=>$value){ $name = $value['taxonomy_term']->name;$tid = $value['taxonomy_term']->tid;print'<a href="/taxonomy/term/'.$tid.'" class="newsitem-topic">'.$name.'</a>';} ?>
          <a href="/node/<?php echo $nid;?>" class="newsitem-title"><h2 class="item-title"><?php print($title);?></h2></a>
        </div> 
      </div>
      <div class="featured-body-container">
        <div class="newsitem-body"><?php print $body[0]['summary']; ?></div><!--
        --><div class="newsitem-prm">
          <?php echo "<em>Published on "; echo date("M d Y", $node->created); echo "</em>"?>
          <a href="/node/<?php echo $nid;?>">Read more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>

    
  </div>
</div>