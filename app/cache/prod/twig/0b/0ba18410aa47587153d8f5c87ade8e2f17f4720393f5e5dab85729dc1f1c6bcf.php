<?php

/* TopxiaAdminBundle:System:jobs.html.twig */
class __TwigTemplate_0879bcc0e5697b677169c7ead4bcad12144de56ad3e17c714833479677876d0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:jobs.html.twig", 1);
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
        $context["menu"] = "admin_jobs_manage";
        // line 5
        $context["script_controller"] = "job/list";
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"well well-sm form-inline\">

  <div class=\"form-group\">
    <input type=\"text\" id=\"nextExcutedStartTime\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "nextExcutedStartTime"), "method"), "html", null, true);
        echo "\" name=\"nextExcutedStartTime\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("下一次执行开始时间"), "html", null, true);
        echo "\" style=\"width:160px;\">
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"nextExcutedEndTime\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "nextExcutedEndTime"), "method"), "html", null, true);
        echo "\" name=\"nextExcutedEndTime\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("下一次执行截止时间"), "html", null, true);
        echo "\" style=\"width:160px;\">
  </div>


  <div class=\"form-group\">
    <input type=\"text\" id=\"name\" name=\"name\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "name"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("任务名称"), "html", null, true);
        echo "\" style=\"width:100px;\">
  </div>

  <div class=\"form-group\">
    <select class=\"form-control\" name=\"cycle\">
        ";
        // line 28
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("jobCycle"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cycle"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("--执行周期--"));
        echo "
    </select>
  </div>

  <button class=\"btn btn-primary\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>

  <a class=\"glyphicon glyphicon-question-sign text-muted pull-center pull-right\" id=\"tips\" data-toggle=\"tooltip\" data-placement=\"left\" href=\"javascript:\" title=\"\" data-original-title=\"\"></a>
  <div id=\"tips-html\" style=\"display:none;\">
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("定时任务是系统为了保证系统业务的正常进行自动生成系统级任务,不需要进行任何手动操作"), "html", null, true);
        echo "</p> 
  </div>
</form>

  <table class=\"table table-hover\" id=\"log-table\">
    <tr>
      <th width=\"5%\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编号"), "html", null, true);
        echo "</th>
      <th width=\"20%\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("任务名称"), "html", null, true);
        echo "</th>
      <th width=\"20%\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("任务对象"), "html", null, true);
        echo "</th>
      <th width=\"10%\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("执行周期"), "html", null, true);
        echo "</th>
      <th width=\"20%\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("下一次执行时间"), "html", null, true);
        echo "</th>
      <th width=\"20%\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("创建时间"), "html", null, true);
        echo "</th>
    </tr>
    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 50
            echo "      <tr>
        <td>
          ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
            echo "
        </td>
        <td>
          ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "name", array()), "html", null, true);
            echo "
        </td>
        <td width=\"20%\">
          ";
            // line 58
            if (($this->getAttribute($context["job"], "targetType", array()) == "course")) {
                // line 59
                echo "            ";
                $context["course"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("Course", array("courseId" => $this->getAttribute($context["job"], "targetId", array())));
                // line 60
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程："), "html", null, true);
                echo "《<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\" target='_blank'>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
                echo "</a>》
          ";
            } elseif (($this->getAttribute(            // line 61
$context["job"], "targetType", array()) == "classroom")) {
                // line 62
                echo "            ";
                $context["classroom"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("Classroom", array("classroomId" => $this->getAttribute($context["job"], "targetId", array())));
                // line 63
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级："), "html", null, true);
                echo "《<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                echo "\" target='_blank'>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
                echo "</a>》
          ";
            } elseif (($this->getAttribute(            // line 64
$context["job"], "targetType", array()) == "lesson")) {
                // line 65
                echo "            ";
                $context["lesson"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("CourseLesson", array("lessonId" => $this->getAttribute($context["job"], "targetId", array())));
                // line 66
                echo "            ";
                $context["course"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("Course", array("courseId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "courseId", array())));
                // line 67
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程："), "html", null, true);
                echo "《<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\" target='_blank'>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
                echo "</a>》,";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课时："), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "title", array()), "html", null, true);
                echo "
          ";
            } elseif (($this->getAttribute(            // line 68
$context["job"], "targetType", array()) == "liveOpenLesson")) {
                // line 69
                echo "            ";
                $context["lesson"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("OpenCourseLesson", array("lessonId" => $this->getAttribute($context["job"], "targetId", array())));
                // line 70
                echo "            ";
                $context["course"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("OpenCourse", array("courseId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "courseId", array())));
                // line 71
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("公开课："), "html", null, true);
                echo "《<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_show", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\" target='_blank'>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
                echo "</a>》,";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课时："), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "title", array()), "html", null, true);
                echo "
          ";
            } else {
                // line 72
                echo "--";
            }
            // line 73
            echo "        </td>
        <td>
          ";
            // line 75
            echo $this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("jobCycle", $this->getAttribute($context["job"], "cycle", array()));
            echo "
        </td>
        <td>
          ";
            // line 78
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["job"], "nextExcutedTime", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "
        </td>
        <td>
          ";
            // line 81
            if ($this->getAttribute($context["job"], "createdTime", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["job"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
            } else {
                echo "--";
            }
            // line 82
            echo "        </td>
      </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 85
            echo "      <tr><td class=\"empty\" colspan=\"20\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("无定时任务记录"), "html", null, true);
            echo "</tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "  </table>

  ";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:jobs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 89,  255 => 87,  246 => 85,  239 => 82,  233 => 81,  227 => 78,  221 => 75,  217 => 73,  214 => 72,  201 => 71,  198 => 70,  195 => 69,  193 => 68,  181 => 67,  178 => 66,  175 => 65,  173 => 64,  164 => 63,  161 => 62,  159 => 61,  150 => 60,  147 => 59,  145 => 58,  139 => 55,  133 => 52,  129 => 50,  124 => 49,  119 => 47,  115 => 46,  111 => 45,  107 => 44,  103 => 43,  99 => 42,  90 => 36,  83 => 32,  76 => 28,  66 => 23,  56 => 18,  47 => 14,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
