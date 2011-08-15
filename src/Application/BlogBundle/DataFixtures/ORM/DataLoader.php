<?php
namespace Application\BlogBundle\DataFixtures\ORM;
	 
	use Doctrine\Common\DataFixtures\FixtureInterface;
	 
	use Application\BlogBundle\Entity\Post;
	use Application\BlogBundle\Entity\Category;
	use Application\BlogBundle\Entity\Comment;
	use Application\BlogBundle\Entity\Tag;
	use Application\BlogBundle\Entity\User;
	 
	class FixtureLoader implements FixtureInterface
	{
	    public function load($manager)
	    {
	        // Users
	        $user = new User();
	        $user->setUserName('Emmanuel PEREIRA');
	        $user->setEmail('contact@emmanuelpereira.com');
	        $manager->persist($user);
	 
	        // Tags
	        foreach(array('tag 1', 'tag 2', 'tag 3') as $value) {
	            $tag = new Tag();
	            $tag->setName($value);
	            $manager->persist($tag);
	            $tags_list[] = $tag;
	        }
	 
	        // Categories
	        foreach(array('Category 1', 'Category 2', 'Category 3') as $value) {
	            $cat = new Category();
	            $cat->setName($value);
	            $manager->persist($cat);
	            $cats_list[] = $cat;
	        }
	 
	        // Posts
	        for ( $i = 1; $i <= 20; ++$i )
	        {
	            $post = new Post();
	            $post->setCategory($cats_list[rand(0, count($cats_list)-1)]);
	            $post->setUser($user);
	            $post->setTitle('Post ' . $i);
	            $post->setSlug('post-' . $i);
	            $post->setContent(
	                'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	                Maecenas placerat congue tristique. Aliquam non turpis quis
	                quam malesuada pretium ac id nunc. Nullam suscipit lacinia erat nec commodo.
	                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
	                Duis bibendum justo sit amet neque tincidunt quis vulputate orci venenatis.
	                Aliquam eget eros nulla. Etiam nec eros vitae mauris tincidunt vulputate mollis a erat.
	                Curabitur nec risus ac mi tristique convallis sed vitae urna. Quisque id magna sit amet velit accumsan mattis.
	                Integer vestibulum mattis augue, a euismod erat tincidunt in.
	                Pellentesque rhoncus purus adipiscing tellus mattis commodo feugiat eros scelerisque.
	                Cras vel suscipit eros. Praesent sapien nisi, rutrum in lacinia vitae, ultricies non mi.
	                Sed eu nisl sed lorem dapibus scelerisque vitae non sem. Duis consequat elementum orci ac ullamcorper.
	                Maecenas vehicula enim suscipit quam congue vel sagittis ligula hendrerit.
	                Mauris tempor, urna quis ultricies blandit, elit tellus adipiscing odio, id lacinia velit dui a turpis.'
	            );
	 
	            // ajout de tags au post de façon aléatoire
	            foreach($tags_list as $tag) {
	                if(rand(0,1)) {
	                    $post->addTags($tag);
	                }
	            }
	 
	            $manager->persist($post);
	 
	            // Comments
	            for($j=1; $j<5 ; $j++){
	                if(rand(0, 1)){
	                    $comment = new Comment();
	                    $comment->setUser($user);
	                    $comment->setContent('comment about '.$post->getTitle());
	                    $comment->setPost($post);
	                    $manager->persist($comment);
	                }
	            }
	 
	        }
	 
	        // on sauvegarde le tout dans la base de données
	        $manager->flush();
	    }
	}