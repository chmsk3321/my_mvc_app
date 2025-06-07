<?php

namespace application\controllers;

use application\models\BoardModel;

class BoardController extends Controller
{
    public function index( $category, $idx, $pageNo )
    {
        $model = new BoardModel();
        $list = $model->selectList( $category, $idx, $pageNo );

        require_once _ROOT . '/my_mvc_app/Notice/application/views/board/index.php';
    }

    public function writeView( $category, $idx, $pageNo )
    {
        require_once 'application/views/board/write.php';
    }

    public function insertBoard( $category, $idx, $pageNo )
    {
        $model = new BoardModel();

        if ( isset( $_POST['submit_insert_board'] ) ) {
            $model->insertBoard( $_POST['title'], $_POST['content'] );
        }

        header( 'location:/my_mvc_app/Notice/' );
    }
}

?>