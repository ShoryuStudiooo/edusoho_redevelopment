<?php

/* TopxiaAdminBundle:EduCloud/Overview:index.html.twig */
class __TwigTemplate_b2c90a033a9a76e7b28b493638388b3a1b87de61aace5806b32a473cc4767e1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:EduCloud/Overview:index.html.twig", 1);
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
        $context["menu"] = "admin_my_cloud_overview";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        if ((($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "error", array()), "")) : (""))) {
            // line 7
            echo "  ";
            $this->loadTemplate("TopxiaAdminBundle:EduCloud/Overview:not-access.html.twig", "TopxiaAdminBundle:EduCloud/Overview:index.html.twig", 7)->display($context);
        } elseif (($this->getAttribute(        // line 8
(isset($context["overview"]) ? $context["overview"] : null), "enabled", array()) == false)) {
            // line 9
            echo "  ";
            $this->loadTemplate("TopxiaAdminBundle:EduCloud/Overview:disabled.html.twig", "TopxiaAdminBundle:EduCloud/Overview:index.html.twig", 9)->display($context);
        } elseif ((($this->getAttribute(        // line 10
(isset($context["overview"]) ? $context["overview"] : null), "accessCloud", array()) == false) || $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isTrial())) {
            // line 11
            echo "  ";
            $this->loadTemplate("TopxiaAdminBundle:EduCloud/Overview:not-access.html.twig", "TopxiaAdminBundle:EduCloud/Overview:index.html.twig", 11)->display($context);
        } else {
            // line 13
            echo "  ";
            $this->loadTemplate("TopxiaAdminBundle:EduCloud/Overview:normal-use.html.twig", "TopxiaAdminBundle:EduCloud/Overview:index.html.twig", 13)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:EduCloud/Overview:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  46 => 11,  44 => 10,  41 => 9,  39 => 8,  36 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
