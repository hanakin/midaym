<?php

/* notification_dropdown.html */
class __TwigTemplate_3324d21587bcdfa56f492c7c063d11bd extends Twig_Template
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
        return array (  165 => 42,  160 => 39,  153 => 37,  142 => 34,  138 => 33,  132 => 31,  125 => 30,  118 => 29,  112 => 28,  108 => 27,  105 => 26,  96 => 25,  84 => 23,  82 => 22,  68 => 21,  63 => 20,  57 => 17,  52 => 15,  46 => 11,  38 => 9,  36 => 8,  30 => 7,  25 => 5,  381 => 103,  371 => 101,  369 => 100,  366 => 99,  365 => 98,  362 => 97,  360 => 96,  354 => 95,  353 => 94,  340 => 93,  338 => 92,  334 => 91,  325 => 90,  323 => 89,  313 => 88,  310 => 87,  308 => 86,  305 => 85,  300 => 82,  297 => 81,  295 => 80,  287 => 78,  285 => 77,  276 => 76,  273 => 75,  269 => 73,  257 => 72,  249 => 71,  244 => 70,  241 => 69,  231 => 66,  228 => 65,  226 => 64,  223 => 63,  222 => 62,  211 => 58,  207 => 56,  206 => 55,  197 => 53,  189 => 52,  186 => 51,  185 => 50,  182 => 49,  174 => 48,  161 => 44,  158 => 43,  157 => 42,  150 => 41,  148 => 40,  145 => 35,  134 => 38,  123 => 37,  122 => 36,  107 => 35,  106 => 34,  100 => 30,  99 => 29,  95 => 27,  88 => 25,  81 => 24,  74 => 22,  69 => 21,  61 => 19,  50 => 16,  48 => 15,  45 => 14,  43 => 13,  40 => 12,  39 => 11,  32 => 7,  26 => 6,  93 => 18,  79 => 16,  77 => 15,  72 => 12,  62 => 11,  58 => 18,  54 => 16,  49 => 6,  35 => 4,  21 => 2,  19 => 1,);
    }
}
