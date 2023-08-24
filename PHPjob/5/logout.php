<?php

session_start();

$_SESSION = array();

session_destroy();
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>ログアウト</title>
</head>
<div class="container">
    <body>
     <h1>Logout</h1>
    <h2>ログアウトしました<h2>
    <a href="login.php" class="btn_01">ログイン画面に戻る</a>
    </body>
</div>
</html>