<?php
namespace Application\BlogBundle\Entity;
	 
use Doctrine\ORM\Mapping as ORM;
	/**
	 * @ORM\Entity
	 * @ORM\Table(name="user")
	 */
	class User
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
	     * @var string $username
	     */
	    protected $username;
	 
	    /**
	     * @ORM\Column(type="string", length="255")
	     *
	     * @var string $email
	     */
	    protected $email;
	 
	    /**
	     * @ORM\Column(type="datetime", name="created_at")
	     *
	     * @var DateTime $createdAt
	     */
	    protected $createdAt;
	 
	    /**
	     * @ORM\OneToMany(targetEntity="Post", mappedBy="user")
	     * @ORM\OrderBy({"createdAt" = "DESC"})
	     *
	     * @var ArrayCollection $posts
	     */
	    protected $posts;
	 
	    public function __construct()
    {
	    $this->createdAt = new \DateTime();
        $this->posts = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set username
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
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

    /**
     * Add posts
     *
     * @param Application\BlogBundle\Entity\Post $posts
     */
    public function addPosts(\Application\BlogBundle\Entity\Post $posts)
    {
        $this->posts[] = $posts;
    }

    /**
     * Get posts
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPosts()
    {
        return $this->posts;
    }
	public function __toString() 
	{
        return sprintf('%s /n %s', $this->getUsername(), $this->getEmail());
	}
}