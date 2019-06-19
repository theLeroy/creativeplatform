<?php
//Immer includen
function nested_including($filename, $max_nesting = 7) {
  $nesting = 0;
  $rel_path = './';
  while($nesting < $max_nesting) {
    // echo($nesting . ': ' .  $rel_path . '<br>');
    if (file_exists($rel_path . $filename)) {
      include_once $rel_path . $filename;
      return true;
    }
    $nesting += 1;
    $rel_path = $rel_path . '../';
  }
  return false;
}
require('../../phpmodules/functions.php');
// require_once(getHomeURI('phpmodules/functions.php'));
//test if included
// if (!function_exists('FunctionVerifier')) {
//   exit;
// }

  nested_including('components/header/header.php');
  nested_including('components/neededcontainer/neededcontainer.php');
 ?>

<?php


$projectId = mysqli_real_escape_string($conn ,$_GET["id"]);

$sql = "SELECT projects.*, publish.users_id, users.username FROM publish
LEFT JOIN projects ON projects.id = publish.projects_id
LEFT JOIN users ON users.id = publish.projects_id WHERE projects.id = ". $projectId ."";
$result = mysqli_query($conn, $sql);
$i = -1;
$prow = array();
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $i++;
    while($row = mysqli_fetch_assoc($result)) {
      array_push($prow, $row);
    }
} else {
    echo "0 results";
}

 ?>




 <div class="event">
   <div class="eventbild">
     <img src="/media/Bilder/events/event_id_<?php print_r($prow[0]['id']); ?>/mainimg.jpg" alt="">
   </div>
   <div class="eventtextcontainer">
     <h1 class="eventtitel">
       <?php  print_r($prow[0]['name']) ?>
     </h1>
     <div class="eventtime">
       <?php  print_r(date( "d.M.Y H:i", strtotime($prow[0]['timestamp']))) ?>
     </div>
     <div class="ersteller">
       von: <?php print_r($prow[0]['username']); ?>
     </div>
     <h2>Teaser</h2>
     <div class="eventTeaser">
       <?php print_r($prow[0]['username']); ?>
     </div>
 </div>
