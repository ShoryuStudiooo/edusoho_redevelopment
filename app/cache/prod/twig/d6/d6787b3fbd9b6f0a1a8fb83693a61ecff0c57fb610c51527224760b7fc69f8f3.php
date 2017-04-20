<?php

/* TopxiaAdminBundle:Block/Label:text.html.twig */
class __TwigTemplate_e26946efd1eff09b70f49e4937e0ebbbf7889a6e39a9c92a3289460fdb8d4864 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<span class=\"title-label js-title-label ellipsis\" data-no-link=\"true\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array()), null)) : (null)), "html", null, true);
        echo "</span>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block/Label:text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
