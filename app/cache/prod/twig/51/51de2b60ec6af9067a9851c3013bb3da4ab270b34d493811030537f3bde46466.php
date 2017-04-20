<?php

/* TopxiaAdminBundle:LiveCourse:index.html.twig */
class __TwigTemplate_f2cdad09b4d4b8c9a84feb5a165c08a4fccf58a98c9def517b238f6d14262b69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:LiveCourse:index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_live_course_manage";
        // line 5
        $context["script_controller"] = "course/live-lesson-search";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("course.live_course_enabled") == 1)) {
            // line 10
            echo "
  ";
            // line 11
            $this->loadTemplate("TopxiaAdminBundle:LiveCourse:tab.html.twig", "TopxiaAdminBundle:LiveCourse:index.html.twig", 11)->display($context);
            // line 12
            echo "  <br>
  <form id=\"message-search-form\" class=\"form-inline well well-sm mtl\" action=\" ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_live_course", array("status" => (isset($context["status"]) ? $context["status"] : null))), "html", null, true);
            echo "\" method=\"get\" novalidate>
    ";
            // line 14
            $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaAdminBundle:LiveCourse:index.html.twig", 14)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
            // line 15
            echo "    <div class=\"form-group\">
      <select class=\"form-control\" name=\"keywordType\">
        ";
            // line 17
            echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions(array("courseTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程名"), "lessonTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课时名")), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "keywordType"), "method"));
            echo "
      </select>
    </div>
    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关键词"), "html", null, true);
            echo "\" name=\"keyword\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
            echo "\">
    </div>
    <div class=\"form-group\">
    ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("直播开始时间:"), "html", null, true);
            echo "
    <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDateTime\" placeholder=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开始时间"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "startDateTime"), "method"), "html", null, true);
            echo "\">
    <div class=\"form-group\">-</div>
    <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDateTime\" placeholder=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("结束时间"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "endDateTime"), "method"), "html", null, true);
            echo "\">
    </div>
    <button class=\"btn btn-primary\">";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
            echo "</button>
  </form>
  <input type=\"hidden\" id=\"status\" value=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : null), "html", null, true);
            echo "\">
  <table class=\"table table-striped table-hover\" id=\"course-table\">
    <thead>
    <tr>
      <th width=\"45%\">";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课时"), "html", null, true);
            echo "</th>
      ";
            // line 36
            $this->loadTemplate("OrgBundle:Org/Parts:table-thead-tr.html.twig", "TopxiaAdminBundle:LiveCourse:index.html.twig", 36)->display($context);
            // line 37
            echo "      <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("直播开始时间"), "html", null, true);
            echo "</th>
      <th>";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("直播时长(分)"), "html", null, true);
            echo "</th>
      <th>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最大参与人数"), "html", null, true);
            echo "</th>
      ";
            // line 41
            echo "    </tr>
    </thead>
    <tbody>
      ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lessons"]) ? $context["lessons"] : null));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
                // line 45
                echo "        ";
                $context["course"] = (($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["lesson"], "courseId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["lesson"], "courseId", array()), array(), "array"), null)) : (null));
                // line 46
                echo "        ";
                $this->loadTemplate("TopxiaAdminBundle:LiveCourse:tr.html.twig", "TopxiaAdminBundle:LiveCourse:index.html.twig", 46)->display($context);
                // line 47
                echo "      ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 48
                echo "        <tr><td colspan=\"20\"><div class=\"empty\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无直播"), "html", null, true);
                echo "</div></td></tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "    </tbody>
  </table>

  ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
            echo "
";
        } else {
            // line 55
            echo "<div class=\"well\" style=\"text-align:center;\">

";
            // line 57
            if (((isset($context["eduCloudStatus"]) ? $context["eduCloudStatus"] : null) == "closed")) {
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("尚未接入教育云，不能使用直播服务"), "html", null, true);
                echo "<a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_my_cloud_overview");
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(",查看详情"), "html", null, true);
                echo " </a>
";
            }
            // line 60
            if (((isset($context["eduCloudStatus"]) ? $context["eduCloudStatus"] : null) == "open")) {
                // line 61
                echo "  ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("尚未启用云直播服务，不能创建直播课程"), "html", null, true);
                echo "<a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_cloud_edulive");
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(",立即启用"), "html", null, true);
                echo " </a>
";
            }
            // line 63
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:LiveCourse:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 63,  201 => 61,  199 => 60,  190 => 58,  188 => 57,  184 => 55,  179 => 53,  174 => 50,  165 => 48,  152 => 47,  149 => 46,  146 => 45,  128 => 44,  123 => 41,  119 => 39,  115 => 38,  110 => 37,  108 => 36,  104 => 35,  97 => 31,  92 => 29,  85 => 27,  78 => 25,  74 => 24,  66 => 21,  59 => 17,  55 => 15,  53 => 14,  49 => 13,  46 => 12,  44 => 11,  41 => 10,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
