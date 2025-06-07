<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판 글쓰기 페이지</title>
</head>
<body>

    <h1>글쓰기</h1>
    <form action="/my_mvc_app/Notice/Board/insertBoard" method="POST">
        <p>글제목 : <input type="text" name="title" id="title" style="width: 300px;"></p>
        <p>글내용 : </p>
        <p><textarea class="content" name="content" style="width: 500px; height: 200px;"></textarea></p>

        <p>
            <input type="submit" name="submit_insert_board" value="저장하기">
            <button onclick="location.href='/board/index/story'">목록으로</button>
        </p>
    </form>

</body>
</html>