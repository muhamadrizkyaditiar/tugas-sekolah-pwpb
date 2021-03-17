<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,
initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Array</title>
</head>
<body>
<h1>Berlatih Array</h1>

<?php
echo "<h3> Soal 1 </h3>";
/*
SOAL NO 1
Kelompokkan nama-nama di bawah ini ke dalam Array.
Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"
Adults: "Hopper", "Nancy", "Joyce", "Jonathan", "Murray"
*/

$kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"]; // Lengkapi di sini
$adults = ["Hopper", "Nancy", "Joyce", "Jonathan", "Murray"];
echo "<label>Kids :</label>";
print_r($kids);
echo "<br><label>Adults :</label>";
print_r($adults);

echo "<h3> Soal 2</h3>";
/*
SOAL NO 2
Tunjukkan panjang Array di Soal No 1 dan tampilkan isi
dari masing-masing Array.
*/
echo "Cast Stranger Things: ";
echo "<br>";
$jmlkids = count($kids);
echo "Total Kids: $jmlkids " ; // Berapa panjang array kids
echo "<br>";
echo "<ol>";
echo "<li> $kids[0] </li>";
echo "<li> $kids[1] </li>";
echo "<li> $kids[2] </li>";
echo "<li> $kids[3] </li>";
echo "<li> $kids[4] </li>";
echo "<li> $kids[5] </li>";

echo "</ol>";
$jmladult = count($adults);
echo "Total Adults: $jmladult" ;// Berapa panjang array adults
echo "<br>";
echo "<ol>";
echo "<li> $adults[0] </li>";
echo "<li> $adults[1] </li>";
echo "<li> $adults[2] </li>";
echo "<li> $adults[3] </li>";
echo "<li> $adults[4] </li>";

echo "</ol>";

echo "<h3> Soal 3</h3>";
/*
SOAL No 3
Susun data-data berikut ke dalam bentuk Asosiatif Array
(Array Multidimensi)
Name: "Will Byers"
Age: 12,
Aliases: "Will the Wise"
Status: "Alive"
Name: "Mike Wheeler"
Age: 12,
Aliases: "Dungeon Master"
Status: "Alive"
Name: "Jim Hopper"
Age: 43,
Aliases: "Chief Hopper"
Status: "Deceased"
Name: "Eleven"
Age: 12,
Aliases: "El"
Status: "Alive"
*/
$vehicle = [
    ['Will Byers' => ['Age' => '12', 'Aliases' => 'Will the Wise', 'Status' => 'Alive'],
    'Mike Wheeler' => ['Age' => '12', 'Aliases' => 'Dungeon Master', 'Status' => 'Alive'],
    'Jim Hooper' => ['Age' => '43', 'Aliases' => 'Chief Hopper', 'Status' => 'Deceased'],
    'Eleven' => ['Age' => '12', 'Aliases' => 'El', 'Status' => 'Alive']
], // value mobil menjadi index
];
echo '<pre>'; print_r($vehicle);
?>
</body>
</html>