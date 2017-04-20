<?php

/* TopxiaAdminBundle:Block/Tag:link.html.twig */
class __TwigTemplate_22cdab4e01fef151fbe6be2280d286cbb807f5db95a6fb269553a61c5e7ecb4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"form-group\">
  <label class=\"control-label col-md-3 col-xs-3\" for=\"data[";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (isset($context["dataId"]) ? $context["dataId"] : null), "html", null, true);
        echo "][value]\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("链接文本"), "html", null, true);
        echo "</label>
  <div class=\"col-md-9 col-xs-9\">
    <input class=\"form-control js-label-input\" type=\"text\" name=\"data[";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (isset($context["dataId"]) ? $context["dataId"] : null), "html", null, true);
        echo "][value]\" value=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array()), "")) : ("")), "html", null, true);
        echo "\">
  </div>
 </div>
 <div class=\"form-group\">
  <label class=\"control-label col-md-3 col-xs-3\" for=\"data[";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (isset($context["dataId"]) ? $context["dataId"] : null), "html", null, true);
        echo "][href]\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("链接地址"), "html", null, true);
        echo "</label>
  <div class=\"col-md-9 col-xs-9\">
    <input class=\"form-control\" type=\"text\" name=\"data[";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (isset($context["dataId"]) ? $context["dataId"] : null), "html", null, true);
        echo "][href]\" value=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "href", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "href", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getScheme", array(), "method"), "html", null, true);
        echo "://\" >
  </div>
 </div>
 <div class=\"form-group\">
  <label class=\"control-label col-md-3 col-xs-3\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("打开新窗口"), "html", null, true);
        echo "</label>
  <label class=\"checkbox-inline\"><input type=\"radio\" data-role=\"radio-yes\" name=\"data[";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (isset($context["dataId"]) ? $context["dataId"] : null), "html", null, true);
        echo "][target]\" value=\"_blank\" ";
        if (((($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "target", array()), "_self")) : ("_self")) == "_blank")) {
            echo " checked=\"checked\" ";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("是"), "html", null, true);
        echo "</label>
  <label class=\"checkbox-inline\"><input type=\"radio\" data-role=\"radio-no\" name=\"data[";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (isset($context["dataId"]) ? $context["dataId"] : null), "html", null, true);
        echo "][target]\" value=\"_self\" ";
        if (((($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "target", array()), "_self")) : ("_self")) == "_self")) {
            echo " checked=\"checked\" ";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("否"), "html", null, true);
        echo "</label>
 </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block/Tag:link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 16,  68 => 15,  64 => 14,  51 => 10,  42 => 8,  31 => 4,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
