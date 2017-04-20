<?php

/* TopxiaAdminBundle:System:consult-setting.html.twig */
class __TwigTemplate_c8929ee39522658dbba18805bed26ee33ec90a452f78623208b85ce8e7a2e7f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:consult-setting.html.twig", 1);
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
        $context["menu"] = "admin_setting_consult_setting";
        // line 5
        $context["script_controller"] = "setting/consult-setting";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" id=\"consult-setting-form\" novalidate>
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label >";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("客服功能"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 17
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "enabled", array()));
        echo "
    </div>
  </div>
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label >";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("浮动条颜色"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 25
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("color", array("default" => "<span class=\"btn btn-lg\" style=\"background:#37b97d\"></span>", "warning" => "<span class=\"btn btn-lg\" style=\"background:#e67e22\"></span>", "danger" => "<span class=\"btn btn-lg\" style=\"background:#e74c3c\"></span>"), $this->getAttribute(        // line 30
(isset($context["consult"]) ? $context["consult"] : null), "color", array()));
        // line 31
        echo "
    </div>
  </div>
  <div data-role=\"template\" style=\"display:none\">
    <div class=\"row form-group has-feedback\">
      <div class=\"controls col-md-2 col-md-offset-2\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
      </div>
      <div class=\"controls col-md-2\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
      </div>
      <div class=\"controls col-md-4\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
        <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\" title=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "\">×</button></input>
      </div>
    </div>
  </div>

  <div data-role=\"phone-template\" style=\"display:none\">
    <div class=\"row form-group has-feedback\">
      <div class=\"controls col-md-4 col-md-offset-2\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
      </div>
      <div class=\"controls col-md-4\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
        <button class=\"close delete-btn form-control-feedback\" data-role=\"phone-item-delete\" type=\"button\" title=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "\">×</button></input>
      </div>
    </div>
  </div>

  <div data-role=\"qqGroupTemplate\" style=\"display:none\">
    <div class=\"row form-group has-feedback\">
      <div class=\"controls col-md-2 col-md-offset-2\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
      </div>
      <div class=\"controls col-md-2\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
      </div>
      <div class=\"controls col-md-4\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
        <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\" title=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "\">×</button></input>
      </div>
    </div>
  </div>

  <fieldset>
    <legend>QQ";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("客服设置"), "html", null, true);
        echo "
      <span class=\"glyphicon glyphicon-question-sign text-muted pull-right mll mts\" id=\"qq-property-tips\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span>
      <div id=\"qq-property-tips-html\" style=\"display:none;\">
        <div style=\"width:250px;\">
          <span style=\"color:blue;\">";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("如何获取在线咨询链接？"), "html", null, true);
        echo "</span><br>
          1，";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录"), "html", null, true);
        echo " <a target=\"_blank\" href=\"https://id.b.qq.com/login/index\">https://id.b.qq.com/login/index</a>。 <br>
          2，";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录后，找到【营销QQ】-【在线代码生成】，选择【在论坛/微博发布在线咨询链接】。（包含“%http%://”）", array("%http%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getScheme", array(), "method"))), "html", null, true);
        echo "<br>
        </div>
      </div>
    </legend>
    <div id=\"consult-qq\">
      ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "qq", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["qq"]) {
            // line 89
            echo "      <div class=\"row form-group has-feedback\">
        <div class=\"controls col-md-2 col-md-offset-2\">
          <input type=\"text\" name=\"qq[";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][name]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "name", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("QQ客服名称"), "html", null, true);
            echo "\">
        </div>
        <div class=\"controls col-md-2\">
          <input type=\"text\" name=\"qq[";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][number]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "number", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("QQ号"), "html", null, true);
            echo "\">
        </div>
        <div class=\"controls col-md-4\">
          <input type=\"text\" name=\"qq[";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][url]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["qq"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["qq"], "url", array()), "")) : ("")), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("若使用营销QQ，请填入在线咨询链接"), "html", null, true);
            echo "\">
          ";
            // line 98
            if (($this->getAttribute($context["loop"], "index0", array()) > 0)) {
                // line 99
                echo "          <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
                echo "\">×</button>
          ";
            }
            // line 101
            echo "        </div>
      </div>
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "    </div>
    <div class=\"row form-group\">
      <div class=\"controls col-md-4 col-md-offset-2\">
        <span  class=\"btn-link\" data-role=\"item-add\" data-parentId='consult-qq' data-length='";
        // line 107
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "qq", array())), "html", null, true);
        echo "'>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增"), "html", null, true);
        echo "</span>
      </div>
    </div>
  </fieldset>


  <fieldset>
    <legend>";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("QQ群设置"), "html", null, true);
        echo "
      <span class=\"glyphicon glyphicon-question-sign text-muted pull-right mll mts\" id=\"qq-group-property-tips\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span>
      <div id=\"qq-group-property-tips-html\" style=\"display:none;\">
        <div style=\"width:250px;\">
          <span style=\"color:blue;\">";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("如何获取在线咨询链接？"), "html", null, true);
        echo "</span><br>
          ";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("访问"), "html", null, true);
        echo "<a target=\"_blank\" href=\"http://qun.qq.com/join.html\">http://qun.qq.com/join.html</a>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("获取QQ群直接加入网页代码。"), "html", null, true);
        echo "
        </div>
      </div>
    </legend>
    <div id=\"consult-qqgroup\">
      ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "qqgroup", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["qqgroup"]) {
            // line 125
            echo "      <div class=\"row form-group has-feedback\">
        <div class=\"controls col-md-2 col-md-offset-2\">
          <input type=\"text\" name=\"qqgroup[";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][name]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["qqgroup"], "name", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("QQ群名称"), "html", null, true);
            echo "\">
        </div>
        <div class=\"controls col-md-2\">
          <input type=\"text\" name=\"qqgroup[";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][number]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["qqgroup"], "number", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("QQ群号"), "html", null, true);
            echo "\">
        </div>
        <div class=\"controls col-md-4\">
          <input type=\"text\" name=\"qqgroup[";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][url]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["qqgroup"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["qqgroup"], "url", array()), "")) : ("")), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("QQ群直接加入网页代码(选填)"), "html", null, true);
            echo "\">
          ";
            // line 134
            if (($this->getAttribute($context["loop"], "index0", array()) > 0)) {
                // line 135
                echo "          <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
                echo "\">×</button>
          ";
            }
            // line 137
            echo "        </div>
      </div>
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qqgroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "    </div>
    <div class=\"row form-group\">
      <div class=\"controls col-md-4 col-md-offset-2\">
        <span class=\"btn-link\" data-parentId='consult-qqgroup' data-length='";
        // line 143
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "qqgroup", array())), "html", null, true);
        echo "'>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增"), "html", null, true);
        echo "</span>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("联系电话设置"), "html", null, true);
        echo "</legend>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"worktime\">";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("工作时间"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"worktime\" name=\"worktime\" class=\"form-control\" value=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "worktime", array()), "html", null, true);
        echo "\">
      </div>
    </div>
    

    <div id=\"consult-phone\">
      ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "phone", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 162
            echo "      <div class=\"row form-group has-feedback\">
        <div class=\"controls col-md-4 col-md-offset-2\">
          <input type=\"text\" name=\"phone[";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][name]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "name", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("联系人"), "html", null, true);
            echo "\">
        </div>
        <div class=\"controls col-md-4\">
          <input type=\"text\" name=\"phone[";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][number]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "number", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("联系电话"), "html", null, true);
            echo "\">
          ";
            // line 168
            if (($this->getAttribute($context["loop"], "index0", array()) > 0)) {
                // line 169
                echo "          <button class=\"close delete-btn form-control-feedback\" data-role=\"phone-item-delete\" type=\"button\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
                echo "\">×</button>
          ";
            }
            // line 171
            echo "        </div>
      </div>
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "    </div>
    <div class=\"row form-group\">
      <div class=\"controls col-md-4 col-md-offset-2\">
        <span class=\"btn-link\"  data-role=\"phone-item-add\" data-parentId='consult-phone' data-length='";
        // line 177
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "phone", array())), "html", null, true);
        echo "'>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增"), "html", null, true);
        echo "</span>
      </div>
    </div>
  </fieldset>
  
  <fieldset>
    <legend>";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("其他设置"), "html", null, true);
        echo "</legend>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label>";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("微信二维码"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"consult-container\">";
        // line 189
        if ($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "webchatURI", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "webchatURI", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
        <a href=\"javascript:;\" class=\"btn btn-default btn-sm\" id=\"consult-upload\" data-upload-token=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\"type=\"button\" data-goto-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_consult_upload");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传"), "html", null, true);
        echo "</a>
        <button class=\"btn btn-default btn-sm\" id=\"consult-webchat-del\" type=\"button\" data-url=\"";
        // line 191
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_consult_webchat_delete");
        echo "\" ";
        if ( !$this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "webchatURI", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "</button>        
        <p class=\"help-block\">";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请上传png, gif, jpg格式的图片文件。"), "html", null, true);
        echo "</p>
        <input type=\"hidden\" name=\"webchatURI\" value=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "webchatURI", array()), "html", null, true);
        echo "\">
      </div>
    </div>
    

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"email\">";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("工作邮箱"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" value=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "email", array()), "html", null, true);
        echo "\">
      </div>
    </div>
  </fieldset>

  ";
        // line 209
        echo "    ";
        // line 210
        echo "    ";
        // line 211
        echo "      ";
        // line 212
        echo "        ";
        // line 213
        echo "      ";
        // line 214
        echo "      ";
        // line 215
        echo "        ";
        // line 216
        echo "        ";
        // line 217
        echo "      ";
        // line 218
        echo "    ";
        // line 219
        echo "  ";
        // line 220
        echo "
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
        echo "</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:consult-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  551 => 228,  544 => 224,  538 => 220,  536 => 219,  534 => 218,  532 => 217,  530 => 216,  528 => 215,  526 => 214,  524 => 213,  522 => 212,  520 => 211,  518 => 210,  516 => 209,  508 => 203,  502 => 200,  492 => 193,  488 => 192,  478 => 191,  470 => 190,  462 => 189,  456 => 186,  450 => 183,  439 => 177,  434 => 174,  418 => 171,  412 => 169,  410 => 168,  402 => 167,  392 => 164,  388 => 162,  371 => 161,  362 => 155,  356 => 152,  350 => 149,  339 => 143,  334 => 140,  318 => 137,  312 => 135,  310 => 134,  302 => 133,  292 => 130,  282 => 127,  278 => 125,  261 => 124,  251 => 119,  247 => 118,  240 => 114,  228 => 107,  223 => 104,  207 => 101,  201 => 99,  199 => 98,  191 => 97,  181 => 94,  171 => 91,  167 => 89,  150 => 88,  142 => 83,  138 => 82,  134 => 81,  127 => 77,  118 => 71,  100 => 56,  85 => 44,  70 => 31,  68 => 30,  67 => 25,  61 => 22,  53 => 17,  47 => 14,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
