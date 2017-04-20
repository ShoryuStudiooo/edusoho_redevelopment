<?php

/* expression.twig */
class __TwigTemplate_f2e8fd368cee13aec49210e512fb2f6cc5e69323ab3b7f3c7dea7334ff75a0f9 extends Twig_Template
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
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "normal") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "parentId", array()) == 0)), "html", null, true);
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
