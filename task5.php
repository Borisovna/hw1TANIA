<?php

$day = random_int(1, 8);
switch ($day) {
    case ($day<=5):
        echo "Это   рабочий   день";
        break;
    case ($day>=5 and $day<=7):
        echo "Это   выходной   день";
        break;
    case ($day<7):
        echo "Это   выходной   день";
        break;
}


