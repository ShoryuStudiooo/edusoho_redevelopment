<?php

/* TopxiaAdminBundle:System:ip-blacklist.html.twig */
class __TwigTemplate_5029740e0d668ad5e2d277b4bf8bc1af11baff8618aeddac18b576dd5d14be30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:ip-blacklist.html.twig", 1);
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
        $context["menu"] = "admin_setting_ip_blacklist_manage";
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
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("IP黑名单"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-10\">
\t  <textarea id=\"blackListIps\" name=\"blackListIps\" rows=\"8\" class=\"form-control\">";
        // line 17
        if ((isset($context["blackListIps"]) ? $context["blackListIps"] : null)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blackListIps"]) ? $context["blackListIps"] : null), "ips", array()), "html", null, true);
        }
        echo "</textarea>
\t  <div class=\"help-block\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("一行一个IP，被加入黑名单的IP将被禁止访问！可使用通配符，例如：202.101.20.*。"), "html", null, true);
        echo "</div>
\t</div>

    ";
        // line 30
        echo "    
        <div class=\"col-md-2 control-label\"></div>
        <div class=\"controls col-md-10\">
          <button type=\"submit\" class=\"btn btn-primary\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
        echo "</button>
          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 34
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
        return "TopxiaAdminBundle:System:ip-blacklist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 34,  70 => 33,  65 => 30,  59 => 18,  53 => 17,  47 => 14,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
