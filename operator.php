<!DOCTYPE html>
<html>
<body>

<?php
$x = 74;
$y = 6;

echo "<h3>Aritmatika Dasar</h3>";
echo "Penjumlahan (x + y): " . ($x + $y) . "<br>";
echo "Pengurangan (x - y): " . ($x - $y) . "<br>";
echo "Perkalian (x * y): " . ($x * $y) . "<br>";
echo "Pembagian (x / y): " . ($x / $y) . "<br>";
echo "Modulus (x % y): " . ($x % $y) . "<br>";
echo "Eksponen (x ** y): " . ($x ** $y) . "<br>";

echo "<h3>Operator Penugasan</h3>";
$x += $y; echo "x += y: $x<br>";
$x -= $y; echo "x -= y: $x<br>";
$x *= $y; echo "x *= y: $x<br>";
$x /= $y; echo "x /= y: $x<br>";
$x %= $y; echo "x %= y: $x<br>";

echo "<h3>Operator Perbandingan</h3>";
$a = array(1, 2, 3);
$b = array(1, 2, 3);

echo "Equality (a == b): " . ($a == $b ? "true" : "false") . "<br>";
echo "Identity (a === b): " . ($a === $b ? "true" : "false") . "<br>";
?>  

</body>
</html>
