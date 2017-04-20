<?php

/* TopxiaAdminBundle:Tag:list-tr.html.twig */
class __TwigTemplate_5859cff64d23f231197d7381d348e56dd7dec1276c064fa72426f2d90917ef51 extends Twig_Template
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
        echo "<tr id=\"tag-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "id", array()), "html", null, true);
        echo "\">
  <td>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "id", array()), "html", null, true);
        echo "</td>
  <td>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "name", array()), "html", null, true);
        echo "</td>
  <td>
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "groupNames", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "groupNames", array()), "")) : ("")));
        foreach ($context['_seq'] as $context["_key"] => $context["groupName"]) {
            // line 6
            echo "    《";
            echo twig_escape_filter($this->env, $context["groupName"], "html", null, true);
            echo "》
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "  </td>
  <td>";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "createdTime", array()), "Y-m-d H:i"), "html", null, true);
        echo "</td>
  <td>
    <button class=\"btn btn-default btn-sm\" data-url=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_tag_update", array("id" => $this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "id", array()))), "html", null, true);
        echo "\" data-toggle=\"modal\" data-target=\"#modal\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑"), "html", null, true);
        echo "</button>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Tag:list-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  49 => 9,  46 => 8,  37 => 6,  33 => 5,  28 => 3,  24 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
