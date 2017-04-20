<?php

/* TopxiaAdminBundle:Coin:coin-settings.html.twig */
class __TwigTemplate_d90519a9c29a9e4f7582ace857c994f74fe7b48fdeffad0dbac75f55ee958227 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Coin:coin-settings.html.twig", 1);
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
        // line 4
        $context["script_controller"] = "coin/range";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "  <ul class=\"nav nav-pills mbl small\">
    <li class=\"active\">
      <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_coin_settings");
        echo "\">虚拟币设置</a>
    </li>
    <li>
      <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_coin_model");
        echo "\">使用方式</a>
    </li>
  </ul>
  ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
  <form class=\"form-horizontal\" method=\"post\" id=\"coin-settings-form\">
  

      <style type=\"text/css\">
      .popover{
        z-index: 9999;
            }
        </style>
        <span class=\"glyphicon glyphicon-question-sign text-muted pull-right\" id=\"article-property-tips\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span> 
         <div id=\"article-property-tips-html\" style=\"display:none;\">
            <div style=\"width:250px;font-size:14px;\">
              <span style=\"color:blue;\"> ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("说明："), "html", null, true);
        echo "</span><br>
              ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("虚拟币是可以在网校内进行支付消费的虚拟货币"), "html", null, true);
        echo "<br>
              <span style=\"color:blue;\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("推广建议："), "html", null, true);
        echo "</span><br>
              1、 ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("建议网校使用虚拟币对网校内课程进行标价；"), "html", null, true);
        echo "<br>
              2、 ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网校可鼓励"), "html", null, true);
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%user_name%充值，可提升用户忠诚度", array("%user_name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")))), "html", null, true);
        }
        echo "；<br>
              3、 ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("建议配合使用学习卡（商业应用），给予一定优惠；"), "html", null, true);
        echo "<br>
            </div>
        </div>

      <div class=\"form-group\">
    \t\t<div class=\"col-md-3 control-label\">
    \t\t\t<label for=\"coin_name\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("虚拟币名称"), "html", null, true);
        echo "</label>
    \t\t</div>
    \t\t<div class=\"controls col-md-4\">
    \t\t\t<input type=\"text\" id=\"coin_name\" name=\"coin_name\" class=\"form-control\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coin_settings_posted"]) ? $context["coin_settings_posted"] : null), "coin_name", array()), "html", null, true);
        echo "\">
    \t\t</div>
      </div>

      <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"coin_picture\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("虚拟币图片"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"col-md-7 controls\">
        <div >

          <div id=\"coin-picture-largeSize\" style=\"display:inline;\">";
        // line 52
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_picture")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_picture")), "html", null, true);
            echo "\">";
        }
        echo "</div>
          <div id=\"coin-picture-middleSize\" style=\"display:none;\">";
        // line 53
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_picture_30_30")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_picture_30_30")), "html", null, true);
            echo "\">";
        }
        echo "</div>
          <div id=\"coin-picture-smallSize\" style=\"display:none;\">";
        // line 54
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_picture_20_20")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_picture_20_20")), "html", null, true);
            echo "\">";
        }
        echo "</div>
          <div id=\"coin-picture-extraSmallSize\" style=\"display:none;\">";
        // line 55
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_picture_10_10")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_picture_10_10")), "html", null, true);
            echo "\">";
        }
        echo "</div>
        </div></br>

          <button class=\"btn btn-default btn-sm\" id=\"coin-picture-upload\" type=\"button\" data-url=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_coin_picture");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传"), "html", null, true);
        echo "</button>
          <button class=\"btn btn-default btn-sm\" id=\"coin-picture-remove\" type=\"button\" data-url=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_coin_picture_remove");
        echo "\" ";
        if ( !$this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_picture")) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "</button>
          <p class=\"help-block\">
          ";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请上传png, gif, jpg格式的大于等于50*50的"), "html", null, true);
        echo "<span class=\"text-danger\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("等比例"), "html", null, true);
        echo "</span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("图片，否则无法上传"), "html", null, true);
        echo "
          </p>
          <input type=\"hidden\" name=\"coin_picture\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_picture"), "html", null, true);
        echo "\">
          <input type=\"hidden\" name=\"coin_picture_50_50\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_picture_50_50"), "html", null, true);
        echo "\">
          <input type=\"hidden\" name=\"coin_picture_30_30\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_picture_30_30"), "html", null, true);
        echo "\">
          <input type=\"hidden\" name=\"coin_picture_20_20\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_picture_20_20"), "html", null, true);
        echo "\">
          <input type=\"hidden\" name=\"coin_picture_10_10\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_picture_10_10"), "html", null, true);
        echo "\">
          <input type=\"hidden\" name=\"cash_rate\" ";
        // line 68
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.cash_rate")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.cash_rate"), "html", null, true);
            echo "\" ";
        } else {
            echo " value=\"1\" ";
        }
        echo ">
          <input type=\"hidden\" name=\"coin_enabled\" ";
        // line 69
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_enabled")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_enabled"), "html", null, true);
            echo "\" ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
          <input type=\"hidden\" name=\"cash_model\" ";
        // line 70
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.cash_model")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.cash_model"), "html", null, true);
            echo "\" ";
        } else {
            echo " value=\"none\" ";
        }
        echo ">
          <input type=\"hidden\" name=\"charge_coin_enabled\" ";
        // line 71
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.charge_coin_enabled")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.charge_coin_enabled"), "html", null, true);
            echo "\" ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
        </div>
    </div>

        <div class=\"form-group\">
              <div class=\"col-md-3 control-label\">
                <label for=\"coin_content\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("虚拟币说明"), "html", null, true);
        echo "</label>
              </div>
          <div class=\"controls col-md-8\">
            <textarea class=\"form-control\" id=\"coin_content\" rows=\"16\" name=\"coin_content\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coin_settings_posted"]) ? $context["coin_settings_posted"] : null), "coin_content", array()), "html", null, true);
        echo "\" data-image-upload-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeUpoadToken("default"))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->fieldValue((isset($context["coin_settings_posted"]) ? $context["coin_settings_posted"] : null), "coin_content");
        echo "</textarea>
            <p class=\"help-block\">";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("虚拟币说明可用于描述虚拟币特点，用途，获得的途径等虚拟币的相关内容"), "html", null, true);
        echo "
            </p>
          </div>
        </div> 

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">

    <div class=\"row form-group\">
    \t<div class=\"controls col-md-offset-3 col-md-8\">
    \t\t<button type=\"submit\" class=\"btn btn-primary\" >";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交更新"), "html", null, true);
        echo "</button>
    \t</div>
    </div>

    <div class=\"alert alert-info\">
      <p><strong>1.虚拟币设置的名称，图片，虚拟币说明都会在学生的【账户中心】展现/提示</strong></p>
      <p><strong>2.虚拟币图片和说明设置后，会显示在用户的账户中心</strong></p>
    </div>
  </form>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Coin:coin-settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 90,  269 => 86,  261 => 81,  253 => 80,  247 => 77,  232 => 71,  222 => 70,  212 => 69,  202 => 68,  198 => 67,  194 => 66,  190 => 65,  186 => 64,  182 => 63,  173 => 61,  162 => 59,  156 => 58,  146 => 55,  138 => 54,  130 => 53,  122 => 52,  114 => 47,  105 => 41,  99 => 38,  90 => 32,  83 => 31,  79 => 30,  75 => 29,  71 => 28,  67 => 27,  52 => 15,  46 => 12,  40 => 9,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
