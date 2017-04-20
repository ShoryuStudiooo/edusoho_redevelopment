<?php

/* TopxiaAdminBundle:Course:tab.html.twig */
class __TwigTemplate_0a1e93d93a092c4f8978404f2400c51ce888effe43aaa806cc7decf86d41e276 extends Twig_Template
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
        echo "<div class=\"btn-group\">

\t<a href=\" ";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_course", array("filter" => "normal"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["filter"]) ? $context["filter"] : null) == "normal")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("普通课程"), "html", null, true);
        echo "</a>

\t<a href=\" ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_course", array("filter" => "classroom"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["filter"]) ? $context["filter"] : null) == "classroom")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程"), "html", null, true);
        echo "</a>

\t";
        // line 7
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isPluginInstalled("Vip")) {
            // line 8
            echo "\t\t<a href=\" ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_course", array("filter" => "vip"));
            echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
            if (((isset($context["filter"]) ? $context["filter"] : null) == "vip")) {
                echo "btn-primary";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("会员课程"), "html", null, true);
            echo "</a>
\t";
        }
        // line 10
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  48 => 8,  46 => 7,  34 => 5,  23 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
