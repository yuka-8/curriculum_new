<?php
require_once('db_connect.php');

require_once('function.php');

if (!empty($_POST)) {
    if (empty($_POST["title"])) {
        echo 'タイトルが未入力です。';
    } elseif (empty($_POST["date"])) {
        echo '発売日が未入力です。';
    } elseif (empty($_POST["stock"])) {
        echo '在庫数が未入力です。';
}
}

if (!empty($_POST["title"]) && !empty($_POST["date"]) && !empty($_POST["stock"])) {
    
    $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
    $date = htmlspecialchars($_POST['date'], ENT_QUOTES);
    $stock = $_POST['stock'];

    try {
        $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
        $sql = "INSERT INTO books (title, date, stock) VALUES (:title, :date ,:stock)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':stock', $stock);
        $stmt->execute();
        header("Location: main.php");

    } catch (PDOException $e) {
        echo 'Error:' . $e->getMessage();
        die();
    }
}    
?>

<html>
<link rel="stylesheet" href="2style.css">
    <body>
    <div class="container">
        <h1>book  register</h1>
        <form action="" method="POST">

        <p><input type="text" name="title" placeholder="title" class="t1" style="width:250px;height:40px"></p>
        <p><input type="text" name="date" placeholder="date" class="t1" style="width:250px;height:40px"></p>
        <p>在庫数<br>
        <select name="stock" class="t1" style="width:250px;height:40px">
        <option value="">選択してください。</option></p>
        <?php for ($i=1;$i<=30;$i++){ ?>
        <option value="<?php echo $i; ?>">
        <?php echo $i; ?>
        </option>
      <?php } ?>
    </select>
    <br>
    <input type="submit" value="登録" class="btn_02" style="width:124px;height:40px">
    

</form>
</div>
</body>
</html>