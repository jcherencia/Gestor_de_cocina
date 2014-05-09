<?php

namespace Gestor_cocina\AlmacenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productos
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Productos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=150)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=150)
     */
    private $slug;

    /**
     * @var integer
     *
     * @ORM\Column(name="precio", type="float")
     */
    private $precio;

    /**
     * @var decimal
     *
     * @ORM\Column(name="unidad_compra", type="float")
     */
    private $unidadCompra;

    /**
     * @var string
     *
     * @ORM\Column(name="unidad", type="string", length=30)
     */
    private $unidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="stock", type="float")
     */
    private $stock;

    /**
     * @var integer
     *
     * @ORM\Column(name="stock_min", type="float")
     */
    private $stockMin;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=150)
     */
    private $foto;

    public function __toString()
    {
        return $this->getNombre();
    }
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Productos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Productos
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set precio
     *
     * @param integer $precio
     * @return Productos
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return integer 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set unidadCompra
     *
     * @param integer $unidadCompra
     * @return Productos
     */
    public function setUnidadCompra($unidadCompra)
    {
        $this->unidadCompra = $unidadCompra;

        return $this;
    }

    /**
     * Get unidadCompra
     *
     * @return integer 
     */
    public function getUnidadCompra()
    {
        return $this->unidadCompra;
    }

    /**
     * Set unidad
     *
     * @param string $unidad
     * @return Productos
     */
    public function setUnidad($unidad)
    {
        $this->unidad = $unidad;

        return $this;
    }

    /**
     * Get unidad
     *
     * @return string 
     */
    public function getUnidad()
    {
        return $this->unidad;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     * @return Productos
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer 
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set stockMin
     *
     * @param integer $stockMin
     * @return Productos
     */
    public function setStockMin($stockMin)
    {
        $this->stockMin = $stockMin;

        return $this;
    }

    /**
     * Get stockMin
     *
     * @return integer 
     */
    public function getStockMin()
    {
        return $this->stockMin;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return Productos
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto()
    {
        return $this->foto;
    }
}
