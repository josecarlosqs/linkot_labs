<?php

if($_COOKIE['lt_nick'] == "inkadelared"){




include("config.php");

switch($_GET["id"]){

case "ei" :

?>



	
<!-- /TinyMCE --> 
 

 
  <form method="post" name="m_formulario" id="m_formulario" action="enviar.php"> 
  
  <input type="hidden" name="formu" value="Nenlacei">
  <font face="Verdana" size="2">Nombre del enlace: </font><input name="nombres" type="text"><br><br>
   <font face="Verdana" size="2">Icono(opcional): </font><input name="ico" type="text"><br><br>
  <font face="Verdana" size="2">En que menu??: </font><select name="onde"><option value="noselecti"></option><?php
$resultados = mysql_query("SELECT * FROM titulo");
	while($datic=mysql_fetch_array($resultados)){
	echo "<option value=\"".$datic['prec']."\">'".ucfirst($datic['titulo'])."</option>\n";
	
	}
  ?></select><br><br><br><br>
    	<font face="Verdana" size="2">Contenido del bloque: </font><br>

        
        <br />
			<textarea id="elm1" name="elm1" rows="15" cols="80" style="width: 80%"></textarea> <br />
            <table><tr><td><textarea>
            <pre class="brush: php;"></pre>
            </textarea></td><td><textarea>
            <pre class="brush: html;"></pre>
            </textarea></td><td><textarea>
            <pre class="brush: js;"></pre>
            </textarea></td><td><textarea>
            &#36; es $
            &lt; es <
            &gt; es >
            </textarea></td><td><textarea>
            <a href="" target="_blank"><img src="http://2.bp.blogspot.com/_ZKx4hbdqLu8/SYnozSEdekI/AAAAAAAAACs/cFOK1lPFvMs/s320/descargar.png" border="0" width="178" height="66"></a>
            </textarea></td></tr></table>
            <input type="radio" name="codigo" value="no"  /><b><i>Sin codigo</i></b><br />
            <input type="radio" name="codigo" value="si" /><b><i>Con codigo</i></b><br />            

 

		<br /> 
		<input type="submit" name="save" value="Enviar" /> 






</form>

<?php




break;



case "er" :
?>
  <form method="post" action="enviar.php"> 
  	<div> 
<input type="hidden" name="formu" value="Nenlacer">
  
  
  <font face="Verdana" size="2">Nombre del enlace: </font><input type="text" name="Nenlace_r" /><br />
     <font face="Verdana" size="2">Icono(opcional): </font><input name="ico" type="text"><br><br>
  <font face="Verdana" size="2">En que menu??: </font><select name="onde"><option value="noselecti"></option><?php
$resultados = mysql_query("SELECT * FROM titulo");
	while($datic=mysql_fetch_array($resultados)){
	echo "<option value=\"".$datic['prec']."\">'".ucfirst($datic['titulo'])."</option>\n";
	
	}
  ?></select><br><br>
  
    <font face="Verdana" size="2">Nombre de modulo a redirigir: </font><input type="text" name="Nmod_r" /><br />
    <input type="submit"  value="Listo!!!" />
  </div></form>
  

<?php
break;



case "cat" :

?>
  <form method="post" action="enviar.php"> 
  	<div> 
<input type="hidden" name="formu" value="Ncat">
  
  
  <font face="Verdana" size="2">Nombre de categoria: </font><input type="text" name="Ncat_g" /><br />
  <font face="Verdana" size="2">Precedente: </font><input type="text" name="Ncat_s" /><br />
    <input type="submit"  value="Listo!!!" />
  </div></form>
  

<?php
break;

default:

echo "nada";

break;


}


}else{
echo "<center><img src=\"iconos/mal.png\"></center>";
}

?>

