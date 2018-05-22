<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix" <?php print $attributes; ?> >
  <div class="content clearfix"<?php print $content_attributes; ?>>
    
    <div class="outcome-item">
      <div class="outcome-image">
        <?php //
          $image = field_get_items('node', $node, 'outcome_featuredimage');
          $output = field_view_value('node', $node, 'outcome_featuredimage', $image[0], array(
            'type' => 'image',
            'settings' => array(
              'image_style' => 'focus_style',
            ),
          ));
          print render ($output);
        ?>
      </div>
      <div class="node-share-container">
        <div class="node-share-item"><a class="twitter-share-button" id="node-share-tw" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
        <div class="node-share-item"><a id="node-share-fb" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
        <div class="node-share-item"><a id="node-share-em" href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></div>
      </div>
      <div class="outcome-title-box">
        <div class="outcome-title"><h2><?php print($title);?></h2></div> 
      </div>
      <div class="outcome-publish-info">
        <p class="outcome-publish-info-author"><?php echo "<strong>BY</strong> "; $field= field_get_items('node', $node, 'outcome_authorname');print $field[0]['value'];?></p>
        <p class="outcome-publish-info-date"><?php echo "<strong>PUBLISHED ON</strong> "; echo date("M d Y", $node->created); ?></p>
      </div>
      <div class="outcome-body"><?php print $body[0]['value']; ?></div>
    </div>
    
    <div class="outcome-preview">
      <a href="/node/<?php echo $nid;?>">
        <div class="outcome-image">
          <?php //
            $image = field_get_items('node', $node, 'outcome_featuredimage');
            $output = field_view_value('node', $node, 'outcome_featuredimage', $image[0], array(
              'type' => 'image',
              'settings' => array(
                'image_style' => 'focus_style',
              ),
            ));
            print render ($output);
          ?>
        </div>
      </a>
      <a href="/node/<?php echo $nid;?>" class="outcome-title"><h2><?php print($title);?></h2></a> 
      <div class="outcome-body"><?php print $body[0]['summary']; ?></div>
      <div class="outcome-prm">
        <a href="/node/<?php echo $nid;?>">Read more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
      </div>
    </div>
    
    <div class="outcome-featured featured-item">
      <div class="outcome-image">
        <?php //
          $image = field_get_items('node', $node, 'outcome_featuredimage');
          $output = field_view_value('node', $node, 'outcome_featuredimage', $image[0], array(
            'type' => 'image',
            'settings' => array(
              'image_style' => 'focus_style',
            ),
          ));
          print render ($output);
        ?>
      <div class="outcome-label">
          <a href="/node/<?php echo $nid;?>" class="outcome-title"><h2 class="item-title"><?php print($title);?></h2></a>
        </div>
      </div>
      <div class="featured-body-container">
        <div class="outcome-body"><?php print $body[0]['summary']; ?></div>
        <div class="outcome-prm">
          <a href="/node/<?php echo $nid;?>">Read more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    
  </div>
</div>
