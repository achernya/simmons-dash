<?php
$url = "http://webservices.nextbus.com/service/publicXMLFeed?command=predictions&".$_GET['xmlurl'];
$data = file_get_contents($url);
$parser = simplexml_load_string($data);
?>

<div class="vertical-center height-3">
    <span class='jumbo'>Nextbus</span>
    <div>
      <?php
  for ($i = 0; ($i < 2); $i++) {
    $prediction = $parser->predictions->direction->prediction[$i];
    echo $prediction['minutes'] . " minutes<br />\n";
  }
      ?>
    </div>
</div>
