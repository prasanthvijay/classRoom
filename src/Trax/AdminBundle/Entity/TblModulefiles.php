<?php

namespace Trax\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblModulefiles
 *
 * @ORM\Table(name="tbl_moduleFiles")
 * @ORM\Entity
 */
class TblModulefiles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="moduleId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $moduleid;

    /**
     * @var string
     *
     * @ORM\Column(name="moduleName", type="string", length=255, nullable=true)
     */
    private $modulename;

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
     * @ORM\Column(name="moduleCategory", type="integer", nullable=true)
     */
    private $modulecategory;

    /**
     * @var integer
     *
     * @ORM\Column(name="subCategory", type="integer", nullable=true)
     */
    private $subcategory;

    /**
     * @var string
     *
     * @ORM\Column(name="fileType", type="string", length=255, nullable=true)
     */
    private $filetype;

    /**
     * @var string
     *
     * @ORM\Column(name="fileName", type="text", length=65535, nullable=true)
     */
    private $filename;

    /**
     * @var string
     *
     * @ORM\Column(name="filePath", type="text", length=65535, nullable=true)
     */
    private $filepath;

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
     * Get moduleid
     *
     * @return integer
     */
    public function getModuleid()
    {
        return $this->moduleid;
    }

    /**
     * Set modulename
     *
     * @param string $modulename
     *
     * @return TblModulefiles
     */
    public function setModulename($modulename)
    {
        $this->modulename = $modulename;

        return $this;
    }

    /**
     * Get modulename
     *
     * @return string
     */
    public function getModulename()
    {
        return $this->modulename;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return TblModulefiles
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
     * @return TblModulefiles
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
     * Set modulecategory
     *
     * @param integer $modulecategory
     *
     * @return TblModulefiles
     */
    public function setModulecategory($modulecategory)
    {
        $this->modulecategory = $modulecategory;

        return $this;
    }

    /**
     * Get modulecategory
     *
     * @return integer
     */
    public function getModulecategory()
    {
        return $this->modulecategory;
    }

    /**
     * Set subcategory
     *
     * @param integer $subcategory
     *
     * @return TblModulefiles
     */
    public function setSubcategory($subcategory)
    {
        $this->subcategory = $subcategory;

        return $this;
    }

    /**
     * Get subcategory
     *
     * @return integer
     */
    public function getSubcategory()
    {
        return $this->subcategory;
    }

    /**
     * Set filetype
     *
     * @param string $filetype
     *
     * @return TblModulefiles
     */
    public function setFiletype($filetype)
    {
        $this->filetype = $filetype;

        return $this;
    }

    /**
     * Get filetype
     *
     * @return string
     */
    public function getFiletype()
    {
        return $this->filetype;
    }

    /**
     * Set filename
     *
     * @param string $filename
     *
     * @return TblModulefiles
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set filepath
     *
     * @param string $filepath
     *
     * @return TblModulefiles
     */
    public function setFilepath($filepath)
    {
        $this->filepath = $filepath;

        return $this;
    }

    /**
     * Get filepath
     *
     * @return string
     */
    public function getFilepath()
    {
        return $this->filepath;
    }

    /**
     * Set customerid
     *
     * @param integer $customerid
     *
     * @return TblModulefiles
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
     * @return TblModulefiles
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
     * @return TblModulefiles
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
