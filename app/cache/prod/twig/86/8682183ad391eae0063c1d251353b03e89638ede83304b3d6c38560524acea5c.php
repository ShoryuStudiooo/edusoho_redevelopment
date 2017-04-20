<?php

/* TopxiaAdminBundle:OpenCourseAnalysis/Referer:summary-tab.html.twig */
class __TwigTemplate_9c69318f9f10a5cad71b79b72bbe6d6cbab42f6d506de2ba298af7a3708eaef2 extends Twig_Template
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
        echo "<div class=\"mbs\">
  <div class= \"btn-group\" >
  \t<a class=\"btn btn-default btn-sm ";
        // line 3
        if (((isset($context["tab"]) ? $context["tab"] : null) == "list")) {
            echo "btn-primary ";
        }
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_opencourse_analysis_referer_summary_list", array("startTime" => $this->getAttribute((isset($context["dateRange"]) ? $context["dateRange"] : null), "startTime", array()), "endTime" => $this->getAttribute((isset($context["dateRange"]) ? $context["dateRange"] : null), "endTime", array()))), "html", null, true);
        echo "\" role=\"button\">明细</a>
  \t<a class=\" btn btn-default btn-sm ";
        // line 4
        if (((isset($context["tab"]) ? $context["tab"] : null) == "summary")) {
            echo "btn-primary ";
        }
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_opencourse_analysis_referer_summary", array("startTime" => $this->getAttribute((isset($context["dateRange"]) ? $context["dateRange"] : null), "startTime", array()), "endTime" => $this->getAttribute((isset($context["dateRange"]) ? $context["dateRange"] : null), "endTime", array()))), "html", null, true);
        echo "\" role=\"button\">汇总</a>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:OpenCourseAnalysis/Referer:summary-tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  23 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
