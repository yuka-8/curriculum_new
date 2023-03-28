<?php
    define('DB_DATABASE', 'checktest4');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);
    
    try {
        $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
        echo 'データベースの接続に成功しました。';
       }catch (PDOException $e){
        exit('データベースの接続に失敗しました。'. $e->getMessage());
      }  
?>

<td><?php{$getposts_sql['category_no']}?></td>
                <td><?php{$getposts_sql['comment']}?></td>
                <td><?php{$getposts_sql['created']}?></td>


                <td><?php{$getposts_sql['title']}?></td>
                <td><?php{$getposts_sql['title']}?></td>

                

