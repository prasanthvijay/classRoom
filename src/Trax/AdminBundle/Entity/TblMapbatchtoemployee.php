<?php

namespace Trax\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblMapbatchtoemployee
 *
 * @ORM\Table(name="tbl_mapBatchtoEmployee")
 * @ORM\Entity
 */
class TblMapbatchtoemployee
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
     * @var integer
     *
     * @ORM\Column(name="mapModuleId", type="integer", nullable=true)
     */
    private $mapmoduleid;

    /**
     * @var string
     *
     * @ORM\Column(name="employeeId", type="string", length=255, nullable=true)
     */
    private $employeeid;

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
     * Set mapmoduleid
     *
     * @param integer $mapmoduleid
     *
     * @return TblMapbatchtoemployee
     */
    public function setMapmoduleid($mapmoduleid)
    {
        $this->mapmoduleid = $mapmoduleid;

        return $this;
    }

    /**
     * Get mapmoduleid
     *
     * @return integer
     */
    public function getMapmoduleid()
    {
        return $this->mapmoduleid;
    }

    /**
     * Set employeeid
     *
     * @param string $employeeid
     *
     * @return TblMapbatchtoemployee
     */
    public function setEmployeeid($employeeid)
    {
        $this->employeeid = $employeeid;

        return $this;
    }

    /**
     * Get employeeid
     *
     * @return string
     */
    public function getEmployeeid()
    {
        return $this->employeeid;
    }

    /**
     * Set customerid
     *
     * @param integer $customerid
     *
     * @return TblMapbatchtoemployee
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
     * @return TblMapbatchtoemployee
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
     * @return TblMapbatchtoemployee
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
