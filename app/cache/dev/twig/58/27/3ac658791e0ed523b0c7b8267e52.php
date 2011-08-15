<?php

/* ApplicationBlogBundle:Blog:index.html.twig */
class __TwigTemplate_58273ac658791e0ed523b0c7b8267e52 extends Twig_Template
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
        echo "\t <a href=\"new\">Nouveau Post</a>
\t    ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'posts'));
        foreach ($context['_seq'] as $context['_key'] => $context['post']) {
            // line 10
            echo "\t<div class=\"post\">
\t<h2>
\t                <a href=\"\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'post'), "title", array(), "any", false), "html");
            echo "</a>
\t            </h2>
\t<p class=\"post-info\">Posté par ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'post'), "user", array(), "any", false), "username", array(), "any", false), "html");
            echo " | Categorie : <a href=\"\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'post'), "category", array(), "any", false), "name", array(), "any", false), "html");
            echo "</a>
\t</p><p class=\"post_body\">
\t                ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'post'), "content", array(), "any", false), "html");
            echo "
\t             
\t</p><ul class=\"post_tags\">
\t                ";
            // line 19
            if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, 'post'), "tags", array(), "any", false))) {
                // line 20
                echo "\t                    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'post'), "tags", array(), "any", false));
                foreach ($context['_seq'] as $context['_key'] => $context['tag']) {
                    // line 21
                    echo "\t<li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'tag'), "name", array(), "any", false), "html");
                    echo "</li>
\t 
\t                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 24
                echo "\t                ";
            }
            // line 25
            echo "\t            </ul>
\t<p class=\"postmeta\">
\t                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'post'), "id", array(), "any", false), "html");
            echo "/show\" class=\"readmore\">Lire la suite</a> |
\t                <a href=\"comment/";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'post'), "id", array(), "any", false), "html");
            echo "\" class=\"comments\">Commentaire";
            echo (((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, 'post'), "comments", array(), "any", false)) > 1)) ? ("s") : (""));
            echo " (";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getContext($context, 'post'), "comments", array(), "any", false)), "html");
            echo ")</a> |
\t                <span class=\"date\">";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'post'), "createdAt", array(), "any", false), "l d M Y"), "html");
            echo "</span>
\t             
\t</p></div>
\t <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'post'), "id", array(), "any", false), "html");
            echo "/edit\">&nbsp;&nbsp;&eacute;diter</a>
\t 
\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 35
        echo "\t";
    }

    public function getTemplateName()
    {
        return "ApplicationBlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
