    <h1>Hacettepe University OSM Society</h1>
      <div class="detail">

        <a href="?op=list" class="btn btn-secondary">Back to Homepage</a><br><br>

        <h3><?=$detail['username'];?>'s league</h3>
        <hr>
        <div class="row">
          <div class="col-lg-10">
            <p><?=$detail['description'];?></p>
          </div>
          <div class="col-lg-2">
            <div class="league-info">
              <?=$detail['league'];?><hr>
              <?=getAgo($detail['date']);?>
            </div>
          </div>
          <hr>
          <a href="<?=$detail['link'];?>" target="_blank" rel="noopener noreferrer" class="btn btn-success btn-block">Join</a>
        </div>
      </div>