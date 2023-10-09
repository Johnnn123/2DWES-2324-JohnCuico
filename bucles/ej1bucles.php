<html>
<head>
    <title>ip</title>
</head>
<body>
<?php
function decimalToBinary($decimal) {
    if ($decimal == 0) {
    return "0";
    } elseif ($decimal < 0) {
    return "cambia el numero a positivo";
    }

$binario = "";
while ($decimal > 0) {
$residuo = $decimal % 2;
$binario = $residuo . $binario;
$decimal = (int)($decimal / 2);
}
return $binario;
}


$numeros = [168, 128, 127, 1, 2];
foreach ($numeros as $numero) {
    $resultado = decimalToBinary($numero);
    echo " $numero en binario es $resultado\n";
}
?>

</body>
</html>