<?php

/* acp_ext_enable.html */
class __TwigTemplate_795662dbcfb48169cf3021744d88804b extends Twig_Template
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
\t<a id=\"maincontent\"></a>

\t<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("EXTENSIONS_ADMIN");
        echo "</h1>

\t<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("EXTENSIONS_EXPLAIN");
        echo "</p>
\t<p>";
        // line 8
        echo $this->env->getExtension('phpbb')->lang("EXTENSION_ENABLE_EXPLAIN");
        echo "</p>

\t";
        // line 10
        if ((isset($context["MIGRATOR_ERROR"]) ? $context["MIGRATOR_ERROR"] : null)) {
            // line 11
            echo "\t<div class=\"errorbox\">
\t\t<p><strong>";
            // line 12
            echo $this->env->getExtension('phpbb')->lang("MIGRATION_EXCEPTION_ERROR");
            echo "</strong></p>
\t\t<p>";
            // line 13
            echo (isset($context["MIGRATOR_ERROR"]) ? $context["MIGRATOR_ERROR"] : null);
            echo "</p>
\t\t<p><a href=\"";
            // line 14
            echo (isset($context["U_RETURN"]) ? $context["U_RETURN"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_EXTENSION_LIST");
            echo "</a></p>
\t</div>
\t";
        } elseif ((isset($context["PRE"]) ? $context["PRE"] : null)) {
            // line 17
            echo "\t<fieldset>
\t\t<h2>";
            // line 18
            echo $this->env->getExtension('phpbb')->lang("CONFIRM");
            echo "</h2>
\t\t<p>";
            // line 19
            echo $this->env->getExtension('phpbb')->lang("CONFIRM_MESSAGE");
            echo "</p>
\t</fieldset>

\t<form id=\"acp_extensions\" method=\"post\" action=\"";
            // line 22
            echo (isset($context["U_ENABLE"]) ? $context["U_ENABLE"] : null);
            echo "\">
\t<fieldset class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" name=\"enable\" value=\"";
            // line 24
            echo $this->env->getExtension('phpbb')->lang("EXTENSION_ENABLE");
            echo "\" />
\t\t<input class=\"button2\" type=\"submit\" name=\"cancel\" value=\"";
            // line 25
            echo $this->env->getExtension('phpbb')->lang("CANCEL");
            echo "\" />
\t</fieldset>
\t</form>
\t";
        } elseif ((isset($context["S_NEXT_STEP"]) ? $context["S_NEXT_STEP"] : null)) {
            // line 29
            echo "\t\t<div class=\"successbox notice\">
\t\t\t<p>";
            // line 30
            echo $this->env->getExtension('phpbb')->lang("EXTENSION_ENABLE_IN_PROGRESS");
            echo "</p>
\t\t</div>
\t";
        } else {
            // line 33
            echo "\t\t<div class=\"successbox\">
\t\t\t<p>";
            // line 34
            echo $this->env->getExtension('phpbb')->lang("EXTENSION_ENABLE_SUCCESS");
            echo "</p>
\t\t\t<br />
\t\t\t<p><a href=\"";
            // line 36
            echo (isset($context["U_RETURN"]) ? $context["U_RETURN"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_EXTENSION_LIST");
            echo "</a></p>
\t\t</div>
\t";
        }
        // line 39
        echo "
";
        // line 40
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
        return "acp_ext_enable.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 40,  125 => 39,  117 => 36,  112 => 34,  109 => 33,  103 => 30,  100 => 29,  93 => 25,  89 => 24,  84 => 22,  78 => 19,  74 => 18,  71 => 17,  63 => 14,  59 => 13,  55 => 12,  52 => 11,  50 => 10,  45 => 8,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
