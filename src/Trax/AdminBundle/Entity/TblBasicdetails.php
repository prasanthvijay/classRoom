<?php

namespace Trax\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblBasicdetails
 *
 * @ORM\Table(name="tbl_BasicDetails")
 * @ORM\Entity
 */
class TblBasicdetails
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="managerName", type="string", length=255, nullable=true)
     */
    private $managername;

    /**
     * @var string
     *
     * @ORM\Column(name="chorusId", type="string", length=255, nullable=true)
     */
    private $chorusid;

    /**
     * @var string
     *
     * @ORM\Column(name="GId", type="string", length=255, nullable=true)
     */
    private $gid;

    /**
     * @var integer
     *
     * @ORM\Column(name="location", type="integer", nullable=true)
     */
    private $location;

    /**
     * @var integer
     *
     * @ORM\Column(name="department", type="integer", nullable=true)
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=255, nullable=true)
     */
    private $gender;

    /**
     * @var integer
     *
     * @ORM\Column(name="customerId", type="integer", nullable=true)
     */
    private $customerid;

    /**
     * @var integer
     *
     * @ORM\Column(name="adminId", type="integer", nullable=true)
     */
    private $adminid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime", nullable=true)
     */
    private $createdat;



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
     * Set name
     *
     * @param string $name
     *
     * @return TblBasicdetails
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set managername
     *
     * @param string $managername
     *
     * @return TblBasicdetails
     */
    public function setManagername($managername)
    {
        $this->managername = $managername;

        return $this;
    }

    /**
     * Get managername
     *
     * @return string
     */
    public function getManagername()
    {
        return $this->managername;
    }

    /**
     * Set chorusid
     *
     * @param string $chorusid
     *
     * @return TblBasicdetails
     */
    public function setChorusid($chorusid)
    {
        $this->chorusid = $chorusid;

        return $this;
    }

    /**
     * Get chorusid
     *
     * @return string
     */
    public function getChorusid()
    {
        return $this->chorusid;
    }

    /**
     * Set gid
     *
     * @param string $gid
     *
     * @return TblBasicdetails
     */
    public function setGid($gid)
    {
        $this->gid = $gid;

        return $this;
    }

    /**
     * Get gid
     *
     * @return string
     */
    public function getGid()
    {
        return $this->gid;
    }

    /**
     * Set location
     *
     * @param integer $location
     *
     * @return TblBasicdetails
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return integer
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set department
     *
     * @param integer $department
     *
     * @return TblBasicdetails
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return integer
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return TblBasicdetails
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set customerid
     *
     * @param integer $customerid
     *
     * @return TblBasicdetails
     */
    public function setCustomerid($customerid)
    {
        $this->customerid = $customerid;

        return $this;
    }

    /**
     * Get customerid
     *
     * @return integer
     */
    public function getCustomerid()
    {
        return $this->customerid;
    }

    /**
     * Set adminid
     *
     * @param integer $adminid
     *
     * @return TblBasicdetails
     */
    public function setAdminid($adminid)
    {
        $this->adminid = $adminid;

        return $this;
    }

    /**
     * Get adminid
     *
     * @return integer
     */
    public function getAdminid()
    {
        return $this->adminid;
    }

    /**
     * Set createdat
     *
     * @param \DateTime $createdat
     *
     * @return TblBasicdetails
     */
    public function setCreatedat($createdat)
    {
        $this->createdat = $createdat;

        return $this;
    }

    /**
     * Get createdat
     *
     * @return \DateTime
     */
    public function getCreatedat()
    {
        return $this->createdat;
    }
}
