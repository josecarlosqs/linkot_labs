<?php
if(!$_COOKIE['lt_nick']){
echo "<center><img src=\"iconos/mal.png\"></center>";
}else{
?>
<link rel="stylesheet" href="iconos/estilo.css" type="text/css" />
<center>


<div id="menu">
                        
                        <ul id="menuelnlac">
  <li><a href="bloque.php?id=cat" target="objetivo">Agregar nueva categoria.</a></li>
  <li><a href="bloque.php?id=er" target="objetivo">Agregar/Borrar enlace(Redireccion).</a></li>
  <li><a href="bloque.php?id=ei" target="objetivo">Agregar/Borrar enlace(por ID).</a></li>

</ul></div>
<br /><br /><br /><br />
<div id="menu">
                        
                        <ul id="menuelnlac_r">
  <li><a href="salir.php" target="_self">Cerrar sesión.</a></li>
</ul></div>
<?
}
?>