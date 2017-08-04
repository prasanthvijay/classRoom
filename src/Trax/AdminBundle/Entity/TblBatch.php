<?php

namespace Trax\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblBatch
 *
 * @ORM\Table(name="tbl_batch")
 * @ORM\Entity
 */
class TblBatch
{
    /**
     * @var integer
     *
     * @ORM\Column(name="batchId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $batchid;

    /**
     * @var string
     *
     * @ORM\Column(name="batchName", type="string", length=255, nullable=true)
     */
    private $batchname;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

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
     * Get batchid
     *
     * @return integer
     */
    public function getBatchid()
    {
        return $this->batchid;
    }

    /**
     * Set batchname
     *
     * @param string $batchname
     *
     * @return TblBatch
     */
    public function setBatchname($batchname)
    {
        $this->batchname = $batchname;

        return $this;
    }

    /**
     * Get batchname
     *
     * @return string
     */
    public function getBatchname()
    {
        return $this->batchname;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return TblBatch
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
     * Set customerid
     *
     * @param integer $customerid
     *
     * @return TblBatch
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
     * @return TblBatch
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
     * @return TblBatch
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
