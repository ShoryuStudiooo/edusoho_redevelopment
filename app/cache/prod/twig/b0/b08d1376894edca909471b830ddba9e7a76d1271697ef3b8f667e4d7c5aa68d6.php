<?php

/* TopxiaWebBundle:Order:order-table.html.twig */
class __TwigTemplate_5ffc4067ad3df8ed7792c4a0a10d2de6485822bcbf195882e58b104d727de6b7 extends Twig_Template
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
        // line 7
        $context["dict_macro"] = $this->loadTemplate("TopxiaWebBundle:Common:data-dict-macro.html.twig", "TopxiaWebBundle:Order:order-table.html.twig", 7);
        // line 8
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Order:order-table.html.twig", 8);
        // line 9
        echo "
";
        // line 10
        $context["mode"] = ((array_key_exists("mode", $context)) ? (_twig_default_filter((isset($context["mode"]) ? $context["mode"] : null), array(0 => "my"))) : (array(0 => "my")));
        // line 11
        echo "  <thead>
    <tr>
      <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单名称"), "html", null, true);
        echo "</th>
      <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("创建时间"), "html", null, true);
        echo "</th>
      <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("状态"), "html", null, true);
        echo "</th>
      <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("实付(元)"), "html", null, true);
        echo "</th>
      ";
        // line 17
        if (twig_in_filter((isset($context["mode"]) ? $context["mode"] : null), array(0 => "course", 1 => "admin"))) {
            // line 18
            echo "        <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买者"), "html", null, true);
            echo "</th>
      ";
        }
        // line 20
        echo "      <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支付方式"), "html", null, true);
        echo "
      <span data-toggle=\"popover\" class=\"glyphicon glyphicon-question-sign color-gray text-sm js-pay-way-popover\"></span>
        <div class=\"popover-content hidden\"  style=\"width:100px;\">
          <div class=\"popover-item\">
            <div class=\"content\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("站外支付为该笔订单是通过导入或者手动添加的方式产生的，故为站外支付"), "html", null, true);
        echo "</div>
          </div>
        </div></th>
      <th style=\"min-width:100px\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 32
            echo "      ";
            $context["buyer"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["order"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["order"], "userId", array()), array(), "array"), null)) : (null));
            // line 33
            echo "        <tr id=\"order-table-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "id", array()), "html", null, true);
            echo "\" style=\"word-break: break-all;word-wrap: break-word;\">
          <td>
            ";
            // line 35
            if (($this->getAttribute($context["order"], "targetType", array()) == "course")) {
                // line 36
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["order"], "targetId", array()))), "html", null, true);
                echo "\" target=\"_blank\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</strong></a>
            ";
            } elseif (($this->getAttribute(            // line 37
$context["order"], "targetType", array()) == "vip")) {
                // line 38
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vip", array("id" => $this->getAttribute($context["order"], "targetId", array()))), "html", null, true);
                echo "\" target=\"_blank\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</strong></a>
            ";
            } elseif (($this->getAttribute(            // line 39
$context["order"], "targetType", array()) == "classroom")) {
                // line 40
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute($context["order"], "targetId", array()))), "html", null, true);
                echo "\" target=\"_blank\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</strong></a>
            ";
            } else {
                // line 42
                echo "              <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</strong>
            ";
            }
            // line 44
            echo "            <br>
            <span class=\"text-muted text-sm\">";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单号：%sn%", array("%sn%" => $this->getAttribute($context["order"], "sn", array()))), "html", null, true);
            echo "</span>
          </td>
          <td><span class=\"text-muted text-sm\">";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "</span></td>
          <td>";
            // line 48
            echo $context["dict_macro"]->getorderStatus($this->getAttribute($context["order"], "status", array()));
            echo "</td>
          <td><span class=\"money-text\">";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "amount", array()), "html", null, true);
            echo "</span></td>
          ";
            // line 50
            if (twig_in_filter((isset($context["mode"]) ? $context["mode"] : null), array(0 => "admin", 1 => "course"))) {
                // line 51
                echo "            <td>
              ";
                // line 52
                echo $context["web_macro"]->getuser_link((isset($context["buyer"]) ? $context["buyer"] : null));
                echo "
            </td>
          ";
            }
            // line 55
            echo "          <td>
            ";
            // line 56
            if (($this->getAttribute($context["order"], "paidTime", array()) > 0)) {
                // line 57
                echo "              ";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("payment", $this->getAttribute($context["order"], "payment", array())), "--"), "html", null, true);
                echo "
              <br>
              <span class=\"text-muted text-sm\">";
                // line 59
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "paidTime", array()), "Y-n-d H:i:s"), "html", null, true);
                echo "</span>
            ";
            } else {
                // line 61
                echo "              --
            ";
            }
            // line 63
            echo "          </td>
          <td>
            ";
            // line 65
            if (("admin" == (isset($context["mode"]) ? $context["mode"] : null))) {
                // line 66
                echo "                <a href=\"javascript:;\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_detail", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("详情"), "html", null, true);
                echo "</a>
              ";
            }
            // line 68
            echo "            ";
            if (("course" == (isset($context["mode"]) ? $context["mode"] : null))) {
                // line 69
                echo "            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_order_detail", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("详情"), "html", null, true);
                echo "</a>
            ";
            }
            // line 71
            echo "
            ";
            // line 72
            if (("my" == (isset($context["mode"]) ? $context["mode"] : null))) {
                // line 73
                echo "              <div class=\"btn-group\">
                <a href=\"javascript:;\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_user_order_detail", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("详情"), "html", null, true);
                echo "</a>
                ";
                // line 75
                if ((($this->getAttribute($context["order"], "status", array()) == "refunding") || ($this->getAttribute($context["order"], "status", array()) == "created"))) {
                    // line 76
                    echo "                  <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                  <span class=\"caret\"></span>
                  </a>
                  <ul class=\"dropdown-menu pull-right ";
                    // line 79
                    echo "\" style=\"min-width: 120px;\" >

                  ";
                    // line 82
                    echo "                    ";
                    if (($this->getAttribute($context["order"], "status", array()) == "refunding")) {
                        // line 83
                        echo "                      <li><a href=\"javascript:;\" class=\"cancel-refund\" data-url=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_order_cancel_refund", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消退款"), "html", null, true);
                        echo "</a></li>
                    ";
                    }
                    // line 85
                    echo "                    ";
                    if (($this->getAttribute($context["order"], "status", array()) == "created")) {
                        // line 86
                        echo "
                      <li>
                        <a href=\"";
                        // line 88
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pay_center_show", array("sn" => $this->getAttribute($context["order"], "sn", array()), "targetType" => $this->getAttribute($context["order"], "targetType", array()))), "html", null, true);
                        echo "\"  style=\"display:block\" >";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("去支付"), "html", null, true);
                        echo "</a>
                      </li>
                      <li><a href=\"javascript:;\" class=\" cancel\" style=\"display:block\" data-url=\"";
                        // line 90
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_order_cancel", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消订单"), "html", null, true);
                        echo "</a></li>

                    ";
                    }
                    // line 93
                    echo "                   ";
                    // line 94
                    echo "                  </ul>
                ";
                }
                // line 96
                echo "              </div>
            ";
            }
            // line 98
            echo "          </td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 101
            echo "      <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无订单记录"), "html", null, true);
            echo "</div></td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "  </tbody>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Order:order-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 103,  276 => 101,  269 => 98,  265 => 96,  261 => 94,  259 => 93,  251 => 90,  244 => 88,  240 => 86,  237 => 85,  229 => 83,  226 => 82,  222 => 79,  217 => 76,  215 => 75,  209 => 74,  206 => 73,  204 => 72,  201 => 71,  193 => 69,  190 => 68,  182 => 66,  180 => 65,  176 => 63,  172 => 61,  167 => 59,  161 => 57,  159 => 56,  156 => 55,  150 => 52,  147 => 51,  145 => 50,  141 => 49,  137 => 48,  133 => 47,  128 => 45,  125 => 44,  119 => 42,  111 => 40,  109 => 39,  102 => 38,  100 => 37,  93 => 36,  91 => 35,  85 => 33,  82 => 32,  77 => 31,  70 => 27,  64 => 24,  56 => 20,  50 => 18,  48 => 17,  44 => 16,  40 => 15,  36 => 14,  32 => 13,  28 => 11,  26 => 10,  23 => 9,  21 => 8,  19 => 7,);
    }

    public function getSource()
    {
        return "";
    }
}
