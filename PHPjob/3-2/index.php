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

