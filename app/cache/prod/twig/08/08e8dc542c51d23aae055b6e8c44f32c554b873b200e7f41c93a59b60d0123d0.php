<?php

/* TopxiaAdminBundle:Group:set.html.twig */
class __TwigTemplate_df3d200bcf530c8ee79eb139e8b6c5c6b52cefeb946ddc604eddedd734465ec1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Group:set.html.twig", 1);
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
        $context["menu"] = "admin_group_set";
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
            <form class=\"form-horizontal\" method=\"post\" id=\"member-zone-form\" novalidate>
           
            <div class=\"row form-group\">
              <div class=\"col-md-2 control-label\">
                <label >";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("首页显示小组信息"), "html", null, true);
        echo "</label>
              </div>
              <div class=\"controls col-md-7 radios\">
                ";
        // line 15
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("group_show", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("显示"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("不显示")), (($this->getAttribute($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("group"), "group_show", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("group"), "group_show", array()), 1)) : (1)));
        echo "
                <div class=\"help-block\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("此功能开关只针对默认主题、默认主题B、清秋主题。"), "html", null, true);
        echo "</div>
              </div>
            </div>

           <div class=\"row form-group\">
              <div class=\"col-md-2 control-label\">
                <label >";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最热话题的时间范围"), "html", null, true);
        echo "</label>
              </div>
              <div class=\"controls col-md-7 radios\">
                ";
        // line 25
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("threadTime_range", array("1" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("天"), "7" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("周"), "14" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("两周"), "30" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("月")), (($this->getAttribute($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("group"), "threadTime_range", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("group"), "threadTime_range", array()), "7")) : ("7")));
        echo "
                <div class=\"help-block\"></div>
              </div>
            </div>

            <div class=\"row form-group\">
              <div class=\"col-md-2 control-label\"></div>
              <div class=\"controls col-md-8\">
                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
        echo "</button>  
              </div>
            </div>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
          </form>
      ";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Group:set.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 37,  81 => 33,  70 => 25,  64 => 22,  55 => 16,  51 => 15,  45 => 12,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
