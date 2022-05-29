<?php

require_once 'dotEnv.php';

(new DotEnv(__DIR__ . '/.env'))->load();

$db = getenv("DB_HOST");
$username = getenv("DB_USERNAME");
$password = getenv("DB_PASSWORD");
$database = getenv("DB_DATABASE");
$port = getenv("DB_PORT");

$con = mysqli_connect($db, $username, $password, $database, $port) or die("Bad Connect: ".mysqli_connect_error());
?>