<?php

/* notification_dropdown.html */
class __TwigTemplate_acdd101fda5d84561fd7a73dbb0f994e extends Twig_Template
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
        echo "<div id=\"notification_list\" class=\"dropdown dropdown-extended notification_list\">
\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t<div class=\"dropdown-contents\">
\t\t<div class=\"header\">
\t\t\t";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
        echo "
\t\t\t<span class=\"header_settings\">
\t\t\t\t<a href=\"";
        // line 7
        echo (isset($context["U_NOTIFICATION_SETTINGS"]) ? $context["U_NOTIFICATION_SETTINGS"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("SETTINGS");
        echo "</a>
\t\t\t\t";
        // line 8
        if ((isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null)) {
            // line 9
            echo "\t\t\t\t\t<span id=\"mark_all_notifications\"> &bull; <a href=\"";
            echo (isset($context["U_MARK_ALL_NOTIFICATIONS"]) ? $context["U_MARK_ALL_NOTIFICATIONS"] : null);
            echo "\" data-ajax=\"notification.mark_all_read\">";
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL_READ");
            echo "</a></span>
\t\t\t\t";
        }
        // line 11
        echo "\t\t\t</span>
\t\t</div>

\t\t<ul>
\t\t\t";
        // line 15
        if ((!twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notifications")))) {
            // line 16
            echo "\t\t\t\t<li class=\"no_notifications\">
\t\t\t\t\t";
            // line 17
            echo $this->env->getExtension('phpbb')->lang("NO_NOTIFICATIONS");
            echo "
\t\t\t\t</li>
\t\t\t";
        }
        // line 20
        echo "\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notifications"));
        foreach ($context['_seq'] as $context["_key"] => $context["notifications"]) {
            // line 21
            echo "\t\t\t\t<li class=\"";
            if ($this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "UNREAD")) {
                echo " bg2";
            }
            if ($this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "STYLING")) {
                echo " ";
                echo $this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "STYLING");
            }
            if ((!$this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "URL"))) {
                echo " no-url";
            }
            echo "\">
\t\t\t\t\t";
            // line 22
            if ($this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "URL")) {
                // line 23
                echo "\t\t\t\t\t\t<a class=\"notification-block\" href=\"";
                if ($this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "UNREAD")) {
                    echo $this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "U_MARK_READ");
                    echo "\" data-real-url=\"";
                    echo $this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "URL");
                } else {
                    echo $this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "URL");
                }
                echo "\">
\t\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "AVATAR")) {
                echo $this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "AVATAR");
            } else {
                echo "<img src=\"";
                echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                echo "/images/no_avatar.gif\" alt=\"\" />";
            }
            // line 26
            echo "\t\t\t\t\t\t<div class=\"notification_text\">
\t\t\t\t\t\t\t<p class=\"notification-title\">";
            // line 27
            echo $this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "FORMATTED_TITLE");
            echo "</p>
\t\t\t\t\t\t\t";
            // line 28
            if ($this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "REFERENCE")) {
                echo "<p class=\"notification-reference\">";
                echo $this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "REFERENCE");
                echo "</p>";
            }
            // line 29
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "FORUM")) {
                echo "<p class=\"notification-forum\">";
                echo $this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "FORUM");
                echo "</p>";
            }
            // line 30
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "REASON")) {
                echo "<p class=\"notification-reason\">";
                echo $this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "REASON");
                echo "</p>";
            }
            // line 31
            echo "\t\t\t\t\t\t\t<p class=\"notification-time\">";
            echo $this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "TIME");
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 33
            if ($this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "URL")) {
                echo "</a>";
            }
            // line 34
            echo "\t\t\t\t\t";
            if ($this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "UNREAD")) {
                // line 35
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "U_MARK_READ");
                echo "\" class=\"mark_read icon-mark\" data-ajax=\"notification.mark_read\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("MARK_READ");
                echo "\"></a>
\t\t\t\t\t";
            }
            // line 37
            echo "\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notifications'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t\t</ul>

\t\t<div class=\"footer\">
\t\t\t<a href=\"";
        // line 42
        echo (isset($context["U_VIEW_ALL_NOTIFICATIONS"]) ? $context["U_VIEW_ALL_NOTIFICATIONS"] : null);
        echo "\"><span>";
        echo $this->env->getExtension('phpbb')->lang("SEE_ALL");
        echo "</span></a>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "notification_dropdown.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 39,  142 => 34,  138 => 33,  125 => 30,  118 => 29,  112 => 28,  105 => 26,  96 => 25,  84 => 23,  82 => 22,  68 => 21,  63 => 20,  54 => 16,  52 => 15,  46 => 11,  38 => 9,  36 => 8,  30 => 7,  25 => 5,  381 => 103,  371 => 101,  369 => 100,  366 => 99,  365 => 98,  362 => 97,  354 => 95,  340 => 93,  338 => 92,  334 => 91,  325 => 90,  323 => 89,  313 => 88,  310 => 87,  308 => 86,  305 => 85,  300 => 82,  297 => 81,  295 => 80,  287 => 78,  285 => 77,  276 => 76,  273 => 75,  269 => 73,  257 => 72,  249 => 71,  241 => 69,  231 => 66,  223 => 63,  211 => 58,  206 => 55,  197 => 53,  189 => 52,  186 => 51,  185 => 50,  182 => 49,  174 => 48,  161 => 44,  158 => 43,  148 => 40,  145 => 35,  123 => 37,  122 => 36,  107 => 35,  100 => 30,  99 => 29,  95 => 27,  88 => 25,  69 => 21,  61 => 19,  58 => 18,  50 => 16,  45 => 14,  43 => 13,  40 => 12,  39 => 11,  32 => 7,  26 => 6,  377 => 102,  374 => 101,  364 => 97,  360 => 96,  358 => 94,  353 => 94,  352 => 90,  348 => 88,  336 => 87,  330 => 83,  316 => 78,  312 => 77,  304 => 76,  299 => 74,  296 => 73,  294 => 72,  288 => 69,  284 => 68,  280 => 67,  264 => 66,  253 => 57,  244 => 70,  238 => 52,  235 => 51,  234 => 50,  226 => 64,  222 => 62,  214 => 43,  212 => 42,  209 => 41,  201 => 39,  199 => 38,  192 => 36,  188 => 35,  183 => 34,  179 => 33,  173 => 32,  163 => 24,  157 => 42,  155 => 21,  152 => 20,  134 => 38,  119 => 17,  108 => 27,  97 => 15,  86 => 14,  75 => 13,  64 => 12,  62 => 11,  37 => 9,  33 => 8,  22 => 2,  259 => 68,  254 => 58,  243 => 59,  232 => 57,  228 => 65,  224 => 55,  218 => 51,  216 => 50,  210 => 46,  207 => 56,  193 => 44,  191 => 43,  181 => 38,  175 => 35,  172 => 34,  165 => 42,  159 => 30,  156 => 29,  153 => 37,  150 => 41,  136 => 26,  132 => 31,  130 => 24,  127 => 23,  124 => 22,  115 => 21,  106 => 34,  104 => 19,  98 => 18,  91 => 17,  81 => 24,  74 => 22,  71 => 12,  65 => 11,  57 => 17,  48 => 15,  34 => 3,  31 => 2,  19 => 1,);
    }
}
