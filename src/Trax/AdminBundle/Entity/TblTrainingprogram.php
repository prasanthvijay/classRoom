<?php

namespace Trax\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblTrainingprogram
 *
 * @ORM\Table(name="tbl_trainingProgram")
 * @ORM\Entity
 */
class TblTrainingprogram
{
    /**
     * @var integer
     *
     * @ORM\Column(name="prgId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prgid;

    /**
     * @var integer
     *
     * @ORM\Column(name="batchId", type="integer", nullable=true)
     */
    private $batchid;

    /**
     * @var string
     *
     * @ORM\Column(name="programName", type="string", length=255, nullable=true)
     */
    private $programname;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

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
     * Get prgid
     *
     * @return integer
     */
    public function getPrgid()
    {
        return $this->prgid;
    }

    /**
     * Set batchid
     *
     * @param integer $batchid
     *
     * @return TblTrainingprogram
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
     * Set programname
     *
     * @param string $programname
     *
     * @return TblTrainingprogram
     */
    public function setProgramname($programname)
    {
        $this->programname = $programname;

        return $this;
    }

    /**
     * Get programname
     *
     * @return string
     */
    public function getProgramname()
    {
        return $this->programname;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return TblTrainingprogram
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
     * Set adminid
     *
     * @param integer $adminid
     *
     * @return TblTrainingprogram
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
     * @return TblTrainingprogram
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
