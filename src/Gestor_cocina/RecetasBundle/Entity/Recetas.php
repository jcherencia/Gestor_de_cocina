<?php

namespace Gestor_cocina\RecetasBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Gestor_cocina\RecetasBundle\Entity\Usuarios;
/**
* @ORM\Entity
* @ORM\Table(name="Recetas")
*/
class Recetas{
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue
	*/
	protected $id;
	/** @ORM\Column(type="string", length=150) */
	protected $nombre;
	/** @ORM\Column(type="string", length=150) */
	protected $slug;
	/** /** @ORM\ManyToOne(targetEntity="Gestor_cocina\RecetasBundle\Entity\Usuarios") */
	protected $autor;
	/** @ORM\Column(type="datetime") */
	protected $fecha_creacion;
	/** @ORM\Column(type="string", length=300) */
	protected $descripcion;
	/** @ORM\Column(type="integer") */	
	protected $comensales;
	/** @ORM\Column(type="integer") */
	protected $tiempo;
	/** @ORM\Column(type="string", length=150) */
	protected $foto;
	/** @ORM\Column(type="array") */
	protected $tags;
	/** @ORM\Column(type="integer") */
	protected $precio;



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
     * @return Recetas
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
     * @return Recetas
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
     * Set autor
     *
     * @param integer $autor
     * @return Recetas
     */
    public function setAutor(Gestor_cocina\RecetasBundle\Entity\Usuarios $autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get autor
     *
     * @return integer 
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set fecha_creacion
     *
     * @param \DateTime $fechaCreacion
     * @return Recetas
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fecha_creacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fecha_creacion
     *
     * @return \DateTime 
     */
    public function getFechaCreacion()
    {
        return $this->fecha_creacion;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Recetas
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set comensales
     *
     * @param integer $comensales
     * @return Recetas
     */
    public function setComensales($comensales)
    {
        $this->comensales = $comensales;

        return $this;
    }

    /**
     * Get comensales
     *
     * @return integer 
     */
    public function getComensales()
    {
        return $this->comensales;
    }

    /**
     * Set tiempo
     *
     * @param integer $tiempo
     * @return Recetas
     */
    public function setTiempo($tiempo)
    {
        $this->tiempo = $tiempo;

        return $this;
    }

    /**
     * Get tiempo
     *
     * @return integer 
     */
    public function getTiempo()
    {
        return $this->tiempo;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return Recetas
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

    /**
     * Set tags
     *
     * @param array $tags
     * @return Recetas
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return array 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set precio
     *
     * @param integer $precio
     * @return Recetas
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
}
