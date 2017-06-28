<?



function GenerarCodigo(){

$qa = rand(0,36);
$qa1 = rand(0,36);
$qa2 = rand(0,36);
$qa3 = rand(0,36);
$qa4 = rand(0,36);
$qa5 = rand(0,36);
$qa6 = rand(0,36);

$discernir = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";


$final1 = $discernir[$qa];
$final1 .= $discernir[$qa1];
$final1 .= $discernir[$qa2];
$final1 .= $discernir[$qa3];
$final1 .= $discernir[$qa4];
$final1 .= $discernir[$qa5];
$final1 .= $discernir[$qa6];

//$final .= ucwords($letras[$qa6]);
//$final .= ucwords($letras[$qa7]);


//echo crypt($final, "carpediem2009") ."<br><br>". $final;

 return $final1;
}


function filtro($mensaje) {
$mensaje1 = str_replace("&lt;","<", $mensaje);
$mensaje2 = str_replace("&gt;",">", $mensaje1);
$mensaje3 = str_replace("&quot;","\"", $mensaje2);
$mensaje4 = str_replace("'","&#39;", $mensaje3);
$mensaje5 = str_replace("#","&#35;", $mensaje4);
/*
$mensaje6 = eregi_replace("<head[^>]*>.*</head>"," ",$prosesando5);
$mensaje7 = eregi_replace("<script[^>]*>.*</script>"," ",$prosesado6);
$mensaje8 = eregi_replace("&nbsp;","",$prosesado7);
$mensaje9 = str_replace($palabras ,"<font color=red><b>***</b></font>", $prosesado8);
*/


return $mensaje4;
}




?> 
