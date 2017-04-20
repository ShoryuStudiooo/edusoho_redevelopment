<?php

/* TopxiaAdminBundle:Coin:coin-model.html.twig */
class __TwigTemplate_dbd968d1f58609e2910b478a29040dc9291f80e468be061401889ecb85aaabcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Coin:coin-model.html.twig", 1);
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
        $context["menu"] = "admin_coin_settings";
        // line 5
        $context["script_controller"] = "coin/model";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "  <ul class=\"nav nav-pills mbl small\">
    <li>
      <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_coin_settings");
        echo "\">虚拟币设置</a>
    </li>
    <li class=\"active\">
      <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_coin_model");
        echo "\">使用方式</a>
    </li>
  </ul>
  ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
  <form class=\"form-horizontal\" method=\"post\" id=\"coin-model-form\">

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("使用方式设置"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-7\">
        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn btn-default ";
        // line 25
        if (((($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array()), "none")) : ("none")) == "none")) {
            echo "btn-primary";
        }
        echo " model\" data-modle=\"none\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("不使用"), "html", null, true);
        echo "</button>
          <button type=\"button\" class=\"btn btn-default ";
        // line 26
        if (((($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array()), "none")) : ("none")) == "deduction")) {
            echo "btn-primary";
        }
        echo " model\" data-modle=\"deduction\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用于抵扣"), "html", null, true);
        echo "</button>
          <button type=\"button\" class=\"btn btn-default ";
        // line 27
        if (((($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array()), "none")) : ("none")) == "currency")) {
            echo "btn-primary";
        }
        echo " model\" data-modle=\"currency\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用于标价"), "html", null, true);
        echo "</button>
        </div>
        <input type=\"hidden\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array()), "none")) : ("none")), "html", null, true);
        echo "\" name=\"cash_model\" />
      </div>
    </div> 

    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"cash_rate\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("虚拟币汇率设置"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-4\">
        <input  type=\"text\" id=\"cash_rate\" name=\"cash_rate\" class=\"form-control\" ";
        // line 38
        if ((($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_rate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_rate", array()), 1)) : (1))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_rate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_rate", array()), 1)) : (1)), "html", null, true);
            echo "\" ";
        } else {
            echo " value=\"1\" ";
        }
        echo ">
      </div>
      <div class=\"controls  col-md-8 col-md-offset-3\">
        <div class=\"help-block\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("在此设置1元可换取的虚拟币数量，"), "html", null, true);
        echo "<span class=\"text text-danger\">
        ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("建议汇率设置后不要进行改动"), "html", null, true);
        echo "
        </span>
        </div>
      </div>
    </div>
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
    <div class=\"row form-group\">
      <div class=\"controls col-md-offset-3 col-md-8\">
        <button type=\"submit\" class=\"btn btn-primary ";
        // line 50
        if (((($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array()), "none")) : ("none")) == "none")) {
            echo "hidden";
        }
        echo "\" id=\"next\"  >";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("下一步"), "html", null, true);
        echo "</button>
        <button type=\"submit\" class=\"btn btn-primary ";
        // line 51
        if (((($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array()), "none")) : ("none")) == "none")) {
        } else {
            echo "hidden";
        }
        echo "\" id=\"save\"  >";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保存"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </form>
  
  <div class=\"alert alert-info none ";
        // line 56
        if (((($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array()), "none")) : ("none")) != "none")) {
            // line 57
            echo "hidden";
        }
        echo "\">
    <p><strong> 
      1、";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无手动修改用户虚拟币余额的功能"), "html", null, true);
        echo "
      <br>
      2、充值虚拟币，需安装<a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_center");
        echo "\">学习卡</a>或<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_center");
        echo "\">账户充值</a>插件
      <br>
    </strong></p>
  </div>

  <div class=\"alert alert-info deduction ";
        // line 66
        if (((($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array()), "none")) : ("none")) != "deduction")) {
            // line 67
            echo "hidden";
        }
        echo "\">
    <p><strong> 
      1、";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无手动修改用户虚拟币余额的功能"), "html", null, true);
        echo "
      <br>
      2、充值虚拟币，需安装<a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_center");
        echo "\">学习卡</a>或<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_center");
        echo "\">账户充值</a>插件
      <br>
      3、";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("虚拟币用于抵扣：网校以人民币作为支付货币，并可以使用虚拟币进行按比例抵扣(虚拟币类似于淘金币）"), "html", null, true);
        echo "
      <br>
      4、";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("使用方式一旦保存（使用方式和汇率），请勿随意改动"), "html", null, true);
        echo "
      <br>
      5、";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("使用方式的切换会使课程价格根据汇率变动"), "html", null, true);
        echo "
      <br>
      6、";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("如有参加促销活动的课程，修改价格都将有相应的折扣"), "html", null, true);
        echo "    
    </strong></p>
  </div>

  <div class=\"alert alert-info currency ";
        // line 83
        if (((($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array()), "none")) : ("none")) != "currency")) {
            echo "hidden";
        }
        echo "\">
    <p><strong> 
      1、";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无手动修改用户虚拟币余额的功能"), "html", null, true);
        echo "
      <br>
      2、充值虚拟币，需安装<a href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_center");
        echo "\">学习卡</a>或<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_center");
        echo "\">账户充值</a>插件
      <br>
      3、";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("虚拟币用于标价：网校以虚拟币作为支付货币，课程和会员以虚拟币标价和结算"), "html", null, true);
        echo "
      <br>
      4、";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("虚拟币用于标价后，移动端仍显示人民币价格（移动端暂不支持虚拟币支付）"), "html", null, true);
        echo "
      <br>
      5、";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("使用方式一旦保存（使用方式和汇率），请勿随意改动"), "html", null, true);
        echo "
      <br>
      6、";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("使用方式的切换会使课程价格会根据汇率变动"), "html", null, true);
        echo "
      <br>
      7、";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("如有参加促销活动的课程，修改价格都将有相应的折扣"), "html", null, true);
        echo "    
    </strong></p>
  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Coin:coin-model.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 97,  257 => 95,  252 => 93,  247 => 91,  242 => 89,  235 => 87,  230 => 85,  223 => 83,  216 => 79,  211 => 77,  206 => 75,  201 => 73,  194 => 71,  189 => 69,  183 => 67,  181 => 66,  171 => 61,  166 => 59,  160 => 57,  158 => 56,  145 => 51,  137 => 50,  131 => 47,  123 => 42,  119 => 41,  107 => 38,  101 => 35,  92 => 29,  83 => 27,  75 => 26,  67 => 25,  60 => 21,  52 => 16,  46 => 13,  40 => 10,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
