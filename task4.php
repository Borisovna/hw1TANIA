<?php
$age=random_int (-10, 90 );
if ($age<=65 and $age>=18){
    echo "Ваш возраст $age вам   еще работать и работать";
} elseif ($age>=65){
    echo "Ваш возраст $age вам   пора на пенсию";
} elseif ($age<=18 and $age>=1){
    echo "Ваш возраст $age вам   ещё рано работать";
} else {
    echo "Ваш возраст $age, -  Неизвестный   возраст";
}

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 08.10.2017
 * Time: 17:25
 */