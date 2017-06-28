<?

include("config.php");
if($_POST[enviar]) {
        function quitar($texto) {
                $texto = trim($texto) ;
                $texto = htmlspecialchars($texto) ;
                // Elimina espacios que no pueden ser borrados por trim()
                $texto = str_replace(chr(160),'',$texto) ;
                return $texto ;
        }
        $nick = quitar($_POST['correo']) ;
        $contrasena = urlencode(md5(crypt(base64_encode($_POST['contras']), "url_6654546545"))) ;

$no = mysql_query("SELECT * FROM normales");
$datos = mysql_fetch_assoc($no);

        if($nick == $datos[ingreso]) {
                if($datos[contra] == $contrasena) {
				$ip = $_SERVER['REMOTE_ADDR'];
                        setcookie('lt_id',$datos[usuario],time()+604800) ;
                        setcookie('lt_nick',$nick,time()+604800) ;
                        setcookie('lt_pass',$contrasena,time()+604800) ;
						mysql_query("UPDATE normales SET ip = '".$ip."' ");
                        ?>
                        <html>
<head>
<title>Panel de Administacion</title>
</head>
<body>
<table width="100%" height="100%" cellspacing="0" cellpadding="1" border="2" bordercolor="#000000"><tr><td width="30%">
<iframe frameborder="0" src="opciones.php" width="100%" height="100%"></iframe></td><td width="70%"><iframe frameborder="0" name="objetivo" src="enespera.php" width="100%" height="100%"></iframe></td></tr></table>
</body>
</html>
<?php
                        //echo "Bien registrado";
                }
                else {
                        echo 'La contraseña es incorrecta. Haz click <a href="javascript:history.back(-1)">aquí</a> para regresar.' ;
                }
        }
        else {
                echo 'El nick no existe. Haz click <a href="javascript:history.back(-1)">aquí</a> para regresar.' ;
        }
}
?>
