<?php

/* ClassroomBundle:Classroom:classroom-join-header.html.twig */
class __TwigTemplate_f595e9eabc27c428e6ead6779db07532e9d4a37a8e485ac757ca4d95999aecb0 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "ClassroomBundle:Classroom:classroom-join-header.html.twig", 1);
        // line 2
        $context["memberDeadline"] = (($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "deadline", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "deadline", array()), 0)) : (0));
        // line 3
        echo "<section class=\"class-header after ";
        if (twig_in_filter("auditor", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()))) {
            echo " auditor";
        }
        echo "\">
  <div class=\"container\">

    <ol class=\"breadcrumb breadcrumb-o\">
      <li><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("首页"), "html", null, true);
        echo "</a></li>
      ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_explore", array("category" => $this->getAttribute($context["breadcrumb"], "code", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "name", array()), "html", null, true);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "      <li class=\"active\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "</li>
    </ol>
    
    ";
        // line 14
        if (((($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "locked", array()), "0")) : ("0")) == "1")) {
            // line 15
            echo "      <div class=\"alert alert-warning\">
        您的退款申请已提交，请等待管理员的处理。
        <button class=\"btn btn-warning btn-sm cancel-refund\" data-url=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_cancel_refund", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "targetType" => "classroom")), "html", null, true);
            echo "\">取消退款，继续学习！</button>
      </div>
    ";
        }
        // line 20
        echo "
    ";
        // line 21
        if ((((array_key_exists("vipChecked", $context)) ? (_twig_default_filter((isset($context["vipChecked"]) ? $context["vipChecked"] : null), "ok")) : ("ok")) != "ok")) {
            // line 22
            echo "      <div class=\"alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        ";
            // line 24
            if (((isset($context["vipChecked"]) ? $context["vipChecked"] : null) == "not_member")) {
                // line 25
                echo "          ";
                echo twig_escape_filter($this->env, (("您已经不是会员，不能学习此" . _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), "班级")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("！")), "html", null, true);
                echo "
          ";
                // line 26
                if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0)) {
                    // line 27
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请重新"), "html", null, true);
                    echo "<a class=\"alert-link\" href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vip");
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开通会员"), "html", null, true);
                    echo "</a>
          ";
                } else {
                    // line 29
                    echo "            <a class=\"alert-link js-exit\" href=\"javascript:;\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_exit", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                    echo "\" data-go=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("退出"), "html", null, true);
                    echo "</a>
          ";
                }
                // line 30
                echo "！
        ";
            } elseif ((            // line 31
(isset($context["vipChecked"]) ? $context["vipChecked"] : null) == "member_expired")) {
                // line 32
                echo "          ";
                echo twig_escape_filter($this->env, (("您的会员已过期，不能学习此" . _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), "班级")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("，请先")), "html", null, true);
                echo "<a class=\"alert-link\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vip_renew");
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("续费"), "html", null, true);
                echo "</a>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("。"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 33
(isset($context["vipChecked"]) ? $context["vipChecked"] : null) == "level_low")) {
                // line 34
                echo "          ";
                echo twig_escape_filter($this->env, (("会员等级不够，不能学习此" . _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), "班级")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("。请先")), "html", null, true);
                echo "<a class=\"alert-link\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vip_upgrade");
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("升级会员"), "html", null, true);
                echo "</a>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("。"), "html", null, true);
                echo "
        ";
            } else {
                // line 36
                echo "          ";
                echo twig_escape_filter($this->env, (("该" . _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), "班级")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已不支持会员免费学，")), "html", null, true);
                echo "<a class=\"alert-link js-exit\" href=\"javascript:;\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_exit", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                echo "\" data-go=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("退出"), "html", null, true);
                echo "</a>
        ";
            }
            // line 38
            echo "      </div>
    ";
        }
        // line 40
        echo "
    <div class=\"class-header-mian\">
      <div class=\"class-bg-layer\"></div>
      <div class=\"class-header-bg clearfix\">
        <div class=\"class-img\">
          <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
            <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFpath($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "largePicture", array()), "classroom.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
          </a>
        </div>
        <div class=\"class-info\">
          <h2 class=\"title\">
            ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "
            <span class=\"es-qrcode top\" data-url=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_qrcode", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
              <i class=\"es-icon es-icon-qrcode\"></i>
              <span class=\"qrcode-popover\">
                <img src=\"\" alt=\"\">
                ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("扫二维码继续学习"), "html", null, true);
        echo "
                ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("二维码时效为半小时"), "html", null, true);
        echo "
              </span>
            </span>
          </h2>
          <div class=\"metas\">
            <div class=\"score\">
              ";
        // line 63
        echo $context["web_macro"]->getstar($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "rating", array()));
        echo "
              <span>(";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "ratingNum", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("评价"), "html", null, true);
        echo ")</span>
            </div>
            ";
        // line 66
        if (($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()) == "auditor")) {
            // line 67
            echo "              <div class=\"price\">
                ";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("价格："), "html", null, true);
            echo " <span>";
            if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_enabled") && ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.price_type") == "Coin"))) {
                // line 69
                echo "                      ";
                if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0)) {
                    // line 70
                    echo "                     ";
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) * $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.cash_rate")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_name"), "html", null, true);
                    echo "
                      ";
                } else {
                    // line 72
                    echo "                      ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费"), "html", null, true);
                    echo "
                      ";
                }
                // line 74
                echo "                  ";
            } else {
                // line 75
                echo "                    ";
                if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0)) {
                    // line 76
                    echo "                      ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("元"), "html", null, true);
                    echo "
                    ";
                } else {
                    // line 78
                    echo "                      ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费"), "html", null, true);
                    echo "
                    ";
                }
                // line 80
                echo "                  ";
            }
            echo "</span>
              </div>
            ";
        }
        // line 83
        echo "            <div class=\"hidden-sm fsn\">
              ";
        // line 84
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "expiryMode", array()) != "none")) {
            // line 85
            echo "                ";
            if ((twig_in_filter("student", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array())) || twig_in_filter("member", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array())))) {
                // line 86
                echo "                  <span class=\"mrm\">班级有效期</span>
                  <span>";
                // line 87
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["memberDeadline"]) ? $context["memberDeadline"] : null), "Y-n-d"), "html", null, true);
                echo "</span>
                ";
            }
            // line 89
            echo "              ";
        }
        // line 90
        echo "            </div>
          </div>
          
          <div class=\"class-serve hidden-sm hidden-xs\">
            <div class=\"serve-frame\">
              ";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("承诺服务"), "html", null, true);
        echo "
            </div>
            ";
        // line 97
        $this->loadTemplate("ClassroomBundle:Classroom:service-block.html.twig", "ClassroomBundle:Classroom:classroom-join-header.html.twig", 97)->display(array_merge($context, array("services" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "service", array()))));
        // line 98
        echo "          </div>
        </div>
        <div class=\"class-operation\">
          ";
        // line 101
        if (((((isset($context["memberDeadline"]) ? $context["memberDeadline"] : null) != 0) && (twig_date_converter($this->env, (isset($context["memberDeadline"]) ? $context["memberDeadline"] : null)) < twig_date_converter($this->env))) && (twig_in_filter("student", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array())) || twig_in_filter("member", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()))))) {
            // line 102
            echo "            <div class=\"class-deadline\">
              ";
            // line 103
            if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "expiryMode", array()) == "date")) {
                // line 104
                echo "                 <div  class=\"alert alert-warning\">你的班级已过有效期，无法继续学习</div>
              ";
            } elseif (($this->getAttribute(            // line 105
(isset($context["classroom"]) ? $context["classroom"] : null), "expiryMode", array()) == "days")) {
                // line 106
                echo "               <div class=\"alert alert-warning\">你的班级已过有效期，无法继续学习，请<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_member_deadline_reach", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                echo "\">
                  ";
                // line 107
                if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "buyable", array()) == 1)) {
                    // line 108
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("重新购买"), "html", null, true);
                    echo "
                  ";
                } else {
                    // line 110
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("重新加入"), "html", null, true);
                    echo "
                  ";
                }
                // line 112
                echo "                </a></div>
              ";
            }
            // line 114
            echo "            <div>
          ";
        } else {
            // line 116
            echo "            <ul class='class-data clearfix ";
            if (((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null) && twig_in_filter("auditor", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array())))) {
                echo "hidden-sm";
            } else {
                echo "two-col";
            }
            echo "'>
              <li>
                <p><i class=\"es-icon es-icon-person\"></i></p>
                <p>";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "studentNum", array()) + $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "auditorNum", array())), "html", null, true);
            echo ")</p>
              </li>
              <li>
                <span class=\"es-share top\">
                  <a class=\"dropdown-toggle\" href=\"\" data-toggle=\"dropdown\"  aria-labelledby=\"dropdownMenu1\">
                    <p><i class=\"es-icon es-icon-share\"></i></p>
                    <p>";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分享"), "html", null, true);
            echo "</p>
                  </a>
                  ";
            // line 127
            $this->loadTemplate("TopxiaWebBundle:Common:share-dropdown.html.twig", "ClassroomBundle:Classroom:classroom-join-header.html.twig", 127)->display(array_merge($context, array("type" => "classroom")));
            echo " 
                </span>
              </li>
              ";
            // line 130
            if (((twig_in_filter("auditor", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array())) && (isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null)) && $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "showable", array()))) {
                // line 131
                echo "                <li class=\"hidden-xs color-warning icon-vip\" title=\"会员";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), "班级"), "html", null, true);
                echo "\" data-content=\"";
                $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-vip.html.twig", "ClassroomBundle:Classroom:classroom-join-header.html.twig", 131)->display(array_merge($context, array("courseVip" => (isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null), "userVipStatus" => (isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null))));
                echo "\" data-original-title=\"会员";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), "班级"), "html", null, true);
                echo "\">
                  <i class=\"es-icon es-icon-crown\"></i><br>
                  ";
                // line 133
                $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-vip-link.html.twig", "ClassroomBundle:Classroom:classroom-join-header.html.twig", 133)->display(array_merge($context, array("userVipStatus" => (isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null), "level" => (isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null))));
                // line 134
                echo "                </li>
              ";
            }
            // line 136
            echo "            </ul>
          ";
        }
        // line 138
        echo "          ";
        if (twig_in_filter("auditor", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()))) {
            // line 139
            echo "            <div class=\"class-auditor hidden-sm\">
              ";
            // line 140
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您现在是"), "html", null, true);
            echo "<span class=\"color-warning\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("旁听生"), "html", null, true);
            echo "</span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("，不能完整学习"), "html", null, true);
            echo "<i class=\"es-icon es-icon-help color-primary\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("旁听生只能参与话题讨论，正式学员可以完整地学习所有内容，享受所有教学服务"), "html", null, true);
            echo "\"></i><br>
              
              ";
            // line 142
            if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "showable", array()) && ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) != "closed"))) {
                // line 143
                echo "                <div class=\"btn-buy\">
                  ";
                // line 144
                $this->loadTemplate("ClassroomBundle:Classroom:Part/classroom-buy-btn.html.twig", "ClassroomBundle:Classroom:classroom-join-header.html.twig", 144)->display(array_merge($context, array("isAuditor" => true)));
                // line 145
                echo "                </div>
              ";
            }
            // line 147
            echo "              
            </div>
          ";
        }
        // line 150
        echo "        </div>

      ";
        // line 152
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isPermitRole($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "Manage") && $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->hasPermission("admin_classroom_content_manage"))) {
            // line 153
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default setting hidden-xs hidden-sm\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%name%管理", array("%name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
            echo "\">
          <i class=\"es-icon es-icon-setting\"></i>
        </a>
      ";
        } elseif ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isPermitRole($this->getAttribute(        // line 156
(isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "Handle")) {
            // line 157
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_testpaper", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "status" => "reviewing")), "html", null, true);
            echo "\" class=\"btn btn-default setting hidden-xs hidden-sm\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%name%管理", array("%name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
            echo "\">
          <i class=\"es-icon es-icon-setting\"></i>
        </a>
      ";
        }
        // line 161
        echo "      ";
        if ((($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isPermitRole($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "Take", true) &&  !((array_key_exists("isclassroomteacher", $context)) ? (_twig_default_filter((isset($context["isclassroomteacher"]) ? $context["isclassroomteacher"] : null), false)) : (false))) &&  !$this->getAttribute((isset($context["member"]) ? $context["member"] : null), "locked", array()))) {
            // line 162
            echo "        ";
            if (!twig_in_filter("headTeacher", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()))) {
                echo "  
          <a type=\"button\" 
            ";
                // line 164
                if ((twig_in_filter("student", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array())) && ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "orderId", array()) > 0))) {
                    // line 165
                    echo "            class=\"btn btn-default setting hidden-xs hidden-sm\"
            href=\"#modal\" 
            data-toggle=\"modal\" 
            data-url=\"";
                    // line 168
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_refund", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "targetType" => "classroom")), "html", null, true);
                    echo "\"
            ";
                } else {
                    // line 170
                    echo "            class=\"btn btn-default setting hidden-xs hidden-sm\"
            href=\"";
                    // line 171
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_exit", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                    echo "\" id =\"quit\" 
            ";
                }
                // line 173
                echo "            >
            <i class=\"es-icon es-icon-exit\"></i>
          </a>
        ";
            }
            // line 177
            echo "      ";
        }
        // line 178
        echo "      </div>
    </div>
  </div>
</section>

";
        // line 183
        $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->loadScript("classroombundle/controller/classroom/join-header");
        // line 184
        echo "
";
        // line 185
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isPluginInstalled("ClassroomPlan")) {
            // line 186
            echo "  ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClassroomPlanBundle:ClassroomPlan:joinPlanBlock", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:classroom-join-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  510 => 186,  508 => 185,  505 => 184,  503 => 183,  496 => 178,  493 => 177,  487 => 173,  482 => 171,  479 => 170,  474 => 168,  469 => 165,  467 => 164,  461 => 162,  458 => 161,  448 => 157,  446 => 156,  437 => 153,  435 => 152,  431 => 150,  426 => 147,  422 => 145,  420 => 144,  417 => 143,  415 => 142,  404 => 140,  401 => 139,  398 => 138,  394 => 136,  390 => 134,  388 => 133,  378 => 131,  376 => 130,  370 => 127,  365 => 125,  354 => 119,  343 => 116,  339 => 114,  335 => 112,  329 => 110,  323 => 108,  321 => 107,  316 => 106,  314 => 105,  311 => 104,  309 => 103,  306 => 102,  304 => 101,  299 => 98,  297 => 97,  292 => 95,  285 => 90,  282 => 89,  277 => 87,  274 => 86,  271 => 85,  269 => 84,  266 => 83,  259 => 80,  253 => 78,  246 => 76,  243 => 75,  240 => 74,  234 => 72,  226 => 70,  223 => 69,  219 => 68,  216 => 67,  214 => 66,  208 => 64,  204 => 63,  195 => 57,  191 => 56,  184 => 52,  180 => 51,  168 => 46,  164 => 45,  157 => 40,  153 => 38,  141 => 36,  129 => 34,  127 => 33,  116 => 32,  114 => 31,  111 => 30,  101 => 29,  91 => 27,  89 => 26,  84 => 25,  82 => 24,  78 => 22,  76 => 21,  73 => 20,  67 => 17,  63 => 15,  61 => 14,  54 => 11,  43 => 9,  39 => 8,  33 => 7,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
