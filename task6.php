<?php
$bmw = array(
    "model" => "X5",
    "speed" => "120",
    "doors" => "5",
    "year" => "2015",
);
$toyota = array(
    "model" => "camry",
    "speed" => "180",
    "doors" => "4",
    "year" => "2012",
);
$opel = array(
    "model" => "Opel Corsa E",
    "speed" => "110",
    "doors" => "3",
    "year" => "2013",
);
$car = array();

foreach ($bmw as $key => $value) {
    $car['bmv']["$key"] = $value;
}
foreach ($toyota as $key => $value) {
    $car['toyota']["$key"] = $value;
}
foreach ($opel as $key => $value) {
    $car['opel']["$key"] = $value;
}
// три одинаковых цикла -как то смешно


//echo "<pre>";
//print_r($car);
//echo "<hr>";

foreach ($car as $key => $value) {
    echo " CAR " . $key . "</br>" . $car[$key]['model'] . " " . $car[$key]['speed'] . " " . $car[$key]['doors'] . " " . $car[$key]['year'] . "<hr>";
}

//

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 08.10.2017
 * Time: 23:02
 */