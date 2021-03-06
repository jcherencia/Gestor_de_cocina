<?php

namespace Gestor_cocina\AlmacenBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ProductosRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductosRepository extends EntityRepository
{

	public function findProducts()
    {
       $em = $this->getEntityManager();
       $consulta = $em->createQuery("SELECT p.id,p.nombre,p.precio,p.unidadCompra,p.unidad,p.stock,p.stockMin FROM AlmacenBundle:Productos p ORDER BY p.nombre ASC");
       // $consulta = $em->createQuery("SELECT p FROM AlmacenBundle:Productos p ORDER BY p.nombre ASC");
       
       return $consulta->getResult();
    }
    public function findOrderByNombre()
    {
       $em = $this->getEntityManager();
       $consulta = $em->createQuery("SELECT p FROM AlmacenBundle:Productos p ORDER BY p.nombre ASC");
       return $consulta->getResult();
    }
}