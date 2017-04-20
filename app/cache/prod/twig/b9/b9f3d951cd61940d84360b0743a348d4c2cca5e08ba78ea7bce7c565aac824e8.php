<?php

/* TopxiaAdminBundle:System:login-connect.html.twig */
class __TwigTemplate_6e73c029b3326b116f6a8ebfa4a684cd904542da11bb43099dd23a5101882415 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:login-connect.html.twig", 1);
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
        $context["script_controller"] = "system/login_bind";
        // line 5
        $context["menu"] = "admin_setting_login_bind";
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

<form class=\"form-horizontal\" method=\"post\" id=\"login_bind-form\" novalidate>

  <fieldset>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户登录限制"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 19
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("login_limit", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : null), "login_limit", array()));
        echo "
        <p class=\"help-block\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启后同一账号只能在一处（同一IP下使用一个浏览器）进行登录"), "html", null, true);
        echo "</p>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("第三方登录"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 31
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : null), "enabled", array()));
        echo "
      </div>
    </div>
  </fieldset>


<fieldset>
<div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
          <label >";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户登录保护"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
          ";
        // line 43
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("temporary_lock_enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : null), "temporary_lock_enabled", array()));
        echo "
          <p class=\"help-block\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启后，登录时用户连续多次输入错误密码时暂时封禁用户,此功能不影响admin手动永久封禁用户"), "html", null, true);
        echo "</p>
      </div>

      <div id=\"times_and_minutes\" class=\"col-md-8 col-md-offset-3\" ";
        // line 47
        if ( !(($this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : null), "temporary_lock_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : null), "temporary_lock_enabled", array()), false)) : (false))) {
            echo "style=\"display:none\"";
        }
        echo ">
        <div class=\"row\">
          <div class=\"col-md-4 lock-user-text-right\">
            ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户连续输入错误密码"), "html", null, true);
        echo "
          </div>
          <div class=\"controls col-md-2 form-group\">
            <input type=\"text\" id=\"temporary_lock_allowed_times\" name=\"temporary_lock_allowed_times\" class=\"form-control\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : null), "temporary_lock_allowed_times", array()), "html", null, true);
        echo "\">
          </div>
          <div class=\"col-md-3 lock-user-text-left\">
            ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("次，将暂时封禁用户"), "html", null, true);
        echo "
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-4 lock-user-text-right\">
            ";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("同一IP连续输入错误密码"), "html", null, true);
        echo "
          </div>
          <div class=\"controls col-md-2 form-group\">
            <input type=\"text\" id=\"temporary_lock_allowed_times\" name=\"ip_temporary_lock_allowed_times\" class=\"form-control\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : null), "ip_temporary_lock_allowed_times", array()), "html", null, true);
        echo "\">
          </div>
          <div class=\"col-md-3 lock-user-text-left\">
            ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("次，将暂时封禁IP"), "html", null, true);
        echo "
          </div>
        </div>


        <div class=\"row\">
          <div class=\"col-md-4 lock-user-text-right\">
            ";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("经过"), "html", null, true);
        echo "
          </div>
          <div class=\"controls col-md-2 form-group\">
            <input type=\"text\" id=\"temporary_lock_minutes\" name=\"temporary_lock_minutes\" class=\"form-control\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : null), "temporary_lock_minutes", array()), "html", null, true);
        echo "\">
          </div>
          <div class=\"col-md-3 lock-user-text-left\">
            ";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分钟后，解锁用户/IP"), "html", null, true);
        echo "
          </div>  
        </div>
      </div> 
  </div>
  </fieldset>
<fieldset id=\"third_login\"  ";
        // line 86
        if (((($this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : null), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : null), "enabled", array()), null)) : (null)) == 0)) {
            echo " style=\"display:none\"";
        }
        echo ">
  ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["client"]) {
            // line 88
            echo "    <fieldset data-role=\"oauth2-setting\" data-type=\"";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\">
      <legend>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "admin_name", array()), "html", null, true);
            echo "</legend>
      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
            <label >";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "admin_name", array()), "html", null, true);
            echo "</label>
        </div>
        <div class=\"controls col-md-8 radios\">
          ";
            // line 95
            echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios(($context["type"] . "_enabled"), array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : null), ($context["type"] . "_enabled"), array(), "array"));
            echo "
          ";
            // line 96
            if ((($this->getAttribute($context["client"], "apply_url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["client"], "apply_url", array()), null)) : (null))) {
                // line 97
                echo "            ";
                if (($context["type"] == "weixinmob")) {
                    // line 98
                    echo "              <div class=\"help-block\">开通后，支持使用微信号在手机端微信APP内快捷注册或登录网站。</div>
              <div class=\"help-block\">
              如何开通：1.一个已认证的<a target=\"_blank\" href=\"https://mp.weixin.qq.com\">微信服务号</a>；2.一个已认证的<a target=\"_blank\" href=\"https://open.weixin.qq.com\">微信开放平台</a>账号；3.服务号绑定到<a target=\"_blank\" href=\"https://open.weixin.qq.com\">微信开放平台</a>。
            ";
                } elseif ((                // line 101
$context["type"] == "weixinweb")) {
                    // line 102
                    echo "              <div class=\"help-block\">请先到<a target=\"_blank\" href=\"https://open.weixin.qq.com\">微信开放平台</a>申请<a target=\"_blank\" href=\"https://open.weixin.qq.com/cgi-bin/frame?t=home/web_tmpl&lang=zh_CN\">网站应用开发</a>，开通后，网站PC端将支持微信扫码登录；</div>
              <div class=\"help-block\">
              申请条件：在微信开放平台注册并且完成实名认证。
            ";
                } else {
                    // line 105
                    echo "  
            <div class=\"help-block\"><a href=\"";
                    // line 106
                    echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "apply_url", array()), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("申请"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "admin_name", array()), "html", null, true);
                    echo "</a> 
            ";
                }
                // line 108
                echo "              ";
                if (($context["type"] == "qq")) {
                    // line 109
                    echo "              <a class=\"pll\" href=\"javascript:;\" id=\"help\" data-toggle=\"popover\" data-trigger=\"click\" data-placement=\"top\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("接入帮助:"), "html", null, true);
                    echo "\" data-html=\"true\" data-content=\"1.";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("你的QQ开放平台账号认证度（个人信息完善）要达到75%，才能创建应用在网站设置第三方登录；"), "html", null, true);
                    echo "<br>2.";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("需填写的回调地址为："), "html", null, true);
                    echo "<br><a><span class='text-danger'>XXX</span>/login/bind/qq/callback;<span class='text-danger'>XXX</span>/settings/bind/qq/callback</a><br>，<span class='text-danger'>XXX</span>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("为你的ES系统网址。例如，气球鱼学院的回调地址填写为："), "html", null, true);
                    echo "http://www.qiqiuyu.com/login/bind/qq/callback;http://www.qiqiuyu.com/settings<br>/bind/qq/callback；";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网址一定要有www哦；"), "html", null, true);
                    echo "<br>3.";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("QQ的按钮，在开放平台你的个人信息中，找到ID和key，填写到edusoho后台，开启ID上方的QQ登录。"), "html", null, true);
                    echo "<br>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("如果QQ接入审核失败，提示“登录按钮位置不对”，请检查ES后台【系统】【用户设置】【登录】，开启第三方登录以及开启QQ登录。"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("接入帮助"), "html", null, true);
                    echo "</a>
              ";
                }
                // line 111
                echo "            </div>
          ";
            }
            // line 113
            echo "        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"";
            // line 118
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "_key\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "key_setting_label", array()), "html", null, true);
            echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"";
            // line 121
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "_key\" name=\"";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "_key\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : null), ($context["type"] . "_key"), array(), "array"), "html", null, true);
            echo "\">
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"";
            // line 127
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "_secret\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "secret_setting_label", array()), "html", null, true);
            echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"";
            // line 130
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "_secret\" name=\"";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "_secret\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : null), ($context["type"] . "_secret"), array(), "array"), "html", null, true);
            echo "\">
          ";
            // line 131
            if (($context["type"] == "weixinweb")) {
                // line 132
                echo "            <div class=\"help-block\">APP ID和APP Secret来自<a target=\"_blank\" href=\"https://open.weixin.qq.com\">微信开放平台</a>创建的网站应用</div>
          ";
            } elseif ((            // line 133
$context["type"] == "weixinmob")) {
                // line 134
                echo "            <div class=\"help-block\">APP ID和APP Secret来自<a target=\"_blank\" href=\"https://mp.weixin.qq.com/\">微信公众平台</a>服务号内，在左侧栏【开发】-【基本配置】-【开发者ID】中。</div>
          ";
            }
            // line 136
            echo "        </div>
      </div>
      ";
            // line 138
            if (($context["type"] == "weixinmob")) {
                // line 139
                echo "      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"weixinmob_mp_secret\" >";
                // line 141
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "mp_secret_setting_label", array()), "html", null, true);
                echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"weixinmob_mp_secret\" name=\"weixinmob_mp_secret\" class=\"form-control\" value=\"";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : null), "weixinmob_mp_secret", array(), "array"), "html", null, true);
                echo "\">
          <p class=\"help-block\">";
                // line 145
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请填写微信提供的MP_verify文件中的内容"), "html", null, true);
                echo "</p>
        </div>
      </div>
      ";
            }
            // line 149
            echo "        <div class=\"form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"\">";
            // line 151
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录时必须设置邮箱"), "html", null, true);
            echo "</label>
          </div>
            <div class=\"controls col-md-8 radios\">    
              ";
            // line 154
            echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios(($context["type"] . "_set_fill_account"), array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : null), ($context["type"] . "_set_fill_account"), array(), "array"));
            echo "
                <p class=\"help-block\">";
            // line 155
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("在%admin_name%官方审核通过您的接入申请以前，请不要开启此选项，否则可能审核将无法通过", array("%admin_name%" => $this->getAttribute($context["client"], "admin_name", array()))), "html", null, true);
            echo "</p>
            </div>
        </div>
    </fieldset>
    ";
            // line 159
            if (($context["type"] == "weibo")) {
                // line 160
                echo "      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"\"></label>
        </div>

        <div class=\"controls col-md-8 radios\">
          <div class=\"help-block\"><a href=\"#port\">";
                // line 166
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最后一步,请在底部输入登录接口验证代码"), "html", null, true);
                echo "></a></div>
        </div>
      </div>
    ";
            }
            // line 170
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "  <fieldset>
    <legend id=\"port\" >";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录接口验证代码"), "html", null, true);
        echo "</legend>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"verify_code\" >";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("验证代码"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"verify_code\" name=\"verify_code\" class=\"form-control\" rows=\"5\">";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : null), "verify_code", array()), "html", null, true);
        echo "</textarea>
        <div class=\"help-block\">";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("在申请第三方登录接口时，会要求验证您的网站域名。请把相关验证代码粘到此处，然后提交保存。"), "html", null, true);
        echo "</div>
      </div>
    </div>
  </fieldset>
</fieldset>
  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
        echo "</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:login-connect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  424 => 190,  418 => 187,  408 => 180,  404 => 179,  398 => 176,  391 => 172,  388 => 171,  382 => 170,  375 => 166,  367 => 160,  365 => 159,  358 => 155,  354 => 154,  348 => 151,  344 => 149,  337 => 145,  333 => 144,  327 => 141,  323 => 139,  321 => 138,  317 => 136,  313 => 134,  311 => 133,  308 => 132,  306 => 131,  298 => 130,  290 => 127,  277 => 121,  269 => 118,  262 => 113,  258 => 111,  238 => 109,  235 => 108,  227 => 106,  224 => 105,  218 => 102,  216 => 101,  211 => 98,  208 => 97,  206 => 96,  202 => 95,  196 => 92,  190 => 89,  185 => 88,  181 => 87,  175 => 86,  166 => 80,  160 => 77,  154 => 74,  144 => 67,  138 => 64,  132 => 61,  124 => 56,  118 => 53,  112 => 50,  104 => 47,  98 => 44,  94 => 43,  88 => 40,  76 => 31,  70 => 28,  59 => 20,  55 => 19,  49 => 16,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
