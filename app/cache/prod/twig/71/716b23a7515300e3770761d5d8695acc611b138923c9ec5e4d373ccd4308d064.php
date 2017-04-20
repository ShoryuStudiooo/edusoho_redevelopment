<?php

/* TopxiaAdminBundle:OpenCourseAnalysis/Referer:list.html.twig */
class __TwigTemplate_3f5139d6d21d6ccee97e24b3d386d8b215a4860319286e105dca9bd5d6c27353 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle:OpenCourseAnalysis:layout.html.twig", "TopxiaAdminBundle:OpenCourseAnalysis/Referer:list.html.twig", 1);
        $this->blocks = array(
            'analysis_content' => array($this, 'block_analysis_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:OpenCourseAnalysis:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["nav"] = "referer";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_analysis_content($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        $context["tab"] = "list";
        // line 5
        echo "  ";
        $this->loadTemplate("TopxiaAdminBundle:OpenCourseAnalysis/Referer:summary-tab.html.twig", "TopxiaAdminBundle:OpenCourseAnalysis/Referer:list.html.twig", 5)->display(array_merge($context, array("tab" => (isset($context["tab"]) ? $context["tab"] : null))));
        // line 6
        echo "  <table class=\"table table-hover\" style=\"word-break:break-all;\">
    <thead>
      <tr>
        <th width=\"60%\">公开课名称</th>
        <th width=\"20%\">访问数</th>
        <th width=\"20%\">详情</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["refererlogDatas"]) ? $context["refererlogDatas"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["refererLog"]) {
            // line 16
            echo "        ";
            $context["orderCount"] = (($this->getAttribute($context["refererLog"], "orderCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["refererLog"], "orderCount", array()), 0)) : (0));
            // line 17
            echo "        ";
            $context["hitNum"] = (($this->getAttribute($context["refererLog"], "hitNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["refererLog"], "hitNum", array()), 0)) : (0));
            // line 18
            echo "        ";
            if ((null === $this->getAttribute($context["refererLog"], "orderCount", array()))) {
                // line 19
                echo "          ";
                $context["orderCount"] = 0;
                // line 20
                echo "        ";
            }
            // line 21
            echo "        ";
            if ((null === $this->getAttribute($context["refererLog"], "hitNum", array()))) {
                // line 22
                echo "          ";
                $context["hitNum"] = 0;
                // line 23
                echo "        ";
            }
            // line 24
            echo "
        ";
            // line 25
            $context["openCourse"] = (($this->getAttribute((isset($context["openCourses"]) ? $context["openCourses"] : null), $this->getAttribute($context["refererLog"], "targetId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["openCourses"]) ? $context["openCourses"] : null), $this->getAttribute($context["refererLog"], "targetId", array()), array(), "array"), null)) : (null));
            // line 26
            echo "        <tr ";
            if ( !(isset($context["openCourse"]) ? $context["openCourse"] : null)) {
                echo "style=\"text-decoration:line-through\"";
            }
            echo ">
          <th scope=\"row\">
            ";
            // line 28
            if ((isset($context["openCourse"]) ? $context["openCourse"] : null)) {
                // line 29
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_show", array("courseId" => $this->getAttribute((isset($context["openCourse"]) ? $context["openCourse"] : null), "id", array()))), "html", null, true);
                echo "\" target=\"_blank\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["openCourse"]) ? $context["openCourse"] : null), "title", array()), "html", null, true);
                echo "</strong></a>
              ";
                // line 30
                if ((($this->getAttribute((isset($context["openCourse"]) ? $context["openCourse"] : null), "type", array()) == "live") || ($this->getAttribute((isset($context["openCourse"]) ? $context["openCourse"] : null), "type", array()) == "liveOpen"))) {
                    // line 31
                    echo "                <span class=\"label label-success live-label mls\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("直播"), "html", null, true);
                    echo "</span>
              ";
                }
                // line 33
                echo "            ";
            } else {
                // line 34
                echo "              该课程已删除
            ";
            }
            // line 36
            echo "          </th>
          <th>
            ";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["hitNum"]) ? $context["hitNum"] : null), "html", null, true);
            echo " 次
          </th>
          <th>
            ";
            // line 41
            if ((isset($context["openCourse"]) ? $context["openCourse"] : null)) {
                // line 42
                echo "              <a href=\"javascript:;\" class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\"
               data-url=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_opencourse_analysis_referer_detail", array("id" => $this->getAttribute($context["refererLog"], "targetId", array()), "startTime" => $this->getAttribute((isset($context["dateRange"]) ? $context["dateRange"] : null), "startTime", array()), "endTime" => $this->getAttribute((isset($context["dateRange"]) ? $context["dateRange"] : null), "endTime", array()))), "html", null, true);
                echo "\">详情</a>
            ";
            }
            // line 45
            echo "          </th>
        </tr>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "        <tr>
          <td colspan=\"20\">
            <div class=\"empty\">暂无记录</div>
          </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['refererLog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "      </tbody>
    </table>

    <span>注：列表结果中，不会包含没有访问过的课程</span>
    ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:OpenCourseAnalysis/Referer:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 58,  155 => 54,  144 => 48,  137 => 45,  132 => 43,  129 => 42,  127 => 41,  121 => 38,  117 => 36,  113 => 34,  110 => 33,  104 => 31,  102 => 30,  95 => 29,  93 => 28,  85 => 26,  83 => 25,  80 => 24,  77 => 23,  74 => 22,  71 => 21,  68 => 20,  65 => 19,  62 => 18,  59 => 17,  56 => 16,  51 => 15,  40 => 6,  37 => 5,  34 => 4,  31 => 3,  27 => 1,  25 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
