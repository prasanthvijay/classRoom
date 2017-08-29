<?php

namespace Proxies\__CG__\Trax\AdminBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TblEmployee extends \Trax\AdminBundle\Entity\TblEmployee implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblEmployee' . "\0" . 'empid', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblEmployee' . "\0" . 'userid', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblEmployee' . "\0" . 'employeename', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblEmployee' . "\0" . 'gender', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblEmployee' . "\0" . 'employeetype', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblEmployee' . "\0" . 'department', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblEmployee' . "\0" . 'location', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblEmployee' . "\0" . 'chorusid', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblEmployee' . "\0" . 'customerid', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblEmployee' . "\0" . 'adminid', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblEmployee' . "\0" . 'createdat'];
        }

        return ['__isInitialized__', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblEmployee' . "\0" . 'empid', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblEmployee' . "\0" . 'userid', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblEmployee' . "\0" . 'employeename', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblEmployee' . "\0" . 'gender', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblEmployee' . "\0" . 'employeetype', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblEmployee' . "\0" . 'department', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblEmployee' . "\0" . 'location', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblEmployee' . "\0" . 'chorusid', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblEmployee' . "\0" . 'customerid', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblEmployee' . "\0" . 'adminid', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblEmployee' . "\0" . 'createdat'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TblEmployee $proxy) {
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
    public function getEmpid()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getEmpid();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmpid', []);

        return parent::getEmpid();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserid($userid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserid', [$userid]);

        return parent::setUserid($userid);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserid', []);

        return parent::getUserid();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmployeename($employeename)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmployeename', [$employeename]);

        return parent::setEmployeename($employeename);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmployeename()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmployeename', []);

        return parent::getEmployeename();
    }

    /**
     * {@inheritDoc}
     */
    public function setGender($gender)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGender', [$gender]);

        return parent::setGender($gender);
    }

    /**
     * {@inheritDoc}
     */
    public function getGender()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGender', []);

        return parent::getGender();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmployeetype($employeetype)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmployeetype', [$employeetype]);

        return parent::setEmployeetype($employeetype);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmployeetype()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmployeetype', []);

        return parent::getEmployeetype();
    }

    /**
     * {@inheritDoc}
     */
    public function setDepartment($department)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepartment', [$department]);

        return parent::setDepartment($department);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepartment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepartment', []);

        return parent::getDepartment();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocation($location)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocation', [$location]);

        return parent::setLocation($location);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocation', []);

        return parent::getLocation();
    }

    /**
     * {@inheritDoc}
     */
    public function setChorusid($chorusid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChorusid', [$chorusid]);

        return parent::setChorusid($chorusid);
    }

    /**
     * {@inheritDoc}
     */
    public function getChorusid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChorusid', []);

        return parent::getChorusid();
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomerid($customerid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomerid', [$customerid]);

        return parent::setCustomerid($customerid);
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomerid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomerid', []);

        return parent::getCustomerid();
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
