
<HTML>
<HEAD> <TITLE> Binario </TITLE> </HEAD>
<BODY>
<?php
    $decimal = $_POST['num1'];
    if (!is_numeric($decimal)) {
    echo "pon un numero decimal";
    } else {
    $binario = decbin($decimal);
    echo "El número binario de $decimal es: $binario";
    }
?>
 </BODY>
</HTML>