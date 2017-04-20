<?php

/* TopxiaAdminBundle:Invite:set.html.twig */
class __TwigTemplate_731ff0d68142f5a26935c7e57b22095b684e72db7ae5782b419db2957713a2ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Invite:set.html.twig", 1);
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
        $context["menu"] = "admin_invite_set";
        // line 4
        $context["script_controller"] = "invite/setting";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
    <form class=\"form-horizontal\" method=\"post\" id=\"invite-form\">
      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邀请码设置"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-7 radios\">
          ";
        // line 14
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("invite_code_setting", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), (($this->getAttribute($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("invite"), "invite_code_setting", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("invite"), "invite_code_setting", array()), 0)) : (0)));
        echo "
        </div>
      </div>

      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"promoted_user_value\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("被邀请人注册奖励"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-7 radios\">
        <input type=\"text\" class=\"form-control width-input width-input-small\" id=\"promoted_user_value\" name=\"promoted_user_value\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inviteSetting"]) ? $context["inviteSetting"] : null), "promoted_user_value", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("元面值抵价优惠券 （可用于全站消费）"), "html", null, true);
        echo "
        </div>
      </div>

      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\" >
          <label for=\"promote_user_value\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邀请人邀请奖励"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-7 radios\">
        <input type=\"text\" class=\"form-control width-input width-input-small\" id=\"promote_user_value\"name=\"promote_user_value\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inviteSetting"]) ? $context["inviteSetting"] : null), "promote_user_value", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("元面值抵价优惠券 （可用于全站消费）"), "html", null, true);
        echo "
        </div>
      </div>

      <div class=\"row form-group\">
        <div class=\"control-label col-md-2\">
        </div>
        <div class=\"controls col-md-7 \"> 
          <div class=\"checkbox\">
            <input type=\"checkbox\" id=\"get_coupon_setting\" name=\"get_coupon_setting\" value=\"1\" ";
        // line 41
        if (($this->getAttribute((isset($context["inviteSetting"]) ? $context["inviteSetting"] : null), "get_coupon_setting", array()) == 1)) {
            echo " checked=\"checked\" ";
        }
        echo " >";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("被邀请人有消费行为后才能获得优惠券"), "html", null, true);
        echo "
          </div>
        </div>
      </div>

      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\" >
          <label for=\"deadline\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("优惠券有效时间"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-7 radios\">
          <input type=\"text\" class=\"form-control width-input width-input-small\" id=\"deadline\"name=\"deadline\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inviteSetting"]) ? $context["inviteSetting"] : null), "deadline", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("天 "), "html", null, true);
        echo "
        </div>
      </div>

      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\" style=\"white-space:nowrap;\">
          <label>";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邀请信息模板"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-7 radios\">
          <textarea class=\"form-control\" rows=\"5\" name=\"inviteInfomation_template\">";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["inviteInfomation_template"]) ? $context["inviteInfomation_template"] : null), "html", null, true);
        echo " </textarea>
        </div>
      </div>


      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\"></div>
        <div class=\"controls col-md-8\">
          <button type=\"submit\" class=\"btn btn-primary\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
        echo "</button>  
        </div>
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
    </form>

<div class=\"alert alert-info\">
  <p><strong>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("通知变量说明："), "html", null, true);
        echo "</strong></p>
  <ul>
    <li>";
        // line 78
        echo "{{siteName}}:";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网校名称"), "html", null, true);
        echo "</li>
    <li>";
        // line 79
        echo "{{registerUrl}}:";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册链接的地址"), "html", null, true);
        echo "</li>
  </ul>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Invite:set.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 79,  163 => 78,  158 => 76,  151 => 72,  144 => 68,  133 => 60,  127 => 57,  116 => 51,  110 => 48,  96 => 41,  82 => 32,  76 => 29,  65 => 23,  59 => 20,  50 => 14,  44 => 11,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
