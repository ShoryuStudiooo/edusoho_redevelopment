<?php

/* ClassroomBundle:ClassroomAdmin:set.html.twig */
class __TwigTemplate_4874dd179a1dfed668ded92d0ecccf586630f9d964abfbc13088033fbc26328e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "ClassroomBundle:ClassroomAdmin:set.html.twig", 1);
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
        $context["menu"] = "admin_classroom_setting";
        // line 5
        $context["script_controller"] = "classroombundle/controller/classroom-admin/set";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
  ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

  <form class=\"form-horizontal\" method=\"post\" id=\"member-zone-form\" novalidate>
    
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label >";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级称谓设置"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-4\">
        <input name=\"name\" type=\"text\" class=\"form-control\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (($this->getAttribute($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom"), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom"), "name", array()), "")) : ("")), "html", null, true);
        echo "\"/>
        <div class=\"help-block\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户所能看到的是这里设置的称谓"), "html", null, true);
        echo "</div>
      </div>
    </div>

    <div class=\"alert alert-warning col-md-offset-2\" role=\"alert\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请注意：以下设置涉及到班级的基本运作模式，请谨慎设置，且不要经常性变更！"), "html", null, true);
        echo "
    </div>
    
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label >";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程重合时抵扣购买"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-7 radios\">
        ";
        // line 31
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("discount_buy", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("是"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("否")), (($this->getAttribute($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom"), "discount_buy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom"), "discount_buy", array()), 1)) : (1)));
        echo "
        <div class=\"help-block\"><p>购买班级时，如果已经购买过其中的课程，支付金额中将会扣除该课程的当前价格。反之，支付金额不受影响，以班级原价购买。</p>
        </div>
      </div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label >";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级列表页默认排序"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-7 radios\">
        ";
        // line 42
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("explore_default_orderBy", array("createdTime" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最新"), "studentNum" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最热"), "recommendedSeq" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("推荐")), $this->getAttribute((isset($context["classroomSetting"]) ? $context["classroomSetting"] : null), "explore_default_orderBy", array()));
        echo "
        <p class=\"help-block\"><a target=\"_blank\" href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_explore");
        echo "\">班级列表页</a>地址：域名/classroom/explore,任何人都可在此页面查看网站所有已发布班级,如需设置网站首页班级排序，请到【站点设置】-【主题】-【管理】中设置，目前仅简墨和雅致简洁主题支持。</p>
      </div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"></div>
      <div class=\"controls col-md-8\">
        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
        echo "</button>  
      </div>
    </div>
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomAdmin:set.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 53,  110 => 50,  100 => 43,  96 => 42,  90 => 39,  79 => 31,  73 => 28,  65 => 23,  58 => 19,  54 => 18,  48 => 15,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
