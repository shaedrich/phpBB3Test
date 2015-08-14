<?php

/* jumpbox.html */
class __TwigTemplate_beb4ae1095838b6b3dd894559852f215 extends Twig_Template
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
        echo "
";
        // line 2
        if ((isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null)) {
            // line 3
            echo "\t<p class=\"jumpbox-return\"><a href=\"";
            echo (isset($context["U_VIEW_FORUM"]) ? $context["U_VIEW_FORUM"] : null);
            echo "\" class=\"left-box arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_FORUM");
            echo "</a></p>
";
        } elseif ((isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null)) {
            // line 5
            echo "\t<p class=\"jumpbox-return\"><a href=\"";
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            echo "\" class=\"left-box arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_INDEX");
            echo "</a></p>
";
        } elseif ((isset($context["SEARCH_TOPIC"]) ? $context["SEARCH_TOPIC"] : null)) {
            // line 7
            echo "\t<p class=\"jumpbox-return\"><a class=\"left-box arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" href=\"";
            echo (isset($context["U_SEARCH_TOPIC"]) ? $context["U_SEARCH_TOPIC"] : null);
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_TOPIC");
            echo "</a></p>
";
        } elseif ((isset($context["S_SEARCH_ACTION"]) ? $context["S_SEARCH_ACTION"] : null)) {
            // line 9
            echo "\t<p class=\"jumpbox-return\"><a class=\"left-box arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" href=\"";
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("GO_TO_SEARCH_ADV");
            echo "</a></p>
";
        }
        // line 11
        echo "
";
        // line 12
        if ((isset($context["S_DISPLAY_JUMPBOX"]) ? $context["S_DISPLAY_JUMPBOX"] : null)) {
            // line 13
            echo "
\t<div class=\"dropdown-container dropdown-container-";
            // line 14
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            if ((!(isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null))) {
                echo " dropdown-up";
            }
            echo " dropdown-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo " dropdown-button-control\" id=\"jumpbox\">
\t\t<span title=\"";
            // line 15
            if (((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null) && (isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null))) {
                echo $this->env->getExtension('phpbb')->lang("SELECT_TOPICS_FROM");
            } elseif ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("MODERATE_FORUM");
            } else {
                echo $this->env->getExtension('phpbb')->lang("JUMP_TO");
            }
            echo "\" class=\"dropdown-trigger button dropdown-select\">
\t\t\t";
            // line 16
            if (((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null) && (isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null))) {
                echo $this->env->getExtension('phpbb')->lang("SELECT_TOPICS_FROM");
            } elseif ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("MODERATE_FORUM");
            } else {
                echo $this->env->getExtension('phpbb')->lang("JUMP_TO");
            }
            // line 17
            echo "\t\t</span>
\t\t<div class=\"dropdown hidden\">
\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t<ul class=\"dropdown-contents\">
\t\t\t";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "jumpbox_forums"));
            foreach ($context['_seq'] as $context["_key"] => $context["jumpbox_forums"]) {
                // line 22
                echo "\t\t\t\t";
                if (($this->getAttribute((isset($context["jumpbox_forums"]) ? $context["jumpbox_forums"] : null), "FORUM_ID") != (-1))) {
                    // line 23
                    echo "\t\t\t\t\t<li>";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["jumpbox_forums"]) ? $context["jumpbox_forums"] : null), "level"));
                    foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                        echo "&nbsp; &nbsp;";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "<a href=\"";
                    echo $this->getAttribute((isset($context["jumpbox_forums"]) ? $context["jumpbox_forums"] : null), "LINK");
                    echo "\">";
                    echo $this->getAttribute((isset($context["jumpbox_forums"]) ? $context["jumpbox_forums"] : null), "FORUM_NAME");
                    echo "</a></li>
\t\t\t\t";
                }
                // line 25
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jumpbox_forums'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t\t</ul>
\t\t</div>
\t</div>

";
        } else {
            // line 31
            echo "\t<br /><br />
";
        }
    }

    public function getTemplateName()
    {
        return "jumpbox.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 31,  137 => 26,  131 => 25,  114 => 23,  111 => 22,  107 => 21,  101 => 17,  83 => 15,  74 => 14,  71 => 13,  69 => 12,  66 => 11,  22 => 2,  115 => 21,  93 => 16,  82 => 18,  67 => 14,  64 => 13,  44 => 7,  35 => 9,  32 => 8,  24 => 3,  21 => 2,  1457 => 402,  1454 => 401,  1448 => 398,  1436 => 397,  1433 => 396,  1431 => 395,  1428 => 394,  1416 => 393,  1415 => 392,  1410 => 389,  1406 => 387,  1400 => 385,  1397 => 384,  1384 => 383,  1382 => 382,  1378 => 381,  1375 => 380,  1373 => 379,  1370 => 378,  1364 => 374,  1349 => 372,  1345 => 371,  1341 => 370,  1332 => 366,  1325 => 365,  1323 => 364,  1320 => 363,  1308 => 362,  1304 => 360,  1303 => 359,  1300 => 358,  1296 => 356,  1290 => 355,  1273 => 354,  1271 => 353,  1268 => 352,  1267 => 351,  1263 => 349,  1262 => 348,  1259 => 347,  1253 => 343,  1248 => 341,  1240 => 340,  1232 => 339,  1230 => 338,  1224 => 336,  1222 => 335,  1219 => 334,  1205 => 332,  1203 => 331,  1200 => 330,  1195 => 328,  1184 => 322,  1178 => 318,  1177 => 317,  1174 => 316,  1165 => 315,  1163 => 314,  1157 => 313,  1154 => 312,  1150 => 310,  1141 => 309,  1137 => 308,  1134 => 307,  1130 => 305,  1121 => 304,  1117 => 303,  1114 => 302,  1111 => 301,  1104 => 300,  1103 => 299,  1100 => 298,  1096 => 296,  1087 => 294,  1083 => 293,  1078 => 291,  1074 => 289,  1072 => 288,  1067 => 286,  1064 => 285,  1056 => 282,  1053 => 281,  1051 => 280,  1048 => 279,  1041 => 275,  1037 => 274,  1033 => 273,  1029 => 272,  1025 => 271,  1019 => 269,  1012 => 265,  1008 => 264,  1004 => 263,  1000 => 262,  996 => 261,  990 => 259,  988 => 258,  985 => 257,  984 => 256,  965 => 255,  964 => 254,  961 => 253,  959 => 252,  956 => 251,  952 => 249,  950 => 248,  940 => 245,  937 => 244,  934 => 243,  924 => 240,  921 => 239,  918 => 238,  908 => 235,  905 => 234,  902 => 233,  892 => 230,  889 => 229,  886 => 228,  876 => 225,  873 => 224,  870 => 223,  860 => 220,  857 => 219,  854 => 218,  853 => 217,  850 => 216,  847 => 215,  844 => 214,  843 => 213,  821 => 211,  811 => 209,  808 => 208,  802 => 205,  798 => 204,  793 => 203,  787 => 200,  783 => 199,  778 => 198,  775 => 197,  773 => 196,  767 => 192,  765 => 191,  758 => 186,  752 => 185,  748 => 183,  746 => 182,  739 => 180,  721 => 179,  717 => 177,  714 => 176,  710 => 175,  707 => 174,  703 => 173,  694 => 169,  688 => 167,  685 => 166,  682 => 165,  681 => 164,  678 => 163,  676 => 162,  670 => 161,  659 => 159,  656 => 158,  651 => 157,  650 => 156,  647 => 155,  639 => 153,  636 => 152,  634 => 151,  631 => 150,  621 => 149,  611 => 148,  594 => 147,  591 => 146,  581 => 145,  577 => 143,  575 => 142,  566 => 141,  565 => 140,  562 => 139,  560 => 138,  557 => 137,  544 => 136,  541 => 135,  540 => 134,  525 => 132,  517 => 131,  489 => 128,  479 => 126,  476 => 125,  474 => 124,  470 => 123,  467 => 122,  458 => 116,  454 => 115,  447 => 111,  444 => 110,  436 => 107,  432 => 105,  430 => 104,  427 => 103,  421 => 100,  417 => 98,  415 => 97,  406 => 94,  399 => 92,  396 => 91,  390 => 90,  389 => 89,  376 => 87,  353 => 86,  327 => 85,  315 => 84,  297 => 83,  295 => 82,  291 => 81,  277 => 78,  273 => 77,  263 => 71,  261 => 70,  257 => 68,  255 => 67,  251 => 65,  245 => 63,  242 => 62,  229 => 61,  227 => 60,  216 => 59,  213 => 58,  211 => 57,  208 => 56,  200 => 51,  192 => 50,  186 => 49,  182 => 48,  177 => 46,  174 => 45,  172 => 44,  169 => 43,  157 => 42,  153 => 40,  152 => 39,  149 => 38,  145 => 36,  139 => 35,  122 => 34,  120 => 33,  117 => 22,  116 => 31,  110 => 27,  104 => 20,  99 => 21,  94 => 20,  86 => 18,  84 => 17,  75 => 14,  73 => 13,  70 => 15,  57 => 9,  54 => 9,  52 => 7,  49 => 6,  43 => 5,  34 => 5,  31 => 7,  19 => 1,);
    }
}
