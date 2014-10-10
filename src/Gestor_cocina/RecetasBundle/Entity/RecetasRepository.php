<?php

namespace Gestor_cocina\RecetasBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * RecetasRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RecetasRepository extends EntityRepository
{

	public function findRecientes()
    {
        $em = $this->getEntityManager();
    // $query = "SELECT r FROM  RecetasBundle:Recetas r ORDER BY  r.`fecha_creacion` DESC"; 
    // $query.="LIMIT 0 , 5";
         $consulta = $em->createQuery('
            SELECT r
            FROM  RecetasBundle:Recetas r
            ORDER BY r.fecha_creacion DESC
         ');
        $consulta->setMaxResults(5);

        return $consulta->getResult();
    }
}
