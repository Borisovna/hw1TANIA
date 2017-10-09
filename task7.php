<?php
echo "<table border=\"2\" cellpadding=\"5\" align=\"center\">
   <caption><strong style=\"color: red; font-size: 2em\">Таблица умножения </strong></caption>";

for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        if ($i % 2 == 0 and $j % 2 == 0) {
            echo "<td>(" . $i * $j . ")</td>";
        } elseif ($i % 2 !== 0 and $j % 2 !== 0) {
            echo "<td>[" . $i * $j . "]</td>";
        } else {
            echo "<td>" . $i * $j . "</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 09.10.2017
 * Time: 19:38
 */