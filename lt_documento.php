<?php
include("nes/config.php");

$uno = mysql_query("SELECT * FROM contenido WHERE ID = '".$_GET['v']."'");
$dos = mysql_fetch_assoc($uno);
$tres = mysql_query("SELECT * FROM enlaces WHERE onde = '".$_GET['v']."'");
$cuatro = mysql_fetch_assoc($tres);
if($cuatro[cod] == "si"){
?>
	<script type="text/javascript" src="scripts/shCore.js"></script>
	<script type="text/javascript" src="scripts/shBrushPhp.js"></script>
	<link type="text/css" rel="stylesheet" href="styles/shCoreDefault.css"/>
    <script type="text/javascript">
     SyntaxHighlighter.all()
</script>
    <?php }
echo $dos[cont];


?>