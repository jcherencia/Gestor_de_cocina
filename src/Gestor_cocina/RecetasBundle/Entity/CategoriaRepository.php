<?php

namespace Gestor_cocina\RecetasBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CategoriaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoriaRepository extends EntityRepository
{

	public function findOrdenNomb()
    {
       $em = $this->getEntityManager();
       $consulta = $em->createQuery("SELECT c FROM RecetasBundle:Categoria c ORDER BY c.nombre ASC");
       return $consulta->getResult();
    }
}
