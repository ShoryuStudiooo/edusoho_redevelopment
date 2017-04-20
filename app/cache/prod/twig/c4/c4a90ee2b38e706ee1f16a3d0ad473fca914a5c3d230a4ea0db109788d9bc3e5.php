<?php

/* TopxiaAdminBundle:Wap:set.html.twig */
class __TwigTemplate_5de531934560979e91a9e638f02d4f1d3c0cd42822596ffc038a14c323e13801 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Wap:set.html.twig", 1);
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
        $context["menu"] = "admin_wap_set";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
  ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

  <form class=\"form-horizontal\" method=\"post\" id=\"wap-setting-form\" novalidate>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label >";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("手机微网校"), "html", null, true);
        echo "</label>

      </div>
      <div class=\"controls col-md-7 radios\">
        ";
        // line 16
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), $this->getAttribute((isset($context["wapSetting"]) ? $context["wapSetting"] : null), "enabled", array()));
        echo "
        <p class=\"help-block\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启后，网校在手机浏览器和微信上默认使用微网校进行显示"), "html", null, true);
        echo "</p>
        <p class=\"help-block\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭后，使用网页响应式的方式进行显示"), "html", null, true);
        echo "</p>
      </div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\"></div>
      <div class=\"controls col-md-8\">
        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
        echo "</button>
      </div>
    </div>
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Wap:set.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 28,  70 => 25,  60 => 18,  56 => 17,  52 => 16,  45 => 12,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
