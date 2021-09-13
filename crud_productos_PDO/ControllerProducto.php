<?php

require "Producto.php";

class ControllerProducto
{
private $_mbd = null;

    public function __CONSTRUCT(){
        try{
            $this->_mbd = new PDO('mysql:host=localhost;dbname=proyecto6', "root", "", array(
                PDO::ATTR_PERSISTENT => true,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
            ));
            #echo "Conexión Establecida";
        }catch (PDOException $exception){
            echo $exception->getMessage();
            die();
        }
    }

    public function Listar(){
        try{
            $result = array();
            $stm = $this->_mbd->prepare("SELECT * FROM tproducto");
            $stm->execute();

            foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $res){
                $_entity = new Producto();
                $_entity->setCodProducto($res->CodProducto);
                $_entity->setNombre($res->Nombre);
                $_entity->setPrecioCompra($res->PrecioCompra);
                $_entity->setPrecioVenta($res->PrecioVenta);
                $_entity->setFechaVencimiento($res->FechaVencimiento);
                $_entity->setCantidad($res->Cantidad);
                $result[] = $_entity;
            }

            return $result;

        }catch (Execption $exception){
            die($exception->getMessage());
        }
    }

}