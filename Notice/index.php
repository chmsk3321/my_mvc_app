<?php

// 여러 가지 상수들을 정의함
require_once 'application/libs/config.php';
// 모든 클래스를 자동으로 불러 올 수 있도록 설정
require_once _ROOT . '/my_mvc_app/Notice/application/vendor/autoload.php';

new \application\libs\Application();

?>