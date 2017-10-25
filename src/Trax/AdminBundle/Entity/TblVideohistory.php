<?php

namespace Trax\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblVideohistory
 *
 * @ORM\Table(name="tbl_videoHistory")
 * @ORM\Entity
 */
class TblVideohistory
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
     * @ORM\Column(name="empId", type="integer", nullable=true)
     */
    private $empid;

    /**
     * @var integer
     *
     * @ORM\Column(name="programid", type="integer", nullable=true)
     */
    private $programid;

    /**
     * @var integer
     *
     * @ORM\Column(name="moduleid", type="integer", nullable=true)
     */
    private $moduleid;

    /**
     * @var float
     *
     * @ORM\Column(name="currentDurationTime", type="float", precision=10, scale=0, nullable=true)
     */
    private $currentdurationtime;

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
     * Set empid
     *
     * @param integer $empid
     *
     * @return TblVideohistory
     */
    public function setEmpid($empid)
    {
        $this->empid = $empid;

        return $this;
    }

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
     * Set programid
     *
     * @param integer $programid
     *
     * @return TblVideohistory
     */
    public function setProgramid($programid)
    {
        $this->programid = $programid;

        return $this;
    }

    /**
     * Get programid
     *
     * @return integer
     */
    public function getProgramid()
    {
        return $this->programid;
    }

    /**
     * Set moduleid
     *
     * @param integer $moduleid
     *
     * @return TblVideohistory
     */
    public function setModuleid($moduleid)
    {
        $this->moduleid = $moduleid;

        return $this;
    }

    /**
     * Get moduleid
     *
     * @return integer
     */
    public function getModuleid()
    {
        return $this->moduleid;
    }

    /**
     * Set currentdurationtime
     *
     * @param float $currentdurationtime
     *
     * @return TblVideohistory
     */
    public function setCurrentdurationtime($currentdurationtime)
    {
        $this->currentdurationtime = $currentdurationtime;

        return $this;
    }

    /**
     * Get currentdurationtime
     *
     * @return float
     */
    public function getCurrentdurationtime()
    {
        return $this->currentdurationtime;
    }

    /**
     * Set createdat
     *
     * @param \DateTime $createdat
     *
     * @return TblVideohistory
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
