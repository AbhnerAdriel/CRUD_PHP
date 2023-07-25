<?php 

    /* 
        Rápida demostração de como seria a implementação do PDO com a utilização de classes (demo)
    */

    define('HOST', 'localhost');
    define('DBNAME', 'crudpdo');
    define('USER', 'root');
    define('PASSWORD', '');
    define('PORT', '3306');

    class MySql
    {
        private static $pdo;

        public static function Connect()
        {
            if (self::$pdo == null)
            {
                try {
                self::$pdo = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';port='.PORT, USER, PASSWORD,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch (PDOException $e) {
                    echo "Erro ao conectar!";
                }
            }
            return self::$pdo;
        }
    }

?>