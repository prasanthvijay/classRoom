<?php

namespace Trax\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblModulesubcategory
 *
 * @ORM\Table(name="tbl_moduleSubCategory")
 * @ORM\Entity
 */
class TblModulesubcategory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="subCatid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $subcatid;

    /**
     * @var integer
     *
     * @ORM\Column(name="catId", type="integer", nullable=true)
     */
    private $catid;

    /**
     * @var string
     *
     * @ORM\Column(name="subCategory", type="string", length=255, nullable=true)
     */
    private $subcategory;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
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
     * @var integer
     *
     * @ORM\Column(name="trainerId", type="integer", nullable=true)
     */
    private $trainerid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime", nullable=true)
     */
    private $createdat;



    /**
     * Get subcatid
     *
     * @return integer
     */
    public function getSubcatid()
    {
        return $this->subcatid;
    }

    /**
     * Set catid
     *
     * @param integer $catid
     *
     * @return TblModulesubcategory
     */
    public function setCatid($catid)
    {
        $this->catid = $catid;

        return $this;
    }

    /**
     * Get catid
     *
     * @return integer
     */
    public function getCatid()
    {
        return $this->catid;
    }

    /**
     * Set subcategory
     *
     * @param string $subcategory
     *
     * @return TblModulesubcategory
     */
    public function setSubcategory($subcategory)
    {
        $this->subcategory = $subcategory;

        return $this;
    }

    /**
     * Get subcategory
     *
     * @return string
     */
    public function getSubcategory()
    {
        return $this->subcategory;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return TblModulesubcategory
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
     * @return TblModulesubcategory
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
     * @return TblModulesubcategory
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
     * Set trainerid
     *
     * @param integer $trainerid
     *
     * @return TblModulesubcategory
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
     * Set createdat
     *
     * @param \DateTime $createdat
     *
     * @return TblModulesubcategory
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
