<?php

namespace Trax\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblUser
 *
 * @ORM\Table(name="tbl_User")
 * @ORM\Entity
 */
class TblUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="Username", type="string", length=255, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="sureName", type="string", length=255, nullable=true)
     */
    private $surename;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="EmailId", type="string", length=255, nullable=true)
     */
    private $emailid;

    /**
     * @var integer
     *
     * @ORM\Column(name="mobileNo", type="bigint", nullable=true)
     */
    private $mobileno;

    /**
     * @var string
     *
     * @ORM\Column(name="Address", type="text", length=65535, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=255, nullable=true)
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
     * @var string
     *
     * @ORM\Column(name="Gid", type="string", length=255, nullable=true)
     */
    private $gid;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=true)
     */
    private $filename;

    /**
     * @var string
     *
     * @ORM\Column(name="imagePath", type="string", length=255, nullable=true)
     */
    private $imagepath;

    /**
     * @var integer
     *
     * @ORM\Column(name="usertypeId", type="integer", nullable=true)
     */
    private $usertypeid;

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
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=false)
     */
    private $status = 'active';



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
     * Set username
     *
     * @param string $username
     *
     * @return TblUser
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return TblUser
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set surename
     *
     * @param string $surename
     *
     * @return TblUser
     */
    public function setSurename($surename)
    {
        $this->surename = $surename;

        return $this;
    }

    /**
     * Get surename
     *
     * @return string
     */
    public function getSurename()
    {
        return $this->surename;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return TblUser
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
     * Set emailid
     *
     * @param string $emailid
     *
     * @return TblUser
     */
    public function setEmailid($emailid)
    {
        $this->emailid = $emailid;

        return $this;
    }

    /**
     * Get emailid
     *
     * @return string
     */
    public function getEmailid()
    {
        return $this->emailid;
    }

    /**
     * Set mobileno
     *
     * @param integer $mobileno
     *
     * @return TblUser
     */
    public function setMobileno($mobileno)
    {
        $this->mobileno = $mobileno;

        return $this;
    }

    /**
     * Get mobileno
     *
     * @return integer
     */
    public function getMobileno()
    {
        return $this->mobileno;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return TblUser
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return TblUser
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
     * @return TblUser
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
     * @return TblUser
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
     * @return TblUser
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
     * @return TblUser
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
     * @return TblUser
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
     * Set filename
     *
     * @param string $filename
     *
     * @return TblUser
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set imagepath
     *
     * @param string $imagepath
     *
     * @return TblUser
     */
    public function setImagepath($imagepath)
    {
        $this->imagepath = $imagepath;

        return $this;
    }

    /**
     * Get imagepath
     *
     * @return string
     */
    public function getImagepath()
    {
        return $this->imagepath;
    }

    /**
     * Set usertypeid
     *
     * @param integer $usertypeid
     *
     * @return TblUser
     */
    public function setUsertypeid($usertypeid)
    {
        $this->usertypeid = $usertypeid;

        return $this;
    }

    /**
     * Get usertypeid
     *
     * @return integer
     */
    public function getUsertypeid()
    {
        return $this->usertypeid;
    }

    /**
     * Set customerid
     *
     * @param integer $customerid
     *
     * @return TblUser
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
     * @return TblUser
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
     * @return TblUser
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

    /**
     * Set status
     *
     * @param string $status
     *
     * @return TblUser
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}
