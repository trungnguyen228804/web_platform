<?php
$tz = date_default_timezone_get();
date_default_timezone_set( 'America/Los_Angeles' );
ini_set('display_errors', 1);
session_start();
ob_start();
include 'MySQL.php';
$config = [
    'dbuser' => "root",
    'dbpassword' => "",
    'dbname' => "database_theme1",
    'dbhost' => "localhost",
    'dbport' => "3306",
    'encoding' => "utf8mb4"
];
$MySQL = MySQL::getInstance($config);

include "functions.php";

define('DOMAIN', 'https://worldstatistics.live/');

define('MEDIA_PATH_ROOT', '../media/product/root/');
define('MEDIA_PATH', '../media/product/default/');
define('MEDIA_PATH_THUMB', '../media/product/thumb/');

