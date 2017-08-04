<?php

namespace Trax\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblMapprogramtocategory
 *
 * @ORM\Table(name="tbl_mapProgramtoCategory")
 * @ORM\Entity
 */
class TblMapprogramtocategory
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
     * @ORM\Column(name="categoryId", type="string", length=255, nullable=true)
     */
    private $categoryid;

    /**
     * @var string
     *
     * @ORM\Column(name="subCategoryId", type="string", length=255, nullable=true)
     */
    private $subcategoryid;

    /**
     * @var string
     *
     * @ORM\Column(name="moduleId", type="string", length=255, nullable=true)
     */
    private $moduleid;

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
     * @return TblMapprogramtocategory
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
     * Set categoryid
     *
     * @param string $categoryid
     *
     * @return TblMapprogramtocategory
     */
    public function setCategoryid($categoryid)
    {
        $this->categoryid = $categoryid;

        return $this;
    }

    /**
     * Get categoryid
     *
     * @return string
     */
    public function getCategoryid()
    {
        return $this->categoryid;
    }

    /**
     * Set subcategoryid
     *
     * @param string $subcategoryid
     *
     * @return TblMapprogramtocategory
     */
    public function setSubcategoryid($subcategoryid)
    {
        $this->subcategoryid = $subcategoryid;

        return $this;
    }

    /**
     * Get subcategoryid
     *
     * @return string
     */
    public function getSubcategoryid()
    {
        return $this->subcategoryid;
    }

    /**
     * Set moduleid
     *
     * @param string $moduleid
     *
     * @return TblMapprogramtocategory
     */
    public function setModuleid($moduleid)
    {
        $this->moduleid = $moduleid;

        return $this;
    }

    /**
     * Get moduleid
     *
     * @return string
     */
    public function getModuleid()
    {
        return $this->moduleid;
    }

    /**
     * Set customerid
     *
     * @param integer $customerid
     *
     * @return TblMapprogramtocategory
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
     * @return TblMapprogramtocategory
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
     * @return TblMapprogramtocategory
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
