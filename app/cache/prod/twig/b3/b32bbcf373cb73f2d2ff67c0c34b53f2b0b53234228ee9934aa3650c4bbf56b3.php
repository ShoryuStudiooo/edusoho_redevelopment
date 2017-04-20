<?php

/* TopxiaAdminBundle::layout.html.twig */
class __TwigTemplate_9af480c51a5c9bea1c6b3d9cd3a9f6dfd4cb39efb066fec165cf34bba371d3cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'container' => array($this, 'block_container'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'page_flash_message' => array($this, 'block_page_flash_message'),
            'page_title' => array($this, 'block_page_title'),
            'page_buttons' => array($this, 'block_page_buttons'),
            'content_header' => array($this, 'block_content_header'),
            'tabs' => array($this, 'block_tabs'),
            'capsule' => array($this, 'block_capsule'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaAdminBundle::layout.html.twig", 1);
        // line 2
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle::layout.html.twig", 2);
        // line 3
        $context["self_macro"] = $this;
        // line 4
        echo "
";
        // line 5
        $context["menu"] = ((array_key_exists("menu", $context)) ? (_twig_default_filter((isset($context["menu"]) ? $context["menu"] : null), null)) : (null));
        // line 6
        $context["currentMenu"] = $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getPermissionByCode((isset($context["menu"]) ? $context["menu"] : null));
        // line 7
        $context["cloudSmsInfo"] = _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getOldSmsUserStatus(), false);
        // line 8
        echo "
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"\"> <!--<![endif]-->
";
        // line 15
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getLocale", array(), "method"), "html", null, true);
        echo "\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta content=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  <title>

    ";
        // line 24
        $this->displayBlock('title', $context, $blocks);
        // line 27
        echo "    ";
        if ( !$this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.owned")) {
            echo " | EduSoho";
        }
        // line 28
        echo "  </title>

  ";
        // line 30
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.favicon")) {
            // line 31
            echo "    <link rel=\"icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\" />
    <link href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" rel=\"shortcut icon\" />
  ";
        }
        // line 34
        echo "  
  ";
        // line 35
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 42
        echo "
  ";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "  <!--[if lt IE 9]>
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->
</head>
<body ";
        // line 49
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter((isset($context["bodyClass"]) ? $context["bodyClass"] : null), "")) : (""))) {
            echo "class=\"";
            echo twig_escape_filter($this->env, (isset($context["bodyClass"]) ? $context["bodyClass"] : null), "html", null, true);
            echo "\"";
        }
        echo ">
  <div class=\"navbar navbar-inverse navbar-fixed-top\">
  ";
        // line 51
        if ((isset($context["cloudSmsInfo"]) ? $context["cloudSmsInfo"] : null)) {
            // line 52
            echo "    <div class=\"alert alert-danger es-admin-alert\" role=\"alert\"><div class=\"text-center\"><strong>您好，ES云短信发送机制升级优化，网站目前短信剩余";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["cloudSmsInfo"]) ? $context["cloudSmsInfo"] : null), "remainCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["cloudSmsInfo"]) ? $context["cloudSmsInfo"] : null), "remainCount", array()), 0)) : (0)), "html", null, true);
            echo "条，为保证继续使用，请开通教育云，点击 <a href=\"http://open.edusoho.com/cloud/access\" target=\"_blank\"> 立即开通</a></strong></div></div>
  ";
        }
        // line 54
        echo "    <div class=\"container\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin");
        echo "\">";
        if ( !$this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.owned")) {
            echo "EduSoho";
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理后台"), "html", null, true);
        echo "</a>
      </div>
      <div class=\"navbar-collapse collapse\">
        ";
        // line 64
        $this->loadTemplate("PermissionBundle:Templates:navigation.html.twig", "TopxiaAdminBundle::layout.html.twig", 64)->display(array_merge($context, array("parentCode" => "admin")));
        // line 65
        echo "
        <ul class=\"nav navbar-nav navbar-right\">
          <li data-url=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_common_admin");
        echo "\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" ><span class=\"glyphicon glyphicon-list admin-star\"></span> ";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("常用"), "html", null, true);
        echo "</a>
            <ul class=\"dropdown-menu shortcuts\">
              ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaAdminBundle:CommonAdmin:commonAdmin"));
        echo "
            </ul>
          </li>
          <li><a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("回首页"), "html", null, true);
        echo "</a></li>

          <li class=\"dropdown\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-user\"></i> ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nickname", array()), "html", null, true);
        echo " <span class=\"glyphicon glyphicon-chevron-down\"></span></a>
            <ul class=\"dropdown-menu main-list\">
              <li><a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\"><i class=\"glyphicon glyphicon-off\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("退出"), "html", null, true);
        echo "</a></li>
            </ul>
          </li>
        </ul>

      </div><!--/.navbar-collapse -->
    </div>
  </div>
  
  <div class=\"container ";
        // line 87
        if ((isset($context["cloudSmsInfo"]) ? $context["cloudSmsInfo"] : null)) {
            echo "es-admin-container-down";
        }
        echo "\">
    
    ";
        // line 89
        $context["notifies"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->pluginUpdateNotify();
        // line 90
        echo "    ";
        if ( !twig_test_empty((isset($context["notifies"]) ? $context["notifies"] : null))) {
            // line 91
            echo "      <div class=\"alert alert-warning\">
        【重要】网站升级v7.2.0后，为保证正常使用，请务必及时升级插件（";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["notifies"]) ? $context["notifies"] : null), "html", null, true);
            echo "）至最新版！请立即升级！ <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_upgrades");
            echo "\">查看详情</a>
      </div>
    ";
        }
        // line 95
        echo "
    ";
        // line 96
        $this->displayBlock('container', $context, $blocks);
        // line 145
        echo "
  </div>

  ";
        // line 148
        $this->displayBlock('footer', $context, $blocks);
        // line 151
        echo "
  ";
        // line 152
        $this->loadTemplate("TopxiaWebBundle::script_boot.html.twig", "TopxiaAdminBundle::layout.html.twig", 152)->display(array_merge($context, array("script_main" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/topxiaadmin/js/admin-app.js"))));
        // line 153
        echo "  <div id=\"modal\" class=\"modal\" ></div>
  ";
        // line 154
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.thirdCopyright") != 1)) {
            // line 155
            echo "    <div class=\"fixed-bar\">
      <a href=\"";
            // line 156
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_feedback");
            echo "\"  target='_blank' class=\"icon-question-text feedback\">
        <i class=\"es-icon es-icon-help\"></i>
        <span>";
            // line 158
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("产品"), "html", null, true);
            echo "<br/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("反馈"), "html", null, true);
            echo "</span>
      </a>
    </div>
  ";
        }
        // line 162
        echo "</body>
</html>

";
    }

    // line 24
    public function block_title($context, array $blocks = array())
    {
        // line 25
        echo "      ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : null), "name", array())), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : null)), "name", array())), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getParentPermission($this->getAttribute($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : null)), "code", array())), "name", array())), "html", null, true);
        echo "
    ";
    }

    // line 35
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 36
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/gallery2/bootstrap/3.1.1/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/common.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/topxiaadmin/css/admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/topxiaadmin/css/admin_v2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/v2/css/es-icon.css"), "html", null, true);
        echo "\" />
  ";
    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 96
    public function block_container($context, array $blocks = array())
    {
        // line 97
        echo "      <div class=\"row\">  
        ";
        // line 98
        $this->displayBlock('content', $context, $blocks);
        // line 143
        echo "      </div>
    ";
    }

    // line 98
    public function block_content($context, array $blocks = array())
    {
        // line 99
        echo "          <div class=\"col-md-2\">
            ";
        // line 100
        $this->displayBlock('sidebar', $context, $blocks);
        // line 103
        echo "          </div>

          <div class=\"col-md-10\">
            <div class=\"page-header clearfix\">
              ";
        // line 107
        $this->displayBlock('page_flash_message', $context, $blocks);
        // line 110
        echo "              <h1 class=\"pull-left\">
                ";
        // line 111
        $this->displayBlock('page_title', $context, $blocks);
        // line 114
        echo "              </h1>
              <div class=\"pull-right\">

                ";
        // line 117
        $this->displayBlock('page_buttons', $context, $blocks);
        // line 129
        echo "
              </div>
            </div>

            ";
        // line 133
        $this->displayBlock('content_header', $context, $blocks);
        // line 134
        echo "            
            ";
        // line 135
        $this->displayBlock('tabs', $context, $blocks);
        // line 136
        echo "
            ";
        // line 137
        $this->displayBlock('capsule', $context, $blocks);
        // line 138
        echo "
            ";
        // line 139
        $this->displayBlock('main', $context, $blocks);
        // line 140
        echo "          </div>

        ";
    }

    // line 100
    public function block_sidebar($context, array $blocks = array())
    {
        // line 101
        echo "              ";
        $this->loadTemplate("PermissionBundle:Templates:side-bar.html.twig", "TopxiaAdminBundle::layout.html.twig", 101)->display($context);
        // line 102
        echo "            ";
    }

    // line 107
    public function block_page_flash_message($context, array $blocks = array())
    {
        // line 108
        echo "
              ";
    }

    // line 111
    public function block_page_title($context, array $blocks = array())
    {
        // line 112
        echo "                  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getParentPermission($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : null), "code", array())), "name", array())), "html", null, true);
        echo "
                ";
    }

    // line 117
    public function block_page_buttons($context, array $blocks = array())
    {
        // line 118
        echo "
                  ";
        // line 119
        if ((((($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : null), "mode", array()), "")) : ("")) == "capsules") && ((array_key_exists("capsule", $context)) ? (_twig_default_filter((isset($context["capsule"]) ? $context["capsule"] : null), false)) : (false)))) {
            // line 120
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getSubPermissions($this->getAttribute($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getPermissionByCode((isset($context["capsule"]) ? $context["capsule"] : null)), "code", array()), "topBtn"));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 121
                echo "                      ";
                echo $context["self_macro"]->getmenu_link_html($context, $context["m"], "btn btn-success btn-sm");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                  ";
        } else {
            // line 124
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getSubPermissions($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : null), "code", array()), "topBtn"));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 125
                echo "                      ";
                echo $context["self_macro"]->getmenu_link_html($context, $context["m"], "btn btn-success btn-sm");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "                  ";
        }
        // line 128
        echo "                ";
    }

    // line 133
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 135
    public function block_tabs($context, array $blocks = array())
    {
        $this->loadTemplate("PermissionBundle:Templates:tabs.html.twig", "TopxiaAdminBundle::layout.html.twig", 135)->display($context);
    }

    // line 137
    public function block_capsule($context, array $blocks = array())
    {
    }

    // line 139
    public function block_main($context, array $blocks = array())
    {
    }

    // line 148
    public function block_footer($context, array $blocks = array())
    {
        // line 149
        echo "    ";
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.analytics");
        echo " 
  ";
    }

    // line 165
    public function getmenu_link_html($___context__ = null, $__menu__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "_context" => $___context__,
            "menu" => $__menu__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 166
            echo "  <a 
  ";
            // line 167
            if ((isset($context["class"]) ? $context["class"] : null)) {
                // line 168
                echo "    class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\"
  ";
            }
            // line 170
            echo "  ";
            if (((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array()), null)) : (null)) == "modal")) {
                // line 171
                echo "    data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getPermissionPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : null)), "html", null, true);
                echo "\"
    data-toggle=\"modal\"
    data-target=\"#modal\"
  ";
            } else {
                // line 175
                echo "    href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getPermissionPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : null)), "html", null, true);
                echo "\"
  ";
            }
            // line 177
            echo "  ";
            if ((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "blank", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "blank", array()), false)) : (false))) {
                // line 178
                echo "    target=\"blank\"
  ";
            }
            // line 180
            echo "  >";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "name", array())), "html", null, true);
            echo "</a>
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
        return "TopxiaAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  541 => 180,  537 => 178,  534 => 177,  528 => 175,  520 => 171,  517 => 170,  511 => 168,  509 => 167,  506 => 166,  492 => 165,  485 => 149,  482 => 148,  477 => 139,  472 => 137,  466 => 135,  461 => 133,  457 => 128,  454 => 127,  445 => 125,  440 => 124,  437 => 123,  428 => 121,  423 => 120,  421 => 119,  418 => 118,  415 => 117,  408 => 112,  405 => 111,  400 => 108,  397 => 107,  393 => 102,  390 => 101,  387 => 100,  381 => 140,  379 => 139,  376 => 138,  374 => 137,  371 => 136,  369 => 135,  366 => 134,  364 => 133,  358 => 129,  356 => 117,  351 => 114,  349 => 111,  346 => 110,  344 => 107,  338 => 103,  336 => 100,  333 => 99,  330 => 98,  325 => 143,  323 => 98,  320 => 97,  317 => 96,  312 => 43,  306 => 40,  302 => 39,  298 => 38,  294 => 37,  289 => 36,  286 => 35,  275 => 25,  272 => 24,  265 => 162,  256 => 158,  251 => 156,  248 => 155,  246 => 154,  243 => 153,  241 => 152,  238 => 151,  236 => 148,  231 => 145,  229 => 96,  226 => 95,  218 => 92,  215 => 91,  212 => 90,  210 => 89,  203 => 87,  189 => 78,  184 => 76,  176 => 73,  170 => 70,  165 => 68,  161 => 67,  157 => 65,  155 => 64,  144 => 61,  135 => 54,  129 => 52,  127 => 51,  118 => 49,  112 => 46,  108 => 45,  105 => 44,  103 => 43,  100 => 42,  98 => 35,  95 => 34,  90 => 32,  85 => 31,  83 => 30,  79 => 28,  74 => 27,  72 => 24,  66 => 21,  56 => 15,  48 => 8,  46 => 7,  44 => 6,  42 => 5,  39 => 4,  37 => 3,  35 => 2,  33 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
