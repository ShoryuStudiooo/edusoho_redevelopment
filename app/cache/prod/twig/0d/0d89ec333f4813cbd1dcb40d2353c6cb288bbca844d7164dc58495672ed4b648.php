<?php

/* TopxiaAdminBundle:System:Report/status.html.twig */
class __TwigTemplate_c5ad5c4fc8c122e182ce1322d9f594dc48c79c7f787015cf15e027d12ef27a12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:Report/status.html.twig", 1);
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
        $context["menu"] = "admin_report_status_list";
        // line 4
        $context["script_controller"] = "system/report-status";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "  <table class=\"table table-striped table-bordered\">
    <thead>
    <tr>
      <th width=\"40%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("环境检测"), "html", null, true);
        echo "</th>
      <th width=\"20%\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("推荐配置"), "html", null, true);
        echo "</th>
      <th width=\"20%\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("当前状态"), "html", null, true);
        echo "</th>
      <th width=\"20%\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最低要求"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>

    <tr>
      <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作系统"), "html", null, true);
        echo "</td>
      <td>Linux</td>
      <td>
        <span class=\"text-success\">√ ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "os", array()), "html", null, true);
        echo "</span>
      </td>
      <td>--</td>
    </tr>

    <tr>
      <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PHP版本"), "html", null, true);
        echo " （<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_report_status_php");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更多信息"), "html", null, true);
        echo "</a>）</td>
      <td>5.5.x</td>
      <td>
        ";
        // line 31
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "phpVersionOk", array())) {
            // line 32
            echo "          <span class=\"text-success\">√ ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "phpVersion", array()), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 34
            echo "          <span class=\"text-danger\">X ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "phpVersion", array()), "html", null, true);
            echo "</span>
        ";
        }
        // line 36
        echo "      </td>
      <td>5.3.3</td>
    </tr>

    <tr>
      <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PHP运行用户"), "html", null, true);
        echo "</td>
      <td>-</td>
      <td>
        <span class=\"text-success\">√ ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "user", array()), "html", null, true);
        echo "</span>
      </td>
      <td>-</td>
    </tr>

    <tr>
      <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("安全模式"), "html", null, true);
        echo "</td>
      <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭"), "html", null, true);
        echo "</td>
      <td>
        ";
        // line 53
        if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "safemode", array()) == "Off")) {
            // line 54
            echo "          <span class=\"text-danger\">X ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 56
            echo "          <span class=\"text-success\">√ ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭"), "html", null, true);
            echo "</span>
        ";
        }
        // line 58
        echo "      </td>
      <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭"), "html", null, true);
        echo "</td>
    </tr>

    <tr>
      <td>PDO_MySQL</td>
      <td>";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("必须"), "html", null, true);
        echo "</td>
      <td>
        ";
        // line 66
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "pdoMysqlOk", array())) {
            // line 67
            echo "          <span class=\"text-success\">√ ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已安装"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 69
            echo "          <span class=\"text-danger\">X ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("尚未安装MySQL_PDO"), "html", null, true);
            echo "</span>
        ";
        }
        // line 71
        echo "      </td>
      <td>";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("必须"), "html", null, true);
        echo "</td>
    </tr>

    <tr>
      <td>
        ";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("文件上传大小"), "html", null, true);
        echo "
        <div class=\"text-muted\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("该值决定可以上传视频的最大大小"), "html", null, true);
        echo "</div>
      </td>
      <td>";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("大于200M"), "html", null, true);
        echo "</td>
      <td>
        ";
        // line 82
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "uploadMaxFilesizeOk", array())) {
            // line 83
            echo "          <span class=\"text-success\">√ ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "uploadMaxFilesize", array()), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 85
            echo "          <span class=\"text-danger\">X ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "uploadMaxFilesize", array()), "html", null, true);
            echo "</span>
        ";
        }
        // line 87
        echo "      </td>
      <td>2M</td>
    </tr>

    <tr>
      <td>
        ";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("表单数据大小"), "html", null, true);
        echo "
        <div class=\"text-muted\">";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("该值不能小于文件上传大小的值"), "html", null, true);
        echo "</div>
      </td>
      <td>";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("大于200M"), "html", null, true);
        echo "</td>
      <td>
        ";
        // line 98
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "postMaxsizeOk", array())) {
            // line 99
            echo "          <span class=\"text-success\">√ ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "postMaxsize", array()), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 101
            echo "          <span class=\"text-danger\">X ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "postMaxsize", array()), "html", null, true);
            echo "</span>
        ";
        }
        // line 103
        echo "      </td>
      <td>8M</td>
    </tr>

    <tr>
      <td>
        ";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PHP脚本最大执行时间"), "html", null, true);
        echo "
        <div class=\"text-muted\">";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("该值决定上传视频时，最长可使用的时间"), "html", null, true);
        echo "</div>
      </td>
      <td>";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("大于300秒"), "html", null, true);
        echo "</td>
      <td>
        ";
        // line 114
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "maxExecutionTimeOk", array())) {
            // line 115
            echo "          <span class=\"text-success\">√ ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "maxExecutionTime", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("秒"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 117
            echo "          <span class=\"text-danger\">X ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "maxExecutionTime", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("秒"), "html", null, true);
            echo "</span>
        ";
        }
        // line 119
        echo "      </td>
      <td>";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("30秒"), "html", null, true);
        echo "</td>
    </tr>

    <tr>
      <td>
        ";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PHP扩展："), "html", null, true);
        echo "mbstring
        <div class=\"text-muted\">";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("该扩展用于处理中文字符"), "html", null, true);
        echo "</div>
      </td>
      <td>";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("必须"), "html", null, true);
        echo "</td>
      <td>
        ";
        // line 130
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "mbstringOk", array())) {
            // line 131
            echo "          <span class=\"text-success\">√ ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已安装"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 133
            echo "          <span class=\"text-danger\">X ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("尚未安装"), "html", null, true);
            echo "</span>
        ";
        }
        // line 135
        echo "      </td>
      <td>";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("必须"), "html", null, true);
        echo "</td>
    </tr>

    <tr>
      <td>
        ";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PHP扩展："), "html", null, true);
        echo "curl
        <div class=\"text-muted\">";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("该扩展用于远程读取文件"), "html", null, true);
        echo "</div>
      </td>
      <td>";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("必须"), "html", null, true);
        echo "</td>
      <td>
        ";
        // line 146
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "curlOk", array())) {
            // line 147
            echo "          <span class=\"text-success\">√ ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已安装"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 149
            echo "          <span class=\"text-danger\">X ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("尚未安装"), "html", null, true);
            echo "</span>
        ";
        }
        // line 151
        echo "      </td>
      <td>";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("必须"), "html", null, true);
        echo "</td>
    </tr>

    <tr>
      <td>
        ";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PHP扩展："), "html", null, true);
        echo "GD
        <div class=\"text-muted\">";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("该扩展用于处理图片"), "html", null, true);
        echo "</div>
      </td>
      <td>";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("必须"), "html", null, true);
        echo "</td>
      <td>
        ";
        // line 162
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "gdOk", array())) {
            // line 163
            echo "          <span class=\"text-success\">√ ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已安装"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 165
            echo "          <span class=\"text-danger\">X ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("尚未安装"), "html", null, true);
            echo "</span>
        ";
        }
        // line 167
        echo "      </td>
      <td>";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("必须"), "html", null, true);
        echo "</td>
    </tr>
    </tbody>
  </table>

  <table class=\"table table-hover table-striped table-bordered\">
    <thead>
    <tr>
      <th width=\"60%\">";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("通信情况"), "html", null, true);
        echo "</th>
      <th width=\"40%\">";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("状态"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td>";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("与Discuz Ucenter的连接"), "html", null, true);
        echo "</td>
      <td><span class=\"text-muted js-ucenter-check\"
                data-url=\"";
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_report_status_ucenter");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在检测....."), "html", null, true);
        echo "</span></td>
    </tr>
    ";
        // line 186
        if ((_twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("cloud_email.status"), "disable") == "disable")) {
            // line 187
            echo "      <tr>
        <td>";
            // line 188
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邮件发送"), "html", null, true);
            echo " <i class=\"glyphicon glyphicon-info-sign text-info\" data-toggle=\"tooltip\" data-placement=\"top\"
                    title=\"";
            // line 189
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("每次检测，都会向当前用户发一封测试邮件，请保证当前用户的邮箱正确,邮件异常请到系统日志查看"), "html", null, true);
            echo "\"></i></td>
        <td><span class=\"text-muted js-email-send-check\" data-url=\"";
            // line 190
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_report_status_email_send");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在检测....."), "html", null, true);
            echo "</span>
        </td>
      </tr>
    ";
        }
        // line 194
        echo "    </tbody>
  </table>

  <div style=\"overflow:auto;max-height:400px;word-break:break-all;\">
    <table class=\"table table-hover table-striped table-bordered\" id=\"direcory-check-table\"
           data-url=\"";
        // line 199
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_report_status_directory");
        echo "\">
      <thead>
      <tr>
        <th width=\"60%\">";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("系统文件、目录权限检查"), "html", null, true);
        echo "</th>
        <th width=\"20%\">";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("当前状态"), "html", null, true);
        echo "</th>
        <th width=\"20%\">";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("所需状态"), "html", null, true);
        echo "</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td colspan=\"6\" style=\"text-align: center;color: #c1c1c1;padding: 50px;\">";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正常扫描文件......"), "html", null, true);
        echo "</td>
      </tr>
      </tbody>
    </table>
  </div>

  <div style=\"overflow:auto;max-height:400px;word-break:break-all;\">
    <table class=\"table table-hover table-striped table-bordered\" id=\"direcory-check-table\"
           data-url=\"";
        // line 217
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_report_status_directory");
        echo "\">
      <thead>
      <tr>
        <th width=\"30%\">";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("系统空间占用"), "html", null, true);
        echo "</th>
        <th width=\"20%\">";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("可用"), "html", null, true);
        echo "</th>
        <th width=\"25%\">";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("总共"), "html", null, true);
        echo "</th>
        <th width=\"25%\">";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("剩余"), "html", null, true);
        echo "</th>
      </tr>
      </thead>
      <tbody>
        ";
        // line 227
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["systemDiskUsage"]) ? $context["systemDiskUsage"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["diskUsage"]) {
            // line 228
            echo "          <tr>
            <td>
              ";
            // line 230
            echo twig_escape_filter($this->env, $this->getAttribute($context["diskUsage"], "name", array()), "html", null, true);
            echo "
              <a class=\"glyphicon glyphicon-question-sign text-muted pull-center\" data-toggle=\"popover\"
                 data-trigger=\"hover\" data-placement=\"top\" data-content=\"";
            // line 232
            echo twig_escape_filter($this->env, $this->getAttribute($context["diskUsage"], "title", array()), "html", null, true);
            echo "\">
              </a>
            </td>
            <td> ";
            // line 235
            echo twig_escape_filter($this->env, $this->getAttribute($context["diskUsage"], "free", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 236
            echo twig_escape_filter($this->env, $this->getAttribute($context["diskUsage"], "total", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 237
            echo twig_escape_filter($this->env, $this->getAttribute($context["diskUsage"], "rate", array()), "html", null, true);
            echo " </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diskUsage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        echo "      </tbody>
    </table>
  </div>


";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:Report/status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  567 => 240,  558 => 237,  554 => 236,  550 => 235,  544 => 232,  539 => 230,  535 => 228,  531 => 227,  524 => 223,  520 => 222,  516 => 221,  512 => 220,  506 => 217,  495 => 209,  487 => 204,  483 => 203,  479 => 202,  473 => 199,  466 => 194,  457 => 190,  453 => 189,  449 => 188,  446 => 187,  444 => 186,  437 => 184,  432 => 182,  424 => 177,  420 => 176,  409 => 168,  406 => 167,  400 => 165,  394 => 163,  392 => 162,  387 => 160,  382 => 158,  378 => 157,  370 => 152,  367 => 151,  361 => 149,  355 => 147,  353 => 146,  348 => 144,  343 => 142,  339 => 141,  331 => 136,  328 => 135,  322 => 133,  316 => 131,  314 => 130,  309 => 128,  304 => 126,  300 => 125,  292 => 120,  289 => 119,  282 => 117,  275 => 115,  273 => 114,  268 => 112,  263 => 110,  259 => 109,  251 => 103,  245 => 101,  239 => 99,  237 => 98,  232 => 96,  227 => 94,  223 => 93,  215 => 87,  209 => 85,  203 => 83,  201 => 82,  196 => 80,  191 => 78,  187 => 77,  179 => 72,  176 => 71,  170 => 69,  164 => 67,  162 => 66,  157 => 64,  149 => 59,  146 => 58,  140 => 56,  134 => 54,  132 => 53,  127 => 51,  123 => 50,  114 => 44,  108 => 41,  101 => 36,  95 => 34,  89 => 32,  87 => 31,  77 => 28,  68 => 22,  62 => 19,  53 => 13,  49 => 12,  45 => 11,  41 => 10,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
