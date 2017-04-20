<?php

/* TopxiaAdminBundle:System:course-select.html.twig */
class __TwigTemplate_dbce347c087503d87559529f5b01f66b5ae625c6b82136377c7cedda2e82c035 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:course-select.html.twig", 1);
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
        $context["menu"] = "admin_operation_mobile_select_manage";
        // line 5
        $context["script_controller"] = "operation/course-grid";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "<style>

.course-grids {
  margin:0 -15px 0 0;
  padding:0;
  list-style: none;
}

.course-grid {
  display: inline-block;
  vertical-align: top;
  margin: 15px 15px 15px 0;
  border: 1px solid #e1e1e1;
  border-radius: 4px;
}

.course-grid .series-mode-label {
  position: absolute;
  top: -6px;
  right: -6px;
  font-size: 12px;
  width: 20px;
  height: 20px;
  line-height: 20px;
  border-radius: 50%;
  background-color: #313131;
  color: #fff;
  opacity: 0;
}

.course-grid:hover .series-mode-label {
  opacity: 0.8;
}

.course-grid .series-mode-label:hover {
  opacity: 1;
}

.course-grid .grid-body {
  position: relative;
  width: 170px;
  display: block;
  /*overflow: hidden;*/
  border-radius: 4px;
  color: #353535;
}

.grid-body a{
  text-decoration: none;
}

.course-grid .title {
  display: block;
  padding: 10px;
  min-height: 52px;
  color: #555;
  font-weight: bold;
}

.course-grid .add-course {
  font-size: 80px;
  height: 148px;
  text-align: center;
  padding-top: 30px;
}

</style>
";
        // line 76
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("mobile.enabled") == 1)) {
            // line 77
            echo "
";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
            echo "

<form class=\"form-horizontal\" id=\"mobile-form\" method=\"post\">

  <fieldset>

    <div class=\"help-block\">";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("所选择的课程将会在客户端【每周精选】栏目中显示，最多选择三门。"), "html", null, true);
            echo "<br>
    </div>
    <div class=\"form-group\">
      <input type='hidden' name=\"courseIds\" value=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "courseIds", array()), "html", null, true);
            echo "\"/>
      <div class=\"col-md-12\" role=\"course-item-container\">
        <ul class=\"course-grids\">
          ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(((array_key_exists("courses", $context)) ? (_twig_default_filter((isset($context["courses"]) ? $context["courses"] : null), null)) : (null)));
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
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 91
                echo "          ";
                $this->loadTemplate("TopxiaAdminBundle:Course:course-item.html.twig", "TopxiaAdminBundle:System:course-select.html.twig", 91)->display(array_merge($context, array("course" => $context["course"], "showDelBtn" => true)));
                // line 92
                echo "          ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "          <li class=\"course-grid related-course-grid\" role=\"add-course\" 
          style=\"cursor:pointer
          ";
            // line 95
            if ((twig_length_filter($this->env, (isset($context["courses"]) ? $context["courses"] : null)) >= 3)) {
                // line 96
                echo "          ;display:none
          ";
            }
            // line 98
            echo "          \"
          data-backdrop=\"static\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 99
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_course_search");
            echo "\">
            <i class=\"add-course grid-body glyphicon glyphicon-plus\"></i>
          </li>
        </ul>
      </div>
    </div>
  </fieldset>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
            echo "\">

  <button type=\"submit\" class=\"btn btn-primary\">";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
            echo "</button>
  
</form>

";
        } else {
            // line 114
            echo "<div class=\"well\" style=\"text-align:center;\">


";
            // line 117
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
        // line 121
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:course-select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 121,  207 => 117,  202 => 114,  194 => 109,  189 => 107,  178 => 99,  175 => 98,  171 => 96,  169 => 95,  165 => 93,  151 => 92,  148 => 91,  131 => 90,  125 => 87,  119 => 84,  110 => 78,  107 => 77,  105 => 76,  36 => 9,  33 => 8,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
