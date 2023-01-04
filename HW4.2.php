<?php
$nameAndAges = [
    'Tom Hiddleston' => 41,
    'Arnold Schwarzenegger' => 75,
    'Tom Cruise' => 60,
    'Brad Pitt' => 58,
    'Tom Hanks' => 66,
    'Johnny Depp' => 59,
    'Leonardo DiCaprio' => 48,
    'Will Smith' => 54,
    'Dwayne Johnson' => 50,
    'Hugh Jackman' => 54,
    'Robert Downey Jr.' => 57,
    'Chris Evans' => 41,
    'Jackie Chan' => 68,
    'Jason Momoa' => 43,
    'Samuel L. Jackson' => 73,
    'Al Pacino' => 82,
];
?>

<?php
sort($nameAndAges);
echo "<ul><li>" . implode("</li><li>", $nameAndAges) . "</li></ul><hr>";
echo "<br>";
echo "<br>";
?>


<?php
rsort($nameAndAges);
echo "<ul><li>" . implode("</li><li>", $nameAndAges) . "</li></ul><hr>";
?>


<?php
ksort($nameAndAges);
echo "<ul><li>" . implode("</li><li>", array_keys($nameAndAges)) . "</li></ul><hr>";
?>

<?php
krsort($nameAndAges);
echo "<ul><li>" . implode("</li><li>", array_keys($nameAndAges)) . "</li></ul><hr>";
?>
