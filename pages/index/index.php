<?php
//error_reporting :: --> dont work loding to late
// class helper {
//   //Immer includen
//     public static function nested_including($filename, $max_nesting = 7) {
//     $nesting = 0;
//     $rel_path = './';
//     while($nesting < $max_nesting) {
//       // echo($nesting . ': ' .  $rel_path . '<br>');
//       if (file_exists($rel_path . $filename)) {
//         include_once $rel_path . $filename;
//         return true;
//       }
//       $nesting += 1;
//       $rel_path = $rel_path . '../';
//     }
//     return false;
//   }
// }
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
// helper::nested_including("phpmodules/functions.php");
require('../../phpmodules/functions.php');
// included('/phpmodules/functions.php');
// test if included

include('../../components/header/header.php');

// ---
include('../../phpmodules/getProjects.php');

include('../../components/events/events.php');


//footer
  include('../../components/footer/footer.php');
 ?>
