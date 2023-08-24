<?php
require_once('db_connect.php');
require_once('function.php');

if (!empty($_POST)) {
   if (empty($_POST["name"])) {
    echo "名前が未入力です。";
}  if (empty($_POST["password"])) {
    echo "パスワードが未入力です。";
}

if (!empty($_POST["name"]) && !empty($_POST["password"])) {
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
    $password = htmlspecialchars($_POST['password'], ENT_QUOTES);

try {
    $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
    $sql = "SELECT * FROM users WHERE name = :name";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->execute();
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}

if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        
if (password_verify($password, $row['password'])) {    
    $_SESSION["user_id"] = $row['id'];
    $_SESSION["user_name"] = $row['name'];
    header("Location: main.php");
    exit;
} else {
    echo "パスワードに誤りがあります。";
}
} else {
    echo "ユーザー名かパスワードに誤りがあります。";
}
}
}
?>

<!doctype html>
<html lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>ログインページ</title>
</head>
<body>
<div class="container"> 
    <h1>Login</h1>
    
    <form method="post" action="">

        <input type="text" name="name" placeholder="name" class="t1" style="width:250px;height:40px">
        <br>
        <input type="text" name="password" placeholder="password" class="t1" style="width:250px;height:40px">
        <br>
        <input type="submit" value="ログイン" class="btn_02" style="width:124px;height:40px">
        <br>
        </p>
        <a href="signUp.php" class="btn_01">新規登録</a>
    
    </form>
</div>
</body>
</html>  