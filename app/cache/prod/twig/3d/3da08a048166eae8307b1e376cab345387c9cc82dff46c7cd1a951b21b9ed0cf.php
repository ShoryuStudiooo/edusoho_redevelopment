<?php

/* TopxiaAdminBundle:Group:table-tr.html.twig */
class __TwigTemplate_4e6f261a51e448dde41c8f8f89307de8616a4e862061450aeb5c257e803b14e9 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Group:table-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"group-table-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array()), "html", null, true);
        echo "\">
    <td>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array()), "html", null, true);
        echo "</td>

    <td>
    <strong>  
      <a target=\"_blank\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("group_show", array("id" => $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "title", array()), "html", null, true);
        echo "</a>
    </strong>
    ";
        // line 9
        if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "status", array()) == "close")) {
            // line 10
            echo "          <label class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭"), "html", null, true);
            echo "</label>
    ";
        }
        // line 12
        echo "    </td>

    <td>
    <a target=\"_blank\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["owners"]) ? $context["owners"] : null), $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "ownerId", array()), array(), "array"), "id", array()))), "html", null, true);
        echo "\">
   ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["owners"]) ? $context["owners"] : null), $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "ownerId", array()), array(), "array"), "nickname", array()), "html", null, true);
        echo "</a>
    </td>

    <td>
    ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "memberNum", array()), "html", null, true);
        echo "
    </td>

    <td>
    ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "threadNum", array()), "html", null, true);
        echo "
    </td>

    <td>
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "postNum", array()), "html", null, true);
        echo "
    </td>

    <td>
    ";
        // line 32
        if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "status", array()) == "open")) {
            // line 33
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), "html", null, true);
            echo "
    ";
        } else {
            // line 35
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭"), "html", null, true);
            echo "
    ";
        }
        // line 37
        echo "    </td>

    <td>

  <div class=\"btn-group\">

    <button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
      ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑"), "html", null, true);
        echo "
      <span class=\"caret\"></span>
    </button>

    <ul class=\"dropdown-menu\">
       <li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("group_show", array("id" => $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\"><span class=\"glyphicon glyphicon-eye-open\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查看小组"), "html", null, true);
        echo "</a></li>

       ";
        // line 51
        if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "status", array()) == "open")) {
            // line 52
            echo "       <li><a href=\"javascript:\" class=\"close-group\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭小组(%groupTitle%)", array("%groupTitle%" => $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "title", array()))), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_group_close", array("id" => $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-off\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭小组"), "html", null, true);
            echo "</a></li>

       ";
        } else {
            // line 55
            echo "       <li><a href=\"javascript:\" class=\"open-group\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启小组(%groupTitle%)", array("%groupTitle%" => $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "title", array()))), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_group_open", array("id" => $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-ok\"></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启小组"), "html", null, true);
            echo "</a></li>

       ";
        }
        // line 58
        echo "
       <li  ><a href=\"javascript:\" class=\"transfer-group\" data-url=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_group_transfer", array("groupId" => $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array()))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-refresh\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("转移小组"), "html", null, true);
        echo "</a></li>
       
    </ul>
  </div>
 </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Group:table-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 59,  147 => 58,  136 => 55,  125 => 52,  123 => 51,  116 => 49,  108 => 44,  99 => 37,  93 => 35,  87 => 33,  85 => 32,  78 => 28,  71 => 24,  64 => 20,  57 => 16,  53 => 15,  48 => 12,  42 => 10,  40 => 9,  33 => 7,  26 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
