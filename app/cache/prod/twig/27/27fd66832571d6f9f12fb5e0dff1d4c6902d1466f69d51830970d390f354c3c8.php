<?php

/* TopxiaAdminBundle:Group:thread.html.twig */
class __TwigTemplate_4ce4a793b9d0c8a54374310d288ae6e77db2f6175d23f8d411c43858fbdb2c7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Group:thread.html.twig", 1);
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
        $context["menu"] = "admin_operation_group_thread";
        // line 5
        $context["script_controller"] = "group/thread";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "
  <form  class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>

    <div class=\"form-group\">
      <select class=\"form-control\" name=\"status\">
        ";
        // line 12
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("groupstatus"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "status"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("话题状态"));
        echo "
      </select>
    </div>
    
    <div class=\"form-group\">
      <select class=\"form-control\" name=\"threadType\">
        ";
        // line 18
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("threadProperty"), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "threadType"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("属性"));
        echo "
      </select>
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("所属小组"), "html", null, true);
        echo "\" name=\"groupName\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "groupName"), "method"), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("话题名称关键词"), "html", null, true);
        echo "\" name=\"title\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("创建者"), "html", null, true);
        echo "\" name=\"userName\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "userName"), "method"), "html", null, true);
        echo "\">
    </div>
    
    <button class=\"btn btn-primary\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>
  </form>
  ";
        // line 36
        if ((isset($context["threadinfo"]) ? $context["threadinfo"] : null)) {
            // line 37
            echo "    <form method=\"post\" id=\"thread-form\">
      <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\" id=\"thread-table\">
          <thead>
            <tr>
              <th nowrap=\"nowrap\"><input type=\"checkbox\"  data-role=\"batch-select\"/> ";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编号"), "html", null, true);
            echo "</th>
              <th width=\"30%\">";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("名称"), "html", null, true);
            echo "</th>
              <th nowrap=\"nowrap\">";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("属性"), "html", null, true);
            echo "</th>
              <th nowrap=\"nowrap\">";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("创建者"), "html", null, true);
            echo "</th>
              <th nowrap=\"nowrap\">";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("所属小组"), "html", null, true);
            echo "</th>
              <th nowrap=\"nowrap\">";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("回复数"), "html", null, true);
            echo "</th>
              <th nowrap=\"nowrap\">";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("状态"), "html", null, true);
            echo "</th>
              <th width=\"100px\" nowrap=\"nowrap\">";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
            echo "</th>
            </tr>
          </thead>

          <tbody>
            ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["threadinfo"]) ? $context["threadinfo"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                echo "  
              ";
                // line 55
                $this->loadTemplate("TopxiaAdminBundle:Group:thread-table-tr.html.twig", "TopxiaAdminBundle:Group:thread.html.twig", 55)->display(array_merge($context, array("thread" => $context["thread"])));
                // line 56
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "          </tbody>
        </table>
      </div>
      <div>  
        <label class=\"checkbox-inline\">
          <input type=\"checkbox\" data-role=\"batch-select\">";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全选"), "html", null, true);
            echo "
        </label>
        <input type=\"hidden\" id=\"batchDeleteThread\" value=\"";
            // line 64
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_groupThread_batch_delete");
            echo "\">
        <button id=\"thread-delete-btn\" data-submiting-text=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在删除"), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-default btn-sm mlm\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除话题"), "html", null, true);
            echo "</button>
      </div>
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
            echo "\">
    </form>
  ";
        } else {
            // line 70
            echo "    <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无话题！"), "html", null, true);
            echo "</div>
  ";
        }
        // line 72
        echo "  <div class=\"pull-right\">
    ";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Group:thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 73,  206 => 72,  200 => 70,  194 => 67,  187 => 65,  183 => 64,  178 => 62,  171 => 57,  157 => 56,  155 => 55,  136 => 54,  128 => 49,  124 => 48,  120 => 47,  116 => 46,  112 => 45,  108 => 44,  104 => 43,  100 => 42,  93 => 37,  91 => 36,  86 => 34,  78 => 31,  69 => 27,  60 => 23,  52 => 18,  43 => 12,  36 => 7,  33 => 6,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
