<?php
// first table
    $low1 = 1;
    $high1 =5;

for ($i1 = $low1; $i1 <= $high1; $i1++) {
    for ($j1 = $low1; $j1 <=$high1; $j1++){
        $array1 [$i1][$j1] = $i1*$j1;
    }
}

echo '<table border= "1" ';
foreach ($array1 as $key1 => $item1) {
    echo '<tr>';
    foreach ($item1 as $key2 => $value1) {
        echo "<td> {$key2}*{$key1}= $value1  </td> ";

        }
    echo '</tr>';
    }

// second table
$low2 = 6;
$high2 =10;

for ($i2 = $low2; $i2 <= $high2; $i2++) {
    for ($j2 = $low2; $j2 <=$high2; $j2++){
        $array2 [$i2][$j2] = $i2*$j2;
    }
}

echo '<table border= "1" ';
foreach ($array2 as $key3 => $item2) {
    echo '<tr>';
    foreach ($item2 as $key4 => $value2) {
        echo "<td> {$key4}*{$key3}= $value2  </td> ";

    }
    echo '</tr>';
}
