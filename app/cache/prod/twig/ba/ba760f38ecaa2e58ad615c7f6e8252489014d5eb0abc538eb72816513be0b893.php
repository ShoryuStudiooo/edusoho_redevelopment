<?php

/* expression.twig */
class __TwigTemplate_1714c21c12824ea05c33ee174662136364067a482b5a579e41d234efddafbd49 extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_in_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()), array(0 => "closed", 1 => "draft", 2 => "published")), "html", null, true);
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
