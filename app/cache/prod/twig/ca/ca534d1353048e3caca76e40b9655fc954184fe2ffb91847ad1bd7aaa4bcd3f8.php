<?php

/* ClassroomBundle:ClassroomAdmin:recommend-tr.html.twig */
class __TwigTemplate_1925bf883191d63aa22cc8a20eccdba95d2e8369c0784627987393ddd4308984 extends Twig_Template
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
        echo "<tr id=\"classroom-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "html", null, true);
        echo "\" data-sort=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "recommendedSeq", array()), "html", null, true);
        echo "\">
  <td>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "recommendedSeq", array()), "html", null, true);
        echo "</td>
  <td>
    <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\"><strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "</strong></a>
  </td>
  <td>
    <span class=\"text-muted text-sm\">";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "createdTime", array()), "Y-n-d H:i"), "html", null, true);
        echo "</span>
  </td>
  <td>
    ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "recommendedTime", array()), "Y-m-d"), "html", null, true);
        echo "
  </td>
  <td>
    <div class=\"btn-group\">
      <a class=\"btn btn-default btn-sm\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_classroom_set_recommend", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "ref" => "recommendList")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("设置序号"), "html", null, true);
        echo "</a>

      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu pull-right\">

        <li><a class=\"cancel-recommend-classroom\" href=\"javascript:\" data-url=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_classroom_cancel_recommend", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "ref" => "recommendList")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消%name%推荐", array("%name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-hand-right\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消推荐"), "html", null, true);
        echo "</a></li>

      </ul>
    </div>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomAdmin:recommend-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 21,  52 => 14,  45 => 10,  39 => 7,  31 => 4,  26 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
