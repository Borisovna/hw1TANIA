<?php

$day = random_int(1, 10);

if ($day<=5){
    $a=1;
} elseif ($day>=5 and $day<=7){
    $a=2;
}else{
    $a=3;
}

switch ($a) {
    case 1:
        echo "Это   рабочий   день";
        break;
    case 2:
        echo "Это   выходной   день";
        break;
    case 3:
        echo "Неизвестный   день";
        break;
}


