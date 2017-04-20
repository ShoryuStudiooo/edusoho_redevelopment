<?php

/* TopxiaAdminBundle:Tag:index.html.twig */
class __TwigTemplate_a644f03d90d63a93817b87683352ada401dcb1533c39a522e8c66032675d98ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Tag:index.html.twig", 1);
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
        $context["menu"] = "admin_course_tag_manage";
        // line 4
        $context["script_controller"] = "tag/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
<table id=\"tag-table\" class=\"table table-striped\">
    <thead>
        <th width=\"10%\">ID</th>
        <th width=\"30%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("名称"), "html", null, true);
        echo "</th>
        <th width=\"30%\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("所属标签组"), "html", null, true);
        echo "</th>
        <th width=\"20%\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加时间"), "html", null, true);
        echo "</th>
        <th width=\"10%\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
    </thead>
    
    <tbody>
      ";
        // line 17
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 18
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 19
                echo "          ";
                $this->loadTemplate("TopxiaAdminBundle:Tag:list-tr.html.twig", "TopxiaAdminBundle:Tag:index.html.twig", 19)->display($context);
                // line 20
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "      ";
        } else {
            // line 22
            echo "       <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无标签记录"), "html", null, true);
            echo "</div></td></tr>
      ";
        }
        // line 24
        echo "    </tbody>
</table>

";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
<div class=\"alert alert-info\">
  <p>1.标签可用于课程和资讯；</p>
  <p>2.可<a target=\"_blank\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_course");
        echo "\">开启</a>根据标签在课程介绍页显示相关课程。</p>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Tag:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 30,  112 => 27,  107 => 24,  101 => 22,  98 => 21,  84 => 20,  81 => 19,  63 => 18,  61 => 17,  54 => 13,  50 => 12,  46 => 11,  42 => 10,  36 => 6,  33 => 5,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
