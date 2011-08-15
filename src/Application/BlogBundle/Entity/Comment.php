<?php
namespace Application\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
	/**
	 * @ORM\Entity
	 * @ORM\Table(name="comment")
	 */
	class Comment
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
	     * @ORM\ManyToOne(targetEntity="User", inversedBy="comments")
	     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
	     *
	     * @var User $user
	     */
	    protected $user;
	 
	     /**
	     * @ORM\Column(type="text")
	     *
	     * @var string $content
	     */
	    protected $content;
	 
	    /**
	     * @ORM\ManyToOne(targetEntity="Post", inversedBy="comments")
	     * @ORM\JoinColumn(name="post_id", referencedColumnName="id")
	     *
	     * @var Post $post
	     */
	    protected $post;
	 
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
     * Set post
     *
     * @param Application\BlogBundle\Entity\Post $post
     */
    public function setPost(\Application\BlogBundle\Entity\Post $post)
    {
        $this->post = $post;
    }

    /**
     * Get post
     *
     * @return Application\BlogBundle\Entity\Post 
     */
    public function getPost()
    {
        return $this->post;
    }
	public function __toString() 
	{ 
	return (string)$content; 
	}
}