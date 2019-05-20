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

 <div class="404page">
   <a href="<?php echo $url ?>">
   <img class="img404page" src="<?php $url ?>/media/Bilder/404.png">
   </a>
 </div>

 <style media="screen">
   .404page {
     height: 100%;
     width: 100%;
   }
   .img404page {
     width: 50%;
     height: auto;
     transform: translateX(-50%);
     margin-left: 50%;
   }
   body {
     background-color: #c2deef
  }
 </style>

<?php
  nested_including('components/footer/footer.php');
 ?>
