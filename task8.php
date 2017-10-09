<?php
$str = "asd jkl";
$arr = array();
$arr2 = array();
$arr = explode(" ", $str);
echo "<br>" . $str;

//echo "<pre>";
//print_r($arr);

$i = count($arr);
while ($i !== 0) {
    $arr2[] = $arr[$i - 1];
    $i--;
}
echo "<pre>";
print_r($arr2);
$str2 = implode(" ", $arr2);

echo "<br>" . $str2;

//echo "<br>".$i;

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 09.10.2017
 * Time: 20:18
 */