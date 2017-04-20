<?php

/* TopxiaAdminBundle:LiveCourse:tab.html.twig */
class __TwigTemplate_3e399cf9fe09c30231dfa3db960970178e005d0663e1b67a11adbcccc4e266cd extends Twig_Template
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
<a href=\" ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_live_course", array("status" => "coming"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["status"]) ? $context["status"] : null) == "coming")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("即将开始的"), "html", null, true);
        echo "</a>
<a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_live_course", array("status" => "underway"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["status"]) ? $context["status"] : null) == "underway")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("当前进行中"), "html", null, true);
        echo "</a>
<a href=\" ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_live_course", array("status" => "end"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["status"]) ? $context["status"] : null) == "end")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已结束的"), "html", null, true);
        echo "</a>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:LiveCourse:tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  32 => 3,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
