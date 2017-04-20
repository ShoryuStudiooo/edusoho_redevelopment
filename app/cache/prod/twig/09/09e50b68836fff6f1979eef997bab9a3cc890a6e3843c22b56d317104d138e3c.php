<?php

/* OrgBundle:Org/Parts:table-body-td.html.twig */
class __TwigTemplate_f4b7694a5130ab94d65aaac61566fd8db4984be5223faa5d37544d33365a6211 extends Twig_Template
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
            echo "\t<td>
\t    ";
            // line 3
            $context["org"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("Org", array("orgCode" => (isset($context["orgCode"]) ? $context["orgCode"] : null)));
            // line 4
            echo "\t    ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "name", array()), "--")) : ("--")), "html", null, true);
            echo "
\t    <br>
\t    <span class=\"text-muted text-sm\">编码：";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["org"]) ? $context["org"] : null), "code", array()), "html", null, true);
            echo "</span>
\t</td>
";
        }
    }

    public function getTemplateName()
    {
        return "OrgBundle:Org/Parts:table-body-td.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
