<?php

/* TopxiaAdminBundle:System:mailer.html.twig */
class __TwigTemplate_ed225a46bb0bb147a956c978003e06e6db4a80db9989a3c0bfe5fd4a08c0710c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:mailer.html.twig", 1);
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
        $context["script_controller"] = "system/mailer";
        // line 4
        $context["script_arguments"] = array("registerEmailVerified" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("auth.email_enabled", "closed"));
        // line 6
        $context["menu"] = "admin_setting_mailer";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "  ";
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isTrial()) {
            // line 10
            echo "    <div class=\"row form-group\">
      <div class=\"help-block\">
        </br></br>
        <script>
          var _hmt = _hmt || [];
        </script>
        <script charset=\"utf-8\" src=\"http://wpa.b.qq.com/cgi/wpa.php\"></script>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
            echo "\">
        <p style = \"text-align:center;font-size:16px\">";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("当前版本为试⽤版,不能进⾏邮件服务设置。如需购买授权版,请联系销售人员。"), "html", null, true);
            echo "
          ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("电话："), "html", null, true);
            echo "4008041114 ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("或"), "html", null, true);
            echo "
          <span id=\"BizQQWPA\" onclick=\"_hmt.push(['_trackEvent', 'advisory', 'click', 'qq'])\"><a id=\"BizQQWPA\" href=\"javascript:\" style='text-decoration:none;'>QQ：800023860 </a>。</span>
        </p>
        <script type=\"text/javascript\">
          BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'});
        </script>
        </br>
      </div>
    </div>
  ";
        } else {
            // line 30
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
            echo "
    <form class=\"form-horizontal\" method=\"post\" id=\"mailer-form\" ";
            // line 31
            echo "novalidate data-user-setting=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_auth");
            echo "\">
      ";
            // line 32
            if (((isset($context["status"]) ? $context["status"] : null) == "cloud_email_crm")) {
                // line 33
                echo "        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label >";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("云邮件"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8 mts\">
            <span class=\"text-success\">已启用</span>
            <p class=\"help-block\">邮件营销，本应如此简单。<a href=\"";
                // line 39
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edu_cloud_email");
                echo "\">点击这里</a>查看云邮件使用情况</p>
          </div>
        </div>
      ";
            } else {
                // line 43
                echo "        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label>";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("云邮件"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8 mts\">
            <a href=\"";
                // line 48
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edu_cloud_email");
                echo "\" class=\"prl\">使用云邮件</a>
            <a href=\"http://open.edusoho.com/show/cloud/email\" target=\"_blank\">了解云邮件优势</a>
            <p class=\"help-block\">
              ";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("不限制每日邮件发送量，想发多少发多少。"), "html", null, true);
                echo "
            </p>
            <p class=\"help-block\">
              ";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("99%到达率，毫秒级响应，让你快速安全的与学员保持沟通。"), "html", null, true);
                echo "
            </p>
            <p class=\"help-block\">
              ";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("完善的数据分析能力，让您更从容地管理邮件。"), "html", null, true);
                echo "
            </p>
            <p class=\"help-block\">
              ";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("与EduSoho无缝整合，无需技术对接即可享受高质量的EDM服务。"), "html", null, true);
                echo "
            </p>
          </div>
        </div>
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label >";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邮件发送"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8 radios\">
            ";
                // line 69
                echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : null), "enabled", array()));
                echo "
            <p class=\"help-block\">";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("需要登录邮箱，并在邮箱设置中开启smtp服务才能发送验证邮件"), "html", null, true);
                echo "</p>
          </div>
        </div>

        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"host\">SMTP";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("服务器地址"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8\">
            <input type=\"text\" id=\"host\" name=\"host\" class=\"form-control\" value=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : null), "host", array()), "html", null, true);
                echo "\">
            <p class=\"help-block\">
              ";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("每种邮箱的地址都不相同，请根据使用的邮箱类型，查找邮箱服务器地址，如：smtp.yourmail.com"), "html", null, true);
                echo "
              ";
                // line 82
                if (( !$this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.owned") || ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.thirdCopyright") == "2"))) {
                    // line 83
                    echo "                <a href=\"http://www.qiqiuyu.com/article/785\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("常用邮箱配置文档"), "html", null, true);
                    echo "</a>
              ";
                }
                // line 85
                echo "            </p>
          </div>
        </div>
        <p></p>
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"port\">";
                // line 91
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SMTP端口号"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8\">
            <input type=\"text\" id=\"port\" name=\"port\" class=\"form-control\" value=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : null), "port", array()), "html", null, true);
                echo "\">
            <p class=\"help-block\">";
                // line 95
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("通常端口号为"), "html", null, true);
                echo "25</p>
          </div>
        </div>
        <p></p>
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"username\" >";
                // line 101
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SMTP用户名"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8\">
            <input type=\"text\" id=\"username\" name=\"username\" class=\"form-control\" value=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : null), "username", array()), "html", null, true);
                echo "\">
            <p class=\"help-block\">";
                // line 105
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正确格式应为"), "html", null, true);
                echo "abc@mail.com</p>
          </div>
        </div>
        <p></p>

        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"password\" >";
                // line 112
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SMTP密码"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8\">
            <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" value=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : null), "password", array()), "html", null, true);
                echo "\">
            <p class=\"help-block\">";
                // line 116
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("smtp密码：即邮箱密码/客户端授权密码"), "html", null, true);
                echo "</p>
          </div>
        </div>
        <p></p>

        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"from\" >";
                // line 123
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发信人地址"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8\">
            <input type=\"text\" id=\"from\" name=\"from\" class=\"form-control\" value=\"";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : null), "from", array()), "html", null, true);
                echo "\">
            <p class=\"help-block\">";
                // line 127
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正确格式应为"), "html", null, true);
                echo "abc@mail.com</p>
          </div>
        </div>
        <p></p>

        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"name\" >";
                // line 134
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发信人名称"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8\">
            <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" value=\"";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : null), "name", array()), "html", null, true);
                echo "\">
          </div>
        </div>
        <p></p>
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\"></div>
          <div class=\"controls col-md-8\">
            <button type=\"submit\" class=\"btn btn-primary\">";
                // line 144
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
                echo "</button>
            ";
                // line 145
                if ($this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : null), "enabled", array())) {
                    // line 146
                    echo "              <a class=\"btn btn-primary js-self-test\" data-url=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mailer_test");
                    echo "\" href=\"javascript:;\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("验证"), "html", null, true);
                    echo "</a>
              <div class=\"mtl ptm\">
                <div class=\"alert alert-info\" role=\"alert\">
                  ";
                    // line 149
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("验证时会给当前用户发送验证邮件，请确保当前用户邮箱为正确邮箱且邮箱服务器设置已提交保存。"), "html", null, true);
                    echo "
                </div>
              </div>
            ";
                }
                // line 153
                echo "          </div>
        </div>
      ";
            }
            // line 156
            echo "      <input type=\"hidden\" name=\"email-setting-status\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : null), "html", null, true);
            echo "\">
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 157
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
            echo "\">
    </form>

  ";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:mailer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 157,  319 => 156,  314 => 153,  307 => 149,  298 => 146,  296 => 145,  292 => 144,  282 => 137,  276 => 134,  266 => 127,  262 => 126,  256 => 123,  246 => 116,  242 => 115,  236 => 112,  226 => 105,  222 => 104,  216 => 101,  207 => 95,  203 => 94,  197 => 91,  189 => 85,  183 => 83,  181 => 82,  177 => 81,  172 => 79,  166 => 76,  157 => 70,  153 => 69,  147 => 66,  138 => 60,  132 => 57,  126 => 54,  120 => 51,  114 => 48,  108 => 45,  104 => 43,  97 => 39,  90 => 35,  86 => 33,  84 => 32,  79 => 31,  74 => 30,  59 => 20,  55 => 19,  51 => 18,  41 => 10,  38 => 9,  35 => 8,  31 => 1,  29 => 6,  27 => 4,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
