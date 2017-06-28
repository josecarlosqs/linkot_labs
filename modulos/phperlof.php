<style type="text/css">
  ul{list-style-type:square}
 </style>

<?
// PHP OBFUSCATOR
// (C)2003 Richard Fairthorne -- http://richard.fairthorne.is-a-geek.com
// --------------------------
// Permission is granted to disctibute this file UNMODIFIED from its original
// form. All other rights are reserved.

function splitByNewline($string, $length) {
    while (strlen($string)>0) {
    $newstring.=substr($string, 0, $length) . "\n";
    $string=substr($string, $length);
    }
  return $newstring;
}



$b64_input=stripslashes($_POST['b64_input']);
$b64_action = $_POST['b64_action'];
switch($b64_action) {
    case "perl_encode":
      $output=$b64_input;
         $output=base64_encode($output);
    $output=splitByNewline($output,40);
    $output="#!/usr/bin/perl\nuse MIME::Base64;\neval(decode_base64('\n$output'));";
    
    $ilength=strlen($b64_input);
    $olength=strlen($output);

    ?><script language="javascript">alert('Codigo PERL ofuscado con exito!')</script>
    
    <textarea rows=18 cols=60 name=done><? echo $output;?></textarea>
    <br />
    <b>Ofuscado!</b><br><br>
    <u>Datos:</u><br /><ul>
    
    <li><font color=maroon>Nivel de ofuscaci&oacute;n: Normal</font> </li>
    <li><font color=maroon>Compatibilidad: 100% compatible</font></li>
    <li><font color=maroon>Num. de caracteres de entrada: <?=$ilength;?></font></li>
    <li><font color=maroon>Num. Caracteres de salida: <b><?=$olength;?></b></font></li></ul>
    
    <br>
    Reemplaza el viejo codigo por este (pero antes que lo hagas te recomiendo hacer un backup del archivo, porsiacaso), es posible que tengas que actualizar la ruta del PERL.<br><br>
    
    <input type="button" onclick="location.href='phperlof.php'" value="Seguir ofuscando codigo" />
   
    <?
  break;
    case "php_encode":
      $output=$b64_input;
         $output=gzdeflate("?>".$output."<?",9);
         $output=base64_encode($output);
    $output=splitByNewline($output,40);
    $output="<? eval(gzinflate(base64_decode('\n$output'))); ?>";
    
    $ilength=strlen($b64_input);
    $olength=strlen($output);

    ?><script language="javascript">alert('Codigo PHP ofuscado con exito!')</script>
    
    <textarea rows=18 cols=60 name=done><? echo $output;?></textarea>
    <br />
    <b>Ofuscado!</b><br><br>

<u>Datos:</u><br /><ul>
    
    <li><font color=maroon>Nivel de ofuscaci&oacute;n: Normal</font> </li>
    <li><font color=maroon>Compatibilidad:Se requiere la libreria Zlib en PHP(Por lo general ya biene instalada). 100% compatible</font></li>
    <li><font color=maroon>Num. de caracteres de entrada: <? echo $ilength;?></font></li>
    <li><font color=maroon>Num. Caracteres de salida: <b><? echo $olength;?></b></font></li></ul>


    <br>
    Reemplaza el viejo codigo por este (pero antes que lo hagas te recomiendo hacer un backup del archivo, porsiacaso).<br><br>
    
<input type="button" onclick="location.href='phperlof.php'" value="Seguir ofuscando codigo" />
    <?
  break;
    case "php_encode_hi":
      $output=$b64_input;
    for ($b64_counter=0; $b64_counter<10; $b64_counter++) {
          $output=gzdeflate("?>".$output."<?",9);
          $output=base64_encode($output);
      $output="<? eval(gzinflate(base64_decode('$output'))); ?>";
    }
        $output=gzdeflate("?>".$output."<?",9);
        $output=base64_encode($output);
    $output="<? eval(gzinflate(base64_decode('\n$output'))); ?>";
    
    $ilength=strlen($b64_input);
    $olength=strlen($output);
    
    ?><script language="javascript">alert('Codigo PHP ofuscado con exito!')</script>
    
    <textarea rows=18 cols=60 name=done><? echo $output;?></textarea>
    <br />
    <b>Ofuscado!</b><br><br>

<u>Datos:</u><br /><ul>
    
    <li><font color=maroon>Nivel de ofuscaci&oacute;n: Fuerte</font> </li>
    <li><font color=maroon>Compatibilidad:Se requiere la libreria Zlib en PHP(Por lo general ya biene instalada). 100% compatible</font></li>
    <li><font color=maroon>Num. de caracteres de entrada: <? echo $ilength;?></font></li>
    <li><font color=maroon>Num. Caracteres de salida: <b><? echo $olength;?></b></font></li></ul>


    <br>
    Reemplaza el viejo codigo por este (pero antes que lo hagas te recomiendo hacer un backup del archivo, porsiacaso).<br><br>
    
<input type="button" onclick="location.href='phperlof.php'" value="Seguir ofuscando codigo" />
    <?
  break;
  // case "decode":
  //     $output=htmlentities(base64_decode($b64_input),ENT_QUOTES);
  // break;
  default:
    ?> <b>Esta herramienta sirve para ofuscar codigo PHP y PERL(OJO: Ofuscar no es lo mismo que encriptar, pero lo hace ilegible al ojo humano).</b> <br /><u>Pasos que debes seguir:</u><br />
    <ul><li>Pega el codigo que quieres ofuscar en la caja de texto de abajo.</li>
    <li>Selecciona el tipo de ofuscaci&oacute;n deseada.</li>
    <li>Dale click a "Ofuscar!"</li></ul><br />
    
    <form method="post"><center>
    <textarea  name="b64_input" cols="60" rows="16"></textarea><br>
    <SELECT name="b64_action">
    <OPTION value="php_encode">PHP - Ofuscaci&oacute;n simple</OPTION>
    <OPTION value="php_encode_hi">PHP - Ofuscaci&oacute;n fuerte</OPTION>
    <OPTION value="perl_encode">PERL - Ofuscaci&oacute;n simple</OPTION>
    </SELECT><br />
    <input type=submit name=submit value="Ofuscar!">  </center>
    <!-- <input type=submit name=b64_action value=decode> -->
    </form>
    <?  
  break;
}
?>


<!--LINKOT.UNI.CC, CASI TODOS LOS DERECHOS RESERVADOS-->