<?php

namespace Proxies\__CG__\Trax\AdminBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TblUser extends \Trax\AdminBundle\Entity\TblUser implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'userid', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'username', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'password', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'surename', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'name', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'emailid', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'mobileno', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'address', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'gender', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'employeetype', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'department', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'location', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'chorusid', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'gid', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'filename', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'imagepath', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'usertypeid', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'customerid', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'adminid', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'createdat', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'status'];
        }

        return ['__isInitialized__', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'userid', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'username', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'password', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'surename', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'name', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'emailid', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'mobileno', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'address', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'gender', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'employeetype', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'department', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'location', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'chorusid', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'gid', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'filename', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'imagepath', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'usertypeid', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'customerid', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'adminid', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'createdat', '' . "\0" . 'Trax\\AdminBundle\\Entity\\TblUser' . "\0" . 'status'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TblUser $proxy) {
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
    public function getUserid()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getUserid();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserid', []);

        return parent::getUserid();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setSurename($surename)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSurename', [$surename]);

        return parent::setSurename($surename);
    }

    /**
     * {@inheritDoc}
     */
    public function getSurename()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSurename', []);

        return parent::getSurename();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailid($emailid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailid', [$emailid]);

        return parent::setEmailid($emailid);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailid', []);

        return parent::getEmailid();
    }

    /**
     * {@inheritDoc}
     */
    public function setMobileno($mobileno)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMobileno', [$mobileno]);

        return parent::setMobileno($mobileno);
    }

    /**
     * {@inheritDoc}
     */
    public function getMobileno()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMobileno', []);

        return parent::getMobileno();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress($address)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', [$address]);

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', []);

        return parent::getAddress();
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
    public function setGid($gid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGid', [$gid]);

        return parent::setGid($gid);
    }

    /**
     * {@inheritDoc}
     */
    public function getGid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGid', []);

        return parent::getGid();
    }

    /**
     * {@inheritDoc}
     */
    public function setFilename($filename)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFilename', [$filename]);

        return parent::setFilename($filename);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilename()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFilename', []);

        return parent::getFilename();
    }

    /**
     * {@inheritDoc}
     */
    public function setImagepath($imagepath)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImagepath', [$imagepath]);

        return parent::setImagepath($imagepath);
    }

    /**
     * {@inheritDoc}
     */
    public function getImagepath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImagepath', []);

        return parent::getImagepath();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsertypeid($usertypeid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsertypeid', [$usertypeid]);

        return parent::setUsertypeid($usertypeid);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsertypeid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsertypeid', []);

        return parent::getUsertypeid();
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

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

}
