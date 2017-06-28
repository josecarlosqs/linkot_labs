<?php

function FiltroImagenes($titulo){
$Finalizado = str_replace("<img", "<img style=\"max-width: 400 px;\"  rel=\"lightbox\"", $titulo);

return $Finalizado;
}

function filtrar($texto){


$palabras = array("mierda", "mare", "puta", "perra", "prosti", "reconchatumare", "perro", "hdp", "tetas", "culo", "cachar", "hijoeputa", "hijo de puta");
$prosesando = strip_tags($texto);
$prosesado = eregi_replace("<head[^>]*>.*</head>"," ",$prosesando);
$prosesado1 = eregi_replace("<script[^>]*>.*</script>"," ",$prosesado);
$prosesado2 = eregi_replace("<style[^>]*>.*</style>"," ",$prosesado1);
$prosesado3 = eregi_replace("<[^>]*>"," ",$prosesado2);
$prosesado4 = eregi_replace("&nbsp;","",$prosesado3);
$prosesado_fnl = str_replace($palabras ,"<font color=red><b>***</b></font>", $prosesado4);




return $prosesado_fnl;

    }
    
function tiempo($que){

        date_default_timezone_set("UTC");


                if($que == "fecha"){
                        return date("d/m/y");
                };

                if($que == "hora"){
                        $fecha_funcion = time ();
                        $hora_funcion = date ( "h" , $fecha_funcion );
                        $minyseg_funcion = date ( "i:s" , $fecha_funcion );
                        return $hora_funcion - 05 .":".$minyseg_funcion;
                };
                
                
                
                if($que == "fecha_mejorada"){
                        $dia = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado");
                        $mes = array("0","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                        $dian = date("d");
                        $mesn = date("m");
                        $fecha = $dia[$dian];
                        $fecha .= " ";
                        $fecha .= date("d");
                        $fecha .= " de ";
                        $fecha .= $mes[$mesn];
                        $fecha .= " del ";
                        $fecha .= date("Y");

                        return $fecha;
                };

                if((!$que == "hora") or (!$que == "fecha") or (!$que == "fecha_mejorada") or (empty($que))){
                        return "AWANTA AWANTA ... KE INTENTAS EHHH";
                };
}

?>