<link rel="stylesheet" href="css/style.css">

<?php
   $my_name = $_POST["my_name"];

   $question1 = [80,22,20,21];

   $question2 = ["PHP","Python","JAVA","HTML"];

   $question3 = ["join","select","insert","update"];

   $answer1 = $question1[0];

   $answer2 = $question2[3];

   $answer3 = $question3[1];
?>

<p>お疲れ様です。<?php echo $my_name; ?>さん</p>

<form method="post" action="answer.php">

<h2>①ネットワークのポート番号は何番？</h2>
   <?php foreach($question1 as $value){ ?>
   <input type="radio" name="question1" value="<?php echo $value; ?>"> <?php echo $value; ?>
   <?php } ?>
   <input type="hidden" name="answer1" value="<?php echo $answer1; ?>">

<h2>②Webページを作成するための言語は？</h2>
   <?php foreach($question2 as $value){ ?>
   <input type="radio" name="question2" value="<?php echo $value; ?>"> <?php echo $value; ?>
   <?php } ?>
   <input type="hidden" name="answer2" value="<?php echo $answer2; ?>">

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
   <?php foreach($question3 as $value){ ?>
   <input type="radio" name="question3" value="<?php echo $value; ?>"> <?php echo $value; ?>
   <?php } ?>
   <input type="hidden" name="answer3" value="<?php echo $answer3; ?>">

   <input type="hidden" name="my_name" value="<?php echo $my_name ?>"><br>
   <input type="submit" value="回答する">
</form>


  