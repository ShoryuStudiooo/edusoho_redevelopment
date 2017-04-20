<?php

/* TopxiaAdminBundle:Block/Tag:text.html.twig */
class __TwigTemplate_9742323a009f12ee80bfe9080feeecd7c7b0edae896e126cb92ed0aaf4a1b0a8 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("文本"), "html", null, true);
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
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block/Tag:text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
