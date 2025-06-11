<?php

class UserModel extends Model
{
    public function userQuery( $userId, $password )
    {
        $hash = password_hash( $password, PASSWORD_DEFAULT );
        
        try {
            $sql = 'INSERT INTO user (user_id, password, reg_date)
                    VALUES (:id, :pass, :date)
            ';

            $stmt = $this -> db -> prepare($sql);
            $stmt -> bindValue(':id', $userId, PDO::PARAM_STR);
            $stmt -> bindValue(':pass', $hash, PDO::PARAM_STR);
            $stmt -> bindValue(':date', date("Y-m-d H:i:s"), PDO::PARAM_STR);
            $stmt -> execute(); ?>
            <script>
                alert ("회원가입이 정상적으로 완료되었습니다.");
                location.href = '<?= HOME ?>';
            </script>
        <?php exit(); } catch (Exception $e) {
            echo '쿼리 실행 중 에러 발생 : ' . $e -> getMessage();
            die();
        }
    }

    public function checkUser( $userId, $password )
    {
        $sql = 'SELECT * FROM user WHERE user_id = :logId';
        $stmt = $this -> db -> prepare($sql);
        $stmt -> bindParam( ':logId', $userId, PDO::PARAM_STR );
        
        if ( $stmt -> execute() ) {
            if ( $stmt -> rowCount() !== 0 ) {

                $row = $stmt -> fetch();
                if ( password_verify( $password, $row['password'] ) ) {
                    session_start();
                    $_SESSION['id'] = $row['user_id']; ?>
                    <script>
                        alert("로그인 되었습니다.");
                        location.href = '<?= HOME ?>';
                    </script>
                <?php exit(); } else { ?>
                    <script>
                        alert("비밀번호가 일치하지 않습니다.");
                        location.href = '<?= HOME ?>';
                    </script>
                <?php exit(); }

            } else { ?>
                <script>
                    alert("아이디가 존재하지 않습니다.");
                    location.href = '<?= HOME ?>';
                </script>
            <?php exit(); }
        } else {
            echo "쿼리 실행 실패";
            exit();
        }
    }
}

?>