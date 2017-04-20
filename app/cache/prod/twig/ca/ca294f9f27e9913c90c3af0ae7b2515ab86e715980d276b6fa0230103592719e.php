<?php

/* TopxiaAdminBundle:OpenCourseAnalysis:layout.html.twig */
class __TwigTemplate_efdf549f0cbedcb936cbc4dd40b815585c13097f878bfe249584880f1700d550 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:OpenCourseAnalysis:layout.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'form' => array($this, 'block_form'),
            'form_input' => array($this, 'block_form_input'),
            'analysis_content' => array($this, 'block_analysis_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["nav"] = ((array_key_exists("nav", $context)) ? (_twig_default_filter((isset($context["nav"]) ? $context["nav"] : null), null)) : (null));
        // line 4
        $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->loadScript("open-course-analysis/index");
        // line 5
        $context["menu"] = "admin_opencourse_analysis";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "  <style>
    .form-control[readonly] {
      cursor: pointer;
      background: #fff;
    }
  </style>

  ";
        // line 15
        $this->displayBlock('form', $context, $blocks);
        // line 46
        echo "
  <div class=\"btn-group mbm\" role=\"group\" aria-label=\"...\">
    <a class=\"btn btn-default ";
        // line 48
        if (((isset($context["nav"]) ? $context["nav"] : null) == "referer")) {
            echo "active";
        }
        echo "\"
       href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_opencourse_analysis_referer_summary_list", array("startTime" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "startTime"), "method"), "endTime" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "endTime"), "method"), "date-range" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "date-range"), "method"))), "html", null, true);
        echo "\"
       role=\"button\">来源分析</a>
    <a class=\"btn btn-default ";
        // line 51
        if (((isset($context["nav"]) ? $context["nav"] : null) == "conversion")) {
            echo "active";
        }
        echo "\"
       href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_opencourse_analysis_conversion", array("startTime" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "startTime"), "method"), "endTime" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "endTime"), "method"), "date-range" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "date-range"), "method"))), "html", null, true);
        echo "\"
       role=\"button\">购买转化分析</a>
    <a class=\"btn btn-default ";
        // line 54
        if ((((array_key_exists("nav", $context)) ? (_twig_default_filter((isset($context["nav"]) ? $context["nav"] : null), "")) : ("")) == "watch")) {
            echo "active";
        }
        echo "\"
       href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_opencourse_analysis_referer_watch_statistics", array("startTime" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "startTime"), "method"), "endTime" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "endTime"), "method"), "date-range" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "date-range"), "method"))), "html", null, true);
        echo "\"
       role=\"button\">观看统计</a>
  </div>

  ";
        // line 59
        $this->displayBlock('analysis_content', $context, $blocks);
    }

    // line 15
    public function block_form($context, array $blocks = array())
    {
        // line 16
        echo "    <form id=\"refererlog-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate=\"\">
      <div class=\"form-group \">
        <label for=\"startDate\">起始日期</label>
        <input class=\"form-control datetimepicker-input\" type=\"text\" id=\"startTime\" name=\"startTime\"
               value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dateRange"]) ? $context["dateRange"] : null), "startTime", array()), "html", null, true);
        echo "\" placeholder=\"起始时间\" readonly>
        <label for=\"endDate\">截止日期</label>
        <input class=\"form-control datetimepicker-input\" type=\"text\" id=\"endTime\" name=\"endTime\"
               value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dateRange"]) ? $context["dateRange"] : null), "endTime", array()), "html", null, true);
        echo "\" placeholder=\"结束时间\" readonly>
        <button
            class=\"btn btn-default btn-data-range ";
        // line 25
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "date-range"), "method") == "day")) {
            echo "active ";
        }
        echo "\"
            type=\"button\" id=\"btn-yesterday-range\" data-type=\"day\" data-start=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dateRange"]) ? $context["dateRange"] : null), "yesterdayStart", array()), "html", null, true);
        echo "\"
            data-end=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dateRange"]) ? $context["dateRange"] : null), "yesterdayEnd", array()), "html", null, true);
        echo "\">昨天
        </button>
        <button
            class=\"btn btn-default btn-data-range ";
        // line 30
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "date-range"), "method") == "week")) {
            echo "active ";
        }
        echo "\"
            type=\"button\" id=\"btn-lastWeek-range\" data-type=\"week\" data-start=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dateRange"]) ? $context["dateRange"] : null), "lastWeekStart", array()), "html", null, true);
        echo "\"
            data-end=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dateRange"]) ? $context["dateRange"] : null), "lastWeekEnd", array()), "html", null, true);
        echo "\">最近七天
        </button>
        <button
            class=\"btn btn-default btn-data-range ";
        // line 35
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "date-range"), "method") == "month")) {
            echo "active ";
        }
        echo "\"
            type=\"button\" id=\"btn-lastMonth-range\" data-type=\"month\" data-start=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dateRange"]) ? $context["dateRange"] : null), "lastMonthStart", array()), "html", null, true);
        echo "\"
            data-end=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dateRange"]) ? $context["dateRange"] : null), "lastMonthEnd", array()), "html", null, true);
        echo "\">最近30天
        </button>
        <input name=\"date-range\" type=\"hidden\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "date-range", 1 => "week"), "method"), "html", null, true);
        echo "\">
        ";
        // line 40
        $this->displayBlock('form_input', $context, $blocks);
        // line 42
        echo "        <button class=\"btn btn-primary\" type=\"submit\">搜索</button>
      </div>
    </form>
  ";
    }

    // line 40
    public function block_form_input($context, array $blocks = array())
    {
        // line 41
        echo "        ";
    }

    // line 59
    public function block_analysis_content($context, array $blocks = array())
    {
        // line 60
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:OpenCourseAnalysis:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 60,  182 => 59,  178 => 41,  175 => 40,  168 => 42,  166 => 40,  162 => 39,  157 => 37,  153 => 36,  147 => 35,  141 => 32,  137 => 31,  131 => 30,  125 => 27,  121 => 26,  115 => 25,  110 => 23,  104 => 20,  98 => 16,  95 => 15,  91 => 59,  84 => 55,  78 => 54,  73 => 52,  67 => 51,  62 => 49,  56 => 48,  52 => 46,  50 => 15,  41 => 8,  38 => 7,  34 => 1,  32 => 5,  30 => 4,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
