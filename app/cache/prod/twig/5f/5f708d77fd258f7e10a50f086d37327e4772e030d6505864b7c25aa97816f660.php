<?php

/* expression.twig */
class __TwigTemplate_c1fea129e297981a07cacac60e2ecbc47fb789ff8b280609541813723b65664f extends Twig_Template
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
        echo twig_escape_filter($this->env, ( !($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.thirdCopyright", false) == 1) &&  !$this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isWithoutNetwork()), "html", null, true);
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
