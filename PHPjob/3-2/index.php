<?php
define("TAX", 1.10);

$products = [
    "鉛筆"  => 100,
    "消しゴム" => 150,
    "物差し" => 500
];

function calculateVolume($products) {
    return $products * TAX;
}

foreach($products as $key => $value ) {
    echo $key."の税込価格は".calculateVolume($value)."円です。<br>";
}

<?php
    for ($i=1; $i <= 100 ; $i++) {
        if (($i % 3 === 0) && ($i % 5 === 0)) {
            echo 'FizzBuzz<br/>';
        } elseif ($i % 3 === 0) {
            echo 'Fizz<br/>';
        } elseif ($i % 5 === 0) {
            echo 'Buzz<br/>';
        } else {
            echo $i.'<br/>';
        }
    }
?>


