<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>게시판 목록 페이지</h1>
    <a href="/board/writeView">글쓰기</a><br>
    <?php
    
    // var_dump($list);
    if ( empty($list) ) {
        echo '현재 작성된 글이 없습니다.<br>';
    } else {
        foreach ( $list as $item ) { ?>
            <a href="localhost:80/board/view/board/<?= $item->idx ?>">
                <h3>제목 : <?= $item->title ?></h3>
            </a>
        <?php }
    }

    ?>

</body>
</html>