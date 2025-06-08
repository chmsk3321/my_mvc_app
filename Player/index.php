<?php

// define
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/my_mvc_app/Player');
define('HOME', '/my_mvc_app/Player');
define('APP', ROOT . '/App');
define('CORE', APP . '/Core');
define('VIEW', APP . '/Views');

// require
require_once CORE . '/App.php';
require_once CORE . '/Controller.php';

$app = new App();

?>