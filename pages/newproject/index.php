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
nested_including('phpmodules/functions.php');
// require_once(getHomeURI('phpmodules/functions.php'));
//test if included
// if (!function_exists('FunctionVerifier')) {
//   exit;
// }

  nested_including('components/header/header.php');
 ?>

 <form class="form" action="" method="post">
  <input type="file" name="Bild" value="">
  <label for="titel">titel</label>
  <input type="text" name="titel" value="">
  <label for="datum">Datum</label>
  <input type="date" name="datum" value="">
  <label for="zeit">Zeit</label>
  <input type="date" name="zeit" value="">
  <label for="teaser">Teaser</label>
  <input type="text" name="teaser" value="">
  <label for="beschrieb">Beschrieb</label>
  <input type="text" name="beschrieb" value="">

 </form>
