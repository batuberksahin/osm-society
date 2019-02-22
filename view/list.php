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
            <a href="?op=detail&id=<?=$index?>" class="btn btn-info">Click for detail..</a>
          </div>
        </div>
        <hr>
        <?php endforeach; ?>
      </div>

      <div class="add-league">
        <a href="?op=add" class="btn btn-info btn-block">Add League</a>
      </div>