<?php

/* ApplicationBlogBundle::layout.html.twig */
class __TwigTemplate_18c17268cf9ec1f098d9fbd49fb632e3 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ApplicationBlogBundle_homepage"), "html");
        echo " title=\"\">Symfony2Blog</a></h1>
\t\t

\t\t<!-- navigation -->
\t\t<div  id=\"nav\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ApplicationBlogBundle_homepage"), "html");
        echo "\">Accueil</a></li>
\t\t\t\t

\t\t\t\t
\t\t\t</ul>
\t\t\t
\t\t</div>

\t\t<div id=\"header-image\"></div>

\t\t<form id=\"quick-search\" action=\"\" method=\"get\" >
\t\t\t<p>
\t\t\t<label for=\"qsearch\">Search:</label>
\t\t\t<input class=\"tbox\" id=\"qsearch\" type=\"text\" name=\"qsearch\" value=\"\" title=\"Start typing and hit ENTER\" />
\t\t\t<input class=\"btn\" alt=\"Search\" type=\"image\" name=\"searchsubmit\" title=\"Search\" src=";
        // line 38
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
        // line 50
        if ($this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "hasFlash", array("notice", ), "method", false)) {
            // line 51
            echo "            <div class=\"flash-notice\">
                ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "flash", array("notice", ), "method", false), "html");
            echo "
            </div>
        ";
        }
        // line 55
        echo "
        ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "
        <!-- main ends -->
\t\t</div>

\t\t

\t<!-- contents end here -->
\t</div></div>

        <!-- footer starts here -->
\t<div id=\"footer-wrapper\" class=\"container_16\">

\t\t<div id=\"footer-content\">

\t\t\t<div class=\"grid_8\">

\t\t\t\t<h3>Resource Links</h3>
\t\t\t\t<p>
\t\t\t\t
\t\t\t\t</p>

\t\t\t\t<ul class=\"footer-list\">
                    <li>Emmanuel Berroir
                        
                    </li>
\t\t\t\t\t<li><a href=\"http://www.symfony.com\" title=\"Symfony2 official Website\">Symfony2 -
                        <span>Official website</span></a>
                    </li>
\t\t
\t\t\t\t</ul>

\t\t\t</div>

\t\t\t

\t\t</div>

\t\t<div id=\"footer-bottom\">

\t\t\t<p class=\"bottom-left\">
\t\t\t&nbsp; &copy;2011 www.emmanuelpereira.com &nbsp; &nbsp;
\t\t\twebsite templates by <a href=\"http://www.styleshout.com/\">styleshout</a>
                        &nbsp;Powered by <a href=\"http://www.symfony.com\" target=\"_blank\">Symfony</a>
                        </p>

\t\t\t<p class=\"bottom-right\" >
\t\t\t\t
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

    // line 56
    public function block_content($context, array $blocks = array())
    {
    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ApplicationBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
