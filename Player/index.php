<?php

session_start();

// define
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/my_mvc_app/Player');
define('HOME', '/my_mvc_app/Player');
define('APP', ROOT . '/App');
define('CORE', APP . '/Core');
define('VIEW', APP . '/Views');

define('DBTYPE', 'mysql');
define('HOST', 'localhost');
define('DBNAME', 'test_mvc');
define('DBUSER', 'root');
define('DBPASSWORD', '');
define('CHARSET', 'utf8mb4');

// require
require_once CORE . '/App.php';
require_once CORE . '/Controller.php';
require_once CORE . '/DB.php';
require_once CORE . '/Model.php';

$app = new App();

?>