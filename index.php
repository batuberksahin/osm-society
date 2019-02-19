<?php

include_once "partials/header.php";
require_once "classes/JSONdb.php";
require_once "classes/Ago.php";

$db = new JSONdb;
$db->setFile(__DIR__ . '/db.json');
$data = $db->getData();

?>
      <h1>Hacettepe University OSM Society</h1>

      <div class="leagues">
        <?php foreach(array_reverse($data) as $index => $d): ?>
        <div class="row">
          <div class="col-md-2">
            <a href="<?=$d['link'];?>" target="_blank" rel="noopener noreferrer" class="btn btn-success">Join</a>
          </div>
          <div class="col-md-2">
            <?=$d['username'];?>
          </div>
          <div class="col-md-2">
            <?=$d['league'];?>
          </div>
          <div class="col-md-3">
            <?=getAgo($d['date']);?>
          </div>
          <div class="col-md-3">
            <a href="detail.php?id=<?=$index?>" class="btn btn-info">Click for detail..</a>
          </div>
        </div>
        <hr>
        <?php endforeach; ?>
      </div>

      <div class="add-league">
        <a href="add.php" class="btn btn-info btn-block">Add League</a>
      </div>
<?php include_once "partials/footer.php"; ?>
