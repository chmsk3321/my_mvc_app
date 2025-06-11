<?php

require_once APP . '/Models/UserModel.php';

class UserController extends Controller
{
    public function login()
    {
        $moveTo = $this -> view('login');
        require_once $moveTo;
    }

    public function regist()
    {
        $moveTo = $this -> view('regist');
        require_once $moveTo;
    }

    public function regPro()
    {
        if ( isset($_POST['id']) && isset($_POST['pass']) ) {
            $model = new UserModel();
            $model -> userQuery( $_POST['id'], $_POST['pass'] );
        } else {
            echo "값의 일부 혹은 모두가 존재하지 않음";
            exit();
        }
    }

    public function logPro()
    {
        if ( isset($_POST['id']) && isset($_POST['pass']) ) {
            $model = new UserModel();
            $model -> checkUser( $_POST['id'], $_POST['pass'] );
        } else {
            echo "값의 일부 혹은 모두가 존재하지 않음";
            exit();
        }
    }

    public function logout()
    {
        unset($_SESSION['id']);
        ?><script>location.href = '<?= HOME ?>';</script><?php
    }
}

?>