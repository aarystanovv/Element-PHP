<?php
date_default_timezone_set("Etc/GMT-6");
echo date_default_timezone_get();
echo "<br>";echo "<br>";echo "<br>";


// 1 Zadanie

function data(){
    $day = date("d.m.y");
    echo $day;
    echo "<br>";echo "<br>";echo "<br>";
}

data();


// 2 Zadanie
 function data2($format){
     $data = date($format);
     echo "<h2>Время в Алмате: $data </h2>";
 }
 data2("d.m.Y H:i:s");

// 3 Zadanie
function proverka($int){
    if($int % 2 == 0){
        echo "Число $int является четной и поэтому: true";
        echo "<br>";
    }else{
        echo "Число $int является нечетной и поэтому: false";
        echo "<br>";
    }
}

proverka(7);
proverka(12);

// 4 Zadanie
function vote($age){
    if($age >= 18){
        echo "Вы взрослый, можете голосовать";
        echo "<br>";
    }elseif ($age < 18){
        $limitation = 18 - $age;
        echo "Чтобы можно было голосовать осталось $limitation года (лет)";
        echo "<br>";
    }
}

vote(14);
vote(21);

// 5 Zadanie
function test(...$intValues)
{
    $result = '';
    foreach ($intValues as $intValue) {
        $result .= $intValue;
        return max(5, 8, 11, 0,  4, 3, 9, 1);
    }
    return $result;
}
echo test(5, 8, 11, 0,  4, 3, 9, 1);


$arr = [12, 4, 182, 1, 2.587];
$min = null;
$min_key = null;
$max = null;
$max_key = null;