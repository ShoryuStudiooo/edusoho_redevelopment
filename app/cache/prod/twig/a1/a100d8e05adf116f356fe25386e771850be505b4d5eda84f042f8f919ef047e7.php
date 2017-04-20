<?php

/* expression.twig */
class __TwigTemplate_5d2f4751c79d036927143373b41f2363b6c606460bb696b66b3ef402726ab7a4 extends Twig_Template
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
        echo twig_escape_filter($this->env,  !$this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "recommended", array()), "html", null, true);
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
