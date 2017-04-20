<?php

/* TopxiaAdminBundle:CourseQuestion:tab.html.twig */
class __TwigTemplate_1b26c6ff45ef148fa26c3c36ab2e1dcddb75b5e44dcd521a4c7a18b9c4648fbd extends Twig_Template
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
<a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_question", array("postStatus" => "unPosted"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : null) == "unPosted")) {
            echo " btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未回复"), "html", null, true);
        echo "</a>

<a href=\" ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_question", array("postStatus" => "all"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : null) == "all")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("所有"), "html", null, true);
        echo "</a>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CourseQuestion:tab.html.twig";
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
