<?php

/* ClassroomBundle:ClassroomThread/Part:thread-list-header.html.twig */
class __TwigTemplate_77a286a1a98032f514f4a93a0d58be2ab59c5be817de737864d25dda3f14d101 extends Twig_Template
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
        echo "<div class=\"nav-filter clearfix\">
  
  ";
        // line 3
        if ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "canAccess", array(0 => "thread.create", 1 => array("targetType" => "classroom", "targetId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "method")) {
            // line 4
            echo "    ";
            if ((isset($context["member"]) ? $context["member"] : null)) {
                // line 5
                echo "      ";
                if ((($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "deadline", array()) == 0) || ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "deadline", array()) > twig_date_format_filter($this->env, "now", "U")))) {
                    // line 6
                    echo "        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle
          \" data-toggle=\"dropdown\" aria-expanded=\"false\">";
                    // line 8
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发话题"), "html", null, true);
                    echo " <span class=\"caret\"></span></button>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><a href=\"";
                    // line 10
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_thread_create", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "type" => "discussion")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发话题"), "html", null, true);
                    echo "</a></li>
            <li><a href=\"";
                    // line 11
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_thread_create", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "type" => "question")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提问题"), "html", null, true);
                    echo "</a></li>
            ";
                    // line 12
                    if ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "canAccess", array(0 => "thread.event.create", 1 => array("targetType" => "classroom", "targetId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "method")) {
                        // line 13
                        echo "              <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_thread_create", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "type" => "event")), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("建活动"), "html", null, true);
                        echo "</a></li> 
            ";
                    }
                    // line 15
                    echo "          </ul>
        </div>
      ";
                } else {
                    // line 18
                    echo "        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn btn-default btn-sm disabled\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
                    // line 19
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("当前班级已过有效期"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发话题"), "html", null, true);
                    echo "
          </button>
        </div>
      ";
                }
                // line 23
                echo "    ";
            }
            // line 24
            echo "  ";
        }
        // line 25
        echo "
  <ul class=\"nav nav-pills nav-pills-sm\">
    <li";
        // line 27
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "type", array()) == "all")) {
            echo " class=\"active\"";
        }
        echo "><a data-target=\"#thread-pane\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_threads", twig_array_merge(twig_array_merge(array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array())), (isset($context["filters"]) ? $context["filters"] : null)), array("type" => "all"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全部"), "html", null, true);
        echo "</a></li>
    
    <li";
        // line 29
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "type", array()) == "question")) {
            echo " class=\"active\"";
        }
        echo "><a data-target=\"#thread-pane\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_threads", twig_array_merge(twig_array_merge(array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array())), (isset($context["filters"]) ? $context["filters"] : null)), array("type" => "question"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("问答"), "html", null, true);
        echo "</a></li>

    <li";
        // line 31
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "type", array()) == "nice")) {
            echo " class=\"active\"";
        }
        echo "><a data-target=\"#thread-pane\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_threads", twig_array_merge(twig_array_merge(array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array())), (isset($context["filters"]) ? $context["filters"] : null)), array("type" => "nice"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("精华"), "html", null, true);
        echo "</a></li>

    <li class=\"dropdown\">
      <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        <span>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("排序："), "html", null, true);
        echo "</span>
        ";
        // line 36
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "sort", array()) == "posted")) {
            // line 37
            echo "          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最后回复"), "html", null, true);
            echo "
        ";
        } elseif (($this->getAttribute(        // line 38
(isset($context["filters"]) ? $context["filters"] : null), "sort", array()) == "created")) {
            echo " 
          ";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最新发帖"), "html", null, true);
            echo "
        ";
        }
        // line 41
        echo "        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu hidden-xs\">
        <li class=\"";
        // line 44
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "sort", array()) == "posted")) {
            echo "active";
        }
        echo "\"><a  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_threads", twig_array_merge(twig_array_merge(array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array())), (isset($context["filters"]) ? $context["filters"] : null)), array("sort" => "posted"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最后回复"), "html", null, true);
        echo "</a></li>
        <li class=\"";
        // line 45
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "sort", array()) == "created")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_threads", twig_array_merge(twig_array_merge(array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array())), (isset($context["filters"]) ? $context["filters"] : null)), array("sort" => "created"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最新发帖"), "html", null, true);
        echo "</a></li>
      </ul>
    </li>
  </ul>

</div>

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomThread/Part:thread-list-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 45,  149 => 44,  144 => 41,  139 => 39,  135 => 38,  130 => 37,  128 => 36,  124 => 35,  111 => 31,  100 => 29,  89 => 27,  85 => 25,  82 => 24,  79 => 23,  70 => 19,  67 => 18,  62 => 15,  54 => 13,  52 => 12,  46 => 11,  40 => 10,  35 => 8,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
