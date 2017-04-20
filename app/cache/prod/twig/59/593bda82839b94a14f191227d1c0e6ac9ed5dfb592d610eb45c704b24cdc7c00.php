<?php

/* TopxiaAdminBundle:System:mobile.setting.html.twig */
class __TwigTemplate_74c3d2584562de341ee6579ebba9110dbe7f2bf072efea4c5e1312cdeac863e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:mobile.setting.html.twig", 1);
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
        $context["menu"] = "admin_setting_mobile_settings";
        // line 5
        $context["script_controller"] = "setting/mobile";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "<style>
#mobile-splash1-container img ,
#mobile-splash2-container img ,
#mobile-splash3-container img ,
#mobile-splash4-container img ,
#mobile-splash5-container img ,
#mobile-logo-container img ,
#site-appcover-container img,
#site-applogo-container img
{max-width: 80%; margin-bottom: 10px;}
</style>

";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" id=\"mobile-form\" method=\"post\">

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label >";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("是否开启客户端"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 30
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "enabled", array()));
        echo "
      <div class=\"help-block\">1.开启后，可将<a target=\"_blank\" href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mobile");
        echo "\">移动端首页</a>（域名/mobile）地址添加到网站顶部导航中</div>
      <div class=\"help-block\">2.移动端轮播图、发现页模块等内容，点击<a target=\"_blank\" href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_operation_mobile");
        echo "\">这里</a>进行设置</div>
    </div>
  </div>
  
  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"mobile_about\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网校简介"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8\">
      <textarea class=\"form-control\" id=\"mobile_about\" rows=\"10\" name=\"about\" data-image-upload-url=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeUpoadToken("default"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "about", array()), "html", null, true);
        echo "</textarea>
      <div class=\"help-block\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("此简介将显示在移动客户端的\"关于网校"), "html", null, true);
        echo "\"</div>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"logo\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网校LOGO"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-logo-container\">";
        // line 51
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "logo", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "logo", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-logo-upload\" data-upload-token=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\" data-goto-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_upload", array("type" => "logo"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传"), "html", null, true);
        echo "</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-logo-remove\" type=\"button\" data-url=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_remove", array("type" => "logo"));
        echo "\" ";
        if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "logo", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "</button>
      <p class=\"help-block\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请上传png, gif, jpg格式的图片文件。LOGO图片的高度建议不要超过50px。"), "html", null, true);
        echo "</p>
      <input type=\"hidden\" name=\"logo\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "logo", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  ";
        // line 68
        echo "
";
        // line 69
        if ((((isset($context["mobileCode"]) ? $context["mobileCode"] : null) != "edusoho") && ((isset($context["mobileCode"]) ? $context["mobileCode"] : null) != "edusohov3"))) {
            // line 70
            echo "  <fieldset>
    <legend>";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("定制APP设置项"), "html", null, true);
            echo "</legend>
      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"appname\">";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("APP名称"), "html", null, true);
            echo "</label>
        </div>
        <div class=\"col-md-8 controls\">
        <input type=\"text\" class=\"form-control\" name=\"appname\" value=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appname", array()), "html", null, true);
            echo "\" >
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"appabout\">";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("APP简介"), "html", null, true);
            echo "</label>
        </div>
        <div class=\"col-md-8 controls\">
        <input type=\"text\" class=\"form-control\" name=\"appabout\" value=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appabout", array()), "html", null, true);
            echo "\">
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"applogo\">";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("APP图标"), "html", null, true);
            echo "</label>
        </div>
        <div class=\"col-md-8 controls\">

         <div id=\"site-applogo-container\" class=\"mbl\">";
            // line 96
            if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "applogo", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "applogo", array())), "html", null, true);
                echo "\">";
            }
            echo "</div>
          <a class=\"btn btn-default btn-sm\" id=\"site-applogo-upload\" data-upload-token=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeUpoadToken("system", "image"), "html", null, true);
            echo "\"
          data-goto-url=\"";
            // line 98
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_upload", array("type" => "applogo"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传"), "html", null, true);
            echo "</a>
          <button class=\"btn btn-default btn-sm\" id=\"site-applogo-remove\" type=\"button\"
          data-url=\"";
            // line 100
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_remove", array("type" => "applogo"));
            echo "\" ";
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "applogo", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
            echo "</button>
          <p class=\"help-block\">";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请上传png, gif, jpg格式的图片文件。推荐尺寸 120*120。"), "html", null, true);
            echo "</p>
           <input type=\"hidden\" name=\"applogo\" value=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "applogo", array()), "html", null, true);
            echo "\">
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"appcover\">";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("APP封面"), "html", null, true);
            echo "</label>
        </div>
        <div class=\"col-md-8 controls\">
         <div id=\"site-appcover-container\" class=\"mbl\">";
            // line 111
            if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appcover", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appcover", array())), "html", null, true);
                echo "\">";
            }
            echo "</div>
          <a class=\"btn btn-default btn-sm\" id=\"site-appcover-upload\" data-upload-token=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeUpoadToken("system", "image"), "html", null, true);
            echo "\"
          data-goto-url=\"";
            // line 113
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_upload", array("type" => "appcover"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传"), "html", null, true);
            echo "</a>
          <button class=\"btn btn-default btn-sm\" id=\"site-appcover-remove\" type=\"button\"
          data-url=\"";
            // line 115
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_remove", array("type" => "appcover"));
            echo "\" ";
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appcover", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
            echo "</button>
          <p class=\"help-block\">";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请上传png, gif, jpg格式的图片文件。推荐尺寸 225*400。"), "html", null, true);
            echo "</p>
          <input type=\"hidden\" name=\"appcover\" value=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appcover", array()), "html", null, true);
            echo "\">
        </div>

      </div>
  </fieldset>
";
        }
        // line 123
        echo "
 <fieldset>
  <legend>";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("设置启动图"), "html", null, true);
        echo "</legend>
  <div class=\"help-block\">";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最多允许设置5张启动图(尺寸为640*960)，用户首次登录网校时会显示启动图。"), "html", null, true);
        echo "</div>
  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash1\">";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("启动图1"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash1-container\">";
        // line 132
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash1", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash1", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-splash1-upload\" data-upload-token=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\"data-goto-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash1"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传"), "html", null, true);
        echo "</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash1-remove\" type=\"button\" data-url=\"";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash1"));
        echo "\" ";
        if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash1", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "</button>
      <p class=\"help-block\">";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请上传png, gif, jpg格式的图片文件"), "html", null, true);
        echo "。</p>
      <input type=\"hidden\" name=\"splash1\" value=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash1", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash2\">";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("启动图2"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash2-container\">";
        // line 145
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash2", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash2", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-splash2-upload\" data-upload-token=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\" data-goto-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash2"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传"), "html", null, true);
        echo "</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash2-remove\" type=\"button\" data-url=\"";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash2"));
        echo "\" ";
        if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash2", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "</button>
      <p class=\"help-block\">";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请上传png, gif, jpg格式的图片文件。"), "html", null, true);
        echo "</p>
      <input type=\"hidden\" name=\"splash2\" value=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash2", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash3\">";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("启动图3"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash3-container\">";
        // line 158
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash3", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash3", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-splash3-upload\" data-upload-token=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\" data-goto-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash3"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传"), "html", null, true);
        echo "</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash3-remove\" type=\"button\" data-url=\"";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash3"));
        echo "\" ";
        if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash3", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "</button>
      <p class=\"help-block\">";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请上传png, gif, jpg格式的图片文件。"), "html", null, true);
        echo "</p>
      <input type=\"hidden\" name=\"splash3\" value=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash3", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash4\">";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("启动图4"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash4-container\">";
        // line 171
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash4", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash4", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-splash4-upload\" data-upload-token=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\" data-goto-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash4"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传"), "html", null, true);
        echo "</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash4-remove\" type=\"button\" data-url=\"";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash4"));
        echo "\" ";
        if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash4", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "</button>
      <p class=\"help-block\">";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请上传png, gif, jpg格式的图片文件。"), "html", null, true);
        echo "</p>
      <input type=\"hidden\" name=\"splash4\" value=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash4", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash5\">";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("启动图5"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash5-container\">";
        // line 184
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash5", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash5", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-splash5-upload\" data-upload-token=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\" data-goto-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash5"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传"), "html", null, true);
        echo "</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash5-remove\" type=\"button\" data-url=\"";
        // line 186
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash5"));
        echo "\" ";
        if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash5", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "</button>
      <p class=\"help-block\">";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请上传png, gif, jpg格式的图片文件。"), "html", null, true);
        echo "</p>
      <input type=\"hidden\" name=\"splash5\" value=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash5", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  </fieldset>



  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  
  <div class=\"row form-group\">
    <div class=\"controls col-md-offset-2 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
        echo "</button>
    </div>
  </div>

</form>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:mobile.setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  535 => 200,  528 => 196,  517 => 188,  513 => 187,  503 => 186,  495 => 185,  487 => 184,  481 => 181,  472 => 175,  468 => 174,  458 => 173,  450 => 172,  442 => 171,  436 => 168,  427 => 162,  423 => 161,  413 => 160,  405 => 159,  397 => 158,  391 => 155,  382 => 149,  378 => 148,  368 => 147,  360 => 146,  352 => 145,  346 => 142,  337 => 136,  333 => 135,  323 => 134,  315 => 133,  307 => 132,  301 => 129,  295 => 126,  291 => 125,  287 => 123,  278 => 117,  274 => 116,  264 => 115,  257 => 113,  253 => 112,  245 => 111,  239 => 108,  230 => 102,  226 => 101,  216 => 100,  209 => 98,  205 => 97,  197 => 96,  190 => 92,  181 => 86,  175 => 83,  166 => 77,  160 => 74,  154 => 71,  151 => 70,  149 => 69,  146 => 68,  139 => 55,  135 => 54,  125 => 53,  117 => 52,  109 => 51,  103 => 48,  94 => 42,  88 => 41,  82 => 38,  73 => 32,  69 => 31,  65 => 30,  59 => 27,  50 => 21,  36 => 9,  33 => 8,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
