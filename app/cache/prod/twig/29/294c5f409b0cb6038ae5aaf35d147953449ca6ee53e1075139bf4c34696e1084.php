<?php

/* TopxiaAdminBundle:DiscoveryColumn:index.html.twig */
class __TwigTemplate_2179a6c23aa56191ea605b9906ba2fe7afd66e3233159911ebf3b0442e33fed7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:DiscoveryColumn:index.html.twig", 1);
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
        $context["menu"] = "admin_discovery_column_index";
        // line 5
        $context["script_controller"] = "topxiaadminbundle/controller/discovery-column/index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("mobile.enabled") == 1)) {
            // line 10
            echo "<table class=\"table table-hover\" id=\"category-table\">
  <thead>
    <tr>
      <th width=\"25%\">";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("栏目名称"), "html", null, true);
            echo "</th>
      <th width=\"15%\">";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("内容类型"), "html", null, true);
            echo "</th>
      <th width=\"10%\">";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("排序方式"), "html", null, true);
            echo "</th>
      <th width=\"15%\">";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("设置展示数量"), "html", null, true);
            echo "</th>
      <th width=\"15%\">";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("实际展示数量"), "html", null, true);
            echo "</th>
      <th width=\"20%\">";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
            echo "</th>
    </tr>
  </thead>
  ";
            // line 21
            $this->loadTemplate("TopxiaAdminBundle:DiscoveryColumn:discovery-column-tr.html.twig", "TopxiaAdminBundle:DiscoveryColumn:index.html.twig", 21)->display($context);
            // line 22
            echo "</table>

";
        } else {
            // line 25
            echo "<div class=\"well\" style=\"text-align:center;\">


";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("移动端未开启"), "html", null, true);
            echo "，";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请先在"), "html", null, true);
            echo "<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("系统-课程设置-移动端设置"), "html", null, true);
            echo " </a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("中设置开启"), "html", null, true);
            echo "

</div>
";
        }
        // line 32
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:DiscoveryColumn:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 32,  81 => 28,  76 => 25,  71 => 22,  69 => 21,  63 => 18,  59 => 17,  55 => 16,  51 => 15,  47 => 14,  43 => 13,  38 => 10,  36 => 9,  33 => 8,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
