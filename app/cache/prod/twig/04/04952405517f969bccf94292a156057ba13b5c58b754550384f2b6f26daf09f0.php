<?php

/* TopxiaAdminBundle:Group:thread-table-tr.html.twig */
class __TwigTemplate_4816a17ec2c4c04bf43ac33ad8bc45465f258558bebab64ebe8fc9f12918a31c extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Group:thread-table-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"thread-table-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()), "html", null, true);
        echo "\">
  <td>
    <input name=\"ID[]\" data-role=\"batch-item\" type=\"checkbox\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()), "html", null, true);
        echo "\"/> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()), "html", null, true);
        echo "
  </td>

  <td style=\"word-break:break-all;\">
    <strong ><a target=\"_blank\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "groupId", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->plainTextFilter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), 50);
        echo "</a></strong>
    ";
        // line 9
        if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "status", array()) == "close")) {
            // line 10
            echo "      <label class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭"), "html", null, true);
            echo "</label>
    ";
        }
        // line 12
        echo "  </td>

  <td nowrap=\"nowrap\">
    ";
        // line 15
        if ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "isElite", array())) {
            // line 16
            echo "      <a href=\"javascript:;\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_group_thread_cancel_elite", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"promoted-label\">
        <span class=\"label label-success\">";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("精"), "html", null, true);
            echo "</span>
      </a>
    ";
        } else {
            // line 20
            echo "      <a href=\"javascript:;\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_group_thread_set_elite", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"promoted-label\">
        <span class=\"label label-default\">";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("精"), "html", null, true);
            echo "</span>
      </a>
    ";
        }
        // line 24
        echo "  
    ";
        // line 25
        if ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "isStick", array())) {
            // line 26
            echo "      <a href=\"javascript:;\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_group_thread_cancel_stick", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"promoted-label\">
        <span class=\"label label-success\">";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("顶"), "html", null, true);
            echo "</span>
      </a>
    ";
        } else {
            // line 30
            echo "      <a href=\"javascript:;\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_group_thread_set_stick", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"promoted-label\">
        <span class=\"label label-default\">";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("顶"), "html", null, true);
            echo "</span>
    </a>
    ";
        }
        // line 34
        echo "  </td>

  <td><a target=\"_blank\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["owners"]) ? $context["owners"] : null), $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "userId", array()), array(), "array"), "id", array()))), "html", null, true);
        echo "\">
    ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["owners"]) ? $context["owners"] : null), $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "userId", array()), array(), "array"), "nickname", array()), "html", null, true);
        echo "</a>
  </td>

  <td>
    <a target=\"_blank\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("group_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["group"]) ? $context["group"] : null), $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "groupId", array()), array(), "array"), "id", array()))), "html", null, true);
        echo "\">
    ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["group"]) ? $context["group"] : null), $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "groupId", array()), array(), "array"), "title", array()), "html", null, true);
        echo "</a>
  </td>

  <td>
    ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "postNum", array()), "html", null, true);
        echo "
  </td>

  <td>
    ";
        // line 50
        if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "status", array()) == "open")) {
            // line 51
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), "html", null, true);
            echo "
    ";
        } else {
            // line 53
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭"), "html", null, true);
            echo "
    ";
        }
        // line 55
        echo "  </td>

  <td>
    <div class=\"btn-group\">
      <a type=\"button\" class=\"btn btn-default btn-sm\" target=\"_blank\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "groupId", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
        echo "\" ";
        if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "status", array()) == "close")) {
            echo "disabled=\"disabled\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查看"), "html", null, true);
        echo "</a>
      <button type=\"button\" class=\"btn btn-default dropdown-toggle btn-sm \" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
        <span class=\"sr-only\">Toggle Dropdown</span>
      </button>
      <ul class=\"dropdown-menu\" role=\"menu\">
        ";
        // line 65
        if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "status", array()) == "open")) {
            // line 66
            echo "          <li><a href=\"javascript:\" class=\"close-thread\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭话题"), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), "html", null, true);
            echo ")\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_group_thread_close", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-off\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭话题"), "html", null, true);
            echo "</a></li>
        ";
        } else {
            // line 68
            echo "          <li><a href=\"javascript:\" class=\"open-thread\" title=\"开启话题(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), "html", null, true);
            echo ")\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_group_thread_open", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\">
            <span class=\"glyphicon glyphicon-ok\"></span> ";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启话题"), "html", null, true);
            echo "</a>
          </li>
          <li><a href=\"javascript:\" class=\"delete-thread\" title=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("永久删除话题"), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), "html", null, true);
            echo ")\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_group_thread_delete", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\">
            <span class=\"glyphicon glyphicon-trash\"></span> ";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("永久删除"), "html", null, true);
            echo "</a>
          </li>
        ";
        }
        // line 75
        echo "      </ul>
    </div>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Group:thread-table-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 75,  208 => 72,  200 => 71,  195 => 69,  188 => 68,  176 => 66,  174 => 65,  159 => 59,  153 => 55,  147 => 53,  141 => 51,  139 => 50,  132 => 46,  125 => 42,  121 => 41,  114 => 37,  110 => 36,  106 => 34,  100 => 31,  95 => 30,  89 => 27,  84 => 26,  82 => 25,  79 => 24,  73 => 21,  68 => 20,  62 => 17,  57 => 16,  55 => 15,  50 => 12,  44 => 10,  42 => 9,  36 => 8,  27 => 4,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
