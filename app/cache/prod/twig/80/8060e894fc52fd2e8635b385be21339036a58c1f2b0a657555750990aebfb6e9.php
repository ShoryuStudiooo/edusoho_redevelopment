<?php

/* TopxiaAdminBundle:System:Report/dir-permission.html.twig */
class __TwigTemplate_591f832dbe241960b8b727471256117c7a9a64f8e0d27de02f39e8d5170c9a14 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errorPaths"]) ? $context["errorPaths"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 2
            echo "  <tr>
    <td>";
            // line 3
            echo twig_escape_filter($this->env, $context["path"], "html", null, true);
            echo "</td>
    <td>
      <span class=\"text-danger\">X ";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("不可写"), "html", null, true);
            echo "</span>
    </td>
    <td>";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("可写"), "html", null, true);
            echo "</td>
    
  </tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 11
            echo "<tr>
  <td colspan=\"6\" style=\"text-align: center;color: #c1c1c1;padding: 50px;\">";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("文件目录权限正常"), "html", null, true);
            echo "</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:Report/dir-permission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  46 => 11,  37 => 7,  32 => 5,  27 => 3,  24 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
