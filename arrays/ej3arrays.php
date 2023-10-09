<?php
$numerosBinarios = array();
$numerosOctales = array();
for ($i = 0; $i < 20; $i++) {
$numerosBinarios[] = decbin($i);
$numerosOctales[] = decoct($i);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Numeros Binarios y Octales</title>
</head>
<body>
    <h2>Los 20 primeros numeros binarios y octales</h2>
    <table border="1">
    <tr>
    <th>Índice</th>
    <th>Valor</th>
    <th>Suma</th>
    </tr>
<?php
foreach ($numerosBinarios as $indice => $binario) {
$octal = $numerosOctales[$indice];
echo "<tr>";
echo "<td>$indice</td>";
echo "<td>$binario</td>";
echo "<td>$octal</td>";
echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
