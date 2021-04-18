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
    if($key1 == 1){
        $key1 = "<font color='red'>$key1</font>";
    }elseif ($key1 == 2){
        $key1 = "<font color='green'>$key1</font>";
    }elseif ($key1 == 3){
        $key1 = "<font color='yellow'>$key1</font>";
    }elseif ($key1 == 4){
        $key1 = "<font color='blue'>$key1</font>";
    }

    echo '<td>' ;
    foreach ($item as $key2 => $value) {
        if($key2 == 1){
            $key2 = "<font color='red'>$key2</font>";
        }elseif ($key2 == 2){
            $key2 = "<font color='green'>$key2</font>";
        }elseif ($key2 == 3){
            $key2 = "<font color='yellow'>$key2</font>";
        }elseif ($key2 == 4){
            $key2 = "<font color='blue'>$key2</font>";
        }elseif($key2 == 10) {
            settype($key2, 'string');
            $key_1 = $key2[0];
            $key_2 = $key2 [1];
            if ($key_1 == 1) {
                $key_1 = "<font color='red'>$key_1</font>";
                $key2 = $key_1 . $key_2;
            }
        }

        settype($value, 'string');
        $value_1 = $value [0];
        $value_2 = $value [1];

            if ($value_1 == 1 ){
            $value_1  = "<font color='red'>$value_1</font>";
            }elseif ($value_1 == 2){
            $value_1  = "<font color='green'>$value_1</font>";
            }elseif ($value_1 == 3){
            $value_1  = "<font color='yellow'>$value_1</font>";
            }elseif ($value_1 == 4){
            $value_1  = "<font color='blue'>$value_1</font>";
            }

            if ($value_2 == 1 ){
            $value_2  = "<font color='red'>$value_2</font>";
            }elseif ($value_2 == 2){
            $value_2  = "<font color='green'>$value_2</font>";
            }elseif ($value_2 == 3){
            $value_2  = "<font color='yellow'>$value_2</font>";
            }elseif ($value_2 == 4){
            $value_2  = "<font color='blue'>$value_2</font>";
            }

        $value_3 = $value_1.$value_2;
        echo "{$key1} x {$key2} = $value_3 <br>" ;
    }
    echo '</td>';
}
echo '</tr>';

//низ таблицы

echo '<tr>';
foreach ($array2 as $key3 => $item2) {
    if($key3 == 10){
        settype($key3, 'string');
        $key_1 = $key3[0];
        $key_2 = $key3 [1];
        if ($key_1 == 1 ){
            $key_1  = "<font color='red'>$key_1</font>";
            $key3 = $key_1.$key_2;
        }
    }

    echo "<td>" ;
    foreach ($item2 as $key4 => $value2) {

        if($key4 == 1){
            $key4 = "<font color='red''>$key4</font>";
        }elseif ($key4 == 2){
            $key4 = "<font color='green'>$key4</font>";
        }elseif ($key4 == 3){
            $key4 = "<font color='yellow''>$key4</font>";
        }elseif ($key4 == 4){
            $key4 = "<font color='blue''>$key4</font>";
        }elseif($key4 == 10) {
            settype($key4, 'string');
            $key_1 = $key4[0];
            $key_2 = $key4 [1];
            if ($key_1 == 1 ){
                $key_1  = "<font color='red'>$key_1</font>";
                $key4 = $key_1.$key_2;
            }
        }

        settype($value2, 'string');
        $value_1 = $value2 [0];
        $value_2 = $value2 [1];

            if ($value_1 == 1 ){
            $value_1  = "<font color='red'>$value_1</font>";
            }elseif ($value_1 == 2){
            $value_1  = "<font color='green'>$value_1</font>";
            }elseif ($value_1 == 3){
            $value_1  = "<font color='yellow'>$value_1</font>";
            }elseif ($value_1 == 4){
            $value_1  = "<font color='blue'>$value_1</font>";
            }

            if ($value_2 == 1 ){
            $value_2  = "<font color='red'>$value_2</font>";
            }elseif ($value_2 == 2){
            $value_2  = "<font color='green'>$value_2</font>";
            }elseif ($value_2 == 3){
            $value_2  = "<font color='yellow'>$value_2</font>";
            }elseif ($value_2 == 4){
            $value_2  = "<font color='blue'>$value_2</font>";
            }

        $value_3 = $value_1.$value_2;
        echo "{$key3} x {$key4} = $value_3 <br>" ;
    }
    echo "</td>";
}
echo '</tr>';
