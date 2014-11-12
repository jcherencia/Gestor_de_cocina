<?php

namespace Proxies\__CG__\Gestor_cocina\RecetasBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Usuarios extends \Gestor_cocina\RecetasBundle\Entity\Usuarios implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Gestor_cocina\\RecetasBundle\\Entity\\Usuarios' . "\0" . 'id', '' . "\0" . 'Gestor_cocina\\RecetasBundle\\Entity\\Usuarios' . "\0" . 'nombre', '' . "\0" . 'Gestor_cocina\\RecetasBundle\\Entity\\Usuarios' . "\0" . 'apellidos', '' . "\0" . 'Gestor_cocina\\RecetasBundle\\Entity\\Usuarios' . "\0" . 'email', '' . "\0" . 'Gestor_cocina\\RecetasBundle\\Entity\\Usuarios' . "\0" . 'username', '' . "\0" . 'Gestor_cocina\\RecetasBundle\\Entity\\Usuarios' . "\0" . 'password', 'salt', '' . "\0" . 'Gestor_cocina\\RecetasBundle\\Entity\\Usuarios' . "\0" . 'fechaRegistro', '' . "\0" . 'Gestor_cocina\\RecetasBundle\\Entity\\Usuarios' . "\0" . 'roles', '' . "\0" . 'Gestor_cocina\\RecetasBundle\\Entity\\Usuarios' . "\0" . 'foto', '' . "\0" . 'Gestor_cocina\\RecetasBundle\\Entity\\Usuarios' . "\0" . 'activo');
        }

        return array('__isInitialized__', '' . "\0" . 'Gestor_cocina\\RecetasBundle\\Entity\\Usuarios' . "\0" . 'id', '' . "\0" . 'Gestor_cocina\\RecetasBundle\\Entity\\Usuarios' . "\0" . 'nombre', '' . "\0" . 'Gestor_cocina\\RecetasBundle\\Entity\\Usuarios' . "\0" . 'apellidos', '' . "\0" . 'Gestor_cocina\\RecetasBundle\\Entity\\Usuarios' . "\0" . 'email', '' . "\0" . 'Gestor_cocina\\RecetasBundle\\Entity\\Usuarios' . "\0" . 'username', '' . "\0" . 'Gestor_cocina\\RecetasBundle\\Entity\\Usuarios' . "\0" . 'password', 'salt', '' . "\0" . 'Gestor_cocina\\RecetasBundle\\Entity\\Usuarios' . "\0" . 'fechaRegistro', '' . "\0" . 'Gestor_cocina\\RecetasBundle\\Entity\\Usuarios' . "\0" . 'roles', '' . "\0" . 'Gestor_cocina\\RecetasBundle\\Entity\\Usuarios' . "\0" . 'foto', '' . "\0" . 'Gestor_cocina\\RecetasBundle\\Entity\\Usuarios' . "\0" . 'activo');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Usuarios $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', array());

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', array());

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles($roles)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', array($roles));

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', array($nombre));

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', array());

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setApellidos($apellidos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApellidos', array($apellidos));

        return parent::setApellidos($apellidos);
    }

    /**
     * {@inheritDoc}
     */
    public function getApellidos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApellidos', array());

        return parent::getApellidos();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', array());

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', array($username));

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', array($password));

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', array());

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setSalt($salt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalt', array($salt));

        return parent::setSalt($salt);
    }

    /**
     * {@inheritDoc}
     */
    public function getActivo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivo', array());

        return parent::getActivo();
    }

    /**
     * {@inheritDoc}
     */
    public function setActivo($activo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActivo', array($activo));

        return parent::setActivo($activo);
    }

    /**
     * {@inheritDoc}
     */
    public function getFoto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFoto', array());

        return parent::getFoto();
    }

    /**
     * {@inheritDoc}
     */
    public function setFoto($foto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFoto', array($foto));

        return parent::setFoto($foto);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', array());

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaRegistro($fechaRegistro)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaRegistro', array($fechaRegistro));

        return parent::setFechaRegistro($fechaRegistro);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaRegistro()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaRegistro', array());

        return parent::getFechaRegistro();
    }

}
