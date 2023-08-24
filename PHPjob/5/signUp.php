<?php
require_once('db_connect.php');

session_start();

if (isset($_POST["signUp"])) {
    if (empty($_POST["name"])) {
    echo 'ユーザーネームが未入力です。';
} else if (empty($_POST["password"])) {
    echo 'パスワードが未入力です。';
}

if (!empty($_POST["name"]) && !empty($_POST["password"])) {
    $name = $_POST["name"];
    $password = $_POST["password"];

try {
    $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
    $stmt = $pdo->prepare("INSERT INTO users(name, password) VALUES (name, password)");
    $stmt->bindParam(':name', $name);
    $userid = $pdo->lastinsertid();
    echo '登録が完了しました。あなたの名前は ' . $name . ' です。パスワードは ' . $password . ' です。';
} catch (PDOException $e) {
    echo'データベースエラー';
    echo $e->getMessage();
}
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="style.css">
</head>
<div class="container">
<body>
<h1>Sign up</h1>

<form method="POST" action="">

<input type="text" name="name" placeholder="name" class="t1" style="width:250px;height:40px">
<br>
<input type="text" name="password" placeholder="password" class="t1" style="width:250px;height:40px">
<br>
<input type="submit" value="新規登録" id="signUp" name="signUp" class="btn_01" style="width:150px;height:40px">

</form>
</body>
</html>
</div>