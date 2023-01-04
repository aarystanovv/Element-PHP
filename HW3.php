<?php

//Task 1
print "Task 1" . '<br>';
date_default_timezone_set('UTC');
echo "London: " . date('H:i:s d.M.Y') . '<br>';

date_default_timezone_set('Etc/GMT-1');
echo "Paris: " . date('H:i:s d.M.Y') . '<br>';

print '<br>';

//Task2
print "Task 2" . '<br>';
print "Мое день рождения: ";
echo date('d.M.Y', mktime(0,0,0, 9, 11, 2004));
print '<br>';

$birthday = new DateTime('2023-09-11');
$today = new DateTime(date('Y-M-d'));
$interval = $birthday->diff($today);
echo $interval->format('Следующий день рождения через %R%a дней');
print '<br>' . '<br>';

//Task3
print "Task 3" . '<br>';
print "Сегодняшняя дата: ";
echo date('d.M.Y') . '<br>';

$currentYear = date('Y');

$newYear = mktime(0, 0, 0, 1, 1, $currentYear + 1);
$seconds = $newYear - time();

$days = 0; $hours = 0; $minutes = 0;
$oneMinute = 60;
$oneHour = 60 * $oneMinute;
$oneDay = $oneHour * 24;

if ($seconds / $oneDay > 0) {
    $days = (int)($seconds / $oneDay);
    $seconds -= $days * $oneDay;
}

if ($seconds / $oneHour > 0) {
    $hours = (int)($seconds / $oneHour);
    $seconds -= $hours * $oneHour;
}

if ($seconds / $oneMinute > 0) {
    $minutes = (int)($seconds / $oneMinute);
    $seconds -= $minutes * $oneMinute;
}

printf('До Нового года осталось: %02d дней %02d часов %02d минут и %02d секунд', $days, $hours, $minutes, $seconds);

print '<br>' . '<br>';

//Task 4
print "Task 4" . '<br>';
$d = rand(10, 100);
print "Рандомное число: ";
echo $d;
print '<br>';
$ts = strtotime('+' . $d . 'day', strtotime('01 December 2022'));
echo $ts . ' = ' . date('H:i:s d.M.Y', $ts);
print '<br>' . '<br>';

//Task 5
print "Task 5" . '<br>';

echo "Возраст: ";
echo calculate_age('1986-12-06');

function calculate_age($birthday) {
    $birthday_timestamp = strtotime($birthday);
    $age = date('Y') - date('Y', $birthday_timestamp);
    if (date('md', $birthday_timestamp) > date('md')) {
        $age--;
    }
    return $age;
}
