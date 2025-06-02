<?php

class App {
    protected $controller = 'HomeController';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseUrl();

        // 만약, url값이 존재한다면 생성할 클래스명을 문자열로 지정
        if ( isset( $url[0] ) && file_exists( "controllers/" . ucfirst( $url[0] ) . "Controller.php" ) ) {
            $this->controller = ucfirst( $url[0] ) . "Controller";
            unset( $url[0] );
        }

        require_once "controllers/{$this->controller}.php";
        // 문자열에 맞는 클래스 생성
        $this->controller = new $this->controller;

        if ( isset( $url[1] ) && method_exists( $this->controller, $url[1] ) ) {
            $this->method = $url[1];
            unset( $url[1] );
        }

        $this->params = $url ? array_values( $url ) : [];
        // 생성한 클래스 안에 함수를 실행함
        call_user_func_array( [ $this->controller, $this->method ], $this->params );
    }

    private function parseUrl() {
        if ( isset( $_GET['url'] ) ) {
            return explode( '/', filter_var( rtrim( $_GET['url'], '/' ), FILTER_SANITIZE_URL ) );
        }
    }
}

?>