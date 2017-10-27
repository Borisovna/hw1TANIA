<?php
$str = 'asd jkl';
$arr = [];
$arr2 = [];
$arr = explode (' ', $str);
echo "<br>$str";
$i = count ($arr);
while ($i !== 0) {
    $arr2[] = $arr[$i - 1];
    $i--;
}
echo '<pre>';
print_r ($arr2);
$str2 = implode ("|", $arr2);
echo "<br>$str2";