<?php

namespace Trax\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblEmployee
 *
 * @ORM\Table(name="tbl_employee")
 * @ORM\Entity
 */
class TblEmployee
{
    /**
     * @var integer
     *
     * @ORM\Column(name="empId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $empid;

    /**
     * @var integer
     *
     * @ORM\Column(name="userId", type="integer", nullable=true)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="employeeName", type="string", length=255, nullable=true)
     */
    private $employeename;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=249, nullable=true)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="employeeType", type="string", length=255, nullable=true)
     */
    private $employeetype;

    /**
     * @var integer
     *
     * @ORM\Column(name="department", type="integer", nullable=true)
     */
    private $department;

    /**
     * @var integer
     *
     * @ORM\Column(name="location", type="integer", nullable=true)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="chorusId", type="string", length=255, nullable=true)
     */
    private $chorusid;

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
     * Get empid
     *
     * @return integer
     */
    public function getEmpid()
    {
        return $this->empid;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     *
     * @return TblEmployee
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set employeename
     *
     * @param string $employeename
     *
     * @return TblEmployee
     */
    public function setEmployeename($employeename)
    {
        $this->employeename = $employeename;

        return $this;
    }

    /**
     * Get employeename
     *
     * @return string
     */
    public function getEmployeename()
    {
        return $this->employeename;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return TblEmployee
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
     * Set employeetype
     *
     * @param string $employeetype
     *
     * @return TblEmployee
     */
    public function setEmployeetype($employeetype)
    {
        $this->employeetype = $employeetype;

        return $this;
    }

    /**
     * Get employeetype
     *
     * @return string
     */
    public function getEmployeetype()
    {
        return $this->employeetype;
    }

    /**
     * Set department
     *
     * @param integer $department
     *
     * @return TblEmployee
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
     * Set location
     *
     * @param integer $location
     *
     * @return TblEmployee
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
     * Set chorusid
     *
     * @param string $chorusid
     *
     * @return TblEmployee
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
     * Set customerid
     *
     * @param integer $customerid
     *
     * @return TblEmployee
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
     * @return TblEmployee
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
     * @return TblEmployee
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
