<?php

/* ApplicationBlogBundle:Post:edit.html.twig */
class __TwigTemplate_068d0cfd821c09565bf26063005098bd extends Twig_Template
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
        echo "<h1>Post edit</h1>

<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_update", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'edit_form'));
        echo ">
    ";
        // line 6
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'edit_form'));
        echo "
    <p>
        <button type=\"submit\">Edit</button>
    </p>
</form>
<form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_delete", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
        echo "\" method=\"post\">
    ";
        // line 12
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'delete_form'));
        echo "
    <button type=\"submit\">Delete</button>
</form>
\t\t<a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post"), "html");
        echo "\">
           &nbsp;&nbsp; Retour &agrave; la liste
        </a>
";
    }

    public function getTemplateName()
    {
        return "ApplicationBlogBundle:Post:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
