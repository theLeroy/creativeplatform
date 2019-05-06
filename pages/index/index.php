<?php
//Immer includen
if (file_exists("phpmodules/functions.php")) { include_once 'phpmodules/functions.php'; };
if (file_exists("../phpmodules/functions.php")) { include_once '../phpmodules/functions.php'; };
if (file_exists("../../phpmodules/functions.php")) { include_once '../../phpmodules/functions.php'; };
if (file_exists("../../../phpmodules/functions.php")) { include_once '../../../phpmodules/functions.php'; };
if (file_exists("../../../../phpmodules/functions.php")) { include_once '../../../../phpmodules/functions.php'; };
if (file_exists("../../../../../phpmodules/functions.php")) { include_once '../../../../../phpmodules/functions.php'; };
if (file_exists("../../../../../../phpmodules/functions.php")) { include_once '../../../../../../phpmodules/functions.php'; };
require_once(getHomeURI('phpmodules/functions.php'));
//test if included
if (!function_exists('FunctionVerifier')) {
  exit;
}

// header();
 ?>


<?php
footer();
 ?>
