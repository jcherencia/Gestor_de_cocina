<?php

namespace Gestor_cocina\RecetasBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Gestor_cocina\RecetasBundle\Entity\Usuarios;
use Gestor_cocina\RecetasBundle\Entity\Categoria;
/**
* @ORM\Entity
* @ORM\Table(name="Recetas")
* @ORM\Entity(repositoryClass="Gestor_cocina\RecetasBundle\Entity\RecetasRepository")
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
	/** @ORM\ManyToOne(targetEntity="Gestor_cocina\RecetasBundle\Entity\Usuarios") */
	protected $creador;
	/** @ORM\Column(type="datetime") */
	protected $fecha_creacion;
	/** @ORM\Column(type="string", length=300) */
	protected $descripcion;
	/** @ORM\Column(type="integer") */	
	protected $comensales;
	/** @ORM\Column(type="integer",nullable=true) */
	protected $tiempo;
    /** @ORM\ManyToOne(targetEntity="Gestor_cocina\RecetasBundle\Entity\Categoria") */
    protected $categoria;
	/** @ORM\Column(type="string", length=150,nullable=true) */
	protected $foto;
	/** @ORM\Column(type="array",nullable=true) */
	protected $tags;
	/** @ORM\Column(type="float") */
	protected $precio;
    /** @ORM\Column(type="float") */
    protected $notamedia;
   



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
     * @param $autor
     * @return Recetas
     */
    public function setCreador(Usuarios $creador)
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
     * Set categoria
     *
     * @param $autor
     * @return Categoria
     */
    public function setCategoria(Categoria $categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return integer 
     */
    public function getCategoria()
    {
        return $this->categoria;
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

    /**
     * Set precio
     *
     * @param integer $precio
     * @return Recetas
     */
    public function setNotaMedia($notamedia)
    {
        $this->notamedia = $notamedia;

        return $this;
    }

    /**
     * Get notamedia
     *
     * @return integer 
     */
    public function getNotaMedia()
    {
        return $this->notamedia;
    }

   
}
