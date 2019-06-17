<?php
include_once "autoload.php";
//<!-- das file isch überau ibudnde und managet aui wichtige zuegriffe. -->
//Session
// echo('env: ' . env('PHP_ENV') . '<br>');
session_start();
/* Error Reporting on or off
    How to call debug function:
    debug($debuger_On_or_Of, "Costom report text");
 */
if (env('PHP_ENV') == 'debug') {
  ini_set('display_errors', 'On'); ini_set('html_errors', 0); error_reporting(-1);
  $_SERVER['ORIG_PATH_INFO'] = $_SERVER['REQUEST_URI'];
  // $mysqli = mysqli_connect('localhost:8888', 'root', 'root', 'baeraefaeu') or die('Keine Verbindung zur Datenbank oder keine Datenbank ausgewählt');
  $url = "mdm2016.bbz.cloud";
  $user = env("DB_USERNAME");
  $password = env("DB_PASSWORD");
  $db = env("DB_NAME");
  $host = env("DB_HOST");
  $port = 21;
  $link = mysqli_init();
  $conn = mysqli_connect(
     $url,
     $user,
     $password,
     $db,
     $port
  );
} else {
  $url = "mdm2016.bbz.cloud";
  $user = env("DB_USERNAME");
  $password = env("DB_PASSWORD");
  $db = env("DB_NAME");
  $host = env("DB_HOST");
  $port = 21;
  $link = mysqli_init();
  $conn = mysqli_connect(
     $url,
     $user,
     $password,
     $db,
     $port
  );
}
/* Get Path of Root Directory */
if(!function_exists('getHomeURI')) {
  function getHomeURI($path) {
    $dots = '';
    // $out = $_SERVER['ORIG_PATH_INFO'];
    $out = '';//$_SERVER['ORIG_PATH_INFO'];
    $matches = explode("/",$out);
    for($i = 1; $i <= count($matches)-2;$i++) {
      $dots .= '../';
    }
    $path = $dots.$path;
    return $path;
  }
}
/*Home Url us this for links and main domainrequests
example:
<a href="<?php echo $url ?>/Pages/AGB" style="text-decoration: none;">
*/
$url = "https://" . $_SERVER['SERVER_NAME'];
if (env('PHP_ENV') == 'debug') {
  $url = "http://localhost:8888";
}

// include css
// echo '<link href="'.$url.'/libs/reset.css" rel="stylesheet" type="text/css">';

// function footer() {
//   require_once(getHomeURI('components/footer/footer.php'));
// }
// function header() {
//   require_once(getHomeURI('components/header/header.php'));
// }
?>
