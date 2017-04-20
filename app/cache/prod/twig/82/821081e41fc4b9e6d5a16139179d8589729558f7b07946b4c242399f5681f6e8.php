<?php

/* TopxiaAdminBundle:System:user-fields.modal.html.twig */
class __TwigTemplate_4197c1335870ee9c4fbddc7eb830ff36c8c184ab1b6a992ec8785e826b840db4 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"myModal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
        <h4 class=\"modal-title\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加字段"), "html", null, true);
        echo "</h4>
      </div>
      <form method=\"post\" class=\"form-horizontal\" id=\"field-form\" action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_user_fields_add");
        echo "\">
      <div class=\"modal-body\">
            
            <div class=\"form-group \"> 
             <label class=\"col-md-4 control-label\" for=
             \"field_title\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("字段名称"), "html", null, true);
        echo "</label>
              <div class=\"col-md-6 controls\">
              <input type=\"text\"  name=\"field_title\" id=\"field_title\"  class=\"form-control\" value=\"\">
              </div>
            </div>

            <div class=\"form-group \"> 
             <label class=\"col-md-4 control-label\" for=\"field_type\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("字段类型"), "html", null, true);
        echo "</label>
              <div class=\"col-md-6 controls\">
                  <select class=\"form-control\" name=\"field_type\" id=\"field_type\">
                    <option value=\"\" num=\"\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请选择"), "html", null, true);
        echo "</option>
                    <option value =\"varchar\" num=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("还可以添加%varcharCount%个字段", array("%varcharCount%" => (10 - (isset($context["varcharCount"]) ? $context["varcharCount"] : null)))), "html", null, true);
        echo "\" ";
        if (((isset($context["varcharCount"]) ? $context["varcharCount"] : null) == 10)) {
            echo "disabled=\"disabled\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("文本"), "html", null, true);
        if (((isset($context["varcharCount"]) ? $context["varcharCount"] : null) == 10)) {
            echo "(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已满10个"), "html", null, true);
            echo ")";
        }
        echo "</option>
                    <option value =\"text\" num=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("还可以添加%textCount%个字段", array("%textCount%" => (10 - (isset($context["textCount"]) ? $context["textCount"] : null)))), "html", null, true);
        echo "\" ";
        if (((isset($context["textCount"]) ? $context["textCount"] : null) == 10)) {
            echo "disabled=\"disabled\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("多行文本"), "html", null, true);
        if (((isset($context["textCount"]) ? $context["textCount"] : null) == 10)) {
            echo "(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已满10个"), "html", null, true);
            echo ")";
        }
        echo "</option>
                    <option value=\"int\" num=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("还可以添加%intCount%个字段,最大值为9位整数", array("%intCount%" => (5 - (isset($context["intCount"]) ? $context["intCount"] : null)))), "html", null, true);
        echo "\" ";
        if (((isset($context["intCount"]) ? $context["intCount"] : null) == 5)) {
            echo "disabled=\"disabled\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("整数"), "html", null, true);
        if (((isset($context["intCount"]) ? $context["intCount"] : null) == 5)) {
            echo "(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已满5个"), "html", null, true);
            echo ")";
        }
        echo "</option>
                    <option value=\"float\" num=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("还可以添加%floatCount%个字段,保留到两位小数", array("%floatCount%" => (5 - (isset($context["floatCount"]) ? $context["floatCount"] : null)))), "html", null, true);
        echo "\" ";
        if (((isset($context["floatCount"]) ? $context["floatCount"] : null) == 5)) {
            echo "disabled=\"disabled\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("小数"), "html", null, true);
        if (((isset($context["floatCount"]) ? $context["floatCount"] : null) == 5)) {
            echo "(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已满5个"), "html", null, true);
            echo ")";
        }
        echo "</option>
                    <option value=\"date\" num=\"还可以添加";
        // line 28
        echo twig_escape_filter($this->env, (5 - (isset($context["dateCount"]) ? $context["dateCount"] : null)), "html", null, true);
        echo "个字段\" ";
        if (((isset($context["dateCount"]) ? $context["dateCount"] : null) == 5)) {
            echo "disabled=\"disabled\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("日期"), "html", null, true);
        if (((isset($context["dateCount"]) ? $context["dateCount"] : null) == 5)) {
            echo "(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已满5个"), "html", null, true);
            echo ")";
        }
        echo "</option>
                  </select>
                  <div class=\"help-block\" id=\"type_num\" style=\"color:green;\" ></div>
              </div>
            </div> 

            <div class=\"form-group \"> 
             <label class=\"col-md-4 control-label\" for=\"field_seq\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("显示序号"), "html", null, true);
        echo "</label>
              <div class=\"col-md-6 controls\">
              <input type=\"text\"  name=\"field_seq\" id=\"field_seq\" class=\"form-control\" value=\"1\">
              </div>
            </div>

            <div class=\"form-group \"> 
             <label class=\"col-md-4 control-label\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("是否启用、显示"), "html", null, true);
        echo "</label>
             <div class=\"col-md-2\"><input type=\"checkbox\"  checked=checked name=\"field_enabled\" vaule=\"1\" style=\"height:18px;width:18px;\"></div>
            </div>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
       </div> 
      
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消"), "html", null, true);
        echo "</button>
        <button type=\"submit\" class=\"btn btn-primary\" id=\"add-btn\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保存"), "html", null, true);
        echo "</button>
      </div>
      </form>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:user-fields.modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 50,  163 => 49,  156 => 45,  150 => 42,  140 => 35,  119 => 28,  104 => 27,  89 => 26,  74 => 25,  59 => 24,  55 => 23,  49 => 20,  39 => 13,  31 => 8,  26 => 6,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
