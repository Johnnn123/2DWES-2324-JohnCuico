
<HTML>
<HEAD> <TITLE> Cambios de base y formato </TITLE> </HEAD>
<BODY>
<?php
 $ip = "192.18.16.204";
 $digito= explode (".", $ip);
 $binario="";
 
 
 list($numero1, $numero2, $numero3, $numero4) = $digito;
 $binario .= str_pad(decbin($numero1), 8, "0",STR_PAD_LEFT) . ".";
 $binario .= str_pad(decbin($numero2), 8, "0",STR_PAD_LEFT) . ".";
 $binario .= str_pad(decbin($numero3), 8, "0",STR_PAD_LEFT) . ".";
 $binario .= str_pad(decbin($numero4), 8, "0",STR_PAD_LEFT) . ".";
 
 
 print "El código binario de $ip es $binario";
 
 
?>
 </BODY>
</HTML>

