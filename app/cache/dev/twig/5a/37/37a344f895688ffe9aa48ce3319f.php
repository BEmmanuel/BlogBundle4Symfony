<?php

/* appstestBundle:Default:index.html.twig */
class __TwigTemplate_5a3737a344f895688ffe9aa48ce3319f extends Twig_Template
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
        return "appstestBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
