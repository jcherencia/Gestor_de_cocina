<?php
namespace Gestor_cocina\RecetasBundle\Entity;
use Doctrine\ORM\EntityRepository;

class IngredienteRepository extends EntityRepository
{
	public function findDelProd($id)
	{
	
       $em = $this->getEntityManager();
       $consulta = $em->createQuery("SELECT i FROM RecetasBundle:Ingredientes i WHERE i.producto=".$id);
       return $consulta->getResult();
    	# code...
	}

}

