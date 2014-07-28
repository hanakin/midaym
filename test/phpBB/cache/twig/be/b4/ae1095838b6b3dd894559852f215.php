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
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_SEARCH_ADV");
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
        return array (  144 => 31,  137 => 26,  114 => 23,  111 => 22,  107 => 21,  101 => 17,  83 => 15,  74 => 14,  71 => 13,  69 => 12,  66 => 11,  22 => 2,  158 => 34,  156 => 33,  150 => 29,  131 => 25,  121 => 23,  115 => 21,  93 => 16,  82 => 18,  67 => 14,  64 => 13,  44 => 7,  35 => 9,  32 => 8,  24 => 3,  21 => 2,  1425 => 391,  1422 => 390,  1416 => 387,  1404 => 386,  1401 => 385,  1399 => 384,  1396 => 383,  1384 => 382,  1383 => 381,  1378 => 378,  1374 => 376,  1368 => 374,  1365 => 373,  1352 => 372,  1350 => 371,  1346 => 370,  1343 => 369,  1341 => 368,  1338 => 367,  1332 => 363,  1317 => 361,  1313 => 360,  1309 => 359,  1300 => 355,  1293 => 354,  1291 => 353,  1288 => 352,  1276 => 351,  1272 => 349,  1268 => 347,  1262 => 346,  1245 => 345,  1243 => 344,  1239 => 342,  1238 => 341,  1235 => 340,  1229 => 336,  1224 => 334,  1216 => 333,  1208 => 332,  1206 => 331,  1200 => 329,  1198 => 328,  1195 => 327,  1181 => 325,  1179 => 324,  1176 => 323,  1171 => 321,  1160 => 315,  1154 => 311,  1145 => 310,  1143 => 309,  1137 => 308,  1134 => 307,  1130 => 305,  1121 => 304,  1117 => 303,  1114 => 302,  1110 => 300,  1101 => 299,  1097 => 298,  1094 => 297,  1091 => 296,  1084 => 295,  1083 => 294,  1080 => 293,  1076 => 291,  1067 => 289,  1063 => 288,  1060 => 287,  1055 => 284,  1044 => 282,  1040 => 281,  1034 => 279,  1031 => 278,  1029 => 277,  1025 => 276,  1021 => 274,  1019 => 273,  1014 => 271,  1011 => 270,  1003 => 267,  1000 => 266,  998 => 265,  995 => 264,  988 => 260,  984 => 259,  980 => 258,  976 => 257,  972 => 256,  966 => 254,  959 => 250,  955 => 249,  951 => 248,  947 => 247,  943 => 246,  937 => 244,  935 => 243,  916 => 241,  913 => 240,  910 => 239,  906 => 237,  904 => 236,  894 => 233,  891 => 232,  888 => 231,  878 => 228,  875 => 227,  872 => 226,  862 => 223,  859 => 222,  856 => 221,  846 => 218,  843 => 217,  840 => 216,  830 => 213,  827 => 212,  824 => 211,  814 => 208,  811 => 207,  808 => 206,  807 => 205,  804 => 204,  801 => 203,  799 => 202,  777 => 200,  767 => 198,  764 => 197,  758 => 194,  754 => 193,  749 => 192,  743 => 189,  739 => 188,  734 => 187,  731 => 186,  729 => 185,  723 => 181,  721 => 180,  714 => 175,  708 => 174,  704 => 172,  702 => 171,  695 => 169,  677 => 168,  673 => 166,  670 => 165,  666 => 164,  663 => 163,  659 => 162,  650 => 158,  644 => 156,  641 => 155,  638 => 154,  637 => 153,  634 => 152,  632 => 151,  626 => 150,  615 => 148,  612 => 147,  607 => 146,  606 => 145,  603 => 144,  595 => 142,  592 => 141,  590 => 140,  587 => 139,  577 => 138,  567 => 137,  558 => 136,  555 => 135,  545 => 134,  541 => 132,  532 => 131,  529 => 130,  516 => 129,  514 => 128,  506 => 127,  498 => 126,  470 => 123,  460 => 121,  457 => 120,  455 => 119,  451 => 118,  448 => 117,  439 => 111,  435 => 110,  428 => 106,  425 => 105,  417 => 102,  413 => 100,  411 => 99,  408 => 98,  402 => 95,  398 => 93,  396 => 92,  387 => 89,  380 => 87,  377 => 86,  371 => 85,  370 => 84,  357 => 82,  334 => 81,  308 => 80,  296 => 79,  278 => 78,  276 => 77,  272 => 76,  258 => 73,  254 => 72,  244 => 66,  242 => 65,  237 => 62,  233 => 60,  227 => 58,  224 => 57,  211 => 56,  209 => 55,  198 => 54,  195 => 53,  193 => 52,  190 => 51,  182 => 46,  178 => 45,  174 => 44,  169 => 42,  166 => 41,  164 => 40,  161 => 39,  149 => 38,  145 => 36,  141 => 34,  135 => 27,  118 => 22,  116 => 31,  110 => 27,  104 => 20,  99 => 21,  94 => 20,  86 => 18,  84 => 17,  75 => 14,  73 => 13,  70 => 15,  57 => 9,  54 => 9,  52 => 7,  49 => 6,  43 => 5,  34 => 5,  31 => 7,  19 => 1,);
    }
}
