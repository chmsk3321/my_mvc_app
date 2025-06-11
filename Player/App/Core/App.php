<?php

class App
{
    protected $controller = 'MainController';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this -> parseUrl();
        $method = $this -> method;

        if ( isset($url[0]) ) {
            $this -> controller = ucfirst($url[0]) . 'Controller';
            unset($url[0]);
        }
        
        if ( isset($url[1]) ) {
            $method = $url[1];
            unset($url[1]);
        }

        $this -> params = $url ? array_values($url) : [];

        require_once APP . '/Controllers/' . $this -> controller . '.php';
        $class = new $this -> controller;
        $class -> $method();
    }

    private function parseUrl()
    {
        if ( isset($_GET['url']) ) {
            return explode( '/', filter_var(rtrim( $_GET['url'], ',' ), FILTER_SANITIZE_URL) );
        }
    }
}

?>