<?php


class Producto
{
    private $CodProducto;
    private $Nombre;
    private $PrecioCompra;
    private $PrecioVenta;
    private $FechaVencimiento;
    private $Cantidad;


    /**
     * @return mixed
     */
    public function getCantidad()
    {
        return $this->Cantidad;
    }

    /**
     * @return mixed
     */
    public function getCodProducto()
    {
        return $this->CodProducto;
    }

    /**
     * @return mixed
     */
    public function getFechaVencimiento()
    {
        return $this->FechaVencimiento;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * @return mixed
     */
    public function getPrecioCompra()
    {
        return $this->PrecioCompra;
    }

    /**
     * @return mixed
     */
    public function getPrecioVenta()
    {
        return $this->PrecioVenta;
    }

    /**
     * @param mixed $Cantidad
     */
    public function setCantidad($Cantidad)
    {
        $this->Cantidad = $Cantidad;
    }

    /**
     * @param mixed $CodProducto
     */
    public function setCodProducto($CodProducto)
    {
        $this->CodProducto = $CodProducto;
    }

    /**
     * @param mixed $FechaVencimiento
     */
    public function setFechaVencimiento($FechaVencimiento)
    {
        $this->FechaVencimiento = $FechaVencimiento;
    }

    /**
     * @param mixed $Nombre
     */
    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
    }

    /**
     * @param mixed $PrecioCompra
     */
    public function setPrecioCompra($PrecioCompra)
    {
        $this->PrecioCompra = $PrecioCompra;
    }

    /**
     * @param mixed $PrecioVenta
     */
    public function setPrecioVenta($PrecioVenta)
    {
        $this->PrecioVenta = $PrecioVenta;
    }
}