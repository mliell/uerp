<?php

namespace Uerp\BillsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Bills
 * @package Uerp\BillsBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="bills")
 */

class Bills {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @ORM\Column(type="date")
     */
    protected $date;


    /**
     * @ORM\Column(type="decimal",scale=2)
     */
    protected $value;



    /**
     * @ORM\ManyToOne(targetEntity="Uerp\CategoriesBundle\Entity\Categories")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $categories;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Uerp\SubcategoriesBundle\Entity\Subcategories")
     * @ORM\JoinColumn(name="subcategories_id", referencedColumnName="id")
     */
    protected $subcategories;

    /**
     * @ORM\ManyToOne(targetEntity="Uerp\BankBundle\Entity\BankAccount")
     * @ORM\JoinColumn(name="account_id", referencedColumnName="id")
     */
    protected $account;


    /**
     * @ORM\Column(type="string",length=50,nullable=true)
     */
    protected $docorigin;

    /**
     * @ORM\Column(type="string",length=20,nullable=true)
     */
    protected $dataaux;

    /**
     * @ORM\ManyToOne(targetEntity="Uerp\StatusBundle\Entity\Status")
     * @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     */
    protected $status;



    /**
     * @ORM\ManyToOne(targetEntity="Uerp\SupplierBundle\Entity\Supplier")
     * @ORM\JoinColumn(name="supplier_id", referencedColumnName="id")
     */
    protected $supplier;

    /**
     * @ORM\Column(type="string",length=10, nullable=true)
     *
     */
    protected $parc;


public function __construct() {
    $this->date = new \DateTime('now');
}
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
     * Set date
     *
     * @param \DateTime $date
     * @return Bills
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return Bills
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set categories
     *
     * @param \Uerp\CategoriesBundle\Entity\Categories $categories
     * @return Bills
     */
    public function setCategories(\Uerp\CategoriesBundle\Entity\Categories $categories = null)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get categories
     *
     * @return \Uerp\CategoriesBundle\Entity\Categories
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set account
     *
     * @param \Uerp\BankBundle\Entity\BankAccount $account
     * @return Bills
     */
    public function setAccount(\Uerp\BankBundle\Entity\BankAccount $account = null)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account
     *
     * @return \Uerp\BankBundle\Entity\BankAccount
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set docorigin
     *
     * @param string $docorigin
     * @return Bills
     */
    public function setDocorigin($docorigin)
    {
        $this->docorigin = $docorigin;

        return $this;
    }

    /**
     * Get docorigin
     *
     * @return string
     */
    public function getDocorigin()
    {
        return $this->docorigin;
    }

    /**
     * Set dataaux
     *
     * @param string $dataaux
     * @return Bills
     */
    public function setDataaux($dataaux)
    {
        $this->dataaux = $dataaux;

        return $this;
    }

    /**
     * Get dataaux
     *
     * @return string
     */
    public function getDataaux()
    {
        return $this->dataaux;
    }

    /**
     * Set status
     *
     * @param \Uerp\StatusBundle\Entity\Status $status
     * @return Bills
     */
    public function setStatus(\Uerp\StatusBundle\Entity\Status $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \Uerp\StatusBundle\Entity\Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set supplier
     *
     * @param \Uerp\SupplierBundle\Entity\Supplier $supplier
     * @return Bills
     */
    public function setSupplier(\Uerp\SupplierBundle\Entity\Supplier $supplier = null)
    {
        $this->supplier = $supplier;

        return $this;
    }

    /**
     * Get supplier
     *
     * @return \Uerp\SupplierBundle\Entity\Supplier
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * Set subcategories
     *
     * @param \Uerp\SubcategoriesBundle\Entity\Subcategories $subcategories
     * @return Bills
     */
    public function setSubcategories(\Uerp\SubcategoriesBundle\Entity\Subcategories $subcategories = null)
    {
        $this->subcategories = $subcategories;

        return $this;
    }

    /**
     * Get subcategories
     *
     * @return \Uerp\SubcategoriesBundle\Entity\Subcategories
     */
    public function getSubcategories()
    {
        return $this->subcategories;
    }

    /**
     * Set parc
     *
     * @param string $parc
     *
     * @return Bills
     */
    public function setParc($parc)
    {
        $this->parc = $parc;

        return $this;
    }

    /**
     * Get parc
     *
     * @return string
     */
    public function getParc()
    {
        return $this->parc;
    }
}
