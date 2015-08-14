<?php

/* acp_ext_details.html */
class __TwigTemplate_dcc1c192cf14cec5f14df3be37ad987b extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("overall_header.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

\t<a href=\"";
        // line 5
        echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
        echo "\" style=\"float: ";
        echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
        echo ";\">&laquo; ";
        echo $this->env->getExtension('phpbb')->lang("BACK");
        echo "</a>

\t<h1>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("EXTENSIONS_ADMIN");
        echo "</h1>

\t";
        // line 9
        if ((isset($context["S_VERSIONCHECK"]) ? $context["S_VERSIONCHECK"] : null)) {
            // line 10
            echo "\t<div class=\"";
            if ((isset($context["S_UP_TO_DATE"]) ? $context["S_UP_TO_DATE"] : null)) {
                echo "successbox";
            } else {
                echo "errorbox";
            }
            echo "\">
\t\t<p>";
            // line 11
            echo (isset($context["UP_TO_DATE_MSG"]) ? $context["UP_TO_DATE_MSG"] : null);
            echo " - <a href=\"";
            echo (isset($context["U_VERSIONCHECK_FORCE"]) ? $context["U_VERSIONCHECK_FORCE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("VERSIONCHECK_FORCE_UPDATE");
            echo "</a></p>
\t</div>
\t";
        } elseif (((isset($context["S_VERSIONCHECK_STATUS"]) ? $context["S_VERSIONCHECK_STATUS"] : null) == 0)) {
            // line 14
            echo "\t<div class=\"errorbox notice\">
\t\t<p>";
            // line 15
            echo $this->env->getExtension('phpbb')->lang("VERSIONCHECK_FAIL");
            echo "</p>
\t\t<p>";
            // line 16
            echo (isset($context["VERSIONCHECK_FAIL_REASON"]) ? $context["VERSIONCHECK_FAIL_REASON"] : null);
            echo "</p>
\t\t<p><a href=\"";
            // line 17
            echo (isset($context["U_VERSIONCHECK_FORCE"]) ? $context["U_VERSIONCHECK_FORCE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("VERSIONCHECK_FORCE_UPDATE");
            echo "</a></p>
\t</div>
\t";
        } elseif (((isset($context["S_VERSIONCHECK_STATUS"]) ? $context["S_VERSIONCHECK_STATUS"] : null) == 1)) {
            // line 20
            echo "\t<div class=\"errorbox notice\">
\t\t<p>";
            // line 21
            echo (isset($context["VERSIONCHECK_FAIL_REASON"]) ? $context["VERSIONCHECK_FAIL_REASON"] : null);
            echo "</p>
\t</div>
\t";
        }
        // line 24
        echo "
\t<fieldset>
\t\t<legend>";
        // line 26
        echo $this->env->getExtension('phpbb')->lang("EXT_DETAILS");
        echo "</legend>
\t\t";
        // line 27
        if ((isset($context["META_DISPLAY_NAME"]) ? $context["META_DISPLAY_NAME"] : null)) {
            // line 28
            echo "\t\t<dl>
\t\t\t<dt><label>";
            // line 29
            echo $this->env->getExtension('phpbb')->lang("DISPLAY_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><strong id=\"meta_display_name\">";
            // line 30
            echo (isset($context["META_DISPLAY_NAME"]) ? $context["META_DISPLAY_NAME"] : null);
            echo "</strong></dd>
\t\t</dl>
\t\t";
        }
        // line 33
        echo "\t\t<dl>
\t\t\t<dt><label>";
        // line 34
        echo $this->env->getExtension('phpbb')->lang("CLEAN_NAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><strong id=\"meta_name\">";
        // line 35
        echo (isset($context["META_NAME"]) ? $context["META_NAME"] : null);
        echo "</strong></dd>
\t\t</dl>
\t\t";
        // line 37
        if ((isset($context["META_DESCRIPTION"]) ? $context["META_DESCRIPTION"] : null)) {
            // line 38
            echo "\t\t<dl>
\t\t\t<dt><label>";
            // line 39
            echo $this->env->getExtension('phpbb')->lang("DESCRIPTION");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><span id=\"meta_description\">";
            // line 40
            echo (isset($context["META_DESCRIPTION"]) ? $context["META_DESCRIPTION"] : null);
            echo "</span></dd>
\t\t</dl>
\t\t";
        }
        // line 43
        echo "\t\t<dl>
\t\t\t<dt><label>";
        // line 44
        echo $this->env->getExtension('phpbb')->lang("VERSION");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><span id=\"meta_version\">";
        // line 45
        echo (isset($context["META_VERSION"]) ? $context["META_VERSION"] : null);
        echo "</span></dd>
\t\t</dl>
\t\t";
        // line 47
        if ((isset($context["META_HOMEPAGE"]) ? $context["META_HOMEPAGE"] : null)) {
            // line 48
            echo "\t\t<dl>
\t\t\t<dt><label>";
            // line 49
            echo $this->env->getExtension('phpbb')->lang("HOMEPAGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><strong id=\"meta_homepage\"><a href=\"";
            // line 50
            echo (isset($context["META_HOMEPAGE"]) ? $context["META_HOMEPAGE"] : null);
            echo "\">";
            echo (isset($context["META_HOMEPAGE"]) ? $context["META_HOMEPAGE"] : null);
            echo "</a></strong></dd>
\t\t</dl>
\t\t";
        }
        // line 53
        echo "\t\t";
        if ((isset($context["META_TIME"]) ? $context["META_TIME"] : null)) {
            // line 54
            echo "\t\t<dl>
\t\t\t<dt><label>";
            // line 55
            echo $this->env->getExtension('phpbb')->lang("TIME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><span id=\"meta_time\">";
            // line 56
            echo (isset($context["META_TIME"]) ? $context["META_TIME"] : null);
            echo "</span></dd>
\t\t</dl>
\t\t";
        }
        // line 59
        echo "\t\t<dl>
\t\t\t<dt><label>";
        // line 60
        echo $this->env->getExtension('phpbb')->lang("LICENSE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><span id=\"meta_license\">";
        // line 61
        echo (isset($context["META_LICENSE"]) ? $context["META_LICENSE"] : null);
        echo "</span></dd>
\t\t</dl>
\t</fieldset>

\t";
        // line 65
        if (((isset($context["S_VERSIONCHECK"]) ? $context["S_VERSIONCHECK"] : null) && (!(isset($context["S_UP_TO_DATE"]) ? $context["S_UP_TO_DATE"] : null)))) {
            // line 66
            echo "\t<fieldset>
\t\t<legend>";
            // line 67
            echo $this->env->getExtension('phpbb')->lang("LATEST_VERSION");
            echo "</legend>
\t\t";
            // line 68
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "updates_available"));
            foreach ($context['_seq'] as $context["_key"] => $context["updates_available"]) {
                // line 69
                echo "\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 71
                echo $this->env->getExtension('phpbb')->lang("VERSION");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><strong>";
                // line 72
                echo $this->getAttribute((isset($context["updates_available"]) ? $context["updates_available"] : null), "current");
                echo "</strong></dd>
\t\t\t</dl>
\t\t\t";
                // line 74
                if ($this->getAttribute((isset($context["updates_available"]) ? $context["updates_available"] : null), "download")) {
                    // line 75
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
                    // line 76
                    echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_LATEST");
                    echo "</label></dt>
\t\t\t\t<dd><strong><a href=\"";
                    // line 77
                    echo $this->getAttribute((isset($context["updates_available"]) ? $context["updates_available"] : null), "download");
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("DOWNLOAD");
                    echo " ";
                    echo (isset($context["META_NAME"]) ? $context["META_NAME"] : null);
                    echo " ";
                    echo (isset($context["LATEST_VERSION"]) ? $context["LATEST_VERSION"] : null);
                    echo "</a></strong></dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 80
                echo "\t\t\t";
                if ($this->getAttribute((isset($context["updates_available"]) ? $context["updates_available"] : null), "announcement")) {
                    // line 81
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
                    // line 82
                    echo $this->env->getExtension('phpbb')->lang("ANNOUNCEMENT_TOPIC");
                    echo "</label></dt>
\t\t\t\t<dd><strong><a href=\"";
                    // line 83
                    echo $this->getAttribute((isset($context["updates_available"]) ? $context["updates_available"] : null), "announcement");
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("RELEASE_ANNOUNCEMENT");
                    echo "</a></strong></dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 86
                echo "\t\t</fieldset>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['updates_available'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "\t</fieldset>
\t";
        }
        // line 90
        echo "
\t";
        // line 91
        if (((isset($context["META_REQUIRE_PHPBB"]) ? $context["META_REQUIRE_PHPBB"] : null) || (isset($context["META_REQUIRE_PHP"]) ? $context["META_REQUIRE_PHP"] : null))) {
            // line 92
            echo "\t<fieldset>
\t\t<legend>";
            // line 93
            echo $this->env->getExtension('phpbb')->lang("REQUIREMENTS");
            echo "</legend>
\t\t";
            // line 94
            if ((isset($context["META_REQUIRE_PHPBB"]) ? $context["META_REQUIRE_PHPBB"] : null)) {
                // line 95
                echo "\t\t<dl";
                if ((isset($context["META_REQUIRE_PHPBB_FAIL"]) ? $context["META_REQUIRE_PHPBB_FAIL"] : null)) {
                    echo " class=\"requirements_not_met\"";
                }
                echo ">
\t\t\t<dt><label>";
                // line 96
                echo $this->env->getExtension('phpbb')->lang("PHPBB_VERSION");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><span id=\"require_phpbb\">";
                // line 97
                echo (isset($context["META_REQUIRE_PHPBB"]) ? $context["META_REQUIRE_PHPBB"] : null);
                echo "</span></dd>
\t\t</dl>
\t\t";
            }
            // line 100
            echo "\t\t";
            if ((isset($context["META_REQUIRE_PHP"]) ? $context["META_REQUIRE_PHP"] : null)) {
                // line 101
                echo "\t\t<dl";
                if ((isset($context["META_REQUIRE_PHP_FAIL"]) ? $context["META_REQUIRE_PHP_FAIL"] : null)) {
                    echo " class=\"requirements_not_met\"";
                }
                echo ">
\t\t\t<dt><label>";
                // line 102
                echo $this->env->getExtension('phpbb')->lang("PHP_VERSION");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><span id=\"require_php\">";
                // line 103
                echo (isset($context["META_REQUIRE_PHP"]) ? $context["META_REQUIRE_PHP"] : null);
                echo "</span></dd>
\t\t</dl>
\t\t";
            }
            // line 106
            echo "\t</fieldset>
\t";
        }
        // line 108
        echo "
\t<fieldset>
\t\t<legend>";
        // line 110
        echo $this->env->getExtension('phpbb')->lang("AUTHOR_INFORMATION");
        echo "</legend>
\t\t";
        // line 111
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "meta_authors"));
        foreach ($context['_seq'] as $context["_key"] => $context["meta_authors"]) {
            // line 112
            echo "\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label>";
            // line 114
            echo $this->env->getExtension('phpbb')->lang("AUTHOR_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><strong>";
            // line 115
            echo $this->getAttribute((isset($context["meta_authors"]) ? $context["meta_authors"] : null), "AUTHOR_NAME");
            echo "</strong></dd>
\t\t\t</dl>
\t\t\t";
            // line 117
            if ($this->getAttribute((isset($context["meta_authors"]) ? $context["meta_authors"] : null), "AUTHOR_EMAIL")) {
                // line 118
                echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 119
                echo $this->env->getExtension('phpbb')->lang("AUTHOR_EMAIL");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><strong><a href=\"mailto:";
                // line 120
                echo $this->getAttribute((isset($context["meta_authors"]) ? $context["meta_authors"] : null), "AUTHOR_EMAIL");
                echo "\">";
                echo $this->getAttribute((isset($context["meta_authors"]) ? $context["meta_authors"] : null), "AUTHOR_EMAIL");
                echo "</a></strong></dd>
\t\t\t</dl>
\t\t\t";
            }
            // line 123
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["meta_authors"]) ? $context["meta_authors"] : null), "AUTHOR_HOMEPAGE")) {
                // line 124
                echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 125
                echo $this->env->getExtension('phpbb')->lang("AUTHOR_HOMEPAGE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><strong><a href=\"";
                // line 126
                echo $this->getAttribute((isset($context["meta_authors"]) ? $context["meta_authors"] : null), "AUTHOR_HOMEPAGE");
                echo "\">";
                echo $this->getAttribute((isset($context["meta_authors"]) ? $context["meta_authors"] : null), "AUTHOR_HOMEPAGE");
                echo "</a></strong></dd>
\t\t\t</dl>
\t\t\t";
            }
            // line 129
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["meta_authors"]) ? $context["meta_authors"] : null), "AUTHOR_ROLE")) {
                // line 130
                echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 131
                echo $this->env->getExtension('phpbb')->lang("AUTHOR_ROLE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><strong>";
                // line 132
                echo $this->getAttribute((isset($context["meta_authors"]) ? $context["meta_authors"] : null), "AUTHOR_ROLE");
                echo "</strong></dd>
\t\t\t</dl>
\t\t\t";
            }
            // line 135
            echo "\t\t</fieldset>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta_authors'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "\t</fieldset>

";
        // line 139
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("overall_footer.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_ext_details.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  440 => 139,  436 => 137,  429 => 135,  423 => 132,  418 => 131,  415 => 130,  412 => 129,  404 => 126,  399 => 125,  396 => 124,  393 => 123,  385 => 120,  380 => 119,  377 => 118,  375 => 117,  370 => 115,  365 => 114,  361 => 112,  357 => 111,  353 => 110,  349 => 108,  345 => 106,  339 => 103,  334 => 102,  327 => 101,  324 => 100,  318 => 97,  313 => 96,  306 => 95,  304 => 94,  300 => 93,  297 => 92,  295 => 91,  292 => 90,  288 => 88,  281 => 86,  273 => 83,  269 => 82,  266 => 81,  263 => 80,  251 => 77,  247 => 76,  244 => 75,  242 => 74,  237 => 72,  232 => 71,  228 => 69,  224 => 68,  220 => 67,  217 => 66,  215 => 65,  208 => 61,  203 => 60,  200 => 59,  194 => 56,  189 => 55,  186 => 54,  183 => 53,  175 => 50,  170 => 49,  167 => 48,  165 => 47,  160 => 45,  155 => 44,  152 => 43,  146 => 40,  141 => 39,  138 => 38,  136 => 37,  131 => 35,  126 => 34,  123 => 33,  117 => 30,  112 => 29,  109 => 28,  107 => 27,  103 => 26,  99 => 24,  93 => 21,  90 => 20,  82 => 17,  78 => 16,  74 => 15,  71 => 14,  61 => 11,  52 => 10,  50 => 9,  45 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
