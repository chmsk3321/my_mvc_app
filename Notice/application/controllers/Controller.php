<?php

namespace application\controllers;

class Controller
{
    public function __construct( $menu, $action, $category, $idx, $pageNo )
    {
        if ( !file_exists( _ROOT . '/my_mvc_app/Notice/application/models/' . $menu . 'Model.php' ) ) {
            var_dump( '해당 클래스는 존재하지 않습니다.' );
            exit();
        }

        $this->$action( $category, $idx, $pageNo );
    }
}

?>