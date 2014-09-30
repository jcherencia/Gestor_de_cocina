<?php

namespace Gestor_cocina\RecetasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gestor_cocina\RecetasBundle\Entity\Usuarios;
/**
 * @ORM\Entity
 * @ORM\Table(name="valoraciones")
 * @ORM\Entity(repositoryClass="Gestor_cocina\RecetasBundle\Entity\ValoracionRepository")
 */
class Valoraciones
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
     * * @ORM\ManyToOne(targetEntity="Gestor_cocina\RecetasBundle\Entity\Recetas")
     */
    private $receta;

    /**
     * @var integer
     *
     * @ORM\Column(name="puntuacion", type="integer")
     */
    private $puntuacion;

    /**
     * @var string
     *
     * * @ORM\ManyToOne(targetEntity="Gestor_cocina\RecetasBundle\Entity\Usuarios")
     */
    private $usuario;


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
     * Set receta
     *
     * @param Recetas $receta
     * @return Valoracion
     */
    public function setReceta(Recetas $receta)
    {
        $this->receta = $receta;

        return $this;
    }

    /**
     * Get receta
     *
     * @return string 
     */
    public function getReceta()
    {
        return $this->receta;
    }

    /**
     * Set puntuacion
     *
     * @param integer $puntuacion
     * @return Valoracion
     */
    public function setPuntuacion($puntuacion)
    {
        $this->puntuacion = $puntuacion;

        return $this;
    }

    /**
     * Get puntuacion
     *
     * @return integer 
     */
    public function getPuntuacion()
    {
        return $this->puntuacion;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     * @return Valoracion
     */
    public function setUsuario(Usuarios $usuario)
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
}
