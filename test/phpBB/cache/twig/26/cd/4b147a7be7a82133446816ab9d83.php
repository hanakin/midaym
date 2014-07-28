<?php

/* navbar_footer.html */
class __TwigTemplate_26cd4b147a7be7a82133446816ab9d83 extends Twig_Template
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
        echo "<div class=\"navbar\">
\t<div class=\"inner\">

\t<ul id=\"nav-footer\" class=\"linklist bulletin\" role=\"menubar\">
\t\t<li class=\"small-icon icon-home breadcrumbs\">
\t\t\t";
        // line 6
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo "<span class=\"crumb\"><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\" data-navbar-reference=\"home\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</a></span>";
        }
        // line 7
        echo "\t\t\t";
        // line 8
        echo "\t\t\t<span class=\"crumb\"><a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" data-navbar-reference=\"index\">";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "</a></span>
\t\t\t";
        // line 9
        // line 10
        echo "\t\t</li>
\t\t";
        // line 11
        if (((isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null) && (!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)))) {
            echo "<li class=\"small-icon icon-";
            if ((isset($context["S_WATCHING_FORUM"]) ? $context["S_WATCHING_FORUM"] : null)) {
                echo "unsubscribe";
            } else {
                echo "subscribe";
            }
            echo "\" data-last-responsive=\"true\"><a href=\"";
            echo (isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null);
            echo "\" title=\"";
            echo (isset($context["S_WATCH_FORUM_TITLE"]) ? $context["S_WATCH_FORUM_TITLE"] : null);
            echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"small-icon icon-";
            if ((!(isset($context["S_WATCHING_FORUM"]) ? $context["S_WATCHING_FORUM"] : null))) {
                echo "unsubscribe";
            } else {
                echo "subscribe";
            }
            echo "\" data-toggle-text=\"";
            echo (isset($context["S_WATCH_FORUM_TOGGLE"]) ? $context["S_WATCH_FORUM_TOGGLE"] : null);
            echo "\" data-toggle-url=\"";
            echo (isset($context["U_WATCH_FORUM_TOGGLE"]) ? $context["U_WATCH_FORUM_TOGGLE"] : null);
            echo "\">";
            echo (isset($context["S_WATCH_FORUM_TITLE"]) ? $context["S_WATCH_FORUM_TITLE"] : null);
            echo "</a></li>";
        }
        // line 12
        echo "
\t\t";
        // line 13
        // line 14
        echo "\t\t<li class=\"rightside\">";
        echo (isset($context["S_TIMEZONE"]) ? $context["S_TIMEZONE"] : null);
        echo "</li>
\t\t";
        // line 15
        // line 16
        echo "\t\t";
        if ((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 17
            echo "\t\t\t<li class=\"small-icon icon-delete-cookies rightside\"><a href=\"";
            echo (isset($context["U_DELETE_COOKIES"]) ? $context["U_DELETE_COOKIES"] : null);
            echo "\" data-ajax=\"true\" data-refresh=\"true\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("DELETE_COOKIES");
            echo "</a></li>
\t\t\t";
            // line 18
            if ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null)) {
                echo "<li class=\"small-icon icon-members rightside\" data-last-responsive=\"true\"><a href=\"";
                echo (isset($context["U_MEMBERLIST"]) ? $context["U_MEMBERLIST"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST_EXPLAIN");
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 19
            echo "\t\t";
        }
        // line 20
        echo "\t\t";
        // line 21
        echo "\t\t";
        if ((isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)) {
            echo "<li class=\"small-icon icon-team rightside\" data-last-responsive=\"true\"><a href=\"";
            echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
            echo "</a></li>";
        }
        // line 22
        echo "\t\t";
        // line 23
        echo "\t\t";
        if ((isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null)) {
            echo "<li class=\"small-icon icon-contact rightside\" data-last-responsive=\"true\"><a href=\"";
            echo (isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("CONTACT_US");
            echo "</a></li>";
        }
        // line 24
        echo "\t</ul>

\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "navbar_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 24,  103 => 19,  93 => 18,  83 => 16,  77 => 14,  76 => 13,  73 => 12,  44 => 10,  177 => 48,  170 => 45,  140 => 43,  133 => 42,  121 => 40,  117 => 22,  113 => 37,  94 => 23,  78 => 18,  59 => 14,  47 => 11,  42 => 8,  21 => 2,  160 => 39,  142 => 34,  138 => 33,  125 => 41,  118 => 29,  112 => 28,  105 => 26,  96 => 25,  84 => 23,  82 => 15,  68 => 21,  63 => 20,  54 => 16,  52 => 12,  46 => 10,  38 => 9,  36 => 8,  30 => 7,  25 => 4,  381 => 103,  371 => 101,  369 => 100,  366 => 99,  365 => 98,  362 => 97,  354 => 95,  340 => 93,  338 => 92,  334 => 91,  325 => 90,  323 => 89,  313 => 88,  310 => 87,  308 => 86,  305 => 85,  300 => 82,  297 => 81,  295 => 80,  287 => 78,  285 => 77,  276 => 76,  273 => 75,  269 => 73,  257 => 72,  249 => 71,  241 => 69,  231 => 66,  223 => 63,  211 => 58,  206 => 55,  197 => 53,  189 => 52,  186 => 51,  185 => 50,  182 => 49,  174 => 47,  161 => 44,  158 => 43,  148 => 40,  145 => 35,  123 => 37,  122 => 36,  107 => 35,  100 => 30,  99 => 29,  95 => 27,  88 => 25,  69 => 21,  61 => 19,  58 => 18,  50 => 16,  45 => 14,  43 => 9,  40 => 12,  39 => 11,  32 => 7,  26 => 6,  377 => 102,  374 => 101,  364 => 97,  360 => 96,  358 => 94,  353 => 94,  352 => 90,  348 => 88,  336 => 87,  330 => 83,  316 => 78,  312 => 77,  304 => 76,  299 => 74,  296 => 73,  294 => 72,  288 => 69,  284 => 68,  280 => 67,  264 => 66,  253 => 57,  244 => 70,  238 => 52,  235 => 51,  234 => 50,  226 => 64,  222 => 62,  214 => 43,  212 => 42,  209 => 41,  201 => 39,  199 => 38,  192 => 36,  188 => 35,  183 => 34,  179 => 33,  173 => 46,  163 => 24,  157 => 42,  155 => 44,  152 => 20,  134 => 38,  119 => 23,  108 => 21,  97 => 15,  86 => 17,  75 => 13,  64 => 12,  62 => 11,  37 => 9,  33 => 8,  22 => 2,  259 => 68,  254 => 58,  243 => 59,  232 => 57,  228 => 65,  224 => 55,  218 => 51,  216 => 50,  210 => 46,  207 => 56,  193 => 44,  191 => 49,  181 => 38,  175 => 35,  172 => 34,  165 => 42,  159 => 30,  156 => 29,  153 => 37,  150 => 41,  136 => 26,  132 => 31,  130 => 24,  127 => 23,  124 => 22,  115 => 21,  106 => 20,  104 => 19,  98 => 18,  91 => 17,  81 => 24,  74 => 16,  71 => 12,  65 => 15,  57 => 13,  48 => 15,  34 => 7,  31 => 2,  19 => 1,);
    }
}
