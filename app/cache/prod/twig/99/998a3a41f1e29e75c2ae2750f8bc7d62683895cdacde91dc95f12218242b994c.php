<?php

/* TopxiaAdminBundle:Navigation:index.html.twig */
class __TwigTemplate_c1f0bbc16c8b45fe29c7519a649af8b5bae47ec1b7e98f679b184ec97528e1ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Navigation:index.html.twig", 1);
        $this->blocks = array(
            'page_buttons' => array($this, 'block_page_buttons'),
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
        $context["script_controller"] = "navigation/index";
        // line 5
        $context["menu"] = (("admin_" . (isset($context["type"]) ? $context["type"] : null)) . "_navigation");
        // line 6
        $context["types"] = array("top" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("顶部"), "foot" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("底部"), "friendlyLink" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("友情链接"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_page_buttons($context, array $blocks = array())
    {
        echo " 
    <button class=\"btn btn-success btn-sm pull-right\" id=\"add-navigation-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_navigation_create", array("type" => (isset($context["type"]) ? $context["type"] : null))), "html", null, true);
        echo "\">";
        if (($this->getAttribute((isset($context["types"]) ? $context["types"] : null), (isset($context["type"]) ? $context["type"] : null), array(), "array") == "友情链接")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增%types[type]%", array("%types[type]%" => $this->getAttribute((isset($context["types"]) ? $context["types"] : null), (isset($context["type"]) ? $context["type"] : null), array(), "array"))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增%types[type]%导航", array("%types[type]%" => $this->getAttribute((isset($context["types"]) ? $context["types"] : null), (isset($context["type"]) ? $context["type"] : null), array(), "array"))), "html", null, true);
        }
        echo "</button>
";
    }

    // line 12
    public function block_main($context, array $blocks = array())
    {
        // line 13
        echo "
";
        // line 14
        if (((isset($context["type"]) ? $context["type"] : null) == "foot")) {
            // line 15
            echo "<div class=\"alert alert-info\"><i class=\"glyphicon glyphicon-info-sign\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("清秋主题、默认主题A、默认主题B、雅致简洁之外的主题，请前往"), "html", null, true);
            echo " <a class=\"text-info\" style=\"font-weight:bold;\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_block", array("category" => "theme"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("［运营］－［编辑区管理］"), "html", null, true);
            echo "</a> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("中进行编辑。"), "html", null, true);
            echo "</div>
";
        } elseif ((        // line 16
(isset($context["type"]) ? $context["type"] : null) == "friendlyLink")) {
            // line 17
            echo "<div class=\"alert alert-info\"><i class=\"glyphicon glyphicon-info-sign\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("如需在首页显示友情链接模块，请在对应"), "html", null, true);
            echo "<a class=\"text-info\" style=\"font-weight:bold;\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_theme");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("主题管理"), "html", null, true);
            echo "</a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("中添加相应模块，暂仅支持简墨主题。"), "html", null, true);
            echo "
</div>
";
        }
        // line 20
        echo "
<table id=\"navigation-table\" class=\"table table-striped table-hover navigation-table sortable-list\">
  <thead>
    <tr>
      <th width=\"50%\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("名称"), "html", null, true);
        echo "</th>
      <th width=\"10%\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新开窗口"), "html", null, true);
        echo "</th>
      <th width=\"10%\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("状态"), "html", null, true);
        echo "</th>  
      <th width=\"30%\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
    </tr>
  </thead>
    
  ";
        // line 31
        $this->loadTemplate("TopxiaAdminBundle:Navigation:tbody.html.twig", "TopxiaAdminBundle:Navigation:index.html.twig", 31)->display($context);
        // line 32
        echo "</table>
    
<div class=\"alert alert-info\">
  <p>会员专区：域名/vip</p>
  <p>直播首页：域名/live</p>
  <p>小组首页：域名/group</p>
  <p>资讯首页：域名/article</p>
  <p>师资力量：域名/teacher</p>
  <p>移动端首页：域名/mobile</p>
  <p>个人主页：域名/my/page/show</p>
  <p>课程列表页：域名/course/explore</p>
  <p>班级列表页：域名/classroom/explore</p>
  <p>公开课列表页：域名/open/course/explore</p>
  <p>课程分类：域名/course/explore/分类编码</p>
  <p>资讯栏目：域名/article/栏目编码</p>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Navigation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 32,  112 => 31,  105 => 27,  101 => 26,  97 => 25,  93 => 24,  87 => 20,  74 => 17,  72 => 16,  61 => 15,  59 => 14,  56 => 13,  53 => 12,  41 => 9,  36 => 8,  32 => 1,  30 => 6,  28 => 5,  26 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
