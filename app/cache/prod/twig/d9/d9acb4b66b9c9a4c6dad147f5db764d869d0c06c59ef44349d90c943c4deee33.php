<?php

/* OrgBundle:Org/Parts:table-body-checkbox.html.twig */
class __TwigTemplate_f3873f3595073fa134339c521d9bb7cb7030c017061a16e17849a24cca2748b5 extends Twig_Template
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
            echo "\t <td><input type=\"checkbox\"  data-role=\"batch-item\"></td>
";
        }
    }

    public function getTemplateName()
    {
        return "OrgBundle:Org/Parts:table-body-checkbox.html.twig";
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
