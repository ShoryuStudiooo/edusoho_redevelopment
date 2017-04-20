<?php

/* TopxiaWebBundle::site-hint.html.twig */
class __TwigTemplate_545e8aab116a8ac74022c5df45d6c77e6c3031f7b0a21493d43bad6433235fbf extends Twig_Template
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
        if (((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "setup", array()) == 0)) && ( !array_key_exists("hideSetupHint", $context) || ((isset($context["hideSetupHint"]) ? $context["hideSetupHint"] : null) != true))) &&  !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "cookies", array()), "get", array(0 => "close_set_email_alert"), "method"))) {
            // line 2
            echo "\t";
            $this->loadTemplate("TopxiaWebBundle::email-setting.html.twig", "TopxiaWebBundle::site-hint.html.twig", 2)->display($context);
        } else {
            // line 4
            echo "\t";
            $asm89CacheStrategy1 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
            $asm89Key1 = $asm89CacheStrategy1->generateKey("layout/announcement", 600            );
            $asm89CacheBody1 = $asm89CacheStrategy1->fetchBlock($asm89Key1);
            if ($asm89CacheBody1 === false) {
                ob_start();
                    // line 5
                    echo "\t\t";
                    $this->loadTemplate("TopxiaWebBundle:Announcement:announcement.html.twig", "TopxiaWebBundle::site-hint.html.twig", 5)->display($context);
                    // line 6
                    echo "\t";
                
                $asm89CacheBody1 = ob_get_clean();
                $asm89CacheStrategy1->saveBlock($asm89Key1, $asm89CacheBody1);
            }
            echo $asm89CacheBody1;
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::site-hint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  32 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
