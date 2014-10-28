<?php
// src/Acme/DemoBundle/Entity/OpenIdIdentity.php

namespace Gestor_cocina\RecetasBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;

use Doctrine\ORM\Mapping as ORM;

use Fp\OpenIdBundle\Entity\UserIdentity as BaseUserIdentity;
use Fp\OpenIdBundle\Model\UserIdentityInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="openid_identities")
 */
class OpenIdIdentity extends BaseUserIdentity
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
      * The relation is made eager by purpose. 
      * More info here: {@link https://github.com/formapro/FpOpenIdBundle/issues/54}
      * 
      * @var Symfony\Component\Security\Core\User\UserInterface
      *
      * @ORM\ManyToOne(targetEntity="Gestor_cocina\RecetasBundle\Entity\Usuarios", fetch="EAGER")
      * @ORM\JoinColumns({
      *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
      * })
      */
    protected $user;

    /*
     * It inherits an "identity" string field,
     * and an "attributes" text field
     */

    public function __construct()
    {
        parent::__construct();
        // your own logic (nothing for this example)
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
     * Set user
     *
     * @param \Gestor_cocina\RecetasBundle\Entity\Usuarios $user
     * @return OpenIdIdentity
     */
    public function setUser(\Gestor_cocina\RecetasBundle\Entity\Usuarios $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Gestor_cocina\RecetasBundle\Entity\Usuarios 
     */
    public function getUser()
    {
        return $this->user;
    }
}
