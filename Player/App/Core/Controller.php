<?php

class Controller
{
    public function view($move)
    {
        require_once VIEW . "/{$move}.php";
    }
}

?>