<?php
  $variables = [
      'DB_HOST' => 'mdm2016.bbz.cloud',
      'DB_USERNAME' => 'mdm2016d',
      'DB_PASSWORD' => 'xxx',
      'DB_NAME' => 'd_evenement',
      'DB_PORT' => '21',
      'PHP_ENV' => 'debug'
  ];
  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  }
?>
