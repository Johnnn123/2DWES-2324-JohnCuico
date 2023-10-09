<html>
<head>
    <title>IP</title>
</head>
<body>
<?php
function decimalToHexadecimal($decimal) {
if ($decimal == 0) {
return "0";
} elseif ($decimal < 0) {
return "Cambialo a positivo";
}
$hexDigits = "0123456789ABCDEF";
$hexadecimal = "";

while ($decimal > 0) {
$residuo = $decimal % 16;
$hexadecimal = $hexDigits[$residuo] . $hexadecimal;
$decimal = (int)($decimal / 16);
}
return $hexadecimal;
}
$numeros = [48, 222, 15, 1515];
foreach ($numeros as $numero) {
$hexadecimal = decimalToHexadecimal($numero);
 echo "$numero en base 16 es $hexadecimal\n";
}
?>



</body>
</html>