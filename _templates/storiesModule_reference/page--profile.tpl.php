<?php //$nodeId = $node-nid; $stats = statistics_get($node->nid); print_r($stats['totalcount']);?>
<?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix" <?php print $attributes; ?> >
  <div class="content clearfix"<?php print $content_attributes; ?>>
   

    <div class="profile-item">
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
      <div class="node-share-container">
        <div class="node-share-item"><a class="twitter-share-button" id="node-share-tw" target="_blank" href="https://twitter.com/intent/tweet?text=Check%20this%20out%20on%20ButlerStories&url=https%3A%2F%2F<?php $url = $_SERVER['HTTP_HOST'] . request_uri(); print $url;?>%2F&hashtags=butler"><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
        <div class="node-share-item"><a id="node-share-fb" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php $url = $_SERVER['HTTP_HOST'] . request_uri(); print $url;?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
        <div class="node-share-item"><a id="node-share-em" href="mailto:?Subject=Butler%20Stories:%20<?php print $title ?>&Body=<?php $url = $_SERVER['HTTP_HOST'] . request_uri(); print $url;?>" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></div>
      </div>
      <div class="profile-title-box">
        <div class="profile-title"><h2><?php print($title);?></h2></div> 
        <div class="profile-subtitle"><h3><?php $field= field_get_items('node', $node, 'profile_subtitle');print $field[0]['value'];?></h3></div>
      </div>
      <div class="profile-body"><?php $field= field_get_items('node', $node, 'body');print $field[0]['value'];// print $body[0]['value']; ?></div>
    </div>
    
    <div class="related-items-container">
      <p class="related-items-container-title">Related Stories</p>
      <?php
        print views_embed_view("related_items_for_profiles","block");
      ?>
    </div>
    
  </div>
</div>