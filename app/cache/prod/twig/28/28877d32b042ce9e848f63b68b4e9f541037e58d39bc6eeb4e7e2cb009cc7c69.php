<?php

/* TopxiaAdminBundle:ArticleCategory:tbody.html.twig */
class __TwigTemplate_b9287f475111536698398ecdf29a4e9381b41c43e95b679fbd7b6582a58a3b40 extends Twig_Template
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
        echo "
<li id=\"category-table-body\" data-sort-url=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_category_sort");
        echo "\">
    ";
        // line 3
        if ( !twig_test_empty((isset($context["categories"]) ? $context["categories"] : null))) {
            // line 4
            echo "        ";
            echo $this->getAttribute($this, "showCategoryTree", array(0 => (isset($context["categories"]) ? $context["categories"] : null), 1 => false), "method");
            echo "
    ";
        } else {
            // line 6
            echo "        <div class=\"row empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无分类记录"), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "</li>

";
        // line 10
        $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->loadScript("category/tbody");
        // line 11
        echo "
";
    }

    // line 12
    public function getshowCategoryTree($__categories__ = null, $__isCollapseChildren__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "categories" => $__categories__,
            "isCollapseChildren" => $__isCollapseChildren__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 13
            echo "    <ul class=\"list-table sortable-list\" data-group-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), 0, array(), "array"), "parentId", array(), "array"), "html", null, true);
            echo "\">
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 15
                echo "            ";
                $context["isParent"] =  !twig_test_empty((($this->getAttribute($context["category"], "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["category"], "children", array()), null)) : (null)));
                // line 16
                echo "            ";
                $context["isRoot"] = ($this->getAttribute($context["category"], "depth", array()) == 1);
                // line 17
                echo "            <li id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\" class=\"tr\" data-name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\" data-parent-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "parentId", array()), "html", null, true);
                echo "\" style=\"display: ";
                echo ((( !(isset($context["isRoot"]) ? $context["isRoot"] : null) && (isset($context["isCollapseChildren"]) ? $context["isCollapseChildren"] : null))) ? ("none") : ("block"));
                echo "\">
                <div class=\"row";
                // line 18
                echo ((((isset($context["isParent"]) ? $context["isParent"] : null) && (isset($context["isCollapseChildren"]) ? $context["isCollapseChildren"] : null))) ? (" row-collapse") : (" row-expand"));
                echo "\">
                    <div class=\"td col-md-3 name sort-handle\" style=\"padding-left: ";
                // line 19
                echo twig_escape_filter($this->env, (24 * ($this->getAttribute($context["category"], "depth", array()) - 1)), "html", null, true);
                echo "px; overflow: hidden\">
                        ";
                // line 20
                if ((isset($context["isParent"]) ? $context["isParent"] : null)) {
                    // line 21
                    echo "                            <i class=\"list-table-tree-icon glyphicon glyphicon-chevron-";
                    echo (((isset($context["isCollapseChildren"]) ? $context["isCollapseChildren"] : null)) ? ("right") : ("down"));
                    echo "\"></i>
                        ";
                } else {
                    // line 23
                    echo "                            <i class=\"list-table-tree-icon\"></i>
                        ";
                }
                // line 25
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "
                    </div>
                    <div class=\"td col-md-4 url\"><a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_category", array("categoryCode" => $this->getAttribute($context["category"], "code", array()))), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_category", array("categoryCode" => $this->getAttribute($context["category"], "code", array()))), "html", null, true);
                echo "</a></div>
                    <div class=\"td col-md-3 code\">";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "code", array()), "html", null, true);
                echo "</div>
                    <div class=\"td col-md-2 operation\">
                        <a href=\"javascript:;\" class=\"btn btn-default btn-sm\" data-url=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_category_edit", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#modal\"><i class=\"glyphicon glyphicon-edit\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑"), "html", null, true);
                echo "</a>
                        ";
                // line 31
                if (($this->getAttribute($context["category"], "depth", array()) < 5)) {
                    // line 32
                    echo "                        <a href=\"javascript:;\" class=\"btn btn-default btn-sm\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_category_create", array("parentId" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
                    echo "\" data-toggle=\"modal\" data-target=\"#modal\"><i class=\"glyphicon glyphicon-plus\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加子栏目"), "html", null, true);
                    echo "</a>
                        ";
                }
                // line 34
                echo "                    </div>
                </div>
                ";
                // line 36
                if ((isset($context["isParent"]) ? $context["isParent"] : null)) {
                    // line 37
                    echo "                    ";
                    echo $this->getAttribute($this, "showCategoryTree", array(0 => $this->getAttribute($context["category"], "children", array()), 1 => (isset($context["isCollapseChildren"]) ? $context["isCollapseChildren"] : null)), "method");
                    echo "
                ";
                }
                // line 39
                echo "            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "    </ul>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:ArticleCategory:tbody.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 41,  157 => 39,  151 => 37,  149 => 36,  145 => 34,  137 => 32,  135 => 31,  129 => 30,  124 => 28,  118 => 27,  112 => 25,  108 => 23,  102 => 21,  100 => 20,  96 => 19,  92 => 18,  79 => 17,  76 => 16,  73 => 15,  69 => 14,  64 => 13,  51 => 12,  46 => 11,  44 => 10,  40 => 8,  34 => 6,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
