<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binario</title>
</head>
<BODY>
 <h1>Binario</h1> 
    <p>ip con notación numero decimal:</p>
<?php
 $ipdecimal = $_POST['num1'];
 {
 $digito= explode (".", $ipdecimal);
 $binario="";
 list($numero1, $numero2, $numero3, $numero4) = $digito;
 $binario .= str_pad(decbin($numero1), 8, "0",STR_PAD_LEFT) . ".";
 $binario .= str_pad(decbin($numero2), 8, "0",STR_PAD_LEFT) . ".";
 $binario .= str_pad(decbin($numero3), 8, "0",STR_PAD_LEFT) . ".";
 $binario .= str_pad(decbin($numero4), 8, "0",STR_PAD_LEFT) . ".";
 echo '<label>Decimal </label><input value="'.$ipdecimal.'"></input><br><br>';
 echo '<label>Binario </label><input value="'.$binario.'" ></input><br>';
    }
 
?>
 </BODY>
</HTML>