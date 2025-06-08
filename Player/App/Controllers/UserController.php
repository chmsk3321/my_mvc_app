<?php

class UserController extends Controller
{
    public function login()
    {
        $moveTo = $this -> view('login');
    }

    public function regist()
    {
        $moveTo = $this -> view('regist');
    }
}

?>