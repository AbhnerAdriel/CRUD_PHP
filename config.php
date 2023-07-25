<?php

    // Conexão com o banco de dados:
    define('HOST', 'localhost');
    define('DBNAME', 'test');
    define('USER', 'root');
    define('PASS', '');

    try {
        $pdo = new PDO('mysql:host='.HOST.';dbname='.DBNAME, USER, PASS, 
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));  // Conecta com o banco de dados MySQL
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
    }
?>