<?php

namespace Gestor_cocina\CentroLogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SolicitudProd
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestor_cocina\CentroLogBundle\Entity\SolicitudProdRepository")
 */
class SolicitudProd
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    // *
    // * 
    // * @ORM\ManyToOne(targetEntity="Gestor_cocina\RecetasBundle\Entity\Recetas")
    
    // protected $receta;
    /**
    * 
    * @ORM\ManyToOne(targetEntity="Gestor_cocina\AlmacenBundle\Entity\Productos")
    */
    protected $producto;

    /**
     * @var float
     *
     * @ORM\Column(name="cantidad", type="float")
     */
    private $cantidad;
    /**
     * @var float
     *
     * @ORM\Column(name="prodsustraido", type="float")
     */
    private $prodsustraido;
    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Gestor_cocina\RecetasBundle\Entity\Usuarios")
     */
    private $usuario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;


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
     * Set producto
     *
     * @param string $producto
     * @return SolicitudProd
     */
    public function setProducto($producto)
    {
        $this->producto = $producto;

        return $this;
    }

    /**
     * Get producto
     *
     * @return string 
     */
    public function getProducto()
    {
        return $this->producto;
    }

    /**
     * Set cantidad
     *
     * @param float $cantidad
     * @return SolicitudProd
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return float 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }
    /**
     * Set prodsustraido
     *
     * @param float $prodsustraido
     * @return SolicitudProd
     */
    public function setProdsustraido($prodsustraido)
    {
        $this->prodsustraido = $prodsustraido;

        return $this;
    }

    /**
     * Get prodsustraido
     *
     * @return float 
     */
    public function getProdsustraido()
    {
        return $this->prodsustraido;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     * @return SolicitudProd
     */
    public function setUsuario(\Gestor_cocina\RecetasBundle\Entity\Usuarios $usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return SolicitudProd
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }
}
