<?php

/* expression.twig */
class __TwigTemplate_f1dc0e3a108435aa66f16970bebb64cd69bd71cec75a4fc3a1b839db122ab35b extends Twig_Template
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
        echo twig_escape_filter($this->env, (((isset($context["filter"]) ? $context["filter"] : null) == "normal") &&  !$this->getAttribute((isset($context["course"]) ? $context["course"] : null), "recommended", array())), "html", null, true);
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
