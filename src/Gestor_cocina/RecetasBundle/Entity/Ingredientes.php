<?php
namespace Gestor_cocina\RecetasBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity */
class Ingredientes
{
	/**
	* @ORM\Id
	* @ORM\ManyToOne(targetEntity="Gestor_cocina\RecetasBundle\Entity\Recetas")
	*/
	protected $receta;
	/**
	* @ORM\Id
	* @ORM\ManyToOne(targetEntity="Gestor_cocina\AlmacenBundle\Entity\Productos")
	*/
	protected $producto;
	/** @ORM\Column(type="integer") */
	protected $cantidad;




	public function setCantidad($cantidad)
	{
		$this->cantidad = $cantidad;
	}
	public function getCantidad()
	{
		return $this->cantidad;
	}

	public function setReceta(\Gestor_cocina\RecetasBundle\Entity\Recetas $receta)
	{
		$this->receta = $receta;
	}
	public function getReceta()
	{
		return $this->receta;
	}

	public function setProducto(\Gestor_cocina\AlmacenBundle\Entity\Productos $producto)
	{
		$this->producto = $producto;
	}
	public function getProducto()
	{
		return $this->producto;
	}
	//
	// public function findIngr($id)
 //    {
 //       $em = $this->getEntityManager();

 //        $consulta = $em->createQuery('
	// 		SELECT P.nombre,I.cantidad
	// 		FROM AlmacenBundle:Productos P, RecetaBundle:Ingredientes I JOIN I.producto P
	// 		WHERE I.receta = :receta
 //        ');
 //        $consulta->setParameter('receta', $id);
 //        $consulta->setMaxResults(1);

 //        return $consulta->getOneOrNullResult();
 //    }
}
	