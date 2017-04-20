<?php

/* ClassroomBundle:Classroom:join-layout.html.twig */
class __TwigTemplate_733483e4ffadb49030c8b26c3118e80fcad7c0123b8fa40a7830757349a8f20c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "ClassroomBundle:Classroom:join-layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->loadScript("classroombundle/controller/classroom/classroom-join");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_top_content($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClassroomBundle:Classroom:header", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "previewAs" => (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "previewAs"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "previewAs"), "method"), "")) : ("")))));
        echo "

";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "  <div class=\"class-detail row\">
    ";
        // line 16
        $this->displayBlock('main', $context, $blocks);
        // line 17
        echo "  </div>
";
    }

    // line 16
    public function block_main($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:join-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 16,  63 => 17,  61 => 16,  58 => 15,  55 => 14,  48 => 9,  45 => 8,  42 => 7,  34 => 3,  30 => 1,  28 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
