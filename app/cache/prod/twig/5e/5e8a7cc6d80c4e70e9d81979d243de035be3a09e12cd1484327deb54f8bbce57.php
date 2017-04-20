<?php

/* TopxiaAdminBundle:Block/Tag:img.html.twig */
class __TwigTemplate_395e82692d09fd0b5299ed5d2495e85fad1929d8366a5da5e0d644bac473771f extends Twig_Template
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
        echo "][src]\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("图片"), "html", null, true);
        echo "</label>
    <div class=\"col-md-7 col-xs-7\">
      <input class=\"form-control\" type=\"text\" name=\"data[";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (isset($context["dataId"]) ? $context["dataId"] : null), "html", null, true);
        echo "][src]\" id=\"data[";
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (isset($context["dataId"]) ? $context["dataId"] : null), "html", null, true);
        echo "][src]\" data-role=\"img-url\" value=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "src", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "src", array()), "")) : ("")), "html", null, true);
        echo "\">
    </div>
    <div class=\"col-md-2 col-xs-2\">
      <div class=\"btn btn-default btn-sm img-upload webuploader-container\" id=\"item-";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
        echo "-uploadId-";
        echo twig_escape_filter($this->env, (isset($context["dataId"]) ? $context["dataId"] : null), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_block_picture_upload", array("blockId" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "id", array()), "code" => (isset($context["code"]) ? $context["code"] : null))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传"), "html", null, true);
        echo "</div>
    </div>
 </div>

 <div class=\"form-group\">
    <label class=\"control-label col-md-3 col-xs-3\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("打开新窗口"), "html", null, true);
        echo "</label>
    <label class=\"checkbox-inline\"><input type=\"radio\" data-role=\"radio-yes\" name=\"data[";
        // line 13
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
        // line 14
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
        return "TopxiaAdminBundle:Block/Tag:img.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 14,  63 => 13,  59 => 12,  45 => 7,  31 => 4,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
