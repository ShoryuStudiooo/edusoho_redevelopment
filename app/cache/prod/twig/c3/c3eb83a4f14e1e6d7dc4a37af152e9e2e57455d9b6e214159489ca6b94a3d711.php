<?php

/* TopxiaAdminBundle:System:security.html.twig */
class __TwigTemplate_26908c14b14ea7d84946170eca56acdc715b7d6bc800d3386c6e5cb90bb74dfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:security.html.twig", 1);
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
        $context["menu"] = "admin_setting_security";
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

<form class=\"form-horizontal\" method=\"post\">
  <fieldset>
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label >";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("IFrame白名单域名"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-10\">
        <textarea name=\"safe_iframe_domains\" rows=\"8\" class=\"form-control\">";
        // line 16
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["security"]) ? $context["security"] : null), "safe_iframe_domains", array()), "
"), "html", null, true);
        echo "</textarea>
        <div class=\"help-block\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("在课程简介、课时内容等区域允许添加iframe代码，以引入第三方网站的组件。为保障网校安全，只允许白名单域名范围内的iframe网址。一行一个域名，请不要添加http://前缀。"), "html", null, true);
        echo "</div>
    </div>
    <div class=\"col-md-2 control-label\"></div>
      <div class=\"controls col-md-10\">
        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
        echo "</button>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      </div>
    </div>
  </fieldset>
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  64 => 21,  57 => 17,  52 => 16,  46 => 13,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
