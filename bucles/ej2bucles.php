<html>
<head>
    <title>IP</title>
</head>
<body>
<?php
function decimalToBase($decimal, $base) {
if ($base < 2 || $base > 9) {
return "Debe estar entre 2 y 9.";
}

if ($decimal == 0) {
return "0";
} elseif ($decimal < 0) {
return "Cambialo a positivo";
}
$resultado = "";
    while ($decimal > 0) {
        $residuo = $decimal % $base;
        $resultado = $residuo . $resultado;
        $decimal = (int)($decimal / $base);
    }

    return $resultado;
}

$numero = 48;
$basesObjetivo = [8, 2, 4, 6];

foreach ($basesObjetivo as $base) {
$resultado = decimalToBase($numero, $base);
echo "Numero $numero en base $base = $resultado\n";
}
?>

</body>
</html>
