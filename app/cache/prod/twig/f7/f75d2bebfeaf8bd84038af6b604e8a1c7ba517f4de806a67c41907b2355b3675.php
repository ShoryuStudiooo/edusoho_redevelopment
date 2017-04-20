<?php

/* TopxiaAdminBundle:System:refund.html.twig */
class __TwigTemplate_8c23d6d70cfac680039f810ab33f457e5d7f3b3264440d009e6593da41429a21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:refund.html.twig", 1);
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
        $context["menu"] = "admin_setting_refund";
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

<form class=\"form-horizontal\" method=\"post\" novalidate>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"max-refund-days-field\" >";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("退款期限"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8\">
      <input id=\"max-refund-days-field\" class=\"form-control\" name=\"maxRefundDays\" type=\"text\"   value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["refundSetting"]) ? $context["refundSetting"] : null), "maxRefundDays", array()), "html", null, true);
        echo "\">
      <div class=\"help-block\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户在退款期限的天数内，可以申请退款。退款期限为０，则不能申请退款。"), "html", null, true);
        echo "<br/><span style=\"color:red\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("系统不支持自动退款，请联系学员获得相关账户，手动处理退款相关事宜。"), "html", null, true);
        echo "</span></div>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"apply-notification-field\" >";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("退款申请通知"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8\">
      <textarea id=\"apply-notification-field\" class=\"form-control\" name=\"applyNotification\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["refundSetting"]) ? $context["refundSetting"] : null), "applyNotification", array()), "html", null, true);
        echo "</textarea>
      <div class=\"help-block\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("退款申请提交时，发送给用户的站内通知。"), "html", null, true);
        echo "</div>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"success-notification-field\" >";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("退款审核通过通知"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8\">
      <textarea id=\"success-notification-field\" class=\"form-control\" name=\"successNotification\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["refundSetting"]) ? $context["refundSetting"] : null), "successNotification", array()), "html", null, true);
        echo "</textarea>
      <div class=\"help-block\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理员审核退款通过时，发送给用户的站内通知。"), "html", null, true);
        echo "</div>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"failed-notification-field\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("退款审核未通过通知"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8\">
      <textarea id=\"failed-notification-field\" class=\"form-control\" name=\"failedNotification\">";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["refundSetting"]) ? $context["refundSetting"] : null), "failedNotification", array()), "html", null, true);
        echo "</textarea>
      <div class=\"help-block\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理员审核退款未通过时，发送给用户的站内通知。"), "html", null, true);
        echo "</div>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
        echo "</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

<div class=\"alert alert-info\">
  <p><strong>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("通知变量说明："), "html", null, true);
        echo "</strong></p>
  <ul>
    <li>";
        // line 62
        echo "{{item}}";
        echo ": ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("需退款的课程或班级"), "html", null, true);
        echo "</li>
    <li>";
        // line 63
        echo "{{amount}}";
        echo ": ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("退款金额"), "html", null, true);
        echo "</li>
  </ul>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:refund.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 63,  142 => 62,  137 => 60,  130 => 56,  124 => 53,  114 => 46,  110 => 45,  104 => 42,  95 => 36,  91 => 35,  85 => 32,  76 => 26,  72 => 25,  66 => 22,  55 => 16,  51 => 15,  45 => 12,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
