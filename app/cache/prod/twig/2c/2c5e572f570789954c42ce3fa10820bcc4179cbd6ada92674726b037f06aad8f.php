<?php

/* TopxiaAdminBundle:Block/Label:link.html.twig */
class __TwigTemplate_fa2a19f15de101e2a94a9b9567ec32a614b5197facc5f1941c1c5d99446f8a2a extends Twig_Template
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
        echo "<a class=\"title-label js-title-label ellipsis\" style=\"color: #428bca;\" href=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "href", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "href", array()), null)) : (null)), "html", null, true);
        echo "\" target=\"_blank\">";
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->plainTextFilter((($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array()), null)) : (null)), 40);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block/Label:link.html.twig";
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
