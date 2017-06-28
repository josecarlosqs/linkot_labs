<?php

if(!$_COOKIE['lt_nick']){
echo "";
}else{

   include("config.php");
      include("funciones.php");
       include("funciones0.php");
	  switch($_POST['formu']){
	  
	  case 'Nenlacei':
	  $trans = get_html_translation_table(HTML_ENTITIES);
$prop1 = $_POST["nombres"];


$enlace_n = strtr($prop1, $trans);
$enlazante = GenerarCodigo();
$prop2 = $_POST["elm1"];
$contenido = $prop2;
$icono = "[ico]".trim($_POST['ico'])."ico[/ico]";

$Sql="insert into enlaces (nombre, onde, tipo,ante,ico,cod)  values ('".$enlace_n."','".$enlazante."', 'dcm','".$_POST['onde']."','".$icono."','".$_POST['codigo']."')";
$Sql2="insert into contenido (ID, cont)  values ('".$enlazante."','".$contenido."')";
   mysql_query($Sql,$conectar) or die ("NO se pudo registrar".mysql_error());
   mysql_query($Sql2,$conectar) or die ("NO se pudo registrar".mysql_error());
//   header("Location: index.html");
   echo "<script>location.href='realizado.html';</script>";


   break;
   
   
   
   case 'Nenlacer':
$titulo = $_POST['Nenlace_r'];
$redi =$_POST['Nmod_r'];
$icono = "[ico]".trim($_POST['ico'])."ico[/ico]";
mysql_query("INSERT INTO enlaces (nombre,onde,tipo,ante,ico) VALUE ('".$titulo."','".$redi."','rdr','".$_POST['onde']."','".$icono."')");
   echo "<script>location.href='realizado.html';</script>";


   break;
   
   
   
   
   
   case 'Ncat':
   $mptres = $_POST["Ncat_g"];
   $mptre = $_POST["Ncat_s"];
 $sql = "INSERT INTO titulo(titulo, prec) VALUES ('".$mptres."','".$mptre."')";
                        mysql_query($sql);
   echo "<script>location.href='realizado.html';</script>";


   break;
   default;
   echo "nada!!!";
    break;
   }
   }
?>