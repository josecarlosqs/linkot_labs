<?php

require 'conex.php' ;

$con = mysql_query("select count(ingreso) from normales where ingreso='$_COOKIE[lt_nick]' and contra='$_COOKIE[lt_pass]' and usuario='$_COOKIE[lt_id]'") ;
//if(!mysql_result($con,0,0)) {
//        exit('<p><b>Esta sección es sólo para usuari@s registrad@s.</b><p><a href="index.php">Por favor regresa a la pagina principal y registrate.</a>') ;
//}
?>
