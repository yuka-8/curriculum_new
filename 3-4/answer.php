<link rel="stylesheet" href="css/style.css">
<?php
$my_name = $_POST["my_name"];

$question1 = $_POST["question1"];
$answer1 = $_POST["answer1"];

$question2 = $_POST["question2"];
$answer2 = $_POST["answer2"];

$question3 = $_POST["question3"];
$answer3 = $_POST["answer3"];

if ($question1 == $answer1) {
    $result1 = "正解！";
}else{
    $result1 = "残念・・";
}

if ($question2 == $answer2) {
    $result2 = "正解！";
}else{
    $result2 = "残念・・";
}

if ($question3 == $answer3) {
    $result3 = "正解！";
}else{
    $result3 = "残念・・";
}
?>

<p><?php echo $my_name; ?>さんの結果は・・・？</p>

<p>①の答え</p>
<?php echo $result1; ?>

<p>②の答え</p>
<?php echo $result2; ?>

<p>③の答え</p>
<?php echo $result3; ?>
