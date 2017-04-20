<?php

/* TopxiaAdminBundle:System:user-fields.html.twig */
class __TwigTemplate_d01a75f6e05f822ebd44d68a9975212ac6359a7fa657a30baffa1f237c42a3af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:user-fields.html.twig", 1);
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
        $context["script_controller"] = "system/user-fields";
        // line 5
        $context["menu"] = "admin_setting_user_fields";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_page_buttons($context, array $blocks = array())
    {
        // line 7
        echo "<button type=\"button\" class=\"btn btn-success btn-sm pull-right\" data-toggle=\"modal\" data-target=\"#myModal\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加字段"), "html", null, true);
        echo "</button>
";
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "
";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
<form action=\"\" class=\"form-horizontal\" method=\"post\">
  <fieldset>
    <legend>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("自定义字段设置"), "html", null, true);
        echo "</legend>
    <table class=\"table table-striped table-hover\" id=\"course-table\">
      <thead>
      <tr>
        <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("字段名称"), "html", null, true);
        echo "</th>
        <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("类型"), "html", null, true);
        echo "</th>
        <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("是否显示"), "html", null, true);
        echo "</th>
        <th>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("显示序号"), "html", null, true);
        echo "</th>
        <!-- <th>创建时间</th> -->
        <th>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
      </tr>
      </thead>
      <tbody>
        ";
        // line 27
        $this->loadTemplate("TopxiaAdminBundle:System:user-fields.table.tr.html.twig", "TopxiaAdminBundle:System:user-fields.html.twig", 27)->display($context);
        // line 28
        echo "      </tbody>
    </table>
  </fieldset>
  
  
  <fieldset>
    <legend>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个人资料设置"), "html", null, true);
        echo "</legend>

    ";
        // line 36
        $context["commonFields"] = _twig_default_filter($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("userInfoFields"), null);
        // line 37
        echo "
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买课程或班级时填写个人资料"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 43
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("buy_fill_userinfo", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), (($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "buy_fill_userinfo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "buy_fill_userinfo", array()), 0)) : (0)));
        echo "
        <p class=\"help-block\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启后，"), "html", null, true);
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%user_name%购买课程时，需填写个人资料", array("%user_name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")))), "html", null, true);
        }
        echo "</p>
      </div>

      <div class=\"controls col-md-8 col-md-offset-3\" id=\"show-list\">
        <div class=\"pull-left\">
          ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "userinfoFields", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "userinfoFields", array()), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 50
            echo "            ";
            $context["userCustomField"] = (($this->getAttribute((isset($context["userFields"]) ? $context["userFields"] : null), $context["sort"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["userFields"]) ? $context["userFields"] : null), $context["sort"], array(), "array"), null)) : (null));
            // line 51
            echo "            ";
            $context["userInfoFieldsDict"] = _twig_default_filter($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("userInfoFields", $context["sort"]), null);
            // line 52
            echo "            ";
            if ((isset($context["userCustomField"]) ? $context["userCustomField"] : null)) {
                // line 53
                echo "              <button type=\"button\" class=\"btn btn-default btn-xs\">
                ";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userCustomField"]) ? $context["userCustomField"] : null), "title", array()), "html", null, true);
                echo "
              </button>
            ";
            } elseif (            // line 56
(isset($context["userInfoFieldsDict"]) ? $context["userInfoFieldsDict"] : null)) {
                // line 57
                echo "              <button type=\"button\" class=\"btn btn-default btn-xs\">
                ";
                // line 58
                echo twig_escape_filter($this->env, (isset($context["userInfoFieldsDict"]) ? $context["userInfoFieldsDict"] : null), "html", null, true);
                echo "
              </button>
            ";
            }
            // line 61
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </div>
          
        <div class=\"pull-right \">
          <a href=\"javascript:\" id=\"show-list-btn\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑"), "html", null, true);
        echo " 
            <span class=\"glyphicon glyphicon-chevron-down\"></span>
          </a>
        </div>
      </div>

      <div class=\"controls col-md-8 col-md-offset-2\" id=\"show-register-list\" style=\"display:none\">
        <div class=\"form-group\">
          <ul class=\"register-list sortable-list list-unstyled col-md-12\" data-role=\"list\">
            ";
        // line 74
        $context["checkedFieldsKeys"] = (($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "userinfoFields", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "userinfoFields", array()), array())) : (array()));
        // line 75
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commonFields"]) ? $context["commonFields"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["field"]) {
            if ((isset($context["commonFields"]) ? $context["commonFields"] : null)) {
                // line 76
                echo "              <li class=\"list-group-item clearfix\" data-role=\"item\" >
                <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>&nbsp;
                <input type=\"checkbox\" name=\"userinfoFields[]\" value=\"";
                // line 78
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" ";
                if (twig_in_filter($context["key"], (isset($context["checkedFieldsKeys"]) ? $context["checkedFieldsKeys"] : null))) {
                    echo "checked=true";
                }
                echo " />
                <input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"";
                // line 79
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" /> 
                ";
                // line 80
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo "
                ";
                // line 81
                if ((($context["key"] == "email") || ($context["key"] == "mobile"))) {
                    echo "<span class=\"text-muted\">  (";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("带格式校检"), "html", null, true);
                    echo ")</span>";
                }
                // line 82
                echo "              </li>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "
            ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userFields"]) ? $context["userFields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            if (((array_key_exists("userFields", $context)) ? (_twig_default_filter((isset($context["userFields"]) ? $context["userFields"] : null), null)) : (null))) {
                // line 86
                echo "              <li class=\"list-group-item clearfix\" data-role=\"item\" >
                <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>&nbsp;
                <input type=\"checkbox\" name=\"userinfoFields[]\" value=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                echo "\" ";
                if (twig_in_filter($this->getAttribute($context["field"], "fieldName", array()), (isset($context["checkedFieldsKeys"]) ? $context["checkedFieldsKeys"] : null))) {
                    echo "checked=true";
                }
                echo " />
                <input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                echo "\" /> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                echo "
              </li>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "          </ul>

          <div class=\"help-block col-md-12\"><span class=\"text-success\">";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("可拖动调整次序。酌情勾选需要收集的字段，若需要新的字段，请在［自定义字段设置］中添加。"), "html", null, true);
        echo "</span></div>

        </div>
        <div class=\"mbl\" style=\"text-align:center;\">
          <a href=\"javascript:\" id=\"hide-list-btn\">";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收起 "), "html", null, true);
        echo "
            <span class=\"glyphicon glyphicon-chevron-up\"></span>
          </a>
        </div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录后填写个人资料"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 110
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("fill_userinfo_after_login", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("auth.fill_userinfo_after_login"), 0));
        echo "
        <p class=\"help-block\">";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启后，"), "html", null, true);
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%user_name%登录后需填写个人资料", array("%user_name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")))), "html", null, true);
        }
        echo "</p>
      </div>

      <div class=\"controls col-md-8 col-md-offset-3\" id=\"show-checked-fields-list\">
        <div class=\"pull-left\">
          ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute((isset($context["authSetting"]) ? $context["authSetting"] : null), "registerSort", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["authSetting"]) ? $context["authSetting"] : null), "registerSort", array()), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 117
            echo "            ";
            if (($context["sort"] == "emailOrMobile")) {
                $context["sort"] = "email";
            }
            // line 118
            echo "            ";
            $context["userCustomField"] = (($this->getAttribute((isset($context["userFields"]) ? $context["userFields"] : null), $context["sort"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["userFields"]) ? $context["userFields"] : null), $context["sort"], array(), "array"), null)) : (null));
            // line 119
            echo "            ";
            $context["userInfoFieldsDict"] = _twig_default_filter($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("userInfoFields", $context["sort"]), null);
            // line 120
            echo "            ";
            if ((isset($context["userCustomField"]) ? $context["userCustomField"] : null)) {
                // line 121
                echo "              <button type=\"button\" class=\"btn btn-default btn-xs\">
                ";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userCustomField"]) ? $context["userCustomField"] : null), "title", array()), "html", null, true);
                echo "
              </button>
            ";
            } elseif (            // line 124
(isset($context["userInfoFieldsDict"]) ? $context["userInfoFieldsDict"] : null)) {
                // line 125
                echo "              <button type=\"button\" class=\"btn btn-default btn-xs\">
                ";
                // line 126
                echo twig_escape_filter($this->env, (isset($context["userInfoFieldsDict"]) ? $context["userInfoFieldsDict"] : null), "html", null, true);
                echo "
              </button>
            ";
            }
            // line 129
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "        </div>
          
        <div class=\"pull-right \">
          <a href=\"javascript:\" id=\"show-fields-list-btn\">";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑 "), "html", null, true);
        echo "
            <span class=\"glyphicon glyphicon-chevron-down\"></span>
          </a>
        </div>
      </div>

      <div class=\"controls col-md-8 col-md-offset-2\" id=\"show-fields-list\" style=\"display:none\">
        <div class=\"form-group\">
          <ul class=\"fill-userinfo-list sortable-list list-unstyled col-md-12\" data-role=\"list\">
            ";
        // line 142
        $context["checkedUserFieldsKeys"] = (($this->getAttribute((isset($context["authSetting"]) ? $context["authSetting"] : null), "registerSort", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["authSetting"]) ? $context["authSetting"] : null), "registerSort", array()), array())) : (array()));
        // line 143
        echo "
            ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commonFields"]) ? $context["commonFields"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["field"]) {
            if ((isset($context["commonFields"]) ? $context["commonFields"] : null)) {
                // line 145
                echo "              <li class=\"list-group-item clearfix\" data-role=\"item\" >
                <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>&nbsp;
                <input type=\"checkbox\" name=\"registerSort[]\" value=\"";
                // line 147
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" ";
                if (twig_in_filter($context["key"], (isset($context["checkedUserFieldsKeys"]) ? $context["checkedUserFieldsKeys"] : null))) {
                    echo "checked=true";
                }
                echo " />
                <input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"";
                // line 148
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" /> 
                ";
                // line 149
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo "
                ";
                // line 150
                if ((($context["key"] == "email") || ($context["key"] == "mobile"))) {
                    echo "<span class=\"text-muted\">  (";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("带格式校检"), "html", null, true);
                    echo ")</span>";
                }
                // line 151
                echo "              </li>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "
            ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userFields"]) ? $context["userFields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            if (((array_key_exists("userFields", $context)) ? (_twig_default_filter((isset($context["userFields"]) ? $context["userFields"] : null), null)) : (null))) {
                // line 155
                echo "              <li class=\"list-group-item clearfix\" data-role=\"item\" >
                <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>&nbsp;
                <input type=\"checkbox\" name=\"registerSort[]\" value=\"";
                // line 157
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                echo "\" ";
                if (twig_in_filter($this->getAttribute($context["field"], "fieldName", array()), (isset($context["checkedUserFieldsKeys"]) ? $context["checkedUserFieldsKeys"] : null))) {
                    echo "checked=true";
                }
                echo " />
                <input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                echo "\" /> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                echo "
              </li>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "          </ul>

          <div class=\"help-block col-md-12\"><span class=\"text-success\">";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("可拖动调整次序。酌情勾选需要收集的字段，若需要新的字段，请在［自定义字段设置］中添加。"), "html", null, true);
        echo "</span></div>

        </div>
        <div class=\"mbl\" style=\"text-align:center;\">
          <a href=\"javascript:\" id=\"hide-fields-list-btn\">";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收起 "), "html", null, true);
        echo "
            <span class=\"glyphicon glyphicon-chevron-up\"></span>
          </a>
        </div>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("其它设置"), "html", null, true);
        echo "</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("加入免费课程要求设置头像"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 182
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("avatar_alert", array("open" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), "close" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("user_partner.avatar_alert"), "close"));
        echo "
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户修改用户名"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 190
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("nickname_enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("user_partner.nickname_enabled"), 0));
        echo "
      </div>
    </div>
  </fieldset>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
        echo "</button>  
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  <input type=\"hidden\" name='_cloud_sms'  value= \"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("cloud_sms.sms_enabled"), "html", null, true);
        echo "\">
</form>

";
        // line 205
        $this->loadTemplate("TopxiaAdminBundle:System:user-fields.modal.html.twig", "TopxiaAdminBundle:System:user-fields.html.twig", 205)->display($context);
        // line 206
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:user-fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  517 => 206,  515 => 205,  509 => 202,  505 => 201,  499 => 198,  488 => 190,  482 => 187,  474 => 182,  468 => 179,  462 => 176,  450 => 167,  443 => 163,  439 => 161,  427 => 158,  419 => 157,  415 => 155,  410 => 154,  407 => 153,  399 => 151,  393 => 150,  389 => 149,  385 => 148,  377 => 147,  373 => 145,  368 => 144,  365 => 143,  363 => 142,  351 => 133,  346 => 130,  340 => 129,  334 => 126,  331 => 125,  329 => 124,  324 => 122,  321 => 121,  318 => 120,  315 => 119,  312 => 118,  307 => 117,  303 => 116,  292 => 111,  288 => 110,  282 => 107,  270 => 98,  263 => 94,  259 => 92,  247 => 89,  239 => 88,  235 => 86,  230 => 85,  227 => 84,  219 => 82,  213 => 81,  209 => 80,  205 => 79,  197 => 78,  193 => 76,  187 => 75,  185 => 74,  173 => 65,  168 => 62,  162 => 61,  156 => 58,  153 => 57,  151 => 56,  146 => 54,  143 => 53,  140 => 52,  137 => 51,  134 => 50,  130 => 49,  119 => 44,  115 => 43,  109 => 40,  104 => 37,  102 => 36,  97 => 34,  89 => 28,  87 => 27,  80 => 23,  75 => 21,  71 => 20,  67 => 19,  63 => 18,  56 => 14,  50 => 11,  47 => 10,  44 => 9,  37 => 7,  34 => 6,  30 => 1,  28 => 5,  26 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
