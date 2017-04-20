<?php

/* TopxiaAdminBundle:ArticleCategory:index.html.twig */
class __TwigTemplate_199032dcaf6d49dd4a5f5b5066ff3addcba3c64af2741e08419b5f6d12be8409 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:ArticleCategory:index.html.twig", 1);
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
        $context["menu"] = "admin_operation_article_category";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
<ul class=\"list-table\" id=\"category-table\" style=\"margin-bottom: 0\">
    <li class=\"th\">
        <div class=\"row\">
            <div class=\"td col-md-3\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("栏目名称"), "html", null, true);
        echo "</div>
            <div class=\"td col-md-4\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("栏目地址"), "html", null, true);
        echo "</div>
            <div class=\"td col-md-3\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编码"), "html", null, true);
        echo "</div>
            <div class=\"td col-md-2\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</div>
        </div>
    </li>
    ";
        // line 16
        $this->loadTemplate("TopxiaAdminBundle:ArticleCategory:tbody.html.twig", "TopxiaAdminBundle:ArticleCategory:index.html.twig", 16)->display($context);
        // line 17
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:ArticleCategory:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 17,  58 => 16,  52 => 13,  48 => 12,  44 => 11,  40 => 10,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
