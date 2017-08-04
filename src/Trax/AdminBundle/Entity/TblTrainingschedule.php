<?php

namespace Trax\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblTrainingschedule
 *
 * @ORM\Table(name="tbl_trainingSchedule")
 * @ORM\Entity
 */
class TblTrainingschedule
{
    /**
     * @var integer
     *
     * @ORM\Column(name="scheId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $scheid;

    /**
     * @var integer
     *
     * @ORM\Column(name="batchId", type="integer", nullable=true)
     */
    private $batchid;

    /**
     * @var integer
     *
     * @ORM\Column(name="programId", type="integer", nullable=true)
     */
    private $programid;

    /**
     * @var integer
     *
     * @ORM\Column(name="moduleCateId", type="integer", nullable=true)
     */
    private $modulecateid;

    /**
     * @var string
     *
     * @ORM\Column(name="trainerName", type="string", length=255, nullable=true)
     */
    private $trainername;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="scheduleDate", type="datetime", nullable=true)
     */
    private $scheduledate;

    /**
     * @var integer
     *
     * @ORM\Column(name="departId", type="integer", nullable=true)
     */
    private $departid;

    /**
     * @var integer
     *
     * @ORM\Column(name="employeeId", type="integer", nullable=true)
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
     * Get scheid
     *
     * @return integer
     */
    public function getScheid()
    {
        return $this->scheid;
    }

    /**
     * Set batchid
     *
     * @param integer $batchid
     *
     * @return TblTrainingschedule
     */
    public function setBatchid($batchid)
    {
        $this->batchid = $batchid;

        return $this;
    }

    /**
     * Get batchid
     *
     * @return integer
     */
    public function getBatchid()
    {
        return $this->batchid;
    }

    /**
     * Set programid
     *
     * @param integer $programid
     *
     * @return TblTrainingschedule
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
     * Set modulecateid
     *
     * @param integer $modulecateid
     *
     * @return TblTrainingschedule
     */
    public function setModulecateid($modulecateid)
    {
        $this->modulecateid = $modulecateid;

        return $this;
    }

    /**
     * Get modulecateid
     *
     * @return integer
     */
    public function getModulecateid()
    {
        return $this->modulecateid;
    }

    /**
     * Set trainername
     *
     * @param string $trainername
     *
     * @return TblTrainingschedule
     */
    public function setTrainername($trainername)
    {
        $this->trainername = $trainername;

        return $this;
    }

    /**
     * Get trainername
     *
     * @return string
     */
    public function getTrainername()
    {
        return $this->trainername;
    }

    /**
     * Set scheduledate
     *
     * @param \DateTime $scheduledate
     *
     * @return TblTrainingschedule
     */
    public function setScheduledate($scheduledate)
    {
        $this->scheduledate = $scheduledate;

        return $this;
    }

    /**
     * Get scheduledate
     *
     * @return \DateTime
     */
    public function getScheduledate()
    {
        return $this->scheduledate;
    }

    /**
     * Set departid
     *
     * @param integer $departid
     *
     * @return TblTrainingschedule
     */
    public function setDepartid($departid)
    {
        $this->departid = $departid;

        return $this;
    }

    /**
     * Get departid
     *
     * @return integer
     */
    public function getDepartid()
    {
        return $this->departid;
    }

    /**
     * Set employeeid
     *
     * @param integer $employeeid
     *
     * @return TblTrainingschedule
     */
    public function setEmployeeid($employeeid)
    {
        $this->employeeid = $employeeid;

        return $this;
    }

    /**
     * Get employeeid
     *
     * @return integer
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
     * @return TblTrainingschedule
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
     * @return TblTrainingschedule
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
     * @return TblTrainingschedule
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
