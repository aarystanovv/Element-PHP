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
<!DOCTYPE html>
<html>
<body>

<?php
sort($nameAndAges);

$clength = count($nameAndAges);
for($x = 0; $x < $clength; $x++) {
    echo $nameAndAges[$x];
    echo "<br>";
}
echo "<br>";
echo "<br>";
?>

</body>
</html>


<!DOCTYPE html>
<html>
<body>

<?php
rsort($nameAndAges);

$clength = count($nameAndAges);
for($x = 0; $x < $clength; $x++) {
    echo $nameAndAges[$x];
    echo "<br>";
}
?>

</body>
</html>
