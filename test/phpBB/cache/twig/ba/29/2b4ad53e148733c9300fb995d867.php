<?php

/* pagination.html */
class __TwigTemplate_ba292b4ad53e148733c9300fb995d867 extends Twig_Template
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
        echo "<ul>
";
        // line 2
        if (((isset($context["BASE_URL"]) ? $context["BASE_URL"] : null) && ((isset($context["TOTAL_PAGES"]) ? $context["TOTAL_PAGES"] : null) > 6))) {
            // line 3
            echo "\t<li class=\"dropdown-container dropdown-button-control dropdown-page-jump\">
\t\t<a class=\"dropdown-trigger icons icons-jump\" href=\"#\" title=\"";
            // line 4
            echo $this->env->getExtension('phpbb')->lang("JUMP_TO_PAGE_CLICK");
            echo "\" role=\"button\">";
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "</a>
\t\t<div class=\"dropdown hidden\">
\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t<li>";
            // line 8
            echo $this->env->getExtension('phpbb')->lang("JUMP_TO_PAGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</li>
\t\t\t\t<li class=\"page-jump-form\">
\t\t\t\t\t<input type=\"number\" name=\"page-number\"  maxlength=\"6\" title=\"";
            // line 10
            echo $this->env->getExtension('phpbb')->lang("JUMP_PAGE");
            echo "\" class=\"inputbox tiny\" data-per-page=\"";
            echo (isset($context["PER_PAGE"]) ? $context["PER_PAGE"] : null);
            echo "\" data-base-url=\"";
            echo twig_escape_filter($this->env, (isset($context["BASE_URL"]) ? $context["BASE_URL"] : null), "html_attr");
            echo "\" data-start-name=\"";
            echo (isset($context["START_NAME"]) ? $context["START_NAME"] : null);
            echo "\" />
\t\t\t\t\t<input class=\"button2\" value=\"";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" type=\"button\" />
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</li>
";
        }
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination"));
        foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
            // line 18
            echo "\t";
            if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "S_IS_PREV")) {
                // line 19
                echo "\t<li><a class=\"icons icons-prev\" href=\"";
                echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "PAGE_URL");
                echo "\" rel=\"prev\" role=\"button\">";
                echo $this->env->getExtension('phpbb')->lang("PREVIOUS");
                echo "</a></li>
\t";
            } elseif ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "S_IS_CURRENT")) {
                // line 21
                echo "\t<li class=\"active\"><span>";
                echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "PAGE_NUMBER");
                echo "</span></li>
\t";
            } elseif ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "S_IS_ELLIPSIS")) {
                // line 23
                echo "\t<li class=\"ellipsis\" role=\"separator\"><span>";
                echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                echo "</span></li>
\t";
            } elseif ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "S_IS_NEXT")) {
                // line 25
                echo "\t<li><a class=\"icons icons-next\" href=\"";
                echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "PAGE_URL");
                echo "\" rel=\"next\" role=\"button\">";
                echo $this->env->getExtension('phpbb')->lang("NEXT");
                echo "</a></li>
\t";
            } else {
                // line 27
                echo "\t<li><a href=\"";
                echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "PAGE_URL");
                echo "\" role=\"button\">";
                echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "PAGE_NUMBER");
                echo "</a></li>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "pagination.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 30,  96 => 27,  88 => 25,  76 => 21,  68 => 19,  65 => 18,  61 => 17,  42 => 10,  36 => 8,  27 => 4,  22 => 2,  158 => 34,  156 => 33,  150 => 29,  144 => 28,  131 => 26,  121 => 23,  115 => 21,  93 => 19,  82 => 23,  67 => 14,  64 => 13,  38 => 10,  35 => 9,  32 => 8,  24 => 3,  21 => 2,  1420 => 391,  1417 => 390,  1411 => 387,  1399 => 386,  1396 => 385,  1394 => 384,  1391 => 383,  1379 => 382,  1378 => 381,  1373 => 378,  1369 => 376,  1363 => 374,  1360 => 373,  1347 => 372,  1345 => 371,  1341 => 370,  1338 => 369,  1336 => 368,  1333 => 367,  1327 => 363,  1312 => 361,  1308 => 360,  1304 => 359,  1297 => 355,  1290 => 354,  1288 => 353,  1285 => 352,  1273 => 351,  1269 => 349,  1265 => 347,  1259 => 346,  1242 => 345,  1240 => 344,  1236 => 342,  1235 => 341,  1232 => 340,  1226 => 336,  1221 => 334,  1213 => 333,  1205 => 332,  1203 => 331,  1197 => 329,  1195 => 328,  1192 => 327,  1178 => 325,  1176 => 324,  1173 => 323,  1168 => 321,  1159 => 315,  1153 => 311,  1144 => 310,  1142 => 309,  1136 => 308,  1133 => 307,  1129 => 305,  1120 => 304,  1116 => 303,  1113 => 302,  1109 => 300,  1100 => 299,  1096 => 298,  1093 => 297,  1090 => 296,  1083 => 295,  1082 => 294,  1079 => 293,  1075 => 291,  1066 => 289,  1062 => 288,  1059 => 287,  1054 => 284,  1043 => 282,  1039 => 281,  1033 => 279,  1030 => 278,  1028 => 277,  1024 => 276,  1020 => 274,  1018 => 273,  1013 => 271,  1010 => 270,  1002 => 267,  999 => 266,  997 => 265,  994 => 264,  987 => 260,  983 => 259,  979 => 258,  975 => 257,  971 => 256,  965 => 254,  958 => 250,  954 => 249,  950 => 248,  946 => 247,  942 => 246,  936 => 244,  934 => 243,  917 => 241,  914 => 240,  911 => 239,  907 => 237,  905 => 236,  895 => 233,  892 => 232,  889 => 231,  879 => 228,  876 => 227,  873 => 226,  863 => 223,  860 => 222,  857 => 221,  847 => 218,  844 => 217,  841 => 216,  831 => 213,  828 => 212,  825 => 211,  815 => 208,  812 => 207,  809 => 206,  808 => 205,  805 => 204,  802 => 203,  800 => 202,  778 => 200,  768 => 198,  765 => 197,  759 => 194,  755 => 193,  750 => 192,  744 => 189,  740 => 188,  735 => 187,  732 => 186,  730 => 185,  724 => 181,  722 => 180,  715 => 175,  709 => 174,  705 => 172,  703 => 171,  696 => 169,  677 => 168,  673 => 166,  670 => 165,  666 => 164,  663 => 163,  659 => 162,  650 => 158,  644 => 156,  641 => 155,  638 => 154,  637 => 153,  634 => 152,  632 => 151,  626 => 150,  615 => 148,  612 => 147,  607 => 146,  606 => 145,  603 => 144,  595 => 142,  592 => 141,  590 => 140,  587 => 139,  577 => 138,  567 => 137,  558 => 136,  555 => 135,  545 => 134,  541 => 132,  532 => 131,  529 => 130,  516 => 129,  514 => 128,  506 => 127,  498 => 126,  470 => 123,  460 => 121,  457 => 120,  455 => 119,  451 => 118,  448 => 117,  439 => 111,  435 => 110,  428 => 106,  425 => 105,  417 => 102,  413 => 100,  411 => 99,  408 => 98,  402 => 95,  398 => 93,  396 => 92,  387 => 89,  380 => 87,  377 => 86,  371 => 85,  370 => 84,  357 => 82,  334 => 81,  308 => 80,  296 => 79,  278 => 78,  276 => 77,  272 => 76,  258 => 73,  254 => 72,  244 => 66,  242 => 65,  237 => 62,  233 => 60,  227 => 58,  224 => 57,  211 => 56,  209 => 55,  198 => 54,  195 => 53,  193 => 52,  190 => 51,  182 => 46,  178 => 45,  174 => 44,  169 => 42,  166 => 41,  164 => 40,  161 => 39,  149 => 38,  145 => 36,  141 => 34,  135 => 27,  118 => 22,  116 => 31,  110 => 27,  104 => 20,  99 => 21,  94 => 20,  86 => 18,  84 => 17,  75 => 14,  73 => 13,  70 => 15,  57 => 9,  54 => 8,  52 => 11,  49 => 6,  43 => 5,  34 => 3,  31 => 7,  19 => 1,);
    }
}
