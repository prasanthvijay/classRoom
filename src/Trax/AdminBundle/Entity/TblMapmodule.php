<?php

namespace Trax\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblMapmodule
 *
 * @ORM\Table(name="tbl_mapModule")
 * @ORM\Entity
 */
class TblMapmodule
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mapId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mapid;

    /**
     * @var integer
     *
     * @ORM\Column(name="trainerId", type="integer", nullable=true)
     */
    private $trainerid;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="scheduleDate", type="string", length=255, nullable=true)
     */
    private $scheduledate;

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
     * Get mapid
     *
     * @return integer
     */
    public function getMapid()
    {
        return $this->mapid;
    }

    /**
     * Set trainerid
     *
     * @param integer $trainerid
     *
     * @return TblMapmodule
     */
    public function setTrainerid($trainerid)
    {
        $this->trainerid = $trainerid;

        return $this;
    }

    /**
     * Get trainerid
     *
     * @return integer
     */
    public function getTrainerid()
    {
        return $this->trainerid;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return TblMapmodule
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set scheduledate
     *
     * @param string $scheduledate
     *
     * @return TblMapmodule
     */
    public function setScheduledate($scheduledate)
    {
        $this->scheduledate = $scheduledate;

        return $this;
    }

    /**
     * Get scheduledate
     *
     * @return string
     */
    public function getScheduledate()
    {
        return $this->scheduledate;
    }

    /**
     * Set customerid
     *
     * @param integer $customerid
     *
     * @return TblMapmodule
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
     * @return TblMapmodule
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
     * @return TblMapmodule
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
