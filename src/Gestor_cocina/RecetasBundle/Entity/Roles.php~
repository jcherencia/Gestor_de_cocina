<?php
 
namespace Gestor_cocina\RecetasBundle\Entity;
 
use Symfony\Component\Security\Core\Role\RoleInterface;
use Doctrine\ORM\Mapping as ORM;
 
/**
 * @ORM\Entity
 * @ORM\Table(name="roles")
 */
class Roles implements RoleInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
 
    /**
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    protected $nombre;

    public function getRole()
    {
        return $this->role;
    }
}