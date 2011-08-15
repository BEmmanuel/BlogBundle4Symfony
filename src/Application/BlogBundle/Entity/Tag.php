<?php
namespace Application\BlogBundle\Entity;
	 
use Doctrine\ORM\Mapping as ORM;
	/**
	 * @ORM\Entity
	 * @ORM\Table(name="tag")
	 */
	class Tag
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
	     * @var string $name;
	     */
	    protected $name;
	 
	    /**
	     * @ORM\ManyToMany(targetEntity="Post", mappedBy="tags")
	     *
	     * @var Post $post
	     */
	    protected $post;
	 
	    public function __construct()
    {
	    $this->createdAt = new \DateTime();
        $this->post = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add post
     *
     * @param Application\BlogBundle\Entity\Post $post
     */
    public function addPost(\Application\BlogBundle\Entity\Post $post)
    {
        $this->post[] = $post;
    }

    /**
     * Get post
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPost()
    {
        return $this->post;
    }
	public function __toString() { return $this->name; }
}