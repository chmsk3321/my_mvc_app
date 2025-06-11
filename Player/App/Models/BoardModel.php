<?php

class BoardModel extends Model
{
    public function showList()
    {
        $sql = 'SELECT * FROM list';
        $stmt = $this -> db -> prepare($sql);
        $stmt -> execute();
        return $stmt -> fetchAll();
    }

    public function pushInfo( $num, $name, $nation )
    {
        try {
            $sql = 'INSERT INTO list (num, name, nation)
                    VALUES (:num, :name, :nation)
            ';
            $stmt = $this -> db -> prepare($sql);
            $stmt -> bindValue(':num', $num, PDO::PARAM_INT);
            $stmt -> bindValue(':name', $name, PDO::PARAM_STR);
            $stmt -> bindValue(':nation', $nation, PDO::PARAM_STR);
            $stmt -> execute(); ?>
            <script>
                alert("선수 등록이 정상적으로 완료되었습니다.");
                location.href = '<?= HOME ?>';
            </script>
        <?php exit(); } catch (Exception $e) {
            echo "알 수 없는 오류 발생" . $e -> getMessage();
            exit();
        }
    }
}

?>