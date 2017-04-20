<?php

/* OrgBundle:Org/Parts:table-thead-tr.html.twig */
class __TwigTemplate_0bc9c64b15a23af141bc699d361bac8c26dd95388bdf5213041659ae20dc6e70 extends Twig_Template
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
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 2
            echo "\t<th width=\"15%\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("所属组织机构"), "html", null, true);
            echo "</th>
";
        }
    }

    public function getTemplateName()
    {
        return "OrgBundle:Org/Parts:table-thead-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
