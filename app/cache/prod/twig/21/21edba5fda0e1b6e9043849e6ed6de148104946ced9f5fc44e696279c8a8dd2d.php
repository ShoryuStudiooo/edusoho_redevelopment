<?php

/* TopxiaAdminBundle:System:post-num-rules.html.twig */
class __TwigTemplate_05c9350f4e0096563408c7675d584092c8071f2b6f7ab4df9936a0771b95a48a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:post-num-rules.html.twig", 1);
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
        $context["script_controller"] = "system/post-num-rules";
        // line 4
        $context["menu"] = "admin_setting_post_num_rules_settings";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form id='post-num-rules-form' class=\"form-horizontal\" method=\"post\" novalidate>

  <fieldset>
    <div class=\"form-group\">
      <div class=\"col-md-5 control-label\">
        <label >";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("同一IP，5分钟内最多发帖次数（包含回复数）"), "html", null, true);
        echo "</label>
        <label style=\"display:none\" for=\"thread-post-num-for-ip\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发帖次数"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-6\">
        <input type=\"hidden\" name=\"setting[rules][thread][fiveMuniteRule][interval]\" class=\"form-control\" value=\"300\">
        <input id=\"thread-post-num-for-ip\" type=\"text\" name=\"setting[rules][thread][fiveMuniteRule][postNum]\" class=\"form-control\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("post_num_rules"), "rules", array(), "any", false, true), "thread", array(), "any", false, true), "fiveMuniteRule", array(), "any", false, true), "postNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("post_num_rules"), "rules", array(), "any", false, true), "thread", array(), "any", false, true), "fiveMuniteRule", array(), "any", false, true), "postNum", array()), "")) : ("")), "html", null, true);
        echo "\">
        <div class=\"help-block\" style=\"\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发帖次数必须大于或者等于0的整数，0表示不限制"), "html", null, true);
        echo "</div>
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-5 control-label\">
        <label>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("同一用户，5分钟内最多发帖次数（包含回复数）"), "html", null, true);
        echo "</label>
        <label style=\"display:none\" for=\"thread-post-num-for-user\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发帖次数"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-6\">
        <input type=\"hidden\" name=\"setting[rules][threadLoginedUser][fiveMuniteRule][interval]\" class=\"form-control\" value=\"300\">
        <input id=\"thread-post-num-for-user\" type=\"text\" name=\"setting[rules][threadLoginedUser][fiveMuniteRule][postNum]\" class=\"form-control\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("post_num_rules"), "rules", array(), "any", false, true), "threadLoginedUser", array(), "any", false, true), "fiveMuniteRule", array(), "any", false, true), "postNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("post_num_rules"), "rules", array(), "any", false, true), "threadLoginedUser", array(), "any", false, true), "fiveMuniteRule", array(), "any", false, true), "postNum", array()), "")) : ("")), "html", null, true);
        echo "\">
        <div class=\"help-block\" style=\"\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发帖次数必须大于或者等于0的整数，0表示不限制"), "html", null, true);
        echo "</div>
      </div>
    </div>
  </fieldset>

  <div class=\"form-group\">
    <div class=\"col-md-4 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
        echo "</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:post-num-rules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 43,  95 => 39,  84 => 31,  80 => 30,  73 => 26,  69 => 25,  61 => 20,  57 => 19,  50 => 15,  46 => 14,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
