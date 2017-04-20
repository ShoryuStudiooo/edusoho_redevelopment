<?php

/* TopxiaAdminBundle:Invite:tab-data.html.twig */
class __TwigTemplate_fc686c4ddd01547569951793862a79e9c41cd58d4db4786a0c0edf84724f4c43 extends Twig_Template
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
        echo "<div class=\"btn-group mbm\">
\t<a href=\" ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_invite_coupon", array("filter" => "invited"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["filter"]) ? $context["filter"] : null) == "invited")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册奖励"), "html", null, true);
        echo "</a>

\t<a href=\" ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_invite_coupon", array("filter" => "invite"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["filter"]) ? $context["filter"] : null) == "invite")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邀请奖励"), "html", null, true);
        echo "</a>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Invite:tab-data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
