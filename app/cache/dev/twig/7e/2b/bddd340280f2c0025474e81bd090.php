<?php

/* ApplicationBlogBundle:template-symfony2blog:layout.html.twig */
class __TwigTemplate_7e2bbddd340280f2c0025474e81bd090 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">

<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en\">
    <head>
        <meta http-equiv=\"content-type\" content=\"application/xhtml+xml; charset=UTF-8\" />
        <meta http-equiv=\"Content-language\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "locale", array(), "any", false), "html");
        echo "\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html");
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationblog/css/screen.css"), "html");
        echo " />
        ";
        // line 11
        $this->displayBlock('head', $context, $blocks);
        // line 12
        echo "    </head>
    <body>
        
        <!-- header starts-->
\t<div id=\"header-wrap\"><div id=\"header\" class=\"container_16\">

\t\t<h1 id=\"logo-text\"><a href=";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html");
        echo " title=\"\">Symfony2Blog</a></h1>
\t\t<p id=\"intro\">Symfony2 Tutorial</p>

\t\t<!-- navigation -->
\t\t<div  id=\"nav\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html");
        echo "\">Accueil</a></li>
\t\t\t\t<li><a href=\"\">Contact</a></li>
\t\t\t\t<li><a href=\"\">A Propos</a></li>
\t\t\t</ul>
\t\t</div>

\t\t<div id=\"header-image\"></div>

\t\t<form id=\"quick-search\" action=\"\" method=\"get\" >
\t\t\t<p>
\t\t\t<label for=\"qsearch\">Search:</label>
\t\t\t<input class=\"tbox\" id=\"qsearch\" type=\"text\" name=\"qsearch\" value=\"\" title=\"Start typing and hit ENTER\" />
\t\t\t<input class=\"btn\" alt=\"Search\" type=\"image\" name=\"searchsubmit\" title=\"Search\" src=";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationblog/images/search.gif"), "html");
        echo " />
\t\t\t</p>
\t\t</form>

\t<!-- header ends here -->
\t</div></div>

        <!-- content starts -->
\t<div id=\"content-outer\"><div id=\"content-wrapper\" class=\"container_16\">
        <!-- main -->
\t<div id=\"main\" class=\"grid_8\">

        ";
        // line 48
        if ($this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "hasFlash", array("notice", ), "method", false)) {
            // line 49
            echo "            <div class=\"flash-notice\">
                ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "flash", array("notice", ), "method", false), "html");
            echo "
            </div>
        ";
        }
        // line 53
        echo "
        ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "
        <!-- main ends -->
\t\t</div>

\t\t<!-- left-columns starts -->
\t\t<div id=\"left-columns\" class=\"grid_8\">

\t\t\t<div class=\"grid_4 alpha\">

\t\t\t\t<div class=\"sidemenu\">
\t\t\t\t\t<h3>Sidebar Menu</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"\">Lorem Ipsum</a></li>
\t\t\t\t\t\t<li><a href=\"\">Lorem Ipsum</a></li>
\t\t\t\t\t\t<li><a href=\"\">Lorem Ipsum</a></li>
\t\t\t\t\t\t<li><a href=\"\">Lorem Ipsum</a></li>
\t\t\t\t\t\t<li><a href=\"\">Lorem Ipsum</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t\t<div class=\"sidemenu\">
\t\t\t\t\t<h3>Links</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"\">Lorem Ipsum</a></li>
\t\t\t\t\t\t<li><a href=\"\">Lorem Ipsum</a></li>
\t\t\t\t\t\t<li><a href=\"\">Lorem Ipsum</a></li>
\t\t\t\t\t\t<li><a href=\"\">Lorem Ipsum</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t\t<div class=\"sidemenu\">
\t\t\t\t\t<h3>Sponsors</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"\" title=\"Lorem Ipsum\">Lorem Ipsum<br />
                            <span>Description</span></a>
                        </li>
\t\t\t\t\t\t<li><a href=\"\" title=\"Lorem Ipsum\">Lorem Ipsum <br />
                            <span>Description</span></a>
                        </li>
\t\t\t\t\t\t<li><a href=\"\" title=\"Lorem Ipsum\">Lorem Ipsum <br />
                            <span>Description</span>
                        </a></li>
\t\t\t\t\t\t<li><a href=\"\" title=\"Lorem Ipsum\">Lorem Ipsum <br />
                            <span>Description</span></a>
                        </li>
\t\t\t\t\t\t<li><a href=\"\" title=\"Lorem Ipsum\">Lorem Ipsum <br />
                            <span>Description</span></a>
                        </li>
\t\t\t\t\t\t<li><a href=\"\" title=\"Lorem Ipsum\">Lorem Ipsum <br />
                            <span>Description</span></a>
                        </li>
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t\t<h3>Wise Words</h3>
\t\t\t\t<p>
\t\t\t\t&quot;Beauty of style and harmony and grace and good rhythm
\t\t\t\tdepends on simplicity.&quot; </p>

\t\t\t\t<p class=\"align-right\"> - Plato</p>

\t\t\t\t<h3>Support Styleshout</h3>
\t\t\t\t<p>
\t\t\t\tIf you are interested in supporting my work and would like to contribute, you are
\t\t\t\twelcome to make a small donation through the
\t\t\t\t<a href=\"\">donate link</a> on my website - it will
\t\t\t\tbe a great help and will surely be appreciated.</p>

\t\t\t</div>

\t\t\t<div class=\"grid_4 omega\">

\t\t\t\t<h3>Featured</h3>

\t\t\t\t<div class=\"featured-post\">

\t\t\t\t\t<h4><a href=\"\">Lorem ipsum dolor sit</a></h4>
\t\t\t\t\t<p class=\"post-info\">Posted by <a href=\"\">erwin</a> on 09/26/08 </p>
\t\t\t\t\t<p>
\t\t\t\t\t<a href=\"\"><img src=";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationblog/images/image.gif"), "html");
        echo " width=\"160\" height=\"100\" alt=\"firefox\" class=\"float-left\" /></a>
\t\t\t\t\tVestibulum venenatis. Nulla vel ipsum. Proin rutrum, urna sit amet bibendum
\t\t\t\t\tpellentesque, ante sapien varius turpis, eu nonummy nunc urna scelerisque ante.
\t\t\t\t\tNunc sed leo at dolor pharetra facilisis. Sed sed lectus at justo dapibus tristique.
\t\t\t\t\tMorbi molestie pulvinar elit. Donec dictum nibh nec est. Aliquam sagittis, lacus
\t\t\t\t\ta pharetra tempor, enim justo tempor nisi, at aliquet nulla metus sed augue.
\t\t\t\t\t</p>

\t\t\t\t\t<p><a class=\"more-link\" href=\"\">continue reading</a></p>

\t\t\t\t</div>

\t\t\t\t<div class=\"featured-post\">

\t\t\t\t\t<h4><a href=\"\">Lorem ipsum dolor sit</a></h4>
\t\t\t\t\t<p class=\"post-info\">Posted by <a href=\"\">erwin</a> on 09/26/08 </p>
\t\t\t\t\t<p>
\t\t\t\t\tVestibulum venenatis. Nulla vel ipsum. Proin rutrum, urna sit amet bibendum
\t\t\t\t\tpellentesque, ante sapien varius turpis, eu nonummy nunc urna scelerisque ante.
\t\t\t\t\tNunc sed leo at dolor pharetra facilisis. Sed sed lectus at justo dapibus tristique.
\t\t\t\t\tMorbi molestie pulvinar elit. Donec dictum nibh nec est. Aliquam sagittis, lacus
\t\t\t\t\ta pharetra tempor, enim justo tempor nisi, at aliquet nulla metus sed augue.
\t\t\t\t\t</p>

\t\t\t\t\t<p><a class=\"more-link\" href=\"\">continue reading</a></p>

\t\t\t\t</div>

\t\t\t\t<div class=\"featured-post\">

\t\t\t\t\t<h4><a href=\"\">Lorem ipsum dolor sit</a></h4>
\t\t\t\t\t<p class=\"post-info\">Posted by <a href=\"\">erwin</a> on 09/26/08 </p>
\t\t\t\t\t<p>
\t\t\t\t\tVestibulum venenatis. Nulla vel ipsum. Proin rutrum, urna sit amet bibendum
\t\t\t\t\tpellentesque, ante sapien varius turpis, eu nonummy nunc urna scelerisque ante.
\t\t\t\t\tNunc sed leo at dolor pharetra facilisis. Sed sed lectus at justo dapibus tristique.
\t\t\t\t\tMorbi molestie pulvinar elit. Donec dictum nibh nec est. Aliquam sagittis, lacus
\t\t\t\t\ta pharetra tempor, enim justo tempor nisi, at aliquet nulla metus sed augue.
\t\t\t\t\t</p>

\t\t\t\t\t<p><a class=\"more-link\" href=\"\">continue reading</a></p>

\t\t\t\t</div>

\t\t\t</div>

\t\t<!-- end left-columns -->
\t\t</div>

\t<!-- contents end here -->
\t</div></div>

        <!-- footer starts here -->
\t<div id=\"footer-wrapper\" class=\"container_16\">

\t\t<div id=\"footer-content\">

\t\t\t<div class=\"grid_8\">

\t\t\t\t<h3>Resource Links</h3>
\t\t\t\t<p>
\t\t\t\tLorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum.
\t\t\t\tCras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu
\t\t\t\tposuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum
\t\t\t\todio, ac blandit ante orci ut diam. <a href=\"index.html\">Read more...</a>
\t\t\t\t</p>

\t\t\t\t<ul class=\"footer-list\">
                    <li><a href=\"http://www.emmanuelpereira.com\" title=\"Emmanuel PEREIRA BLOG\">Emmanuel PEREIRA Blog -
                        <span>News and tutorial about Symfony2</span></a>
                    </li>
\t\t\t\t\t<li><a href=\"http://www.symfony.com\" title=\"Symfony2 official Website\">Symfony2 -
                        <span>Official website</span></a>
                    </li>
\t\t
\t\t\t\t</ul>

\t\t\t</div>

\t\t\t<div class=\"grid_8\">

\t\t\t\t<h3>Image Gallery </h3>
\t\t\t\t<p class=\"thumbs\">
\t\t\t\t\t<a href=\"index.html\"><img src=";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationblog/images/thumb.jpg"), "html");
        echo " width=\"40\" height=\"40\" alt=\"thumbnail\" /></a>
\t\t\t\t\t<a href=\"index.html\"><img src=";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationblog/images/thumb.jpg"), "html");
        echo " width=\"40\" height=\"40\" alt=\"thumbnail\" /></a>
\t\t\t\t\t<a href=\"index.html\"><img src=";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationblog/images/thumb.jpg"), "html");
        echo " width=\"40\" height=\"40\" alt=\"thumbnail\" /></a>
\t\t\t\t\t<a href=\"index.html\"><img src=";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationblog/images/thumb.jpg"), "html");
        echo " width=\"40\" height=\"40\" alt=\"thumbnail\" /></a>
\t\t\t\t\t<a href=\"index.html\"><img src=";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationblog/images/thumb.jpg"), "html");
        echo " width=\"40\" height=\"40\" alt=\"thumbnail\" /></a>
\t\t\t\t\t<a href=\"index.html\"><img src=";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationblog/images/thumb.jpg"), "html");
        echo " width=\"40\" height=\"40\" alt=\"thumbnail\" /></a>
\t\t\t\t\t<a href=\"index.html\"><img src=";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationblog/images/thumb.jpg"), "html");
        echo " width=\"40\" height=\"40\" alt=\"thumbnail\" /></a>
\t\t\t\t\t<a href=\"index.html\"><img src=";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationblog/images/thumb.jpg"), "html");
        echo " width=\"40\" height=\"40\" alt=\"thumbnail\" /></a>
\t\t\t\t\t<a href=\"index.html\"><img src=";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationblog/images/thumb.jpg"), "html");
        echo " width=\"40\" height=\"40\" alt=\"thumbnail\" /></a>
\t\t\t\t\t<a href=\"index.html\"><img src=";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationblog/images/thumb.jpg"), "html");
        echo " width=\"40\" height=\"40\" alt=\"thumbnail\" /></a>
\t\t\t\t\t<a href=\"index.html\"><img src=";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationblog/images/thumb.jpg"), "html");
        echo " width=\"40\" height=\"40\" alt=\"thumbnail\" /></a>
\t\t\t\t\t<a href=\"index.html\"><img src=";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationblog/images/thumb.jpg"), "html");
        echo " width=\"40\" height=\"40\" alt=\"thumbnail\" /></a>
\t\t\t\t</p>

\t\t\t\t<h3>About</h3>
\t\t\t\t<p>
\t\t\t\t<a href=\"\"><img src=";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationblog/images/gravatar.jpg"), "html");
        echo " width=\"40\" height=\"40\" alt=\"firefox\" class=\"float-left\" /></a>
\t\t\t\tLorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum.
\t\t\t\tCras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu
\t\t\t\tposuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum
\t\t\t\todio, ac blandit ante orci ut diam.</p>
\t\t\t\t<p>
\t\t\t\tLorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum.
\t\t\t\tCras id urna. <a href=\"\">Learn more...</a></p>

\t\t\t</div>

\t\t</div>

\t\t<div id=\"footer-bottom\">

\t\t\t<p class=\"bottom-left\">
\t\t\t&nbsp; &copy;2011 www.emmanuelpereira.com &nbsp; &nbsp;
\t\t\twebsite templates by <a href=\"http://www.styleshout.com/\">styleshout</a>
                        &nbsp;Powered by <a href=\"http://www.symfony.com\" target=\"_blank\">Symfony</a>
                        </p>

\t\t\t<p class=\"bottom-right\" >
\t\t\t\t<a href=\"\">Home</a> |
\t\t\t\t<a href=\"\">Sitemap</a> |
\t\t\t\t<a href=\"\">RSS Feed</a> |
\t\t\t\t<a href=\"http://jigsaw.w3.org/css-validator/check/referer\">CSS</a> |
\t\t   \t    <a href=\"http://validator.w3.org/check/referer\">XHTML</a>
\t\t\t</p>

\t\t</div>

\t</div>
\t<!-- footer ends here -->

    </body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony2Blog";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 11
    public function block_head($context, array $blocks = array())
    {
    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ApplicationBlogBundle:template-symfony2blog:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
