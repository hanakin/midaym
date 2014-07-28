<?php

/* viewtopic_topic_tools.html */
class __TwigTemplate_7239859d608c5a6d00a7ea60b492fd23 extends Twig_Template
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
        if (((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) && (((((((isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null) || (isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null)) || (isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null)) || (isset($context["S_HAS_ATTACHMENTS"]) ? $context["S_HAS_ATTACHMENTS"] : null)) || (isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null)) || (isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null)) || (isset($context["S_DISPLAY_TOPIC_TOOLS"]) ? $context["S_DISPLAY_TOPIC_TOOLS"] : null)))) {
            // line 2
            echo "\t<div class=\"dropdown-container dropdown-button-control topic-tools\">
\t\t<span title=\"";
            // line 3
            echo $this->env->getExtension('phpbb')->lang("TOPIC_TOOLS");
            echo "\" class=\"button icon-button tools-icon dropdown-trigger dropdown-select\"></span>
\t\t<div class=\"dropdown hidden\">
\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t";
            // line 7
            // line 8
            echo "\t\t\t\t";
            if ((isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null)) {
                // line 9
                echo "\t\t\t\t\t<li class=\"small-icon icon-";
                if ((isset($context["S_WATCHING_TOPIC"]) ? $context["S_WATCHING_TOPIC"] : null)) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\">
\t\t\t\t\t\t<a href=\"";
                // line 10
                echo (isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null);
                echo "\" class=\"watch-topic-link\" title=\"";
                echo (isset($context["S_WATCH_TOPIC_TITLE"]) ? $context["S_WATCH_TOPIC_TITLE"] : null);
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"small-icon icon-";
                if ((!(isset($context["S_WATCHING_TOPIC"]) ? $context["S_WATCHING_TOPIC"] : null))) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\" data-toggle-text=\"";
                echo (isset($context["S_WATCH_TOPIC_TOGGLE"]) ? $context["S_WATCH_TOPIC_TOGGLE"] : null);
                echo "\" data-toggle-url=\"";
                echo (isset($context["U_WATCH_TOPIC_TOGGLE"]) ? $context["U_WATCH_TOPIC_TOGGLE"] : null);
                echo "\" data-update-all=\".watch-topic-link\">";
                echo (isset($context["S_WATCH_TOPIC_TITLE"]) ? $context["S_WATCH_TOPIC_TITLE"] : null);
                echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 13
            echo "\t\t\t\t";
            if ((isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null)) {
                // line 14
                echo "\t\t\t\t\t<li class=\"small-icon icon-bookmark\">
\t\t\t\t\t\t<a href=\"";
                // line 15
                echo (isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null);
                echo "\" class=\"bookmark-link\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BOOKMARK_TOPIC");
                echo "\" data-ajax=\"alt_text\" data-alt-text=\"";
                echo (isset($context["S_BOOKMARK_TOGGLE"]) ? $context["S_BOOKMARK_TOGGLE"] : null);
                echo "\" data-update-all=\".bookmark-link\">";
                echo (isset($context["S_BOOKMARK_TOPIC"]) ? $context["S_BOOKMARK_TOPIC"] : null);
                echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t";
            if ((isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null)) {
                echo "<li class=\"small-icon icon-bump\"><a href=\"";
                echo (isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BUMP_TOPIC");
                echo "\" data-ajax=\"true\">";
                echo $this->env->getExtension('phpbb')->lang("BUMP_TOPIC");
                echo "</a></li>";
            }
            // line 19
            echo "\t\t\t\t";
            if ((isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null)) {
                echo "<li class=\"small-icon icon-sendemail\"><a href=\"";
                echo (isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("EMAIL_TOPIC");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("EMAIL_TOPIC");
                echo "</a></li>";
            }
            // line 20
            echo "\t\t\t\t";
            if ((isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null)) {
                echo "<li class=\"small-icon icon-print\"><a href=\"";
                echo (isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("PRINT_TOPIC");
                echo "\" accesskey=\"p\">";
                echo $this->env->getExtension('phpbb')->lang("PRINT_TOPIC");
                echo "</a></li>";
            }
            // line 21
            echo "\t\t\t\t";
            if ((isset($context["S_HAS_ATTACHMENTS"]) ? $context["S_HAS_ATTACHMENTS"] : null)) {
                // line 22
                echo "\t\t\t\t\t<li class=\"small-icon icon-download\">
\t\t\t\t\t\t<a class=\"dropdown-toggle-submenu\" href=\"";
                // line 23
                echo (isset($context["U_DOWNLOAD_ALL_ATTACHMENTS"]) ? $context["U_DOWNLOAD_ALL_ATTACHMENTS"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_ALL_ATTACHMENTS");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_ALL_ATTACHMENTS");
                echo "</a>
\t\t\t\t\t\t<ul class=\"dropdown-submenu hidden\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
                // line 26
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "dl_method"));
                foreach ($context['_seq'] as $context["_key"] => $context["dl_method"]) {
                    // line 27
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute((isset($context["dl_method"]) ? $context["dl_method"] : null), "LINK");
                    echo "\">";
                    echo $this->getAttribute((isset($context["dl_method"]) ? $context["dl_method"] : null), "TYPE");
                    echo "</a>";
                    if ((!$this->getAttribute((isset($context["dl_method"]) ? $context["dl_method"] : null), "S_LAST_ROW"))) {
                        echo " &bull; ";
                    }
                    echo " 
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dl_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 33
            echo "\t\t\t\t";
            // line 34
            echo "\t\t\t</ul>
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_topic_tools.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 34,  156 => 33,  150 => 29,  131 => 26,  121 => 23,  115 => 21,  93 => 19,  82 => 18,  67 => 14,  64 => 13,  44 => 10,  35 => 9,  32 => 8,  24 => 3,  21 => 2,  1425 => 391,  1422 => 390,  1416 => 387,  1404 => 386,  1401 => 385,  1399 => 384,  1396 => 383,  1384 => 382,  1383 => 381,  1378 => 378,  1374 => 376,  1368 => 374,  1365 => 373,  1352 => 372,  1350 => 371,  1346 => 370,  1343 => 369,  1341 => 368,  1338 => 367,  1332 => 363,  1317 => 361,  1313 => 360,  1309 => 359,  1300 => 355,  1293 => 354,  1291 => 353,  1288 => 352,  1276 => 351,  1272 => 349,  1268 => 347,  1262 => 346,  1245 => 345,  1243 => 344,  1239 => 342,  1238 => 341,  1235 => 340,  1229 => 336,  1224 => 334,  1216 => 333,  1208 => 332,  1206 => 331,  1200 => 329,  1198 => 328,  1195 => 327,  1181 => 325,  1179 => 324,  1176 => 323,  1171 => 321,  1160 => 315,  1154 => 311,  1145 => 310,  1143 => 309,  1137 => 308,  1134 => 307,  1130 => 305,  1121 => 304,  1117 => 303,  1114 => 302,  1110 => 300,  1101 => 299,  1097 => 298,  1094 => 297,  1091 => 296,  1084 => 295,  1083 => 294,  1080 => 293,  1076 => 291,  1067 => 289,  1063 => 288,  1060 => 287,  1055 => 284,  1044 => 282,  1040 => 281,  1034 => 279,  1031 => 278,  1029 => 277,  1025 => 276,  1021 => 274,  1019 => 273,  1014 => 271,  1011 => 270,  1003 => 267,  1000 => 266,  998 => 265,  995 => 264,  988 => 260,  984 => 259,  980 => 258,  976 => 257,  972 => 256,  966 => 254,  959 => 250,  955 => 249,  951 => 248,  947 => 247,  943 => 246,  937 => 244,  935 => 243,  916 => 241,  913 => 240,  910 => 239,  906 => 237,  904 => 236,  894 => 233,  891 => 232,  888 => 231,  878 => 228,  875 => 227,  872 => 226,  862 => 223,  859 => 222,  856 => 221,  846 => 218,  843 => 217,  840 => 216,  830 => 213,  827 => 212,  824 => 211,  814 => 208,  811 => 207,  808 => 206,  807 => 205,  804 => 204,  801 => 203,  799 => 202,  777 => 200,  767 => 198,  764 => 197,  758 => 194,  754 => 193,  749 => 192,  743 => 189,  739 => 188,  734 => 187,  731 => 186,  729 => 185,  723 => 181,  721 => 180,  714 => 175,  708 => 174,  704 => 172,  702 => 171,  695 => 169,  677 => 168,  673 => 166,  670 => 165,  666 => 164,  663 => 163,  659 => 162,  650 => 158,  644 => 156,  641 => 155,  638 => 154,  637 => 153,  634 => 152,  632 => 151,  626 => 150,  615 => 148,  612 => 147,  607 => 146,  606 => 145,  603 => 144,  595 => 142,  592 => 141,  590 => 140,  587 => 139,  577 => 138,  567 => 137,  558 => 136,  555 => 135,  545 => 134,  541 => 132,  532 => 131,  529 => 130,  516 => 129,  514 => 128,  506 => 127,  498 => 126,  470 => 123,  460 => 121,  457 => 120,  455 => 119,  451 => 118,  448 => 117,  439 => 111,  435 => 110,  428 => 106,  425 => 105,  417 => 102,  413 => 100,  411 => 99,  408 => 98,  402 => 95,  398 => 93,  396 => 92,  387 => 89,  380 => 87,  377 => 86,  371 => 85,  370 => 84,  357 => 82,  334 => 81,  308 => 80,  296 => 79,  278 => 78,  276 => 77,  272 => 76,  258 => 73,  254 => 72,  244 => 66,  242 => 65,  237 => 62,  233 => 60,  227 => 58,  224 => 57,  211 => 56,  209 => 55,  198 => 54,  195 => 53,  193 => 52,  190 => 51,  182 => 46,  178 => 45,  174 => 44,  169 => 42,  166 => 41,  164 => 40,  161 => 39,  149 => 38,  145 => 36,  141 => 34,  135 => 27,  118 => 22,  116 => 31,  110 => 27,  104 => 20,  99 => 21,  94 => 20,  86 => 18,  84 => 17,  75 => 14,  73 => 13,  70 => 15,  57 => 9,  54 => 8,  52 => 7,  49 => 6,  43 => 5,  34 => 3,  31 => 7,  19 => 1,);
    }
}
