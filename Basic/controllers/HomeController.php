<?php

class HomeController extends Controller
{
    public function index() {
        $model = $this->model( 'HomeModel' );
        $messages = $model->getAllMessages();
        $this->view('home', [ 'messages' => $messages ]);
    }
}

?>