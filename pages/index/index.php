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
// test if included

nested_including('components/header/header.php');

// ---

nested_including('phpmodules/getProjects.php');

nested_including('components/events/events.php');


//footer
  nested_including('components/footer/footer.php');
 ?>
