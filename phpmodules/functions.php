<?php
//<!-- das file isch überau ibudnde und managet aui wichtige zuegriffe. -->
//Session
session_start();
/* Error Reporting on or off
    How to call debug function:
    debug($debuger_On_or_Of, "Costom report text");
 */
$debuger_On_or_Of = false;
$devmode_On_or_Of = true;
if ($devmode_On_or_Of) {
  ini_set('display_errors', 'On'); ini_set('html_errors', 0); error_reporting(-1);
  $_SERVER['ORIG_PATH_INFO'] = $_SERVER['REQUEST_URI'];
  // $mysqli = mysqli_connect('localhost:8888', 'root', 'root', 'baeraefaeu') or die('Keine Verbindung zur Datenbank oder keine Datenbank ausgewählt');
  $url = "localhost:8888";
  $user = 'root';
  $password = 'root';
  $db = '????';
  $host = 'localhost';
  $port = 8889;
  $link = mysqli_init();
  $success = mysqli_real_connect(
     $link,
     $host,
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
    $out = $_SERVER['ORIG_PATH_INFO'];
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
if ($devmode_On_or_Of) {
  $url = "http://localhost:8888";
}
?>
