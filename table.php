<?php

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <=10; $j++){
        $array [$i][$j] = $i*$j;
    }
}
for ($i2 = 6; $i2 <= 10; $i2++) {
    for ($j2 = 1; $j2 <=10; $j2++){
        $array2 [$i2][$j2] = $i2*$j2;
    }
}


echo '<table border= "1" ';
echo '<tr bordercolor = "#00000" align="center" >';
foreach ($array as $key1 => $item) {
    echo '<td>' ;
    foreach ($item as $key2 => $value) {
        echo "{$key1} x {$key2} = $value <br>" ;
    }
     echo '</td>';
}
echo '</tr>';
echo '<tr>';
foreach ($array2 as $key3 => $item2) {
    echo "<td>" ;
    foreach ($item2 as $key4 => $value2) {
        echo "{$key3} x {$key4} = $value2 <br>" ;
    }
    echo "</td>";
}
echo '</tr>';
