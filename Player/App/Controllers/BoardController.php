<?php

require_once APP . '/Models/BoardModel.php';

class BoardController extends Controller
{
    public function write()
    {
        $moveTo = $this -> view('write');
        require_once $moveTo;
    }

    public function addPlayer()
    {
        $model = new BoardModel();
        $model -> pushInfo( $_POST['num'], $_POST['name'], $_POST['nation'] );
    }
}

?>