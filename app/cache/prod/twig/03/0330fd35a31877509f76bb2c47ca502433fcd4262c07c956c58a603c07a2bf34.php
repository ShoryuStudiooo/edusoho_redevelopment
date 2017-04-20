<?php

/* TopxiaAdminBundle:System:default-share-content.html.twig */
class __TwigTemplate_d87249c8e831a526425a5e56b1ddcb721927beaaf2a7a6f7d69a0a67bb71f94f extends Twig_Template
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
        echo "<form class=\"form-horizontal\" id=\"cloud-setting-form\" method=\"post\" novalidate>
  <div >
    <fieldset>
";
        // line 20
        echo "      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"article_share_content\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("资讯分享内容"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea id=\"courseShareContent\" name=\"articleShareContent\" class=\"form-control\" rows=\"5\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "articleShareContent", array()), "html", null, true);
        echo "</textarea>
          <div class=\"help-block\">
            <div>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("变量说明："), "html", null, true);
        echo "</div>
            <ul>
              <li>";
        // line 29
        echo "{{articletitle}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("为资讯标题"), "html", null, true);
        echo "</li>
              <li>";
        // line 30
        echo "{{sitename}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("为网校名称"), "html", null, true);
        echo "</li>
            </ul>
          </div>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"course_share_content\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程分享内容"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea id=\"courseShareContent\" name=\"courseShareContent\" class=\"form-control\" rows=\"5\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "courseShareContent", array()), "html", null, true);
        echo "</textarea>
          <div class=\"help-block\">
            <div>";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("变量说明："), "html", null, true);
        echo "</div>
            <ul>
              <li>";
        // line 45
        echo "{{course}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("为课程名称"), "html", null, true);
        echo "</li>
            </ul>
          </div>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"course_share_content\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("小组分享内容"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea id=\"groupShareContent\" name=\"groupShareContent\" class=\"form-control\" rows=\"5\">";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "groupShareContent", array()), "html", null, true);
        echo "</textarea>
          <div class=\"help-block\">
            <div>";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("变量说明："), "html", null, true);
        echo "</div>
            <ul>
              <li>";
        // line 60
        echo "{{groupname}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("为小组名称"), "html", null, true);
        echo "</li>
              <li>";
        // line 61
        echo "{{threadname}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("为话题名称"), "html", null, true);
        echo "</li>
            </ul>
          </div>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"course_share_content\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级分享内容"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea id=\"classroomShareContent\" name=\"classroomShareContent\" class=\"form-control\" rows=\"5\">";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "classroomShareContent", array()), "html", null, true);
        echo "</textarea>
          <div class=\"help-block\">
            <div>";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("变量说明："), "html", null, true);
        echo "</div>
            <ul>
              <li>";
        // line 76
        echo "{{classroom}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("为班级名称"), "html", null, true);
        echo "</li>
            </ul>
          </div>
        </div>
      </div>

    </fieldset>
  </div>
  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
        echo "</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:default-share-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 89,  158 => 86,  143 => 76,  138 => 74,  133 => 72,  127 => 69,  114 => 61,  108 => 60,  103 => 58,  98 => 56,  92 => 53,  79 => 45,  74 => 43,  69 => 41,  63 => 38,  50 => 30,  44 => 29,  39 => 27,  34 => 25,  28 => 22,  24 => 20,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
