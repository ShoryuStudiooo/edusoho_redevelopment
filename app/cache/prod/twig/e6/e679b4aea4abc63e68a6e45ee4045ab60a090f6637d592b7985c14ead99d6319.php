<?php

/* TopxiaAdminBundle:System/Log:logs.html.twig */
class __TwigTemplate_5715dc000084c20d371f0b59997d13acda6aa2db756d17deb7a72426109a8f06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System/Log:logs.html.twig", 2);
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
        // line 1
        $context["dict_macro"] = $this->loadTemplate("TopxiaWebBundle:Common:data-dict-macro.html.twig", "TopxiaAdminBundle:System/Log:logs.html.twig", 1);
        // line 4
        $context["menu"] = "admin_logs_query";
        // line 6
        $context["script_controller"] = "log/list";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"well well-sm form-inline\">

  <div class=\"form-group\">
    <select class=\"form-control\" name=\"level\">
        ";
        // line 16
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("logLevel"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "level"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("--所有等级--"));
        echo "
    </select>
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"startDateTime\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "startDateTime"), "method"), "html", null, true);
        echo "\" name=\"startDateTime\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("起始时间"), "html", null, true);
        echo "\" style=\"width:150px;\">
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"endDateTime\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "endDateTime"), "method"), "html", null, true);
        echo "\" name=\"endDateTime\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("结束时间"), "html", null, true);
        echo "\" style=\"width:150px;\">
  </div>

  <div class=\"form-group\">
    <select class=\"form-control\" name=\"module\" id=\"log-module\">
        <option value=\"0\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("--所有模块--"), "html", null, true);
        echo "</option>
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moduleDicts"]) ? $context["moduleDicts"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 32
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"  ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "module"), "method") == $context["key"])) {
                echo "selected=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </select>
  </div>

  <div class=\"form-group\">
    <select class=\"form-control\" name=\"action\" id=\"log-action\" data-url=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_logs_action_dicts");
        echo "\">
       ";
        // line 39
        if (((array_key_exists("actions", $context)) ? (_twig_default_filter((isset($context["actions"]) ? $context["actions"] : null), null)) : (null))) {
            // line 40
            echo "          <option value=\"0\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("--所有操作--"), "html", null, true);
            echo "</option>
          ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) ? $context["actions"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 42
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "action"), "method") == $context["key"])) {
                    echo "selected=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</option>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        ";
        } else {
            // line 45
            echo "          <option value=\"0\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("--所有操作--"), "html", null, true);
            echo "</option>
      ";
        }
        // line 47
        echo "    </select>
  ";
        // line 49
        echo "  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"nickname\" name=\"nickname\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "nickname"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户名"), "html", null, true);
        echo "\" style=\"width:120px;\">
  </div>

  <button class=\"btn btn-primary\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>

</form>

  <table class=\"table table-hover\" id=\"log-table\">
    <tr>
      <th width=\"15%\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户"), "html", null, true);
        echo "</th>
      <th width=\"55%\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
      <th width=\"10%\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("日志等级"), "html", null, true);
        echo "</th>
      <th width=\"20%\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("时间/IP"), "html", null, true);
        echo "</th>
    </tr>   
    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 67
            echo "      ";
            $context["user"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["log"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["log"], "userId", array()), array(), "array"), null)) : (null));
            // line 68
            echo "      <tr>
        <td>
          ";
            // line 70
            if ((isset($context["user"]) ? $context["user"] : null)) {
                // line 71
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => (isset($context["user"]) ? $context["user"] : null)), "method"), "html", null, true);
                echo "
          ";
            } else {
                // line 73
                echo "            --
          ";
            }
            // line 75
            echo "        <td>
          <div style=\"word-break: break-all;word-wrap: break-word;\">
            ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "message", array()), "html", null, true);
            echo "
            ";
            // line 78
            if ($this->getAttribute($context["log"], "data", array())) {
                // line 79
                echo "              <a href=\"javascript:;\" class=\"text-sm text-warning show-data\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查看数据"), "html", null, true);
                echo "</a>
              <a href=\"javascript:;\" class=\"text-sm text-warning hide-data\" style=\"display:none;\">";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("隐藏数据"), "html", null, true);
                echo "</a>
              <div class=\"data\" style=\"display:none;\">";
                // line 81
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($context["log"], "data", array())), "html", null, true);
                echo "</div>
            ";
            }
            // line 83
            echo "          </div>
          <span class=\"text-muted text-sm\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "module", array()), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "action", array()), "html", null, true);
            echo "</span>
        </td>
        <td>";
            // line 86
            echo $context["dict_macro"]->getlogLevel($this->getAttribute($context["log"], "level", array()));
            echo "</td>
        <td>
          <span class=\"\">";
            // line 88
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</span>
          <br />
          <span class=\"text-muted text-sm\">
          <a  class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "ip", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "ip", array()), "html", null, true);
            echo "</a>
          ";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getConvertIP($this->getAttribute($context["log"], "ip", array())), "html", null, true);
            echo "
          </span>
        </td>
      </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 97
            echo "      <tr><td class=\"empty\" colspan=\"20\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("无日志记录"), "html", null, true);
            echo "</tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "  </table>

  ";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System/Log:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 101,  285 => 99,  276 => 97,  266 => 92,  260 => 91,  254 => 88,  249 => 86,  242 => 84,  239 => 83,  234 => 81,  230 => 80,  225 => 79,  223 => 78,  219 => 77,  215 => 75,  211 => 73,  205 => 71,  203 => 70,  199 => 68,  196 => 67,  191 => 66,  186 => 64,  182 => 63,  178 => 62,  174 => 61,  165 => 55,  157 => 52,  152 => 49,  149 => 47,  143 => 45,  140 => 44,  123 => 42,  119 => 41,  114 => 40,  112 => 39,  108 => 38,  102 => 34,  85 => 32,  81 => 31,  77 => 30,  67 => 25,  58 => 21,  50 => 16,  41 => 10,  38 => 9,  35 => 8,  31 => 2,  29 => 6,  27 => 4,  25 => 1,  11 => 2,);
    }

    public function getSource()
    {
        return "";
    }
}
