<?php
namespace Application\BlogBundle\Entity;
	 
use Doctrine\ORM\Mapping as ORM;
	/**
	 * @ORM\Entity
	 * @ORM\Table(name="category")
	 */
	class Category
	{
	    /**
	     * @ORM\Id
	     * @ORM\Column(type="integer")
	     * @ORM\GeneratedValue(strategy="AUTO")
	     *
	     * @var integer $id
	     */
	    protected $id;
	 
	    /**
         * @ORM\Column(type="string", length="255")
	     *
	     * @var string $name
	     */
	    protected $name;
	 
	    /**
	     * @ORM\Column(type="datetime", name="created_at")
	     *
	     * @var DateTime $createdAt
	     */
	    protected $createdAt;
	 
	
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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set createdAt
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Get createdAt
     *
     * @return datetime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
	public function __toString() { return $this->getName(); }
}