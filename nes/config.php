<?
unset($config) ;$config[1] = 'localhost' ; // Puede ser "localhost" aunque tambi�n una URL o una IP
$config[2] = 'root' ; // Usuario de la base de datos
$config[3] = '' ; // Contrase�a de la base de datos
$config[4] = 'quichiz_menus' ; // Nombre de la base de datos
$conectar = @mysql_connect($config[1],$config[2],$config[3]) or exit('Datos de conexi�n incorrectos.') ;mysql_select_db($config[4],$conectar) or exit('No existe la base de datos.') ;?><?