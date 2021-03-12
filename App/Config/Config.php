<?php

namespace App\Config;

class Config 
{

    CONST HOST_NAME = 'localhost';
    CONST DBNAME = 'visitante_ciaw';
    CONST LOGINDB = 'root';
    CONST PASSDB = '';
    CONST EMAIL = '';
    CONST EMAIL_PASS = '';
    CONST HOST_SEND = '';
    CONST PORT_SEND = 587;
    CONST PROTOCOL_SECURE_SEND = 'tls';
    CONST NAME_FROM_SEND = 'Visitantes CIAW';
    CONST TITLE_EMAIL = 'Visitantes CIAW';

    public static function getHost()
    {

        return 'http://localhost/controle/';

    }

    public function getDirAbsolute ()
    {

        return $_SERVER['DOCUMENT_ROOT'] . '/controle';

    }

    public function unlinkRecursive($dir, $deleteRootToo) 
    { 
        if(!$dh = @opendir($dir)) 
        { 
            return; 
        } 
        while (false !== ($obj = readdir($dh))) 
        { 
            if($obj == '.' || $obj == '..') 
            { 
                continue; 
            } 
    
            if (!@unlink($dir . '/' . $obj)) 
            { 
                unlinkRecursive($dir.'/'.$obj, true); 
            } 
        } 
        closedir($dh); 
        if ($deleteRootToo) 
        { 
            @rmdir($dir); 
        } 
        return; 
    } 


}