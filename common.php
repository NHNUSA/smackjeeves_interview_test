<?php

ini_set('display_errors', 1);
error_reporting( E_ERROR | E_WARNING | E_PARSE );

// Database Connection
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_DATABASE', 'smackjeeves_test');

require($root_path . 'includes/db.php');