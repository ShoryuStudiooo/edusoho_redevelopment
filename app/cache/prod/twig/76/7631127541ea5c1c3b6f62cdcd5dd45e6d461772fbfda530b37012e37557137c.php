<?php

/* TopxiaAdminBundle:Course:index.html.twig */
class __TwigTemplate_7d9f9bf09d035e2c300b5c87ac2140bca1e53b2583e1392f97b765f9c96749c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Course:index.html.twig", 1);
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
        $context["menu"] = "admin_course_manage";
        // line 5
        $context["script_controller"] = "course/manage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        $this->loadTemplate("TopxiaAdminBundle:Course:tab.html.twig", "TopxiaAdminBundle:Course:index.html.twig", 8)->display($context);
        // line 9
        echo "  <br>
  <div class=\"well well-sm mtl\">
    <form id=\"message-search-form\" class=\"form-inline\" action=\"\" method=\"get\" novalidate>
      ";
        // line 12
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaAdminBundle:Course:index.html.twig", 12)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 13
        echo "
      <div class=\"form-group\">
        <select style=\"max-width:150px;\" class=\"form-control\" name=\"categoryId\">
          ";
        // line 16
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getCategoryChoices("course"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "categoryId"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程分类"));
        echo "
        </select>
      </div>
      <div class=\"form-group\">
        <select class=\"form-control\" name=\"status\">
          ";
        // line 21
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("courseStatus"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "status"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程状态"));
        echo "
        </select>
      </div>
      ";
        // line 24
        if (((isset($context["filter"]) ? $context["filter"] : null) == "normal")) {
            // line 25
            echo "        <div class=\"form-group\">
          <select style=\"max-width:150px;\" class=\"form-control\" name=\"chargeStatus\">
            ";
            // line 27
            echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions(array("free" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费课程"), "charge" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收费课程")), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "chargeStatus"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收费状态"));
            echo "
        </select>
        </div>
      ";
        }
        // line 31
        echo "
      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("标题"), "html", null, true);
        echo "\" name=\"title\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\">
      </div>
      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("创建者"), "html", null, true);
        echo "\" name=\"creator\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "creator"), "method"), "html", null, true);
        echo "\">
      </div>
      <button class=\"btn btn-primary\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>

      ";
        // line 40
        $this->loadTemplate("TopxiaAdminBundle:Widget:tooltip-widget.html.twig", "TopxiaAdminBundle:Course:index.html.twig", 40)->display(array_merge($context, array("icon" => "glyphicon-question-sign", "content" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程说明Tooltip"), "placement" => "left")));
        // line 41
        echo "    </form>
  </div>
  
  <p class=\"text-muted\">
    <span class=\"mrl\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程："), "html", null, true);
        echo "<strong class=\"inflow-num\">";
        echo twig_escape_filter($this->env, (isset($context["searchCoursesNum"]) ? $context["searchCoursesNum"] : null), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个"), "html", null, true);
        echo "</span>
    <span class=\"mrl\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已发布："), "html", null, true);
        echo "<strong class=\"inflow-num\">";
        echo twig_escape_filter($this->env, (isset($context["publishedCoursesNum"]) ? $context["publishedCoursesNum"] : null), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个"), "html", null, true);
        echo "</span>
    <span class=\"mrl\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已关闭："), "html", null, true);
        echo "<strong class=\"outflow-num\">";
        echo twig_escape_filter($this->env, (isset($context["closedCoursesNum"]) ? $context["closedCoursesNum"] : null), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个"), "html", null, true);
        echo "</span>
    <span class=\"mrl\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未发布："), "html", null, true);
        echo "<strong class=\"outflow-num\">";
        echo twig_escape_filter($this->env, (isset($context["unPublishedCoursesNum"]) ? $context["unPublishedCoursesNum"] : null), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个"), "html", null, true);
        echo "</span>
  </p>

  <table class=\"table table-striped table-hover\" id=\"course-table\" style=\"word-break:break-all;\">
    <thead>
    <tr>
      <th>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编号"), "html", null, true);
        echo "</th>
      <th width=\"25%\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("名称"), "html", null, true);
        echo "</th>
      <th>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("价格"), "html", null, true);
        echo "</th>
      ";
        // line 57
        $this->loadTemplate("OrgBundle:Org/Parts:table-thead-tr.html.twig", "TopxiaAdminBundle:Course:index.html.twig", 57)->display($context);
        // line 58
        echo "      <th width=\"\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("连载状态"), "html", null, true);
        echo "</th>
      ";
        // line 59
        if (((isset($context["filter"]) ? $context["filter"] : null) == "classroom")) {
            // line 60
            echo "        <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("所在"), "html", null, true);
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")), "html", null, true);
            echo "</th>
      ";
        } else {
            // line 62
            echo "        <th>";
            if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"), "html", null, true);
            }
            // line 63
            echo "          数
        </th>

      ";
        }
        // line 67
        echo "      ";
        if (((isset($context["filter"]) ? $context["filter"] : null) == "course")) {
            // line 68
            echo "        <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收入(元)"), "html", null, true);
            echo "</th>
      ";
        } elseif ((        // line 69
(isset($context["filter"]) ? $context["filter"] : null) == "vip")) {
            // line 70
            echo "        <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("会员等级"), "html", null, true);
            echo "</th>
      ";
        }
        // line 72
        echo "      <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("状态"), "html", null, true);
        echo "</th>
      <th>";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("创建者"), "html", null, true);
        echo "</th>
      <th>";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 79
            echo "      ";
            $context["user"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["course"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["course"], "userId", array()), array(), "array"), null)) : (null));
            // line 80
            echo "      ";
            $context["category"] = (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["course"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["course"], "categoryId", array()), array(), "array"), null)) : (null));
            // line 81
            echo "      ";
            $this->loadTemplate("TopxiaAdminBundle:Course:tr.html.twig", "TopxiaAdminBundle:Course:index.html.twig", 81)->display($context);
            // line 82
            echo "    ";
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
            // line 83
            echo "      <tr>
        <td colspan=\"20\">
          <div class=\"empty\">";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无课程记录"), "html", null, true);
            echo "</div>
        </td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "    </tbody>
  </table>
  ";
        // line 91
        $this->loadTemplate("OrgBundle:Org:batch-update-org-btn.html.twig", "TopxiaAdminBundle:Course:index.html.twig", 91)->display(array_merge($context, array("module" => "course", "formId" => "course-table")));
        // line 92
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 92,  278 => 91,  274 => 89,  264 => 85,  260 => 83,  247 => 82,  244 => 81,  241 => 80,  238 => 79,  220 => 78,  213 => 74,  209 => 73,  204 => 72,  198 => 70,  196 => 69,  191 => 68,  188 => 67,  182 => 63,  175 => 62,  168 => 60,  166 => 59,  161 => 58,  159 => 57,  155 => 56,  151 => 55,  147 => 54,  134 => 48,  126 => 47,  118 => 46,  110 => 45,  104 => 41,  102 => 40,  97 => 38,  90 => 36,  82 => 33,  78 => 31,  71 => 27,  67 => 25,  65 => 24,  59 => 21,  51 => 16,  46 => 13,  44 => 12,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
