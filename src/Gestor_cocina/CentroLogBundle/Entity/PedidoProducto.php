<?php

namespace Gestor_cocina\CentroLogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pedido_Producto
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PedidoProducto
{
    /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Gestor_cocina\CentroLogBundle\Entity\Pedido")
    */
    private $pedido;

    /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Gestor_cocina\AlmacenBundle\Entity\Productos")
    */
    private $producto;

    /**
     * @var float
     *
     * @ORM\Column(name="cantidad", type="float")
     */
    private $cantidad;

    /**
     * Get id_ped
     *
     * @return integer 
     */
    public function setPedido(\Gestor_cocina\CentroLogBundle\Entity\Pedido $pedido)
    {
        $this->pedido = $pedido;

        return $this;
    }
    /**
     * Get id
     *
     * @return integer 
     */
    public function getPedido()
    {
        return $this->pedido;
    }

    /**
     * Set producto
     *
     * @param string $producto
     * @return Ped_Prod
     */
    public function setProducto(\Gestor_cocina\AlmacenBundle\Entity\Productos $producto)
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
     * @return Ped_Prod
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
}
