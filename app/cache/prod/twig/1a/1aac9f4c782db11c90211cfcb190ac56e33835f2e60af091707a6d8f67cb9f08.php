<?php

/* TopxiaAdminBundle:Teacher:teacher-promote-tr.html.twig */
class __TwigTemplate_5ac5674a8cabd360533304a4e275eaaa1a0c284c3ef0898a1147f099693e14a7 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Teacher:teacher-promote-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"teacher-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo "\" data-sort=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "promotedSeq", array()), "html", null, true);
        echo "\">
  <td>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "promotedSeq", array()), "html", null, true);
        echo "</td>
  <td>
    ";
        // line 5
        echo $context["admin_macro"]->getuser_link((isset($context["user"]) ? $context["user"] : null));
        echo "
  </td>
  ";
        // line 7
        $this->loadTemplate("OrgBundle:Org/Parts:table-body-td.html.twig", "TopxiaAdminBundle:Teacher:teacher-promote-tr.html.twig", 7)->display(array_merge($context, array("orgCode" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "orgCode", array()))));
        // line 8
        echo "  <td>
    ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "promotedTime", array()), "Y-m-d"), "html", null, true);
        echo "
  </td>
  <td>
    <div class=\"btn-group\">
      <a class=\"btn btn-default btn-sm\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_teacher_promote", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "type" => "promoteList")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("设置序号"), "html", null, true);
        echo "</a>

      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu pull-right\">

        <li><a class=\"cancel-promote-teacher\" href=\"javascript:\" data-url=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_teacher_promote_cancel", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消推荐教师"), "html", null, true);
        echo "</a></li>
      </ul>
    </div>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Teacher:teacher-promote-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 20,  50 => 13,  43 => 9,  40 => 8,  38 => 7,  33 => 5,  28 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
