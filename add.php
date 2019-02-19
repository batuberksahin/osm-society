<?php

include_once "partials/header.php";
require_once "classes/JSONdb.php";

?>
      <h1>Hacettepe University OSM Society</h1>
      <div class="detail">

        <a href="index.php" class="btn btn-secondary">Back to Homepage</a><br><br>

        <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(empty($_POST['username']) || empty($_POST['league']) || empty($_POST['description']) || empty($_POST['link'])) { ?>
          <div class="alert alert-danger">
            <strong>Warning!</strong> Please fill all fields.
          </div>
        <?php }else{
          $db = new JSONdb;
          $db->setFile(__DIR__ . "/db.json");
          $db->saveData([
            "link" => htmlspecialchars($_POST['link']),
            "username" => htmlspecialchars($_POST['username']),
            "league" => htmlspecialchars($_POST['league']),
            "date" => date("Y-m-d H:i:s"),
            "description" => htmlspecialchars($_POST['description'])
          ]);
          header('Location: index.php'); die();
        } } ?>

        <form action="add.php" method="post">
          <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" class="form-control" id="name" name="username">
            <small class="form-text text-muted">
              Your in-game name
            </small>
          </div>
          <div class="form-group">
            <label for="leag">League</label>
            <select class="form-control" id="leag" name="league">
            <option>🇹🇷 Turkey 1. League</option>
            <option>🇹🇷 Turkey 2. League</option>
            <option>🏴󠁧󠁢󠁥󠁮󠁧󠁿 England 1. League</option>
            <option>🏴󠁧󠁢󠁥󠁮󠁧󠁿 England 2. League</option>
            <option>🇪🇸 Spain 1. League</option>
            <option>🇮🇹 Italy 1. League</option>
            <option>🇩🇪 Germany 1. League</option>
            <option>🇫🇷 France 1. League</option>
            <option>🇵🇹 Portugal 1. League</option>
            <option>Another League</option>
            </select>
          </div>
          <div class="form-group">
            <label for="desc">Want you add</label>
            <textarea class="form-control" id="desc" rows="3" name="description"></textarea>
            <small class="form-text text-muted">
              You can tell here, how many days left to league start, how many players in league and your team ect.
            </small>
          </div>
          <div class="form-group">
            <label for="lin">Invite Link</label>
            <input type="text" class="form-control" id="lin" name="link">
            <small class="form-text text-muted">
              First, you must invite your any friend to your league via Whatsapp, Twitter etc. Later, you can copy your invite link here.
            </small>
          </div>
          <input type="submit" value="Add" class="btn btn-info btn-block">
        </form>
      </div>
<?php

include_once "partials/footer.php";

?>
