<?php

/* ClassroomBundle:Classroom/Part/Service:event.html.twig */
class __TwigTemplate_b58c2e2a540d4f9ad0badfd61e127e1f18906e0967088846ad90e5634cb6f106 extends Twig_Template
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
        echo "<li class=\"";
        if ((isset($context["active"]) ? $context["active"] : null)) {
            echo "active";
        }
        echo "\">
  <a tabindex=\"0\" role=\"button\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-html=\"true\" title=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%name%活动", array("%name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
        echo " ";
        if ( !(isset($context["active"]) ? $context["active"] : null)) {
            echo "<small class='text-muted'>(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂未提供"), "html", null, true);
            echo ")</span>";
        }
        echo "\" data-content=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("不定期组织各种线上或线下的%name%活动，让学习更加生动有趣，同学关系更为紧密", array("%name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), "班级"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("动"), "html", null, true);
        echo "</a>
</li>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom/Part/Service:event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
