<?php

// Copy from: https://stackoverflow.com/users/1849981/mrcarrot

function getAgo($time)
{

  $seconds_ago = (time() - strtotime($time));

  if ($seconds_ago >= 31536000) {
      echo intval($seconds_ago / 31536000) . " years ago";
  } elseif ($seconds_ago >= 2419200) {
      echo intval($seconds_ago / 2419200) . " months ago";
  } elseif ($seconds_ago >= 86400) {
      echo intval($seconds_ago / 86400) . " days ago";
  } elseif ($seconds_ago >= 3600) {
      echo intval($seconds_ago / 3600) . " hours ago";
  } elseif ($seconds_ago >= 60) {
      echo intval($seconds_ago / 60) . " minutes ago";
  } else {
      echo "Less than a minute ago";
  }

}

?>
