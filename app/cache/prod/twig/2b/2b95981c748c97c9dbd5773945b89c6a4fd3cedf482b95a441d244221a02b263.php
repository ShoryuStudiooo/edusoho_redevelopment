<?php

/* expression.twig */
class __TwigTemplate_4119488fc35ef71cb0b84c6c2a68fdca32dbee1bcffddf250d44a7f8133a78a6 extends Twig_Template
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
        echo twig_escape_filter($this->env, (((isset($context["filter"]) ? $context["filter"] : null) == "normal") && $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "recommended", array())), "html", null, true);
    }

    public function getTemplateName()
    {
        return "expression.twig";
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
