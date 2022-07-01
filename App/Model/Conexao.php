<?php

namespace App\Model;

class Conexao {

    private static $instacia;

    public static function getConn() {
        
        if(!isset(self::$instacia)):
            self::$instacia = new \PDO("mysql:host=localhost;dbname=pdo;charset=utf8","root","");
        endif;
        
        return self::$instacia;
        
    }
}