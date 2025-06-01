<?php

class HomeController extends Controller
{
    public function index() {
        $model = $this->model( 'HomeModel' );
        $message = $model->getMessage();
        $this->view('home', [ 'message' => $message ]);
    }
}

?>