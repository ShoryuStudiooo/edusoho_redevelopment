<?php

/* TopxiaAdminBundle:Block/Label:imglink.html.twig */
class __TwigTemplate_722ef45049be00b9142aa83d35ffc00be5de96fb1b8e0d360a0bc98c9e99229a extends Twig_Template
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
        echo "<a class=\"glyphicon glyphicon-picture pull-left js-img-preview\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "src", array())), "html", null, true);
        echo "\" target=\"_blank\"></a>
<a class=\"mls title-label js-title-label ellipsis\" style=\"color: #428bca;\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "href", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "alt", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "alt", array()), "")) : ("")), "html", null, true);
        echo "</a>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block/Label:imglink.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
