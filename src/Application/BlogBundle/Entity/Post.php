<?php
namespace Application\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
	/**
	 * @ORM\Entity
	 * @ORM\Table(name="post")
	 * @ORM\HasLifecycleCallbacks
	 */
	class Post
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
	     * @var string $title
	     */
	    protected $title;
	 
	    /**
	     * @ORM\Column(type="string", length="255", nullable=false)
	     *
	     * @var string $slug
	     */
	    protected $slug;
	 
	    /**
	     * @ORM\Column(type="text")
	     *
	     * @var string $content
	     */
	    protected $content;
	 
	    /**
	     * @ORM\Column(type="datetime", name="created_at")
	     *
	     * @var DateTime $createdAt
	     */
	    protected $createdAt;
	 
	    /**
	     * @ORM\Column(type="datetime", name="updated_at", nullable="true")
	     *
	     * @var DateTime $updatedAt
	     */
	    protected $updatedAt;
	 
	    /**
	     * @ORM\ManyToOne(targetEntity="Category")
	     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
	     *
	     * @var Category $category
	     */
	    protected $category;
	 
	    /**
	     * @ORM\OneToMany(targetEntity="Comment", mappedBy="post")
	     *
	     * @var Comment $comments
	     */
	    protected $comments;
	 
	    /**
	     * @ORM\ManyToOne(targetEntity="User", inversedBy="posts")
	     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
	     *
	     * @var User $user
	     */
	    protected $user;
	 
	    /**
	     * @ORM\ManyToMany(targetEntity="Tag")
	     * @ORM\JoinTable(name="post_tag",
	     *     joinColumns={@ORM\JoinColumn(name="post_id", referencedColumnName="id")},
	     *     inverseJoinColumns={@ORM\JoinColumn(name="tag_id", referencedColumnName="id")}
	     * )
	     *
	     * @var ArrayCollection $tags
	     */
	    protected $tags;
	 
    public function __construct()
    {
	$this->createdAt = new \DateTime();
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
    $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
    }
	
    /**
     * @orm:PreUpdate
     */
    public function preUpdate()
    {
        $this->updatedAt = new \DateTime();
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
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set slug
     *
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set content
     *
     * @param text $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * Get content
     *
     * @return text 
     */
    public function getContent()
    {
        return $this->content;
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
     * Set updatedAt
     *
     * @param datetime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Get updatedAt
     *
     * @return datetime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set category
     *
     * @param Application\BlogBundle\Entity\Category $category
     */
    public function setCategory(\Application\BlogBundle\Entity\Category $category)
    {
        $this->category = $category;
    }

    /**
     * Get category
     *
     * @return Application\BlogBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add comments
     *
     * @param Application\BlogBundle\Entity\Comment $comments
     */
    public function addComments(\Application\BlogBundle\Entity\Comment $comments)
    {
        $this->comments[] = $comments;
    }

    /**
     * Get comments
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set user
     *
     * @param Application\BlogBundle\Entity\User $user
     */
    public function setUser(\Application\BlogBundle\Entity\User $user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return Application\BlogBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add tags
     *
     * @param Application\BlogBundle\Entity\Tag $tags
     */
    public function addTags(\Application\BlogBundle\Entity\Tag $tags)
    {
        $this->tags[] = $tags;
    }

    /**
     * Get tags
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getTags()
    {
        return $this->tags;
    }

	public function __toString() 
	{
        return (string)$content;
	}
}