<?php
    $_params = array(
        "_host" => "localhost",
        "_user" => "root",
        "_pass" => "",
        "_name" => "proyecto6"
    );

    $conection = mysqli_connect($_params["_host"],$_params["_user"],$_params["_pass"],$_params["_name"]);
    if(mysqli_connect_errno()){
        echo "No se pudo conectar a la base de datos: ". mysqli_connect_error();
    }else{
        echo "Conexión establecida";
    }
?>