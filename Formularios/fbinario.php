<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binario</title>
</head>
   <body>
   <h1>Binario</h1> 
   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    numero decimal: <input type="text" name="num1">
    <br>
	<br>
    <input type="submit" value="Calcular">
    <input type="reset" value="Borrar datos">
    </form>

<?php
    $decimal = $_POST['num1'];
    if (!is_numeric($decimal)) {
    echo "<br> pon un numero decimal";
    } else {
    $binario = decbin($decimal);
    echo "<br>El número binario de $decimal es: $binario";
    }
?>
</body>
</html>
