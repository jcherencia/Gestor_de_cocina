<?php

namespace Gestor_cocina\CentroLogBundle\Entity;

// use Gestor_cocina\RecetasBundle\Entity\Usuarios;
use Doctrine\ORM\Mapping as ORM;

/**
 * Pedido
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Pedido
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=255)
     */
    private $estado;
    /** 
    *@ORM\ManyToOne(targetEntity="Gestor_cocina\RecetasBundle\Entity\Usuarios") 
    */
    protected $creador;

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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Pedido
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

    /**
     * Set estado
     *
     * @param string $estado
     * @return Pedido
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }
    /**
     * Set autor
     *
     * @param $autor
     * @return Recetas
     */
    public function setCreador(\Gestor_cocina\RecetasBundle\Entity\Usuarios $creador)
    {
        $this->creador = $creador;

        return $this;
    }

    /**
     * Get autor
     *
     * @return integer 
     */
    public function getCreador()
    {
        return $this->creador;
    }
}
