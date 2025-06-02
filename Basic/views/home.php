<!DOCTYPE html>
<html>
<head>
    <title>Simple MVC</title>
</head>
<body>

    <h1>메시지 목록</h1>

    <ul>
        <?php foreach ( $data['messages'] as $msg ): ?>
            <li><?= htmlspecialchars( $msg['message'] ) ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>