<?php
    $_mbd = null;
    try{
        $_mbd = new PDO('mysql:host=localhost;dbname=proyecto6', "root", "", array(
                PDO::ATTR_PERSISTENT => true,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
        ));
        echo "Conexión Establecida";
    }catch (PDOException $exception){
        echo $exception->getMessage();
        die();
    }


?>