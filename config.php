<?php
session_start();
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$server = $url["host"];
define('$server','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_DATABASE','db_store');
