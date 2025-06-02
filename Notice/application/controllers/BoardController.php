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
}

?>