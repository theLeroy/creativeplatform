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
  nested_including('components/neededcontainer/neededcontainer.php');
 ?>

 <form class="form" action="" method="post">
  <input type="file" name="Bild" value=""> <br>
  <label for="titel">Titel</label>
  <input type="text" name="titel" value=""> <br>
  <label for="datum">Datum</label>
  <input type="date" name="datum" value=""> <br>
  <label for="zeit">Zeit</label>
  <input type="time" name="zeit" value=""> <br>
  <label for="teaser">Teaser</label>
  <input type="text" name="teaser" value=""> <br>
  <label for="beschrieb">Beschrieb</label>
<textarea id="beschrieb" name="beschrieb"></textarea><br>
<label>Diese Leute brauchen wir:</label> <br>
<div class="neededperscontainer">
  <?php neededcontainer() ?>
  <?php neededcontainer() ?>
  <?php neededcontainer() ?>
  <?php neededcontainer() ?>
    <div class="plus">
      <span></span>
      <span></span>
    </div>
</div>
<span class="block"></span>
<label>Diese Objekte brauchen wir:</label>
<div class="neededperscontainer">
  <?php neededcontainer() ?>
  <?php neededcontainer() ?>
  <?php neededcontainer() ?>
  <?php neededcontainer() ?>
    <div class="plus">
      <span></span>
      <span></span>
    </div>
    <input type="submit" name="sb" value="Absenden">
</div>
 </form>
