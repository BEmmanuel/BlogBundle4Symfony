<?php

/* ApplicationBlogBundle:Blog:comment.html.twig */
class __TwigTemplate_0c5da911986923194f780fe8a7098a3e extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("ApplicationBlogBundle::layout.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\t    symfony2 Blog | Accueil
\t";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "\t 
\t    ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'comms'));
        foreach ($context['_seq'] as $context['_key'] => $context['comm']) {
            // line 10
            echo "\t<div class=\"comm\">
\t
\t<p class=\"comm-info\">Posté par ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'comm'), "user", array(), "any", false), "username", array(), "any", false), "html");
            echo "
\t</p><p class=\"post_body\">
\t                ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'comm'), "content", array(), "any", false), "html");
            echo "
\t             
\t</p>
\t 
\t                   
\t                
\t          
\t<p class=\"postmeta\">
\t              
\t<span class=\"date\">";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'comm'), "createdAt", array(), "any", false), "l d M Y"), "html");
            echo "</span>
\t             
\t</p></div>
\t 
\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comm'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 28
        echo "\t\t<a href=\"../blog\">Retour</a>
";
    }

    public function getTemplateName()
    {
        return "ApplicationBlogBundle:Blog:comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
