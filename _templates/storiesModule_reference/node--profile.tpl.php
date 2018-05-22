<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix" <?php print $attributes; ?> >
  <div class="content clearfix"<?php print $content_attributes; ?>>
    <div class="profile-item">
      <div class="profile-image">
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
      <div class="profile-title-box">
        <div class="profile-title"><h2><?php print($title);?></h2></div> 
        <div class="profile-subtitle"><h3><?php $field= field_get_items('node', $node, 'profile_subtitle');print $field[0]['value'];?></h3></div>
      </div>
      <div class="profile-body"><?php print $body[0]['value']; ?></div>
    </div>
  
    <div class="profile-preview">
      <a href="/node/<?php echo $nid;?>">
        <div class="profile-image"">
          <?php //
            $image = field_get_items('node', $node, 'profile_featuredimage');
            $output = field_view_value('node', $node, 'profile_featuredimage', $image[0], array(
              'type' => 'image',
              'settings' => array(
                'image_style' => 'focus_style',
              ),
            ));
            print render ($output);
          ?>
        </div>
      </a>
      <?php $field=field_get_items('node',$node,'profile_topic');foreach($field as $key=>$value){ $name = $value['taxonomy_term']->name;$tid = $value['taxonomy_term']->tid;print'<a href="/taxonomy/term/'.$tid.'" class="profile-topic">'.$name.'</a>';} ?>
      <a href="/node/<?php echo $nid;?>" class="profile-title"><h2><?php print($title);?></h2></a> 
      <div class="profile-body"><?php print $body[0]['summary']; ?></div>
      <div class="profile-prm">
        <a href="/node/<?php echo $nid;?>">Read more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
      </div>
    </div>
    
    <div class="profile-preview profile-preview-alt">
      <a href="/node/<?php echo $nid;?>">
        <div class="profile-image">
          <?php //
            $image = field_get_items('node', $node, 'profile_featuredimage');
            $output = field_view_value('node', $node, 'profile_featuredimage', $image[0], array(
              'type' => 'image',
              'settings' => array(
                'image_style' => 'focus_style',
              ),
            ));
            print render ($output);
          ?>
        </div>
      </a>
      <div class="profile-info">
        <a href="/node/<?php echo $nid;?>" class="profile-title"><h2><?php print($title);?></h2></a> 
        <div class="profile-subtitle"><?php $field= field_get_items('node', $node, 'profile_subtitle');print $field[0]['value'];?></div>
      </div>
    </div>
    
    <div class="profile-featured featured-item">
      <div class="profile-image">
        <?php //
          $image = field_get_items('node', $node, 'profile_featuredimage');
          $output = field_view_value('node', $node, 'profile_featuredimage', $image[0], array(
            'type' => 'image',
            'settings' => array(
              'image_style' => 'focus_style',
            ),
          ));
          print render ($output);
        ?>
      <div class="profile-label">
          <?php $field=field_get_items('node',$node,'profile_topic');foreach($field as $key=>$value){ $name = $value['taxonomy_term']->name;$tid = $value['taxonomy_term']->tid;print'<a href="/taxonomy/term/'.$tid.'" class="profile-topic">'.$name.'</a>';} ?>
          <a href="/node/<?php echo $nid;?>" class="profile-title"><h2 class="item-title"><?php print($title);?></h2></a>
        </div>
      </div>
      <div class="featured-body-container">
        <div class="profile-body"><?php print $body[0]['summary']; ?></div>
        <div class="profile-prm">
          <a href="/node/<?php echo $nid;?>">Read more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    
  </div>
</div>
