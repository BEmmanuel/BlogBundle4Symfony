<?php

/* ApplicationBlogBundle:Post:show.html.twig */
class __TwigTemplate_4c98b5202778e2bf26031fe0629aea3a extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<h1>Post</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Titre</th>                <td>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "title", array(), "any", false), "html");
        echo "</td>        </tr>
        <tr>
            <th>Contenu</th>                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "content", array(), "any", false), "html");
        echo "</td>        </tr>
        <tr>
            <th>Cr&eacute;&eacute; le</th>                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'entity'), "createdAt", array(), "any", false), "Y-m-d H:i:s"), "html");
        echo "</td>        </tr>
        <tr>
            <th>Mis &agrave; jour le</th>                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'entity'), "updatedAt", array(), "any", false), "Y-m-d H:i:s"), "html");
        echo "</td>        </tr>
    </tbody>
</table>
    
        <form action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_delete", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
        echo "\" method=\"post\">
            ";
        // line 19
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'delete_form'));
        echo "
            <button type=\"submit\">Supprimer</button>
        </form>
\t\t<a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_edit", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
        echo "\">
            Editer
        </a><br />
\t\t<a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post"), "html");
        echo "\">
            Retour &agrave; la liste
        </a>
    
        
";
    }

    public function getTemplateName()
    {
        return "ApplicationBlogBundle:Post:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
