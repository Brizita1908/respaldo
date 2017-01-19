<?php

namespace Proxies\__CG__\AsesoresSABundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Transaccion extends \AsesoresSABundle\Entity\Transaccion implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'AsesoresSABundle\\Entity\\Transaccion' . "\0" . 'idtransaccion', '' . "\0" . 'AsesoresSABundle\\Entity\\Transaccion' . "\0" . 'fechaentrega', '' . "\0" . 'AsesoresSABundle\\Entity\\Transaccion' . "\0" . 'mediosolicitud', '' . "\0" . 'AsesoresSABundle\\Entity\\Transaccion' . "\0" . 'fechasolicitud', '' . "\0" . 'AsesoresSABundle\\Entity\\Transaccion' . "\0" . 'cartafirmadaentrega', '' . "\0" . 'AsesoresSABundle\\Entity\\Transaccion' . "\0" . 'numerocartasolicitud', '' . "\0" . 'AsesoresSABundle\\Entity\\Transaccion' . "\0" . 'estadotransaccion', '' . "\0" . 'AsesoresSABundle\\Entity\\Transaccion' . "\0" . 'idmovimiento', '' . "\0" . 'AsesoresSABundle\\Entity\\Transaccion' . "\0" . 'idusuario');
        }

        return array('__isInitialized__', '' . "\0" . 'AsesoresSABundle\\Entity\\Transaccion' . "\0" . 'idtransaccion', '' . "\0" . 'AsesoresSABundle\\Entity\\Transaccion' . "\0" . 'fechaentrega', '' . "\0" . 'AsesoresSABundle\\Entity\\Transaccion' . "\0" . 'mediosolicitud', '' . "\0" . 'AsesoresSABundle\\Entity\\Transaccion' . "\0" . 'fechasolicitud', '' . "\0" . 'AsesoresSABundle\\Entity\\Transaccion' . "\0" . 'cartafirmadaentrega', '' . "\0" . 'AsesoresSABundle\\Entity\\Transaccion' . "\0" . 'numerocartasolicitud', '' . "\0" . 'AsesoresSABundle\\Entity\\Transaccion' . "\0" . 'estadotransaccion', '' . "\0" . 'AsesoresSABundle\\Entity\\Transaccion' . "\0" . 'idmovimiento', '' . "\0" . 'AsesoresSABundle\\Entity\\Transaccion' . "\0" . 'idusuario');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Transaccion $proxy) {
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
    public function getIdtransaccion()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdtransaccion();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdtransaccion', array());

        return parent::getIdtransaccion();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaentrega($fechaentrega)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaentrega', array($fechaentrega));

        return parent::setFechaentrega($fechaentrega);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaentrega()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaentrega', array());

        return parent::getFechaentrega();
    }

    /**
     * {@inheritDoc}
     */
    public function setMediosolicitud($mediosolicitud)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMediosolicitud', array($mediosolicitud));

        return parent::setMediosolicitud($mediosolicitud);
    }

    /**
     * {@inheritDoc}
     */
    public function getMediosolicitud()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMediosolicitud', array());

        return parent::getMediosolicitud();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechasolicitud($fechasolicitud)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechasolicitud', array($fechasolicitud));

        return parent::setFechasolicitud($fechasolicitud);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechasolicitud()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechasolicitud', array());

        return parent::getFechasolicitud();
    }

    /**
     * {@inheritDoc}
     */
    public function setCartafirmadaentrega($cartafirmadaentrega)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCartafirmadaentrega', array($cartafirmadaentrega));

        return parent::setCartafirmadaentrega($cartafirmadaentrega);
    }

    /**
     * {@inheritDoc}
     */
    public function getCartafirmadaentrega()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCartafirmadaentrega', array());

        return parent::getCartafirmadaentrega();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumerocartasolicitud($numerocartasolicitud)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumerocartasolicitud', array($numerocartasolicitud));

        return parent::setNumerocartasolicitud($numerocartasolicitud);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumerocartasolicitud()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumerocartasolicitud', array());

        return parent::getNumerocartasolicitud();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstadotransaccion($estadotransaccion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstadotransaccion', array($estadotransaccion));

        return parent::setEstadotransaccion($estadotransaccion);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstadotransaccion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstadotransaccion', array());

        return parent::getEstadotransaccion();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdmovimiento(\AsesoresSABundle\Entity\Movimiento $idmovimiento = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdmovimiento', array($idmovimiento));

        return parent::setIdmovimiento($idmovimiento);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdmovimiento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdmovimiento', array());

        return parent::getIdmovimiento();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdusuario(\AsesoresSABundle\Entity\Usuarios $idusuario = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdusuario', array($idusuario));

        return parent::setIdusuario($idusuario);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdusuario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdusuario', array());

        return parent::getIdusuario();
    }

}