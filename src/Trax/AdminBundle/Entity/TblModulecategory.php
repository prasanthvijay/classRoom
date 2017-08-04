<?php

namespace Trax\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblModulecategory
 *
 * @ORM\Table(name="tbl_moduleCategory")
 * @ORM\Entity
 */
class TblModulecategory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cateId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cateid;

    /**
     * @var string
     *
     * @ORM\Column(name="ModuleCategory", type="string", length=255, nullable=true)
     */
    private $modulecategory;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="trainerId", type="integer", nullable=true)
     */
    private $trainerid;

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
     * Get cateid
     *
     * @return integer
     */
    public function getCateid()
    {
        return $this->cateid;
    }

    /**
     * Set modulecategory
     *
     * @param string $modulecategory
     *
     * @return TblModulecategory
     */
    public function setModulecategory($modulecategory)
    {
        $this->modulecategory = $modulecategory;

        return $this;
    }

    /**
     * Get modulecategory
     *
     * @return string
     */
    public function getModulecategory()
    {
        return $this->modulecategory;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return TblModulecategory
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
     * Set trainerid
     *
     * @param integer $trainerid
     *
     * @return TblModulecategory
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
     * Set customerid
     *
     * @param integer $customerid
     *
     * @return TblModulecategory
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
     * @return TblModulecategory
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
     * @return TblModulecategory
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
