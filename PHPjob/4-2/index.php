<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<?php
define('DB_DATABASE', 'checktest4');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);

try {
    $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
    $sql = 'SELECT * FROM users';
    $pdo->query($sql);
    $stmt = $pdo->query($sql);
    $getusers_sql = $stmt->fetchALL();
}catch (PDOException $e){
    exit($e->getMessage());
}
?>

<?php
foreach ($getusers_sql as $getusers_sql)?>
<div class="wrapper">
            <div class="side">
            <img src="Y&I.png" alt="" width="200px" height="120px">
			</div>
			<div class="content">
     <div class = "content-top"><?php echo "ようこそ{$getusers_sql['first_name']}{$getusers_sql['last_name']}さん" ?></div><div class = "content-bottom"><?php echo "最終ログイン日:{$getusers_sql['last_login']}"; ?></div>
</div>

<?php
try {
    $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
    $sql = 'SELECT * FROM posts ORDER BY id DESC';
    
    $pdo->query($sql);
    $stmt = $pdo->query($sql);
    $getposts_sql = $stmt->fetchALL();
}catch (PDOException $e){
    exit($e->getMessage());
    }
?>

<table>
<tr>
    <th>記事ID</th>
    <th>タイトル</th>
    <th>カテゴリ</th>
    <th>本文</th>
    <th>投稿日</th>
<tr>
<?php
foreach ($getposts_sql as $getpost){?>
    <tr>
        <td><?php echo $getpost['id'] ?></td>
        <td><?php echo $getpost['title'] ?></td>
        <td><?php 
                if($getpost["category_no"] == 1){
                    echo "食事";
                }elseif($getpost["category_no"] == 2){
                    echo "旅行";
                }elseif ($getpost["category_no"] == 3){
                    echo "その他";
                }?></td>
        <td><?php echo $getpost['comment'] ?></td>
        <td><?php echo $getpost['created'] ?></td>
        
    </tr>
    <?php } ?>
</table>

<footer>
Y&I group.inc
</footer>
</body>