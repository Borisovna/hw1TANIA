<?php
$day = random_int(1, 8);
switch ($day) {
    case 1:
        echo "Сегодня понедельник";
        break;
    case 2:
        echo "Сегодня вторник";
        break;
    case 3:
        echo "Сегодня среда";
        break;
    case 4:
        echo "Сегодня четверг";
        break;
    case 5:
        echo "Сегодня пятница";
        break;
    case 6:
        echo "Сегодня суббота";
        break;
    case 7:
        echo "Сегодня воскресенье";
        break;
    default:
        echo "такого дня недели не бывает";
        break;
}



/**
 * Created by PhpStorm.
 * User: admin
 * Date: 08.10.2017
 * Time: 22:33
 */