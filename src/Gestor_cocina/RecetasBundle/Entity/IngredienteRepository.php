<?php
namespace Gestor_cocina\RecetasBundle\Entity;
use Doctrine\ORM\EntityRepository;

class IngredienteRepository extends EntityRepository
{
	public function findIngrReceta($receta)
	{

		echo "hola";
	}
}