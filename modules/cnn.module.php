<?php
include_once('simplepie/SimplePieAutoloader.php');
$feed = new SimplePie();
$feed->set_feed_url("http://rss.cnn.com/rss/cnn_topstories.rss");
$feed->init();

?>
<div class="vertical-center height-3">
    <img src="resources/cnn-logo.png" width="50" />
    <span class='jumbo'>Top Headlines</span>
    <div>
    <span class='jumbo'>
      <?php 
  $items = $feed->get_items();
  $article = array_rand($items);
echo "<a style=\"text-decoration: none;\" href=\"".$items[$article]->get_link()."\">".$items[$article]->get_title()."</a>\n";
      ?>
     </span>
    </div>
</div>
