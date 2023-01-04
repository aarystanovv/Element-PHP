<?php

/* Task 1 */
echo "Task 1";
echo '<br>';

echo round(3.65, 1.5);
print '<br>';
print round(6.65, 1.5, PHP_ROUND_HALF_DOWN);
print '<br>';
echo round(-11.54, 1);
print '<br>';
print '<br>';

/* Task 2 */
echo '<br>';
echo "Task 2";
echo '<br>';

$a = rand(1, 20);
$b = rand(1, 20);

const PLUS = 1;
const MINUS = 2;
const DIVISION = 3;
const MULTIPLY = 4;
const MODULE = 5;

$random = rand(1, 5);
if($b != 0) {
    if ($random == 1) {
        echo "Operator : PLUS";
        echo '<br>';
        $result = $a + $b;
        print "{$a} + {$b} = " . $result;
        echo '<br>';
    } elseif ($random == 2) {
        echo "Operator : MINUS";
        echo '<br>';
        $result = $a - $b;
        print "{$a} - {$b} = " . $result;
        echo '<br>';
    } elseif ($random == 3) {
        echo "Operator : DIVISION";
        echo '<br>';
        $result = $a / $b;
        print "{$a} / {$b} = " . $result;
        echo '<br>';
    } elseif ($random == 4) {
        echo "Operator : MULTIPLY";
        echo '<br>';
        $result = $a * $b;
        print "{$a} * {$b} = " . $result;
        echo '<br>';
    } elseif ($random == 5){
        echo "Operator : MODULE";
        echo '<br>';
        $result = $a % $b;
        print "{$a} % {$b} = " . $result;
        echo '<br>';
    }
}

/* Task 3 */
echo '<br>';
echo "Task 3";
$human1 = rand(1, 3);
$human2 = rand(1, 3);

const ROCK = 1;
const PAPER = 2;
const SCISSORS = 3;

if($human1 == 1){
    echo '<br>';
    print "Анна: камень";
} elseif ($human1 == 2){
    echo '<br>';
    print "Анна: бумага";
} elseif ($human1 == 3){
    echo '<br>';
    print "Анна: ножницы";
}

if($human2 == 1){
    echo '<br>';
    print "Акерке: камень";
    echo '<br>';
} elseif ($human2 == 2){
    echo '<br>';
    print "Акерке: бумага";
    echo '<br>';
} elseif ($human2 == 3){
    echo '<br>';
    print "Акерке: ножницы";
    echo '<br>';
}

if ($human1 > $human2){
    print "Выиграл игрок: Акерке";
    echo '<br>';
} elseif ($human1 < $human2){
    print "Выиграл игрок: Анна";
    echo '<br>';
} else {
    print "Ничья";
    echo '<br>';
}

/* Task 4 */
echo '<br>';
echo "Task 4";

$num1 = rand();
$num2 = rand();

echo '<br>';

print "Num1: ";
print $num1;
echo '<br>';
print "Num2: ";
print $num2;
echo '<br>';
echo '<br>';

$num1 = $num1 + $num2 - ($num2 = $num1);

print "Num1: ";
print $num1;
echo '<br>';
print "Num2: ";
print $num2;