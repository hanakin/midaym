<?php

/* posting_topic_review.html */
class __TwigTemplate_f55fd6872a2ea929d3de200c34e14da1 extends Twig_Template
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
<h3 id=\"review\">
\t<span class=\"right-box\"><a href=\"#review\" onclick=\"viewableArea(getElementById('topicreview'), true); var rev_text = getElementById('review').getElementsByTagName('a').item(0).firstChild; if (rev_text.data == '";
        // line 3
        echo addslashes($this->env->getExtension('phpbb')->lang("EXPAND_VIEW"));
        echo "'){rev_text.data = '";
        echo addslashes($this->env->getExtension('phpbb')->lang("COLLAPSE_VIEW"));
        echo "'; } else if (rev_text.data == '";
        echo addslashes($this->env->getExtension('phpbb')->lang("COLLAPSE_VIEW"));
        echo "'){rev_text.data = '";
        echo addslashes($this->env->getExtension('phpbb')->lang("EXPAND_VIEW"));
        echo "'};\">";
        echo $this->env->getExtension('phpbb')->lang("EXPAND_VIEW");
        echo "</a></span>
\t";
        // line 4
        echo $this->env->getExtension('phpbb')->lang("TOPIC_REVIEW");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " ";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "
</h3>

<div id=\"topicreview\">
<script type=\"text/javascript\">
// <![CDATA[
\tbbcodeEnabled = ";
        // line 10
        echo (isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null);
        echo ";
// ]]>
</script>
\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topic_review_row"));
        foreach ($context['_seq'] as $context["_key"] => $context["topic_review_row"]) {
            // line 14
            echo "
\t";
            // line 15
            if ($this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "S_IGNORE_POST")) {
                // line 16
                echo "\t<div class=\"post bg3 post-ignore\">
\t\t<div class=\"inner\">
\t\t\t";
                // line 18
                echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "L_IGNORE_POST");
                echo "
\t";
            } else {
                // line 20
                echo "\t<div class=\"post ";
                if (($this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "S_ROW_COUNT") % 2 == 1)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                if (($this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "POST_ID") == (isset($context["REPORTED_POST_ID"]) ? $context["REPORTED_POST_ID"] : null))) {
                    echo " reported";
                }
                echo "\">
\t\t<div class=\"inner\">
\t";
            }
            // line 23
            echo "
\t\t<div class=\"postbody\" id=\"pr";
            // line 24
            echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "POST_ID");
            echo "\">
\t\t\t<h3><a href=\"#pr";
            // line 25
            echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "POST_ID");
            echo "\">";
            echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "POST_SUBJECT");
            echo "</a></h3>

\t\t\t";
            // line 27
            if ((($this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "POSTER_QUOTE") && $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "DECODED_MESSAGE")) || $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "U_MCP_DETAILS"))) {
                // line 28
                echo "\t\t\t<ul class=\"post-buttons\">
\t\t\t";
                // line 29
                if ($this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "U_MCP_DETAILS")) {
                    // line 30
                    echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                    // line 31
                    echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "U_MCP_DETAILS");
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("POST_DETAILS");
                    echo "\" class=\"button icon-button info-icon\">
\t\t\t\t\t\t<span>";
                    // line 32
                    echo $this->env->getExtension('phpbb')->lang("POST_DETAILS");
                    echo "</span>
\t\t\t\t\t</a>
\t\t\t\t<li>
\t\t\t";
                }
                // line 36
                echo "\t\t\t";
                if (($this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "POSTER_QUOTE") && $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "DECODED_MESSAGE"))) {
                    // line 37
                    echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"#postingbox\" onclick=\"addquote(";
                    // line 38
                    echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "POST_ID");
                    echo ", '";
                    echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "POSTER_QUOTE");
                    echo "', '";
                    echo addslashes($this->env->getExtension('phpbb')->lang("WROTE"));
                    echo "');\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("QUOTE");
                    echo " ";
                    echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "POST_AUTHOR");
                    echo "\" class=\"button icon-button quote-icon\">
\t\t\t\t\t\t<span>";
                    // line 39
                    echo $this->env->getExtension('phpbb')->lang("QUOTE");
                    echo " ";
                    echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "POST_AUTHOR");
                    echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
                }
                // line 43
                echo "\t\t\t</ul>
\t\t\t";
            }
            // line 45
            echo "
\t\t\t<p class=\"author\">";
            // line 46
            if ((isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "MINI_POST_IMG");
            } else {
                echo "<a href=\"";
                echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "U_MINI_POST");
                echo "\">";
                echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "MINI_POST_IMG");
                echo "</a>";
            }
            echo " ";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " <strong>";
            echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "POST_AUTHOR_FULL");
            echo "</strong> &raquo; ";
            echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "POST_DATE");
            echo "  </p>
\t\t\t<div class=\"content\">";
            // line 47
            echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "MESSAGE");
            echo "</div>

\t\t\t";
            // line 49
            if ($this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "S_HAS_ATTACHMENTS")) {
                // line 50
                echo "\t\t\t\t<dl class=\"attachbox\">
\t\t\t\t\t<dt>";
                // line 51
                echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
                echo "</dt>
\t\t\t\t\t";
                // line 52
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "attachment"));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 53
                    echo "\t\t\t\t\t\t<dd>";
                    echo $this->getAttribute((isset($context["attachment"]) ? $context["attachment"] : null), "DISPLAY_ATTACHMENT");
                    echo "</dd>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "\t\t\t\t</dl>
\t\t\t";
            }
            // line 57
            echo "
\t\t\t";
            // line 58
            if (($this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "POSTER_QUOTE") && $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "DECODED_MESSAGE"))) {
                // line 59
                echo "\t\t\t\t<div id=\"message_";
                echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "POST_ID");
                echo "\" style=\"display: none;\">";
                echo $this->getAttribute((isset($context["topic_review_row"]) ? $context["topic_review_row"] : null), "DECODED_MESSAGE");
                echo "</div>
\t\t\t";
            }
            // line 61
            echo "\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_review_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "</div>

<hr />

";
        // line 69
        if ((isset($context["S_MCP_REPORT"]) ? $context["S_MCP_REPORT"] : null)) {
            // line 70
            echo "\t<p><a href=\"#report\" class=\"top2\">";
            echo $this->env->getExtension('phpbb')->lang("BACK_TO_TOP");
            echo "</a></p>
";
        } else {
            // line 72
            echo "\t<p><a href=\"#postingbox\" class=\"top2\">";
            echo $this->env->getExtension('phpbb')->lang("BACK_TO_TOP");
            echo "</a></p>
";
        }
    }

    public function getTemplateName()
    {
        return "posting_topic_review.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 72,  235 => 70,  233 => 69,  227 => 65,  210 => 59,  208 => 58,  205 => 57,  192 => 53,  184 => 51,  181 => 50,  174 => 47,  156 => 46,  153 => 45,  149 => 43,  140 => 39,  128 => 38,  125 => 37,  115 => 32,  109 => 31,  106 => 30,  104 => 29,  101 => 28,  99 => 27,  92 => 25,  85 => 23,  71 => 20,  66 => 18,  62 => 16,  60 => 15,  57 => 14,  53 => 13,  47 => 10,  35 => 4,  23 => 3,  1106 => 327,  1103 => 326,  1089 => 325,  1086 => 324,  1082 => 322,  1072 => 317,  1067 => 314,  1058 => 311,  1055 => 310,  1047 => 307,  1025 => 306,  1016 => 305,  1011 => 304,  1004 => 300,  1000 => 299,  992 => 293,  983 => 290,  980 => 289,  966 => 286,  954 => 285,  945 => 284,  940 => 283,  933 => 279,  929 => 278,  920 => 273,  903 => 272,  881 => 270,  876 => 269,  871 => 266,  869 => 265,  866 => 264,  860 => 260,  844 => 258,  826 => 257,  822 => 256,  817 => 254,  812 => 251,  810 => 250,  807 => 249,  797 => 242,  793 => 241,  789 => 240,  779 => 233,  775 => 232,  772 => 231,  769 => 230,  763 => 227,  759 => 226,  756 => 225,  754 => 224,  751 => 223,  740 => 219,  734 => 218,  724 => 217,  720 => 216,  714 => 214,  712 => 213,  707 => 211,  702 => 208,  700 => 207,  697 => 206,  694 => 204,  691 => 203,  658 => 198,  653 => 195,  651 => 194,  647 => 192,  641 => 188,  634 => 184,  627 => 181,  620 => 180,  604 => 179,  598 => 177,  590 => 173,  588 => 172,  585 => 171,  578 => 167,  570 => 164,  565 => 162,  561 => 160,  553 => 159,  548 => 158,  540 => 154,  538 => 153,  534 => 152,  529 => 149,  527 => 148,  519 => 142,  513 => 140,  496 => 139,  474 => 137,  465 => 136,  462 => 135,  460 => 134,  457 => 133,  449 => 131,  447 => 130,  444 => 129,  440 => 127,  431 => 126,  427 => 125,  424 => 124,  422 => 123,  419 => 122,  415 => 120,  406 => 118,  402 => 117,  398 => 116,  395 => 115,  393 => 114,  387 => 111,  383 => 109,  373 => 106,  370 => 105,  368 => 104,  365 => 103,  358 => 99,  353 => 98,  349 => 97,  345 => 96,  341 => 95,  334 => 92,  327 => 88,  322 => 87,  318 => 86,  314 => 85,  310 => 84,  302 => 80,  300 => 79,  297 => 78,  283 => 76,  279 => 74,  248 => 73,  218 => 61,  211 => 71,  204 => 70,  201 => 55,  199 => 68,  195 => 66,  188 => 52,  182 => 61,  179 => 49,  177 => 59,  171 => 56,  161 => 55,  152 => 51,  145 => 46,  139 => 44,  131 => 39,  127 => 38,  122 => 36,  116 => 35,  114 => 34,  108 => 31,  100 => 25,  94 => 23,  88 => 24,  86 => 20,  83 => 19,  77 => 17,  75 => 16,  65 => 15,  58 => 14,  51 => 9,  45 => 7,  39 => 5,  36 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
