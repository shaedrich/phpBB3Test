<?php

/* @zuri_demo/event/overall_footer_after.html */
class __TwigTemplate_a6dba9c35f2771e907d6400e309c8ae4 extends Twig_Template
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
        if ((!$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "INCLUDED_FONTAWESOMECSS"))) {
            // line 2
            echo "    ";
            $asset_file = "fontawesome.css";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                $asset->add_assets_version('2');
                $asset_file = $asset->get_url();
                }
            }
            $context['definition']->append('STYLESHEETS', '<link href="' . $asset_file . '" rel="stylesheet" type="text/css" media="screen, projection" />
');
            // line 3
            echo "    ";
            $value = true;
            $context['definition']->set('INCLUDED_FONTAWESOMECSS', $value);
        }
    }

    public function getTemplateName()
    {
        return "@zuri_demo/event/overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 24,  119 => 23,  103 => 19,  86 => 17,  83 => 16,  77 => 14,  76 => 13,  44 => 10,  200 => 51,  194 => 48,  177 => 46,  154 => 43,  139 => 42,  120 => 39,  116 => 37,  93 => 18,  78 => 18,  59 => 14,  47 => 11,  42 => 8,  21 => 2,  160 => 39,  145 => 35,  138 => 33,  125 => 30,  112 => 36,  108 => 21,  96 => 25,  82 => 15,  68 => 21,  63 => 20,  54 => 16,  52 => 12,  46 => 10,  38 => 9,  36 => 3,  30 => 7,  25 => 4,  416 => 111,  406 => 109,  404 => 108,  401 => 107,  400 => 106,  397 => 105,  389 => 103,  388 => 102,  375 => 101,  373 => 100,  369 => 99,  360 => 98,  358 => 97,  348 => 96,  345 => 95,  343 => 94,  340 => 93,  335 => 90,  332 => 89,  330 => 88,  322 => 86,  320 => 85,  311 => 84,  308 => 83,  304 => 81,  292 => 80,  284 => 79,  279 => 78,  276 => 77,  266 => 74,  263 => 73,  261 => 72,  258 => 71,  257 => 70,  246 => 66,  220 => 58,  217 => 57,  209 => 56,  196 => 52,  192 => 50,  185 => 49,  183 => 48,  180 => 47,  169 => 44,  158 => 45,  157 => 44,  142 => 34,  141 => 42,  135 => 38,  134 => 37,  118 => 29,  110 => 32,  107 => 31,  105 => 26,  102 => 29,  88 => 25,  69 => 21,  61 => 19,  58 => 18,  50 => 16,  45 => 14,  43 => 9,  40 => 12,  39 => 11,  32 => 7,  26 => 6,  395 => 104,  392 => 117,  382 => 113,  378 => 111,  376 => 110,  371 => 107,  370 => 106,  366 => 104,  353 => 103,  352 => 102,  347 => 99,  339 => 94,  331 => 93,  325 => 92,  317 => 91,  312 => 89,  309 => 88,  306 => 87,  305 => 86,  299 => 83,  295 => 82,  291 => 81,  275 => 80,  265 => 72,  264 => 71,  255 => 69,  251 => 67,  250 => 66,  245 => 64,  242 => 64,  241 => 63,  233 => 59,  229 => 57,  221 => 59,  219 => 54,  208 => 51,  206 => 50,  199 => 50,  195 => 47,  190 => 46,  173 => 31,  171 => 30,  161 => 22,  155 => 20,  117 => 22,  95 => 27,  84 => 23,  73 => 12,  62 => 10,  60 => 9,  35 => 7,  22 => 2,  259 => 68,  254 => 65,  243 => 59,  232 => 61,  228 => 56,  224 => 60,  218 => 51,  216 => 53,  210 => 46,  207 => 45,  193 => 51,  191 => 43,  181 => 38,  175 => 35,  172 => 45,  165 => 42,  159 => 30,  156 => 29,  153 => 37,  150 => 18,  136 => 26,  132 => 41,  130 => 35,  127 => 34,  124 => 40,  115 => 21,  106 => 20,  104 => 19,  98 => 18,  91 => 17,  81 => 24,  74 => 16,  71 => 12,  65 => 15,  57 => 13,  48 => 15,  34 => 7,  31 => 6,  19 => 1,);
    }
}
