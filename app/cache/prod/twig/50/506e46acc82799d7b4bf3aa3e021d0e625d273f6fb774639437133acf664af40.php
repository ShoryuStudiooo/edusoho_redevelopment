<?php

/* TopxiaAdminBundle:Default:index.html.twig */
class __TwigTemplate_cf41ce0ecf20dd273a630df4da8c0531ecdb084219b894d864676d042a65fe15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["panel"] = "dashboard";
        // line 4
        $context["script_controller"] = "default/index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理后台"), "html", null, true);
    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        // line 7
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaAdminBundle:Default:validateDomain"));
        echo "
  <div class=\"row\">
    ";
        // line 9
        if ( !(_twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.thirdCopyright"), 0) == 1)) {
            // line 10
            echo "      ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaAdminBundle:Default:getCloudNotices"));
            echo "
    ";
        }
        // line 12
        echo "
    <div class=\"
      ";
        // line 14
        if ( !(_twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.thirdCopyright"), 0) == 1)) {
            // line 15
            echo "        col-md-6
      ";
        } else {
            // line 17
            echo "        col-md-12
      ";
        }
        // line 19
        echo "      \">
      <div class=\"panel panel-default panel-150\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("状态栏"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\" id=\"system-status\" data-url=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_system_status");
        echo "\">
          <div class=\"empty\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在载入数据，请稍等。"), "html", null, true);
        echo "</div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"panel panel-default\">
    <div class=\"panel-heading clearfix\">
      <h3 class=\"panel-title\">
        ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("今日数据"), "html", null, true);
        echo " 
        <span data-toggle=\"popover\" class=\"glyphicon glyphicon-question-sign color-gray text-sm js-today-data-popover\"></span>
        <div class=\"popover-content hidden\">
          <div class=\"popover-item\">
            <div class=\"title\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录用户"), "html", null, true);
        echo "</div>
            <div class=\"content\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("15分钟内活动的登录用户"), "html", null, true);
        echo "</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("在线总数"), "html", null, true);
        echo "</div>
            <div class=\"content\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("15分钟内活动用户数，包括登录用户及未登录用户"), "html", null, true);
        echo "</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增注册"), "html", null, true);
        echo "</div>
            <div class=\"content\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("平台新增用户数，包括自主注册、第三方注册及导入"), "html", null, true);
        echo "</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增学员人次"), "html", null, true);
        echo "</div>
            <div class=\"content\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("今日加入课程和班级的总人次，1个学员加入2个课程，算2人次"), "html", null, true);
        echo "</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增会员"), "html", null, true);
        echo "</div>
            <div class=\"content\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("今日购买会员的人数"), "html", null, true);
        echo "</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未回复问答"), "html", null, true);
        echo "</div>
            <div class=\"content\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("今日新产生问题中未回答的数量"), "html", null, true);
        echo "</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未回复总数"), "html", null, true);
        echo "</div>
            <div class=\"content\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("到目前为止，未回答问题总数"), "html", null, true);
        echo "</div>
          </div>
        </div>
      </h3>

    </div>
    <div class=\"panel-body\" id=\"site-overview-table\" data-url=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_operation_analysis");
        echo "\">
      <div class=\"empty\">";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在载入数据，请稍等。"), "html", null, true);
        echo "</div>
    </div>
  </div>
  ";
        // line 109
        echo "
  <div class=\"row\">
    <div class=\"col-md-6\">
      <div class=\"panel panel-default panel-380\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <span class=\"mrl text-sm js-data-switch-time\">";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : null), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo " </span>
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-study-switch-button\"
                      data-time=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : null), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_study_statistic", array("period" => "week"));
        echo "\">最近7天
              </button>
              <button type=\"button\" class=\"btn btn-default js-study-switch-button\"
                      data-time=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : null), "monthDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_study_statistic", array("period" => "month"));
        echo "\">最近30天
              </button>
            </div>
          </div>
          <h3 class=\"panel-title\">";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单统计"), "html", null, true);
        echo "
            <span data-toggle=\"popover\"
                  class=\"glyphicon glyphicon-question-sign color-gray text-sm js-data-popover\"></span>
            <div class=\"popover-content hidden\">
              <div class=\"popover-item\">
                <div class=\"title\">";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增订单"), "html", null, true);
        echo "</div>
                <div class=\"content\">";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("平台当日产生的所有订单，包括免费和付费"), "html", null, true);
        echo "</div>
              </div>
              <div class=\"popover-item\">
                <div class=\"title\">";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("付费订单"), "html", null, true);
        echo "</div>
                <div class=\"content\">";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("平台当日产生的订单价格大于0元的订单"), "html", null, true);
        echo "</div>
              </div>
            </div>
          </h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"study-count-statistic\"
             data-url=\"";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_study_statistic", array("period" => "week"));
        echo "\" style=\"height:320px;\">

        </div>
      </div>
    </div>
    <div class=\"col-md-6\">
      <div class=\"panel panel-default panel-380\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <span class=\"mrl text-sm js-data-switch-time\">";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : null), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo " </span>
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-order-switch-button\"
                      data-time=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : null), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 156
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_statistic", array("period" => "week"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近7天"), "html", null, true);
        echo "</button>
              <button type=\"button\" class=\"btn btn-default js-order-switch-button\"
                      data-time=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : null), "monthDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 159
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_statistic", array("period" => "month"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近30天"), "html", null, true);
        echo "</button>
            </div>
          </div>
          <h3 class=\"panel-title\">";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("付费订单统计"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"pay-order-statistic\"
             data-url=\"";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_statistic", array("period" => "week"));
        echo "\" style=\"height:320px;\">

        </div>
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-8\">
      <div class=\"panel panel-default panel-420\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <span class=\"mrl text-sm js-data-switch-time\">";
        // line 177
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : null), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo " </span>
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-lesson-switch-button\"
                      data-time=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : null), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 181
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_lesson_learn_statistic", array("period" => "week"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近7天"), "html", null, true);
        echo "</button>
              <button type=\"button\" class=\"btn btn-default js-lesson-switch-button\"
                      data-time=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : null), "monthDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_lesson_learn_statistic", array("period" => "month"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近30天"), "html", null, true);
        echo "</button>
            </div>
          </div>
          <h3 class=\"panel-title\">";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课时完成数"), "html", null, true);
        echo "
            <span data-toggle=\"popover\"
                  class=\"glyphicon glyphicon-question-sign color-gray text-sm js-data-popover\"></span>
            <div class=\"popover-content hidden\">
              <div class=\"popover-item\">
                <div class=\"content\">";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("点击\"学过了\"的课时数量"), "html", null, true);
        echo "</div>
              </div>
            </div>
          </h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"study-lesson-count-statistic\"
             data-url=\"";
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_lesson_learn_statistic", array("period" => "week"));
        echo "\" style=\"height:360px;\">

        </div>
      </div>
    </div>
    <div class=\"col-md-4\">
      <div class=\"panel panel-default panel-420\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-course-switch-button\"
                      data-time=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : null), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 210
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_course_explore", array("period" => "week"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近7天"), "html", null, true);
        echo "</button>
              <button type=\"button\" class=\"btn btn-default  js-course-switch-button\"
                      data-time=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : null), "monthDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 213
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_course_explore", array("period" => "month"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近30天"), "html", null, true);
        echo "</button>
            </div>
          </div>
          <h3 class=\"panel-title\">";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程排行榜"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"course-explore-list\"
             data-url=\"";
        // line 219
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_course_explore", array("period" => "week"));
        echo "\">

        </div>
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-4\">

      <div class=\"panel panel-default panel-420 js-course-question-list\">
        <div class=\"panel-heading\">
          <a class=\"pull-right\" href=\"";
        // line 231
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_question", array("postStatus" => "unPosted"));
        echo "\"
          >";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更多"), "html", null, true);
        echo "</a>
          <h3 class=\"panel-title\">";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最新问答"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
          ";
        // line 236
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaAdminBundle:Default:unsolvedQuestionsBlock"));
        echo "
        </div>
      </div>

    </div>
    <div class=\"col-md-4\">
      <div class=\"panel panel-default panel-420\">
        <div class=\"panel-heading\">
          <a href=\"";
        // line 244
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_review");
        echo "\" class=\"pull-right\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更多"), "html", null, true);
        echo "</a>
          <h3 class=\"panel-title\">
            ";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最新评价"), "html", null, true);
        echo "
          </h3>
        </div>
        <div class=\"panel-body\">
          ";
        // line 250
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaAdminBundle:Default:courseReview"));
        echo "
        </div>
      </div>
    </div>
    <div class=\"col-md-4\">
      <div class=\"panel panel-default search-panel panel-420\">
        <div class=\"panel-heading\">
          ";
        // line 258
        echo "          <h3 class=\"panel-title\">
            ";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("热门搜索"), "html", null, true);
        echo "
            <small>";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近7天"), "html", null, true);
        echo "</small>
          </h3>
        </div>
        <div class=\"panel-body\">
          ";
        // line 264
        if ( !$this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("cloud_search.search_enabled")) {
            // line 265
            echo "            <div class=\"empty\">
              <a target=\"_blank\" href=\"";
            // line 266
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edu_cloud_search");
            echo "\">免费接入云搜索获取热门搜索关键词</a>
            </div>
          ";
        } else {
            // line 269
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaAdminBundle:Default:cloudSearchRanking"));
            echo "
          ";
        }
        // line 271
        echo "        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  523 => 271,  517 => 269,  511 => 266,  508 => 265,  506 => 264,  499 => 260,  495 => 259,  492 => 258,  482 => 250,  475 => 246,  468 => 244,  457 => 236,  451 => 233,  447 => 232,  443 => 231,  428 => 219,  422 => 216,  414 => 213,  408 => 212,  401 => 210,  395 => 209,  381 => 198,  372 => 192,  364 => 187,  356 => 184,  350 => 183,  343 => 181,  337 => 180,  329 => 177,  314 => 165,  308 => 162,  300 => 159,  294 => 158,  287 => 156,  281 => 155,  273 => 152,  261 => 143,  252 => 137,  248 => 136,  242 => 133,  238 => 132,  230 => 127,  223 => 123,  217 => 122,  211 => 119,  205 => 118,  197 => 115,  189 => 109,  183 => 70,  179 => 69,  170 => 63,  166 => 62,  160 => 59,  156 => 58,  150 => 55,  146 => 54,  140 => 51,  136 => 50,  130 => 47,  126 => 46,  120 => 43,  116 => 42,  110 => 39,  106 => 38,  99 => 34,  87 => 25,  83 => 24,  78 => 22,  73 => 19,  69 => 17,  65 => 15,  63 => 14,  59 => 12,  53 => 10,  51 => 9,  45 => 7,  43 => 6,  40 => 5,  34 => 2,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
