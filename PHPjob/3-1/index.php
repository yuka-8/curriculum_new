<?php
$fruits = ["りんご" => "100円","みかん" => "150円","もも" => "500円"];

$quantity = [3,1,6];

function fruitsQuantity($fruits,$quantity) {
    return $fruits * $quantity;
}

foreach ($fruits as $key => $value) {
    echo $key."の価格は".fruitsQuantity($value)."円です。<br>";
}