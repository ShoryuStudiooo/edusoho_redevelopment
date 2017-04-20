<?php

/* TopxiaAdminBundle:CourseQuestion:td-operations.html.twig */
class __TwigTemplate_6e0853fcf82b5d521e0e618a4228a203b2c14921d0bd13212134a57fed87dd64 extends Twig_Template
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
        echo "
";
        // line 2
        if (((isset($context["type"]) ? $context["type"] : null) == "unPosted")) {
            // line 3
            echo "
      <div class=\"btn-group\">
        <a class=\"btn btn-default btn-sm remind-teachers\" title=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提醒教师"), "html", null, true);
            echo "\" 
        data-url=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_question_remind_teachers", array("courseId" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "courseId", array()), "questionId" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()))), "html", null, true);
            echo "\"
          <span class=\"glyphicon glyphicon-bell\"></span>";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提醒教师"), "html", null, true);
            echo "
        </a>
        <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
          <span class=\"caret\"></span>
        </a>
        <ul class=\"dropdown-menu pull-right\">
          <li>
            <a class=\"btn\" data-role=\"item-delete\" data-name=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除问答"), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_thread_delete", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()))), "html", null, true);
            echo "\">
              <span class=\"glyphicon glyphicon-trash\"></span> ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除问答"), "html", null, true);
            echo "</a>
          </li>
        </ul>

      </div>

";
        } elseif ((        // line 21
(isset($context["type"]) ? $context["type"] : null) == "all")) {
            // line 22
            echo "
      <button class=\"btn btn-default btn-sm\" data-role=\"item-delete\" data-name=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除问答"), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_thread_delete", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
            echo "</button>
      
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CourseQuestion:td-operations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 23,  63 => 22,  61 => 21,  52 => 15,  46 => 14,  36 => 7,  32 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
