<?php 
  //$nodeId = $node-nid; $stats = statistics_get($node->nid); print_r($stats['totalcount']);
  $nid = $node->nid;
?>
<?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>

<style>
.article-index-item-info p {
  font-family: SackersGothic;
  font-size: 12px; 
}
</style>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix" <?php print $attributes; ?> >
  <div class="content clearfix"<?php print $content_attributes; ?>>


    <div class="magazinearticle-item">
      <div class="magazinearticle-issue">
        <?php 
          $field = field_get_items('node', $node, 'magazinearticle_issue');
          $fieldValue = $field[0]['taxonomy_term']->name;
          $tid = $field[0]['taxonomy_term']->tid;
          print "<a href='/taxonomy/term/".$tid."'>// " . $fieldValue . "</a>";
        ?>
      </div>
      <!--<a href ="/taxonomy/term/<?php //$field= field_get_items('node', $node, 'magazinearticle_topic');$object = $field[0]['taxonomy_term']; print $object->tid;?>" class="magazinearticle-topic"><?php //$field= field_get_items('node', $node, 'magazinearticle_topic');$object = $field[0]['taxonomy_term']; print $object->name?></a>-->
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
      <div class="node-share-container">
        <div class="node-share-item"><a class="twitter-share-button" id="node-share-tw" target="_blank" href="https://twitter.com/intent/tweet?text=Check%20this%20out%20on%20ButlerStories&url=https%3A%2F%2F<?php $url = $_SERVER['HTTP_HOST'] . request_uri(); print $url;?>%2F&hashtags=butler"><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
        <div class="node-share-item"><a id="node-share-fb" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php $url = $_SERVER['HTTP_HOST'] . request_uri(); print $url;?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
        <div class="node-share-item"><a id="node-share-em" href="mailto:?Subject=Butler%20Stories:%20<?php print $title ?>&Body=<?php $url = $_SERVER['HTTP_HOST'] . request_uri(); print $url;?>" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></div>
      </div>
      <div class="magazinearticle-title-box">
        <a href="/node/<?php echo $nid ?>" class="magazinearticle-title"><h2><?php print($title);?></h2></a> 
        <div class="magazinearticle-publish-info">
          <p class="magazinearticle-publish-info-author"><?php $field= field_get_items('node', $node, 'magazinearticle_authorname');print $field[0]['value'];?></p>
          <p class="magazinearticle-publish-info-author-title"><?php $field= field_get_items('node', $node, 'magazinearticle_authortitle');print $field[0]['value'];?></p>
          <p class="magazinearticle-publish-issue">
            <?php 
              $field = field_get_items('node', $node, 'magazinearticle_issue');
              $fieldTid = $field[0]['tid'];
              $fieldValue = $field[0]['taxonomy_term']->name;
              print '<span>from</span> ' . $fieldValue;
            ?>
          </p>
        </div>
      </div>
      <div class="magazinearticle-body"><?php $field= field_get_items('node', $node, 'body'); print $field[0]['value']; ?></div>
    </div>

    <div class="related-items-container">
      <div id="related-items-container-prev-bg"></div>
      <p class="related-items-container-title"><?php print $fieldValue . ' ISSUE'; ?></p>
      
      <?php
       
        $nodeId = $node->nid;
        $sql = "SELECT weight, nid FROM taxonomy_index WHERE tid = $fieldTid ORDER BY weight";
        $resultSql = db_query($sql);
        $current = "";
        $nextNode = $prevNode = array();
        
        while($row = $resultSql -> fetchAssoc()){
          $resultArray[] = $row;          
        };
        
        foreach($resultArray as $key=>$row){
          if($row['nid'] == $nodeId){
            $currentIndex = $key;
          };
        };
        
        $nextIndex = $currentIndex >= count($resultArray)-1 ? false : $currentIndex +1;
        if($nextIndex !== false) {
          $nextNid = $resultArray[$nextIndex]['nid'];
          $nextNode = node_load($nextNid); 
          
          
        }
        
        $nextNodeType = $nextNode->type;
        $nextNodeTitle = $nextNode->title; 
        $nextNodeNid = $nextNode->nid;
        $nextNodeAuthor = $nextNode->magazinearticle_authorname[LANGUAGE_NONE][0]['value'];
        $nextNodeImage = $nextNode->magazinearticle_featuredimage[LANGUAGE_NONE][0]['filename'];
        
        $prevIndex = $currentIndex <= 0 ? false : $currentIndex -1;
        if($prevIndex !== false) {
          $prevNid = $resultArray[$prevIndex]['nid'];
          $prevNode = node_load($prevNid);          
        }
        
        $prevNodeType = $prevNode->type;
        $prevNodeTitle = $prevNode->title; 
        $prevNodeNid = $prevNode->nid;
        $prevNodeAuthor = $prevNode->magazinearticle_authorname[LANGUAGE_NONE][0]['value'];
        $prevNodeImage = $prevNode->magazinearticle_featuredimage[LANGUAGE_NONE][0]['filename'];
        
      ?>
      
      <div class="prev-article-container">
        
        <?php
         
          if($prevNodeNid != '') {
            if($prevNodeType == 'magazinearticle') {
              $image = field_get_items('node', $prevNode, 'magazinearticle_featuredimage');
              $output = field_view_value('node', $prevNode, 'magazinearticle_featuredimage', $image[0], array(
                'type' => 'image',
                'settings' => array(
                  'image_style' => 'focus_style',
                ),
              ));
              print "<div class='article-index-item'>";
              print "<a id='prev-article-control' href='../../node/".$prevNodeNid."'></a>";
              print "<div class='article-index-item-image-container'><p id='prev-article-label'><a href='../../node/".$prevNodeNid."'>Previous Article</a></p><a href='../../node/".$prevNodeNid."'>".render($output)."</a></div>";
              print "<div class='article-index-item-info'><h3><a href='../../node/".$prevNodeNid."'>".$prevNodeTitle."</a></h3>";
              print "<p><span>by</span> ".$prevNodeAuthor."</p></div>";
              print "</div>";
            };
            if($prevNodeType == 'profile') {
              $image = field_get_items('node', $prevNode, 'profile_featuredimage');
              $output = field_view_value('node', $prevNode, 'profile_featuredimage', $image[0], array(
                'type' => 'image',
                'settings' => array(
                  'image_style' => 'focus_style',
                ),
              ));
              print "<div class='article-index-item'>";
              print "<a id='prev-article-control' href='../../node/".$prevNodeNid."'></a>";
              print "<div class='article-index-item-image-container'><p id='prev-article-label'><a href='../../node/".$prevNodeNid."'>Previous</a></p><a href='../../node/".$prevNodeNid."'>".render($output)."</a></div>";
              print "<div class='article-index-item-info'><h3><a href='../../node/".$prevNodeNid."'>".$prevNodeTitle."</a></h3>";
              print "</div>";
              print "</div>";
            };
          };
        
        ?>
      
      </div><!--
    --><div class="next-article-container">
      
        <?php
      
          if($nextNodeNid != '') {
            if($nextNodeType == 'magazinearticle') {
              $image = field_get_items('node', $nextNode, 'magazinearticle_featuredimage');
              $output = field_view_value('node', $nextNode, 'magazinearticle_featuredimage', $image[0], array(
                'type' => 'image',
                'settings' => array(
                  'image_style' => 'focus_style',
                ),
              ));
              print "<div class='article-index-item'>";
              print "<div class='article-index-item-image-container'><p id='next-article-label'><a href='../../node/".$nextNodeNid."'>Next Article</a></p><a href='../../node/".$nextNodeNid."'>".render($output)."</a></div><!--";
              print "--><div class='article-index-item-info'><h3><a href='../../node/".$nextNodeNid."'>".$nextNodeTitle."</a></h3>";
              print "<p><span>by</span> ".$nextNodeAuthor."</p></div>";
              print "<a id='next-article-control' href='../../node/".$nextNodeNid."'></a>";
              print "</div>";
            };
            if($nextNodeType == 'profile') {
              $image = field_get_items('node', $nextNode, 'profile_featuredimage');
              $output = field_view_value('node', $nextNode, 'profile_featuredimage', $image[0], array(
                'type' => 'image',
                'settings' => array(
                  'image_style' => 'focus_style',
                ),
              ));
              print "<div class='article-index-item'>";
              print "<div class='article-index-item-image-container'><p id='next-article-label'><a href='../../node/".$nextNodeNid."'>Next</a></p><a href='../../node/".$nextNodeNid."'>".render($output)."</a></div><!--";
              print "--><div class='article-index-item-info'><h3><a href='../../node/".$nextNodeNid."'>".$nextNodeTitle."</a></h3>";
              print "</div>";
              print "<a id='next-article-control' href='../../node/".$nextNodeNid."'></a>";
              print "</div>";
            };
          };
       
        ?>
      
      </div>
      
      
      
    </div>

  </div>
</div>
