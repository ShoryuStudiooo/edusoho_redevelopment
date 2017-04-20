<?php

/* TopxiaAdminBundle:System:esbar-setting.html.twig */
class __TwigTemplate_ab6d2b882befd1668c44409d4ffa0625c74dc3932ddd7baa5b59f45cbc9a7246 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:esbar-setting.html.twig", 1);
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
        $context["menu"] = "admin_setting_es_bar";
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

<form class=\"form-horizontal\" method=\"post\" id=\"esbar-setting-form\" novalidate>
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label >";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("侧边栏功能"), "html", null, true);
        echo "</label>

    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 16
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), $this->getAttribute((isset($context["esBar"]) ? $context["esBar"] : null), "enabled", array()));
        echo "
      <p class=\"help-block\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网校开启侧边栏后，客服的悬浮框会失效"), "html", null, true);
        echo "</p>
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
        echo "</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:esbar-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 27,  66 => 24,  56 => 17,  52 => 16,  45 => 12,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
