<?php

/* TopxiaAdminBundle:Order:manage.html.twig */
class __TwigTemplate_9a92bc96abb446f7c627c474fd0f0e95e650e260c98032d86d6afec4a462d199 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Order:manage.html.twig", 1);
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
        // line 7
        $context["menu"] = (("admin_" . (isset($context["targetType"]) ? $context["targetType"] : null)) . "_order");
        // line 9
        $context["script_controller"] = "manage/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        // line 12
        echo "
  <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    <div class=\"mbm\">
    <div class=\"form-group\">
      <label class=\"ptm\" >";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("创建时间:"), "html", null, true);
        echo "</label>
        <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDateTime\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "startDateTime"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("起始时间"), "html", null, true);
        echo "\">
        -
        <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDateTime\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "endDateTime"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("结束时间"), "html", null, true);
        echo "\">
    </div>
    </div>
    <div class=\"mbm\">
    <div class=\"form-group\">
      <label class=\"ptm\" >";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("筛选条件:"), "html", null, true);
        echo "</label>
        <select class=\"form-control\" name=\"status\">
          ";
        // line 26
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("orderStatus"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "status"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单状态"));
        echo "
        </select>
  
      <select class=\"form-control\" name=\"payment\">
        ";
        // line 30
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("payment"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "payment"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支付方式"));
        echo "
      </select>
    </div> 
    <div class=\"form-group\" style=\"display:none;\">
      <input class=\"form-control\" type=\"text\" name=\"paidTimeRange\", placeholder=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("付款时间段"), "html", null, true);
        echo "\">
    </div>


    <div class=\"form-group\">
    <label class=\"ptm\" >";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关键词:"), "html", null, true);
        echo "</label>
      <select class=\"form-control\" name=\"keywordType\">
        ";
        // line 41
        if (((isset($context["targetType"]) ? $context["targetType"] : null) == "vip")) {
            // line 42
            echo "          ";
            $context["options"] = array("sn" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单号"), "buyer" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买者用户名"), "title" => ($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("targetName", (isset($context["targetType"]) ? $context["targetType"] : null)) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("名")));
            // line 43
            echo "        ";
        } else {
            // line 44
            echo "          ";
            $context["options"] = array("sn" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单号"), "buyer" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买者用户名"), "targetId" => ($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("targetName", (isset($context["targetType"]) ? $context["targetType"] : null)) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编号")), "title" => ($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("targetName", (isset($context["targetType"]) ? $context["targetType"] : null)) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("名")), "mobile" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买者绑定手机号"), "email" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买者邮箱"));
            // line 45
            echo "        ";
        }
        // line 46
        echo "        ";
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions((isset($context["options"]) ? $context["options"] : null), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "keywordType"), "method"));
        echo "
      </select>

    <input class=\"form-control\" type=\"text\" name=\"keyword\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关键词"), "html", null, true);
        echo "\">
    </div>
    <button class=\"btn btn-primary\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>
    <a class=\"btn btn-primary btn-export-csv\" 
    href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_manage_export_csv", array("targetType" =>         // line 54
(isset($context["targetType"]) ? $context["targetType"] : null), "startTime" => $this->getAttribute(        // line 55
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "startDateTime"), "method"), "endTime" => $this->getAttribute(        // line 56
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "endDateTime"), "method"), "status" => $this->getAttribute(        // line 57
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "status"), "method"), "payment" => $this->getAttribute(        // line 58
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "payment"), "method"), "keywordType" => $this->getAttribute(        // line 59
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "keywordType"), "method"), "keyword" => $this->getAttribute(        // line 60
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "keyword"), "method"))), "html", null, true);
        // line 61
        echo "\"
    data-export-count=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getItemCount", array(), "method"), "html", null, true);
        echo "\"
    data-export-count-format=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->numberFilter($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getItemCount", array(), "method")), "html", null, true);
        echo "\"
    data-export-allow-count=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("magic.export_allow_count"), "html", null, true);
        echo "\"
    data-export-allow-count-format=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->numberFilter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("magic.export_allow_count")), "html", null, true);
        echo "\"
    >";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("导出结果"), "html", null, true);
        echo "</a>
    </div>
  </form>

  <table class=\"table table-striped table-hover\" id=\"order-table\">
    ";
        // line 71
        $this->loadTemplate("TopxiaWebBundle:Order:order-table.html.twig", "TopxiaAdminBundle:Order:manage.html.twig", 71)->display(array_merge($context, array("mode" => "admin")));
        // line 72
        echo "  </table>
  <div class=\"paginator\">
    ";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo " 
  </div>

  <div class=\"alert alert-info\">
    站外支付为该笔订单是通过导入或者手动添加的方式产生的，故为站外支付
  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Order:manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 74,  166 => 72,  164 => 71,  156 => 66,  152 => 65,  148 => 64,  144 => 63,  140 => 62,  137 => 61,  135 => 60,  134 => 59,  133 => 58,  132 => 57,  131 => 56,  130 => 55,  129 => 54,  128 => 53,  123 => 51,  116 => 49,  109 => 46,  106 => 45,  103 => 44,  100 => 43,  97 => 42,  95 => 41,  90 => 39,  82 => 34,  75 => 30,  68 => 26,  63 => 24,  53 => 19,  46 => 17,  42 => 16,  36 => 12,  33 => 11,  29 => 1,  27 => 9,  25 => 7,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
