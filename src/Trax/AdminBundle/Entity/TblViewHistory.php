<?php

namespace Trax\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblViewHistory
 *
 * @ORM\Table(name="tbl_view_history")
 * @ORM\Entity
 */
class TblViewHistory
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
     * @ORM\Column(name="empid", type="integer", nullable=true)
     */
    private $empid;

    /**
     * @var integer
     *
     * @ORM\Column(name="module_id", type="integer", nullable=true)
     */
    private $moduleId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="view_date", type="datetime", nullable=true)
     */
    private $viewDate;



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
     * @return TblViewHistory
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
     * Set moduleId
     *
     * @param integer $moduleId
     *
     * @return TblViewHistory
     */
    public function setModuleId($moduleId)
    {
        $this->moduleId = $moduleId;

        return $this;
    }

    /**
     * Get moduleId
     *
     * @return integer
     */
    public function getModuleId()
    {
        return $this->moduleId;
    }

    /**
     * Set viewDate
     *
     * @param \DateTime $viewDate
     *
     * @return TblViewHistory
     */
    public function setViewDate($viewDate)
    {
        $this->viewDate = $viewDate;

        return $this;
    }

    /**
     * Get viewDate
     *
     * @return \DateTime
     */
    public function getViewDate()
    {
        return $this->viewDate;
    }
}
