<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix" <?php print $attributes; ?> >
  <div class="content clearfix"<?php print $content_attributes; ?>>
    
    <div class="magazinearticle-item">
      <div class="magazinearticle-image">
        <?php //
          $image = field_get_items('node', $node, 'magazinearticle_featuredimage');
          $output = field_view_value('node', $node, 'magazinearticle_featuredimage', $image[0], array(
            'type' => 'image',
            'settings' => array(
              'image_style' => 'focus_style',
            ),
          ));
          print render ($output);
        ?>
      </div>
      <div class="magazinearticle-title-box">
        <a href="/node/<?php echo $nid ?>" class="magazinearticle-title"><h2><?php print($title);?></h2></a> 
        <div class="magazinearticle-publish-info">
          <p class="magazinearticle-publish-info-author"><?php $field= field_get_items('node', $node, 'magazinearticle_authorname');print $field[0]['value'];?></p>
          <p class="magazinearticle-publish-info-author-title"><?php $field= field_get_items('node', $node, 'magazinearticle_authortitle');print $field[0]['value'];?></p>
          <p class="magazinearticle-publish-issue">
            <?php 
              $field = field_get_items('node', $node, 'magazinearticle_issue');
              $fieldValue = $field[0]['taxonomy_term']->name;
              print '<span>from</span> ' . $fieldValue;
            ?>
          </p>
        </div>
      </div>
      <div class="magazinearticle-body"><?php print $body[0]['value']; ?></div>
    </div>
    
    <div class="magazinearticle-preview">
      <a href="/node/<?php echo $nid;?>">
        <div class="magazinearticle-image">
          <?php //
              $image = field_get_items('node', $node, 'magazinearticle_featuredimage');
              $output = field_view_value('node', $node, 'magazinearticle_featuredimage', $image[0], array(
                'type' => 'image',
                'settings' => array(
                  'image_style' => 'focus_style',
                ),
              ));
              print render ($output);
            ?>
        </div>
      </a>
      <?php $field=field_get_items('node',$node,'magazinearticle_topic');foreach($field as $key=>$value){ $name = $value['taxonomy_term']->name;$tid = $value['taxonomy_term']->tid;print'<a href="/taxonomy/term/'.$tid.'" class="magazinearticle-topic">'.$name.'</a>';} ?>
      <a href="/node/<?php echo $nid;?>" class="magazinearticle-title"><h2><?php print($title);?></h2></a> 
      <div class="magazinearticle-body"><?php print $body[0]['summary']; ?></div>
      <p class="magazinearticle-author">
        <span>by </span><?php $field= field_get_items('node', $node, 'magazinearticle_authorname');print $field[0]['value'];?>
      </p>
      <div class="magazinearticle-prm">
        <p class="magazinearticle-issue">
          <span>from </span>
          <?php 
            $field = field_get_items('node', $node, 'magazinearticle_issue');
            $fieldValue = $field[0]['taxonomy_term']->name;
            print $fieldValue;
          ?>
        </p>
        <a href="/node/<?php echo $nid;?>">Read more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
      </div>
    </div>
    
    <div class="magazinearticle-featured featured-item">
      <div class="magazinearticle-image" >
        <?php //
          $image = field_get_items('node', $node, 'magazinearticle_featuredimage');
          $output = field_view_value('node', $node, 'magazinearticle_featuredimage', $image[0], array(
            'type' => 'image',
            'settings' => array(
              'image_style' => 'focus_style',
            ),
          ));
          print render ($output);
        ?>
        <div class="magazinearticle-label">
          <a href ="taxonomy/term/<?php $field= field_get_items('node', $node, 'magazinearticle_topic');$object = $field[0]['taxonomy_term']; print $object->tid;?>" class="magazinearticle-topic"><?php $field= field_get_items('node', $node, 'magazinearticle_topic');$object = $field[0]['taxonomy_term']; print $object->name?></a>
          <a href="node/<?php echo $nid?>" class="magazinearticle-title"><h2 class="item-title"><?php print($title);?></h2></a>
        </div>  
      </div>
      <div class="featured-body-container">
        <div class="magazinearticle-body"><?php print $body[0]['summary']; ?></div><!--
        --><div class="magazinearticle-prm">
          <?php echo "<em>Published on "; echo date("M d Y", $node->created); echo "</em>"?>
          <a href="node/<?php echo $nid;?>">Read more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    
    <div class="magazinearticle-featured-alt">
      <div class="magazinearticle-image" >
        <?php //
          $image = field_get_items('node', $node, 'magazinearticle_featuredimage');
          $output = field_view_value('node', $node, 'magazinearticle_featuredimage', $image[0], array(
            'type' => 'image',
            'settings' => array(
              'image_style' => 'focus_style',
            ),
          ));
          print render ($output);
        ?>
        <div class="magazinearticle-info">
          <a href ="taxonomy/term/<?php $field= field_get_items('node', $node, 'magazinearticle_topic');$object = $field[0]['taxonomy_term']; print $object->tid;?>" class="magazinearticle-topic"><?php $field= field_get_items('node', $node, 'magazinearticle_topic');$object = $field[0]['taxonomy_term']; print $object->name?></a>
          <a href="node/<?php echo $nid?>" class="magazinearticle-title"><h2 class="item-title2"><?php print($title);?></h2></a>
          <p class="magazinearticle-author-issue"><span>by </span><?php $field= field_get_items('node', $node, 'magazinearticle_authorname');print $field[0]['value'];?> <span>from </span>
          <?php 
            $field = field_get_items('node', $node, 'magazinearticle_issue');
            $fieldValue = $field[0]['taxonomy_term']->name;
            print $fieldValue;
          ?>
          </p>
          <div class="featured-body-container">
            <div class="magazinearticle-body"><?php print $body[0]['summary']; ?></div>
          </div>
          <a class="magazinearticle-rm" href="node/<?php echo $nid;?>">Read more <i class="fa fa-arrow-right" aria-hidden="true"></i></a> 
        </div>
      </div>
    </div>  
    
  </div>
</div>
