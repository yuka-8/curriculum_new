<?php

require_once('db_connect.php');

session_start();

try {
    $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM books";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $date = array();
    $count = $stmt->rowCount();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $date[] = $row;
    }
    echo '';
}catch (PDOException $e) {
    print($e->getMessage());
    die();
}
?>

<html>
<div class="container">
<body>
<link rel="stylesheet" href="1style.css">

<h1>book stock<h1>

<div class="t2">
        <a href="signUp.php" class="btn_01">新規登録</a>
        <a href="register.php" class="btn_01">書籍新規登録</a>
        <a href="logout.php" class="btn_01">ログアウト</a>
        
</div>        

<table border=1 class="radius-table">

<tr><th>タイトル</th><th>発売日</th><th>在庫数</th><th></th></tr>

<?php foreach($date as $row): ?>

<tr>
        <td><?php echo $row['title'];?></td>
        <td><?php echo $row['date'];?></td>
        <td><?php echo $row['stock'];?></td>
        <td><a href="delete_post.php?id=<?php echo $row['id']; ?>" class="btn_02">削除</a></td>

<form action="" method="post">
        
    <td>
        <input type="hidden" name kind value="delete">
        <input type="hidden" name="product" value="<php echo $key?>">
    </td>

</form>
</tr>
<?php endforeach; ?>
</table> 
</body>
</div>
</html>