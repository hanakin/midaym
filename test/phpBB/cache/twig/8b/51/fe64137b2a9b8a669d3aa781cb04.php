<?php

/* mcp_notes_user.html */
class __TwigTemplate_8b51fe64137b2a9b8a669d3aa781cb04 extends Twig_Template
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
        $location = "mcp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("mcp_header.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form method=\"post\" id=\"mcp\" action=\"";
        // line 3
        echo (isset($context["U_POST_ACTION"]) ? $context["U_POST_ACTION"] : null);
        echo "\">

<h2>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h2>

<div class=\"panel\">
\t<div class=\"inner\">

\t<h3>";
        // line 10
        echo (isset($context["USERNAME_FULL"]) ? $context["USERNAME_FULL"] : null);
        echo "</h3>

\t<div>
\t\t<div class=\"column1\">
\t\t\t";
        // line 14
        if ((isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null)) {
            echo "<div>";
            echo (isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null);
            echo "</div>";
        }
        // line 15
        echo "\t\t</div>

\t\t<div class=\"column2\">
\t\t\t<dl class=\"details\">
\t\t\t\t";
        // line 19
        if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("RANK");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt><dd>";
            echo (isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null);
            echo "</dd>";
        }
        // line 20
        echo "\t\t\t\t";
        if ((isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null)) {
            echo "<dt>";
            if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
                echo "&nbsp;";
            } else {
                echo $this->env->getExtension('phpbb')->lang("RANK");
                echo $this->env->getExtension('phpbb')->lang("COLON");
            }
            echo "</dt><dd>";
            echo (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null);
            echo "</dd>";
        }
        // line 21
        echo "\t\t\t\t<dt>";
        echo $this->env->getExtension('phpbb')->lang("JOINED");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt><dd>";
        echo (isset($context["JOINED"]) ? $context["JOINED"] : null);
        echo "</dd>
\t\t\t\t<dt>";
        // line 22
        echo $this->env->getExtension('phpbb')->lang("TOTAL_POSTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt><dd>";
        echo (isset($context["POSTS"]) ? $context["POSTS"] : null);
        echo "</dd>
\t\t\t\t<dt>";
        // line 23
        echo $this->env->getExtension('phpbb')->lang("WARNINGS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " </dt><dd>";
        echo (isset($context["WARNINGS"]) ? $context["WARNINGS"] : null);
        echo "</dd>
\t\t\t</dl>
\t\t</div>
\t</div>

\t</div>
</div>

<div class=\"panel\">
\t<div class=\"inner\">

\t<h3>";
        // line 34
        echo $this->env->getExtension('phpbb')->lang("ADD_FEEDBACK");
        echo "</h3>
\t<p>";
        // line 35
        echo $this->env->getExtension('phpbb')->lang("ADD_FEEDBACK_EXPLAIN");
        echo "</p>

\t<fieldset>
\t\t<textarea name=\"usernote\" id=\"usernote\" class=\"inputbox\" cols=\"40\" rows=\"3\"></textarea>
\t</fieldset>

\t</div>
</div>

<fieldset class=\"submit-buttons\">
\t";
        // line 45
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "<input type=\"reset\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t<input type=\"submit\" name=\"action[add_feedback]\" value=\"";
        // line 46
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"button1\" />
\t";
        // line 47
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>

<div class=\"panel\">
\t<div class=\"inner\">

\t<div class=\"action-bar top\">
\t\t";
        // line 54
        echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " <input type=\"search\" class=\"inputbox autowidth\" name=\"keywords\" value=\"";
        echo (isset($context["S_KEYWORDS"]) ? $context["S_KEYWORDS"] : null);
        echo "\" />&nbsp;<input type=\"submit\" class=\"button2\" name=\"filter\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("SEARCH");
        echo "\" />
\t\t<div class=\"pagination\">
\t\t\t";
        // line 56
        echo (isset($context["TOTAL_REPORTS"]) ? $context["TOTAL_REPORTS"] : null);
        echo "
\t\t\t";
        // line 57
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination"))) {
            echo " 
\t\t\t\t";
            // line 58
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->env->loadTemplate("pagination.html")->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 59
            echo "\t\t\t";
        } else {
            echo " 
\t\t\t\t &bull; ";
            // line 60
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "
\t\t\t";
        }
        // line 62
        echo "\t\t</div>
\t</div>

\t<table class=\"table1\">
\t<thead>
\t<tr>
\t\t<th>";
        // line 68
        echo $this->env->getExtension('phpbb')->lang("REPORT_BY");
        echo "</th>
\t\t<th style=\"text-align: center\">";
        // line 69
        echo $this->env->getExtension('phpbb')->lang("IP");
        echo "</th>
\t\t<th style=\"text-align: center\">";
        // line 70
        echo $this->env->getExtension('phpbb')->lang("TIME");
        echo "</th>
\t\t<th>";
        // line 71
        echo $this->env->getExtension('phpbb')->lang("ACTION_NOTE");
        echo "</th>
\t\t";
        // line 72
        if ((isset($context["S_CLEAR_ALLOWED"]) ? $context["S_CLEAR_ALLOWED"] : null)) {
            echo "<th>";
            echo $this->env->getExtension('phpbb')->lang("MARK");
            echo "</th>";
        }
        // line 73
        echo "\t</tr>
\t</thead>
\t<tbody>
\t";
        // line 76
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "usernotes"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["usernotes"]) {
            // line 77
            echo "\t";
            if (($this->getAttribute((isset($context["usernotes"]) ? $context["usernotes"] : null), "S_ROW_COUNT") % 2 == 0)) {
                echo "<tr class=\"bg1\">";
            } else {
                echo "<tr class=\"bg2\">";
            }
            // line 78
            echo "\t\t<td>";
            echo $this->getAttribute((isset($context["usernotes"]) ? $context["usernotes"] : null), "REPORT_BY");
            echo "</td>
\t\t<td style=\"text-align: center\">";
            // line 79
            echo $this->getAttribute((isset($context["usernotes"]) ? $context["usernotes"] : null), "IP");
            echo "</td>
\t\t<td style=\"text-align: center\">";
            // line 80
            echo $this->getAttribute((isset($context["usernotes"]) ? $context["usernotes"] : null), "REPORT_AT");
            echo "</td>
\t\t<td>";
            // line 81
            echo $this->getAttribute((isset($context["usernotes"]) ? $context["usernotes"] : null), "ACTION");
            echo "</td>

\t\t";
            // line 83
            if ((isset($context["S_CLEAR_ALLOWED"]) ? $context["S_CLEAR_ALLOWED"] : null)) {
                echo "<td style=\"width: 5%; text-align: center;\"><input type=\"checkbox\" name=\"marknote[]\" id=\"note-";
                echo $this->getAttribute((isset($context["usernotes"]) ? $context["usernotes"] : null), "ID");
                echo "\" value=\"";
                echo $this->getAttribute((isset($context["usernotes"]) ? $context["usernotes"] : null), "ID");
                echo "\" /></td>";
            }
            // line 84
            echo "\t</tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 86
            echo "\t<tr>
\t\t<td class=\"bg1\" colspan=\"";
            // line 87
            if ((isset($context["S_CLEAR_ALLOWED"]) ? $context["S_CLEAR_ALLOWED"] : null)) {
                echo "5";
            } else {
                echo "4";
            }
            echo "\" align=\"center\"><span class=\"gen\">";
            echo $this->env->getExtension('phpbb')->lang("NO_ENTRIES");
            echo "</span></td>
\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usernotes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "\t</tbody>
\t</table>

\t<hr />

\t<fieldset class=\"display-options\">
\t\t<label>";
        // line 96
        echo $this->env->getExtension('phpbb')->lang("DISPLAY_LOG");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " ";
        echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
        echo "</label>
\t\t<label>";
        // line 97
        echo $this->env->getExtension('phpbb')->lang("SORT_BY");
        echo " ";
        echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
        echo "</label><label>";
        echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
        echo "</label>
\t\t<input type=\"submit\" name=\"sort\" value=\"";
        // line 98
        echo $this->env->getExtension('phpbb')->lang("GO");
        echo "\" class=\"button2\" />
\t</fieldset>

\t<hr />

\t<div class=\"action-bar bottom\">
\t\t<div class=\"pagination\">
\t\t\t";
        // line 105
        echo (isset($context["TOTAL_REPORTS"]) ? $context["TOTAL_REPORTS"] : null);
        echo "
\t\t\t";
        // line 106
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination"))) {
            echo " 
\t\t\t\t";
            // line 107
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->env->loadTemplate("pagination.html")->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 108
            echo "\t\t\t";
        } else {
            echo " 
\t\t\t\t &bull; ";
            // line 109
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "
\t\t\t";
        }
        // line 111
        echo "\t\t</div>
\t</div>

\t</div>
</div>

";
        // line 117
        if ((isset($context["S_CLEAR_ALLOWED"]) ? $context["S_CLEAR_ALLOWED"] : null)) {
            // line 118
            echo "<fieldset class=\"display-actions\">
\t<input class=\"button2\" type=\"submit\" name=\"action[del_all]\" value=\"";
            // line 119
            echo $this->env->getExtension('phpbb')->lang("DELETE_ALL");
            echo "\" />
\t&nbsp;<input class=\"button1\" type=\"submit\" name=\"action[del_marked]\" value=\"";
            // line 120
            echo $this->env->getExtension('phpbb')->lang("DELETE_MARKED");
            echo "\" />
</fieldset>

<fieldset class=\"display-actions\">
\t<div><a href=\"#\" onclick=\"marklist('mcp', 'marknote', true); return false;\">";
            // line 124
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"marklist('mcp', 'marknote', false); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a></div>
</fieldset>
";
        }
        // line 127
        echo "</form>

";
        // line 129
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("mcp_footer.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_notes_user.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 129,  390 => 127,  382 => 124,  375 => 120,  371 => 119,  368 => 118,  366 => 117,  358 => 111,  353 => 109,  348 => 108,  336 => 107,  332 => 106,  328 => 105,  318 => 98,  310 => 97,  303 => 96,  295 => 90,  280 => 87,  277 => 86,  271 => 84,  263 => 83,  258 => 81,  254 => 80,  250 => 79,  245 => 78,  238 => 77,  233 => 76,  228 => 73,  222 => 72,  218 => 71,  214 => 70,  210 => 69,  206 => 68,  198 => 62,  193 => 60,  188 => 59,  176 => 58,  172 => 57,  168 => 56,  158 => 54,  148 => 47,  144 => 46,  138 => 45,  125 => 35,  121 => 34,  104 => 23,  97 => 22,  89 => 21,  75 => 20,  66 => 19,  60 => 15,  54 => 14,  47 => 10,  39 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
