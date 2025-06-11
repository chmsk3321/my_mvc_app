<?php

require_once APP . '/Models/BoardModel.php';

class MainController extends Controller
{
    public function index()
    {
        $model = new BoardModel();
        $list = $model -> showList();
        $moveTo = $this -> view('index');
        require_once $moveTo;
    }
}

?>