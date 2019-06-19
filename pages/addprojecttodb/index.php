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


// $Bild = mysqli_real_escape_string($conn ,$_POST["Bild"]);
$titel = mysqli_real_escape_string($conn , $_POST["titel"]);
$datum = mysqli_real_escape_string($conn , $_POST["datum"]);
$zeit = mysqli_real_escape_string($conn , $_POST["zeit"]);
$teaser = mysqli_real_escape_string($conn , $_POST["teaser"]);
$beschrieb = mysqli_real_escape_string($conn , $_POST["beschrieb"]);


$sql = "
INSERT INTO projects (timestamp, name, description, teaser)
VALUES ('".$datum." ".$zeit."', '".$titel."', '".$beschrieb."', '".$teaser."')
";

if (mysqli_query($conn, $sql)) {
  echo "<script>
alert('Event gespeichert!');
window.location.href='/';
</script>";
} else {
  echo "<h1> Sorry ein error ist aufgetaucht. :) </h1>";
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}




 ?>
