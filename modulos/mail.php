<?php

require_once('recaptchalib.php');
$publickey = "6Lcsd74SAAAAAHpg53MX0WnPKTEYx1Tu_rp0p992";
$privatekey = "6Lcsd74SAAAAAPN5oJVDw9cnIS8_DKTEV7LjsvuO";
$error = null;

if($_POST["enviado"]  ==  "vendadero"){
 $re_ip = $_SERVER["REMOTE_ADDR"];
   $re_challenge = $_POST["recaptcha_challenge_field"];
   $re_response = $_POST["recaptcha_response_field"];   
   $re_valid = recaptcha_check_answer($privatekey, $re_ip, $re_challenge, $re_response);
   
   if ($re_valid->is_valid) {
      // procesar registro
   
$mensaje_u = $_POST["mensaje"];
$mensaje_listo = htmlspecialchars($mensaje_u). "\n \n IP:". $_SERVER['REMOTE_ADDR'];

$hacia      = 'quichiz_1993@hotmail.com';
$de = $_POST["mail_r"];
$headers = 'quichiz_1993@hotmail.com' . "\r\n" .
    'Reply-To: quichiz_1993@hotmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($hacia, $de, $mensaje_listo, $headers);
echo "<h3>Mensaje enviado!!</h3>";
} else {
      $error = $resp->error;
   }
}else{

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Contacto</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript">
<!--
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- El campo correo debe tener una direccion de correo valida.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- El campo mensaje es requerido.\n'; }
    } if (errors) alert('Error(es) al enviar:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
//-->
</script>
<style type="text/css">td img {display: block;}

input#mail_r{
width: 384px;
height: 30px;
border:0px solid #000000;
}


textarea#mensaje {
width: 613px;
height: 117px;
	border: 0px solid #cccccc;
	padding: 5px;
	font-family: Tahoma, sans-serif;

}


</style>

</head>
<body bgcolor="#ffffff">
<form method="post" id="formu">
<table border="0" cellpadding="0" cellspacing="0" width="667">

  <tr>
   <td><img src="spacer.gif" width="5" height="1" border="0" alt="" /></td>
   <td><img src="spacer.gif" width="31" height="1" border="0" alt="" /></td>
   <td><img src="spacer.gif" width="138" height="1" border="0" alt="" /></td>
   <td><img src="spacer.gif" width="15" height="1" border="0" alt="" /></td>
   <td><img src="spacer.gif" width="304" height="1" border="0" alt="" /></td>
   <td><img src="spacer.gif" width="80" height="1" border="0" alt="" /></td>
   <td><img src="spacer.gif" width="76" height="1" border="0" alt="" /></td>
   <td><img src="spacer.gif" width="13" height="1" border="0" alt="" /></td>
   <td><img src="spacer.gif" width="5" height="1" border="0" alt="" /></td>
   <td><img src="spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>

  <tr>
   <td colspan="9"><img name="../uthurunku/frm_r1_c1" src="../uthurunku/frm_r1_c1.png" width="667" height="39" border="0" id="../uthurunku/frm_r1_c1" alt="" /></td>
   <td><img src="spacer.gif" width="1" height="39" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="2" colspan="4"><img name="../uthurunku/frm_r2_c1" src="../uthurunku/frm_r2_c1.png" width="189" height="124" border="0" id="../uthurunku/frm_r2_c1" alt="" /></td>
   <td colspan="2"><input name="mail_r" type="text" id="mail_r"  /></td>
   <td rowspan="2" colspan="3"><img name="../uthurunku/frm_r2_c7" src="../uthurunku/frm_r2_c7.png" width="94" height="124" border="0" id="../uthurunku/frm_r2_c7" alt="" /></td>
   <td><img src="spacer.gif" width="1" height="30" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="2"><img name="../uthurunku/frm_r3_c5" src="../uthurunku/frm_r3_c5.png" width="384" height="94" border="0" id="../uthurunku/frm_r3_c5" alt="" /></td>
   <td><img src="spacer.gif" width="1" height="94" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="4" colspan="2"><img name="../uthurunku/frm_r4_c1" src="../uthurunku/frm_r4_c1.png" width="36" height="355" border="0" id="../uthurunku/frm_r4_c1" alt="" /></td>
   <td colspan="5"><textarea name="mensaje" id="mensaje"></textarea></td>
   <td rowspan="4" colspan="2"><img name="../uthurunku/frm_r4_c8" src="../uthurunku/frm_r4_c8.png" width="18" height="355" border="0" id="../uthurunku/frm_r4_c8" alt="" /></td>
   <td><img src="spacer.gif" width="1" height="119" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="5"><img name="../uthurunku/frm_r5_c3" src="../uthurunku/frm_r5_c3.png" width="613" height="80" border="0" id="../uthurunku/frm_r5_c3" alt="" /></td>
   <td><img src="spacer.gif" width="1" height="80" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="2"><img name="../uthurunku/frm_r6_c3" src="../uthurunku/frm_r6_c3.png" width="138" height="156" border="0" id="../uthurunku/frm_r6_c3" alt="" /></td>
   <td colspan="2"><?php echo recaptcha_get_html($publickey, $error); ?></td>
   <td rowspan="2" colspan="2"><img name="../uthurunku/frm_r6_c6" src="../uthurunku/frm_r6_c6.png" width="156" height="156" border="0" id="../uthurunku/frm_r6_c6" alt="" /></td>
   <td><img src="spacer.gif" width="1" height="132" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="2"><img name="../uthurunku/frm_r7_c4" src="../uthurunku/frm_r7_c4.png" width="319" height="24" border="0" id="../uthurunku/frm_r7_c4" alt="" /></td>
   <td><img src="spacer.gif" width="1" height="24" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="2"><img name="../uthurunku/frm_r8_c1" src="../uthurunku/frm_r8_c1.png" width="5" height="61" border="0" id="../uthurunku/frm_r8_c1" alt="" /></td>
   <td colspan="7">
   
   <input type="hidden"  name="enviado" value="vendadero"/>
   <input type="image" src="../uthurunku/frm_r8_c2.png" width="657" height="46" border="0" onClick="MM_validateForm('mail_r','','RisEmail','mensaje','','R');return document.MM_returnValue" />
   
   
   
   
   </td>
   <td rowspan="2"><img name="../uthurunku/frm_r8_c9" src="../uthurunku/frm_r8_c9.png" width="5" height="61" border="0" id="../uthurunku/frm_r8_c9" alt="" /></td>
   <td><img src="spacer.gif" width="1" height="46" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="7"><img name="../uthurunku/frm_r9_c2" src="../uthurunku/frm_r9_c2.png" width="657" height="15" border="0" id="../uthurunku/frm_r9_c2" alt="" /></td>
   <td><img src="spacer.gif" width="1" height="15" border="0" alt="" /></td>
  </tr>
</table>
</form>
</body>
</html>

<?
}?>