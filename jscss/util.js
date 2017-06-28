

// here we define global variable
var ajaxdestination="";
var peachepe = "";
function Abrir(what,como,where) { // get data from source (what)
 try {
   xmlhttp = window.XMLHttpRequest?new XMLHttpRequest():
  		new ActiveXObject("Microsoft.XMLHTTP");
 }
 catch (e) { /* do nothing */ }
if(''+como+'' == 'rdr'){
	peachepe = 'pagina';
}else if(''+como+'' == 'dcm'){
	peachepe = 'documento';
}else if(''+como+'' == 'dcm_c'){
	peachepe = 'documento_c';
}else{
	document.write('Error!');
}
 document.getElementById(where).innerHTML ="<center><img src='loading.gif'></center>";
// we are defining the destination DIV id, must be stored in global variable (ajaxdestination)
 ajaxdestination=where;
 xmlhttp.onreadystatechange = triggered; // when request finished, call the function to put result to destination DIV
 xmlhttp.open("GET", "lt_"+peachepe+".php?v="+what);
 xmlhttp.send(null);
  return false;
}

function triggered() { // put data returned by requested URL to selected DIV
  if (xmlhttp.readyState == 4) if (xmlhttp.status == 200) 
    document.getElementById(ajaxdestination).innerHTML =xmlhttp.responseText;
}

function inicio_flh(){
	Abrir('saludo', 'rdr', 'cont');
}
function contacto_flh(){
	Abrir('contacto', 'rdr', 'cont');
}


