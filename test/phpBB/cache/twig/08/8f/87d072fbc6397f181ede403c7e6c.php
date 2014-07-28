<?php

/* acp_logs.html */
class __TwigTemplate_088f87d072fbc6397f181ede403c7e6c extends Twig_Template
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
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h1>

<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("EXPLAIN");
        echo "</p>

<form id=\"list\" method=\"post\" action=\"";
        // line 9
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">

<fieldset class=\"display-options\" style=\"float: left\">
\t";
        // line 12
        echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " <input type=\"text\" name=\"keywords\" value=\"";
        echo (isset($context["S_KEYWORDS"]) ? $context["S_KEYWORDS"] : null);
        echo "\" />&nbsp;<input type=\"submit\" class=\"button2\" name=\"filter\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("SEARCH");
        echo "\" />
</fieldset>

";
        // line 15
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination"))) {
            // line 16
            echo "<div class=\"pagination top-pagination\">
\t";
            // line 17
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
            // line 18
            echo "</div>
";
        }
        // line 20
        echo "
<div class=\"clearfix\">&nbsp;</div>
<div><br style=\"clear: both;\" /></div>

";
        // line 24
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "log"))) {
            // line 25
            echo "\t<table class=\"table1 zebra-table fixed-width-table\">
\t<thead>
\t<tr>
\t\t<th style=\"width: 15%;\">";
            // line 28
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "</th>
\t\t<th style=\"width: 15%;\">";
            // line 29
            echo $this->env->getExtension('phpbb')->lang("IP");
            echo "</th>
\t\t<th style=\"width: 20%;\">";
            // line 30
            echo $this->env->getExtension('phpbb')->lang("TIME");
            echo "</th>
\t\t<th>";
            // line 31
            echo $this->env->getExtension('phpbb')->lang("ACTION");
            echo "</th>
\t\t";
            // line 32
            if ((isset($context["S_CLEARLOGS"]) ? $context["S_CLEARLOGS"] : null)) {
                // line 33
                echo "\t\t\t<th style=\"width: 50px;\">";
                echo $this->env->getExtension('phpbb')->lang("MARK");
                echo "</th>
\t\t";
            }
            // line 35
            echo "\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 38
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "log"));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 39
                echo "\t\t<tr>
\t\t\t<td>
\t\t\t\t";
                // line 41
                echo $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "USERNAME");
                echo "
\t\t\t\t";
                // line 42
                if ($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "REPORTEE_USERNAME")) {
                    // line 43
                    echo "\t\t\t\t<br />&raquo; ";
                    echo $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "REPORTEE_USERNAME");
                    echo "
\t\t\t\t";
                }
                // line 45
                echo "\t\t\t</td>
\t\t\t<td style=\"text-align: center;\">";
                // line 46
                echo $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "IP");
                echo "</td>
\t\t\t<td style=\"text-align: center;\">";
                // line 47
                echo $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "DATE");
                echo "</td>
\t\t\t<td>";
                // line 48
                echo $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "ACTION");
                if ($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "DATA")) {
                    echo "<br /><span>";
                    echo $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "DATA");
                    echo "</span>";
                }
                echo "</td>
\t\t\t";
                // line 49
                if ((isset($context["S_CLEARLOGS"]) ? $context["S_CLEARLOGS"] : null)) {
                    // line 50
                    echo "\t\t\t\t<td style=\"text-align: center;\"><input type=\"checkbox\" class=\"radio\" name=\"mark[]\" value=\"";
                    echo $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "ID");
                    echo "\" /></td>
\t\t\t";
                }
                // line 52
                echo "\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "\t</tbody>
\t</table>

";
            // line 57
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination"))) {
                // line 58
                echo "\t<div class=\"pagination\">
\t\t";
                // line 59
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
                // line 60
                echo "\t</div>
";
            }
            // line 62
            echo "
";
        } else {
            // line 64
            echo "\t<div class=\"errorbox\">
\t\t<p>";
            // line 65
            echo $this->env->getExtension('phpbb')->lang("NO_ENTRIES");
            echo "</p>
\t</div>
";
        }
        // line 68
        echo "
<fieldset class=\"display-options\">
\t";
        // line 70
        echo $this->env->getExtension('phpbb')->lang("DISPLAY_LOG");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " &nbsp;";
        echo (isset($context["S_LIMIT_DAYS"]) ? $context["S_LIMIT_DAYS"] : null);
        echo "&nbsp;";
        echo $this->env->getExtension('phpbb')->lang("SORT_BY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " ";
        echo (isset($context["S_SORT_KEY"]) ? $context["S_SORT_KEY"] : null);
        echo " ";
        echo (isset($context["S_SORT_DIR"]) ? $context["S_SORT_DIR"] : null);
        echo "
\t<input class=\"button2\" type=\"submit\" value=\"";
        // line 71
        echo $this->env->getExtension('phpbb')->lang("GO");
        echo "\" name=\"sort\" />
\t";
        // line 72
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>
<hr />

";
        // line 76
        if ((isset($context["S_SHOW_FORUMS"]) ? $context["S_SHOW_FORUMS"] : null)) {
            // line 77
            echo "\t<fieldset class=\"quick\">
\t\t";
            // line 78
            echo $this->env->getExtension('phpbb')->lang("SELECT_FORUM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <select name=\"f\" onchange=\"if(this.options[this.selectedIndex].value != -1){ this.form.submit(); }\">";
            echo (isset($context["S_FORUM_BOX"]) ? $context["S_FORUM_BOX"] : null);
            echo "</select>
\t\t<input class=\"button2\" type=\"submit\" value=\"";
            // line 79
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" />
\t</fieldset>
";
        }
        // line 82
        echo "
";
        // line 83
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "log")) && (isset($context["S_CLEARLOGS"]) ? $context["S_CLEARLOGS"] : null))) {
            // line 84
            echo "\t<fieldset class=\"quick\">
\t\t<input class=\"button2\" type=\"submit\" name=\"delall\" value=\"";
            // line 85
            echo $this->env->getExtension('phpbb')->lang("DELETE_ALL");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"submit\" name=\"delmarked\" value=\"";
            // line 86
            echo $this->env->getExtension('phpbb')->lang("DELETE_MARKED");
            echo "\" /><br />
\t\t<p class=\"small\"><a href=\"#\" onclick=\"marklist('list', 'mark', true); return false;\">";
            // line 87
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"marklist('list', 'mark', false); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a></p>
\t</fieldset>
";
        }
        // line 90
        echo "
</form>

";
        // line 93
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
        return "acp_logs.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 93,  291 => 90,  283 => 87,  279 => 86,  275 => 85,  272 => 84,  270 => 83,  267 => 82,  261 => 79,  254 => 78,  251 => 77,  249 => 76,  242 => 72,  238 => 71,  224 => 70,  220 => 68,  214 => 65,  211 => 64,  207 => 62,  203 => 60,  191 => 59,  188 => 58,  186 => 57,  181 => 54,  174 => 52,  168 => 50,  166 => 49,  157 => 48,  153 => 47,  149 => 46,  146 => 45,  140 => 43,  138 => 42,  134 => 41,  130 => 39,  126 => 38,  121 => 35,  115 => 33,  113 => 32,  109 => 31,  105 => 30,  101 => 29,  97 => 28,  92 => 25,  90 => 24,  84 => 20,  80 => 18,  68 => 17,  65 => 16,  63 => 15,  52 => 12,  46 => 9,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
