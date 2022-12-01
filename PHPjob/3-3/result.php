<?php
$my_name = $_GET["my_name"];
$number = $_GET["number"];
$num = $number * mt_rand(1,6);
date_default_timezone_set('Asia/Tokyo');
echo date('Y-m-d H:i:s')."<br/>\n";
?>

<p>名前は<?php echo $my_name; ?>です。</p>
<p>番号は<?php echo $num; ?>です。</P>

<?php
if(0 < $num && $num <= 11) {
    echo "結果は凶です。";
}
elseif(10 < $num && $num <= 16) {
    echo "結果は小吉です。";
}
elseif(15 < $num && $num <= 21) {
    echo "結果は中吉です。";
}
elseif(20 < $num && $num <= 26) {
    echo "結果は吉です。";
}
elseif(25 < $num && $num <= 37) {
    echo "結果は大吉です。";
}
elseif(36 < $num) {
    echo "結果は残念です。";
}
