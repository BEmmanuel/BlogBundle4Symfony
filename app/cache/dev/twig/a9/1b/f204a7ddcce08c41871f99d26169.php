<?php

/* ApplicationBlogBundle:Default:index.html.twig */
class __TwigTemplate_a91bf204a7ddcce08c41871f99d26169 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, 'name'), "html");
        echo "!
";
    }

    public function getTemplateName()
    {
        return "ApplicationBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
