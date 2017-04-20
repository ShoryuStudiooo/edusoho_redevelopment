<?php

/* TopxiaAdminBundle:Invite:coupon.html.twig */
class __TwigTemplate_23f0f0f4603e6e28d251bd835685f84c5a8466b3c5b4425903b7103770c624e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Invite:coupon.html.twig", 1);
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
        // line 2
        $context["web_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Invite:coupon.html.twig", 2);
        // line 3
        $context["menu"] = "admin_operation_invite_coupon";
        // line 5
        $context["script_controller"] = "invite/coupon.js";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->loadTemplate("TopxiaAdminBundle:Invite:tab-data.html.twig", "TopxiaAdminBundle:Invite:coupon.html.twig", 8)->display($context);
        // line 9
        echo "
  ";
        // line 10
        if (((isset($context["filter"]) ? $context["filter"] : null) == "invited")) {
            // line 11
            echo "    ";
            $context["actionUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_invite_coupon", array("filter" => (isset($context["filter"]) ? $context["filter"] : null)));
            // line 12
            echo "\t";
        } elseif (((isset($context["filter"]) ? $context["filter"] : null) == "invite")) {
            // line 13
            echo "\t\t";
            $context["actionUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_invite_coupon_query");
            // line 14
            echo "\t";
        }
        // line 15
        echo "
\t<form  class=\"form-inline well well-sm\" action=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["actionUrl"]) ? $context["actionUrl"] : null), "html", null, true);
        echo "\" method=\"get\" novalidate>
    <input class=\"form-control\" type=\"text\" name=\"nickname\" placeholder=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户名"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "nickname"), "method"), "html", null, true);
        echo "\">
     <div class=\"form-group\">
    ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("领取时间:"), "html", null, true);
        echo "
    <input class=\"form-control\" type=\"text\" id=\"start-date\" name=\"startDateTime\" placeholder=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开始时间"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "startDateTime"), "method"), "html", null, true);
        echo "\">
    <div class=\"form-group\">-</div>
    <input class=\"form-control\" type=\"text\" id=\"end-date\" name=\"endDateTime\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("结束时间"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "endDateTime"), "method"), "html", null, true);
        echo "\">
    </div>
    <button class=\"btn btn-primary\" type=\"submit\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>
\t</form>

  <table class=\"table table-hover table-striped\" >
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th width=\"15%\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户名"), "html", null, true);
        echo "</th>
\t\t\t\t<th width=\"10%\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("领取时间"), "html", null, true);
        echo "</th>
\t\t\t\t<th width=\"15%\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("面值"), "html", null, true);
        echo "</th>
\t\t\t\t<th width=\"20%\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("使用情况"), "html", null, true);
        echo "</th>
\t\t\t\t<th width=\"15%\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("使用时间"), "html", null, true);
        echo "</th>
\t\t\t\t<th width=\"25%\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单信息"), "html", null, true);
        echo "</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cardInformations"]) ? $context["cardInformations"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cardInformation"]) {
            // line 40
            echo "\t\t\t";
            if (((isset($context["filter"]) ? $context["filter"] : null) == "invite")) {
                // line 41
                echo "\t\t\t\t";
                $context["user"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["cardInformation"], "inviteUserId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["cardInformation"], "inviteUserId", array()), array(), "array"), null)) : (null));
                // line 42
                echo "\t\t\t\t";
                $context["card"] = (($this->getAttribute((isset($context["cards"]) ? $context["cards"] : null), $this->getAttribute($context["cardInformation"], "inviteUserCardId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["cards"]) ? $context["cards"] : null), $this->getAttribute($context["cardInformation"], "inviteUserCardId", array()), array(), "array"), null)) : (null));
                // line 43
                echo "\t\t\t\t";
                $context["coupon"] = (($this->getAttribute((isset($context["coupons"]) ? $context["coupons"] : null), $this->getAttribute($context["cardInformation"], "inviteUserCardId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["coupons"]) ? $context["coupons"] : null), $this->getAttribute($context["cardInformation"], "inviteUserCardId", array()), array(), "array"), null)) : (null));
                // line 44
                echo "\t\t\t\t";
                $context["order"] = (($this->getAttribute((isset($context["orders"]) ? $context["orders"] : null), $this->getAttribute((isset($context["coupon"]) ? $context["coupon"] : null), "orderId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["orders"]) ? $context["orders"] : null), $this->getAttribute((isset($context["coupon"]) ? $context["coupon"] : null), "orderId", array()), array(), "array"), null)) : (null));
                // line 45
                echo "\t\t\t";
            } elseif (((isset($context["filter"]) ? $context["filter"] : null) == "invited")) {
                // line 46
                echo "\t\t\t\t";
                $context["user"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["cardInformation"], "invitedUserId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["cardInformation"], "invitedUserId", array()), array(), "array"), null)) : (null));
                // line 47
                echo "\t\t\t\t";
                $context["card"] = (($this->getAttribute((isset($context["cards"]) ? $context["cards"] : null), $this->getAttribute($context["cardInformation"], "invitedUserCardId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["cards"]) ? $context["cards"] : null), $this->getAttribute($context["cardInformation"], "invitedUserCardId", array()), array(), "array"), null)) : (null));
                // line 48
                echo "\t\t\t\t";
                $context["coupon"] = (($this->getAttribute((isset($context["coupons"]) ? $context["coupons"] : null), $this->getAttribute($context["cardInformation"], "invitedUserCardId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["coupons"]) ? $context["coupons"] : null), $this->getAttribute($context["cardInformation"], "invitedUserCardId", array()), array(), "array"), null)) : (null));
                // line 49
                echo "\t\t\t\t";
                $context["order"] = (($this->getAttribute((isset($context["orders"]) ? $context["orders"] : null), $this->getAttribute((isset($context["coupon"]) ? $context["coupon"] : null), "orderId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["orders"]) ? $context["orders"] : null), $this->getAttribute((isset($context["coupon"]) ? $context["coupon"] : null), "orderId", array()), array(), "array"), null)) : (null));
                // line 50
                echo "\t\t\t";
            }
            echo "\t\t\t\t\t\t\t\t\t  
\t\t\t<tr>
\t\t\t\t<td>";
            // line 52
            if ((isset($context["user"]) ? $context["user"] : null)) {
                echo $context["web_macro"]->getuser_link((isset($context["user"]) ? $context["user"] : null));
            } else {
                echo "-";
            }
            echo "</td>
\t\t\t\t<td>";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : null), "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coupon"]) ? $context["coupon"] : null), "rate", array()), "html", null, true);
            echo "元</td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 56
            if (($this->getAttribute((isset($context["card"]) ? $context["card"] : null), "status", array()) == "unused")) {
                // line 57
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未使用"), "html", null, true);
                echo "
\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 58
(isset($context["card"]) ? $context["card"] : null), "status", array()) == "receive")) {
                // line 59
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已领取"), "html", null, true);
                echo "
\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 60
(isset($context["card"]) ? $context["card"] : null), "status", array()) == "used")) {
                // line 61
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已使用"), "html", null, true);
                echo "
\t\t\t\t\t";
            }
            // line 63
            echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 65
            if (($this->getAttribute((isset($context["card"]) ? $context["card"] : null), "useTime", array()) != 0)) {
                // line 66
                echo "      \t\t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : null), "useTime", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "
    \t\t\t";
            } else {
                // line 68
                echo "     \t\t\t\t -
    \t\t\t";
            }
            // line 70
            echo "    \t\t</td>
\t\t\t\t<td class=\"text-danger\">";
            // line 71
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title", array()), "-")) : ("-")), "html", null, true);
            echo "</td>\t\t\t\t\t
\t\t\t</tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 74
            echo "\t\t\t<tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无页面记录"), "html", null, true);
            echo "</div></td></tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cardInformation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t\t</tbody>
\t</table>

";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Invite:coupon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 79,  242 => 76,  233 => 74,  225 => 71,  222 => 70,  218 => 68,  212 => 66,  210 => 65,  206 => 63,  200 => 61,  198 => 60,  193 => 59,  191 => 58,  186 => 57,  184 => 56,  179 => 54,  175 => 53,  167 => 52,  161 => 50,  158 => 49,  155 => 48,  152 => 47,  149 => 46,  146 => 45,  143 => 44,  140 => 43,  137 => 42,  134 => 41,  131 => 40,  126 => 39,  119 => 35,  115 => 34,  111 => 33,  107 => 32,  103 => 31,  99 => 30,  90 => 24,  83 => 22,  76 => 20,  72 => 19,  65 => 17,  61 => 16,  58 => 15,  55 => 14,  52 => 13,  49 => 12,  46 => 11,  44 => 10,  41 => 9,  38 => 8,  35 => 7,  31 => 1,  29 => 5,  27 => 3,  25 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
