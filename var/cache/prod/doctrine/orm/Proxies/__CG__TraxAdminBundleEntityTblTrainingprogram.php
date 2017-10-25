<?php

namespace Proxies\__CG__\Trax\AdminBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TblTrainingprogram extends \Trax\AdminBundle\Entity\TblTrainingprogram implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblTrainingprogram' . "\0" . 'prgid', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblTrainingprogram' . "\0" . 'batchid', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblTrainingprogram' . "\0" . 'programname', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblTrainingprogram' . "\0" . 'description', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblTrainingprogram' . "\0" . 'adminid', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblTrainingprogram' . "\0" . 'createdat'];
        }

        return ['__isInitialized__', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblTrainingprogram' . "\0" . 'prgid', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblTrainingprogram' . "\0" . 'batchid', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblTrainingprogram' . "\0" . 'programname', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblTrainingprogram' . "\0" . 'description', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblTrainingprogram' . "\0" . 'adminid', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblTrainingprogram' . "\0" . 'createdat'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TblTrainingprogram $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
    public function getPrgid()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getPrgid();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrgid', []);

        return parent::getPrgid();
    }

    /**
     * {@inheritDoc}
     */
    public function setBatchid($batchid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBatchid', [$batchid]);

        return parent::setBatchid($batchid);
    }

    /**
     * {@inheritDoc}
     */
    public function getBatchid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBatchid', []);

        return parent::getBatchid();
    }

    /**
     * {@inheritDoc}
     */
    public function setProgramname($programname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProgramname', [$programname]);

        return parent::setProgramname($programname);
    }

    /**
     * {@inheritDoc}
     */
    public function getProgramname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProgramname', []);

        return parent::getProgramname();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdminid($adminid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdminid', [$adminid]);

        return parent::setAdminid($adminid);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdminid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdminid', []);

        return parent::getAdminid();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedat($createdat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedat', [$createdat]);

        return parent::setCreatedat($createdat);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedat', []);

        return parent::getCreatedat();
    }

}