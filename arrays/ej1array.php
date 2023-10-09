
<?php

$numerosImpares = array();
$contador = 0;
$suma = 0;
$num = 1;
while ($contador < 20) {
    $numerosImpares[] = $num;
    $suma += $num;
    $num += 2;
    $contador++;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>impares</title>
</head>
<body>
    <h2>Los 20 primeros numeros impares</h2>
    <table border="1">
    <tr>
    <th>Índice</th>
    <th>Valor</th>
    <th>Suma</th>
    </tr>
    <?php
    $sumaAcumulativa = 0;
    foreach ($numerosImpares as $indice => $valor) {
    $sumaAcumulativa += $valor;
    echo "<tr>";
    echo "<td>$indice</td>";
    echo "<td>$valor</td>";
    echo "<td>$sumaAcumulativa</td>";
    echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
