-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-11-2010 a las 20:20:27
-- Versión del servidor: 5.0.91
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `quichiz_menus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `mensaje` text NOT NULL,
  `ip` varchar(15) NOT NULL,
  `nick` varchar(20) NOT NULL,
  `num` varchar(2) NOT NULL,
  KEY `num` (`num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `chat`
--

INSERT INTO `chat` (`mensaje`, `ip`, `nick`, `num`) VALUES
('Bienvenidos al chat!!', 'Webmaster', '<b>Administrador</b>', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE IF NOT EXISTS `contenido` (
  `cont` text NOT NULL,
  `ID` varchar(7) NOT NULL,
  KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`cont`, `ID`) VALUES
('<p><span style="font-size: medium;"><strong>Nunca has pensado el &iquest;Porque cuando quiero mostrar alertas el Batch me sale asi?</strong></span></p>\r\n<p>&nbsp;</p>\r\n<p><img src="http://i736.photobucket.com/albums/xx10/quichiz1993/m1.jpg" alt="" width="285" height="114" /></p>\r\n<p>&nbsp;</p>\r\n<p><span style="font-size: medium;"><strong>nunca has querido que salga asi?:</strong></span></p>\r\n<p><img src="http://i736.photobucket.com/albums/xx10/quichiz1993/m2.jpg" alt="" width="150" height="135" /></p>\r\n<p><span style="font-size: medium;"><strong>Bueno esto puede ser posible gracias a un script que desarrolle .... lo pueden descargar de aqui(viene con manual incluido):</strong></span></p>\r\n<p><a href="http://sourceforge.net/projects/mensajes/" target="_blank"><img border=0 src="http://2.bp.blogspot.com/_ZKx4hbdqLu8/SYnozSEdekI/AAAAAAAAACs/cFOK1lPFvMs/s320/descargar.png" alt="" width="178" height="66" /></a></p>\r\n<p>&nbsp;</p>\r\n<p><span style="color: #333333; font-size: small;"><strong>Suerte ;)</strong></span></p>', 'LHT93J2'),
('<p><span style="font-size: medium;">&iquest;Alguna vez has tenido alguna duda acerca de como usar un determinado comando?</span></p>\r\n<p><span style="font-size: medium;">&iquest;Te aburre estar escribiendo en la consola "HELP" o "COMANDO /?"</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style="font-size: medium;">Bueno te dejo un programa que te solucionara las cosas un poquito:</span></p>\r\n<p><span style="text-decoration: underline; font-size: medium;">Descarga el EXE:</span></p>\r\n<p><a target="_blank" href="http://www.megaupload.com/?d=6HDHRFVA"><img src="http://2.bp.blogspot.com/_ZKx4hbdqLu8/SYnozSEdekI/AAAAAAAAACs/cFOK1lPFvMs/s320/descargar.png" alt="" width="178" height="66" border="0"/></a></p>\r\n<p><span style="text-decoration: underline; font-size: medium;">Descarga en RAR:</span></p>\r\n<p><a target="_blank" href="http://www.megaupload.com/?d=K2SQQAH3"><img src="http://2.bp.blogspot.com/_ZKx4hbdqLu8/SYnozSEdekI/AAAAAAAAACs/cFOK1lPFvMs/s320/descargar.png" alt="" width="178" height="66" border="0" /></a></p>\r\n<p>&nbsp;</p>\r\n<p><span style="font-size: medium;">en este peque&ntilde;o programa pondras el comando que desees y veras la descripci&oacute;n.</span></p>\r\n<p>&nbsp;</p>', 'B9S9RO5'),
('<p>&iquest;&iquest;Cuantas veces te has quedado en el internet horas intentando encontrar un pincel???</p>\r\n<p>!!Ya no es problema!!</p>\r\n<p>aqui te dejo <a href="http://www.findbrushes.com/" target="_blank">FindBrushes</a>, una web en donde podras encontrar cientos, por no decir MILES de pinceles!!</p>\r\n<p><a href="http://www.findbrushes.com/" target="_blank"><img src="http://i736.photobucket.com/albums/xx10/quichiz1993/find.jpg" border="0" alt="" width="364" height="233" /></a></p>', 'BI8NYTP'),
('    <p><span style="font-size: medium;">\r\nExiste una regla, la cual es fundamental acordarse al momento de programar en PHP, y es que <b>nunca debes confiar en el usuario.</b><br> No lo digo por malo, sino por que nunca se sabe que puede entrar en tu web (Spiders, Bots, Hackers, etc),uno de los pasos para poner un poco de seguridad en tu web es filtrando los datos que se envian desde un formulario a una pagina PHP, en esta oportunidad les brindo uno de los tantos metodos para hacerlo.<br><br>Supongamos el caso de que desde el formulario estan enviando la variable <i>nombre</i> por el metodo post hacia <i>datos.php</i>.</span><br>\r\n<table border="0" cellspacing="0" cellpadding="0"><tr><td>\r\n<b><i>datos.php</i></b></td></tr><tr><td>\r\n<pre class="brush: php;">\r\n&lt;?php\r\n//Inicio de la funcion filtrar\r\nfunction filtrar(&#36;texto){\r\n\r\n\r\n&#36;palabras = array(&quot;bruto&quot;, &quot;tonto&quot;); //puedes agregar mas palabras pero separalas por comas y encierralas en comillas\r\n&#36;prosesando = strip_tags(&#36;texto);\r\n&#36;prosesado = eregi_replace(&quot;&lt;head[^&gt;]*&gt;.*&lt;/head&gt;&quot;,&quot; &quot;,&#36;prosesando);\r\n\r\n&#36;prosesado1 = eregi_replace(&quot;&lt;script[^&gt;]*&gt;.*&lt;/script&gt;&quot;,&quot; &quot;,&#36;prosesado);\r\n&#36;prosesado2 = eregi_replace(&quot;&lt;style[^&gt;]*&gt;.*&lt;/style&gt;&quot;,&quot; &quot;,&#36;prosesado1);\r\n\r\n&#36;prosesado3 = eregi_replace(&quot;&lt;[^&gt;]*&gt;&quot;,&quot; &quot;,&#36;prosesado2);\r\n&#36;prosesado4 = eregi_replace(&quot;&amp;nbsp;&quot;,&quot;&quot;,&#36;prosesado3);\r\n&#36;prosesado5 = str_replace(&#36;palabras ,&quot;&lt;font color=red&gt;&lt;b&gt;***&lt;/b&gt;&lt;/font&gt;&quot;, &#36;prosesado4);\r\n&#36;prosesado_fnl = htmlentities(&#36;prosesado5); //Reemplazo cualquier cosa que tenga una representacion en el codigo HTML\r\nreturn &#36;prosesado_fnl;\r\n\r\n}\r\n//Fin de la funcion filtrar\r\n\r\n&#36;nombre = filtrar(&#36;_POST[''nombre'']);\r\necho &#36;nombre;\r\n\r\n\r\n?&gt;\r\n</pre></td></tr></table><br><br><br>\r\n<span style="font-size: medium;">\r\nLa funcion <i>filtrar</i> se puede separar y la puedes colocar en un archivo llamado <i>funciones.php</i>, que luego la incluyes en <i>datos.php</i>, seria algo asi:\r\n</span><br>\r\n<table border="0" cellspacing="0" cellpadding="0"><tr><td>\r\n<b><i>funciones.php</i></b></td></tr><tr><td>\r\n<pre class="brush: php;">\r\n&lt;?php\r\n//Inicio de la funcion filtrar\r\nfunction filtrar(&#36;texto){\r\n\r\n\r\n&#36;palabras = array(&quot;bruto&quot;, &quot;tonto&quot;); //puedes agregar mas palabras pero separalas por comas y encierralas en comillas\r\n&#36;prosesando = strip_tags(&#36;texto);\r\n&#36;prosesado = eregi_replace(&quot;&lt;head[^&gt;]*&gt;.*&lt;/head&gt;&quot;,&quot; &quot;,&#36;prosesando);\r\n\r\n&#36;prosesado1 = eregi_replace(&quot;&lt;script[^&gt;]*&gt;.*&lt;/script&gt;&quot;,&quot; &quot;,&#36;prosesado);\r\n&#36;prosesado2 = eregi_replace(&quot;&lt;style[^&gt;]*&gt;.*&lt;/style&gt;&quot;,&quot; &quot;,&#36;prosesado1);\r\n\r\n&#36;prosesado3 = eregi_replace(&quot;&lt;[^&gt;]*&gt;&quot;,&quot; &quot;,&#36;prosesado2);\r\n&#36;prosesado4 = eregi_replace(&quot;&amp;nbsp;&quot;,&quot;&quot;,&#36;prosesado3);\r\n&#36;prosesado5 = str_replace(&#36;palabras ,&quot;&lt;font color=red&gt;&lt;b&gt;***&lt;/b&gt;&lt;/font&gt;&quot;, &#36;prosesado4);\r\n&#36;prosesado_fnl = htmlentities(&#36;prosesado5); //Reemplazo cualquier cosa que tenga una representacion en el codigo HTML\r\nreturn &#36;prosesado_fnl;\r\n\r\n}\r\n//Aqui termina la funcion filtrar, pero luego puedes seguir a&ntilde;adiendo mas funciones\r\n?&gt;\r\n</pre></td></tr></table><br>\r\n\r\n<br>\r\n<table border="0" cellspacing="0" cellpadding="0"><tr><td>\r\n<b><i>datos.php</i></b></td></tr><tr><td>\r\n<pre class="brush: php;">\r\n&lt;?php\r\n//Icluyo funciones.php\r\ninclude("funciones.php");\r\n\r\n&#36;nombre = filtrar(&#36;_POST[''nombre'']);\r\necho &#36;nombre;\r\n\r\n\r\n?&gt;\r\n</pre></td></tr></table><br>\r\n\r\n<p><span style="font-size: medium;">... como repito, es fundamental que filtres los datos que se envian por formularios para evitar muchas consecuencias.</span></p>', '654987'),
('<center><b>Previsualizaci&oacute;n</b><br>\r\n<img width="500" src="http://i736.photobucket.com/albums/xx10/quichiz1993/preview.jpg"><br><br><br>\r\n<b>Descarga:</b><br>\r\n<a href="http://filezilla-project.org/download.php?type=client" target="_blank"><img src="http://2.bp.blogspot.com/_ZKx4hbdqLu8/SYnozSEdekI/AAAAAAAAACs/cFOK1lPFvMs/s320/descargar.png" border="0" width="178" height="66"></a>\r\n</center>', 'LD7MVX');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enlaces`
--

CREATE TABLE IF NOT EXISTS `enlaces` (
  `nombre` varchar(200) NOT NULL,
  `onde` varchar(7) NOT NULL,
  `tipo` varchar(3) NOT NULL,
  `ante` varchar(3) NOT NULL,
  `ico` varchar(35) NOT NULL,
  `cod` varchar(2) NOT NULL,
  KEY `nombre` (`nombre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `enlaces`
--

INSERT INTO `enlaces` (`nombre`, `onde`, `tipo`, `ante`, `ico`, `cod`) VALUES
('Ayuda con comandos', 'B9S9RO5', 'dcm', 'cmb', '[ico]ico[/ico]', 'no'),
('Alertas personalizadas', 'LHT93J2', 'dcm', 'cmb', '[ico]ico[/ico]', 'no'),
('Numero IP', 'ip', 'rdr', 'rec', '[ico]ico[/ico]', 'no'),
('Ofuscar codigos', 'opp_ifr', 'rdr', 'rec', '[ico]ico[/ico]', 'no'),
('Buscador de pinceles', 'BI8NYTP', 'dcm', 'dis', '[ico]photoshopico[/ico]', 'no'),
('Filtrar datos', '654987', 'dcm', 'php', '[ico]ico[/ico]', 'si'),
('FileZilla, cliente FTP', 'LD7MVX', 'dcm', 'des', '[ico]ico[/ico]', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `normales`
--

CREATE TABLE IF NOT EXISTS `normales` (
  `ingreso` varchar(12) NOT NULL,
  `contra` varchar(35) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `estadodeweb` varchar(6) NOT NULL,
  `ip` varchar(16) NOT NULL,
  KEY `usuario` (`usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `normales`
--

INSERT INTO `normales` (`ingreso`, `contra`, `usuario`, `estadodeweb`, `ip`) VALUES
('inkadelared', 'bb10804e31524775bad3a12252ddf670', 'Administrador', 'constr', '190.235.100.139');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulo`
--

CREATE TABLE IF NOT EXISTS `titulo` (
  `titulo` varchar(150) NOT NULL,
  `prec` varchar(7) NOT NULL,
  `nume` varchar(2) NOT NULL,
  KEY `prec` (`prec`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `titulo`
--

INSERT INTO `titulo` (`titulo`, `prec`, `nume`) VALUES
('CMD/BATCH', 'cmb', '5'),
('HTML', 'htm', '3'),
('PHP', 'php', '4'),
('Diseño', 'dis', '2'),
('Recursos', 'rec', '1'),
('Descargas', 'des', '6'),
('Gadgets / Scripts', 'gys', '7');
