<?php 
header('Content-type: application/txt');

class Browser { 

    public static function detect() { 
        $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']); 

 
        if (preg_match('/opera/', $userAgent)) { 
            $name = 'Opera'; 
        } 
		 if (preg_match('/webkit/', $userAgent) && preg_match('/chrome/', $userAgent)&& preg_match('/mozilla/', $userAgent)) { 
            $name = 'Chrome'; 
        } 
        elseif (preg_match('/webkit/', $userAgent)) { 
            $name = 'Safari'; 
        } 
        elseif (preg_match('/msie/', $userAgent)) { 
            $name = 'Internet Explorer'; 
        } 
        elseif (preg_match('/mozilla/', $userAgent) && !preg_match('/compatible/', $userAgent)) { 
            $name = 'Firefox'; 
        } 
        else { 
            $name = 'No reconocido =S'; 
        } 

        // What version? 
        if (preg_match('/.+(?:rv|it|ra|ie)[\/: ]([\d.]+)/', $userAgent, $matches)) { 
            $version = $matches[1]; 
        } 
        else { 
            $version = 'unknown'; 
        } 

        // Running on what platform? 
        if (preg_match('/linux/', $userAgent)) { 
            $platform = 'Linux'; 
        } 
        elseif (preg_match('/macintosh|mac os x/', $userAgent)) { 
            $platform = 'Mac'; 
        } 
        elseif (preg_match('/windows|win32/', $userAgent)) { 
            $platform = 'Windows'; 
        } 
        else { 
            $platform = 'No reconocido =S'; 
        } 

        return array( 
            'name'      => $name, 
            'version'   => $version, 
            'platform'  => $platform, 
            'userAgent' => $userAgent 
        ); 
    } 
} 

//Usage: 
$browser = Browser::detect(); 
echo "&Navegador=".$browser['name']."&SO=".$browser['platform']."&IP=".$_SERVER['REMOTE_ADDR']."";
?> 