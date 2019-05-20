<?php
  $variables = [
      'DB_HOST' => 'localhost',
      'DB_USERNAME' => 'foobar',
      'DB_PASSWORD' => 'foobar',
      'DB_NAME' => 'demoDB',
      'DB_PORT' => '21',
      'PHP_ENV' => 'debug'
  ];
  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  }
?>