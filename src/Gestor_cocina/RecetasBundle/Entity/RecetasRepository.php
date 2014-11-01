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
    public function findTop()
    {
         $em = $this->getEntityManager();
    
         $consulta = $em->createQuery('
            SELECT r.id,r.nombre,r.notamedia
            FROM  RecetasBundle:Recetas r
            ORDER BY r.notamedia DESC
         ');
        $consulta->setMaxResults(5);

        return $consulta->getResult();
    }
    public function findSearch($search)
    {
        
        $em = $this->getEntityManager();
        $consulta = $em->createQuery("SELECT r.id,r.nombre FROM RecetasBundle:Recetas r WHERE  r.nombre like :searchterm")
->setParameter('searchterm', '%'.$search.'%');
        return $consulta->getResult();
        // return $search;
    }
    public function findFiltro($filtro)
    {
       $em = $this->getEntityManager();
       $consulta = $em->createQuery("SELECT r FROM RecetasBundle:Recetas r WHERE  r.categoria = :searchterm")
// ->setParameter('searchterm', '%'.$filtro.'%');
->setParameter('searchterm', ''.$filtro.'');

       return $consulta->getResult();
    }
    public function findResultsUser($user)
    {
        $em = $this->getEntityManager();
            if ($user!="NULL") {
                 $consulta = $em->createQuery("SELECT r.id,r.nombre,r.fecha_creacion,r.comensales,r.tiempo,r.precio,r.notamedia FROM RecetasBundle:Recetas r WHERE  r.creador = :creador")
        // ->setParameter('searchterm', '%'.$filtro.'%');
        ->setParameter('creador', ''.$user.'');
            } else {
                 $consulta = $em->createQuery("SELECT r.id,r.nombre,r.fecha_creacion,r.comensales,r.tiempo,r.precio,r.notamedia FROM RecetasBundle:Recetas r");
            }
      return $consulta->getResult();
    }
    
}
