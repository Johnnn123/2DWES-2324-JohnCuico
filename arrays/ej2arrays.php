<?php
$numerosImpares = array();
$contador = 0;
$sumaPares = 0;
$sumaImpares = 0;
$num = 1;
while ($contador < 20) {
$numerosImpares[] = $num;
if ($contador % 2 == 0) {
$sumaPares += $num;
} else {
$sumaImpares += $num;
}
$num += 2;
$contador++;
}
$mediaPares = $sumaPares / ($contador / 2);
$mediaImpares = $sumaImpares / ($contador / 2);
?>

<!DOCTYPE html>
<html>
<head>
    <title>impares</title>
</head>
<body>
    <h2>Los primeros 20 numeros impares</h2>
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
    <br>
    <p>Media de pares <?php echo $mediaPares; ?></p>
    <p>Media de impares <?php echo $mediaImpares; ?></p>
</body>
</html>
